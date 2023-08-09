    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons-min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
     <!-- <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" defer></script>
     <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
     OneSignal.init({
          appId: "524c15cf-c4d6-4482-9fd0-3d2e7a9133f1",
        });
      });
  OneSignal.push(function() {
  OneSignal.on('subscriptionChange', function(isSubscribed) {
    if (isSubscribed) {
        
      OneSignal.getUserId(function(userId) {
      });
    }else{
        console.log("Thanks a lot!! unsubscribed");
    }
  });
});
   </script> -->
   <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
<script>
     
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    // Initialize OneSignal
    OneSignal.init({
      appId: "524c15cf-c4d6-4482-9fd0-3d2e7a9133f1", // Replace with your actual OneSignal App ID
    });

//   OneSignal.isPushNotificationsEnabled(function(isEnabled) {
//     if (isEnabled) {
//       console.log('User is subscribed to push notifications.');
//     } else {
//       console.log('User is not subscribed to push notifications.');
//       OneSignal.showSlidedownPrompt();
//     }
    
//   });


    // Subscribe or Check Player Existence
    OneSignal.on('subscriptionChange', function(isSubscribed) {
      if (isSubscribed) {
        OneSignal.getUserId(function(userId) {
          // User is subscribed, you can perform actions with the user's ID
          console.log('User ID:', userId);
        });
      } else {
        // User is unsubscribed, generate UUID and add player if not exists
        var uuid = generateUUID(); // Generate a UUID
        ensurePlayerExists(uuid); // Call function to add player if not exists
      }
    });
  });

  // Function to generate a UUID (v4)
  function generateUUID() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      var r = Math.random() * 16 | 0,
          v = c == 'x' ? r : (r & 0x3 | 0x8);
      return v.toString(16);
    });
  }

  async function ensurePlayerExists(userId) {
    try {
      // Check if the player exists using the OneSignal API
      const response = await fetch(`https://onesignal.com/api/v1/players/${userId}`, {
        method: 'GET',
        headers: {
          Authorization: 'Basic MjYzZTM0MWMtMjliNC00MTZiLTg1MzktMjU1MWI2YjY4MDE5'
        }
      });

      if (response.status === 404) {
        // Player does not exist, add them to OneSignal
        const addResponse = await fetch('https://onesignal.com/api/v1/players', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            Authorization: 'Basic MjYzZTM0MWMtMjliNC00MTZiLTg1MzktMjU1MWI2YjY4MDE5'
          },
          body: JSON.stringify({
            app_id: '524c15cf-c4d6-4482-9fd0-3d2e7a9133f1',
            identifier: userId, // Use the generated UUID as the identifier
            // Additional player data if needed
          })
        });

        const addData = await addResponse.json();
        console.log('Player added:', addData);
      } else if (response.status === 200) {
        // Player exists
        const playerData = await response.json();
        console.log('Player exists:', playerData);
      } else {
        console.error('Failed to fetch player data:', response.statusText);
      }
    } catch (error) {
      console.error('Error:', error);
    }
  }
</script>
    