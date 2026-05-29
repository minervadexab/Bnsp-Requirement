<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $event->title }} | Nexora Digital</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet"
    >

<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "on-tertiary-fixed": "#0b1c30",
            "on-secondary-fixed": "#00174b",
            "on-tertiary-fixed-variant": "#38485d",
            "surface-tint": "#565e74",
            "primary-fixed-dim": "#bec6e0",
            "primary-container": "#131b2e",
            "secondary": "#0051d5",
            "on-secondary": "#ffffff",
            "secondary-fixed-dim": "#b4c5ff",
            "surface-container-high": "#e6e8ea",
            "on-primary-fixed": "#131b2e",
            "background": "#f7f9fb",
            "tertiary-fixed": "#d3e4fe",
            "surface-container-lowest": "#ffffff",
            "on-error": "#ffffff",
            "on-background": "#191c1e",
            "on-secondary-fixed-variant": "#003ea8",
            "on-primary-container": "#7c839b",
            "surface-variant": "#e0e3e5",
            "surface-container-highest": "#e0e3e5",
            "outline-variant": "#c6c6cd",
            "inverse-on-surface": "#eff1f3",
            "on-tertiary-container": "#75859d",
            "on-surface-variant": "#45464d",
            "primary": "#000000",
            "tertiary-container": "#0b1c30",
            "on-secondary-container": "#fefcff",
            "on-primary-fixed-variant": "#3f465c",
            "on-error-container": "#93000a",
            "error": "#ba1a1a",
            "on-tertiary": "#ffffff",
            "secondary-fixed": "#dbe1ff",
            "secondary-container": "#316bf3",
            "surface-dim": "#d8dadc",
            "surface": "#f7f9fb",
            "outline": "#76777d",
            "on-primary": "#ffffff",
            "surface-bright": "#f7f9fb",
            "tertiary": "#000000",
            "surface-container": "#eceef0",
            "inverse-primary": "#bec6e0",
            "error-container": "#ffdad6"
          },
          borderRadius: {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          spacing: {
            "stack-sm": "12px",
            "stack-md": "24px",
            "section-padding": "96px",
            "container-max": "1280px",
            "margin-mobile": "20px",
            "gutter": "24px",
            "margin-desktop": "64px",
            "base": "8px",
            "stack-lg": "48px"
          },
          fontFamily: {
            "headline-xl-mobile": ["Inter"],
            "headline-md": ["Inter"],
            "display-lg-mobile": ["Inter"],
            "caption": ["Inter"],
            "body-lg": ["Inter"],
            "body-md": ["Inter"],
            "display-lg": ["Inter"],
            "headline-xl": ["Inter"],
            "label-md": ["Inter"]
          },
          fontSize: {
            "headline-xl-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "headline-md": ["30px", {"lineHeight": "38px", "fontWeight": "600"}],
            "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
            "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
            "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
            "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
            "display-lg": ["72px", {"lineHeight": "80px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "500"}]
          }
        },
      },
    }
  </script>

  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
    }
    .event-card-hover:hover .event-image {
      transform: scale(1.05);
    }
    .glass-header {
      background: rgba(247, 249, 251, 0.8);
      backdrop-filter: blur(12px);
    }
  </style>

</head>

