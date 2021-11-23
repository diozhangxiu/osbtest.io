<!DOCTYPE html>
<html class="no-js" lang="id">
                            
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="expires" content="0" />
                                
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>@yield('title')</title>
        <meta name="keywords" content="gym, gym near me, fitness near me, fitness, home gym, crossfit near me, fitness center, fitness membership,
                                        tempat gym jakarta, tempat fitness, aerobic, zumba, fitness factory, muscle and fitness, instructor,
                                        health club, cheap gyms near me, gym murah, city fitness, workout classes near me, leg day workout,
                                        gyms around me, best gym near me, mens fitness, fitness gym, muscle">
        <meta name="description" content="Gym Fitness dengan harga paling terjangkau. Hanya 202 ribu/bulan! selama periode promo berlangsung">
        <meta name="author" content=" Osbondgym">
        <meta property="og:url" content="https://osbondgym.com/">
        <meta property="og:title" content=" Osbondgym">
        <meta property="og:image" content="https://osbondgym.com/images/bg-img-thumbnail/bassura.png">
        <meta property="og:description" content="Gym Fitness dengan harga paling terjangkau. Hanya 202 ribu/bulan! selama periode promo berlangsung">
        <meta property="og:type" content="article">
        <meta name="image" content="images/bg-img-thumbnail/bassura.png">

        <!-- style -->
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')

    </head>
                            
    <body class="body-about-us body-article-tips body-fitness-tips">

        <div id="wrapper">

            <!-- navbar -->
            @include('includes.navbar')

            <!-- content -->
            @yield('content')

            <!-- footer -->
            @include('includes.footer')

        </div>

        <!-- script -->
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
    </body>
                            
</html>