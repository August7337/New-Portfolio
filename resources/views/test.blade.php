<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio – Augustin Tarit</title>

    @vite('resources/css/app.css')

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
            background-image: linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        .glass {
            position: relative;
            background: hsla(0, 0%, 100%, .04);
            backdrop-filter: blur(20px) saturate(110%) brightness(1.05);
            -webkit-backdrop-filter: blur(20px) saturate(110%) brightness(1.05);
            border: 1px solid hsla(0, 0%, 100%, .2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, .1), 0 2px 8px rgba(0, 0, 0, .05), inset 0 0 0 1px hsla(0, 0%, 100%, .1);
            border-radius: 15px;
            isolation: isolate;
        }

        .glass:before {
            background: linear-gradient(135deg, hsla(0, 0%, 100%, .15), hsla(0, 0%, 100%, .05) 20%, transparent 40%, transparent 60%, hsla(0, 0%, 100%, .03) 80%, hsla(0, 0%, 100%, .08));
            opacity: .6;
        }

        .glass:after,
        .glass:before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            pointer-events: none;
            mix-blend-mode: overlay
        }

        .glass:after {
            background: radial-gradient(circle 400px at var(--mouse-x, 50%) var(--mouse-y, 50%), hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .08) 30%, transparent 70%);
            opacity: 0;
            transition: opacity .5s cubic-bezier(.4, 0, .2, 1);
        }

        .glass:hover:after {
            opacity: 1
        }
    </style>
</head>

