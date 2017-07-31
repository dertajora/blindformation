@extends('layout.daerah')
@section('content')

    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        
        <div class="container">

        <div class="row">
            <h2>Pilihan Menu</h2>
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

            <a href="info_self"><div class="col-xs-6 col-sm-3 col-md-3">
                
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>INFO PILKADA</h5>
                        <!-- <p class="subtitle">Bersama Pendamping</p> -->
                        <div class="avatar"><img src="{{asset('img/team/info.jpg')}}" alt="" class="img-responsive" /></div>

                    </div>
                </div>
                
            </div></a>
            <a href="profil_self">
            <div class="col-xs-6 col-sm-3 col-md-3">
                
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>PROFIL KANDIDAT</h5>
                        <!-- <p class="subtitle">Menggunakan Sendiri</p> -->
                        <div class="avatar"><img src="{{asset('img/team/profil.jpg')}}"  alt="" class="img-responsive" /></div>

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
        
        window.location.href = "info_self";

        }  else if (pilihan == "2") {
       
        window.location.href = "profil_self";

         }  else if (pilihan == "3") {
       
        window.location.href = "{{URL::to('pml')}}";

         }else{
           
             
             responsiveVoice.speak('Opsi yang anda pilih salah, tekan 1 jika anda ingin mencari tahu informasi mengenai Pilkada,  tekan 2 jika anda ingin mengetahui profil kandidat pada Pilkada 2015, tekan 3, jika anda ingin merubah mode aplikasi ','Indonesian Female');
        
         }
        
    
        //var s = $("#edValue").val();
        //$("#lblValue").text(s);    
}


function selamatDatang() {
    
    responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, tekan 1 jika anda ingin mencari tahu informasi mengenai Pilkada, tekan 2 jika anda ingin mengetahui profil kandidat pada Pilkada 2015, tekan 3, jika anda ingin merubah mode aplikasi','Indonesian Female');
}
</script>
 @endsection