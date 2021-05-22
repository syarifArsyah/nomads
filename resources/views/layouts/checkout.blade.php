
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('includes.root.style')
    
    <title>@yield('title')</title>
</head>
<body>
    
    @include('includes.root.navbar_checkout')

    @yield('content')

    @include('includes.root.footer')

    @include('includes.root.script')

    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                uiLibrary :'bootstrap4',
                format :'yyyy-mm-dd',
                icons :{
                    rightIcon : '<img src="{{url('frontend/images/ic_doe.png')}}" />'
                }
            })
        });
    </script>
</body>
</html>