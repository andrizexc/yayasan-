<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap-4.css') }}" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">

    <style type="text/css">
        @font-face {
            font-family: "poppins";
            src: url('{{ asset('font/Poppins-Regular.ttf') }}');
        }

        @font-face {
            font-family: "poppins-light";
            src: url('{{ asset('font/Poppins-Light.ttf') }}');
        }

        @font-face {
            font-family: "poppins-semibold";
            src: url('{{ asset('font/Poppins-SemiBold.ttf') }}');
        }

        @font-face {
            font-family: "poppins-extrabold";
            src: url('{{ asset('font/Poppins-ExtraBold.ttf') }}');
        }

        @font-face {
            font-family: "poppins-italic";
            src: url('{{ asset('font/Poppins-Italic.ttf') }}');
        }

        @font-face {
            font-family: "poppins-medium";
            src: url('{{ asset('font/Poppins-Medium.ttf') }}');
        }
    </style>
</head>

<body>
    <div {{strpos(Request::route()->getName(), 'addGroup.') === 0 ? '' : "id=app"}}>
        @include('layouts.navbar')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/active.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/option.js') }}"></script>
    @yield('js')
    @if (!Auth::check())
    <script>
        $(function(){
            $.ajax({
                type: 'post',
                url: "{{ url('/resp/footer') }}",
                data: {_token: '{{ csrf_token() }}'},
                success: resp => {
                    var g = resp.gallery,
                        a = resp.article,
                        s = resp.schedule,
                        url = '{{ url("/") }}/'
                    
                    for(var i = 0; i < g.length; i++) $('#footer-gallery-js').append(`
                        <div class="col-4 col-md-4 glrys">
                            <a href="{{ url('/gallery') }}">
                                <img src="${g[i].path}">
                            </a>
                        </div>
                    `)
                    for(var i = 0; i < a.length; i++) $('#footer-article-js').append(`
                        <li><a href="${url+'articles/'+a[i].id}">
                            <i class="far fa-dot-circle"></i>${a[i].title}</a>
                        </li>
                    `)
                    for(var i = 0; i < s.length; i++){
                        var date = new Date(s[i].schedule)
                        $('#footer-schedule-js').append(`
                            <li>
                                <a class="row justify-content-md-center" href="${url+'schedules/'+s[i].id}">
                                    <div class="col-6 col-md-4 img-agenda">
                                        <img src="${s[i].path}">
                                    </div>
                                    <div class="col-6 col-md-7 ket-agenda">
                                        <p class="tgl-agenda">
                                            ${date.toLocaleDateString('id-ID', {dateStyle: 'long'})}
                                        </p>
                                        <p class="desc-agenda">${s[i].title}</p>
                                    </div>
                                </a>
                            </li>
                        `)
                    }
                },
                error: err => console.error(err.response)
            })
        })
    </script>
    @endif
    @if (Auth::check() && Auth::user()->role === 1)
    <script>
        $(function(){
            $.ajax({
                type: 'post',
                url: "{{ url('/home/notification/get') }}",
                data: {_token: '{{ csrf_token() }}'},
                success: resp => {
                    if(resp > 0) $('#notif-master').html(`Notification <span class='badge badge-primary'>${resp > 9 ? '9+' : resp}</span> `)
                }
            })
        })
    </script>
    @endif
</body>

</html>