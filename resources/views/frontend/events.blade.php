<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Events &amp; Gatherings | Nexora Digital Agency</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

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
<body class="bg-background text-on-background font-body-md antialiased">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-20">
    <!-- Hero Section -->
    @php

    $featuredEvent = $events->first();

    $sideEvents = $events->skip(1)->take(2);

    $pastEvents = $events->skip(3);

    @endphp

    <section class="py-section-padding bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="flex flex-col md:flex-row items-end justify-between gap-stack-md">
          <div class="max-w-2xl">
            <span class="text-secondary font-label-md text-label-md tracking-widest uppercase mb-stack-sm block">Agency Pulse</span>
            <h1 class="font-headline-xl text-headline-xl md:text-display-lg mb-stack-md leading-tight">Events &amp; Gatherings</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Connecting industry leaders, fostering innovation, and sharing our digital expertise through curated workshops and global summits.</p>
          </div>
          <div class="flex gap-stack-sm">
            <button class="p-4 rounded-full border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-colors">
              <span class="material-symbols-outlined">filter_list</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Upcoming Events: Asymmetric Layout -->
    <section class="py-section-padding">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <h2 class="font-headline-md text-headline-md mb-stack-lg flex items-center gap-stack-sm">
          <span class="w-12 h-[2px] bg-secondary"></span>
          Upcoming Experiences
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">

          <!-- Featured Event (Large) -->
          @if($featuredEvent)
<div class="md:col-span-8 group relative overflow-hidden rounded-xl border border-outline-variant bg-surface-container-lowest event-card-hover transition-all duration-300">

    <div class="aspect-[16/9] overflow-hidden">

        @if($featuredEvent->image)

        <img
            src="{{ asset('storage/' . $featuredEvent->image) }}"
            alt="{{ $featuredEvent->title }}"
            class="w-full h-full object-cover event-image transition-transform duration-500"
        >

        @else

        <img
            src="https://placehold.co/1200x700"
            alt="{{ $featuredEvent->title }}"
            class="w-full h-full object-cover"
        >

        @endif

    </div>

    <div class="p-stack-lg">

        <div class="flex items-center gap-stack-md mb-stack-sm">

            <span class="bg-secondary/10 text-secondary px-3 py-1 rounded-full font-label-md text-label-md">
                {{ ucfirst($featuredEvent->status) }}
            </span>

            <span class="text-on-surface-variant font-label-md text-label-md flex items-center gap-1">

                <span class="material-symbols-outlined text-[18px]">
                    calendar_today
                </span>

                {{ \Carbon\Carbon::parse($featuredEvent->event_date)->format('M d, Y') }}

            </span>

        </div>

        <h3 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl mb-stack-sm">
            {{ $featuredEvent->title }}
        </h3>

        <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md max-w-xl">
            {{ \Illuminate\Support\Str::limit($featuredEvent->description, 180) }}
        </p>

        <a
            href="{{ route('events.detail', $featuredEvent->slug) }}"
            class="bg-primary text-on-primary px-stack-lg py-stack-sm rounded-lg font-label-md text-label-md inline-flex items-center gap-2 group"
        >
            View Event

            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">
                arrow_forward
            </span>

        </a>

    </div>

</div>

@endif

          <!-- Sidebar Event 1 -->
          <div class="md:col-span-4 flex flex-col gap-gutter">

    @foreach($sideEvents as $event)

    <div class="group border border-outline-variant rounded-xl bg-surface-container-lowest p-stack-md event-card-hover transition-all duration-300">

        <div class="aspect-video rounded-lg overflow-hidden mb-stack-md">

            @if($event->image)

            <img
                src="{{ asset('storage/' . $event->image) }}"
                alt="{{ $event->title }}"
                class="w-full h-full object-cover event-image transition-transform duration-500"
            >

            @else

            <img
                src="https://placehold.co/800x500"
                alt="{{ $event->title }}"
                class="w-full h-full object-cover"
            >

            @endif

        </div>

        <span class="text-secondary font-label-md text-label-md block mb-2">
            {{ ucfirst($event->status) }}
        </span>

        <h4 class="font-headline-md text-headline-md mb-2">
            {{ $event->title }}
        </h4>

        <p class="font-caption text-caption text-on-surface-variant mb-stack-md">
            {{ \Illuminate\Support\Str::limit($event->description, 80) }}
        </p>

        <div class="flex items-center justify-between mt-auto">

            <span class="text-on-surface-variant font-label-md text-label-md italic">
                {{ \Carbon\Carbon::parse($event->event_date)->format('M d') }}
            </span>

            <a href="{{ route('events.detail', $event->slug) }}">

                <span class="material-symbols-outlined text-secondary">
                    arrow_outward
                </span>

            </a>

        </div>

    </div>

    @endforeach

</div>
        </div>
      </div>
    </section>

    <!-- Past Events: Bento Grid -->
    <section class="py-section-padding bg-surface-container-low">
 @foreach($pastEvents as $event)

<div class="group relative overflow-hidden rounded-xl border border-outline-variant h-[300px]">

    @if($event->image)

    <img
        src="{{ asset('storage/' . $event->image) }}"
        alt="{{ $event->title }}"
        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
    >

    @else

    <img
        src="https://placehold.co/800x500"
        alt="{{ $event->title }}"
        class="w-full h-full object-cover"
    >

    @endif

    <div class="absolute bottom-0 left-0 right-0 p-4 bg-surface/90 backdrop-blur-sm">

        <p class="font-label-md text-label-md font-bold">
            {{ $event->title }}
        </p>

    </div>

</div>

@endforeach
    </section>

    <!-- Newsletter Subscription -->
    <section class="py-section-padding border-t border-outline-variant/30">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
        <div class="max-w-xl mx-auto">
          <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl mb-stack-md">Don't miss a beat.</h2>
          <p class="font-body-md text-body-md text-on-surface-variant mb-stack-lg">Join our exclusive mailing list to receive invitations to our private workshops and priority access to annual summits.</p>
          <form class="flex flex-col md:flex-row gap-2">
            <input class="flex-grow px-stack-md py-4 rounded-lg border border-outline focus:border-secondary focus:ring-1 focus:ring-secondary/20 outline-none bg-surface transition-all" placeholder="Professional email address" type="email">
            <button class="bg-primary text-on-primary px-stack-lg py-4 rounded-lg font-label-md text-label-md hover:shadow-lg transition-all active:scale-[0.98]" type="submit">
              Keep me informed
            </button>
          </form>
          <p class="font-caption text-caption text-outline mt-stack-md">By subscribing, you agree to our Privacy Policy and Terms of Service.</p>
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
