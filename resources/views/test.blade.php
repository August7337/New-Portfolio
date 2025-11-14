<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio – Augustin Tarit</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    body {
      background-color: #0D1116;
      color: #E5E7EB;
      font-family: 'Inter', sans-serif;
    }
    .accent {
      color: #3B82F6;
    }

    .grille {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 2rem;
      background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 30px 30px;
    }
  </style>
</head>

<body class="scroll-smooth">
  <div id="smooth-wrapper">
    <!-- HEADER -->
    <header class="fixed top-0 left-0 right-0 bg-[#0D1116]/90 backdrop-blur-md border-b border-gray-800 z-50">
      <div class="max-w-6xl mx-auto flex justify-between items-center py-4 px-6">
        <a href="#smooth-content" class="text-xl font-bold text-white hover:text-blue-400 transition">Augustin Tarit</a>
        <nav class="hidden md:flex space-x-6 text-sm text-gray-300">
          <a href="#about" class="hover:text-blue-400 transition ">About</a>
          <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
          <a href="#experience" class="hover:text-blue-400 transition">Experience</a>
          <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
          <a href="#contact" class="hover:text-blue-400 transition">Contact</a>
          <a href="./cv.pdf" class="bg-blue-500 px-4 py-2 rounded-lg text-white hover:bg-blue-600 transition">CV PDF</a>
          @auth
            <a href="{{ route('dashboard') }}"
                class="bg-blue-500 px-4 py-2 rounded-lg text-white hover:bg-blue-600 transition">
                Dashboard
            </a>
          @endauth
        </nav>
        <div class="flex space-x-4 md:hidden text-gray-400">
          <i class="fa-solid fa-bars text-xl"></i>
        </div>
      </div>
    </header>
    <div id="smooth-content">
      <!-- HERO -->
      <div class="grille">
        <section id="hero" class="flex flex-col md:flex-row items-center justify-center h-svh pt-40 pb-24 px-8 text-center md:text-left">
          <img data-aos="fade-right" src="https://placehold.co/200x200/1A1A1A/FFFFFF?text=Photo" alt="Profile picture" class="w-40 h-40 rounded-full mb-6 md:mb-0 md:mr-10 shadow-lg border border-gray-700">
          <div data-aos="fade-left" class="max-w-xl">
            <p class="text-lg text-gray-400">HELLO I'M</p>
            <h1 class="text-4xl md:text-5xl font-bold text-white">Augustin Tarit</h1>
            <p class="font-bold text-3xl text-gray-400 mb-4">Computer Science Student</p>
            <p class="text-lg text-gray-400 mb-6">
              Passionate about <span class="accent font-medium">web development</span> and 
              <span class="accent font-medium">system administration</span>, 
              I design efficient and well-structured projects.
            </p>
            <a href="#projects" class="inline-block bg-blue-500 hover:bg-blue-600 transition text-white font-medium px-6 py-3 rounded-lg shadow-lg box-hover">
              See my projects
            </a>
          </div>
        </section>
      </div>
  <!-- ABOUT -->
  <section id="about" class="px-8 py-20 bg-[#10141B]">
    <div class="max-w-4xl mx-auto text-center md:text-left">
      <h3 class="text-3xl font-bold mb-6 text-white">About</h3>
      <p class="text-gray-300 mb-6 leading-relaxed">
        I am currently in my second year of a Computer Science degree at IUT Annecy, 
        where I am developing my skills in <span class="accent">programming</span>, 
        <span class="accent">software development</span>, and <span class="accent">system administration</span>. 
        I am looking for an internship in development to apply my knowledge 
        in a professional environment and gain hands-on experience.
      </p>
      <ul class="space-y-2 text-gray-400">
        <li><i class="fa-solid fa-location-dot accent mr-2"></i> Annecy, France</li>
        <li><i class="fa-solid fa-envelope accent mr-2"></i> augustin.tarit@gmail.com</li>
        <li><i class="fa-solid fa-phone accent mr-2"></i> +33 7 67 71 88 77</li>
      </ul>
    </div>
  </section>

  <!-- SKILLS -->
  <section id="skills" class="px-8 py-20 bg-[#0D1116]">
    <div class="max-w-6xl mx-auto text-center">
      <h3 class="text-3xl font-bold mb-10 text-white">Skills</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 text-gray-300">
        
        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
          <h4 class="font-semibold text-white mb-3"><i class="fa-solid fa-code mr-2 accent"></i>Languages</h4>
          <p>HTML ★★★★★<br>CSS ★★★★★<br>PHP ★★★★☆<br>Laravel ★★★★☆<br>JavaScript ★★★☆☆<br>C / C# ★★★☆☆</p>
        </div>

        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
          <h4 class="font-semibold text-white mb-3"><i class="fa-solid fa-gear mr-2 accent"></i>Tools & Environments</h4>
          <p>Git ★★★★☆<br>Linux ★★★★☆<br>Docker ★★★★☆</p>
        </div>

        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
          <h4 class="font-semibold text-white mb-3"><i class="fa-solid fa-language mr-2 accent"></i>Languages</h4>
          <p>French 🇫🇷 — Native<br>English 🇬🇧 — B1<br>Chinese 🇨🇳 — A0</p>
        </div>

      </div>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section id="experience" class="px-8 py-20 bg-[#10141B]">
    <div class="max-w-6xl mx-auto">
      <h3 class="text-3xl font-bold mb-10 text-white text-center">Experience</h3>

      <div class="space-y-10">

        <div data-aos="fade-left" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
          <h4 class="text-xl font-semibold text-white">Web Development Intern</h4>
          <p class="text-sm text-gray-400 mb-2">Feb. 2024 – DATASOLUTION, Chambéry</p>
          <p class="text-gray-300">Developed a web application in native PHP and managed interactions with the database.</p>
        </div>

        <div data-aos="fade-right" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
          <h4 class="text-xl font-semibold text-white">Web Design & Development Intern</h4>
          <p class="text-sm text-gray-400 mb-2">June 2022 – DATASOLUTION, Chambéry</p>
          <p class="text-gray-300">Created static HTML/CSS pages and assisted in graphic design for web integration.</p>
        </div>

        <div data-aos="fade-left" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
          <h4 class="text-xl font-semibold text-white">Street Maintenance Agent</h4>
          <p class="text-sm text-gray-400 mb-2">July 2025 – Aug. 2025 – Ville de La Motte-Servolex</p>
          <p class="text-gray-300">Worked in a team to ensure the cleanliness and safety of the city.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects" class="px-8 py-20 bg-[#0D1116] h-screen" style="width: 200vw;">
    <div class="max-w-6xl mx-auto">
      <h3 class="text-3xl font-bold mb-10 text-white">Projects</h3>

      <div class="flex w-fit">
        
        @if ($posts->isNotEmpty())
          @foreach ($posts as $post)
            <div class="bg-[#1A1F27] rounded-2xl overflow-hidden border border-gray-800 box-hover mr-10 w-96">
              <img src="/uploads/img/thumbnail/{{ $post->thumbnail }}" alt="{{ $post->title }} thumbnail" class="w-full h-48 object-cover">
              <div class="p-6 text-left">
                <h4 class="text-2xl font-semibold mb-2 text-white">{{ $post->title }}</h4>
                <p class="text-gray-400 mb-4">{{ $post->date }}</p>
                <a href="/posts/{{ $post->url }}" class="bg-blue-500 hover:bg-blue-600 transition text-white px-4 py-2 rounded-lg">See the project</a>
              </div>
            </div>
          @endforeach
        @else
          <p class="text-gray-400">No projects available at the moment.</p>
        @endif

      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="bg-[#10141B] text-center px-8 pb-20 pt-10">
    <h3 class="text-3xl font-bold mb-6 text-white">Contact</h3>
    <p class="text-gray-300 mb-8">Want to collaborate or learn more? Feel free to write to me.</p>
    <div class="box-hover w-fit mx-auto">
      <a href="mailto:augustin.tarit@gmail.com" class="bg-blue-500 hover:bg-blue-600 transition text-white px-6 py-3 rounded-lg font-medium">
        <i class="fa-solid fa-paper-plane mr-2"></i>Contact me
      </a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[#0D1116] text-center text-gray-500 py-6 border-t border-gray-800">
            <p>© {{ date('Y') }} Augustin Tarit — All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-4">
                <a href="https://www.linkedin.com/in/augustin-tarit/" class="hover:text-blue-400 transition">LinkedIn</a>
                <a href="https://github.com/August7337" class="hover:text-blue-400 transition">GitHub</a>
            </div>
        </footer>
    </div>
  </div>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="module">
  import { animate, hover } from "https://cdn.jsdelivr.net/npm/motion@latest/+esm";

  hover(".box-hover", (element) => {
      animate(element, { scale: 1.1 });

      return () => animate(element, { scale: 1 });
  });

</script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
    ScrollSmoother.create({
      wrapper: "#smooth-wrapper",
      content: "#smooth-content",
      smooth: 1,
      effects: true,
    });
  });

  var tm = gsap.timeline({
  defaults: { duration: 2, ease: "none" },
  scrollTrigger: {
    trigger: "#hero, #about",
    markers: false,
    scrub: true,
    start: "top top",
    end: "bottom top",
    pin: false,
  }
  
});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href');
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      ScrollSmoother.get().scrollTo(targetElement, true, "start");
    }
  });
});

