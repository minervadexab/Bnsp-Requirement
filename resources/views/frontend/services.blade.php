<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services | Nexora Digital Agency</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">

  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(12px);
      border: 1px solid #E2E8F0;
    }
    .bento-grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 24px;
    }
  </style>

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
</head>
<body class="bg-background text-on-surface font-body-md selection:bg-secondary/20">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-section-padding overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="flex flex-col md:flex-row items-center gap-stack-lg">
          <div class="md:w-1/2 space-y-stack-md">
            <span class="inline-block text-secondary font-label-md text-label-md tracking-widest border-l-2 border-secondary pl-stack-sm">ENGINEERING THE FUTURE</span>
            <h1 class="font-display-lg text-display-lg leading-tight">Elevate Your Digital Ecosystem.</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
              We provide high-density technical solutions for enterprise-grade challenges. Our methodology combines rigorous engineering with avant-garde design principles.
            </p>
          </div>
          <div class="md:w-1/2 relative">
            <div class="aspect-video bg-surface-container-high rounded-xl overflow-hidden shadow-2xl relative group">
              <img
                alt="Tech Architecture"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                data-alt="A clean, minimalist high-tech workspace featuring sleek workstation setups with multiple high-resolution monitors displaying abstract code and architecture diagrams. The lighting is cold and clinical, emphasizing the premium corporate modernism aesthetic. The environment is uncluttered, using a palette of slate grays, blacks, and electric blue accents, projecting an atmosphere of calm authority and engineering excellence."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDc9ntfxm2BHM29p7L3HNkqb5AGuh5xuC1edWP-jRUDWpMR7LWX2CJKYoFakTS6G07MdOd5Ch2_v6FhkAlT5HFOeexCaAmw7ysn1_kyn0jOGh2lMCl2RnD3etx-yWKCNYLj7hjO--7VwmdR3lqB68VIUVV7RVjHFG1ndQ2q40SE1GLjqeHLxnQLwfmbV08Zh0HnOB4eYntj6suvJiPd4iiQfW0HdzREB_6judzNYUnAlvG1iuOncpFTSeUvH_bjlqXUffEtbziVCxk"
              >
              <div class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-transparent"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Bento Grid -->
    <section class="py-section-padding bg-surface-container-low">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="text-center mb-stack-lg space-y-stack-sm">
          <h2 class="font-headline-xl text-headline-xl">Strategic Capabilities</h2>
          <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Precision-engineered services designed for scale, security, and exceptional user engagement.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
          <!-- Web Development - Large Feature -->
          <div class="md:col-span-8 group relative overflow-hidden rounded-xl border border-outline-variant bg-surface-container-lowest p-stack-lg transition-all duration-200 hover:shadow-xl hover:border-secondary">
            <div class="flex flex-col h-full justify-between gap-stack-md">
              <div class="flex items-start justify-between">
                <div class="bg-secondary/10 p-4 rounded-lg">
                  <span class="material-symbols-outlined text-secondary text-4xl" data-icon="web">web</span>
                </div>
                <span class="text-outline-variant font-display-lg opacity-10">01</span>
              </div>
              <div class="space-y-stack-sm">
                <h3 class="font-headline-md text-headline-md">Web Development</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">We build high-performance, scalable web architectures using React, Next.js, and TypeScript. Our focus is on delivering lightning-fast load times and seamless state management for complex enterprise applications.</p>
                <div class="flex gap-4 pt-stack-sm">
                  <span class="px-3 py-1 bg-surface-container text-caption font-caption rounded">Edge Computing</span>
                  <span class="px-3 py-1 bg-surface-container text-caption font-caption rounded">Headless CMS</span>
                  <span class="px-3 py-1 bg-surface-container text-caption font-caption rounded">Microservices</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile App Development -->
          <div class="md:col-span-4 group relative overflow-hidden rounded-xl border border-outline-variant bg-surface-container-lowest p-stack-lg transition-all duration-200 hover:shadow-xl hover:border-secondary">
            <div class="flex flex-col h-full gap-stack-md">
              <div class="bg-secondary/10 w-fit p-4 rounded-lg">
                <span class="material-symbols-outlined text-secondary text-4xl" data-icon="smartphone">smartphone</span>
              </div>
              <h3 class="font-headline-md text-headline-md">Mobile App Development</h3>
              <p class="font-body-md text-body-md text-on-surface-variant">Cross-platform and native solutions that bridge the gap between performance and accessibility.</p>
              <div class="mt-auto">
                <a class="text-secondary font-label-md text-label-md flex items-center group-hover:underline" href="#">
                  View Frameworks
                  <span class="material-symbols-outlined ml-1 text-sm" data-icon="arrow_forward">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>

          <!-- UI/UX Design -->
          <div class="md:col-span-4 group relative overflow-hidden rounded-xl border border-outline-variant bg-surface-container-lowest p-stack-lg transition-all duration-200 hover:shadow-xl hover:border-secondary">
            <div class="flex flex-col h-full gap-stack-md">
              <div class="bg-secondary/10 w-fit p-4 rounded-lg">
                <span class="material-symbols-outlined text-secondary text-4xl" data-icon="grid_view">grid_view</span>
              </div>
              <h3 class="font-headline-md text-headline-md">UI/UX Design</h3>
              <p class="font-body-md text-body-md text-on-surface-variant">Psychology-driven interfaces that balance aesthetic beauty with functional clarity and user flow.</p>
              <div class="mt-auto pt-stack-sm">
                <div class="w-full h-1 bg-surface-container rounded-full overflow-hidden">
                  <div class="w-2/3 h-full bg-secondary group-hover:w-full transition-all duration-500"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Cyber Security -->
          <div class="md:col-span-4 group relative overflow-hidden rounded-xl border border-outline-variant bg-surface-container-lowest p-stack-lg transition-all duration-200 hover:shadow-xl hover:border-secondary">
            <div class="flex flex-col h-full gap-stack-md">
              <div class="bg-secondary/10 w-fit p-4 rounded-lg">
                <span class="material-symbols-outlined text-secondary text-4xl" data-icon="shield">shield</span>
              </div>
              <h3 class="font-headline-md text-headline-md">Cyber Security</h3>
              <p class="font-body-md text-body-md text-on-surface-variant">Robust protection for your digital assets through advanced encryption and threat intelligence.</p>
              <div class="mt-auto flex items-center gap-2">
                <span class="material-symbols-outlined text-green-600 text-sm" data-icon="check_circle">check_circle</span>
                <span class="text-caption font-caption text-on-surface-variant">ISO 27001 Compliant</span>
              </div>
            </div>
          </div>

          <!-- IT Consulting -->
          <div class="md:col-span-4 group relative overflow-hidden rounded-xl border border-outline-variant bg-surface-container-lowest p-stack-lg transition-all duration-200 hover:shadow-xl hover:border-secondary">
            <div class="flex flex-col h-full gap-stack-md">
              <div class="bg-secondary/10 w-fit p-4 rounded-lg">
                <span class="material-symbols-outlined text-secondary text-4xl" data-icon="psychology">psychology</span>
              </div>
              <h3 class="font-headline-md text-headline-md">IT Consulting</h3>
              <p class="font-body-md text-body-md text-on-surface-variant">Strategic guidance on digital transformation, cloud migration, and technology stack optimization.</p>
              <div class="mt-auto">
                <button class="w-full py-2 border border-outline hover:bg-on-surface hover:text-white transition-colors rounded font-label-md text-label-md">Schedule Audit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-section-padding overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-center">
          <div class="order-2 md:order-1">
            <div class="relative rounded-xl overflow-hidden h-[500px]">
              <img
                alt="Collaborative Workshop"
                class="w-full h-full object-cover"
                data-alt="A focused collaborative workshop scene in a brightly lit, glass-walled conference room. Professionals are brainstorming around a glass board filled with wireframes and system architecture diagrams. The lighting is warm yet professional, with a clean corporate aesthetic utilizing whites, light woods, and deep blue accents. The mood is creative, productive, and highly sophisticated."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXAn-cjloVDf_zVU6BJCPdZ1Ja7Dp09otCYoD5ub-KVNogPsLmkSOJAcRNFeuX4_LTeQrignFdC_CRjVDOgym-LSpf6Yc_dbP2qlZyJYM5jmruEQHjsxfZGyxkvT4NThYn-R9HkqcqUauxVliuTvQg74C8eaC-g6tySOkY6DPPz_J0xchaFvCtKBo_hFo7SteVFsBwj0Z6W2crgB5CPqoYVFrBBmi4KnllIwRAPKS6pWmUTrBfohsDii3_fFkrNwQv6FG1jN54eAk"
              >
              <div class="absolute inset-0 bg-secondary/5 mix-blend-multiply"></div>
            </div>
          </div>
          <div class="order-1 md:order-2 space-y-stack-md">
            <h2 class="font-headline-xl text-headline-xl">The Nexora Methodology</h2>
            <div class="space-y-stack-md">
              <div class="flex gap-stack-sm">
                <div class="font-display-lg text-secondary opacity-20 leading-none">01</div>
                <div>
                  <h4 class="font-headline-md text-body-lg font-bold">Discovery &amp; Analysis</h4>
                  <p class="text-on-surface-variant font-body-md">Deep dive into your business objectives and technical constraints to define the ideal roadmap.</p>
                </div>
              </div>
              <div class="flex gap-stack-sm">
                <div class="font-display-lg text-secondary opacity-20 leading-none">02</div>
                <div>
                  <h4 class="font-headline-md text-body-lg font-bold">Iterative Engineering</h4>
                  <p class="text-on-surface-variant font-body-md">Agile development cycles with continuous integration and real-time stakeholder feedback loops.</p>
                </div>
              </div>
              <div class="flex gap-stack-sm">
                <div class="font-display-lg text-secondary opacity-20 leading-none">03</div>
                <div>
                  <h4 class="font-headline-md text-body-lg font-bold">Deployment &amp; Scale</h4>
                  <p class="text-on-surface-variant font-body-md">Production launch with rigorous QA and ongoing performance monitoring for optimal scalability.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-surface-container-lowest dark:bg-surface-container-high w-full py-stack-lg border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter text-on-surface">
      <div class="col-span-1 md:col-span-1 space-y-stack-sm">
        <div class="font-headline-md text-headline-md font-bold text-primary">Nexora Digital</div>
        <p class="text-on-surface-variant font-caption text-caption max-w-xs">Pioneering technical excellence through engineering-driven design for the global enterprise.</p>
      </div>
      <div class="col-span-1 space-y-4">
        <h5 class="font-label-md text-label-md font-bold uppercase tracking-wider">Services</h5>
        <ul class="space-y-2">
          <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Web Platforms</a></li>
          <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Cloud Systems</a></li>
          <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">AI Integration</a></li>
        </ul>
      </div>
      <div class="col-span-1 space-y-4">
        <h5 class="font-label-md text-label-md font-bold uppercase tracking-wider">Company</h5>
        <ul class="space-y-2">
          <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">About Us</a></li>
          <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Careers</a></li>
          <li><a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-span-1 space-y-4">
        <h5 class="font-label-md text-label-md font-bold uppercase tracking-wider">Legal</h5>
        <div class="flex flex-col gap-2">
          <a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Privacy Policy</a>
          <a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Terms of Service</a>
          <a class="text-on-surface-variant hover:text-secondary transition-colors font-caption text-caption" href="#">Cookie Policy</a>
        </div>
      </div>
    </div>

    <div class="max-w-container-max mx-auto px-margin-desktop mt-stack-lg pt-stack-md border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="text-on-surface-variant font-caption text-caption">© 2024 Nexora Digital Agency. All rights reserved.</p>
      <div class="flex gap-stack-md">
        <span class="material-symbols-outlined text-on-surface-variant hover:text-secondary cursor-pointer" data-icon="language">language</span>
        <span class="material-symbols-outlined text-on-surface-variant hover:text-secondary cursor-pointer" data-icon="hub">hub</span>
        <span class="material-symbols-outlined text-on-surface-variant hover:text-secondary cursor-pointer" data-icon="share">share</span>
      </div>
    </div>
  </footer>

  <script>
    // Simple scroll interaction for the navbar
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      if (window.scrollY > 20) {
        nav.classList.add('shadow-md');
        nav.classList.remove('shadow-sm');
      } else {
        nav.classList.add('shadow-sm');
        nav.classList.remove('shadow-md');
      }
    });

    // Hover effect enhancement for bento cards
    const cards = document.querySelectorAll('.group');
    cards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        const icon = card.querySelector('.material-symbols-outlined');
        if (icon) {
          icon.style.fontVariationSettings = "'FILL' 1, 'wght' 400";
        }
      });
      card.addEventListener('mouseleave', () => {
        const icon = card.querySelector('.material-symbols-outlined');
        if (icon) {
          icon.style.fontVariationSettings = "'FILL' 0, 'wght' 300";
        }
      });
    });
  </script>
</body>
</html>
