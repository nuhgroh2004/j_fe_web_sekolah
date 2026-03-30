{{-- Sticky Navigation Bar --}}
<nav id="main-navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-18">
            {{-- Logo / Brand --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-accent-400 flex items-center justify-center text-primary-900 font-bold text-lg shadow-md">
                    NA
                </div>
                <div class="hidden sm:block">
                    <span class="text-white font-bold text-lg tracking-tight">Nusantara</span>
                    <span class="text-accent-400 font-bold text-lg"> Academy</span>
                </div>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex items-center gap-1">
                @php
                    $navLinks = [
                        ['route' => 'home', 'label' => 'Home', 'anchor' => null],
                        ['route' => 'about', 'label' => 'About', 'anchor' => null],
                        ['route' => 'academics', 'label' => 'Academics', 'anchor' => null],
                        ['route' => 'home', 'label' => 'Students', 'anchor' => '#statistics'],
                        ['route' => 'home', 'label' => 'Teachers', 'anchor' => '#principal'],
                        ['route' => 'news', 'label' => 'News', 'anchor' => null],
                        ['route' => 'gallery', 'label' => 'Gallery', 'anchor' => null],
                        ['route' => 'home', 'label' => 'Admission', 'anchor' => '#admission'],
                        ['route' => 'contact', 'label' => 'Contact', 'anchor' => null],
                    ];
                @endphp

                @foreach ($navLinks as $link)
                    <a href="{{ route($link['route']) }}{{ $link['anchor'] ?? '' }}"
                       class="px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200
                              {{ request()->routeIs($link['route']) && !$link['anchor']
                                 ? 'text-accent-400 bg-white/10'
                                 : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            {{-- CTA Button (Desktop) --}}
            <a href="{{ route('home') }}#admission"
               class="hidden lg:inline-flex items-center px-5 py-2.5 rounded-xl bg-accent-400 text-primary-900 text-sm font-semibold shadow-lg hover:bg-accent-500 transition-colors btn-shine">
                Apply Now
            </a>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-button" type="button" class="lg:hidden p-2 rounded-lg text-white hover:bg-white/10 transition" aria-label="Toggle navigation" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden lg:hidden bg-primary-800/98 backdrop-blur-lg border-t border-white/10">
        <div class="px-4 py-4 space-y-1">
            @foreach ($navLinks as $link)
                <a href="{{ route($link['route']) }}{{ $link['anchor'] ?? '' }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium transition-colors
                          {{ request()->routeIs($link['route']) && !$link['anchor']
                             ? 'text-accent-400 bg-white/10'
                             : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach

            <a href="{{ route('home') }}#admission"
               class="block mt-3 text-center px-4 py-3 rounded-xl bg-accent-400 text-primary-900 text-sm font-semibold">
                Apply Now
            </a>
        </div>
    </div>
</nav>
