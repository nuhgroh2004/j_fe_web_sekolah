{{-- About Section --}}
<section id="about" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Image --}}
            <div class="relative fade-in-up">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80"
                         alt="Students learning in classroom"
                         class="w-full h-80 lg:h-[28rem] object-cover"
                         loading="lazy">
                </div>
                {{-- Floating Stat Card --}}
                <div class="absolute -bottom-6 -right-4 sm:right-6 bg-white rounded-2xl shadow-xl p-5 border border-surface-100">
                    <div class="text-3xl font-bold text-primary-500">38+</div>
                    <div class="text-sm text-surface-800/60">Years of Excellence</div>
                </div>
            </div>

            {{-- Text Content --}}
            <div class="fade-in-up">
                <span class="text-accent-500 font-semibold text-sm uppercase tracking-wider">About Our School</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary-500 mt-2 mb-4">
                    Nurturing Minds, Building Character
                </h2>
                <div class="section-divider mb-6"></div>
                <p class="text-surface-800/70 leading-relaxed mb-4">
                    Nusantara Academy has been a pillar of educational excellence for over three decades. We combine rigorous academics with character development, preparing students to thrive in a rapidly changing world.
                </p>
                <p class="text-surface-800/70 leading-relaxed mb-8">
                    Our holistic approach integrates cutting-edge technology, experienced educators, and a nurturing environment to unlock every student's potential. From STEM programs to arts and athletics, we offer a balanced curriculum designed for the leaders of tomorrow.
                </p>

                {{-- Advantages --}}
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 bg-surface-50 rounded-xl p-3">
                        <div class="w-9 h-9 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                        </div>
                        <span class="text-sm font-medium text-surface-800">Accredited Curriculum</span>
                    </div>

                    <div class="flex items-center gap-3 bg-surface-50 rounded-xl p-3">
                        <div class="w-9 h-9 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                        </div>
                        <span class="text-sm font-medium text-surface-800">Global Perspective</span>
                    </div>

                    <div class="flex items-center gap-3 bg-surface-50 rounded-xl p-3">
                        <div class="w-9 h-9 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15M14.25 3.104c.251.023.501.05.75.082M19.8 15l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.607L5 14.5m14.8.5l.406 2.03a1.5 1.5 0 01-1.474 1.82H5.268a1.5 1.5 0 01-1.474-1.82L4.2 15M5 14.5l-.406-2.03"/></svg>
                        </div>
                        <span class="text-sm font-medium text-surface-800">STEM Excellence</span>
                    </div>

                    <div class="flex items-center gap-3 bg-surface-50 rounded-xl p-3">
                        <div class="w-9 h-9 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75s.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/></svg>
                        </div>
                        <span class="text-sm font-medium text-surface-800">Character Building</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
