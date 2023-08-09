<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('includes.cssLinks')
    
    @yield('css')


</head>
<body>
    @include('includes.header')

    
    @yield('main')



    @include ('includes.footer')
    @include ('includes.mobile-menu')
    @include ('includes.jsLinks')

    @yield('js')
    

</body>


<script>
    $(document).ready(function () {
        $('#subCrible').submit(function (e) {
            e.preventDefault();
           
            var email = $('#mc-email').val();
           
            $.ajax({
                type: 'POST',
                url: '{{ route("subscribe") }}',
                // dataType: 'json', // The expected data type

                data: {
                    '_token': '{{ csrf_token() }}',
                    'email': email
                },
                success: function (response) {
                    alert(432432432);
                    $('#subscribeMessage').text(response.message);
                },
                error: function (xhr) {
                    alert(999999999);
                    $('#subscribeMessage').text(xhr.responseJSON.errors.email[0]);
                }
            });
        });
    });
</script>

</html>