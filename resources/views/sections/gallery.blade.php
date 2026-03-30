{{-- Gallery Section --}}
<section id="gallery" class="py-20 lg:py-28 bg-surface-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
            <span class="text-accent-500 font-semibold text-sm uppercase tracking-wider">School Life</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-primary-500 mt-2 mb-4">Photo Gallery</h2>
            <div class="section-divider mx-auto mb-4"></div>
            <p class="text-surface-800/60">A glimpse into daily life, events, and activities at Nusantara Academy.</p>
        </div>

        {{-- Gallery Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 fade-in-up">
            @php
                $galleryImages = [
                    ['src' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&q=80', 'alt' => 'Students in classroom discussion', 'span' => 'md:col-span-2 md:row-span-2'],
                    ['src' => 'https://images.unsplash.com/photo-1588072432836-e10032774350?w=400&q=80', 'alt' => 'Science laboratory experiment', 'span' => ''],
                    ['src' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=400&q=80', 'alt' => 'Library study session', 'span' => ''],
                    ['src' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=400&q=80', 'alt' => 'Art class painting', 'span' => ''],
                    ['src' => 'https://images.unsplash.com/photo-1562774053-701939374585?w=400&q=80', 'alt' => 'School campus building', 'span' => ''],
                    ['src' => 'https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?w=400&q=80', 'alt' => 'Sports day activities', 'span' => ''],
                    ['src' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=600&q=80', 'alt' => 'Graduation ceremony', 'span' => 'md:col-span-2'],
                    ['src' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&q=80', 'alt' => 'Students studying outdoors', 'span' => ''],
                ];
            @endphp

            @foreach ($galleryImages as $image)
                <div class="gallery-item {{ $image['span'] }}">
                    <img src="{{ $image['src'] }}"
                         alt="{{ $image['alt'] }}"
                         class="w-full h-full object-cover min-h-[180px]"
                         loading="lazy">
                </div>
            @endforeach
        </div>
    </div>
</section>
