@extends('layout.daerah')
@section('content')

    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        
        <div class="container">

        <div class="row">
            <h2>Pilihan Menu</h2>
            <div class="col-lg-2 col-lg-offset-5">
                    
                    
                <hr class="marginbot-50">
                  <?php $url = $kota?>
                    <a id="tombol" value="" href="{{url($url)}}"><div class="btn btn-skin pull-center col-md-12">Kembali</div></a><br>
                  <Br><Br>
            </div>
        </div>
        <center>
           
        <div class="row">
          
                

            <div class="col-xs-6 col-sm-3 col-md-3">
                
            </div>

            <a href="info"><div class="col-xs-6 col-sm-3 col-md-3">
                
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>INFO PILKADA</h5>
                        <!-- <p class="subtitle">Bersama Pendamping</p> -->
                        <div class="avatar"><img src="{{asset('img/team/info.jpg')}}" alt="" class="img-responsive" /></div>

                    </div>
                </div>
                
            </div></a>
            <a href="profil">
            <div class="col-xs-6 col-sm-3 col-md-3">
                
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>PROFIL KANDIDAT</h5>
                        <!-- <p class="subtitle">Menggunakan Sendiri</p> -->
                        <div class="avatar"><img src="{{asset('img/team/profil.jpg')}}"  alt="" class="img-responsive" /></div>

                    </div>
                
                </div>
            </div>
            </a>
        </div>      
        </div>
        </center>
    </section>
    <!-- /Section: about -->
    
@endsection

@section('script_bawah')

<script>

responsiveVoice.OnVoiceReady = function() {
  console.log("speech time?");
 
  responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, terdapat dua pilihan menu, satu, info-info mengenai Pilkada, dua, profil kandidat peserta pilkada','Indonesian Female');

};


</script>
@endsection