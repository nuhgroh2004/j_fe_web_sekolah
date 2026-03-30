{{-- Latest News Section --}}
<section id="news" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
            <span class="text-accent-500 font-semibold text-sm uppercase tracking-wider">Latest Updates</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary-500 mt-2 mb-4">School News &amp; Events</h2>
            <div class="section-divider mx-auto mb-4"></div>
            <p class="text-surface-800/60">Stay informed about the latest happenings at Nusantara Academy.</p>
        </div>

        {{-- News Cards --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $newsItems = [
                    [
                        'image' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&q=80',
                        'date' => 'March 25, 2026',
                        'category' => 'Achievement',
                        'title' => 'Students Win National Science Olympiad Gold Medal',
                        'excerpt' => 'Our science team brought home 3 gold medals from the National Science Olympiad, proving their dedication and excellence.',
                    ],
                    [
                        'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80',
                        'date' => 'March 18, 2026',
                        'category' => 'Event',
                        'title' => 'Annual Cultural Festival Celebrates Diversity',
                        'excerpt' => 'Students showcased traditional dances, music, and culinary arts from across the Indonesian archipelago.',
                    ],
                    [
                        'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=80',
                        'date' => 'March 10, 2026',
                        'category' => 'Academic',
                        'title' => 'New STEM Lab Inaugurated with Modern Equipment',
                        'excerpt' => 'The school unveiled a state-of-the-art STEM laboratory equipped with robotics kits, 3D printers, and IoT devices.',
                    ],
                ];
            @endphp

            @foreach ($newsItems as $news)
                <article class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-surface-100 card-hover fade-in-up">
                    <div class="relative h-52 overflow-hidden">
                        <img src="{{ $news['image'] }}"
                             alt="{{ $news['title'] }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 bg-primary-500 text-white text-xs font-semibold rounded-full">{{ $news['category'] }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <time class="text-xs text-surface-800/50 font-medium">{{ $news['date'] }}</time>
                        <h3 class="text-lg font-bold text-surface-800 mt-2 mb-3 leading-snug group-hover:text-primary-500 transition-colors">
                            {{ $news['title'] }}
                        </h3>
                        <p class="text-sm text-surface-800/60 leading-relaxed">{{ $news['excerpt'] }}</p>
                        <a href="#" class="inline-flex items-center gap-1 mt-4 text-sm font-semibold text-accent-500 hover:text-accent-600 transition-colors">
                            Read More
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
