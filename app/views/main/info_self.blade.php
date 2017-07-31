<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blindformation</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ URL::asset('css/bootstrap.min.css" rel="stylesheet') }}" type="text/css">
     <script src="https://code.responsivevoice.org/1.3/responsivevoice.js"></script>
    <!-- Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
    
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

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" onload="selamatDatang()">
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
        <li class="active"><a href="{{URL::to('index');}}">Beranda</a></li>
        
        
        <li><a href="{{URL::to('panduan');}}">Panduan</a></li>
        <li><a href="{{URL::to('dokumentasi');}}">Dokumentasi</a></li>
        <li><a href="{{URL::to('aplikasi');}}">Aplikasi</a></li>
     <li><a href="#contact">Kontak</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

     <!-- Section: about -->
    <section id="about" class="home-section text-center">
        
        <div class="container">

        <div class="row">
            <h2>Info Pilkada untuk Tunanetra</h2>
            <div class="col-lg-2 col-lg-offset-5">
                    
                    
                <hr class="marginbot-50">
            </div>
        </div>
        <center>
            <label for="name">
                                </label>
                            <input value="" type="text" class="form-control" id="edValue" placeholder="Silahkan masukkan pilihan informasi..." required="required" onKeyPress="pilihMode()" onKeyUp="pilihMode()" autofocus  />
                           
                            <br>
        <div class="row">
          
               

            <div class="col-xs-6 col-sm-3 col-md-3">
                
            </div>

           
        </div>      
        </div>
        </center>
    </section>
    <!-- /Section: about -->

    

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
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.easing.min.js')}}"></script> 
    <script src="{{URL::asset('js/jquery.scrollTo.js')}}"></script>
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('js/custom.js')}}"></script>
    
<script>

function pilihMode()
    {
        var edValue = document.getElementById("edValue");
        var s = edValue.value;
        var sip = edValue.value;
        var pilihan = sip.substr(sip.length-1);
        

        if ( pilihan == 1){
        
       responsiveVoice.speak('Pilkada serentak akan diadakan pada tanggal 9 Desember 2015','Indonesian Female');

        }  else if (pilihan == "2") {
       
       responsiveVoice.speak('Berikut beberapa istilah istilah yang ada dalam Pilkada, satu, Banwaslu, Badan Pengawas Pemilu, dua, Panwaslu, Panitia Pengawas Pemilu, tiga, Dapil, Daerah Pemilihan, empat, TPS, Tempat Pemungutan Suara, lima, DPT, Daftar Pemilih Tetap, Enam, Parpol, Partai Politik.','Indonesian Female');

                

         } else if (pilihan == "3") {
       
      responsiveVoice.speak('Berikut merupakan persyaratan pemilih pada Pilkada 2015, satu, WNI yang berusia 17 tahun atau lebih atau sudah atau pernah kawin, dua, Tidak sedang terganggu jiwanya atau ingatannya,tiga, Terdaftar sebagai pemilih, empat, bukan anggota TNI atau Polri, lima tidak sedang dicabut hak pilihnya, enam, terdaftar di DPT, tujuh, khusus untuk pilkada, calon pemilih harus berdomisili sekurang-kurangnya 6 bulan didaerah yang bersangkutan ','Indonesian Female');

         } else if (pilihan == "4") {
       
      responsiveVoice.speak('Berikut merupakan cara memilih pada Pilkada 2015, satu, "Datang" ke Tempat Pemungutan Suara atau TPS, dua "Daftar", yakni pemilih mendaftarkan dirinya di TPS sebelum mendapatkan kertas suara,tiga, "Dicoblos", pemilih mencoblos surat suara yang ada, empat, "Dimasukkan", kemudian masukkan surat suara ke dalam kotak suara, terakhir, "Dicelup", yakni pemilih menandai jarinya dengan mencelupkan ke dalam tinta','Indonesian Female');

         } else if (pilihan == "5") {
       
        responsiveVoice.speak('Berikut merupakan tips memilih kandidat pada pilkada 2015, satu, ketahui visi, misi dan program kandidat, dua, kenali riwayat hidup calon, tiga, pastikan kembali bahwa pilihan anda benar, empat, pastikan anda memberikan suara dengan benar, kelima, jika mampu, pastikan proses penghitungan suara berlangsung dengan jujur dan adil ','Indonesian Female');

         }else if (pilihan == "6") {
       
       responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, tekan, 1 jika anda ingin mengetahui jadwal Pilkada serentak, tekan, dua, jika ingin mengetahui istilah-istilah dalam pilkada, tekan, tiga, jika anda ingin mengetahui persyaratan pemilih pada Pilkada 2015, tekan, empat jika anda ingin mencari tahu bagaimana cara memilih dalam pilkada, tekan, lima jika anda ingin mendapatkan tips-tips mengenai Pilkada, tekan, enam, untuk mengulangi pilihan info yang tersedia, tekan, tujuh untuk kembali ke pilihan menu','Indonesian Female');

         }else if (pilihan == "7") {
       
        window.location.href = "pilihanmenu";

         } else{
           
             
             responsiveVoice.speak('Opsi yang anda pilih salah, Silahkan ulangi kembali. tekan, 1 jika anda ingin mengetahui jadwal Pilkada serentak, tekan, dua, jika ingin mengetahui istilah-istilah dalam pilkada, tekan, tiga, jika anda ingin mengetahui persyaratan pemilih pada Pilkada 2015, tekan, empat jika anda ingin mencari tahu bagaimana cara memilih dalam pilkada, tekan, lima jika anda ingin mendapatkan tips-tips mengenai Pilkada, tekan, enam, untuk mengulangi pilihan info yang tersedia, tekan, tujuh untuk kembali ke pilihan menu informasi','Indonesian Female');
         }
        
    
        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
        }


        function selamatDatang() {
    
        responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, tekan, 1 jika anda ingin mengetahui jadwal Pilkada serentak, tekan, dua, jika ingin mengetahui istilah-istilah dalam pilkada, tekan, tiga, jika anda ingin mengetahui persyaratan pemilih pada Pilkada 2015, tekan, empat jika anda ingin mencari tahu bagaimana cara memilih dalam pilkada, tekan, lima jika anda ingin mendapatkan tips-tips mengenai Pilkada, tekan, enam, untuk mengulangi pilihan info yang tersedia, tekan, tujuh untuk kembali ke menu pemilihan informasi','Indonesian Female');
        }
</script>
</body>

</html>
