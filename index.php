<!DOCTYPE html>
<html>
<meta charset='UTF-8' />
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5'
  name='viewport' />
<meta content='IE=edge' http-equiv='X-UA-Compatible' />

<link rel="icon" type="image/svg+xml" href="https://feeldreams.github.io/main-icon.png"> 
<link rel="apple-touch-icon" href="https://feeldreams.github.io/main-icon.png">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
<link rel="stylesheet" href="style.css">

<head>
  <title>Untuk Istriku Tercinta</title>
  <meta name="description" content="Buka bentar yaa.. ">
  <!-- 
  Made with love by Rayys!
  
     Blog: feeldream.id
     Instagram: @rayyarrr
     TikTok: @feelthisray
     
  Thanks to all <3
-->
</head>

<body>

  <!-- Ganti Audio di sini -->
  <audio src="https://feeldreams.github.io/audio/janjisuci.mp3" id="linkmp3" class="sembunyi"></audio>

  <div id="bodyblur">
    <!-- Wallpaper / Background --><img src="bg.jpg" id="wallpaper" />
  </div>

  <div id='Content'>

    <div id="ftAwal">
      <!-- Stiker Pembuka -->
      <img src="https://feeldreams.github.io/pandaputih.gif" id="ftoAwal" />
    </div>

    <div id="loveIn">
      <!-- Tombol LOVE -->
      <a href="https://www.feeldream.id/2023/01/script-feeldream.html?m=1#harimu" target="_blank" class='lovein'><svg
          class='line' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'>
          <g transform='translate(2.550170, 3.550158)'>
            <path
              d='M0.371729633,8.89614246 C-0.701270367,5.54614246 0.553729633,1.38114246 4.07072963,0.249142462 C5.92072963,-0.347857538 8.20372963,0.150142462 9.50072963,1.93914246 C10.7237296,0.0841424625 13.0727296,-0.343857538 14.9207296,0.249142462 C18.4367296,1.38114246 19.6987296,5.54614246 18.6267296,8.89614246 C16.9567296,14.2061425 11.1297296,16.9721425 9.50072963,16.9721425 C7.87272963,16.9721425 2.09772963,14.2681425 0.371729633,8.89614246 Z'>
            </path>
            <path d='M13.23843,4.013842 C14.44543,4.137842 15.20043,5.094842 15.15543,6.435842'></path>
          </g>
        </svg></a>
    </div>
    <p id="ket">Sentuh LOVEnya!</p>

    <div class="kumpulanstiker">
      <!-- Stiker untuk Konten -->
      <img src="https://feeldreams.github.io/cilukba.gif" id="fotostiker" />
      <img src="https://feeldreams.github.io/pandapanah.gif" id="fotostiker1" />
      <img src="https://feeldreams.github.io/pandaputih.gif" id="fotostikerPopup" />
      <img src="https://feeldreams.github.io/weee.gif" id="fotostikerPopupCon" />
      <img src="https://feeldreams.github.io/ngumpet.gif" id="fotostikerPopupCan" />
    </div>

    <div>
      <div id='pergeseran'>

        <!-- Pesan -->
        <p><b><img src="https://feeldreams.github.io/pusn.gif" /><br>
            <span>Hai Istrinya Abii🤭❤️</span>
          </b></p>

        <p><b><img src="https://feeldreams.github.io/mikir.gif" /><br>
            <span>Abii Cuma Mau<br>Bilang Nih hihi 🤭♥️</span>
          </b></p>

        <p><b><img src="https://feeldreams.github.io/cilukba.gif" /><br>
            <span>Ciyeeee Yang Udah ketemu Tnggal 6 Februari Lagi nih hihi 😜</span>
          </b></p>

        <p><b><img src="https://feeldreams.github.io/g5.gif" /><br>
            <span class="ft">Selamat Ulang Tahun! Yah Istrinya abii 🥳</span>
          </b></p>

        <p><b><img src="https://feeldreams.github.io/mndkat.gif" /><br>
            <span>Moga Panjang Umur<br>dan Sehat Selalu yaa Aamiin YaAllah🥰</span>
          </b></p>

      </div>
    </div>

    <!-- Edit Pesan Akhir di Sini -->
    <div>
      <blockquote id='bq'>
        <p id="teksnim">Happy Level Up Day! 🥳</p>
        <p id="kalimat"><span id="klganti"><b>Besyahdaaahhhh 🤣</b><br><br></span>Intinya Semangat Terus,<br> Dan tetap sama abii sampai kapanpun.. <br> Pesan Abii Semoga di hari spesial umii ini<br> jadi hari yg buat mii sangat bahagia 🥳<br><br><span class="ft">Wish You All The Best ✨</span></p>
      </blockquote>
    </div>

    <!--<p id="ketgeser">Klik untuk Geser!</p>-->
    <div id="Tombol">
      <a onClick="multifungsi()">
        <b id="tmbl">Geser &#128073;</b>
      </a>
    </div>

  </div>

  <script src="https://htmlku.com/harimu/play/script.js"></script>
  <script>
    function bqmuncul() {
      if (poinjwb == 1) {
        katakata = kalimat.innerHTML; kalimat.innerHTML = "";
      } else {
        klganti.innerHTML = "Udah ah segitu aja 🤣<br><br>"; katakata = kalimat.innerHTML; kalimat.innerHTML = "";
      }
      Content.style = "opacity:1;margin-top:7vh"; fotostiker.style = "display:none"; pergeseran.style = "display:none"; Tombol.style = ""; bq.style = "position:relative;opacity:1;visibility:visible;margin-top:20px;transform: scale(1);";
      setTimeout(kalimatakhir, 200); ftganti = 0; fthilang();
    }

    tompositif = "Mau";
    tomnegatif = "Gamau";
    async function aksibalas() {
      var { isConfirmed: prtanya } = await swals.fire({
        title: 'Umii Mau Kado Gak Nih? 🤭❤️',
        imageUrl: '' + fotostikerPopup.src, showCancelButton: true, confirmButtonText: '' + tompositif, cancelButtonText: '' + tomnegatif, cancelButtonColor: '#FF0000',
      });
      if (prtanya) {
        await swalst.fire({
          title: 'Tapi Boong! Wleeee😜🤣',
          html: 'Gajadi Kasih Kado Ah hhi😜❤️',
          imageUrl: '' + fotostikerPopupCon.src,
        });
        poinjwb = 1;
      } else {
        await swals.fire({
          title: 'Yaaahh!',
          html: 'Yaudah kalo gamau mah😜❤️',
          imageUrl: '' + fotostikerPopupCan.src,
        });
        poinjwb = 2;
      }
      bqmuncul();
    }
  </script>
</body>

</html>