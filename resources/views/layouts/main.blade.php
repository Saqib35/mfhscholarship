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
            
            if(email=="")
            {
                Swal.fire(
                'Error',
                'Add E-mail Address',
                'error'
                );
                return "";
            }

            $.ajax({
                type: 'POST',
                url: '{{ route("subscribe") }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'email': email
                },
                success: function (response) {
                    Swal.fire(
                    'Thank You',
                    'Subcribled Successfully',
                    'success'
                    );
                },
                error: function (xhr) {
                    Swal.fire(
                    'Already Subcribled',
                    'Thank you',
                    'error'
                    );
                }
            });
        });
    });
</script>

</html>