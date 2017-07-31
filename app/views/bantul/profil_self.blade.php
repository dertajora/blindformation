@extends('layout.daerah')
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
                        <p class="subtitle">Suharsono <br>& Abdul Halim Muslih</p>
                        <div class="avatar"><img src="{{asset('img/team/1.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                   
                </div>
                
            </div>
            
            <div class="col-xs-6 col-sm-3 col-md-3">
               
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No 2</h5>
                        <p class="subtitle">Sri Surya Widati  <br>& Misbakhul Munir</p>
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
        
        responsiveVoice.speak('Pasangan nomor urut satu,  . Suharsono dan Abdul Halim Muslih, Pasangan ini mendapatkan dukungan parpol dari Partai Gerindra dan PKB, Visi pasangan ini adalah "Terwujudnya masyarakat mBantul yang sehat, cerdas dan sejahtera berlandaskan nilai-nilai kemanusiaan, nasionalisme dan religiusitas dalam wadah Negara Kesatuan republik Indonesia", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,.    satu,   Meningkatkan kualitas Sumber Daya Manusia yang sehat, cerdas dan berkepribadian yang luhur melalui pelaksanaan wajib belajar 12 tahun, termasuk siswa berkebutuhan khusus dan menyediakan perawatan kesehatan yang memadai untuk seluruh lapisan masyarakat dengan pemberian keringanan sampai pembebasan biaya bagi masyarakat prasejahtera,  dua, Meningkatkan perekonomian rakyat dengan mengembangkan potensi daerah, mendorong pertumbuhan investasi di bidang pertanian, pariwisata, industri dan perdagangan memberikan insentif, subsidi dan fasilitasi bagi usaha mikro, kecil dan menengah serta mendayagunakan teknologi modern dengan melibatkan sebesar besarnya sumbedaya lokal, tiga, Meningkatkan kapasitas dan kualitas sarana prasarana umum dan meningkatkan pengelolaan sumberdaya alam dan lingkungan hidup secara terpadu dan berkelanjutan, empat, Meningkatkan tata kelola pemerintahan yang baik melalui peningkatan kualitas birokrasi yang efisien dan melayani masyarakat , mencegah dan memberantas korupsi, kolusi dan nepotisme dengan menerapkan manajemen yang terbuka dan akuntabel,   lima, Meningkatkan tata kehidupan masyarakat mBantul yang aman, progresif dan harmonis serta berbudaya istimewa ','Indonesian Female');

        }  else if (pilihan == "2") {
        // document.getElementById("message").innerHTML = "geka";
        
        responsiveVoice.speak('Pasangan nomor urut dua,  Sri Surya Widati dan Misbakhul Munir, Pasangan ini mendapatkan dukungan parpol dari PDI Perjuangan dan Nasdem, Visi pasangan ini adalah "Bantul Projo taman sari Sejahtera, Demokratis dan Agamis. Yaitu mewujudkan Bantul yang Produktif, Profesional Ijo Royo-royo, Tertib, Aman, Sehat, Asri, Sejahtera, Demokratis, dan Agamis", untuk mewujudkan visi tersebut mereka memiliki misi sebagai berikut,    satu, Mewujudkan tata kelola kepemerintahan demokratis yang lebih mandiri, empatik, jujur dan bertanggung jawab,  dua,  Mewujudkan kesejahteraan rakyat dan peningkatan daya saing ekonomi daerah dengan memanfaatkan sumbedaya lokal, berwawasan lingkungan serta memperhatikan pengurangan resiko bencana, tiga, Mewujujdkan tata kehidupan masyarakat yang bersemangat gotong royong, berbudaya luhur, agamis dan berbudaya pancasila', 'Indonesian Female');
 

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
    
    responsiveVoice.speak('Selamat datang di halaman daftar peserta Pilkada Bantul 2015. TEKAN angka 1 untuk mengetahui profil pasangan nomor 1, TEKAN 2 untuk mengetahui profil pasangan nomor 2, TEKAN 3 untuk kembali ke halaman pemilihan informasi','Indonesian Female');
    }; 


    </script>
@endsection