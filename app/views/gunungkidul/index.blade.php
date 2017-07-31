@extends('layout.daerah')
@section('content')
<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
					
					<h2>Skenario</h2>
				<hr class="marginbot-50">
			</div>
		</div>
		<center>
            <label for="name">
                                Pilihan Mode</label>
                            <input value="" type="text" class="form-control" id="edValue" placeholder="Silahkan masukkan pilihan mode..." required="required" onKeyPress="pilihMode()" onKeyUp="pilihMode()" autofocus  />
                           
                            <br>
        <div class="row">
          
               

			<div class="col-xs-6 col-sm-3 col-md-3">
				
            </div>

			<a href="gunungkidul/pendampingan"><div class="col-xs-6 col-sm-3 col-md-3">
				
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>PENDAMPINGAN</h5>
                        <!-- <p class="subtitle">Bersama Pendamping</p> -->
                        <div class="avatar"><img src="img/team/pendamping.jpg" alt="" class="img-responsive" /></div>

                    </div>
                </div>
				
            </div></a>
            <a href="gunungkidul/pilihanmenu">
			<div class="col-xs-6 col-sm-3 col-md-3">
				
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>MANDIRI</h5>
                        <!-- <p class="subtitle">Menggunakan Sendiri</p> -->
                        <div class="avatar"><img src="img/team/sendiri.jpg"  alt="" class="img-responsive" /></div>

                    </div>
                
				</div>
            </div>
        	</a>
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
        
        window.location.href = "gunungkidul/pendampingan"

        }  else if (pilihan == "2") {
       
         window.location.href = "gunungkidul/pilihanmenu"

         } else{
           
             
             responsiveVoice.speak('Opsi yang anda pilih salah, Silahkan tekan 1 untuk mode pendampingan dan 2 untuk mode mandiri','Indonesian Female');
         }
        
    
        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
}


function selamatDatang() {
    
    responsiveVoice.speak('Silahkan pilih mode yang anda inginkan, tekan 1 jika anda ingin menggunakan mode pendampingan, tekan 2 jika anda ingin menggunakan mode mandiri','Indonesian Female');
}
</script>
@endsection