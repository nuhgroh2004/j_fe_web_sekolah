{{-- Features Section --}}
<section id="features" class="py-20 lg:py-28 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
            <span class="text-accent-500 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary-500 mt-2 mb-4">Our Commitment to Excellence</h2>
            <div class="section-divider mx-auto mb-4"></div>
            <p class="text-surface-800/60">Discover what makes Nusantara Academy the preferred choice for quality education.</p>
        </div>

        {{-- Feature Cards --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            @php
                $features = [
                    [
                        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>',
                        'title' => 'Professional Teachers',
                        'description' => 'Certified educators with advanced degrees and continuous professional development.',
                        'color' => 'bg-blue-50 text-blue-600',
                    ],
                    [
                        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/></svg>',
                        'title' => 'Modern Facilities',
                        'description' => 'State-of-the-art labs, smart classrooms, library, and sports facilities.',
                        'color' => 'bg-emerald-50 text-emerald-600',
                    ],
                    [
                        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>',
                        'title' => 'Character Education',
                        'description' => 'Holistic development fostering integrity, empathy, and social responsibility.',
                        'color' => 'bg-rose-50 text-rose-600',
                    ],
                    [
                        'icon' => '<svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M18.75 4.236c.982.143 1.954.317 2.916.52A6.003 6.003 0 0016.27 9.728M18.75 4.236V4.5c0 2.108-.966 3.99-2.48 5.228m0 0a6.003 6.003 0 01-5.54 0"/></svg>',
                        'title' => 'Achievement Focus',
                        'description' => 'Proven track record in national and international academic competitions.',
                        'color' => 'bg-amber-50 text-amber-600',
                    ],
                ];
            @endphp

            @foreach ($features as $feature)
                <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-sm border border-surface-100 card-hover fade-in-up">
                    <div class="w-14 h-14 rounded-xl {{ $feature['color'] }} flex items-center justify-center mb-5">
                        {!! $feature['icon'] !!}
                    </div>
                    <h3 class="text-lg font-bold text-surface-800 mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-surface-800/60 leading-relaxed">{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
