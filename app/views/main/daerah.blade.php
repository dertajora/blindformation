@extends('layout.main')

@section('script_atas')
<?php $jateng = array(
                    array("Kab. Klaten","klaten"),
                    array("Kab. Boyolali","boyolali"),
                    array("Kab. Sukoharjo","sukoharjo"),
                    array("Kab. Wonogiri","wonogiri"),
                    array("Kab. Sragen","sragen"),
                    array("Kab. Grobogan","grobogan"),
                    array("Kab. Blora","blora"),
                    array("Kab. Rembang","rembang"),
                    array("Kab. Demak","demak"),
                    array("Kab. Semarang","semarang"),
                    array("Kab. Kendal","kendal"),
                    array("Kab. Pemalang","pml"),
                    array("Kab. Pekalongan","pekalongan"),
                    array("Kab. Purbalingga","purbalingga"),
                    array("Kota Pekalongan","pekalongan_kota"),
                    array("Kota Surakarta","klaten"),
                    array("Kab. Kebumen","kebumen"),
                    array("Kab. Purworejo","purworejo"),
                    array("Kab. Wonosobo","wonosobo"),
                    array("Kota Semarang","semarang_kota"),
                    array("Kota Magelang","klaten"),
                    ); 
$jogja = array(
                    array("Kab. Bantul","bantul"),
                    array("Kab. Gunungkidul","gunungkidul"),
                    array("Kab. Sleman","sleman"),
                    
                   
                    ); 

$jabar = array(
                    array("Kab. Cianjur","cianjur"),
                    array("Kota Depok","depok_kota"),
                    array("Kab. Tasikmalaya","tasikmalaya"),
                    array("Kab. Indramayu","indramayu"),
                    array("Kab. Bandung","bandung"),
                     
                   
                    ); 







// Obtain a list of columns
foreach ($jateng as $key => $row) {
    $kabupaten[$key]  = $row[0];
    $link[$key] = $row[1];
}

foreach ($jabar as $key => $row) {
    $kabupaten_jabar[$key]  = $row[0];
    $link_jabar[$key] = $row[1];
}

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($kabupaten, SORT_ASC, $jateng);

array_multisort($kabupaten_jabar, SORT_ASC, $jabar);

$jumlah_jogja = count($jogja);
$jumlah = count($jateng);
$jumlah_jabar = count($jabar);
?>
	<!-- Preloader -->
<script type="text/javascript">


   function leaveChange() {
    if (document.getElementById("kabupaten").value == "surabaya"){
        // document.getElementById("message").innerHTML = "sleman";
        document.getElementById("tombol").href = "surabaya_kota";

    }  
    // else if (document.getElementById("kabupaten").value == "surabaya"){
    //     // document.getElementById("message").innerHTML = "geka";
    //     document.getElementById("tombol").href = "surabaya";

    // } 
    // else if (document.getElementById("kabupaten").value == "bantul"){
    //     // document.getElementById("message").innerHTML = "geka";
    //     document.getElementById("tombol").href = "bantul";

    // } else if (document.getElementById("kabupaten").value == "sleman"){
    //     // document.getElementById("message").innerHTML = "geka";
    //     document.getElementById("tombol").href = "sleman";

    // } else if (document.getElementById("kabupaten").value == "gunungkidul"){
    //     // document.getElementById("message").innerHTML = "geka";
    //     document.getElementById("tombol").href = "gunungkidul/";

    // } 
    // else if (document.getElementById("kabupaten").value == "pml"){
    //     // document.getElementById("message").innerHTML = "geka";
    //     document.getElementById("tombol").href = "pml";

    // } 


    <?php for ($i=0; $i < $jumlah ; $i++) { ?>
    else if (document.getElementById("kabupaten").value == "{{$jateng[$i][1]}}"){
        // document.getElementById("message").innerHTML = "geka";
        document.getElementById("tombol").href = "{{$jateng[$i][1]}}";

    }     

    <?php } ?>

        <?php for ($i=0; $i < $jumlah_jogja ; $i++) { ?>
    else if (document.getElementById("kabupaten").value == "{{$jogja[$i][1]}}"){
        // document.getElementById("message").innerHTML = "geka";
        document.getElementById("tombol").href = "{{$jogja[$i][1]}}";

    }     

    <?php } ?>
    <?php for ($i=0; $i < $jumlah_jabar ; $i++) { ?>
    else if (document.getElementById("kabupaten").value == "{{$jabar[$i][1]}}"){
        // document.getElementById("message").innerHTML = "geka";
        document.getElementById("tombol").href = "{{$jabar[$i][1]}}";

    }     

    <?php } ?>
   
   

    

    }
    </script>
