
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>wira wedding</title>

    
   <script src="https://cdn.tailwindcss.com"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                        
    <!-- simplyCountdown -->
    <link rel="stylesheet" href="countdown/circle.css">
    <script src="countdown/simplyCountdown.umd.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Sacramento&display=swap" rel="stylesheet">

    <!-- font allura -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <!-- poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Libra -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- playfari display font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="wira.css">
  
  </head>
  <body>
      <section class="loading" id="loading">
        <div class="row justify-content-center align-items-center ">
        <div class="myloading" id="myloading">
          <div class="loading-text">Open</div>
          <div class="loading-subtext">INVITATION</div>
          
          <div id="loading-screen">
            <div id="loading-text">Loading... 0%</div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>

          <div class="loading-wait">PLEASE WAIT</div>
      </div>
      </div>
    </section>


    <!-- align-items-center -->
    <div class="content" id="content">
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto d-flex text-center justify-content-center  text-white">
        <main>
            <h1>William & Tamara</h1>
            <h4>Kepada Yth.<br> Bapak/Ibu/Saudara/i</h4>
            <h2>Lappet Sinambela</h2>
            <div class="mx-auto d-flex justify-content-center align-items-center " id="button">
              <a href="#home" class="btn mt-4" id="openInvitation" onclick="hideContent(); enableScroll(); scrollToSection('home')">
                    <i class="bi bi-envelope-fill"></i> Buka Undangan
                </a>
        </main>
    </section>
    </div>


    <section id="home" class="home">
      <div class="container">
        <div class= "row justify-content-center text-center">
          <h2>The Wedding of</h2>
          <p>William &<br>Tamara</p>
          <div class="countdown-container">
          <h1>Countdown Wedding</h1>
            <div class="countdown">
                <div class="time-box" id="days">
                    00 <span>Hari</span>
                </div>
                <div class="time-box" id="hours">
                    00 <span>Jam</span>
                </div>
                <div class="time-box" id="minutes">
                    00 <span>Menit</span>
                </div>
                <div class="time-box" id="seconds">
                    00 <span>Detik</span>
                </div>
            </div>
          </div>
   
       <div class="slider" >
            <div class="slides slides-left" >
                <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
                <img src="img/jeruk.jpeg" alt="Foto 2">
                <img src="img/mdr.jpeg" alt="Foto 3">
                <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
                <img src="img/jeruk.jpeg" alt="Foto 2">
                <img src="img/mdr.jpeg" alt="Foto 3">
                <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
            </div>
        </div>
        </div>
      </div>
    </div>
    </section>

    <div class="row bg-warning" id="slider-right">
       <div class="slider" >
            <div class="slides slides-right" id="slides-right">
              <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
              <img src="img/jeruk.jpeg" alt="Foto 2">
              <img src="img/mdr.jpeg" alt="Foto 3">
              <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
              <img src="img/jeruk.jpeg" alt="Foto 2">
              <img src="img/mdr.jpeg" alt="Foto 3">
              <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
          </div>
    </div>
