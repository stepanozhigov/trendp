<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Квиз опрос. Trend Pro</title>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/general/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/general/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/general/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/general/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/general/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/general/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="/img/general/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/img/general/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/x-icon" href="/img/general/favicon.ico">
    <meta name="application-name" content="TREND PRO"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="/img/general/mstile-144x144.png"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">
    <? $visit = new App\Visit; ?>
</head>
<body>
    
    <div id="app">
        <quiz-promo></quiz-promo>
    </div>

    <script src="/js/quiz-promo.js"></script>
    <!-- Yandex.Metrika counter --> 
    <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(44460466, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44460466" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-85472546-6');
    </script>
    <!-- /Global site tag (gtag.js) - Google Analytics -->
    @include('frontend.svg_sprite')
</body>
</html>