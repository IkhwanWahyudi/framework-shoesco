<script>
    const now = new Date();
    const dayOfWeek = now.toLocaleDateString('en-US', {
        weekday: 'long'
    });
    document.getElementById('dayOfWeek').textContent = `${dayOfWeek}`;

    const scrollBg = document.getElementById('scroll-bg');
    const daycontact = document.getElementById('day-contact');

    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        if (scrollPosition > 10) {
            scrollBg.style.backgroundColor = '#00000070';
        } else {
            scrollBg.style.backgroundColor = '#FFFFFF00';
        }
    });
</script>
