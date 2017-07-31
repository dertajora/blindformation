@extends('layout.main')
@section('content')
  
    <!-- /Section: intro -->

    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                    <div class="section-heading">
                    <h2>Tentang</h2>
                    <i class="fa fa-2x fa-angle-down"></i>
                    <p>Blindformation mencoba membantu para penyandang disabilitas khususnya tunanetra agar dapat mmengetahui informasi seputar pilkada dan profil kandidat peserta Pilkada 2015 dengan mudah. </p>
                    </div>
                    <br><br><br>
                    Catatan : Anda akan mendengarkan ucapan selamat datang jika sistem berjalan sebagaimana mestinya, jika tidak coba refresh atau ganti browser atau tunggu beberapa saat. Kami sangat menyarankan anda untuk menggunakan browser Mozilla Firefox agar sistem dapat berjalan optimal<br><br>
                    <center>
                    <div style="width:300px;vertical-align:top;font-family: Arial;font-size:9pt;line-height: normal">
                        Powered by : <br><Br>
<a rel="license" href="//responsivevoice.org/"><img title="ResponsiveVoice Text To Speech" src="https://responsivevoice.org/wp-content/uploads/2014/08/120x31.png" style="float:left;padding-right:2px" /></a><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"><a href="//responsivevoice.org/" target="_blank" title="ResponsiveVoice Text To Speech">ResponsiveVoice</a></span> used under <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License">Non-Commercial License</a></div>
<div style="clear:both;">&nbsp;</div></center>
                </div>
            </div>
            </div>
        </div>
        
        
    </section>
    <!-- /Section: about -->
    

    <!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
        
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Keunggulan</h2>
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
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="img/icons/transport342.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Dual Mode</h5>
                        <p>Sistem ini dapat digunakan oleh calon pemilih tunanetra secara mandiri atau dengan pendampingan</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="img/icons/talk25.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Logat Indonesia</h5>
                        <p>Engine pengucapan pada sistem ini  menggunakan logat Indonesia sehingga diharapkan mudah dimengerti oleh pengguna</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="img/icons/speaker100.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Panduan Suara</h5>
                        <p>Sistem ini dilengkapi dengan panduan penggunaan berbasis suara di setiap langkahnya</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="img/icons/ipad45.png" alt="" />
                    </div>
                    <div class="service-desc">
                        <h5>Multiplatform*</h5>
                        <p>Sistem ini berbasis web sehingga dapat digunakan secara lintas platform kapanpun dan dimanapun</p>
                    </div>
                </div>
                </div>
            </div>
        </div>      
        </div>
    </section>
    <!-- /Section: services -->

@endsection

@section('script_bawah')

<script>



responsiveVoice.OnVoiceReady = function() {
  console.log("speech time?");
   responsiveVoice.speak('Selamat datang di aplikasi informasi Pilkada dan pengenalan kandidat peserta pilkada 2015 untuk tunanetra ','Indonesian Female');
      // responsiveVoice.speak('Hello World','UK English Female')

};
</script>
@endsection