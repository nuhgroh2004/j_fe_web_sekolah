{{-- Hero Section --}}
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c476?w=1920&q=80"
             alt="School campus aerial view"
             class="w-full h-full object-cover"
             loading="eager">
        <div class="absolute inset-0 hero-overlay"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 text-center px-4 sm:px-6 max-w-4xl mx-auto">
        <div class="fade-in-up">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-400/20 text-accent-400 text-sm font-medium mb-6 border border-accent-400/30">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                </svg>
                Accredited "A" — Excellence Since 1985
            </span>
        </div>

        <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 fade-in-up">
            Nusantara<br>
            <span class="text-accent-400">Academy</span>
        </h1>

        <p class="text-lg sm:text-xl text-white/70 max-w-2xl mx-auto mb-10 fade-in-up">
            Inspiring excellence and shaping future leaders through quality education, character building, and innovation.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 fade-in-up">
            <a href="#admission"
               class="px-8 py-4 rounded-2xl bg-accent-400 text-primary-900 font-semibold text-lg shadow-xl hover:shadow-2xl hover:bg-accent-500 transition-all btn-shine">
                Apply Now
            </a>
            <a href="#about"
               class="px-8 py-4 rounded-2xl border-2 border-white/30 text-white font-semibold text-lg hover:bg-white/10 transition-all">
                Learn More
            </a>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/50 animate-bounce">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>
