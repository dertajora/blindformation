@extends('layout.main')
@section('content')
  
    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                    <div class="section-heading">
                    <h2>PANDUAN PENGGUNAAN</h2><br>
                    

                    <i class="fa fa-2x fa-angle-down"></i>
                    <p align="left">1.&nbsp&nbsp  Aplikasi ini akan menggunakan panduan berbasis suara, oleh karena itu pastikan speaker atau perangkat suara anda sudah menyala dan berfungsi dengan baik. </p>
                    <p align="left">2.&nbsp&nbsp  Sangat disarankan untuk menggunakan browser mozilla firefox, website ini juga sudah diuji dapat berjalan dengan baik menggunakan browser safari, chrome, microsoft edge dan internet explorer   </p>
                    <p align="left">3.&nbsp&nbsp  Untuk masuk ke aplikasi informasi dan pengenalan calon pada Pilkada 2015 silahkan pilih menu Aplikasi  </p>
                    <p align="left">4.&nbsp&nbsp Akan ada panduan suara pada setiap halamannya, silahkan dengarkan panduan tersebut untuk menentukan pilihan menu yang anda inginkan    </p>
                    <p align="left">5.&nbsp&nbsp  Mode pendampingan adalah mode penggunaan aplikasi dengan bantuan pendamping   </p>
                    <p align="left">6.&nbsp&nbsp  Mode mandiri adalah mode penggunaan aplikasi yang memungkinkan pengguna tunanetra menggunakan aplikasi ini secara mandiri atau dengan sedikit bantuan pendamping.</p>
                    <p align="left">7.&nbsp&nbsp  Akan ada dua pilihan menu utama nantinya, yakni menu informasi Pilkada 2015 dan profil kandidat pada masing-masing Kabupaten pada Pilkada 2015.   </p>
                    <p align="left">8.&nbsp&nbsp  Pada mode mandiri, anda akan diminta untuk menekan tombol angka antara 1 hingga 8 untuk memilih opsi menu yang tersedia.     </p>
                    

                    </div><br>
                    
                    
                
                

                
            </div>
            </div>
        </div>
        
        
    </section>
    <!-- /Section: about -->
    <!-- Section: about -->
    
@endsection
@section('script_bawah')
 <script>



responsiveVoice.OnVoiceReady = function() {
  console.log("speech time?");
responsiveVoice.speak('Berikut merupakan panduan penggunaan aplikasi ini, satu, Aplikasi ini akan menggunakan panduan berbasis suara, oleh karena itu pastikan speaker atau perangkat suara anda sudah menyala dan berfungsi dengan baik., dua, Sangat disarankan untuk menggunakan browser mozilla firefox, website ini juga sudah diuji dapat berjalan dengan baik menggunakan browser safari, chrome, microsoft edge dan internet explorer  , tiga,  Untuk masuk ke aplikasi informasi dan pengenalan calon pada Pilkada 2015 silahkan pilih menu aplikasi, empat, Akan ada panduan suara pada setiap halamannya, silahkan dengarkan panduan tersebut untuk menentukan pilihan menu yang anda inginkan, lima,  Mode pendampingan adalah mode penggunaan aplikasi dengan bantuan pendamping, enam, Mode mandiri adalah mode penggunaan aplikasi yang memungkinkan pengguna tunanetra menggunakan aplikasi ini secara mandiri atau dengan sedikit bantuan pendamping, tujuh, Akan ada dua pilihan menu utama nantinya, yakni menu informasi Pilkada 2015 dan profil kandidat pada masing-masing Kabupaten, delapan, Pada mode mandiri, anda akan diminta untuk menekan tombol angka antara 1 hingga 8 untuk memilih opsi menu yang tersedia.   ','Indonesian Female');
     

};
</script>
@endsection