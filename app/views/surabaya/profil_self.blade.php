@extends('layout.daerah')
@section('content')


    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h3>Daftar Kandidat Pilwali Surabaya 2015 </h3>
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
                        <p class="subtitle">Rasiyo <br>& Lucy Kurniasari</p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                 
                </div>
                
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3">
               
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Tri Rismaharini  <br>& Whisnu Sakti Buana</p>
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
        
        
         responsiveVoice.speak('Pasangan nomor urut satu,  . Rasiyo dan Lusi Kurniasari, Pasangan ini mendapatkan dukungan parpol dari Partai Demokrat dan Partai Amanat Nasional. Pasangan ini memiliki slogan "Muf on". Rasiyo, pernah menjabat sekretaris daerah Provinsi Jawa Timur periode 2009-2013. Rasiyo, juga pernah duduk sebagai orang nomor satu di Dinas Pendidikan Jawa Timur. Sedangkan lusi Kurniasari pernah menjadi anggota DPR RI dari Partai Demokrat pada Tahun 2009 sampai 2014. Saat ini lusi menjabat sebagai Ketua Departemen Penanggulangan aids dan Narkoba DPP Partai Demokrat ','Indonesian Female');
        }  else if (pilihan == "2") {
         
          responsiveVoice.speak('Visi pasangan ini adalah "SURABAYA LEBIH SEJAHTERA, BERKEADILAN, BERDAYA SAING, DAN BERKEPRIBADIAN", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu,   Meningkatkan kesejahteraan rakyat yang berkeadilan,  dua, Meningkatkan pembangunan ekonomi yang inklusif, dan berdaya saing, tiga, Meningkatkan pembangunan pariwisata, dan revitalisasi budaya lokal, serta kesalehan sosial, empat, Meningkatkan pembangunan infrastuktur yang merata, dan pelestarian lingkungan hidup,   lima, Meningkatkan reformasi birokrasi dan pelayanan publik', 'Indonesian Female');


          } else if (pilihan == "3") {
        
         
         responsiveVoice.speak('Pasangan nomor urut dua, Tri Rismaharini dan Whisnu Sakti Buana, Pasangan ini mendapatkan dukungan dari Partai PDI Perjuangan. Pasangan ini memiliki slogan "Now and den". Tri Rismaharini merupakan Wali Kota Surabaya wanita pertama, Ia  menjabat untuk periode 2010-2015. Sebelum menjabat sebagai wali kota, ia menduduki posisi sebagai Kepala Dinas Kebersihan dan Pertamanan. Sedangkan Wisnu Sakti Buana adalah Wakil Wali Kota Surabaya yang menjabat sejak 24 Januari 2014. Ia saat ini juga menjabat sebagai Ketua DPC PDIP Kota Surabaya. Wisnu, juga pernah menjabat sebagai Wakil Ketua DPRD Kota Surabaya dan anggota DPRD Kota Surabaya dari Fraksi PDI Perjuangan. ','Indonesian Female');

         }   else if (pilihan == "4") {
        
         
         responsiveVoice.speak('Visi pasangan ini adalah "SURABAYA KOTA SENTOSA YANG BERKARAKTER DAN BERDAYA SAING GLOBAL BERBASIS EKOLOGI", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu,  Mewujudkan sumber daya masyarakat yang berkualitas,  dua,  Memberdayakan masyarakat dan menciptakan seluas-luasnya kesempatan berusaha, tiga, Memelihara keamanan dan ketertiban umum, empat, Mewujudkan penataan ruang yang terintegrasi dan memperhatikan daya dukung kota, lima, Memantapkan sarana dan prasarana lingkungan dan permukiman yang ramah lingkungan, enam, Memperkuat nilai-nilai budaya lokal dalam sendi-sendi kehidupan masyarakat, tujuh, Mewujudkan Surabaya sebagai pusat penghubung perdagangan dan jasa antar pulau dan internasional, delapan, Memantapkan tata kelola pemerintahan yang baik, sembilan, Memantapkan daya saing usaha-usaha ekonomi lokal, inovasi produk dan jasa, serta pengembangan industri kreatif, sepuluh, Mewujudkan infrastruktur dan utilitas kota yang terpadu dan efisien', 'Indonesian Female');

         

         }else if (pilihan == "5"){
            window.location.href = "pilihanmenu"
         }
            else{
           
            
           
            responsiveVoice.speak('Opsi yang anda pilih salah, silahkan ulangi kembali. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, tekan 3 untuk  kembali ke halaman pemilihan informasi','Indonesian Female');
         }
        
    
        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
}


    function selamatDatang() {
    
    responsiveVoice.speak('Selamat datang di halaman daftar peserta Pilwali Surabaya 2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui visi dan misi pasangan nomor 2, TEKAN 3 untuk mengetahui profil pasangan nomor 2, TEKAN 4 untuk mengetahui visi dan misi pasangan nomor 2, TEKAN 5 untuk kembali ke halaman pemilihan informasi','Indonesian Female');
    }; 


    </script>
@endsection