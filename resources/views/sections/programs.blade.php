{{-- Programs Section --}}
<section id="programs" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
            <span class="text-accent-500 font-semibold text-sm uppercase tracking-wider">Academic Programs</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary-500 mt-2 mb-4">Study Programs &amp; Majors</h2>
            <div class="section-divider mx-auto mb-4"></div>
            <p class="text-surface-800/60">Explore our diverse range of academic programs designed to prepare students for higher education and professional careers.</p>
        </div>

        {{-- Program Cards --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
                $programs = [
                    [
                        'title' => 'Natural Sciences',
                        'description' => 'Mathematics, Physics, Chemistry, and Biology with hands-on lab work and research projects.',
                        'image' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=600&q=80',
                        'badge' => 'STEM',
                    ],
                    [
                        'title' => 'Social Sciences',
                        'description' => 'Economics, Sociology, Geography, and History with real-world case studies.',
                        'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80',
                        'badge' => 'Humanities',
                    ],
                    [
                        'title' => 'Language & Literature',
                        'description' => 'Mastery of Indonesian, English, and additional languages for global communication.',
                        'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=600&q=80',
                        'badge' => 'Languages',
                    ],
                    [
                        'title' => 'Digital Technology',
                        'description' => 'Programming, AI fundamentals, data analysis, and digital media creation.',
                        'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&q=80',
                        'badge' => 'Tech',
                    ],
                    [
                        'title' => 'Arts & Design',
                        'description' => 'Visual arts, music, performing arts, and creative design thinking.',
                        'image' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=600&q=80',
                        'badge' => 'Creative',
                    ],
                    [
                        'title' => 'Sports & Athletics',
                        'description' => 'Competitive sports training, physical education, and health science.',
                        'image' => 'https://images.unsplash.com/photo-1461896836934-bd45ba8fcf9b?w=600&q=80',
                        'badge' => 'Athletics',
                    ],
                ];
            @endphp

            @foreach ($programs as $program)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-surface-100 card-hover fade-in-up">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $program['image'] }}"
                             alt="{{ $program['title'] }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute top-3 right-3">
                            <span class="px-3 py-1 bg-accent-400 text-primary-900 text-xs font-bold rounded-full">{{ $program['badge'] }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-surface-800 mb-2">{{ $program['title'] }}</h3>
                        <p class="text-sm text-surface-800/60 leading-relaxed">{{ $program['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