<body class="scroll-smooth">
    <div id="smooth-wrapper">
        <!-- HEADER -->
        <header class="fixed top-0 left-0 right-0 bg-[#0D1116]/90 backdrop-blur-md border-b border-gray-800 z-50">
            <div class="max-w-6xl mx-auto flex justify-between items-center py-4 px-6">
                <a href="#smooth-content" class="text-xl font-bold text-white hover:text-blue-400 transition">Augustin
                    Tarit</a>
                <nav class="hidden md:flex space-x-6 text-sm text-gray-300">
                    <a href="#about" class="hover:text-blue-400 transition ">About</a>
                    <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
                    <a href="#education" class="hover:text-blue-400 transition">Education</a>
                    <a href="#experience" class="hover:text-blue-400 transition">Experience</a>
                    <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
                    <a href="#references" class="hover:text-blue-400 transition">References</a>
                    <a href="#contact" class="hover:text-blue-400 transition">Contact</a>
                    <a href="./cv.pdf" target="_blank"
                        class="bg-blue-500 px-4 py-2 rounded-lg text-white hover:bg-blue-600 transition">CV PDF</a>
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
                <section id="hero"
                    class="flex flex-col md:flex-row items-center justify-center h-svh pt-40 pb-24 px-8 text-center md:text-left">
                    <img data-aos="fade-right" src="https://placehold.co/200x200/1A1A1A/FFFFFF?text=Photo"
                        alt="Profile picture"
                        class="w-40 h-40 rounded-full mb-6 md:mb-0 md:mr-10 shadow-lg border border-gray-700">
                    <div data-aos="fade-left" class="max-w-xl">
                        <p class="text-lg text-gray-400">HELLO I'M</p>
                        <h1 class="text-4xl md:text-5xl font-bold text-white">Augustin Tarit</h1>
                        <p class="font-bold text-3xl text-gray-400 mb-4">Computer Science Student</p>
                        <p class="text-lg text-gray-400 mb-6">
                            Passionate about <span class="accent font-medium">web development</span> and
                            <span class="accent font-medium">system administration</span>,
                            I design efficient and well-structured projects.
                        </p>
                        <a href="#projects"
                            class="inline-block bg-blue-500 hover:bg-blue-600 transition text-white font-medium px-6 py-3 rounded-lg shadow-lg box-hover">
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
                        I am currently a second-year student in a Bachelor of Technology in Computer Science, where I am
                        developing strong skills in <span class="accent">programming</span>, <span
                            class="accent">software development</span>, and <span class="accent">system
                            administration</span>.<br>
                        My main strengths are my adaptability, problem-solving abilities, and my capacity to work both
                        independently and as part of a team.<br>
                        I am seeking an <span class="accent">internship</span> as a <span class="accent">software
                            developer</span>, in order to apply the knowledge I have acquired
                        during my studies in a professional environment.<br>
                        This opportunity would allow me to gain valuable experience, contribute effectively to projects,
                        and strengthen my expertise in development while preparing for future professional challenges.
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
                            <h4 class="font-semibold text-white mb-3"><i
                                    class="fa-solid fa-code mr-2 accent"></i>Languages</h4>
                            <p>HTML ★★★★★<br>CSS ★★★★★<br>PHP ★★★★☆<br>Laravel ★★★★☆<br>JavaScript ★★★☆☆<br>C / C# ★★★☆☆
                            </p>
                        </div>

                        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="font-semibold text-white mb-3"><i class="fa-solid fa-gear mr-2 accent"></i>Tools
                                & Environments</h4>
                            <p>Git ★★★★☆<br>Linux ★★★★☆<br>Docker ★★★★☆</p>
                        </div>

                        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="font-semibold text-white mb-3"><i
                                    class="fa-solid fa-language mr-2 accent"></i>Languages</h4>
                            <p>French 🇫🇷 — Native<br>English 🇬🇧 — B1<br>Chinese 🇨🇳 — A0</p>
                        </div>
                    </div>
                    <!-- Soft Skills -->
                    <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover mt-8">
                        <h4 class="font-semibold text-white mb-3"><i class="fa-solid fa-user-check mr-2 accent"></i>Soft
                            Skills</h4>
                        <p class="text-gray-300 leading-relaxed">
                            I am self-directed and able to take initiative.<br>
                            I am responsible and considerate.<br>
                            I am very task-oriented and focused.
                        </p>
                    </div>
                    <div data-state="active" data-orientation="horizontal" role="tabpanel"
                        aria-labelledby="radix-:R4l9uja:-trigger-backend" id="radix-:R4l9uja:-content-backend"
                        tabindex="0"
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" style="opacity: 1;">
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 448 512" class="w-8 h-8 transition-all duration-300"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(51, 153, 51);">
                                                    <path
                                                        d="M224 508c-6.7 0-13.5-1.8-19.4-5.2l-61.7-36.5c-9.2-5.2-4.7-7-1.7-8 12.3-4.3 14.8-5.2 27.9-12.7 1.4-.8 3.2-.5 4.6.4l47.4 28.1c1.7 1 4.1 1 5.7 0l184.7-106.6c1.7-1 2.8-3 2.8-5V149.3c0-2.1-1.1-4-2.9-5.1L226.8 37.7c-1.7-1-4-1-5.7 0L36.6 144.3c-1.8 1-2.9 3-2.9 5.1v213.1c0 2 1.1 4 2.9 4.9l50.6 29.2c27.5 13.7 44.3-2.4 44.3-18.7V167.5c0-3 2.4-5.3 5.4-5.3h23.4c2.9 0 5.4 2.3 5.4 5.3V378c0 36.6-20 57.6-54.7 57.6-10.7 0-19.1 0-42.5-11.6l-48.4-27.9C8.1 389.2.7 376.3.7 362.4V149.3c0-13.8 7.4-26.8 19.4-33.7L204.6 9c11.7-6.6 27.2-6.6 38.8 0l184.7 106.7c12 6.9 19.4 19.8 19.4 33.7v213.1c0 13.8-7.4 26.7-19.4 33.7L243.4 502.8c-5.9 3.4-12.6 5.2-19.4 5.2zm149.1-210.1c0-39.9-27-50.5-83.7-58-57.4-7.6-63.2-11.5-63.2-24.9 0-11.1 4.9-25.9 47.4-25.9 37.9 0 51.9 8.2 57.7 33.8.5 2.4 2.7 4.2 5.2 4.2h24c1.5 0 2.9-.6 3.9-1.7s1.5-2.6 1.4-4.1c-3.7-44.1-33-64.6-92.2-64.6-52.7 0-84.1 22.2-84.1 59.5 0 40.4 31.3 51.6 81.8 56.6 60.5 5.9 65.2 14.8 65.2 26.7 0 20.6-16.6 29.4-55.5 29.4-48.9 0-59.6-12.3-63.2-36.6-.4-2.6-2.6-4.5-5.3-4.5h-23.9c-3 0-5.3 2.4-5.3 5.3 0 31.1 16.9 68.2 97.8 68.2 58.4-.1 92-23.2 92-63.4z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            Node.js</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    role="img" viewBox="0 0 24 24"
                                                    class="w-8 h-8 transition-all duration-300" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(0, 0, 0);">
                                                    <path
                                                        d="M24 18.588a1.529 1.529 0 01-1.895-.72l-3.45-4.771-.5-.667-4.003 5.444a1.466 1.466 0 01-1.802.708l5.158-6.92-4.798-6.251a1.595 1.595 0 011.9.666l3.576 4.83 3.596-4.81a1.435 1.435 0 011.788-.668L21.708 7.9l-2.522 3.283a.666.666 0 000 .994l4.804 6.412zM.002 11.576l.42-2.075c1.154-4.103 5.858-5.81 9.094-3.27 1.895 1.489 2.368 3.597 2.275 5.973H1.116C.943 16.447 4.005 19.009 7.92 17.7a4.078 4.078 0 002.582-2.876c.207-.666.548-.78 1.174-.588a5.417 5.417 0 01-2.589 3.957 6.272 6.272 0 01-7.306-.933 6.575 6.575 0 01-1.64-3.858c0-.235-.08-.455-.134-.666A88.33 88.33 0 010 11.577zm1.127-.286h9.654c-.06-3.076-2.001-5.258-4.59-5.278-2.882-.04-4.944 2.094-5.071 5.264z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            Express</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 384 512" class="w-8 h-8 transition-all duration-300"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(0, 115, 150);">
                                                    <path
                                                        d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            Java</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    role="img" viewBox="0 0 24 24"
                                                    class="w-8 h-8 transition-all duration-300" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(109, 179, 63);">
                                                    <path
                                                        d="M21.8537 1.4158a10.4504 10.4504 0 0 1-1.284 2.2471A11.9666 11.9666 0 1 0 3.8518 20.7757l.4445.3951a11.9543 11.9543 0 0 0 19.6316-8.2971c.3457-3.0126-.568-6.8649-2.0743-11.458zM5.5805 20.8745a1.0174 1.0174 0 1 1-.1482-1.4323 1.0396 1.0396 0 0 1 .1482 1.4323zm16.1991-3.5806c-2.9385 3.9263-9.2601 2.5928-13.2852 2.7904 0 0-.7161.0494-1.4323.1481 0 0 .2717-.1234.6174-.2469 2.8398-.9877 4.1732-1.1853 5.9018-2.0743 3.2349-1.6545 6.4698-5.2844 7.1118-9.0379-1.2347 3.6053-4.9881 6.7167-8.3959 7.9761-2.3459.8643-6.5685 1.7039-6.5685 1.7039l-.1729-.0988c-2.8645-1.4076-2.9632-7.6304 2.2718-9.6306 2.2966-.889 4.4696-.395 6.9637-.9877 2.6422-.6174 5.7043-2.5929 6.939-5.1857 1.3828 4.1732 3.062 10.643.0493 14.6434z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            Spring Boot</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 448 512" class="w-8 h-8 transition-all duration-300"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(55, 118, 171);">
                                                    <path
                                                        d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            Python</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    role="img" viewBox="0 0 24 24"
                                                    class="w-8 h-8 transition-all duration-300" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(9, 46, 32);">
                                                    <path
                                                        d="M11.146 0h3.924v18.166c-2.013.382-3.491.535-5.096.535-4.791 0-7.288-2.166-7.288-6.32 0-4.002 2.65-6.6 6.753-6.6.637 0 1.121.05 1.707.203zm0 9.143a3.894 3.894 0 00-1.325-.204c-1.988 0-3.134 1.223-3.134 3.365 0 2.09 1.096 3.236 3.109 3.236.433 0 .79-.025 1.35-.102V9.142zM21.314 6.06v9.098c0 3.134-.229 4.638-.917 5.937-.637 1.249-1.478 2.039-3.211 2.905l-3.644-1.733c1.733-.815 2.574-1.53 3.109-2.625.561-1.121.739-2.421.739-5.835V6.059h3.924zM17.39.021h3.924v4.026H17.39z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            Django</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    role="img" viewBox="0 0 24 24"
                                                    class="w-8 h-8 transition-all duration-300" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(51, 103, 145);">
                                                    <path
                                                        d="M23.5594 14.7228a.5269.5269 0 0 0-.0563-.1191c-.139-.2632-.4768-.3418-1.0074-.2321-1.6533.3411-2.2935.1312-2.5256-.0191 1.342-2.0482 2.445-4.522 3.0411-6.8297.2714-1.0507.7982-3.5237.1222-4.7316a1.5641 1.5641 0 0 0-.1509-.235C21.6931.9086 19.8007.0248 17.5099.0005c-1.4947-.0158-2.7705.3461-3.1161.4794a9.449 9.449 0 0 0-.5159-.0816 8.044 8.044 0 0 0-1.3114-.1278c-1.1822-.0184-2.2038.2642-3.0498.8406-.8573-.3211-4.7888-1.645-7.2219.0788C.9359 2.1526.3086 3.8733.4302 6.3043c.0409.818.5069 3.334 1.2423 5.7436.4598 1.5065.9387 2.7019 1.4334 3.582.553.9942 1.1259 1.5933 1.7143 1.7895.4474.1491 1.1327.1441 1.8581-.7279.8012-.9635 1.5903-1.8258 1.9446-2.2069.4351.2355.9064.3625 1.39.3772a.0569.0569 0 0 0 .0004.0041 11.0312 11.0312 0 0 0-.2472.3054c-.3389.4302-.4094.5197-1.5002.7443-.3102.064-1.1344.2339-1.1464.8115-.0025.1224.0329.2309.0919.3268.2269.4231.9216.6097 1.015.6331 1.3345.3335 2.5044.092 3.3714-.6787-.017 2.231.0775 4.4174.3454 5.0874.2212.5529.7618 1.9045 2.4692 1.9043.2505 0 .5263-.0291.8296-.0941 1.7819-.3821 2.5557-1.1696 2.855-2.9059.1503-.8707.4016-2.8753.5388-4.1012.0169-.0703.0357-.1207.057-.1362.0007-.0005.0697-.0471.4272.0307a.3673.3673 0 0 0 .0443.0068l.2539.0223.0149.001c.8468.0384 1.9114-.1426 2.5312-.4308.6438-.2988 1.8057-1.0323 1.5951-1.6698zM2.371 11.8765c-.7435-2.4358-1.1779-4.8851-1.2123-5.5719-.1086-2.1714.4171-3.6829 1.5623-4.4927 1.8367-1.2986 4.8398-.5408 6.108-.13-.0032.0032-.0066.0061-.0098.0094-2.0238 2.044-1.9758 5.536-1.9708 5.7495-.0002.0823.0066.1989.0162.3593.0348.5873.0996 1.6804-.0735 2.9184-.1609 1.1504.1937 2.2764.9728 3.0892.0806.0841.1648.1631.2518.2374-.3468.3714-1.1004 1.1926-1.9025 2.1576-.5677.6825-.9597.5517-1.0886.5087-.3919-.1307-.813-.5871-1.2381-1.3223-.4796-.839-.9635-2.0317-1.4155-3.5126zm6.0072 5.0871c-.1711-.0428-.3271-.1132-.4322-.1772.0889-.0394.2374-.0902.4833-.1409 1.2833-.2641 1.4815-.4506 1.9143-1.0002.0992-.126.2116-.2687.3673-.4426a.3549.3549 0 0 0 .0737-.1298c.1708-.1513.2724-.1099.4369-.0417.156.0646.3078.26.3695.4752.0291.1016.0619.2945-.0452.4444-.9043 1.2658-2.2216 1.2494-3.1676 1.0128zm2.094-3.988-.0525.141c-.133.3566-.2567.6881-.3334 1.003-.6674-.0021-1.3168-.2872-1.8105-.8024-.6279-.6551-.9131-1.5664-.7825-2.5004.1828-1.3079.1153-2.4468.079-3.0586-.005-.0857-.0095-.1607-.0122-.2199.2957-.2621 1.6659-.9962 2.6429-.7724.4459.1022.7176.4057.8305.928.5846 2.7038.0774 3.8307-.3302 4.7363-.084.1866-.1633.3629-.2311.5454zm7.3637 4.5725c-.0169.1768-.0358.376-.0618.5959l-.146.4383a.3547.3547 0 0 0-.0182.1077c-.0059.4747-.054.6489-.115.8693-.0634.2292-.1353.4891-.1794 1.0575-.11 1.4143-.8782 2.2267-2.4172 2.5565-1.5155.3251-1.7843-.4968-2.0212-1.2217a6.5824 6.5824 0 0 0-.0769-.2266c-.2154-.5858-.1911-1.4119-.1574-2.5551.0165-.5612-.0249-1.9013-.3302-2.6462.0044-.2932.0106-.5909.019-.8918a.3529.3529 0 0 0-.0153-.1126 1.4927 1.4927 0 0 0-.0439-.208c-.1226-.4283-.4213-.7866-.7797-.9351-.1424-.059-.4038-.1672-.7178-.0869.067-.276.1831-.5875.309-.9249l.0529-.142c.0595-.16.134-.3257.213-.5012.4265-.9476 1.0106-2.2453.3766-5.1772-.2374-1.0981-1.0304-1.6343-2.2324-1.5098-.7207.0746-1.3799.3654-1.7088.5321a5.6716 5.6716 0 0 0-.1958.1041c.0918-1.1064.4386-3.1741 1.7357-4.4823a4.0306 4.0306 0 0 1 .3033-.276.3532.3532 0 0 0 .1447-.0644c.7524-.5706 1.6945-.8506 2.802-.8325.4091.0067.8017.0339 1.1742.081 1.939.3544 3.2439 1.4468 4.0359 2.3827.8143.9623 1.2552 1.9315 1.4312 2.4543-1.3232-.1346-2.2234.1268-2.6797.779-.9926 1.4189.543 4.1729 1.2811 5.4964.1353.2426.2522.4522.2889.5413.2403.5825.5515.9713.7787 1.2552.0696.087.1372.1714.1885.245-.4008.1155-1.1208.3825-1.0552 1.717-.0123.1563-.0423.4469-.0834.8148-.0461.2077-.0702.4603-.0994.7662zm.8905-1.6211c-.0405-.8316.2691-.9185.5967-1.0105a2.8566 2.8566 0 0 0 .135-.0406 1.202 1.202 0 0 0 .1342.103c.5703.3765 1.5823.4213 3.0068.1344-.2016.1769-.5189.3994-.9533.6011-.4098.1903-1.0957.333-1.7473.3636-.7197.0336-1.0859-.0807-1.1721-.151zm.5695-9.2712c-.0059.3508-.0542.6692-.1054 1.0017-.055.3576-.112.7274-.1264 1.1762-.0142.4368.0404.8909.0932 1.3301.1066.887.216 1.8003-.2075 2.7014a3.5272 3.5272 0 0 1-.1876-.3856c-.0527-.1276-.1669-.3326-.3251-.6162-.6156-1.1041-2.0574-3.6896-1.3193-4.7446.3795-.5427 1.3408-.5661 2.1781-.463zm.2284 7.0137a12.3762 12.3762 0 0 0-.0853-.1074l-.0355-.0444c.7262-1.1995.5842-2.3862.4578-3.4385-.0519-.4318-.1009-.8396-.0885-1.2226.0129-.4061.0666-.7543.1185-1.0911.0639-.415.1288-.8443.1109-1.3505.0134-.0531.0188-.1158.0118-.1902-.0457-.4855-.5999-1.938-1.7294-3.253-.6076-.7073-1.4896-1.4972-2.6889-2.0395.5251-.1066 1.2328-.2035 2.0244-.1859 2.0515.0456 3.6746.8135 4.8242 2.2824a.908.908 0 0 1 .0667.1002c.7231 1.3556-.2762 6.2751-2.9867 10.5405zm-8.8166-6.1162c-.025.1794-.3089.4225-.6211.4225a.5821.5821 0 0 1-.0809-.0056c-.1873-.026-.3765-.144-.5059-.3156-.0458-.0605-.1203-.178-.1055-.2844.0055-.0401.0261-.0985.0925-.1488.1182-.0894.3518-.1226.6096-.0867.3163.0441.6426.1938.6113.4186zm7.9305-.4114c.0111.0792-.049.201-.1531.3102-.0683.0717-.212.1961-.4079.2232a.5456.5456 0 0 1-.075.0052c-.2935 0-.5414-.2344-.5607-.3717-.024-.1765.2641-.3106.5611-.352.297-.0414.6111.0088.6356.1851z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            PostgreSQL</h3>
                                    </div>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow group glass border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden cursor-pointer h-full card-hover">
                                    <div class="p-6 text-center">
                                        <div class="relative mb-4">
                                            <div
                                                class="w-16 h-16 mx-auto rounded-2xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all duration-300 group-hover:scale-110">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    role="img" viewBox="0 0 24 24"
                                                    class="w-8 h-8 transition-all duration-300" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg"
                                                    style="color: rgb(71, 162, 72);">
                                                    <path
                                                        d="M17.193 9.555c-1.264-5.58-4.252-7.414-4.573-8.115-.28-.394-.53-.954-.735-1.44-.036.495-.055.685-.523 1.184-.723.566-4.438 3.682-4.74 10.02-.282 5.912 4.27 9.435 4.888 9.884l.07.05A73.49 73.49 0 0111.91 24h.481c.114-1.032.284-2.056.51-3.07.417-.296.604-.463.85-.693a11.342 11.342 0 003.639-8.464c.01-.814-.103-1.662-.197-2.218zm-5.336 8.195s0-8.291.275-8.29c.213 0 .49 10.695.49 10.695-.381-.045-.765-1.76-.765-2.405z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-white mb-2 transition-all duration-300">
                                            MongoDB</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- EDUCATION -->
            <section id="education" class="px-8 py-20 bg-[#10141B]">
                <div class="max-w-6xl mx-auto text-center">
                    <h3 class="text-3xl font-bold mb-10 text-white">Education</h3>
                    <div class="space-y-10">
                        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">2024 – 2027 (in progress)</h4>
                            <p class="text-sm text-gray-400 mb-2">Bachelor of Computer Science</p>
                            <p class="text-gray-300">IUT d’Annecy – Annecy-le-Vieux, France</p>
                            <p class="text-gray-400">2nd year in progress</p>
                        </div>
                        <div data-aos="fade-up" class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">2024</h4>
                            <p class="text-sm text-gray-400 mb-2">High School Diploma (Sciences and Technologies of
                                Industry and Sustainable Development)</p>
                            <p class="text-gray-300">Lycée Saint-Ambroise – Chambéry, France</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EXPERIENCE -->
            <section id="experience" class="px-8 py-20 bg-[#10141B]">
                <div class="max-w-6xl mx-auto">
                    <h3 class="text-3xl font-bold mb-10 text-white text-center">Experience</h3>

                    <div class="space-y-10">
                        <div data-aos="fade-right"
                            class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">Logistics Agent</h4>
                            <p class="text-sm text-gray-400 mb-2">Aug. 2025 - Oct. 2025 – Interim Missions at Mondial
                                Relay</p>
                            <p class="text-gray-300">Performed five interim missions, ensuring efficient package
                                handling and logistics operations.</p>
                        </div>

                        <div data-aos="fade-left"
                            class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">Street Maintenance Agent</h4>
                            <p class="text-sm text-gray-400 mb-2">July 2025 – Aug. 2025 – City of La Motte-Servolex</p>
                            <p class="text-gray-300">Worked in a team to ensure the cleanliness and safety of the city.
                            </p>
                        </div>

                        <div data-aos="fade-left"
                            class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">Freelance Fiverr</h4>
                            <p class="text-sm text-gray-400 mb-2">March 2025 – July 2025</p>
                            <p class="text-gray-300">Completed three freelance missions, including Linux server
                                installations and the development of a mobile application using React Native.</p>
                        </div>

                        <div data-aos="fade-right"
                            class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">Web Development Intern</h4>
                            <p class="text-sm text-gray-400 mb-2">Feb. 2024 – DATASOLUTION, Chambéry</p>
                            <p class="text-gray-300">Developed a web application in native PHP and managed interactions
                                with the database.</p>
                        </div>

                        <div data-aos="fade-left"
                            class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white">Web Design & Development Intern</h4>
                            <p class="text-sm text-gray-400 mb-2">June 2022 – DATASOLUTION, Chambéry</p>
                            <p class="text-gray-300">Created static HTML/CSS pages and assisted in graphic design for
                                web integration.</p>
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
                                <div
                                    class="bg-[#1A1F27] rounded-2xl overflow-hidden border border-gray-800 box-hover mr-10 w-96">
                                    <img src="/uploads/img/thumbnail/{{ $post->thumbnail }}"
                                        alt="{{ $post->title }} thumbnail" class="w-full h-48 object-cover">
                                    <div class="p-6 text-left">
                                        <h4 class="text-2xl font-semibold mb-2 text-white">{{ $post->title }}</h4>
                                        <p class="text-gray-400 mb-4">{{ $post->date }}</p>
                                        <a href="/posts/{{ $post->url }}"
                                            class="bg-blue-500 hover:bg-blue-600 transition text-white px-4 py-2 rounded-lg">See
                                            the project</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-400">No projects available at the moment.</p>
                        @endif

                    </div>
                </div>
            </section>

            <!-- REFERENCES -->
            <section id="references" class="px-8 py-20 bg-[#10141B]">
                <div class="max-w-6xl mx-auto text-center">
                    <h3 class="text-3xl font-bold mb-10 text-white">References</h3>
                    <hr class="border-gray-700 mb-10">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-8 text-gray-300">
                        <!-- Reference 1 -->
                        <div class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white mb-3">Stephanie Vibrac</h4>
                            <p class="text-sm text-gray-400 mb-2">English Professor and International Coordinator at
                                the International Office</p>
                            <p class="text-gray-300 mb-2">Place: Université Savoie Mont Blanc / IUT d’Annecy –
                                Annecy-le-Vieux, France</p>
                            <p class="text-gray-300">Email: <a href="mailto:stephanie.vibrac@univ-smb.fr"
                                    class="text-blue-400 hover:underline">stephanie.vibrac@univ-smb.fr</a></p>
                        </div>
                        <!-- Reference 2 -->
                        <div class="bg-[#1A1F27] p-6 rounded-xl border border-gray-800 box-hover">
                            <h4 class="text-xl font-semibold text-white mb-3">Benoit Diard</h4>
                            <p class="text-sm text-gray-400 mb-2">IT Professor</p>
                            <p class="text-gray-300 mb-2">Place: Université Savoie Mont Blanc / IUT d’Annecy –
                                Annecy-le-Vieux, France</p>
                            <p class="text-gray-300">Email: <a href="mailto:benoit.diard@univ-smb.fr"
                                    class="text-blue-400 hover:underline">benoit.diard@univ-smb.fr</a></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONTACT -->
            <section id="contact" class="bg-[#10141B] text-center px-8 pb-20 pt-10">
                <h3 class="text-3xl font-bold mb-6 text-white">Contact</h3>
                <p class="text-gray-300 mb-8">Want to collaborate or learn more? Feel free to write to me.</p>
                <div class="box-hover w-fit mx-auto">
                    <a href="mailto:augustin.tarit@gmail.com"
                        class="bg-blue-500 hover:bg-blue-600 transition text-white px-6 py-3 rounded-lg font-medium">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Contact me
                    </a>
                </div>
            </section>

            <!-- FOOTER -->
            <footer class="bg-[#0D1116] text-center text-gray-500 py-6 border-t border-gray-800">
                <p>© {{ date('Y') }} Augustin Tarit — All rights reserved.</p>
                <div class="mt-4 flex justify-center gap-4">
                    <a href="https://www.linkedin.com/in/augustin-tarit/"
                        class="hover:text-blue-400 transition">LinkedIn</a>
                    <a href="https://github.com/August7337" class="hover:text-blue-400 transition">GitHub</a>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="module">
        import {
            animate,
            hover
        } from "https://cdn.jsdelivr.net/npm/motion@latest/+esm";

        hover(".box-hover", (element) => {
            animate(element, {
                scale: 1.1
            });

            return () => animate(element, {
                scale: 1
            });
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
            defaults: {
                duration: 2,
                ease: "none"
            },
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
            anchor.addEventListener('click', function(e) {
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
                pin: true,
                scrub: 1,
                invalidateOnRefresh: true,
                markers: false
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
            game.innerHTML =
                '<iframe frameborder="0" src="https://itch.io/embed-upload/6326063?color=76beff" allowfullscreen="" width="640" height="600"><a href="https://august7337.itch.io/jetpack">Play JetPack on itch.io</a></iframe>';
            document.body.appendChild(game);
        }
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
