<!DOCTYPE html>
<html class="light" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Nexora Digital | Portfolio</title>
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
    body {
      font-family: 'Inter', sans-serif;
    }
    .bento-item:hover .image-zoom {
      transform: scale(1.05);
    }
    .transition-all-200 {
      transition: all 200ms ease-out;
    }
  </style>
</head>
<body class="bg-background text-on-surface selection:bg-secondary-fixed selection:text-on-secondary-fixed">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-24">
    <!-- Hero Section -->
    <header class="max-w-container-max mx-auto px-margin-desktop py-stack-lg mt-stack-lg">
      <div class="max-w-3xl">
        <span class="font-label-md text-label-md text-secondary uppercase tracking-widest block mb-stack-sm">Selected Work</span>
        <h1 class="font-headline-xl text-headline-xl mb-stack-md">Engineering digital excellence through modern design.</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant">A collection of industry-leading solutions for enterprise clients and high-growth startups.</p>
      </div>
    </header>

    <!-- Portfolio Bento Grid -->
    <section class="max-w-container-max mx-auto px-margin-desktop py-section-padding">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">

        <!-- Large Feature Card -->
        <div class="md:col-span-8 group bento-item relative overflow-hidden rounded-xl border border-outline-variant/50 bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:border-secondary">
          <div class="aspect-video overflow-hidden">
            <img
              class="image-zoom w-full h-full object-cover transition-transform duration-700"
              data-alt="A ultra-high-definition photograph of a sleek, minimalist tech office with floor-to-ceiling windows overlooking a futuristic cityscape. Three software engineers are collaborating around a large, luminous digital interface displaying complex data visualizations and 3D models. The lighting is cold, professional blue mixed with warm interior accents. The overall aesthetic is premium, engineered, and authoritative with deep blacks and sharp contrasts."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIpV5KRWdlEVHIcsr_lU-FAAevjjQ-KRWJp3YxOM__tHSm6ukbUfb_5aSm6Xc75hEijANTLCiEluinlXLFhQIZlDSv6Lf_LDfKPqjnMdW2affAHKAjzMgKvdwYa4p78Z-ewxPOLatXhVrXAQNzzWyVlXf_b9dtyj7Wu7j67bh6XFrIqhegQrrxNhqiQhNrak0FFYamQTxqk5sMDpOjVZ_Dtew6_ngJ1fjqYzVM07k57d9tSB43fOIF-JFXoy1za-Nu1DH3qIWbVao"
            >
          </div>
          <div class="p-stack-md">
            <div class="flex justify-between items-start mb-base">
              <h3 class="font-headline-md text-headline-md">FinTech Core 2.0</h3>
              <span class="material-symbols-outlined text-secondary">arrow_outward</span>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">Global banking infrastructure redesign focused on high-density information architecture and real-time transaction monitoring for institutional investors.</p>
            <div class="mt-stack-md flex gap-stack-sm">
              <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-caption font-caption">Banking</span>
              <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-caption font-caption">Infrastructure</span>
            </div>
          </div>
        </div>

        <!-- Secondary Card -->
        <div class="md:col-span-4 group bento-item relative overflow-hidden rounded-xl border border-outline-variant/50 bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:border-secondary">
          <div class="h-64 overflow-hidden">
            <img
              class="image-zoom w-full h-full object-cover transition-transform duration-700"
              data-alt="A sophisticated close-up of a high-end hardware security module with glowing emerald-green LED circuits and intricate micro-etchings. The metallic surface has a matte charcoal finish reflecting soft studio lighting. This macro shot emphasizes precision engineering and technical competence. The color palette is dominated by dark grays and vibrant technical green, evoking a sense of military-grade security."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhDreNUj5AuHta9zdhLH_ekVnfi_dwBKwTSRsC6WD0GlYdMrxV4oqqCpJLYQXZlN-c-mJfOCKjwEaQqqYj5YwHLEvTp9k0vq1Y_rznr2MFxcguJeap9v-hk3dBJtZ-CtWCyTtDwl6f0nZpycXZ8_XCnFGQVspTKO12gkZBDPK3pEAPh66wRHa745qURtkqxgSpNBv9Xkw2qA7_YzFdWLcPbVwuYnJ51F8VapsI4SSP2-1TZJvodmx9GK75vII1cL0dyuP7VNlZogA"
            >
          </div>
          <div class="p-stack-md">
            <h3 class="font-label-md text-label-md font-bold mb-base">CipherGuard Pro</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">Enterprise-grade encryption management platform with biometric authentication layers.</p>
            <div class="mt-stack-md flex gap-stack-sm">
              <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-caption font-caption">Security</span>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="md:col-span-4 group bento-item relative overflow-hidden rounded-xl border border-outline-variant/50 bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:border-secondary">
          <div class="h-64 overflow-hidden">
            <img
              class="image-zoom w-full h-full object-cover transition-transform duration-700"
              data-alt="An abstract visualization of a neural network made of millions of tiny glowing white particles suspended in a pitch-black void. Wisps of secondary blue light travel along the connections like synaptic pulses. The composition is asymmetrical and editorial, capturing a sense of artificial intelligence and high-tier data processing. The aesthetic is clean, expensive, and intentional."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd-K3je_OVTm1ZTMf6yIcnWdSi0EeFtTphiRKeTxuvAKlQr-nv8DfINSE5PV73AZj1YDeEHWjnMZtnCsgK8GjQehphDqAV8wM_LjP8JzXgBCDgo-taFV8dnfE2ra3Hk24DSpA9ailUgYcyrUfix4Vg3spcuQQXq4N8zblvnuSsjJ1KMUB7VwJtsZAsEFGUbklbqczDSgKXuQEjBCdLweGxHrDgNi3MKcisLGg_g3KOJtwsf-dLcQBmcZ9Mp4sTEJk267ptbQbbC14"
            >
          </div>
          <div class="p-stack-md">
            <h3 class="font-label-md text-label-md font-bold mb-base">NeuralLink Dashboard</h3>
            <p class="font-body-md text-body-md text-on-surface-variant">AI-driven predictive analytics for supply chain optimization and logistics.</p>
          </div>
        </div>

        <!-- Card 4 - Wide -->
        <div class="md:col-span-8 group bento-item relative overflow-hidden rounded-xl border border-outline-variant/50 bg-surface-container-lowest transition-all duration-300 hover:shadow-xl hover:border-secondary">
          <div class="h-64 overflow-hidden">
            <img
              class="image-zoom w-full h-full object-cover transition-transform duration-700"
              data-alt="A high-key wide shot of a modern, minimal web dashboard displayed on a high-resolution 5K monitor. The screen shows elegant typography and thin-line charts in a light mode interface. The surrounding environment is a clean, white marble desk with a single metallic stylus. The lighting is diffused and bright, creating a calm authority and premium corporate modernism feeling."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjQBvQ-AIBWLqLWfbCTathnWviaIGheMKTHYA2cgrvze9oTPZnu5_-q3dmmT3beHnzKNOxPsDijZZREVv3ak36ttMM8h9BgTCBzoClrKcNq0LQIu9g4OnrZU_pQn73sfSKnTRzpzD_nWf7jMzQBxWYncdlvPtw1zxssyZOuCU_b17hkIuRCdF_gCONiWJ-Amu9K5mbF_xKNuhu4IZFym0o2KkcsLlpAD1k3JswWgksasr2rtnmKPXK7yQfnnuF02cGuMUYTebUaR8"
            >
          </div>
          <div class="p-stack-md">
            <div class="flex justify-between items-start mb-base">
              <h3 class="font-headline-md text-headline-md">Vantage Analytics</h3>
              <span class="material-symbols-outlined text-secondary">arrow_outward</span>
            </div>
            <p class="font-body-md text-body-md text-on-surface-variant">Strategic data visualization tool used by Fortune 500 companies for quarterly performance reviews.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-primary text-on-primary py-section-padding">
      <div class="max-w-container-max mx-auto px-margin-desktop text-center">
        <h2 class="font-headline-xl text-headline-xl mb-stack-md">Ready to start your next project?</h2>
        <p class="font-body-lg text-body-lg text-on-primary-container mb-stack-lg max-w-2xl mx-auto">Join the world's most innovative brands and transform your digital presence with Nexora's engineering expertise.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-stack-md">
          <button class="bg-secondary text-on-secondary px-stack-lg py-stack-sm rounded-lg font-label-md text-label-md hover:opacity-90 transition-all-200">Book a Consultation</button>
          <button class="border border-on-primary text-on-primary px-stack-lg py-stack-sm rounded-lg font-label-md text-label-md hover:bg-on-primary hover:text-primary transition-all-200">View Services</button>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-surface-container-lowest dark:bg-surface-container-high w-full py-stack-lg border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="md:col-span-1">
        <div class="font-headline-md text-headline-md font-bold text-primary mb-stack-sm">Nexora</div>
        <p class="font-caption text-caption text-on-surface-variant max-w-xs">Building the digital foundations for tomorrow's industry leaders through rigorous design and engineering.</p>
      </div>
      <div>
        <h4 class="font-label-md text-label-md font-bold mb-stack-sm">Solutions</h4>
        <ul class="space-y-2">
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">UI/UX Design</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Engineering</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Brand Identity</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-label-md text-label-md font-bold mb-stack-sm">Legal</h4>
        <ul class="space-y-2">
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacy Policy</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Terms of Service</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Cookie Policy</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Careers</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-label-md text-label-md font-bold mb-stack-sm">Newsletter</h4>
        <div class="flex">
          <input class="bg-background border border-outline-variant text-caption p-2 w-full rounded-l-lg focus:outline-none focus:ring-1 focus:ring-secondary" placeholder="Email address" type="email">
          <button class="bg-primary text-on-primary px-4 py-2 rounded-r-lg font-label-md text-label-md">Join</button>
        </div>
      </div>
    </div>
    <div class="max-w-container-max mx-auto px-margin-desktop mt-stack-lg pt-stack-md border-t border-outline-variant/30 text-center md:text-left">
      <p class="font-caption text-caption text-on-surface-variant">© 2024 Nexora Digital Agency. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Simple scroll behavior for header
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      if (window.scrollY > 20) {
        nav.classList.add('py-2', 'shadow-md');
        nav.classList.remove('py-4');
      } else {
        nav.classList.remove('py-2', 'shadow-md');
        nav.classList.add('py-4');
      }
    });
  </script>
</body>
</html>
