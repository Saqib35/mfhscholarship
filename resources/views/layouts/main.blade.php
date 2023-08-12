<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="o8RVhN02Sz7PmPdBG1ciz3Gtem3QAp2wBgA-AS81MkQ" />
    @include('includes.cssLinks')
    @yield('css')
    

    
    <style>

.pagination {
    justify-content: center;
    margin-top: 20px;
}

.pagination .page-item {
    display: inline-block;
    margin: 0 2px;
}

.pagination .page-item.disabled .page-link {
    background-color: transparent;
    border-color: #ddd;
    color: #777;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .page-link {
    padding: 6px 12px;
    border: 1px solid #ddd;
    color: #333;
    background-color: #fff;
}

.pagination .page-link:hover {
    background-color: #eee;
}
.hidden{
    display:none;
}

</style>

 

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