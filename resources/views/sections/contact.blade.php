{{-- Contact Section --}}
<section id="contact" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
            <span class="text-accent-500 font-semibold text-sm uppercase tracking-wider">Get In Touch</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary-500 mt-2 mb-4">Contact Us</h2>
            <div class="section-divider mx-auto mb-4"></div>
            <p class="text-surface-800/60">Have questions? We'd love to hear from you. Reach out to us anytime.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 fade-in-up">
            {{-- Contact Info Cards --}}
            <div class="space-y-6">
                @php
                    $contactInfo = [
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>',
                            'title' => 'Address',
                            'content' => '123 Education Boulevard, South Jakarta, DKI Jakarta 12345, Indonesia',
                        ],
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>',
                            'title' => 'Phone',
                            'content' => '+62 21 1234 5678',
                        ],
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>',
                            'title' => 'Email',
                            'content' => 'info@nusantara-academy.sch.id',
                        ],
                        [
                            'icon' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                            'title' => 'Office Hours',
                            'content' => 'Monday – Friday: 07:00 AM – 04:00 PM',
                        ],
                    ];
                @endphp

                @foreach ($contactInfo as $info)
                    <div class="flex items-start gap-4 bg-surface-50 rounded-2xl p-5 border border-surface-100">
                        <div class="w-12 h-12 rounded-xl bg-primary-500 text-white flex items-center justify-center shrink-0">
                            {!! $info['icon'] !!}
                        </div>
                        <div>
                            <h4 class="font-semibold text-surface-800 mb-1">{{ $info['title'] }}</h4>
                            <p class="text-sm text-surface-800/60">{{ $info['content'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Embedded Map --}}
            <div class="rounded-2xl overflow-hidden shadow-lg border border-surface-100 min-h-[400px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.194741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                    width="100%"
                    height="100%"
                    style="border:0; min-height:400px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="School location on Google Maps">
                </iframe>
            </div>
        </div>
    </div>
</section>
