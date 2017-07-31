@extends('layout.daerah')
@section('script_atas')
<script>


function calon1() {
    
    responsiveVoice.speak('Pasangan nomor urut satu,  . Rasiyo dan Lusi Kurniasari, Pasangan ini mendapatkan dukungan parpol dari Partai Demokrat dan Partai Amanat Nasional. Pasangan ini memiliki slogan "Muf on"', 'Indonesian Female');

}

function visimisi1() {
    
    responsiveVoice.speak('Visi pasangan ini adalah "SURABAYA LEBIH SEJAHTERA, BERKEADILAN, BERDAYA SAING, DAN BERKEPRIBADIAN", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu,   Meningkatkan kesejahteraan rakyat yang berkeadilan,  dua, Meningkatkan pembangunan ekonomi yang inklusif, dan berdaya saing, tiga, Meningkatkan pembangunan pariwisata, dan revitalisasi budaya lokal, serta kesalehan sosial, empat, Meningkatkan pembangunan infrastuktur yang merata, dan pelestarian lingkungan hidup,   lima, Meningkatkan reformasi birokrasi dan pelayanan publik', 'Indonesian Female');

}

function rekamjejak1() {
    
    responsiveVoice.speak(' Rasiyo, pernah menjabat sekretaris daerah Provinsi Jawa Timur periode 2009-2013. Rasiyo, juga pernah duduk sebagai orang nomor satu di Dinas Pendidikan Jawa Timur. Sedangkan lusi Kurniasari pernah menjadi anggota DPR RI dari Partai Demokrat pada Tahun 2009 - 2014. Saat ini lusi menjabat sebagai Ketua Departemen Penanggulangan aids dan Narkoba DPP Partai Demokrat', 'Indonesian Female');

}


function calon2() {
    
    responsiveVoice.speak('Pasangan nomor urut dua, Tri Rismaharini dan Whisnu Sakti Buana, Pasangan ini mendapatkan dukungan dari Partai PDI Perjuangan. Pasangan ini memiliki slogan "Now and den" ', 'Indonesian Female');
    
}

function visimisi2() {
    
    responsiveVoice.speak('Visi pasangan ini adalah "SURABAYA KOTA SENTOSA YANG BERKARAKTER DAN BERDAYA SAING GLOBAL BERBASIS EKOLOGI", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu,  Mewujudkan sumber daya masyarakat yang berkualitas,  dua,  Memberdayakan masyarakat dan menciptakan seluas-luasnya kesempatan berusaha, tiga, Memelihara keamanan dan ketertiban umum, empat, Mewujudkan penataan ruang yang terintegrasi dan memperhatikan daya dukung kota, lima, Memantapkan sarana dan prasarana lingkungan dan permukiman yang ramah lingkungan, enam, Memperkuat nilai-nilai budaya lokal dalam sendi-sendi kehidupan masyarakat, tujuh, Mewujudkan Surabaya sebagai pusat penghubung perdagangan dan jasa antar pulau dan internasional, delapan, Memantapkan tata kelola pemerintahan yang baik, sembilan, Memantapkan daya saing usaha-usaha ekonomi lokal, inovasi produk dan jasa, serta pengembangan industri kreatif, sepuluh, Mewujudkan infrastruktur dan utilitas kota yang terpadu dan efisien', 'Indonesian Female');

}

function rekamjejak2() {
    
    responsiveVoice.speak('Tri Rismaharini merupakan Wali Kota Surabaya wanita pertama yang menjabat untuk periode 2010-2015. Sebelum menjabat sebagai wali kota, ia menduduki posisi sebagai Kepala Dinas Kebersihan dan Pertamanan. Sedangkan Wisnu Sakti Buana adalah Wakil Wali Kota Surabaya yang menjabat sejak 24 Januari 2014. Ia saat ini juga menjabat sebagai Ketua DPC PDIP Kota Surabaya. Wisnu pernah menjabat sebagai Wakil Ketua DPRD Kota Surabaya dan anggota DPRD Kota Surabaya dari Fraksi PDI Perjuangan.', 'Indonesian Female');

}


</script>
@endsection
@section('content')
 
   
    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            
                <div class="col-lg-8 col-lg-offset-2">
                   
                    <div class="section-heading">
                    <h3>Daftar Kandidat Pilwali Surabaya 2015 </h3>
                    <i class="fa fa-2x fa-angle-down"></i><br>
                    <center>
                      <a id="tombol" value="" href="pendampingan"><div class="btn btn-skin pull-center">Kembali</div></a><Br></center>
           

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
         
               

            <div class="col-xs-6 col-sm-3 col-md-3">
                
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3">
                
               <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 1</h5>
                        <p class="subtitle">Rasiyo <br>& Lucy Kurniasari </p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                     <a id="tombol" value="" onclick="calon1()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi1()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br><br>
                    <a id="tombol" value="" onclick="rekamjejak1()"><div class="btn btn-skin pull-center col-md-12">Rekam Jejak</div></a><Br>
                </div>
                
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3">
               
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Tri Rismaharini  <br>& Whisnu Sakti Buana</p>
                        <div class="avatar"><img src="{{asset('img/team/2.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                     <a id="tombol" value="" onclick="calon2()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi2()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br><br>
                    <a id="tombol" value="" onclick="rekamjejak2()"><div class="btn btn-skin pull-center col-md-12">Rekam Jejak</div></a><br>
                </div>
                
            </div>
             
        </div>      
        </div>
        </center>      
        </div>
        <center>
        
            </center>
    </section>


@endsection

@section('script_bawah')
<script>
function selamatDatang() {
    
    responsiveVoice.speak('Berikut merupakan halaman daftar kandidat dari kota Surabaya, terdapat 2 kandidat pada halaman ini, silahkan minta bantuan pada pendamping anda untuk mendengarkan profil masing-masing calon','Indonesian Female');
}
</script>
@endsection