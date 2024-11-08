<head>
    <meta charset="utf-8" />
    <title>{{ $generals->title . " - " . $judul }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Multipurpose Creative Landing Page Template" />
    <meta name="keywords" content="Bootstrap 4, SASS, Clean, Multipurpose, Responsive, Modern" />
    <meta content="Shreethemes" name="author" />
    <meta name="description" content="{{ Seo::get('description') }}" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Magnific -->
    <link href="{{ asset('front/assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('front/assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}" />
    <!-- Main Css -->
    <!-- Custom Css -->
    @include('laravel-seo::meta-facebook')
    @include('laravel-seo::meta-twitter')

    @yield('script-head')
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('front/assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone={{ $generals->whatsapp }}&text=Hello ..." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"  aria-hidden="true"></i>
        </a>
    
        <style>
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:70px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                font-size:30px;
                /* box-shadow: 2px 2px 3px #999; */
                z-index:100;
            }
    
            .my-float{
                margin-top:16px;
            }
        </style>

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CLG6D7Z4PL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CLG6D7Z4PL');
</script>
</head>