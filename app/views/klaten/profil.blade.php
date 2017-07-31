@extends('layout.daerah')
@section('script_atas')
<script>

function cabup1() {
    
    responsiveVoice.speak('Pasangan nomor urut satu,  MUKHAMMAD ARIFIN DAN ROMI INDIARTO, Mukhammad arifin merupakan alumni Politeknik Muhammadiyah Karanganyar dan saat ini merupakan Direktur PT. Kimia Kinerja Utama sedangkan Romi Indiarto merupakan alumni Universitas Gadjah Mada dan saat ini berprofesi sebagai wiraswasta. ', 'Indonesian Female');

}

function visimisi1() {
    
    responsiveVoice.speak('Visi pasangan ini adalah " Terwujudnya Kabupaten Pemalang yang Maju, Sejahtera, Sehat, Mandiri dan Bermartabat"  untuk mewujudkan visi tersebut pasangan ini memiliki misi sebagai berikut, 1.Mewujudkan masyarakat yang sehat, sejahtera, terdidik dan agamis, 2. Membangun pusat-pusat pertumbuhan wilayah baru, Sentra Industri terpadu dengan dukungan infrastruktur yang memadai, 3. Mewujudkan pemerintahan daerah yang profesional, melayani, amanah, bersih, wibawa, dan transparan,  ', 'Indonesian Female');

}

function cabup2() {
    
    responsiveVoice.speak('Pasangan nomor urut dua,  JUNAEDI DAN MARTONO,  Junaedi merupakan alumni UNTAG Semarang dan Program pasca sarjana di Sekolah Tinggi ilmu ekonomi Stikubank Semarang. Dia merupakan bupati pemalang untuk periode 2011 sampai 2016. Sedangkan Martono merupakan alumni Universitas Pancasakti Tegal. Saat ini Martono berprofesi sebagai Sekretaris komisi C dan petani tambak', 'Indonesian Female');
    
}

function visimisi2() {
    
    responsiveVoice.speak('Visi pasangan ini adalah "Terwujudnya pemalang hebat yang berdaulat, berjatidiri, mandiri dan sejahtera", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut, 1. Menjunjung tinggi kedaulatan rakyat melalui permusyawaratan perwakilan dari semua tingkatan dengan mengedepankan prinsip pembangunan partisipatif dan gotong royong, 2. Mewujudkan kesempatan dan kualitas pendidikan dan kesehatan yang merata dan berkeadilan, 3. Meneguhkan ekonomi kerakyatan berbasis pertanian, kelautan, perdagangan serta usaha kecil dan menengah serta upaya penanggulangan kemiskinan, 4. Mewujudkan sarana dan prasarana dasar yang merata untuk memperkuat sentra-sentra produksi berbasis kewilayahan sesuai dengan karakteristik dan potensi daerah, 5. Mewujudkan tata kelola pemerintahan yang bersih, efektif, demokratis, terpercaya, dan reformasi sistem yang bebas korupsi, bermartabat serta memberikan kemudahan investasi dalam upaya meningkatkan daya saing daerah, 6. Menumbuhkan kembali Budaya Asli Daerah Kabupaten Pemalang sebagai landasan pembentukan jati diri pemalang untuk memperkokoh kepribadian bangsa, 7. Memberikan rasa aman kepada masyarakat dan memperkokoh kebhinekaan dengan mengembangkan norma kehidupan beragama yang toleran, harmonis dan saling menghormati dengan didasarkan pada prinsip Ketuhanan Yang Maha Esa, ', 'Indonesian Female');

}

function cabup3() {
    
    responsiveVoice.speak('Pasangan nomor urut tiga, MUKTI AGUNG WIBOWO  dan AFIFUDIN, Mukti Agung wibowo merupakan alumni Universitas Tri Sakti dan Pasca sarjana Universitas Diponegoro. Saat ini dia merupakan wakil bupati pemalang untuk periode 2011 sampai 2016. Sedangkan Afifudin merupakan alumni Universitas Borobudur Jakarta dan program pasca sarjana ilmu politik Universitas Negeri Jakarta. Dia berprofesi sebagai tim ahli kementrian pendayagunaan aparatur negara dan reformasi birokrasi.', 'Indonesian Female');
    
}

function visimisi3() {
    
    responsiveVoice.speak('Visi pasangan ini adalah "PEMALANG, MAS, yaitu Terwujudnya masyarakat Makmur, Aman dan Sejahtera yang di ridhoi oleh Allah SWT", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    1.Meningkatkan Sumber Daya Manusia, 2. Memanfaatkan dan Optimalisasi Sumber Daya Alam, 3. Meningkatkan Kegiatan Industri , Jasa dan Pariwisata, 4. Menyelenggarakan Pemerintahan yang efisien, efektif, bersih dan demokratis sebagai upaya perwujudan Reformasi Birokrasi', 'Indonesian Female');

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
                    <h2>Daftar Kandidat Kabupaten Pemalang </h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
           
        </div>
         <div class="col-lg-2 col-lg-offset-5">
            <a id="tombol" value="" href="{{url('klaten/pendampingan')}}"><div class="btn btn-skin pull-center col-md-12">Kembali</div></a><br>
            </div> 
        <div class="container">
            
              <label for="name"><div><br>
                               Silahkan tekan tombol yang tersedia pada masing-masing gambar kandidat</div></label>
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 1</h5>
                        <p class="subtitle">Mukhammad Arifin dan Romi Indiarto</p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>
                    </div>
                    <a id="tombol" value="" onclick="cabup1()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi1()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Junaedi dan Martono</p>
                        <div class="avatar"><img src="{{asset('img/team/2.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                     <a id="tombol" value="" onclick="cabup2()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi2()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br>
                   
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 3</h5>
                        <p class="subtitle">Mukti Agung Wibowo dan Afifudin</p>
                        <div class="avatar"><img src="{{asset('img/team/3.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                      <a id="tombol" value="" onclick="cabup3()"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="visimisi3()"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br>
                </div>
                </div>
            </div>
            
        </div>      
        </div>
    </section>
    <!-- /Section: about -->
 

@endsection

@section('script_bawah')
<script>
function selamatDatang() {
    
    responsiveVoice.speak('Berikut merupakan halaman daftar kandidat dari kabupaten Pemalang, terdapat 3 kandidat pada halaman ini, silahkan minta bantuan pada pendamping anda untuk mendengarkan profil masing-masing calon','Indonesian Female');
}
</script>
@endsection