@endsection
@section('content')


	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		
		<div class="container">

		<div class="row">
            <h2>Pilih daerah Pilkada</h2>

                               
			<div class="col-lg-2 col-lg-offset-5">
				    	
					
				<hr class="marginbot-50">
			</div>

		</div>
		<center>
           <form id="contact-form" method="post">  
          <center>
                    
                            <label for="provinsi">
                                Silahkan Pilih Provinsi </label>
                            <select id="provinsi" name="provinsi" class="form-control col-md-6" required="required" placeholder="Pilih Kabupaten">
                                <option value="" disabled selected hidden>Pilih Provinsi ...</option>
                                <option value="yogya">D.I. Yogyakarta</option>
                                <option value="jateng">Jawa Tengah</option>
                                  <option value="jatim">Jawa Timur</option>
                                  <option value="jabar">Jawa Barat</option>
                                
                               
                            </select>
                                <br>
                                <br>
                             <label for="subject">
                                Silahkan Pilih Kabupaten/Kota </label>
                            <select id="kabupaten" name="kabupaten" class="form-control col-md-6" required="required" placeholder="Pilih Kabupaten" onChange="leaveChange(this)">
                                <option value="" disabled selected hidden>Pilih Daerah ...</option>
                               <!--  <option value="bantul" class="yogya">Bantul</option>
                                <option value="sleman" class="yogya">Sleman</option>
                                <option value="gunungkidul" class="yogya">Gunung Kidul</option> -->
                                
                                <?php for ($i=0; $i <$jumlah ; $i++) { ?>
                                        <option value="{{$jateng[$i][1]}}" class="jateng">{{$jateng[$i][0]}}</option>
                                <?php    }


                                ?>  
                                <?php for ($i=0; $i <$jumlah_jogja ; $i++) { ?>
                                        <option value="{{$jogja[$i][1]}}" class="yogya">{{$jogja[$i][0]}}</option>
                                <?php    }
                                

                                ?>  
                                 <?php for ($i=0; $i <$jumlah_jabar ; $i++) { ?>
                                        <option value="{{$jabar[$i][1]}}" class="jabar">{{$jabar[$i][0]}}</option>
                                <?php    }
                                

                                ?>    
                                


                                <option value="surabaya" class="jatim">Kota Surabaya</option>

                               
                            </select>

                            </center><br><br><br>
                          
                              <a id="tombol" href="Pilih" value=""><div class="btn btn-skin pull-center">Pilih</div></a>
			
                <div class="row">
                    <div class="col-md-6">
                       
                        <div class="form-group pull-center ">
                            
                        </div>
                    </div>
                    
                  
                </div>
                </form>
		
        	
		</div>
		</center>
	</section>
	<!-- /Section: about -->


@endsection

@section('script_bawah')
<script src="js/jquery.chained.min.js"></script>
 <Script>
    $("#series").chained("#mark");
    $("#kabupaten").chained("#provinsi");

    </script>
<script>


responsiveVoice.OnVoiceReady = function() {
  console.log("speech time?");
 
  responsiveVoice.speak('Untuk melanjutkan, silahkan pilih kabupaten anda terlebih dahulu','Indonesian Female');
};

</script>
@endsection