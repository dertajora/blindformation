@extends('layout.daerah')
@section('script_atas')
<script>

function calon1() {
    
     responsiveVoice.speak('Pasangan nomor urut satu,  . Suharsono dan Abdul Halim Muslih, Pasangan ini mendapatkan dukungan parpol dari Partai Gerindra dan PKB', 'Indonesian Female');

}

function visimisi1() {
    
     responsiveVoice.speak('Visi pasangan ini adalah "Terwujudnya masyarakat mBantul yang sehat, cerdas dan sejahtera berlandaskan nilai-nilai kemanusiaan, nasionalisme dan religiusitas dalam wadah Negara Kesatuan republik Indonesia", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu,   Meningkatkan kualitas Sumber Daya Manusia yang sehat, cerdas dan berkepribadian yang luhur melalui pelaksanaan wajib belajar 12 tahun, termasuk siswa berkebutuhan khusus dan menyediakan perawatan kesehatan yang memadai untuk seluruh lapisan masyarakat dengan pemberian keringanan sampai pembebasan biaya bagi masyarakat prasejahtera,  dua, Meningkatkan perekonomian rakyat dengan mengembangkan potensi daerah, mendorong pertumbuhan investasi di bidang pertanian, pariwisata, industri dan perdagangan memberikan insentif, subsidi dan fasilitasi bagi usaha mikro, kecil dan menengah serta mendayagunakan teknologi modern dengan melibatkan sebesar besarnya sumbedaya lokal, tiga, Meningkatkan kapasitas dan kualitas sarana prasarana umumdan meningkatkan pengelolaan sumberdayaalam dan lingkungan hidup secara terpadu dan berkelanjutan, empat, Meningkatkan tata kelola pemerintahan yang baik melalui peningkatan kualitas birokrasi yang efisien dan melayani masyarakat , mencegah dan memberantas korupsi, kolusi dan nepotisme dengan menerapkan manajemen yang terbuka dan akuntabel,   lima, Meningkatkan tata kehidupan masyarakat mBantul yang aman, progresif dan harmonis serta berbudaya istimewa', 'Indonesian Female');

}

function cabup2() {
    
    responsiveVoice.speak('Pasangan nomor urut dua,  Sri Surya Widati dan Misbakhul Munir, Pasangan ini mendapatkan dukungan parpol dari PDI Perjuangan dan Nasdem', 'Indonesian Female');
}

function visimisi2() {
   responsiveVoice.speak('Visi pasangan ini adalah "Bantul Projo taman sari Sejahtera, Demokratis dan Agamis. Yaitu mewujudkan Bantul yang Produktif, Profesional Ijo Royo-royo, Tertib, Aman, Sehat, Asri, Sejahtera, Demokratis, dan Agamis", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Mewujudkan tata kelola kepemerintahan demokratis yang lebih mandiri, empatik, jujur dan bertanggung jawab,  dua,  Mewujudkan kesejahteraan rakyat dan peningkatan daya saing ekonomi daerah dengan memanfaatkan sumbedaya lokal, berwawasan lingkungan serta memperhatikan pengurangan resiko bencana, tiga, Mewujujdkan tata kehidupan masyarakat yang bersemangat gotong royong, berbudaya luhur, agamis dan berbudaya pancasila', 'Indonesian Female');

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
                    <h2>Daftar Kandidat Kabupaten Bantul</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
           
        </div>

        <div class="container">
        	 <div class="col-lg-2 col-lg-offset-5">
                    <a id="tombol" value="" href="{{url('bantul/pendampingan')}}"><div class="btn btn-skin pull-center col-md-12">Kembali</div></a><br>
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
                        <p class="subtitle">Suharsono <br>& Abdul Halim Muslih  </p>
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
                        <p class="subtitle">Sri Surya Widati  <br>& Misbakhul Munir</p>
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
    responsiveVoice.speak('Berikut merupakan halaman daftar kandidat dari kabupaten Bantul, terdapat 2 kandidat pada halaman ini, silahkan minta bantuan pada pendamping anda untuk mendengarkan profil masing-masing calon','Indonesian Female');
}
</script>
@endsection