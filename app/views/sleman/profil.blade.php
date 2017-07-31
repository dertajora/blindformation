@extends('layout.daerah')
@section('script_atas')
<script>

function calon1() {
    
    responsiveVoice.speak('Pasangan nomor urut satu,  Yuni Satria Rahayu dan Danang Wicaksana Sulistya, Pasangan ini mendapatkan dukungan parpol dari PDI Perjuangan dan Gerindra ', 'Indonesian Female');

}

function visimisi1() {
    
    responsiveVoice.speak('Visi pasangan ini adalah "Terwujudnya kesejahteraan rakyat Sleman yang modern dan dinamis berbasis budaya lokal", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu,   Meningkatkan kualitas kinerja pemerintah daerah guna mengoptimalkan pelayanan kepada rakyat,  dua, Meningkatkan pendapatan dan kualitas hidup rakyat secara merata, tiga, Meningkatkan jumlah ketersediaan dan kualitas pelayanan umum, empat,  Mengurangi kemiskinan,   lima,  Meningkatkan kesempatan belajar serta mengembangkan pendidikan formal, informal, dan non formal, enam, Melestarikan dan mengembangkan nilai-nilai tradisi, budaya, dan kesenian Sleman,  Mengembangkan nilai-nilai keharmonisan dan pola asah-asih-asuh dalam kehidupan masyarakat ', 'Indonesian Female');

}

function cabup2() {
    
    responsiveVoice.speak('Pasangan nomor urut dua,  Sri Purnomo dan Sri Muslimatun, Pasangan ini mendapatkan dukungan parpol dari Partai amanat nasional, Nasdem, Partai Golkar, PKB, dan Partai Demokrat ', 'Indonesian Female');
    
}

function visimisi2() {
    
    responsiveVoice.speak('Visi pasangan ini adalah "Terwujudnya masyarakat sleman yang lebih sejahtera,  mandiri, berbudaya dan terintegrasikannya sistem e-goverment menuju smart regency atau kabupaten pintar pada tahun 2020", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Meningkatkan tata kelola pemerintahan yang baik melalui peningkatan kualitas birokrasi yang responsif dalam memberikan pelayanan bagi masyarakat,  dua, Meningkatkan pelayanan pendidikan dan kesehatan yang berkualitas dan menjangkau bagi semua lapisan masyarakat, tiga, Meningkatkan penguatan sistem  ekonomi kerakyatan,  aksesibilitas dan kemampuan  ekonomi rakyat , dan penanggulangan kemiskinan, empat, Memantapkan dan meningkatkan kualitas pengelolaan prasarana dan sarana, sumberdaya alam, penataan ruang dan lingkungan hidup,   lima,  Meningkatkan kualitas budaya masyarakat dan kesetaraan gender yang proporsional, enam, Meningkatkan aplikasi dan integrasi sistem e- e-goverment melalui tahapan berkelanjutan', 'Indonesian Female');

}

</script>
@endsection
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
        	 <div class="col-lg-2 col-lg-offset-5">
                    <a id="tombol" value="" href="{{url('sleman/pendampingan')}}"><div class="btn btn-skin pull-center col-md-12">Kembali</div></a><br>
                   </div>
        <label for="name">
                               <br><Br> Silahkan Tekan Tombol dibawah foto kandidat untuk mengetahui profil kandidat</label> 
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
                        <p class="subtitle">Yuni Satria Rahayu <br>& Danang Wicaksana Sulistya </p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                     <a id="tombol" value="" onclick="calon1()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi1()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br>
                   
                </div>
                
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3">
               
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Sri Purnomo <br>& Sri Muslimatun</p>
                        <div class="avatar"><img src="{{asset('img/team/2.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                     <a id="tombol" value="" onclick="cabup2()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi2()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br>
                   
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
function selamatDatang() {
    responsiveVoice.speak('Berikut merupakan halaman daftar kandidat dari kabupaten Sleman, terdapat 2 kandidat pada halaman ini, silahkan minta bantuan pada pendamping anda untuk mendengarkan profil masing-masing calon','Indonesian Female');
}
</script>
@endsection