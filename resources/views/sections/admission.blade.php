{{-- Admission Section --}}
<section id="admission" class="py-20 lg:py-28 relative overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=1920&q=80"
             alt="University campus"
             class="w-full h-full object-cover"
             loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/95 to-primary-700/90"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in-up">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent-400/20 text-accent-400 text-sm font-medium mb-6 border border-accent-400/30">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>
                Enrollment Open for 2026/2027
            </span>

            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                Begin Your Journey at<br>
                <span class="text-accent-400">Nusantara Academy</span>
            </h2>

            <p class="text-lg text-white/70 max-w-xl mx-auto mb-10">
                Join a community of learners where every student is valued, challenged, and empowered to succeed. Limited seats available — apply early!
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#contact"
                   class="px-10 py-4 rounded-2xl bg-accent-400 text-primary-900 font-bold text-lg shadow-xl hover:shadow-2xl hover:bg-accent-500 transition-all btn-shine">
                    Apply Now
                </a>
                <a href="#contact"
                   class="px-10 py-4 rounded-2xl border-2 border-white/30 text-white font-semibold text-lg hover:bg-white/10 transition-all">
                    Request Info
                </a>
            </div>

            {{-- Key dates --}}
            <div class="mt-14 grid sm:grid-cols-3 gap-6 max-w-2xl mx-auto">
                @foreach ([
                    ['label' => 'Registration Opens', 'date' => 'April 1, 2026'],
                    ['label' => 'Entrance Exam', 'date' => 'June 15, 2026'],
                    ['label' => 'Admission Results', 'date' => 'July 1, 2026'],
                ] as $timeline)
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                        <p class="text-xs text-accent-400 font-semibold uppercase">{{ $timeline['label'] }}</p>
                        <p class="text-white font-bold mt-1">{{ $timeline['date'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
