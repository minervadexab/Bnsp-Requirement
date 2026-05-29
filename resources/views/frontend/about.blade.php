<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About Us | Nexora Digital</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <style>
    /* Custom utility classes and overrides */
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(226, 232, 240, 0.8);
    }
    .hero-gradient {
      background: radial-gradient(circle at top right, #dae2fd 0%, transparent 40%),
                  radial-gradient(circle at bottom left, #f7f9fb 0%, transparent 40%);
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
<body class="bg-background text-on-surface font-body-md antialiased">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-20">
    <!-- Hero Section -->
    <section class="hero-gradient py-section-padding px-margin-mobile md:px-margin-desktop overflow-hidden">
      <div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center">
        <div class="space-y-stack-md">
          <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary font-label-md rounded-full">EST. 2014</span>
          <h1 class="font-headline-xl text-headline-xl md:text-display-lg leading-tight tracking-tight">Engineering the future of digital presence.</h1>
          <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
            Nexora Digital is a global creative engineering agency dedicated to building high-performance digital ecosystems for the enterprise of tomorrow.
          </p>
        </div>
        <div class="relative">
          <img
            alt="Agency Office"
            class="rounded-xl shadow-lg w-full h-[500px] object-cover"
            data-alt="A wide-angle, cinematic photograph of a high-end corporate office interior in London. The space features floor-to-ceiling glass windows, minimalist white desks with premium workstations, and subtle navy blue architectural accents. Soft natural light floods the room, creating a bright and professional atmosphere that emphasizes technical precision and creative calm."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfadztD47EMwTBKAZb-ouMjMupPf0KlVgRiEXcyhiQxtmgUWAsbml6iAMavdUCCvkgvEhLYImjVB8lBmiM-ccSzTjMTwSz_oCEk2Ad_TEjYYcl2rxNTy3crEHkGhJnCwN8PzvXUnaD85-rxHKHk55ZoBVKD48VEumwiRpsrljiFSSGRvJzaaVfdcHz4yh5WA9pOYuTLNQZdXIMCEOCEknvCGEyeiAU5GPfFm0NvUi_aRsxls8J3UfN2FnW0v65Rq31XStY_TfXWUw"
          >
          <div class="absolute -bottom-8 -left-8 glass-card p-stack-md rounded-xl max-w-[280px] hidden md:block">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary scale-125">verified</span>
              <p class="font-label-md">10+ Years of Enterprise Excellence</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Vision & Mission (Bento Grid) -->
    <section class="py-section-padding px-margin-mobile md:px-margin-desktop bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
          <!-- Mission -->
          <div class="md:col-span-2 group relative overflow-hidden rounded-xl border border-outline-variant bg-white p-12 transition-all hover:border-secondary hover:shadow-xl duration-300">
            <div class="relative z-10 flex flex-col h-full justify-between">
              <div>
                <span class="material-symbols-outlined text-secondary text-5xl mb-6">rocket_launch</span>
                <h2 class="font-headline-xl text-headline-xl mb-4">Our Mission</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                  To bridge the gap between creative vision and technical reality by providing bespoke digital solutions that empower brands to dominate their industry landscapes. We believe in engineering that is as beautiful as it is robust.
                </p>
              </div>
              <div class="mt-stack-lg flex gap-8">
                <div>
                  <div class="text-headline-md font-bold text-primary">500+</div>
                  <div class="text-caption text-on-surface-variant">Projects Delivered</div>
                </div>
                <div>
                  <div class="text-headline-md font-bold text-primary">98%</div>
                  <div class="text-caption text-on-surface-variant">Retention Rate</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Vision -->
          <div class="group relative overflow-hidden rounded-xl border border-outline-variant bg-primary-container p-10 text-white transition-all hover:shadow-xl duration-300">
            <div class="flex flex-col h-full justify-between">
              <span class="material-symbols-outlined text-secondary-fixed text-5xl">visibility</span>
              <div>
                <h2 class="font-headline-md text-headline-md mb-4 text-white">The Vision</h2>
                <p class="font-body-md text-body-md text-on-primary-container">
                  Becoming the worldwide standard for high-tier digital innovation where every interaction is intentional.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Detailed History Section -->
    <section class="py-section-padding px-margin-mobile md:px-margin-desktop">
      <div class="max-w-container-max mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
          <div class="lg:col-span-4 sticky top-32">
            <h2 class="font-headline-xl text-headline-xl mb-6">Our Evolution</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">
              From a small studio in East London to a global powerhouse, our journey is defined by constant adaptation and an unwavering commitment to quality.
            </p>
          </div>

          <div class="lg:col-span-7 lg:offset-1 space-y-16">
            <!-- Timeline 2014 -->
            <div class="relative pl-12 border-l-2 border-outline-variant">
              <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-secondary ring-4 ring-white"></div>
              <span class="font-label-md text-secondary">2014 — THE GENESIS</span>
              <h3 class="font-headline-md text-headline-md my-4">Founding Nexora</h3>
              <p class="font-body-lg text-body-lg text-on-surface-variant">
                Nexora Digital was founded by three software architects and a design lead who realized that the enterprise sector was underserved by creative agencies. The goal was simple: bring startup-speed innovation to corporate stability.
              </p>
            </div>

            <!-- Timeline 2018 -->
            <div class="relative pl-12 border-l-2 border-outline-variant">
              <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-outline-variant ring-4 ring-white group-hover:bg-secondary transition-colors"></div>
              <span class="font-label-md text-on-surface-variant">2018 — GLOBAL EXPANSION</span>
              <h3 class="font-headline-md text-headline-md my-4">Scale &amp; Sophistication</h3>
              <p class="font-body-lg text-body-lg text-on-surface-variant">
                After four years of consistent growth, we expanded our operations to San Francisco and Singapore, doubling our engineering team and pivoting towards AI-driven user experiences.
              </p>
            </div>

            <!-- Timeline Today -->
            <div class="relative pl-12 border-l-2 border-outline-variant">
              <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-outline-variant ring-4 ring-white"></div>
              <span class="font-label-md text-on-surface-variant">TODAY — MARKET LEADERS</span>
              <h3 class="font-headline-md text-headline-md my-4">Nexora 2.0</h3>
              <p class="font-body-lg text-body-lg text-on-surface-variant">
                We now operate as a full-service digital agency, partnering with Fortune 500 companies to redefine their digital footprint through a synthesis of cloud infrastructure and avant-garde design.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-section-padding px-margin-mobile md:px-margin-desktop bg-surface-container-low">
      <div class="max-w-container-max mx-auto text-center mb-16">
        <h2 class="font-headline-xl text-headline-xl mb-4">The Minds Behind Nexora</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
          A diverse collective of thinkers, builders, and designers dedicated to excellence.
        </p>
      </div>

      <div class="max-w-container-max mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
        <!-- Team Member 1 - Marcus Thorne -->
        <div class="group">
          <div class="relative overflow-hidden rounded-xl mb-4 aspect-[4/5] bg-surface-container-highest">
            <img
              alt="Marcus Thorne"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
              data-alt="A professional headshot of a middle-aged man with a refined, intellectual appearance, wearing a sharp charcoal suit. He is standing against a soft, out-of-focus background of a modern glass-walled office."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxrXodpwFEey8Teb9S3TOUXpIh01okYhn_3-hvu0yBqETUKBNHa66Xfvd72tvMWUPrNdHrAXs1fUKvXPDaL_ZeAkb5r6-nxT7R5HNATG9SbXFZqXNAMUr9MuDmLg_pbmJybMOfPWQBjYNoqnmkuI8yvIVKMMa6nstbBMpR5RgvG2m5UBNMWMHhhXREPojUNyrl0NGcFPY_nmzcrLmfHdi95UkoCNloyK1jdZp_qgpF6dUi-ytsziWd524puw5aKXivHT6OpSzSuHA"
            >
          </div>
          <h4 class="font-headline-md text-label-md font-bold mb-1">Marcus Thorne</h4>
          <p class="text-caption text-secondary font-label-md">Chief Executive Officer</p>
        </div>

        <!-- Team Member 2 - Elena Rossi -->
        <div class="group">
          <div class="relative overflow-hidden rounded-xl mb-4 aspect-[4/5] bg-surface-container-highest">
            <img
              alt="Elena Rossi"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
              data-alt="A professional studio portrait of a woman with a confident and creative expression, wearing a tailored navy blazer."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuALix92qRttfQUtQ80Iy12SP-JLQO6XW_gk97ctUYwdMz-l9kWF38a9C77TuoxglVPX584a6YmmAVI0WXm-71NhjMeA2HkB4oyKm-9Y9JQ5XlJre-GmSAhXutJ29EStgf_KFJk7Z0HuH4pgsqmOqlVP_-ytzR5pnw3F0IFJktqZi1lkNZQ5PwAcN-2Ifzmemn2t8pPunOq7NjKg1yaZRdmADt3n6n5l1Z11Y2N_nlOQfHOSYVHiSwDYukow3oBnxBQROq0B7suZnc4"
            >
          </div>
          <h4 class="font-headline-md text-label-md font-bold mb-1">Elena Rossi</h4>
          <p class="text-caption text-secondary font-label-md">Director of UX Design</p>
        </div>

        <!-- Team Member 3 - David Chen -->
        <div class="group">
          <div class="relative overflow-hidden rounded-xl mb-4 aspect-[4/5] bg-surface-container-highest">
            <img
              alt="David Chen"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
              data-alt="A polished headshot of a young professional man in a crisp white shirt, standing in a brightly lit modern office setting."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuCU14g87_S40u3eJ4RyheRmQkcNtOuVmoM4feGo9AgaAyLYUWSUCvwRB1qf5Os2Fs4dShl3h3AXCFWy6nGrBReRqvpY3XQIJeKw2O5aav5EwVlXyuaIkUgZWbgnEiOBVg274uCm55GAsGfF-oQEK_0LJBnhjDPCxoYiE_ppdfcivbcq2RUF3krMTyFg2hvgHVUY73a0TOoIiG432yuCyqXzfEsH7wX16jyncO702z4fMkopggfid5W-Dm5XqEeyIdKmxUdC1uIT1Lc"
            >
          </div>
          <h4 class="font-headline-md text-label-md font-bold mb-1">David Chen</h4>
          <p class="text-caption text-secondary font-label-md">Chief Technical Officer</p>
        </div>

        <!-- Team Member 4 - Sarah Jenkins -->
        <div class="group">
          <div class="relative overflow-hidden rounded-xl mb-4 aspect-[4/5] bg-surface-container-highest">
            <img
              alt="Sarah Jenkins"
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
              data-alt="A cinematic portrait of a woman with an engaged and intelligent look, wearing modern business attire."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAq1okCS-ZaPAZQsNNyCMC8GsJby-OOuS2_dIPN1csXdcdD7DtJnu7MLp2ZerP5tJY9jeXUCyg8gxnKjGbmkTZCJZ_p46nLJobx_3-IdDqXUkgL2gYbO_5xev0gaq_HE1eCbP6bGmOBxHDGZSYJeSrPiP7JHoiTVdjV4Xt-ma8Nhx1JbN2eCAn9Cfz_dhKbsYX6oQn5-OGBdLREqge9RdICRJtT8zo7bR0MVyYz5hqrXKK3MY7OZd1Ix57EtF3gindXNQ-10RJqa7E"
            >
          </div>
          <h4 class="font-headline-md text-label-md font-bold mb-1">Sarah Jenkins</h4>
          <p class="text-caption text-secondary font-label-md">Head of Strategy</p>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-section-padding px-margin-mobile md:px-margin-desktop bg-primary">
      <div class="max-w-container-max mx-auto text-center">
        <h2 class="font-display-lg-mobile md:font-headline-xl text-white mb-8">Ready to start your journey?</h2>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button class="bg-secondary text-white px-8 py-4 rounded-lg font-label-md hover:bg-opacity-90 transition-all shadow-lg">
            View Our Portfolio
          </button>
          <button class="border border-white/30 text-white px-8 py-4 rounded-lg font-label-md hover:bg-white/10 transition-all">
            Contact Sales
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="w-full py-stack-lg bg-surface-container-lowest border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="space-y-4">
        <div class="font-headline-md text-headline-md font-bold text-primary">Nexora</div>
        <p class="font-caption text-on-surface-variant max-w-xs">
          Architecting high-performance digital solutions for global enterprises since 2014.
        </p>
      </div>
      <div>
        <h4 class="font-label-md font-bold text-primary mb-4">Services</h4>
        <ul class="space-y-2 font-caption text-on-surface-variant">
          <li class="hover:text-secondary transition-colors cursor-pointer">Product Design</li>
          <li class="hover:text-secondary transition-colors cursor-pointer">Cloud Engineering</li>
          <li class="hover:text-secondary transition-colors cursor-pointer">Strategy Consulting</li>
        </ul>
      </div>
      <div>
        <h4 class="font-label-md font-bold text-primary mb-4">Company</h4>
        <ul class="space-y-2 font-caption text-on-surface-variant">
          <li class="text-secondary underline cursor-pointer">About Us</li>
          <li class="hover:text-secondary transition-colors cursor-pointer">Careers</li>
          <li class="hover:text-secondary transition-colors cursor-pointer">Terms</li>
        </ul>
      </div>
      <div>
        <h4 class="font-label-md font-bold text-primary mb-4">Newsletter</h4>
        <div class="flex gap-2">
          <input class="bg-white border border-outline-variant rounded px-3 py-1.5 text-caption w-full focus:ring-2 focus:ring-secondary/20 outline-none" placeholder="Email" type="email">
          <button class="bg-primary text-white p-2 rounded material-symbols-outlined text-[18px]">arrow_forward</button>
        </div>
      </div>
    </div>

    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-stack-lg pt-stack-md border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="font-caption text-caption text-on-surface-variant">© 2024 Nexora Digital Agency. All rights reserved.</p>
      <div class="flex gap-6">
        <a class="font-caption text-on-surface-variant hover:text-secondary" href="#">Privacy Policy</a>
        <a class="font-caption text-on-surface-variant hover:text-secondary" href="#">Terms of Service</a>
        <a class="font-caption text-on-surface-variant hover:text-secondary" href="#">Cookie Policy</a>
        <a class="font-caption text-on-surface-variant hover:text-secondary" href="#">Careers</a>
      </div>
    </div>
  </footer>

  <script>
    // Smooth reveal interaction for timeline points
    const observerOptions = {
      threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100', 'translate-y-0');
          entry.target.classList.remove('opacity-0', 'translate-y-8');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.border-l-2').forEach(el => {
      el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
      observer.observe(el);
    });
  </script>
</body>
</html>
