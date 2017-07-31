@extends('layout.daerah')
@section('script_atas')
<script>
<?php $j=1;?>
@foreach ($calons as $row)
   
function calon{{$j}}() {
    <?php 
    $cek = $row->profil;
    if($cek == "" ){
    $profil = "";
    }else{
    $profil = $row->profil;    
    };

    ?>
    responsiveVoice.speak('Pasangan nomor urut {{$j}},  {{$row->nama}}, {{$profil}}', 'Indonesian Female');

}

function visimisi{{$j}}() {
    
    responsiveVoice.speak('Visi pasangan ini adalah {{$row->visi}} , Untuk mewujudkan visi tersebut, pasangan ini memiliki misi sebagai berikut, {{$row->misi}} ', 'Indonesian Female');

}
<?php $j=$j+1;?>
@endforeach



</script>
@endsection
@section('content')

<?php if ($tipe_daerah == 1) {
    $daerah = "kabupaten";
}else{
    $daerah = "kota";
    $judul = explode("_", $kota);
     $kota = $judul[0];

}

if ($kota == "pml") {
    $kota = "Pemalang";
}
?>

 <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h3>Daftar Kandidat {{$daerah}} {{$kota}}</h3>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
           
        </div>

        <div class="container">
        	 <div class="col-lg-2 col-lg-offset-5">
                    <a id="tombol" value="" href="{{url($kota.'/pendampingan')}}"><div class="btn btn-skin pull-center col-md-12">Kembali</div></a><br>
                   </div>
        <label for="name">
                               <br><Br> Silahkan Tekan Tombol dibawah foto kandidat untuk mengetahui profil kandidat</label> 
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">

            </div>
        </div>
         <div class="row">
          <?php if ($jumlah ==2) { ?>
            <div class="col-xs-6 col-sm-3 col-md-3">
            </div>
          <?php }?>
        
        <?php $i=1;?> 
            @foreach ($calons as $row)
            
            <div class="col-xs-6 col-sm-3 col-md-3">
              
                    
                
               <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Pasangan No {{$i}}</h5>
                        <p class="subtitle">{{ucwords($row->nama)}} </p>
                        <div class="avatar"><img src="{{asset('img/team/'.$i.'.jpg')}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                     <a id="tombol" value="" onclick="<?php echo "calon".$i."()"; ?>"><div class="btn btn-skin pull-center col-md-12">Profil</div></a><br><Br>
                 
                    <a id="tombol" value="" onclick="<?php echo "visimisi".$i."()"; ?>"><div class="btn btn-skin pull-center col-md-12">Visi & Misi</div></a><br>
                   
                </div>
                
            </div>
            <?php $i = $i+1;?>
            @endforeach
          
        </div>      
        </div>
        </center>      
        </div>
    </section>
    <!-- /Section: about -->
 

@endsection

@section('script_bawah')
<script>

responsiveVoice.OnVoiceReady = function() {
  console.log("speech time?");
 
   responsiveVoice.speak('Berikut merupakan halaman daftar kandidat dari {{$daerah}} <?php echo $kota ?>, terdapat {{$jumlah}} kandidat pada halaman ini, silahkan minta bantuan pada pendamping anda untuk mendengarkan profil masing-masing calon','Indonesian Female');

};
</script>


@endsection