<body class="bg-[#f7f9fb] text-[#191c1e] font-[Inter]">

    {{-- NAVIGATION --}}
    @include('layouts.navigation')

    <main class="pt-20">

        {{-- HERO --}}
        <section class="relative h-[70vh] overflow-hidden">

            @if($event->image)

            <img
                src="{{ asset('storage/' . $event->image) }}"
                alt="{{ $event->title }}"
                class="absolute inset-0 w-full h-full object-cover"
            >

            @else

            <img
                src="https://placehold.co/1600x900"
                class="absolute inset-0 w-full h-full object-cover"
            >

            @endif

            <div class="absolute inset-0 bg-black/60"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 h-full flex items-end pb-20">

                <div class="max-w-3xl text-white">

                    <div class="flex items-center gap-4 mb-6">

                        <span class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-full text-sm font-semibold uppercase tracking-wider">

                            {{ ucfirst($event->status) }}

                        </span>

                        <span class="flex items-center gap-2 text-sm">

                            <span class="material-symbols-outlined text-[18px]">
                                calendar_today
                            </span>

                            {{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}

                        </span>

                    </div>

                    <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6">

                        {{ $event->title }}

                    </h1>

                    <div class="flex items-center gap-2 text-lg text-gray-200">

                        <span class="material-symbols-outlined">
                            location_on
                        </span>

                        {{ $event->location }}

                    </div>

                </div>

            </div>

        </section>

        {{-- CONTENT --}}
        <section class="py-24">

            <div class="max-w-4xl mx-auto px-6">

                <div class="bg-white rounded-3xl shadow-sm border border-gray-200 p-10 md:p-14">

                    <div class="flex items-center justify-between flex-wrap gap-6 mb-10 pb-8 border-b border-gray-200">

                        <div>

                            <p class="text-sm uppercase tracking-widest text-blue-600 font-semibold mb-2">
                                Event Information
                            </p>

                            <h2 class="text-3xl font-bold">
                                About This Event
                            </h2>

                        </div>

                        <div class="flex gap-6 text-sm">

                            <div>

                                <p class="text-gray-500 mb-1">
                                    Date
                                </p>

                                <p class="font-semibold">
                                    {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                                </p>

                            </div>

                            <div>

                                <p class="text-gray-500 mb-1">
                                    Location
                                </p>

                                <p class="font-semibold">
                                    {{ $event->location }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">

                        {!! nl2br(e($event->description)) !!}

                    </div>

                </div>

            </div>

        </section>

        {{-- RELATED EVENTS --}}
        <section class="pb-24">

            <div class="max-w-6xl mx-auto px-6">

                <div class="flex items-center justify-between mb-12">

                    <div>

                        <p class="text-blue-600 uppercase tracking-widest text-sm font-semibold mb-2">
                            More Experiences
                        </p>

                        <h2 class="text-4xl font-bold">
                            Related Events
                        </h2>

                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    @foreach($relatedEvents as $related)

                    <article class="bg-white rounded-2xl overflow-hidden border border-gray-200 hover:shadow-xl transition-all duration-300 group">

                        <div class="aspect-video overflow-hidden">

                            @if($related->image)

                            <img
                                src="{{ asset('storage/' . $related->image) }}"
                                alt="{{ $related->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            >

                            @else

                            <img
                                src="https://placehold.co/800x500"
                                class="w-full h-full object-cover"
                            >

                            @endif

                        </div>

                        <div class="p-6">

                            <span class="text-sm text-blue-600 font-semibold uppercase">
                                {{ ucfirst($related->status) }}
                            </span>

                            <h3 class="text-2xl font-bold mt-3 mb-4">

                                {{ $related->title }}

                            </h3>

                            <p class="text-gray-600 mb-6">

                                {{ \Illuminate\Support\Str::limit($related->description, 100) }}

                            </p>

                            <a
                                href="{{ route('events.detail', $related->slug) }}"
                                class="inline-flex items-center gap-2 font-semibold text-black hover:gap-3 transition-all"
                            >

                                View Event

                                <span class="material-symbols-outlined">
                                    arrow_forward
                                </span>

                            </a>

                        </div>

                    </article>

                    @endforeach

                </div>

            </div>

        </section>

    </main>

<!-- Footer -->
  <footer class="w-full py-stack-lg bg-surface-container-lowest dark:bg-surface-container-high border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="col-span-1 md:col-span-1">
        <div class="font-headline-md text-headline-md font-bold text-primary mb-4">Nexora</div>
        <p class="font-caption text-caption text-on-surface-variant max-w-xs">Engineering digital excellence for the world's most ambitious brands.</p>
      </div>
      <div class="flex flex-col gap-2">
        <h5 class="font-label-md text-label-md text-primary uppercase tracking-widest mb-2">Agency</h5>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Our Story</a>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Career</a>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Press Room</a>
      </div>
      <div class="flex flex-col gap-2">
        <h5 class="font-label-md text-label-md text-primary uppercase tracking-widest mb-2">Legal</h5>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacy Policy</a>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Terms of Service</a>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Cookie Policy</a>
      </div>
      <div class="flex flex-col gap-2">
        <h5 class="font-label-md text-label-md text-primary uppercase tracking-widest mb-2">Social</h5>
        <div class="flex gap-4">
          <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
          <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#"><span class="material-symbols-outlined">share</span></a>
          <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#"><span class="material-symbols-outlined">mail</span></a>
        </div>
      </div>
    </div>

    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-stack-lg pt-stack-md border-t border-outline-variant/30 flex justify-between items-center">
      <p class="font-caption text-caption text-on-surface-variant">© 2024 Nexora Digital Agency. All rights reserved.</p>
      <div class="flex gap-stack-md">
        <span class="font-caption text-caption text-outline">Designed in London</span>
      </div>
    </div>
  </footer>

  <script>
    // Simple header scroll interaction
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      if (window.scrollY > 50) {
        nav.classList.add('shadow-sm', 'h-16');
        nav.classList.remove('h-20');
      } else {
        nav.classList.remove('shadow-sm', 'h-16');
        nav.classList.add('h-20');
      }
    });

    // Hover effect for image lifting (Atmospheric Micro-interaction)
    document.querySelectorAll('.event-card-hover').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-4px)';
        card.style.boxShadow = '0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)';
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
        card.style.boxShadow = 'none';
      });
    });
  </script>

</body>
</html>
