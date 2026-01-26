<script>
    const navbar = document.getElementById('navbar');
    const navbarLogo = document.getElementById('navbar-logo');

    let lastScrollY = window.scrollY;
    let stopTimer = null;
    let showTimer = null;

    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        // Clear timers on every scroll
        clearTimeout(stopTimer);
        clearTimeout(showTimer);

        if (currentScrollY > lastScrollY && currentScrollY > 10) {
            // Scrolling down → hide immediately
            navbar.classList.add('nav-hidden');

            // Wait for scroll stop
            stopTimer = setTimeout(() => {
                // After stop → wait 1s, then show
                showTimer = setTimeout(() => {
                    navbar.classList.remove('nav-hidden');
                }, 100);
            }, 150);
        } else {
            // Scrolling up → show immediately (no delay)
            navbar.classList.remove('nav-hidden');
        }

        if (currentScrollY > 20) {
            navbar.classList.add('bg-white/80', 'backdrop-blur', 'shadow');
            navbarLogo.classList.add('logo-dark');
            navbarLogo.classList.add('logo-dark');
        } else {
            navbar.classList.remove('bg-white/80', 'backdrop-blur', 'shadow');
            navbarLogo.classList.remove('logo-dark');
        }


        lastScrollY = currentScrollY;
    });
</script>