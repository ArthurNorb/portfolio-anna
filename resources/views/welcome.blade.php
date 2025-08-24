<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Anna Millard</title>
    <
    @vite('resources/css/app.css')
</head>

<body class="bg-tema-100 text-center antialiased fundo-gradiente">
    <div id="fundo-interativo" class="fundo-abstrato">
        <svg width="100%" height="100%" viewBox="0 0 1440 1024" preserveAspectRatio="xMidYMid slice"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M-200 50 C400 200, 400 800, 900 750 S 1500 600, 1600 900" stroke-width="2" />
            <path d="M-250 80 C350 230, 350 830, 850 780 S 1450 630, 1650 930" stroke-width="3" />
            <path d="M-150 20 C450 170, 450 770, 950 720 S 1550 570, 1550 870" stroke-width="1.5" />
        </svg>
    </div>

    <header class="absolute top-0 left-0 w-full p-4 md:p-8 z-10">
        <div class="flex justify-end">
            <div
                class="group flex items-center gap-2 border-b border-white/50 w-full max-w-xs transition-all duration-300 focus-within:border-tema-200 focus-within:w-full">
                <input type="search" placeholder="Buscar..."
                    class="w-full bg-transparent text-white placeholder-white/70 border-none focus:ring-0 font-montserrat">
                <button class="text-tema-300 transition-colors duration-300 group-hover:text-tema-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main class="flex flex-col items-center justify-center min-h-screen px-4 gap-4 md:gap-6">
        <p
            class="font-montserrat font-thin uppercase text-white tracking-widest text-lg md:text-2xl animate-fade-in-down">
            Portfólio
        </p>
        <h1 class="font-maragsa text-tema-200 text-7xl md:text-9xl animate-fade-in">
            Anna Millard
        </h1>
        <h2
            class="font-montserrat font-thin uppercase text-white tracking-wider text-4xl md:text-5xl animate-fade-in-up">
            Jornalista
        </h2>

        <a href="{{ route('home')}}" id="home"
            class="group mt-8 flex items-center gap-4 font-montserrat font-thin text-2xl text-tema-200 uppercase tracking-widest no-underline transition-all duration-300 ease-in-out hover:text-tema-300 hover:gap-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor"
                class="h-8 transition-transform duration-300 ease-in-out group-hover:translate-x-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </main>

    <footer class="absolute bottom-0 left-0 w-full p-4 md:p-8 font-montserrat z-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-white/60">
                Desenvolvido por <a href="https://www.linkedin.com/in/arthur-norberto/" class="hover:text-tema-200" target="_blank">Arthur Norberto</a>
            </p>
            <div class="flex flex-wrap justify-center items-center gap-x-6 gap-y-2 text-sm text-white/60">
                <a href="mailto:annabeatrizcomunica@gmail.com" class="hover:text-tema-200 transition-colors">annabeatrizcomunica@gmail.com</a>
                <a href="tel:+5531999999999" class="hover:text-tema-200 transition-colors">+55 37 99820-2164</a>
                <div class="flex items-center gap-4">
                    <a href="https://www.linkedin.com/in/anna-millard-0aa0261a4/" target="_blank" class="hover:text-tema-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" aria-hidden="true"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M160 96C124.7 96 96 124.7 96 160L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 160C544 124.7 515.3 96 480 96L160 96zM165 266.2L231.5 266.2L231.5 480L165 480L165 266.2zM236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160C219.5 160 236.7 177.2 236.7 198.5zM413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480L413.9 480z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/annamllrd/" target="_blank" class="hover:text-tema-200 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" aria-hidden="true"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<script>
    document.addEventListener('mousemove', function(e) {
        const bg = document.getElementById('fundo-interativo');
        if (bg) {
            const speed = -0.01;
            const x = (window.innerWidth / 2 - e.clientX) * speed;
            const y = (window.innerHeight / 2 - e.clientY) * speed;
            bg.style.transform = `translateX(${x}px) translateY(${y}px)`;
        }
    });

    const pageLink = document.getElementById('home');
    const mainContent = document.querySelector('main');

    pageLink.addEventListener('click', function(event) {
        event.preventDefault();

        const destination = this.href;

        mainContent.classList.add('page-fade-out');

        setTimeout(() => {
            window.location.href = destination;
        }, 500);
    });
</script>
