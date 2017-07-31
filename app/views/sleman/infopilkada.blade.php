@extends('layout.daerah')
@section('script_atas')
<script>   

    function waktu() {
    responsiveVoice.speak('Pilkada serentak akan diadakan pada tanggal 9 Desember 2015','Indonesian Female');
    }

    function tips(){
        responsiveVoice.speak('Berikut merupakan tips memilih kandidat pada pilkada 2015, satu, ketahui visi, misi dan program kandidat, dua, kenali riwayat hidup calon, tiga, pastikan kembali bahwa pilihan anda benar, empat, pastikan anda memberikan suara dengan benar, kelima, jika mampu, pastikan proses penghitungan suara berlangsung dengan jujur dan adil ','Indonesian Female');

    }

    function cara(){
          responsiveVoice.speak('Berikut merupakan cara memilih pada Pilkada 2015, satu, "Datang" ke Tempat Pemungutan Suara atau TPS, dua "Daftar", yakni pemilih mendaftarkan dirinya di TPS sebelum mendapatkan kertas suara,tiga, "Dicoblos", pemilih mencoblos surat suara yang ada, empat, "Dimasukkan", kemudian masukkan surat suara ke dalam kotak suara, terakhir, "Dicelup", yakni pemilih menandai jarinya dengan mencelupkan ke dalam tinta','Indonesian Female');

    }

    function persyaratan(){
          responsiveVoice.speak('Berikut merupakan persyaratan pemilih pada Pilkada 2015, satu, WNI yang berusia 17 tahun atau lebih atau sudah atau pernah kawin, dua, Tidak sedang terganggu jiwanya atau ingatannya,tiga, Terdaftar sebagai pemilih, empat, bukan anggota TNI atau Polri, lima tidak sedang dicabut hak pilihnya, enam, terdaftar di DPT, tujuh, khusus untuk pilkada, calon pemilih harus berdomisili sekurang-kurangnya 6 bulan didaerah yang bersangkutan ','Indonesian Female');

    }

    function istilah(){
        responsiveVoice.speak('Berikut beberapa istilah istilah yang ada dalam Pilkada, satu, Bawaslu, Badan Pengawas Pemilu,  dua, Dapil, Daerah Pemilihan, tiga, TPS, Tempat Pemungutan Suara, empat, DPT, Daftar Pemilih Tetap, lima, Parpol, Partai Politik.','Indonesian Female');

    }

    </script>
@endsection

@section('content')
  <!-- Section: about -->
    <section id="about" class="home-section text-center">
        
        <div class="container">

        <div class="row">
            <h2>Info Pilkada Mode Pendampingan</h2>
            <div class="col-lg-2 col-lg-offset-5">
                    
                    
                <hr class="marginbot-50">
            </div>
        </div>
        <center>
            <a  onclick="waktu()" value=""><div class="btn btn-skin pull-center">Kapan Pilkada</div></a><br><br>
                            <a id="tombol" onclick="istilah()" value=""><div class="btn btn-skin pull-center">Istilah dalam Pilkada</div></a><br><br>
                            <a id="tombol" onclick="persyaratan()" value=""><div class="btn btn-skin pull-center">Persyaratan Pemilih Pilkada</div></a><br><br>
                            <a id="tombol" onclick="cara()" value=""><div class="btn btn-skin pull-center">Bagaimana cara Memilih</div></a><br><br>
                            <a id="tombol" onclick="tips()" value=""><div class="btn btn-skin pull-center">Tips-tips memilih Kandidat</div></a><br><br>
                           	<a id="tombol" href="{{url('sleman/pendampingan')}}" value=""><div class="btn btn-skin pull-center">Kembali</div></a><br><br>
                           
                           
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


function selamatDatang() {
    
    responsiveVoice.speak('Berikut merupakan informasi-informasi yang tersedia pada halaman ini, satu, kapan pilkada diadakan, dua, istilah istilah dalam pilkada, tiga, persyaratan pemilih, empat, bagaimana cara memilih, lima, tips-tips dalam memilih kandidat','Indonesian Female');
}
</script>
@endsection