<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              maincolor: '#0f0f0f',     // Hitam (Background Utama)
              main2color: '#959595',    // Abu-abu (Warna Aksen)
              secondcolor: '#F0FFFF',   // Azure (Warna Teks Utama)
            },
            fontFamily: {
              poppins: ['Poppins', 'sans-serif'],
            }
          }
        }
      }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="image/Icon.png" />

    <style>
      /* --- CSS Navbar Mobile --- */
      .navbar.nav-toggle { top: 100% !important; background-color: #F0FFFF; }
      .navbar.nav-toggle ul li a { color: #0f0f0f; }

      /* --- Animasi --- */
      @keyframes animate { 100% { transform: scaleX(1); } }
      @keyframes showText { 100% { opacity: 1; } }

      /* --- CSS Hard Skill (Bar Loading) --- */
      .hard-bars .bar .prog-line { 
        transform: scaleX(0); 
        transform-origin: left; 
        animation: animate 1s cubic-bezier(1, 0, 0.5, 1) forwards; 
      }
      .hard-bars .bar .prog-line span { 
        transform: scaleX(0); 
        transform-origin: left; 
        animation: animate 1s cubic-bezier(1, 0, 0.5, 1) forwards; 
      }
      
      /* Tooltip Persen di Hard Skill (Dirapikan) */
      .prog-line span::after { 
        position: absolute; 
        padding: 1px 8px; 
        background-color: #0f0f0f; 
        color: #F0FFFF; 
        font-size: 12px; 
        border-radius: 3px; 
        top: -35px;    /* Posisi di atas bar */
        right: 0;      /* Rata kanan */
        animation: showText 0.5s 1.5s linear forwards; 
        opacity: 0; 
      }
      /* Panah kecil di bawah angka persen */
      .prog-line span::before { 
        content: ""; 
        position: absolute; 
        width: 0; 
        height: 0; 
        border: 7px solid transparent; 
        border-top-color: #0f0f0f; 
        border-bottom-width: 0px; 
        right: 6px; 
        top: -12px; 
        animation: showText 0.5s 1.5s linear forwards; 
        opacity: 0; 
      }

      /* Isi Angka Persen Hard Skill */
      .prog-line.html span::after { content: "70%"; } 
      .prog-line.css span::after { content: "70%"; } 
      .prog-line.wordpress span::after { content: "50%"; } 
      .prog-line.figma span::after { content: "60%"; } 
      .prog-line.microsoft span::after { content: "90%"; }

      /* --- CSS Soft Skill (Lingkaran) --- */
      .radial-bar .prog-bar { 
        stroke-dasharray: 502; 
        stroke-dashoffset: 502; 
        animation: animate-bar 1s linear forwards; 
      }
      @keyframes animate-bar { 100% { stroke-dashoffset: -1; } }
      
      .path { stroke-dasharray: 502; stroke-dashoffset: 502; }
      .path-1 { animation: animate-path1 1s 1s linear forwards; } 
      .path-2 { animation: animate-path2 1s 1s linear forwards; } 
      .path-3 { animation: animate-path3 1s 1s linear forwards; } 
      .path-4 { animation: animate-path4 1s 1s linear forwards; }
      
      @keyframes animate-path1 { 100% { stroke-dashoffset: 50; } } 
      @keyframes animate-path2 { 100% { stroke-dashoffset: 100; } } 
      @keyframes animate-path3 { 100% { stroke-dashoffset: 200; } } 
      @keyframes animate-path4 { 100% { stroke-dashoffset: 100; } }
      
      /* Animasi Garis Bawah (Untuk judul Footer jika ada, atau elemen lain) */
      @keyframes moving { 0% { left: -20%; } 100% { left: 100%; } }
      .underline span { animation: moving 2s linear infinite; }
    </style>
  </head>
  
  <body class="font-poppins bg-maincolor text-secondcolor overflow-x-hidden">
    
    <header class="header fixed top-0 left-0 w-full px-8 py-4 bg-transparent flex justify-between items-center z-[100] transition-all duration-200">
      <a href="#home" class="logo text-2xl font-semibold text-secondcolor">Han.Kitsu</a>
      
      <div class="fas fa-bars text-secondcolor text-2xl cursor-pointer md:hidden block"></div>
      
      <nav class="navbar absolute md:static top-[-500px] left-0 w-full md:w-auto transition-all duration-300 ease-in-out md:block md:bg-transparent">
        <ul class="flex flex-col md:flex-row items-center md:gap-8 py-4 md:py-0">
          <li class="my-2 md:my-0"><a href="#home" class="text-lg hover:border-b hover:border-secondcolor transition-all">home</a></li>
          <li class="my-2 md:my-0"><a href="#about" class="text-lg hover:border-b hover:border-secondcolor transition-all">about</a></li>
          <li class="my-2 md:my-0"><a href="#service" class="text-lg hover:border-b hover:border-secondcolor transition-all">service</a></li>
          <li class="my-2 md:my-0"><a href="#skill" class="text-lg hover:border-b hover:border-secondcolor transition-all">skill</a></li>
          <li class="my-2 md:my-0"><a href="#portfolio" class="text-lg hover:border-b hover:border-secondcolor transition-all">portfolio</a></li>
        </ul>
      </nav>
      
      <div class="btn-contact-me hidden md:block">
        <a href="#contact" class="flex justify-center items-center w-28 h-12 bg-secondcolor text-maincolor rounded-lg font-medium hover:shadow-[0_0_30px_5px_rgba(240,255,255,0.9)] transition-all">Let's Talk</a>
      </div>
    </header>

    <section id="home" class="home w-full h-screen flex flex-col justify-center items-center text-center px-4 relative overflow-hidden">
      <video autoplay loop muted plays-inline class="back-video absolute top-0 left-0 w-full h-full object-cover -z-10">
        <source src="video/Home-Bg.mp4" type="video/mp4" />
      </video>
      
      <h1 class="welcome text-4xl md:text-[2.5rem] font-bold text-secondcolor drop-shadow-[0_0.3rem_0.5rem_rgba(41,44,44,1)] mb-4">
        Hi, Welcome To My Portfolio
      </h1>
      <h4 class="explan text-xl font-normal text-secondcolor mb-6">
        This is my first framework portfolio, <br />I learned a lot of things to make this portfolio.
      </h4>
      <a href="#about">
        <button class="h-12 w-48 bg-secondcolor text-maincolor rounded-lg text-base font-normal hover:shadow-[0_0_30px_5px_rgba(240,255,255,0.9)] hover:tracking-widest transition-all duration-200">
          Let's check it out
        </button>
      </a>
    </section>

    <section class="about scroll-mt-35 grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-[5%] py-[95px]" id="about">
      <div class="about-left flex justify-center">
        <img src="image/profile.jpeg" alt="My Profile" class="w-[70%] md:w-[50%] h-auto rounded-lg shadow-[-20px_20px_12px_3px_rgba(0,0,0,0.1)]" />
      </div>
      <div class="about-right text-center md:text-left">
        <h1 class="helo text-3xl font-black mt-10 mb-2">Hi There...</h1>
        <h1 class="text-3xl font-extrabold mb-8 leading-tight drop-shadow-[0_0.3rem_5rem_rgba(0,0,0,0.4)]">I'm Muhammad Farhan Fauzi Akbar</h1>
        
        <div class="space-y-6">
          <div>
            <h4 class="text-2xl font-extrabold mb-2">A journey as a web developer</h4>
            <p class="text-base font-medium leading-tight text-justify md:text-left">
              I started my journey as a web developer with a passion for creating attractive websites.
            </p>
          </div>
          <div>
            <h4 class="text-2xl font-extrabold mb-2">A journey as a content creator</h4>
            <p class="text-base font-medium leading-tight text-justify md:text-left">
              As a content creator, I explore various forms of content, including writing and video.
            </p>
          </div>
          <div>
            <h4 class="text-2xl font-extrabold mb-2">A journey as an otaku</h4>
            <p class="text-base font-medium leading-tight text-justify md:text-left">
              I'm an otaku who loves Japanese culture, enjoying anime and manga.
            </p>
          </div>
        </div>

        <div class="btn-about flex justify-center md:justify-start gap-4 mt-8">
          <a href="#portfolio" class="btn-1 flex justify-center items-center w-36 h-12 bg-secondcolor text-maincolor rounded-lg border border-transparent hover:bg-transparent hover:text-secondcolor hover:border-secondcolor transition-all">My Project</a>
          <a href="https://drive.google.com/file/d/1Kr6Qhb0IzWwe-Dx5MSBkfaAZDPy3JLX9/view?usp=drive_link" target="_blank" class="btn-1 flex justify-center items-center w-36 h-12 bg-secondcolor text-maincolor rounded-lg border border-transparent hover:bg-transparent hover:text-secondcolor hover:border-secondcolor transition-all">Download CV</a>
        </div>
      </div>
    </section>

    <div class="container-service w-full min-h-[740px] flex flex-col justify-center items-center py-20 bg-maincolor">
      <div class="service text-center px-4 w-full scroll-mt-32" id="service">
        <h1 class="text-3xl font-bold mb-5">Service</h1>
        <p class="mb-8 font-medium">Our services cover various aspects</p>
        
        <div class="cards grid grid-cols-1 md:grid-cols-3 gap-12 px-8 max-w-[1200px] mx-auto mt-5">
          <div class="card group relative h-[400px] bg-main2color rounded-lg flex flex-col justify-center items-center text-center px-8 hover:bg-transparent hover:border-[5px] hover:border-main2color transition-all duration-300 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-maincolor -z-10 rounded-lg transition-transform duration-600 group-hover:rotate-[10deg]"></div>
            <i class="fa-solid fa-code text-4xl mb-8 text-secondcolor"></i>
            <div class="card-content">
              <h3 class="text-2xl mb-5 text-secondcolor font-bold">Web Development</h3>
              <p class="text-base text-secondcolor leading-6">We create efficient and engaging digital solutions.</p>
            </div>
          </div>
          <div class="card group relative h-[400px] bg-main2color rounded-lg flex flex-col justify-center items-center text-center px-8 hover:bg-transparent hover:border-[5px] hover:border-main2color transition-all duration-300 overflow-hidden">
             <div class="absolute top-0 left-0 w-full h-full bg-maincolor -z-10 rounded-lg transition-transform duration-600 group-hover:rotate-[10deg]"></div>
            <i class="fa-solid fa-laptop text-4xl mb-8 text-secondcolor"></i>
            <div class="card-content">
              <h3 class="text-2xl mb-5 text-secondcolor font-bold">Graphic Design</h3>
              <p class="text-base text-secondcolor leading-6">We create engaging and effective visuals.</p>
            </div>
          </div>
          <div class="card group relative h-[400px] bg-main2color rounded-lg flex flex-col justify-center items-center text-center px-8 hover:bg-transparent hover:border-[5px] hover:border-main2color transition-all duration-300 overflow-hidden">
             <div class="absolute top-0 left-0 w-full h-full bg-maincolor -z-10 rounded-lg transition-transform duration-600 group-hover:rotate-[10deg]"></div>
            <i class="fa-solid fa-photo-film text-4xl mb-8 text-secondcolor"></i>
            <div class="card-content">
              <h3 class="text-2xl mb-5 text-secondcolor font-bold">Content Creator</h3>
              <p class="text-base text-secondcolor leading-6">We create creative content ranging from text to videos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="skill pt-10 pb-20 scroll-mt-10" id="skill">
      <section class="skill-text flex flex-col items-center text-center mb-10">
        <h1 class="text-3xl font-bold">My Skill</h1>
        <p class="font-medium">Some of our skills</p>
      </section>
      
      <section class="skill-warp grid grid-cols-1 lg:grid-cols-2 gap-8 w-full px-[5%]">
        
        <div class="SH-text p-4">
          <h1 class="text-2xl font-bold text-center underline decoration-4 underline-offset-8 mb-12">Hard Skill</h1>
          <div class="hard-bars space-y-8"> 
            <div class="bar text-xl"><i class="bx bxl-html5 mr-2"></i><div class="info text-base font-medium mb-1"><span>Html</span></div><div class="prog-line html w-full h-[0.3rem] bg-secondcolor rounded-lg relative"><span class="absolute h-full w-[70%] bg-main2color rounded-lg"></span></div></div>
            <div class="bar text-xl"><i class="bx bxl-css3 mr-2"></i><div class="info text-base font-medium mb-1"><span>Css</span></div><div class="prog-line css w-full h-[0.3rem] bg-secondcolor rounded-lg relative"><span class="absolute h-full w-[70%] bg-main2color rounded-lg"></span></div></div>
            <div class="bar text-xl"><i class="bx bxl-wordpress mr-2"></i><div class="info text-base font-medium mb-1"><span>WordPress</span></div><div class="prog-line wordpress w-full h-[0.3rem] bg-secondcolor rounded-lg relative"><span class="absolute h-full w-[50%] bg-main2color rounded-lg"></span></div></div>
            <div class="bar text-xl"><i class="bx bxl-figma mr-2"></i><div class="info text-base font-medium mb-1"><span>Figma</span></div><div class="prog-line figma w-full h-[0.3rem] bg-secondcolor rounded-lg relative"><span class="absolute h-full w-[60%] bg-main2color rounded-lg"></span></div></div>
            <div class="bar text-xl"><i class="bx bxl-microsoft mr-2"></i><div class="info text-base font-medium mb-1"><span>Micorsoft Office</span></div><div class="prog-line microsoft w-full h-[0.3rem] bg-secondcolor rounded-lg relative"><span class="absolute h-full w-[90%] bg-main2color rounded-lg"></span></div></div>
          </div>
        </div>

        <div class="SH-text p-4">
          <h1 class="text-2xl font-bold text-center underline decoration-4 underline-offset-8 mb-12">Soft Skill</h1>
          <div class="radial-bars flex flex-wrap justify-evenly items-start">
            
            <div class="radial-bar relative w-40 h-44 mb-6 text-center flex flex-col items-center">
              <svg x="0px" y="0px" viewBox="0 0 200 200" class="w-28 h-28 -rotate-90"><circle class="prog-bar stroke-[10] stroke-main2color fill-transparent" cx="100" cy="100" r="80"></circle><circle class="path path-1 stroke-[10] stroke-secondcolor fill-transparent" cx="100" cy="100" r="80"></circle></svg>
              <div class="percentage absolute top-[56px] left-1/2 -translate-x-1/2 -translate-y-1/2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">90%</div>
              <div class="percen-text mt-2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">Communications</div>
            </div>
            
            <div class="radial-bar relative w-40 h-44 mb-6 text-center flex flex-col items-center">
              <svg x="0px" y="0px" viewBox="0 0 200 200" class="w-28 h-28 -rotate-90"><circle class="prog-bar stroke-[10] stroke-main2color fill-transparent" cx="100" cy="100" r="80"></circle><circle class="path path-2 stroke-[10] stroke-secondcolor fill-transparent" cx="100" cy="100" r="80"></circle></svg>
              <div class="percentage absolute top-[56px] left-1/2 -translate-x-1/2 -translate-y-1/2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">80%</div>
              <div class="percen-text mt-2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">Problem Solving</div>
            </div>
            
            <div class="radial-bar relative w-40 h-44 mb-6 text-center flex flex-col items-center">
                <svg x="0px" y="0px" viewBox="0 0 200 200" class="w-28 h-28 -rotate-90"><circle class="prog-bar stroke-[10] stroke-main2color fill-transparent" cx="100" cy="100" r="80"></circle><circle class="path path-3 stroke-[10] stroke-secondcolor fill-transparent" cx="100" cy="100" r="80"></circle></svg>
                <div class="percentage absolute top-[56px] left-1/2 -translate-x-1/2 -translate-y-1/2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">70%</div>
                <div class="percen-text mt-2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">Leadership</div>
            </div>
            
            <div class="radial-bar relative w-40 h-44 mb-6 text-center flex flex-col items-center">
                <svg x="0px" y="0px" viewBox="0 0 200 200" class="w-28 h-28 -rotate-90"><circle class="prog-bar stroke-[10] stroke-main2color fill-transparent" cx="100" cy="100" r="80"></circle><circle class="path path-4 stroke-[10] stroke-secondcolor fill-transparent" cx="100" cy="100" r="80"></circle></svg>
                <div class="percentage absolute top-[56px] left-1/2 -translate-x-1/2 -translate-y-1/2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">80%</div>
                <div class="percen-text mt-2 font-medium opacity-0 animate-[showText_0.5s_1s_linear_forwards]">Teamwork</div>
            </div>

          </div>
        </div>
      </section>
    </section>

    <div class="portfolio scroll-mt-15 w-full min-h-[50vh] bg-maincolor pb-20" id="portfolio">
      <div class="port-text text-center pt-28 px-8 mb-12">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-4 text-secondcolor drop-shadow-md">My Project</h1>
        <p class="font-medium text-main2color text-lg">These are all projects that have been completed.</p>
      </div>

      <div class="container-portfolio max-w-[1300px] mx-auto px-5">
        
        @if(isset($portfolios) && count($portfolios) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              @foreach($portfolios as $item)
              <div class="bg-[#1e1e1e] rounded-lg overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-800 flex flex-col h-full group">
                
                <div class="h-64 w-full bg-black flex items-center justify-center overflow-hidden relative">
                    <img src="{{ asset('storage/' . $item->image) }}" 
                         alt="{{ $item->title }}" 
                         class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>

                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-secondcolor mb-1">{{ $item->title }}</h3>
                    <span class="text-sm text-main2color font-semibold uppercase tracking-wide mb-3 block">{{ $item->category }}</span>
                    <p class="text-gray-400 text-sm line-clamp-3 mb-4 flex-grow">
                        {{ Str::limit($item->description, 100) }}
                    </p>
                    <a href="{{ route('portfolio.show', $item->id) }}" class="inline-block text-center w-full py-2 border border-secondcolor text-secondcolor rounded hover:bg-secondcolor hover:text-maincolor transition-colors font-medium">
                        Lihat Selengkapnya
                    </a>
                </div>
              </div>
              @endforeach
            </div>
        @else
            <div class="flex flex-col justify-center items-center py-20 text-center border-2 border-dashed border-gray-800 rounded-xl">
                <i class="fa-regular fa-folder-open text-6xl text-gray-700 mb-4"></i>
                <p class="text-gray-500 text-xl">Belum ada project yang ditambahkan.</p>
            </div>
        @endif
      </div>
    </div>

    <div class="contact scroll-mt-55 w-full flex justify-center items-center py-[95px] px-[3%] bg-center bg-cover bg-no-repeat" id="contact" style="background-image: url('image/bg-contact.jpeg');">
      <div class="contact-box w-[90%] md:w-[70%] grid grid-cols-1 md:grid-cols-2 justify-center items-center text-center bg-[#1e1e1e]/30 backdrop-blur-[5px] rounded-lg mt-8">
        <div class="contact-left hidden md:block p-4 h-full">
          <img src="image/contact.jpeg" alt="Profile-Contact" class="w-[70%] h-full object-cover rounded-lg shadow-[-20px_20px_12px_3px_rgba(0,0,0,0.1)] mx-auto" />
        </div>
        <div class="contact-right p-6 md:p-10">
          <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="88626233-d8df-4851-971a-7ab95293bd5c"/>
            <h1 class="relative pb-2 mb-4 text-2xl font-bold after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:-translate-x-1/2 after:h-1 after:w-12 after:bg-main2color after:rounded">Get in Touch With Me</h1>
            <input class="field w-full border-2 border-transparent outline-none bg-white/60 p-2 text-lg mb-5 rounded transition-all hover:bg-black/30 placeholder-gray-600 text-black" type="text" name="name" required placeholder="Your Name"/>
            <input class="field w-full border-2 border-transparent outline-none bg-white/60 p-2 text-lg mb-5 rounded transition-all hover:bg-black/30 placeholder-gray-600 text-black" type="tel" name="phone" required placeholder="Your Phone"/>
            <input class="field w-full border-2 border-transparent outline-none bg-white/60 p-2 text-lg mb-5 rounded transition-all hover:bg-black/30 placeholder-gray-600 text-black" type="email" name="email" required placeholder="Your Gmail"/>
            <textarea class="field w-full border-2 border-transparent outline-none bg-white/60 p-2 text-lg mb-5 rounded transition-all hover:bg-black/30 placeholder-gray-600 text-black min-h-[150px]" name="message" required placeholder="Message"></textarea>
            <button class="btn-contact w-full h-12 bg-maincolor text-secondcolor rounded hover:bg-transparent hover:text-maincolor hover:border hover:border-maincolor transition-all font-bold" type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>

    <div class="foot-bg bg-maincolor">
      <footer class="footer w-full relative bottom-0 bg-maincolor text-secondcolor pt-24 pb-8 leading-5">
        <div class="row-foot w-[85%] mx-auto flex flex-wrap items-start justify-between gap-8">
          
          <div class="col-foot basis-full md:basis-[15%]">
            <a href="#home" class="logo-foot text-4xl font-semibold text-secondcolor">Han.Kitsu</a>
            <br /><br />
            <p class="text-sm font-medium">I feel lucky that this portfolio provides a lot of experience and knowledge.</p>
          </div>
          
          <div class="col-foot basis-full md:basis-[15%]">
            <h3 class="text-xl font-bold mb-4">Address</h3> <p>Bogor</p>
            <p>West Java, Indonesia</p>
            <p class="email-id border-b border-azure my-5 pb-1 w-fit">han.kitsu.0517@gmail.com</p>
            <h4 class="font-bold">+62 - 82246959172</h4>
          </div>
          
          <div class="col-foot basis-full md:basis-[15%]">
            <h3 class="text-xl font-bold mb-4">Links</h3> <ul class="space-y-3 font-medium">
              <li><a href="#home" class="hover:text-main2color transition-colors">Home</a></li>
              <li><a href="#about" class="hover:text-main2color transition-colors">About</a></li>
              <li><a href="#service" class="hover:text-main2color transition-colors">Service</a></li>
              <li><a href="#skill" class="hover:text-main2color transition-colors">Skill</a></li>
              <li><a href="#portfolio" class="hover:text-main2color transition-colors">Portfolio</a></li>
              <li><a href="#contact" class="hover:text-main2color transition-colors">Contact</a></li>
            </ul>
          </div>
          
          <div class="col-foot basis-full md:basis-[15%]">
            <h3 class="text-xl font-bold mb-4">Social Media</h3> <div class="social-icon flex">
              <a href="https://www.tiktok.com/@han.kitsu" target="_blank" class="mr-3">
                <i class="bx bxl-tiktok w-8 h-8 border-2 border-secondcolor rounded-full text-center leading-[28px] hover:bg-secondcolor hover:text-maincolor transition-all"></i>
              </a>
              <a href="https://www.instagram.com/simplyhankitsu/" target="_blank" class="mr-3">
                <i class="bx bxl-instagram w-8 h-8 border-2 border-secondcolor rounded-full text-center leading-[28px] hover:bg-secondcolor hover:text-maincolor transition-all"></i>
              </a>
              <a href="https://www.youtube.com/channel/UC7tr14W54VbUr5AVpcMdoSQ" target="_blank" class="mr-3">
                <i class="bx bxl-youtube w-8 h-8 border-2 border-secondcolor rounded-full text-center leading-[28px] hover:bg-secondcolor hover:text-maincolor transition-all"></i>
              </a>
            </div>
          </div>
        </div>
        
        <hr class="w-[85%] mx-auto border-0 border-b border-secondcolor my-5" />
        <p class="copyright text-center text-sm font-medium">Copyright © 2024 by Farhan, All Rights Reserved.</p>
      </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Logic Tombol Hamburger Mobile
            $('.fa-bars').click(function(){ 
                $(this).toggleClass('fa-times'); 
                $('.navbar').toggleClass('nav-toggle'); 
            });

            // Logic saat halaman di-scroll
            $(window).on('load scroll',function(){
                $('.fa-bars').removeClass('fa-times');
                $('.navbar').removeClass('nav-toggle');
                
                // Ubah background navbar jadi hitam saat scroll turun
                if($(window).scrollTop() > 30){ 
                    $('.header').css({'background':'#0f0f0f'}); 
                }else{ 
                    $('.header').css({'background':'none'}) 
                }
            });
        });
    </script>
  </body>
</html>