</div>
     

    <section class="about" id="about">
      <div class="row justify-content-center align-items-center" id="pengantin">
       <p class="fade-text">Pengantin Pria</p>

        <div class="col-sm-6" id="groom">
          <img src="img/pengantinrpria.jpeg">
          <div class="content-box">
              <h3 class="fade-text">William D.N</h3>
              <h4 class="fade-text">Putra dari Bapak Wira Napitupulu & Ibu Wira Siahaan</h4>
              <a href="https://www.instagram.com/napitupulu.william" target="blank" class="ig-container">
                  <i class="bi bi-instagram"></i>
                    <span>@napitulu.william</span>
              </a>
          </div>
        </div>
        <div class="col-sm-6" id="bride">
              <p class="fade-text">Pengantin Wanita</p>
          <img src="img/pengantinwanita.jpeg">
          <div class="content-box">

              <h3 class="fade-text">Tamara.S</h3>
              <h4 class="fade-text">Putra dari Bapak Wira Sinaga $ Ibu Wira Girsang</h4>
              <a href="https://www.instagram.com/tamaraastarii" target="blank" class="ig-container">
                    <span>@tamaraastarii</span>
                    <i class="bi bi-instagram"></i>
              </a>
          </div>
        </div>

      </div>
    </section> 


    <!-- First Parallax Section -->
   <div class="parallax" style="">
        <div class="overlay"></div>
        <div class="row justify-content-center align-items-center" id="overlay">
            <div class="card justify-content-center align-items-center">
                <h2>Resepsi</h2>
                <p>Kamis</p>
                <div class="date">30</div>
                <span>Pukul 10.00 - 12.00 WIB</span>
                <div class="details">
                    Bertempat di:<br>
                    <strong>Gereja HKBP Balige, Toba, Sumatera Utara</strong>
                </div>
                <button class="btn btn-white"><a href="">Google Maps</a></button>
            </div>
        </div>
    </div> 

    <!-- Wedding Event Section -->
   <div class="bg-black text-white py-12 text-center">
        <h2 class="text-3xl font-bold">WIRA <span class="text-warning">WEDDING</span></h2>
    </div>
 
    <!-- Second Parallax Section -->
    <div class="parallax" style="background-image: url('img/mdr.jpeg');">
        <div class="overlay"></div>
        <div class="row justify-content-center align-items-center" id="overlay">
            <div class="card justify-content-center align-items-center">
                <h2>Pemberkatan</h2>
                <p>Kamis</p>
                <div class="date">30</div>
                <span>Pukul 10.00 - 12.00 WIB</span>
                <div class="details">
                    Bertempat di:<br>
                    <strong>Gereja HKBP Balige, Toba, Sumatera Utara</strong>
                </div>
                <button class="btn btn-white"><a href="">Google Maps</a></button>
            </div>
        </div>
    </div>

   
    <div class=" text-white py-12 text-center">
        <h2 class="text-3xl font-bold text-dark">OUR <span class="text-warning">Gallery</span></h2>
    </div>

    <div class="parallax" style="background-image: url('img/mdr.jpeg');" id="gelery">
        <div class="overlay"></div>
        <div class="row justify-content-center align-items-center" id="overlay">
            <h2 class="text-3xl font-bold">OUR <span class="text-warning">Gallery</span></h2>
            <div class="card">
                <div class="row">
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
            <div class="col-6">
                <img src="img/mdr.jpeg" class="fade-in">
            </div>
        </div>



            </div>
        </div>
    </div>

    <!-- Bible Verse Section -->
   <div class="bg-black text-white py-12 text-center">
        <p class="text-warning" style="font-size: 2rem;">Matius 19 : 6</p>
        <span>"Demikianlah mereka bukan lagi dua, melainkan satu. Karena itu, apa yang telah dipersatukan Allah tidak boleh diceraikan manusia."</span>
    </div> 

        <section class="rsvp">
            <div class="row justify-content-center align-items-center" id="rsvp">
                <div class="container-fluid">
                <div class="col-12 text-center ">
                    <h2>Ucapan & Rsvp</h2>
                </div>
            </div>
            <form id="my-form"  class="row row-cols-md-auto g-3 align-items-center justify-content-center" method="POST" action="https://script.google.com/macros/s/AKfycbzkkw1vMiGvfx-N0CmJlGvnHWLMfVno36ijLQOdk4sQrwtt9scvFSX6B5moZWW42OrP/exec">
          <div class="col-12">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <textarea name="nama" id="nama" placeholder="Masukkan Nama Anda !"></textarea>
            </div>
          </div>

          <div class="col-12">
            <div class="mb-3" id="doa">
              <label for="ucapan" class="form-label">Ucapan</label>
              <textarea name="ucapan" id="ucapan" placeholder="Berikan Ucapan & Doa"></textarea>
            </div>
          </div>

          <div class="col-12">
            <div class="select-wrapper mb-3">
              <label for="status" class="form-label">Konfirmasi</label>
              <i class="bi bi-chevron-down"></i>
              <select name="status" id="status" class="status">
                <option id="select" selected>Pilih Salah Satu</option>
                <option value="1">Hadir</option>
                <option value="0">Tidak Hadir</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit" value="Submit" >Kirim</button>
          </div>

          <div class="card text-white mb-3">
            <div class="card-header text-center">Header</div>
              <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
        </form>
        </div>
    </section>

    <section class="gift">
        <div class="container-fluid">
            <div class="text-container justify-content-center text-center">
                <div class="divider">
                    <h2>Wedding </h2>
                </div>
                <span id="gift"> Gift </span>
                <p class="mt-5">Kehadiran Anda merupakan hadia terindah. Namun apabila Anda hendak memberikan tanda kasih kepada kami, dapat melalui fitur dibawah ini</p>
            </div>
            <div class="row justify-content-center align-items-center text-center">
                <div class="fade-text card mt-5">
                    <div class="col-md-8 col-12">
                        <div class="row justify-content-center align-items-center">
                            <img src="img/mandiri.png">
                        </div>
                        <span>William D.N</span>
                        <h3>107000000</h3>
                        <div class="row justify-content-center">
                            <p>Salin No.Rekening</p>
                        </div>
                    </div>
                </div>
                <div class="fade-text card mt-3">
                    <div class="col-md-8 col-12">
                        <div class="row justify-content-center">
                            <img src="img/bni.png">
                        </div>
                        <span>Tamara. S</span>
                        <h3>123456789</h3>
                        <div class="row justify-content-center">
                            <p>Salin No.Rekening</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>    
    </section>

    <section id="close">
        <div class="row justify-content-center align-items-center text-center" >
            <div class="">
                <h2 class="">Thank</h2>
                <span>You</span>
            </div>
        </div>
        </section>

       <section class="end" id="end">
            <div class="slider-container">
                <div class="text-container">
                    <h1>William & Tamara</h1>
                    <div class="divider">
                        <span class="heart"><i class="bi bi-heart-fill"></i></span>
                    </div>
                </div>
      
            <div class="end-slider">
                <img src="img/WIRAMEDAN.jpeg" alt="Foto 1">
                <img src="img/jeruk.jpeg" alt="Foto 2">
                <img src="img/mdr.jpeg" alt="Foto 3">
                <img src="img/WIRAMEDAN.jpeg" alt="Foto 4">
                <img src="img/jeruk.jpeg" alt="Foto 5">
                <img src="img/mdr.jpeg" alt="Foto 6">
            </div>
        </div>
    </section>

       

   
 

    <div id="audio-container">
      <audio id="song" autoplay loop>
        <source src="audio/Westlife.mp3" type ="audio/mp3">
      </audio>

      <div class="audio-icon-wrapper" id="musicIcon" onclick="toggleAudio()" style="display : none ;">
        <i class="bi bi-disc"></i>
      </div>
    </div>



    <!-- Script js -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
   
    <!-- countdown -->
    <script>
        function startCountdown(targetDate) {
            function updateCountdown() {
                const now = new Date().getTime();
                const timeLeft = targetDate - now;

                if (timeLeft < 0) {
                    document.querySelector('.countdown-container h1').innerText = "Acara Dimulai!";
                    document.querySelector('.countdown').style.display = "none";
                    return;
                }

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days + "<span>Hari</span>";
                document.getElementById("hours").innerHTML = hours + "<span>Jam</span>";
                document.getElementById("minutes").innerHTML = minutes + "<span>Menit</span>";
                document.getElementById("seconds").innerHTML = seconds + "<span>Detik</span>";
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }

        // Atur target waktu countdown (Format: Tahun, Bulan (0 = Januari), Tanggal, Jam, Menit, Detik)
        const targetDate = new Date(2028, 2, 28, 0, 0, 0).getTime();
        startCountdown(targetDate);
    </script>



<!-- disable scroll asli -->
 <script >
     function disableScroll() {
    // Simpan posisi scroll saat ini
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

    // Paksa scroll tetap di posisi yang sama
    window.onscroll = function () {
        window.scrollTo(scrollTop, scrollLeft);
        playAudio();
    };

    function playAudio(){
      song.volume = 0.5;
      const song = document.querySelector('#song');
      audioIconwrapper.style.display = 'flex';
      song.play();
      isPlaying = true;
     }

    // Mencegah scroll dengan keyboard dan mouse
    window.addEventListener("wheel", preventDefault, { passive: false });
    window.addEventListener("touchmove", preventDefault, { passive: false });
    window.addEventListener("keydown", preventKeys, { passive: false });

    // Nonaktifkan scroll behavior smooth
    rootElement.style.scrollBehavior = "auto";
}

// Fungsi mengaktifkan kembali scroll
function enableScroll() {
    window.onscroll = function () {};

    // Hapus event listener
    window.removeEventListener("wheel", preventDefault);
    window.removeEventListener("touchmove", preventDefault);
    window.removeEventListener("keydown", preventKeys);

    // Aktifkan scroll smooth kembali
    rootElement.style.scrollBehavior = "smooth";
}

// Fungsi mencegah default action untuk scroll
function preventDefault(event) {
    event.preventDefault();
}

// Fungsi mencegah scroll dengan keyboard (Arrow keys, Spacebar)
function preventKeys(event) {
    if (["ArrowUp", "ArrowDown", "Space", "PageUp", "PageDown"].includes(event.code)) {
        event.preventDefault();
    }
}

// Jalankan saat halaman dimuat
disableScroll();

 </script>


 <!-- Script audio -->
 <script>
        const song = document.getElementById("song");
        const musicIcon = document.getElementById("musicIcon");
        const musicIconElement = document.querySelector(".audio-icon-wrapper i");
        let isPlaying = false;

        document.getElementById("openInvitation").addEventListener("click", function () {
            document.documentElement.style.scrollBehavior = "smooth";
            document.getElementById("home").style.opacity = "1";
            playAudio();
        });

        function playAudio() {
            if (!isPlaying) {
                song.volume = 0.5;
                song.play();
                isPlaying = true;
                musicIcon.style.display = "flex";
                updateIcon(true);
            }
        }

        function toggleAudio() {
            if (song.paused) {
                song.play();
                updateIcon(true);
            } else {
                song.pause();
                updateIcon(false);
            }
        }

        function updateIcon(playing) {
            if (playing) {
                musicIconElement.classList.remove("bi-pause-circle");
                musicIconElement.classList.add("bi-disc", "bi-spin");
            } else {
                musicIconElement.classList.remove("bi-disc", "bi-spin");
                musicIconElement.classList.add("bi-pause-circle");
            }
        }
    </script>


  <!--kembalika halaman setelah post form ke goggle sheet  -->
 <script>
  window.addEventListener("load", function() {
  const form = document.getElementById('my-form');
  form.addEventListener("submit", function(e) {
    e.preventDefault();
    const data = new FormData(form);
    const action = e.target.action;
    fetch(action, {
      method: 'POST',
      body: data,
    })
    .then(() => {
      alert("Success!");
    })
  });
});

 </script>

 <script>
        function scrollToSection(id) {
            document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
        }
    </script>

<!-- progres -->
    <script>
        let progress = 0;
        let loadingText = document.getElementById("loading-text");
        let progressBar = document.querySelector(".progress");

        function updateLoading() {
            if (progress < 100) {
                progress++;
                loadingText.textContent = `Loading... ${progress}%`;
                progressBar.style.width = `${progress}%`;
                setTimeout(updateLoading, 100); // 10 detik = 100 langkah x 100ms
            } else {
                // Sembunyikan loading setelah selesai
                document.getElementById("loading-screen").classList.add("hidden");
                document.querySelector(".content").style.display = "block";
                document.querySelector(".content").style.left = "0";
                document.querySelector(".content").style.top = "0";
                document.querySelector(".content").style.transition = "all 2s ease";

            }
        }

        // Mulai loading saat halaman dibuka
        window.onload = function() {
            updateLoading();
        };
    </script>


    <!-- text muncul saat di layar -->
    <script>
        // Menggunakan Intersection Observer untuk animasi masuk dan keluar
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    entry.target.classList.remove('hide');
                } else {
                    entry.target.classList.remove('show');
                    entry.target.classList.add('hide');
                }
            });
        }, { threshold: 0.3 }); // 30% elemen terlihat baru muncul

     
        // Menyeleksi semua elemen teks yang punya class "fade-text"
        const textElements = document.querySelectorAll('.fade-text');
        textElements.forEach(el => observer.observe(el));
    </script>

    <!-- element muncul saat di layar -->
    <script>
        // Menggunakan Intersection Observer untuk animasi masuk dan keluar
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    entry.target.classList.remove('hide');
                } else {
                    entry.target.classList.remove('show');
                    entry.target.classList.add('hide');
                }
            });
        }, { threshold: 0.3 }); // 30% elemen terlihat baru muncul

     
        // Menyeleksi semua elemen teks yang punya class "fade-text"
        const textElements = document.querySelectorAll('.fade-text');
        textElements.forEach(el => observer.observe(el));
    </script>
          <!-- fade-content -->
    <!-- parralax -->
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            let parallaxElements = document.querySelectorAll(".parallax");
            window.addEventListener("scroll", function () {
                parallaxElements.forEach(function (element) {
                    let speed = 1; // Adjust parallax speed
                    let yOffset = window.pageYOffset * speed;
                    element.style.backgroundPosition = "center " + yOffset + "px";
                });
            });
        });
    </script>

    <!-- fade-in img galery -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let images = document.querySelectorAll(".fade-in");

            let observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.6 } // Mulai animasi saat 30% elemen terlihat
            );

            images.forEach(img => observer.observe(img));
        });
    </script>

    <!-- Hide content -->
    <script>
        function hideContent(){
            document.getElementById("content").style.display = "none";

            document.getElementById("loading").style.display = "none";
        }
        
    </script>

    <!-- slider end -->
    <script>
        const slider = document.querySelector(".end-slider");
        const images = document.querySelectorAll(".end-slider img");
        let index = 0;
        const imageWidth = images[0].clientWidth + 10; // Lebar gambar + gap
        const totalImages = images.length;

        function moveSlider() {
            index++;

            if (index >= totalImages) {
                index = 0; // Kembali ke gambar pertama setelah selesai
            }

            slider.style.transition = "transform 17.5s ease-out"; // Melambat sebelum berhenti
            slider.style.transform = `translateX(${-index * imageWidth}px)`;

            setTimeout(moveSlider, 19000); // Tunggu 2 detik sebelum lanjut ke gambar berikutnya
        }

        // window.onload = () => {
        //     setTimeout(moveSlider, 2000); // Mulai animasi setelah 2 detik
        // };

        document.addEventListener("DOMContentLoaded", function() {
    // Slider
    setTimeout(moveSlider, 2000);
    // Loading
    updateLoading();
});
    </script>


    <script>
    window.addEventListener("scroll", function () {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        document.body.style.overflow = "hidden"; // Matikan scroll saat sampai bawah
    }
});

</script>



<script >
    document.addEventListener("DOMContentLoaded", function () {
    document.body.style.height = document.documentElement.scrollHeight + "px";
});

</script>

    
  </body>
</html>