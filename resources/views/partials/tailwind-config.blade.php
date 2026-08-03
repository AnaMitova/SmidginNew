{{--
    Runtime Tailwind settings for the public pages. Include right after the CDN
    script tag.

    The site is written with two layouts: a stacked one and, from `md:` up, the
    desktop one. That desktop layout assumes a wide screen — at 768px it squeezes
    into unreadable columns — so `md` starts at 1024px and tablets get the
    stacked layout they were designed for.

    Font families are repeated here because declaring a config replaces what the
    CDN generates for them.
--}}
<script>
    tailwind.config = {
        theme: {
            extend: {
                screens: {
                    md: '1024px',
                },
                fontFamily: {
                    montserrat: ['Montserrat', 'sans-serif'],
                    Baskervville: ['Baskervville', 'serif'],
                    badscript: ['"Bad Script"', 'cursive'],
                    Playfair: ['"Playfair Display"', 'serif'],
                    Centra: ['"Centra No2 TRIAL"', 'sans-serif'],
                    Display: ['"Chronicle Display"', 'sans-serif'],
                    DisplayItalic: ['"Chronicle Display Italic"', 'serif'],
                    Papyrus: ['Papyrus', 'sans-serif'],
                    Velvet: ['"Brush Script MT"', 'cursive'],
                },
            },
        },
    };
</script>
