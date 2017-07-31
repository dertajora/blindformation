<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blindformation merupakan aplikasi yang dapat memberikan informasi seputar pilkada dan profil kandidat Pilkada 2015 kepada tunanetra">
    <meta name="author" content="Derta Isyajora Rakhman">

    <title>Blindformation, Aplikasi Informasi Pilkada untuk Tunanetra</title>
    <link rel="image_src" href="{{asset('img/team/info.jpg')}}" / >
    <link rel="image_src" href="{{asset('img/team/pendamping.jpg')}}" / >
    <link rel="image_src" href="{{asset('img/team/profil.jpg')}}" / >
    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"> -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
     <script src="{{asset('js/responsivevoice.js')}}"></script>
    <!-- Fonts -->

    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css" rel="stylesheet')}}" />
    
    <!-- Squad theme CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('color/default.css')}}" rel="stylesheet">
    @yield('script_atas')

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70115045-1', 'auto');
  ga('send', 'pageview');

  </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>BLINDFORMATION</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index">Beranda</a></li>
        
        
        <li><a href="panduan">Panduan</a></li>
        <li><a href="dokumentasi">Dokumentasi</a></li>
        <li><a href="aplikasi">Aplikasi</a></li>
     <li><a href="#contact">Kontak</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  @yield('content')

    

    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Kontak</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
    <div class="row">
       
        
        <div class="col-lg-12">
            <div class="widget-contact">
                <h5>Derta Isyajora Rakhman</h5>
                
                <address>
                  <strong> Program Studi Ilmu Komputer</strong><br>
                 <br>
                  Universitas Gadjah Mada<br>
                  Yogyakarta<br>
                 
                </address>

                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#">derta.isyajora@gmail.com</a>
                </address>  
                <address>
                  <strong>Social Media</strong><br>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/derta.rakhman" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/Dertajora" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/pub/derta-isyajora/50/489/201" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            
                        </ul>   
                </address>                  
            
            </div>  
        </div>
        <center>
        <div style="width:300px;vertical-align:top;font-family: Arial;font-size:9pt;line-height: normal">
                        Powered by : <br><Br>
<a rel="license" href="//responsivevoice.org/"><img title="ResponsiveVoice Text To Speech" src="https://responsivevoice.org/wp-content/uploads/2014/08/120x31.png" style="float:left;padding-right:2px" /></a><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"><a href="//responsivevoice.org/" target="_blank" title="ResponsiveVoice Text To Speech">ResponsiveVoice</a></span> used under <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License">Non-Commercial License</a></div>
    </div></center>  

        </div>
    </section>
    <!-- /Section: contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="wow shake" data-wow-delay="0.4s">
                    <div class="page-scroll marginbot-30">
                        <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
                    </div>
                    </div>
                    <p>&copy;Copyright 2015 - Derta Isyajora. All rights reserved. 
                        Theme by <a href="http://bootstraptaste.com"><b>Bootstrap Themes</b></a></p>
                        <p><i>"Sebaik-baik manusia adalah yang bermanfaat bagi orang lain ( HR. Ahmad, Thabrani)"</i></p>

                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
                </div>
            </div>  
        </div>
    </footer>

    <!-- Core JavaScript Files -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script> 
    <script src="{{asset('js/jquery.scrollTo.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('script_bawah')
</body>

</html>
