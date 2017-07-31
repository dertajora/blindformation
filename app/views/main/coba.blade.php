<html>
<head>
	<title>Coba on Load</title>

<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="//responsivevoice.org/responsivevoice/responsivevoice.js"></script>


</head>
<body>
<textarea id="text" cols="45" rows="3">one two three</textarea>
Hello world! Bersuara plis !
<script>

responsiveVoice.OnVoiceReady = function() {
  console.log("speech time?");
  responsiveVoice.speak('Silahkan pilih menu yang anda inginkan','Indonesian Female');
};
// responsiveVoice.addEventListener("OnReady", selamatDatang;
function selamatDatang() {
    
    responsiveVoice.speak('Silahkan pilih menu yang anda inginkan, terdapat dua pilihan menu, satu, info-info mengenai Pilkada, dua, profil kandidat peserta pilkada','Indonesian Female');
}
</script>
</body>
</html>



