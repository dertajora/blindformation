@extends('layout.daerah')
@section('content')
  <!-- Section: about -->
    <section id="about" class="home-section text-center">
        
        <div class="container">

        <div class="row">
            <h2>Info Pilkada untuk Tunanetra</h2>
            <div class="col-lg-2 col-lg-offset-5">
                    
                    
                <hr class="marginbot-50">
            </div>
        </div>
        <center>
            <label for="name">
                                </label>
                            <input value="" type="text" class="form-control" id="edValue" placeholder="Silahkan masukkan pilihan informasi..." required="required" onKeyPress="pilihMode()" onKeyUp="pilihMode()" autofocus  />
                           
                            <br>
        <div class="row">
          
               

            <div class="col-xs-6 col-sm-3 col-md-3">
                
            </div>

           
        </div>      
        </div>
        </center>
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
        

        if ( pilihan == 1){
        
       responsiveVoice.speak('Pilkada serentak akan diadakan pada tanggal 9 Desember 2015','Indonesian Female');

        }  else if (pilihan == "2") {
       
       responsiveVoice.speak('Berikut beberapa istilah istilah yang ada dalam Pilkada, satu, Banwaslu, Badan Pengawas Pemilu, dua, Panwaslu, Panitia Pengawas Pemilu, tiga, Dapil, Daerah Pemilihan, empat, TPS, Tempat Pemungutan Suara, lima, DPT, Daftar Pemilih Tetap, Enam, Parpol, Partai Politik.','Indonesian Female');

                

         } else if (pilihan == "3") {
       
      responsiveVoice.speak('Berikut merupakan persyaratan pemilih pada Pilkada 2015, satu, WNI yang berusia 17 tahun atau lebih atau sudah atau pernah kawin, dua, Tidak sedang terganggu jiwanya atau ingatannya,tiga, Terdaftar sebagai pemilih, empat, bukan anggota TNI atau Polri, lima tidak sedang dicabut hak pilihnya, enam, terdaftar di DPT, tujuh, khusus untuk pilkada, calon pemilih harus berdomisili sekurang-kurangnya 6 bulan didaerah yang bersangkutan ','Indonesian Female');

         } else if (pilihan == "4") {
       
      responsiveVoice.speak('Berikut merupakan cara memilih pada Pilkada 2015, satu, "Datang" ke Tempat Pemungutan Suara atau TPS, dua "Daftar", yakni pemilih mendaftarkan dirinya di TPS sebelum mendapatkan kertas suara,tiga, "Dicoblos", pemilih mencoblos surat suara yang ada, empat, "Dimasukkan", kemudian masukkan surat suara ke dalam kotak suara, terakhir, "Dicelup", yakni pemilih menandai jarinya dengan mencelupkan ke dalam tinta','Indonesian Female');

         } else if (pilihan == "5") {
       
        responsiveVoice.speak('Berikut merupakan tips memilih kandidat pada pilkada 2015, satu, ketahui visi, misi dan program kandidat, dua, kenali riwayat hidup calon, tiga, pastikan kembali bahwa pilihan anda benar, empat, pastikan anda memberikan suara dengan benar, kelima, jika mampu, pastikan proses penghitungan suara berlangsung dengan jujur dan adil ','Indonesian Female');

         }else if (pilihan == "6") {
       
       responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, tekan, 1 jika anda ingin mengetahui jadwal Pilkada serentak, tekan, dua, jika ingin mengetahui istilah-istilah dalam pilkada, tekan, tiga, jika anda ingin mengetahui persyaratan pemilih pada Pilkada 2015, tekan, empat jika anda ingin mencari tahu bagaimana cara memilih dalam pilkada, tekan, lima jika anda ingin mendapatkan tips-tips mengenai Pilkada, tekan, enam, untuk mengulangi pilihan info yang tersedia, tekan, tujuh untuk kembali ke pilihan menu','Indonesian Female');

         }else if (pilihan == "7") {
       
        window.location.href = "pilihanmenu";

         } else{
           
             
            responsiveVoice.speak('Opsi yang anda pilih salah, Silahkan ulangi kembali. tekan, 1 jika anda ingin mengetahui jadwal Pilkada serentak, tekan, dua, jika ingin mengetahui istilah-istilah dalam pilkada, tekan, tiga, jika anda ingin mengetahui persyaratan pemilih pada Pilkada 2015, tekan, empat jika anda ingin mencari tahu bagaimana cara memilih dalam pilkada, tekan, lima jika anda ingin mendapatkan tips-tips mengenai Pilkada, tekan, enam, untuk mengulangi pilihan info yang tersedia, tekan, tujuh untuk kembali ke pilihan menu informasi','Indonesian Female');
         }
        
    
        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
}


function selamatDatang() {
    
    responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, tekan, 1 jika anda ingin mengetahui jadwal Pilkada serentak, tekan, dua, jika ingin mengetahui istilah-istilah dalam pilkada, tekan, tiga, jika anda ingin mengetahui persyaratan pemilih pada Pilkada 2015, tekan, empat jika anda ingin mencari tahu bagaimana cara memilih dalam pilkada, tekan, lima jika anda ingin mendapatkan tips-tips mengenai Pilkada, tekan, enam, untuk mengulangi pilihan info yang tersedia, tekan, tujuh untuk kembali ke pilihan menu informasi','Indonesian Female');
}
</script>
@endsection