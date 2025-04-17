<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

  <header id="home" class="text-center text-white d-flex align-items-center" style="height: 100vh; position: relative; overflow: hidden;">
    <!-- Video Background -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        <video autoplay muted loop style="width: 100%; height: 100%; object-fit: cover;">
            <source src="{{ asset('videos/homepage.mp4') }}" type="video/mp4">
        </video>
    </div>
    <!-- Text Content -->
    <div class="container">
      <h4 class="alert-heading">Selamat Datang di Efglendem Gear</h4>
            <p>Senang melihatmu di sini! 🏞️ Bersama kami, rasakan petualangan tanpa batas di puncak gunung, 
               tempat di mana semangat dan keberanian bertemu dengan tantangan alam. 
               Jangan takut untuk melangkah lebih tinggi, terjatuh, dan bangkit kembali—karena setiap jejak kaki adalah langkah menuju puncak impian!
           </p>
      <hr>
       <p class="mb-0">🏔️ Jelajahi keindahan alam | 🌄 Capai puncak tertinggi | 🌱 Jadi penakluk alam sejati</p>
    </div>
  </header>

  <section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Cerita Pecinta Gunung</h2>
        <p class="lead"><marquee>Bagi anak-anak yang memiliki jiwa petualang dan cinta alam, 
            gunung adalah tempat di mana mereka merasa hidup dan bebas. Setiap pendakian bukan
             hanya tentang menaklukkan puncak, tetapi juga tentang menikmati keindahan alam, menguji 
             ketangguhan diri, dan membangun persahabatan sejati. Melalui perjalanan panjang, mereka belajar 
             menghargai setiap langkah, mengatasi rintangan, dan merasakan kedamaian di tengah keheningan gunung.</marquee></p>
       
    </div>

</x-layout>
