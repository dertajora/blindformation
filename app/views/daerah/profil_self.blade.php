@extends('layout.daerah')
@section('content')
    <?php   if ($tipe_daerah == 1) {
               $daerah = "Kabupaten";
            }else{
                $daerah = "Kota";
                $judul = explode("_", $kota);
                $kota = $judul[0];
            } 
            if ($kota == "pml") {
                $kota = "Pemalang";
            }?>

    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h3>Daftar Kandidat {{$daerah}} {{$kota}}</h3>
                    <i class="fa fa-2x fa-angle-down"></i>

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
          <center>
            <label for="name">
                                Silahkan Pilih Calon</label>
                            <input value="" type="text" class="form-control" id="edValue" placeholder="Pilihan profil calon..." required="required" onKeyPress="pilihMode()" onKeyUp="pilihMode()" autofocus  />
                            
                            <br>
      
        </center> 
               

            <?php if ($jumlah ==2) { ?>
            <div class="col-xs-6 col-sm-3 col-md-3">
            </div>
          <?php }?>   

            <?php $i=1;?> 
            
            @foreach ($calons as $row)
            
            <div class="col-xs-6 col-sm-3 col-md-3">
              
                    
                
               <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No {{$i}}</h5>
                        <p class="subtitle">{{ucwords($row->nama)}} </p>
                        <div class="avatar"><img src="{{asset('img/team/'.$i.'.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                  
                </div>
                
            </div>
            <?php $i = $i+1;?>
            @endforeach
           
            
        </div>      
        </div>
        </center>      
        </div>
    </section>
    <!-- /Section: about -->

@endsection

@section('script_bawah')
 <script>

    function pilihMode()
    {
        var edValue = document.getElementById("edValue");
        var s = edValue.value;
        var sip = edValue.value;
        var pilihan = sip.substr(sip.length-1);
        
        <?php $j=1;?>
        @foreach ($calons as $row)
        <?php 
        $cek = $row->profil;
        if($cek == "0" ){
            $profil = "";
            }else{
            $profil = $row->profil;    
            }; ?>
        <?php if ($j==1) { ?>
        if ( pilihan == "1"){
        
        
        responsiveVoice.speak('Pasangan nomor urut satu,  {{$row->nama}},{{$profil}}, Visi pasangan ini adalah {{$row->visi}}, untuk mewujudkan visi tersebut pasangan ini memiliki misi sebagai berikut, {{$row->misi}}  ','Indonesian Female');

       
        
        }  
        <?php }else{ ?>

        else if (pilihan == "{{$j}}") {
        
        
        responsiveVoice.speak('Pasangan nomor urut {{$j}}, {{$row->nama}}, {{$profil}},Visi pasangan ini adalah {{$row->visi}},  untuk mewujudkan visi tersebut pasangan ini memiliki misi sebagai berikut, {{$row->misi}} ', 'Indonesian Female');

        }  
        <?php }?>
        <?php $j=$j+1; ?>
        
        @endforeach

        else if (pilihan == "{{$j}}") {
        
         
          window.location.href = "pilihanmenu"

         }else{
           
            <?php if ($jumlah==2) { ?>
                  responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali.  TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk kembali ke halaman sebelumnya','Indonesian Female');
            <?php } elseif ($jumlah == 3) { ?>
                  responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali.  TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk mengetahui profil pasangan nomor 3, tekan 4 untuk kembali ke halaman sebelumnya','Indonesian Female');
  
            <?php } elseif ($jumlah == 4) { ?>
                  responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2,  TEKAN 3 untuk mengetahui profil pasangan nomor 3, TEKAN 4 untuk mengetahui profil pasangan nomor 4, tekan 5 untuk kembali ke halaman sebelumnya','Indonesian Female');
            <?php } ?>
            
            // responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, tekan 3 untuk  kembali ke halaman pemilihan informasi','Indonesian Female');
         }
        }


   
    <?php if ($jumlah==2) { ?>
        responsiveVoice.OnVoiceReady = function() {
        console.log("speech time?");
        responsiveVoice.speak('Selamat datang di halaman daftar kandidat pada Pilkada {{$daerah}} {{$kota}}  2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk kembali ke halaman sebelumnya','Indonesian Female');
  
        };

    <?php } elseif ($jumlah == 3) { ?>
        responsiveVoice.OnVoiceReady = function() {
        console.log("speech time?");
        responsiveVoice.speak('Selamat datang di halaman daftar kandidat pada Pilkada {{$daerah}}  {{$kota}}  2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk mengetahui profil pasangan nomor 3, tekan 4 untuk kembali ke halaman sebelumnya','Indonesian Female');
        };
       
    <?php } elseif ($jumlah == 4) { ?>
          responsiveVoice.OnVoiceReady = function() {
          console.log("speech time?");
          responsiveVoice.speak('Selamat datang di halaman daftar kandidat pada Pilkada {{$daerah}}  {{$kota}} 2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2,  TEKAN 3 untuk mengetahui profil pasangan nomor 3, TEKAN 4 untuk mengetahui profil pasangan nomor 4, tekan 5 untuk kembali ke halaman sebelumnya','Indonesian Female');
          };  
    <?php } ?>

   


    </script>
@endsection