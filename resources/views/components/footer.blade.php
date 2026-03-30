{{-- Site Footer --}}
<footer class="bg-surface-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-white/10">

            {{-- School Description --}}
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-accent-400 flex items-center justify-center text-primary-900 font-bold text-lg">
                        NA
                    </div>
                    <span class="text-xl font-bold">Nusantara Academy</span>
                </div>
                <p class="text-white/60 text-sm leading-relaxed">
                    Nurturing young minds with integrity, innovation, and excellence since 1985. Building tomorrow's leaders today.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-accent-400 mb-4">Quick Links</h4>
                <ul class="space-y-2.5">
                    @foreach (['home' => 'Home', 'about' => 'About Us', 'academics' => 'Academics', 'news' => 'Latest News', 'gallery' => 'Gallery', 'contact' => 'Contact'] as $route => $label)
                        <li>
                            <a href="{{ route($route) }}" class="text-white/60 hover:text-accent-400 text-sm transition-colors">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-accent-400 mb-4">Contact Us</h4>
                <ul class="space-y-3 text-sm text-white/60">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 text-accent-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>123 Education Boulevard, Jakarta 12345, Indonesia</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0 text-accent-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>+62 21 1234 5678</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0 text-accent-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>info&#64;nusantara-academy.sch.id</span>
                    </li>
                </ul>
            </div>

            {{-- Social Media --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-accent-400 mb-4">Follow Us</h4>
                <div class="flex gap-3">
                    @php
                        $socials = [
                            ['name' => 'Facebook', 'icon' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
                            ['name' => 'Instagram', 'icon' => 'M16 4H8a4 4 0 00-4 4v8a4 4 0 004 4h8a4 4 0 004-4V8a4 4 0 00-4-4zm-4 11a3 3 0 110-6 3 3 0 010 6zm3.5-7a.75.75 0 110-1.5.75.75 0 010 1.5z'],
                            ['name' => 'YouTube', 'icon' => 'M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 12a29 29 0 00.46 5.58 2.78 2.78 0 001.94 2C5.12 20 12 20 12 20s6.88 0 8.6-.46a2.78 2.78 0 001.94-2A29 29 0 0023 12a29 29 0 00-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z'],
                            ['name' => 'Twitter', 'icon' => 'M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z'],
                        ];
                    @endphp
                    @foreach ($socials as $social)
                        <a href="#" aria-label="{{ $social['name'] }}"
                           class="w-10 h-10 rounded-lg bg-white/10 hover:bg-accent-400 hover:text-primary-900 flex items-center justify-center text-white/60 transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $social['icon'] }}"/></svg>
                        </a>
                    @endforeach
                </div>
                <p class="mt-6 text-xs text-white/40">
                    Accredited "A" · Member of National Education Association
                </p>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="pt-8 text-center text-sm text-white/40">
            <p>&copy; {{ date('Y') }} Nusantara Academy. All rights reserved.</p>
        </div>
    </div>
</footer>
