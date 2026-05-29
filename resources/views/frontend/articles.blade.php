
{{-- {{ dd($articles->count()) }} --}}
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Articles | Nexora Digital Agency</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">

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
            "surface-container-low": "#f2f4f6",
            "tertiary-fixed-dim": "#b7c8e1",
            "on-surface": "#191c1e",
            "inverse-surface": "#2d3133",
            "primary-fixed": "#dae2fd",
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
    }
    .article-card:hover .article-image {
      transform: scale(1.05);
    }
    .dropdown-content {
      display: none;
      opacity: 0;
      transform: translateY(-10px);
      transition: all 0.2s ease-out;
    }
    .dropdown:hover .dropdown-content {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>


<body class="bg-background text-on-background font-body-md overflow-x-hidden">

      <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-20">


    <!-- Hero Section -->
    <section class="py-section-padding bg-surface-container-lowest overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="max-w-3xl">
          <h1 class="font-headline-xl text-headline-xl mb-stack-md tracking-tight">Thoughts on the <span class="text-secondary">Future</span> of Digital.</h1>
          <p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg">Explore our latest insights, technical deep-dives, and strategic analyses of the ever-evolving technology landscape.</p>
        </div>

<!-- Category Filter -->
<div class="flex flex-wrap gap-4 mt-stack-lg">

    {{-- ALL --}}
    <a
        href="{{ route('articles') }}"
        class="{{ !request('category') ? 'bg-secondary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary' }}
        px-6 py-2 rounded-full font-label-md text-label-md transition-all"
    >
        All Articles
    </a>

    {{-- TECH --}}
    <a
        href="{{ route('articles', ['category' => 'Tech Trends']) }}"
        class="{{ request('category') == 'Tech Trends' ? 'bg-secondary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary' }}
        px-6 py-2 rounded-full font-label-md text-label-md transition-all"
    >
        Tech Trends
    </a>

    {{-- CASE --}}
    <a
        href="{{ route('articles', ['category' => 'Case Studies']) }}"
        class="{{ request('category') == 'Case Studies' ? 'bg-secondary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary' }}
        px-6 py-2 rounded-full font-label-md text-label-md transition-all"
    >
        Case Studies
    </a>

    {{-- AI --}}
    <a
        href="{{ route('articles', ['category' => 'AI & Data']) }}"
        class="{{ request('category') == 'AI & Data' ? 'bg-secondary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary' }}
        px-6 py-2 rounded-full font-label-md text-label-md transition-all"
    >
        AI & Data
    </a>

    {{-- STRATEGY --}}
    <a
        href="{{ route('articles', ['category' => 'Strategy']) }}"
        class="{{ request('category') == 'Strategy' ? 'bg-secondary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary' }}
        px-6 py-2 rounded-full font-label-md text-label-md transition-all"
    >
        Strategy
    </a>

</div>
      </div>
    </section>

    <!-- Featured Article (Bento Style Hybrid) -->


<!-- ARTICLES -->
<section class="py-section-padding bg-background">
    <div class="max-w-container-max mx-auto px-margin-desktop">

        <!-- HEADER -->
        <div class="mb-10">
            <h2 class="font-headline-xl text-headline-xl mb-3">
                Latest Articles
            </h2>

            <p class="text-on-surface-variant font-body-md">
                Explore insights, case studies, and digital innovation from Nexora.
            </p>
        </div>

        <!-- DEBUG -->
        <div class="mb-5 text-blue-500 font-bold">
            TOTAL ARTICLE: {{ $articles->count() }}
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

            @foreach($articles as $article)

            <article class="bg-surface-container-lowest rounded-lg border border-outline-variant overflow-hidden article-card group">

                <!-- IMAGE -->
                <div class="aspect-video overflow-hidden">

                    @if($article->image)

                    <img
                        src="{{ asset('storage/' . $article->image) }}"
                        alt="{{ $article->title }}"
                        class="w-full h-full object-cover article-image transition-transform duration-500"
                    >

                    @else

                    <img
                        src="https://placehold.co/800x500"
                        alt="{{ $article->title }}"
                        class="w-full h-full object-cover article-image transition-transform duration-500"
                    >

                    @endif

                </div>

                <!-- CONTENT -->
                <div class="p-stack-md">

                    <span class="text-caption font-bold text-secondary uppercase mb-2 block">
                        {{ $article->category }}
                    </span>

                    <h3 class="font-headline-md text-[24px] mb-3">
                        {{ $article->title }}
                    </h3>

                    <p class="font-body-md text-body-md text-on-surface-variant mb-6">
                        {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}
                    </p>

                    <a
                        href="{{ route('articles.detail', $article->slug) }}"
                        class="inline-flex items-center gap-2 mt-5 text-primary font-semibold hover:underline"
                    >
                        Read More
                    </a>

                </div>

            </article>

            @endforeach

        </div>

    </div>
</section>

    <!-- Newsletter CTA -->
    <section class="py-section-padding bg-surface-container-low border-y border-outline-variant/30">
      <div class="max-w-container-max mx-auto px-margin-desktop text-center">
        <div class="max-w-2xl mx-auto">
          <h2 class="font-headline-md text-headline-md mb-stack-sm">Stay ahead of the curve</h2>
          <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md">Receive a bi-weekly curation of our most impactful articles and industry analysis delivered straight to your inbox.</p>
          <form class="flex flex-col sm:flex-row gap-3">
            <input class="flex-grow bg-surface-container-lowest border border-outline-variant px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary/10 focus:border-secondary transition-all" placeholder="Enter your business email" type="email">
            <button class="bg-primary text-on-primary px-8 py-3 rounded-lg font-label-md text-label-md hover:bg-on-primary-container transition-all" type="submit">Subscribe Now</button>
          </form>
          <p class="text-caption text-on-surface-variant mt-4">By subscribing, you agree to our <a class="underline" href="#">Privacy Policy</a>.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-surface-container-lowest dark:bg-surface-container-high w-full py-stack-lg border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="col-span-1 md:col-span-1">
        <a class="font-headline-md text-headline-md font-bold text-primary mb-stack-sm block" href="#">Nexora Digital</a>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-xs">Engineering high-tier digital solutions for the next generation of enterprises.</p>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="font-label-md text-label-md font-bold text-on-surface uppercase tracking-widest">Solutions</h4>
        <nav class="flex flex-col gap-2">
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Digital Strategy</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Platform Engineering</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Data Science</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Experience Design</a>
        </nav>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="font-label-md text-label-md font-bold text-on-surface uppercase tracking-widest">Company</h4>
        <nav class="flex flex-col gap-2">
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">About Us</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Portfolio</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Careers</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Contact</a>
        </nav>
      </div>

      <div class="flex flex-col gap-4">
        <h4 class="font-label-md text-label-md font-bold text-on-surface uppercase tracking-widest">Connect</h4>
        <nav class="flex flex-col gap-2">
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">LinkedIn</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Twitter (X)</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Instagram</a>
          <a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Dribbble</a>
        </nav>
      </div>
    </div>

    <div class="max-w-container-max mx-auto px-margin-desktop mt-stack-lg pt-stack-md border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="font-caption text-caption text-on-surface-variant">© 2024 Nexora Digital Agency. All rights reserved.</p>
      <div class="flex gap-stack-sm">
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary" href="#">Privacy Policy</a>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary" href="#">Terms of Service</a>
        <a class="font-caption text-caption text-on-surface-variant hover:text-secondary" href="#">Cookie Policy</a>
      </div>
    </div>
  </footer>

  <script>
    // Simple scroll behavior for header elevation
    window.addEventListener('scroll', () => {
      const header = document.querySelector('header');
      if (window.scrollY > 20) {
        header.classList.add('shadow-md');
      } else {
        header.classList.remove('shadow-md');
      }
    });

    // Hover animation logic for cards
    document.querySelectorAll('.article-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-4px)';
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
      });
    });
  </script>
</body>
</html>
