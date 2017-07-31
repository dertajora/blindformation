@extends('layout.daerah')
@section('content')


    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Daftar Kandidat Kabupaten Gunungkidul</h2>
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
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 1</h5>
                        <p class="subtitle">Badingah dan Immawan Wahyudi</p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Benyamin Sudarmadi dan Mustangid</p>
                        <div class="avatar"><img src="{{asset('img/team/2.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                 
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 3</h5>
                        <p class="subtitle">Djangkung Sudjarwadi dan Endah Subekti Kuntariningsih</p>
                        <div class="avatar"><img src="{{asset('img/team/3.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 4</h5>
                        <p class="subtitle">Subardi TS dan  Wahyu Purwanto</p>
                        <div class="avatar"><img src="{{asset('img/team/4.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
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
       
        responsiveVoice.speak('Pasangan nomor urut satu,  Badingah dan Immawan Wahyudi, Pasangan ini mendapatkan dukungan parpol dari Partai Amanat Nasional, Partai Golkar, Partai Hati Nurani Rakyat. Partai GERINDRA, PDI Perjuangan, dan Partai Kebangkitan Bangsa., Visi pasangan ini adalah "Mewujudkan Gunungkidul sebagai Daerah Tujuan Wisata yang Terkemuka dan Berbudaya menuju masyarakat yang berdaya saing, maju, mandiri dan sejahtera Tahun 2020", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu, Peningkatan tata kelola pemerintah daerah yang baik (Good Governance),  dua, Peningkatan kualitas sumber daya manusia yang berdaya saing, tiga, Pemantapan pengelolaan pariwisata yang profesional, empat,  Peningkatan infrastruktur yang memadai untuk menggerakkan perekonomian yang tangguh berbasis potensi daerah,   lima, Pengelolaan dan perlindungan sumber daya alam secara berkelanjutan, enam, Pengembangan sektor-sektor unggulan daerah dan iklim investasi yang kondusif ','Indonesian Female');

        // window.location.href = "http://localhost/blindpick/theme/bantul_self.html"

        }  else if (pilihan == "2") {
        // document.getElementById("message").innerHTML = "geka";
         
          
        responsiveVoice.speak('Pasangan nomor urut dua,  Benyamin Sudarmadi dan Mustangid, Pasangan ini merupakan pasangan yang mencalonkan diri berdasarkan dukungan perorangan., Visi pasangan ini adalah "Terwujudnya Gunungkidul Yang Mandiri Lahir Batin, Jasmaniah, Rohaniyah bertumpu pada pemerintahan yang bersih dan berwibawa dilandasi oleh nilai-nilai luhur Pancasila dan Undang-Undang Dasar 1945", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Mengelola Sumber daya alam dengan lebih arif dan bijaksana melalui pengembangan sumber daya manusia di semua sektor kehidupan,  dua, Mengupayakan reformasi birokrasi secara sungguh-sungguh menuju aparatur yang bersih dan responsif guna mewujudkan pelayanan prima dalam pemenuhan hak hak dasar rakyat seperti kependudukan berupa akta kelahiran, KTP dan KK, serta hak Kesehatan dan Pendidikan, tiga, Memfokuskan pada pembangunan nyata perekonomian masyarakat dengan lebih memberi perhatian kepada sektor pertanian, pariwisata, perdagangan, industri, investasi perikanan dan kelautan, empat, Pemberdayaan masyarakat melalui penguatan pembangunan berbasis desa yang berorientasi pada kemudahan akses dalane ombo banyune roto,   lima, Peningkatan mutu kehidupan mengembangkan karakter, budaya dan kearifan lokal', 'Indonesian Female');

         }  else if (pilihan == "3") {
        // document.getElementById("message").innerHTML = "geka";
          
           responsiveVoice.speak('Pasangan nomor urut tiga, Djangkung Sudjarwadi dan Endah Subekti Kuntariningsih, Pasangan ini mendapatkan dukungan parpol dari Partai PDI Perjuangan,. Visi pasangan ini adalah "Terwujudnya masyarakat Gunungkidul yang sejahtera, mandiri dan berdaulat", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Mewujudkan masyarakat Gunungkidul dengan meningkatkan produktifitas sumber daya manusia melalui kebijakan ekonomi kerakyatan dan peningkatan infrastruktur pedesaan dan perkotaan,  dua, Mewujudkan pembangunan infrastruktur yang berkelanjutan, tiga, Mewujudkan masyarakat Gunungkidul yang mampu berdaya saing, empat,  Mewujudkan Gunungkidul sebagai sentra pertanian dan pariwisata,   lima, Mewujudkan pemerintahan yang bersih dan baik, enam, Mewujudkan masyarakat Gunungkidul yang berkepribadian berlandaskan budaya adiluhung sebagai perwujudan keistimewaan Daerah Istimewa Yogyakarta','Indonesian Female');
         // window.location.href = "http://localhost/blindpick/theme/gunungkidul_self.html"

          }  else if (pilihan == "4") {
        // document.getElementById("message").innerHTML = "geka";
         
           responsiveVoice.speak('Pasangan nomor urut empat,  Subardi TS dan  Wahyu Purwanto, Pasangan ini mendapatkan dukungan parpol dari Partai  Gerindra, Partai Keadilan Sejahtera, Partai Demokrat, dan Partai Kebangkitan Bangsa,. Visi pasangan ini adalah "Terwujudnya masyarakat Kabupaten Gunungkidul yang mandiri, unggul, berbudaya, religius dan sejahtera", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Memperkokoh ekonomi kerakyatan dengan prinsip kemitraan yang sinergis antara masyarakat, swasta dan pemerintah yang didukung pengelolaan berkelanjutan seluruh sumber daya alam,  dua, Meningkatkan derajat kesehatan masyarakat dan akses terhdapa pelayanan kesehatan yang berkualitas demi terwujudnya budaya hidup sehat, tiga, Meningkatkan budaya belajar yang didukung oleh fasilitas pendidikan yang berkualitas, terjangkau dan merata bagi seluruh lapisan masyarakat, empat, Mengembangkan kualitas tata kehidupan masyarakat yang dilandasi kearifan lokal atau keadilan luhur budaya Gunungkidul,   lima, Meningkatkan kapasitas kelembagaan Pemerintah Kabupaten Gunungkidul untuk mendukung pelaksanaan good governance yang lebih perspektif pada kolaborasi pemenuhan hak dasar warga dengan investasi sosial berupa pemberdayaan masyarakat, enam,  Meningkatkan partisipasi dan pemberdayaan masyarakat melalui penguatan desa dan pembangunan berbasis desa','Indonesian Female');
         // window.location.href = "http://localhost/blindpick/theme/gunungkidul_self.html"

          }   else if (pilihan == "5") {
        // document.getElementById("message").innerHTML = "geka";
         
          window.location.href = "pilihanmenu"

         }else{
           
             var lblValue = document.getElementById("lblValue");
             lblValue.innerText = "Ini salah: "+s;
            
              responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, tekan 3 untuk  kembali ke halaman pemilihan informasi, tekan 4 untuk mengetahui profil pasangan nomor 4, tekan 5 untuk kembali ke halaman pemilihan informasi','Indonesian Female');
        }   

      }   
    function selamatDatang() {
    
    responsiveVoice.speak('Selamat datang di halaman daftar peserta Pilkada Gunung Kidul 2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk mengetahui profil pasangan nomor 3, tekan 4 untuk mengetahui profil pasangan nomor 4, tekan 5 untuk kembali ke halaman pemilihan informasi','Indonesian Female');
    }; 
    </script>
@endsection