tm.to("#hero", {
  scale: 0.3
});


const projects = document.querySelector("#projects");

function getScrollAmount() {
	let projectsWidth = projects.scrollWidth;
	return -(projectsWidth - window.innerWidth);
}

gsap.to("#projects", {
    x: () => getScrollAmount(),
    ease: "none",
    scrollTrigger: {
      trigger: "#projects",
      start: "top 20%",
      end: () => `+=${getScrollAmount() * -1}`,
	    pin:true,
	    scrub:1,
	    invalidateOnRefresh:true,
	    markers:false
    }
  });


  var allowedKeys = {
  37: 'left',
  38: 'up',
  39: 'right',
  40: 'down',
  65: 'a',
  66: 'b'
};

var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];

var konamiCodePosition = 0;

document.addEventListener('keydown', function(e) {
  var key = allowedKeys[e.keyCode];
  var requiredKey = konamiCode[konamiCodePosition];

  if (key == requiredKey) {

    konamiCodePosition++;

    if (konamiCodePosition == konamiCode.length) {
      activateCheats();
      konamiCodePosition = 0;
    }
  } else {
    konamiCodePosition = 0;
  }
});

function activateCheats() {
  document.body.style.backgroundImage = "url('tim.jpeg')";
  game = document.createElement('div');
  game.style.position = 'fixed';
  game.innerHTML = '<iframe frameborder="0" src="https://itch.io/embed-upload/6326063?color=76beff" allowfullscreen="" width="640" height="600"><a href="https://august7337.itch.io/jetpack">Play JetPack on itch.io</a></iframe>';
  document.body.appendChild(game);
}


</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>