<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
</head>
<body>
    @include('layout.header')
    @yield('content')

    <script type="text-javascript">
        $('.date').datepicker({
            format: 'yyyy/mm/dd',
            autoclose: 'true'
        });
    </script>



    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>