@extends('layout.daerah')
@section('content')


    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Daftar Kandidat Kabupaten Sleman </h2>
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
               

            <div class="col-xs-6 col-sm-3 col-md-3">
                
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3">
                
               <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 1</h5>
                        <p class="subtitle">Yuni Satria Rahayu <br>& Danang Wicaksana Sulistya </p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                  
                </div>
                
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3">
               
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Sri Purnomo <br>& Sri Muslimatun</p>
                        <div class="avatar"><img src="{{asset('img/team/2.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                   
                </div>
                
            </div>
            
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
        

        if ( pilihan == "1"){
        // document.getElementById("message").innerHTML = "sleman";
        
        responsiveVoice.speak('Pasangan nomor urut satu,  Yuni Satria Rahayu dan Danang Wicaksana Sulistya, Pasangan ini mendapatkan dukungan parpol dari PDI Perjuangan dan Gerindra., Visi pasangan ini adalah "Terwujudnya kesejahteraan rakyat Sleman yang modern dan dinamis berbasis budaya lokal", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu,   Meningkatkan kualitas kinerja pemerintah daerah guna mengoptimalkan pelayanan kepada rakyat,  dua, Meningkatkan pendapatan dan kualitas hidup rakyat secara merata, tiga, Meningkatkan jumlah ketersediaan dan kualitas pelayanan umum, empat,  Mengurangi kemiskinan,   lima,  Meningkatkan kesempatan belajar serta mengembangkan pendidikan formal, informal, dan non formal, enam, Melestarikan dan mengembangkan nilai-nilai tradisi, budaya, dan kesenian Sleman,  Mengembangkan nilai-nilai keharmonisan dan pola asah-asih-asuh dalam kehidupan masyarakat ','Indonesian Female');

        // window.location.href = "http://localhost/blindpick/theme/bantul_self.html"

        }  else if (pilihan == "2") {
        // document.getElementById("message").innerHTML = "geka";
        
        responsiveVoice.speak('Pasangan nomor urut dua,  Sri Purnomo dan Sri Muslimatun, Pasangan ini mendapatkan dukungan parpol dari Partai amanat nasional, Nasdem, Partai Golkar, PKB, dan Partai Demokrat, Visi pasangan ini adalah "Terwujudnya masyarakat sleman yang lebih sejahtera,  mandiri, berbudaya dan terintegrasikannya sistem e-goverment menuju smart regency atau kabupaten pintar pada tahun 2020", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Meningkatkan tata kelola pemerintahan yang baik melalui peningkatan kualitas birokrasi yang responsif dalam memberikan pelayanan bagi masyarakat,  dua, Meningkatkan pelayanan pendidikan dan kesehatan yang berkualitas dan menjangkau bagi semua lapisan masyarakat, tiga, Meningkatkan penguatan sistem  ekonomi kerakyatan,  aksesibilitas dan kemampuan  ekonomi rakyat , dan penanggulangan kemiskinan, empat, Memantapkan dan meningkatkan kualitas pengelolaan prasarana dan sarana, sumberdaya alam, penataan ruang dan lingkungan hidup,   lima,  Meningkatkan kualitas budaya masyarakat dan kesetaraan gender yang proporsional, enam, Meningkatkan aplikasi dan integrasi sistem e- e-goverment melalui tahapan berkelanjutan', 'Indonesian Female');

         

          }   else if (pilihan == "3") {
        // document.getElementById("message").innerHTML = "geka";
         
          window.location.href = "pilihanmenu"

         }else{
           
            
            
            responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, tekan 3 untuk  kembali ke halaman pemilihan informasi','Indonesian Female');
         }
        
    
        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
}


    function selamatDatang() {
    
    responsiveVoice.speak('Selamat datang di halaman daftar peserta Pilkada Sleman 2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk kembali ke halaman pemilihan informasi','Indonesian Female');
    }; 


    </script>
@endsection