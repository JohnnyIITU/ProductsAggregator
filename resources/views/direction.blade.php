{{--@extends('layouts.app')--}}
{{--@section('content')--}}
<html>
    <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.js"
                xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"></script>
        {!! $map['js']!!}
    </head>
    <body>
    <div id="google-maps-direction"></div>

    {!! $map['html'] !!}
    </body>
    <script>
        @if(\Illuminate\Support\Facades\Session::get('position', 0) == 0)
        window.onload = a;
        function a() {
            $.ajax({
                dataType: 'json',
                type: 'post',
                cache: false,
                url: '/savePosition',
                data: {
                    _token: '{{csrf_token()}}',
                    pos: '43.235845, 76.881560'
                },
                success: function () {
                    location.reload();
                }
            });
        }
        @endif
    </script>

</html>
{{--@endsection--}}