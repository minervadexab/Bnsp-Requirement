<!DOCTYPE html>
<html class="light" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Nexora Digital | Innovating the Digital Frontier</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">

  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "on-primary-container": "#7c839b",
            "on-tertiary": "#ffffff",
            "inverse-surface": "#2d3133",
            "surface-variant": "#e0e3e5",
            "surface": "#f7f9fb",
            "on-surface-variant": "#45464d",
            "primary-fixed-dim": "#bec6e0",
            "surface-container-highest": "#e0e3e5",
            "surface-dim": "#d8dadc",
            "on-primary-fixed": "#131b2e",
            "on-secondary-fixed": "#00174b",
            "on-primary": "#ffffff",
            "on-background": "#191c1e",
            "on-tertiary-fixed": "#0b1c30",
            "surface-container-low": "#f2f4f6",
            "on-error-container": "#93000a",
            "surface-container": "#eceef0",
            "primary": "#000000",
            "outline": "#76777d",
            "on-tertiary-fixed-variant": "#38485d",
            "on-error": "#ffffff",
            "tertiary-fixed": "#d3e4fe",
            "secondary-container": "#316bf3",
            "on-secondary-container": "#fefcff",
            "tertiary": "#000000",
            "on-secondary-fixed-variant": "#003ea8",
            "secondary": "#0051d5",
            "inverse-primary": "#bec6e0",
            "outline-variant": "#c6c6cd",
            "inverse-on-surface": "#eff1f3",
            "on-secondary": "#ffffff",
            "error": "#ba1a1a",
            "secondary-fixed-dim": "#b4c5ff",
            "primary-fixed": "#dae2fd",
            "tertiary-fixed-dim": "#b7c8e1",
            "surface-tint": "#565e74",
            "surface-container-lowest": "#ffffff",
            "on-primary-fixed-variant": "#3f465c",
            "secondary-fixed": "#dbe1ff",
            "primary-container": "#131b2e",
            "on-surface": "#191c1e",
            "surface-container-high": "#e6e8ea",
            "surface-bright": "#f7f9fb",
            "on-tertiary-container": "#75859d",
            "error-container": "#ffdad6",
            "background": "#f7f9fb",
            "tertiary-container": "#0b1c30"
          },
          borderRadius: {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          spacing: {
            "margin-mobile": "20px",
            "base": "8px",
            "gutter": "24px",
            "margin-desktop": "64px",
            "stack-md": "24px",
            "stack-lg": "48px",
            "container-max": "1280px",
            "stack-sm": "12px",
            "section-padding": "96px"
          },
          fontFamily: {
            "caption": ["Inter"],
            "headline-md": ["Inter"],
            "display-lg-mobile": ["Inter"],
            "headline-xl-mobile": ["Inter"],
            "body-md": ["Inter"],
            "label-md": ["Inter"],
            "headline-xl": ["Inter"],
            "display-lg": ["Inter"],
            "body-lg": ["Inter"]
          },
          fontSize: {
            "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
            "headline-md": ["30px", {"lineHeight": "38px", "fontWeight": "600"}],
            "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
            "headline-xl-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
            "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "500"}],
            "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "display-lg": ["72px", {"lineHeight": "80px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
          }
        }
      }
    }
  </script>

  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease-out;
    }
    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-surface font-body-md text-on-surface">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <!-- Hero Section -->
  <section class="pt-40 pb-section-padding px-margin-mobile md:px-margin-desktop overflow-hidden">
    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
      <div class="reveal active">
        <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-stack-sm">Innovating the Digital Frontier</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg max-w-xl">We architect high-performance digital ecosystems for visionary brands. Bridging the gap between creative artistry and technical precision.</p>
        <div class="flex flex-wrap gap-stack-sm">
          <button class="bg-primary text-on-primary px-8 py-3 rounded-lg font-label-md hover:bg-on-surface-variant transition-colors">Start Your Journey</button>
          <button class="border border-primary text-primary px-8 py-3 rounded-lg font-label-md hover:bg-surface-container transition-colors">Explore Services</button>
        </div>
      </div>
      <div class="relative reveal active delay-200">
        <div class="w-full h-[500px] rounded-xl overflow-hidden shadow-xl border border-outline-variant/30">
          <img
            class="w-full h-full object-cover"
            data-alt="A futuristic and professional digital agency workspace featuring large curved monitors displaying complex code and data visualizations. The lighting is clean and cool with a blue tint, emphasizing a modern light-mode office aesthetic. Minimalist white furniture and high-end technical equipment are visible in the background, creating a calm authority and premium corporate mood."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyUwXiRHQ0ulxqP_0XTuj2SkgpW-rhg2b_80i9I9I41u1X-Btvpz2pClepeFOEkig2Y3lfSalvlm92pE2rgngMCI62hrvNMdGFq8pPxCn-Mlhss_PIw1tuOnGAbCCE9u96xY34-TajxX7-hzlLjOMetFQZcN8MCenINt5E-nRvG95jsUO4pkdmj_y2MPzKAmBTm6OI7tM5trwI7N3dqHCoKG1VtcgVMgGB_jOpFYVEDZePrdJ8LQwCBimIItyvnuvgebArMrPx2vo"
          >
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Monochromatic -->
  <section class="py-stack-lg bg-surface-container-low border-y border-outline-variant/20">
    <div class="max-w-container-max mx-auto px-margin-desktop">
      <div class="flex flex-wrap justify-between items-center opacity-40 grayscale gap-gutter">
        <span class="font-headline-md text-primary font-bold">ALPHA</span>
        <span class="font-headline-md text-primary font-bold">TECHNO</span>
        <span class="font-headline-md text-primary font-bold">QUANTUM</span>
        <span class="font-headline-md text-primary font-bold">VORTEX</span>
        <span class="font-headline-md text-primary font-bold">NEXUS</span>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-section-padding px-margin-mobile md:px-margin-desktop bg-surface">
    <div class="max-w-container-max mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
        <div class="md:col-span-5 reveal">
          <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl mb-stack-md">We Transform Complexity Into Clarity</h2>
        </div>
        <div class="md:col-span-7 reveal delay-100">
          <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
            At Nexora Digital, we believe that true digital transformation isn't just about adopting new technology—it's about reimagining how your business creates value in an increasingly connected world. Our multi-disciplinary team combines strategic consulting with elite-level engineering to build solutions that don't just solve today's problems but anticipate tomorrow's challenges.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision & Mission -->
  <section class="pb-section-padding px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter">
      <div class="p-stack-lg bg-surface-container-lowest border border-outline-variant rounded-xl hover:shadow-xl transition-all duration-300 reveal">
        <span class="material-symbols-outlined text-secondary text-[48px] mb-stack-sm" data-icon="visibility">visibility</span>
        <h3 class="font-headline-md text-headline-md mb-stack-sm">Our Vision</h3>
        <p class="font-body-md text-body-md text-on-surface-variant">To be the global benchmark for digital innovation, where technical excellence and creative design converge to empower human potential.</p>
      </div>
      <div class="p-stack-lg bg-surface-container-lowest border border-outline-variant rounded-xl hover:shadow-xl transition-all duration-300 reveal delay-100">
        <span class="material-symbols-outlined text-secondary text-[48px] mb-stack-sm" data-icon="rocket_launch">rocket_launch</span>
        <h3 class="font-headline-md text-headline-md mb-stack-sm">Our Mission</h3>
        <p class="font-body-md text-body-md text-on-surface-variant">To deliver high-tier engineering and strategic insights that accelerate growth for enterprises and disruptors alike, ensuring their digital future is secure and scalable.</p>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-section-padding px-margin-mobile md:px-margin-desktop bg-surface-container-low">
    <div class="max-w-container-max mx-auto">
      <div class="text-center mb-stack-lg reveal">
        <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl mb-stack-sm">Specialized Expertise</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Elite technical services tailored to the demands of modern industry.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
        <!-- Web Dev -->
        <div class="group bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg hover:border-secondary transition-all duration-300 hover:-translate-y-2 hover:shadow-xl reveal">
          <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center rounded mb-stack-sm">
            <span class="material-symbols-outlined text-secondary" data-icon="code">code</span>
          </div>
          <h4 class="font-headline-md text-xl font-bold mb-base">Web Development</h4>
          <p class="font-body-md text-on-surface-variant text-sm">Scalable, lightning-fast web applications built with React, Node, and specialized cloud architecture.</p>
        </div>

        <!-- Mobile App -->
        <div class="group bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg hover:border-secondary transition-all duration-300 hover:-translate-y-2 hover:shadow-xl reveal delay-100">
          <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center rounded mb-stack-sm">
            <span class="material-symbols-outlined text-secondary" data-icon="smartphone">smartphone</span>
          </div>
          <h4 class="font-headline-md text-xl font-bold mb-base">Mobile App</h4>
          <p class="font-body-md text-on-surface-variant text-sm">Native and cross-platform mobile experiences that prioritize performance and user engagement.</p>
        </div>

        <!-- UI/UX -->
        <div class="group bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg hover:border-secondary transition-all duration-300 hover:-translate-y-2 hover:shadow-xl reveal delay-200">
          <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center rounded mb-stack-sm">
            <span class="material-symbols-outlined text-secondary" data-icon="palette">palette</span>
          </div>
          <h4 class="font-headline-md text-xl font-bold mb-base">UI/UX Design</h4>
          <p class="font-body-md text-on-surface-variant text-sm">Psychology-driven design systems that maximize usability and reinforce high-tier brand identity.</p>
        </div>

        <!-- Cyber Security -->
        <div class="group bg-surface-container-lowest border border-outline-variant p-stack-md rounded-lg hover:border-secondary transition-all duration-300 hover:-translate-y-2 hover:shadow-xl reveal delay-300">
          <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center rounded mb-stack-sm">
            <span class="material-symbols-outlined text-secondary" data-icon="shield">shield</span>
          </div>
          <h4 class="font-headline-md text-xl font-bold mb-base">Cyber Security</h4>
          <p class="font-body-md text-on-surface-variant text-sm">Enterprise-grade security audits and architectural hardening to protect your critical digital assets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Highlights -->
  <section class="py-section-padding px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
      <div class="flex justify-between items-end mb-stack-lg reveal">
        <div>
          <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl mb-base">Recent Deployments</h2>
          <p class="font-body-md text-on-surface-variant">Proven success across industries.</p>
        </div>
        <button class="text-secondary font-bold flex items-center gap-2 group">
          View Portfolio <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
        </button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
        <div class="relative group overflow-hidden rounded-xl h-[400px] reveal">
          <img
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            data-alt="A clean and minimal landing page design on a high-resolution laptop screen, showcasing sophisticated layout and high-contrast typography. The image is set in a bright, airy studio with natural sunlight casting soft shadows. The color palette consists of slate grays and vibrant primary blues, reflecting a premium engineering brand aesthetic."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAS5kOOrjH02DGrW0So6E_7Jeq2x_UV8ecVwLgo6lwDUAtA0GBKxSaLu75XPAVItUkWoZYbbrBPz_c75D2fL_GXM0Dv4QLaepnyfWcX7sXHWTFBkgKIwfHRWzczLZXj1CB7C7vTBxpzNPbdp3vtIedTsPIUgSL2WWNF6TJ4p3iQojELfPwDSIx6O_KyTAvsacdEycjkuG6deNEYYL-LlDcNRjNukTSgsl7JlpANZ-Z1tGwDvh60q_tJgv6bFsTciblvp9RXaz2V_qg"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-stack-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h5 class="text-on-primary font-headline-md">FinTech Evolution</h5>
            <p class="text-surface-variant font-caption">Digital Banking Platform</p>
          </div>
        </div>
        <div class="relative group overflow-hidden rounded-xl h-[400px] reveal delay-100">
          <img
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            data-alt="A professional architectural firm's website design shown on a tablet, featuring high-end 3D renderings and minimalist structural elements. The background is a crisp white office setting with premium materials like wood and steel. The overall mood is sophisticated and calm, emphasizing technological precision and creative elegance in the light-mode UI."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5YRdG7dB40T9hLZ5SLEPMSU2pDdKwmHEdjIf6KZALxyIcPVFngU4OuIziXn-cnFgKkPv3fFYQds4WMpK_knZ3rwwOyNJPCwsfLyjUO6x3Y7ZbrUvv7VwVAcm7oRG_sO9KPcA4GiJJ9T_IzAF6O9J6qDZymyGwNZL1RAL_UpiLu6s-IrfRNvfLVXr89rdLSX4dXqsA0NUa2TsQ2wXgsdVMzoHbGWTG1nERRju6wZ7MMhhCdt1hTQLyF-3ojmX0QhIGEVev3DdHTMM"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-stack-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h5 class="text-on-primary font-headline-md">Nexus Real Estate</h5>
            <p class="text-surface-variant font-caption">PropTech Ecosystem</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Workspace Gallery -->
  <section class="py-section-padding bg-surface-container-highest/30 px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
      <h2 class="font-headline-xl text-center mb-stack-lg reveal">The Nexora Hub</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <div class="h-64 rounded-lg overflow-hidden border border-outline-variant reveal">
          <img
            class="w-full h-full object-cover"
            data-alt="A diverse team of young professionals collaborating in a high-tech open-plan office. They are gathered around a large white table with laptops and physical design wireframes. The office is bright with floor-to-ceiling windows, showcasing a modern corporate environment. The atmosphere is energetic yet focused, using a clean blue and white color palette."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6yfzFPrmBxqfDHa0nrbBIEf_EB7C7Ufa0BA_5UzFNB5VoWlDuuAJR1_WQQylBs5PY6YpBt80ujST2NHdhtKFFMpgGdhnjYgairtlCNRS7Hl2hDHE8RuQiax5YzjxBeSJ_7DNrwE-cqMRwqiKZ-AwZDeTHMBI_fpO3ooHJ0ylIsMVv_Qfnadn2WmsTxGnbsBqxTlxAl2u6Nqab_w2RHL1qkS52J7vEvygEJeq92KbJyNM3r6jVN_TZ1mOri0VkmjRlNLL-DLzfT68"
          >
        </div>
        <div class="h-64 rounded-lg overflow-hidden border border-outline-variant reveal delay-100">
          <img
            class="w-full h-full object-cover"
            data-alt="A serene, ultra-modern office lobby with minimalist furniture and architectural light installations. The space uses white marble and polished steel surfaces, reflecting a premium technical competence. Large glass walls overlook a city skyline. The lighting is bright and even, highlighting a clean, high-end professional atmosphere."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjaAJT_UDGosu30NoutmynuDUZcA6OY43n7Mj4aLB33ianVOGoeuYEz_ISxjBNMvM4dsCkp86lOz2AJILg8s03jpi83JsCQRR91IvJqrd-lGAVn-Omo44C6SzmBmx2iVerprVULbF4Bs4ALRLwzaFRzAOvvz4LCgFNnZ4RDdO4aT-OP1JczSW4CAnZNPBSgyWi_Z6p_bJNDbJG_8XDXPmpwk0qtQeQxlMNTB6U4vfl_zMBQi-T7I02yk6cBKfgCvOthoDJ1IF9Xvw"
          >
        </div>
        <div class="h-64 rounded-lg overflow-hidden border border-outline-variant reveal delay-200">
          <img
            class="w-full h-full object-cover"
            data-alt="Close-up of a brainstorming session on a glass wall using sleek neon markers. Diagrams of complex data flow and software architecture are visible. The background is slightly blurred showing a professional creative agency setting. The aesthetic is engineered and intentional, with cool tones and sharp focus on the collaborative process."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuALLST_dqhIcXTLtbFNJegLlVXx0ji7ax4iZ64DViqyNSoe8XGu_E4SheZbRFnas-S7lPViX1KA18VcvRNAO6Dr6AGqifG9Xx-x1EebwSQYaijuxBICJIIiD4K7BOPqYI-SJMmnBa3tO9tuoTsCz3G83u93-yeP8d3edmclmqeLffMhG-rS52BTvypQ4A0b1ADIDUlOV8GuvlH2LNIwboH1VxHXgiYOeT_tH4dUBp4pPRdtWii_LovliNpYwPjvrcF6q1UbyRI1jng"
          >
        </div>
      </div>
    </div>
  </section>

  <!-- Events: Life at Nexora -->
  <section class="py-section-padding px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
      <h2 class="font-headline-xl mb-stack-lg reveal">Life at Nexora</h2>
      <div class="flex flex-col md:flex-row gap-gutter">
        <div class="flex-1 bg-surface-container border border-outline-variant rounded-lg overflow-hidden reveal">
          <div class="p-stack-md">
            <span class="text-secondary font-label-md">CONFERENCE</span>
            <h4 class="font-headline-md text-lg mt-2">DevSummit 2024</h4>
            <p class="font-body-md text-on-surface-variant mt-2">Our team presented breakthroughs in edge computing and serverless architecture.</p>
            <div class="mt-4 text-sm text-outline">March 15, 2024</div>
          </div>
        </div>
        <div class="flex-1 bg-surface-container border border-outline-variant rounded-lg overflow-hidden reveal delay-100">
          <div class="p-stack-md">
            <span class="text-secondary font-label-md">COMMUNITY</span>
            <h4 class="font-headline-md text-lg mt-2">UX Workshop Tokyo</h4>
            <p class="font-body-md text-on-surface-variant mt-2">Hosting an intensive session on accessibility-first design systems.</p>
            <div class="mt-4 text-sm text-outline">Feb 28, 2024</div>
          </div>
        </div>
        <div class="flex-1 bg-surface-container border border-outline-variant rounded-lg overflow-hidden reveal delay-200">
          <div class="p-stack-md">
            <span class="text-secondary font-label-md">CULTURE</span>
            <h4 class="font-headline-md text-lg mt-2">Nexora Hackathon</h4>
            <p class="font-body-md text-on-surface-variant mt-2">48 hours of innovation where our internal teams build disruptive tools.</p>
            <div class="mt-4 text-sm text-outline">Jan 12, 2024</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Section -->
  <section class="py-section-padding px-margin-mobile md:px-margin-desktop bg-surface-container-low">
    <div class="max-w-container-max mx-auto">
      <h2 class="font-headline-xl mb-stack-lg text-center reveal">Insights &amp; Perspectives</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <article class="bg-surface-container-lowest rounded-lg border border-outline-variant overflow-hidden group reveal">
          <div class="h-48 overflow-hidden">
            <img
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              data-alt="An abstract visualization of cyber security data patterns, featuring glowing circuit board lines and digital encryption symbols. The palette is deep blue and bright white, representing a high-tech and secure environment. The style is sleek and engineered, reinforcing the agency's technical authority."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDG2IIqnUXusKi2ssdVGxZ-8Q7i4DncI7jN5ytfcvAywFllaHq0OrTv_FmWf93-GKGQfEL_37S7SC8W3TP53hBZ3i9BPwtgiW74yIcmSj5mjKeu-571mPFHe5XlKCYL_VJ6BfClaCQCRC11xpEnRZtY1CyOLe7QJ_9maFO_4Q43AXZjOLau-JDibfeWQ6rcg9cReZXNKQJEinbgTkyXNfIteIO4cVd7D7YHKAUDm4nVDZ0CavrQCiwqz5MuAKHfcqKjWQm1nn_YuQI"
            >
          </div>
          <div class="p-stack-md">
            <h4 class="font-headline-md text-xl mb-base group-hover:text-secondary transition-colors">The Zero-Trust Frontier</h4>
            <p class="font-body-md text-on-surface-variant text-sm line-clamp-3">Deep diving into the architectural shift required for enterprise-grade security in 2024.</p>
          </div>
        </article>
        <article class="bg-surface-container-lowest rounded-lg border border-outline-variant overflow-hidden group reveal delay-100">
          <div class="h-48 overflow-hidden">
            <img
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              data-alt="A modern UI designer's workspace with a high-end monitor showing an organized design system with various components. The setting is bright and professional, utilizing a white and blue color scheme. It projects creative sophistication and attention to detail in a premium corporate setting."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcFGDTSW7Fm4i371mjYSRbmAgHt_U9yQkloEMqZDCiCfUCvdFXQsfWalSIXxQgQDUAro_BTi8AojHgBQBO5ELHqpSLkLXx1276Oh4FIyp9q2KESuqAU-F3x6gxqHsc-O4dWhwJVE3raO4A02GXTMaPXp485cCmJkV93gMzliK_ZVtcm-wgnnXDa364DoimtFtDyeLkQ0hsmaozPcaYDLvXKuzQCLs8NIhe9phPkX409gQwGjBm_0ZNxMUJsr2uR6P92RIQ_Fvpb28"
            >
          </div>
          <div class="p-stack-md">
            <h4 class="font-headline-md text-xl mb-base group-hover:text-secondary transition-colors">Design Systems at Scale</h4>
            <p class="font-body-md text-on-surface-variant text-sm line-clamp-3">How to maintain visual consistency across global multi-platform ecosystems.</p>
          </div>
        </article>
        <article class="bg-surface-container-lowest rounded-lg border border-outline-variant overflow-hidden group reveal delay-200">
          <div class="h-48 overflow-hidden">
            <img
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              data-alt="Financial data analytics being presented on a sleek glass tablet in a bright, high-rise office. The lighting is natural and high-key, creating a clean light-mode aesthetic. The focus is on precision and clarity, using the agency's primary blue as a sophisticated accent color."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDv7qt2jO_GINIB-ejo8TgMyvZRAaoBRmYJyHEaH_qCZ_LNKarFuAW9WE_jRzGNz1r8yrJ0z-aqrLXkcgJDPXekQ3Qn3evrhVjjpuaKQ9yFGZwItZDl_-NVLegqMb8sDM-opeAIydfyupI7PNTbismrh97a1949QoY50RTMcPvhHdwtH7jG0ip-pCZF_S2adHqdPurT3DCWvl7Z3vm2ARJWIpaImqaS9_A9nsosb0j_BXq6mPb_ExiucruguEC1wq4eaUELA7aCK2s"
            >
          </div>
          <div class="p-stack-md">
            <h4 class="font-headline-md text-xl mb-base group-hover:text-secondary transition-colors">AI-Native Engineering</h4>
            <p class="font-body-md text-on-surface-variant text-sm line-clamp-3">Leveraging large language models to accelerate software development lifecycles.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-section-padding px-margin-mobile md:px-margin-desktop">
    <div class="max-w-container-max mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-stack-lg">
        <div class="reveal">
          <h2 class="font-headline-xl mb-stack-md">Let's Build the Future</h2>
          <p class="font-body-lg text-on-surface-variant mb-stack-lg">Connect with our strategic advisors to discuss your next digital milestone.</p>
          <div class="space-y-stack-sm mb-stack-lg">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary" data-icon="mail">mail</span>
              <span class="font-body-md">hello@nexora-digital.com</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary" data-icon="call">call</span>
              <span class="font-body-md">+62 123 456-7890</span>
            </div>
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary" data-icon="location_on">location_on</span>
              <span class="font-body-md">Jl. Jend. Sudirman No. 20<br>Jakarta Barat, Indonesia</span>
            </div>
          </div>
          <form class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
              <input class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-secondary/10 focus:border-secondary transition-all outline-none" placeholder="Full Name" type="text">
              <input class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-secondary/10 focus:border-secondary transition-all outline-none" placeholder="Email Address" type="email">
            </div>
            <input class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-secondary/10 focus:border-secondary transition-all outline-none" placeholder="Project Type" type="text">
            <textarea class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:ring-2 focus:ring-secondary/10 focus:border-secondary transition-all outline-none" placeholder="Message" rows="4"></textarea>
            <button class="w-full bg-primary text-on-primary py-4 rounded-lg font-bold hover:bg-secondary transition-colors">Send Brief</button>
          </form>
        </div>
        <div class="rounded-xl overflow-hidden min-h-[400px] border border-outline-variant reveal delay-200">
          <div class="w-full h-full bg-surface-container-highest flex items-center justify-center relative">
            <div class="absolute inset-0 grayscale opacity-40 hover:opacity-60 transition-opacity">
              <img
                class="w-full h-full object-cover"
                data-location="San Francisco"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLX3VuYPK3CMO6NbHPR0PcAB0j3xaZRn_WqGUz5hb8WyE_UmYWkBMkTV3zHsh5uAIVrqjcDNaM-x8pnGVVDvwj_9DJuxubR4JfTpKZ5WTL5IwwW0Fvb4F6dxu4MnDBZpLNmVMreSDSAyxhfOoV1RtfOIjzFtL4KmKFbDRo7p4FaWSpoCWYCT2sWhvbcL-gj1WFKYJ6nGHSuO8tMsvQzuEQjAwLb6eVFZt2L_Kpwh7w06gyFSWwoLUgVvCN5_QRKNzB96_L_9xoEjY"
              >
            </div>
            <div class="relative bg-surface-container-lowest p-6 rounded-lg shadow-xl border border-outline-variant text-center max-w-xs">
              <span class="material-symbols-outlined text-secondary text-[32px] mb-2" data-icon="push_pin">push_pin</span>
              <p class="font-bold">Nexora HQ</p>
              <p class="text-sm text-on-surface-variant">Silicon Valley Technology District</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-surface-container-lowest border-t border-outline-variant/20">
    <div class="max-w-container-max mx-auto px-margin-desktop py-section-padding grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="md:col-span-1">
        <span class="text-headline-md font-headline-md font-bold text-primary">Nexora Digital</span>
        <p class="mt-stack-sm text-on-surface-variant text-sm">Architecting premium digital landscapes for the next generation of industry leaders.</p>
      </div>
      <div>
        <h5 class="font-bold text-on-surface mb-stack-sm">Solutions</h5>
        <ul class="space-y-2 text-on-surface-variant text-sm">
          <li><a class="hover:text-secondary transition-colors" href="#">Strategy Consulting</a></li>
          <li><a class="hover:text-secondary transition-colors" href="#">Product Engineering</a></li>
          <li><a class="hover:text-secondary transition-colors" href="#">Design Systems</a></li>
          <li><a class="hover:text-secondary transition-colors" href="#">Security Hardening</a></li>
        </ul>
      </div>
      <div>
        <h5 class="font-bold text-on-surface mb-stack-sm">Agency</h5>
        <ul class="space-y-2 text-on-surface-variant text-sm">
          <li><a class="hover:text-secondary transition-colors" href="#">Privacy Policy</a></li>
          <li><a class="hover:text-secondary transition-colors" href="#">Terms of Service</a></li>
          <li><a class="hover:text-secondary transition-colors" href="#">Careers</a></li>
          <li><a class="hover:text-secondary transition-colors" href="#">Newsletter</a></li>
        </ul>
      </div>
      <div>
        <h5 class="font-bold text-on-surface mb-stack-sm">Newsletter</h5>
        <p class="text-xs text-on-surface-variant mb-4">Stay updated with our latest insights.</p>
        <div class="flex">
          <input class="bg-surface border border-outline-variant px-3 py-2 text-sm rounded-l focus:outline-none w-full" placeholder="Email" type="email">
          <button class="bg-primary text-on-primary px-4 py-2 rounded-r hover:bg-secondary transition-colors">
            <span class="material-symbols-outlined text-[18px]" data-icon="send">send</span>
          </button>
        </div>
      </div>
    </div>
    <div class="max-w-container-max mx-auto px-margin-desktop py-stack-md border-t border-outline-variant/10 text-center md:text-left">
      <span class="text-body-md font-body-md text-on-surface-variant">© 2024 Nexora Digital. Design by Rayhan Ramdhani</span>
    </div>
  </footer>

  <script>
    // Simple Scroll Reveal Animation
    const reveals = document.querySelectorAll('.reveal');

    const revealOnScroll = () => {
      for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = reveals[i].getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add('active');
        }
      }
    };

    window.addEventListener('scroll', revealOnScroll);
    // Initial check
    revealOnScroll();

    // Navbar Scroll Effect
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        nav.classList.add('py-2');
        nav.classList.remove('h-20');
        nav.classList.add('h-16');
      } else {
        nav.classList.remove('py-2');
        nav.classList.remove('h-16');
        nav.classList.add('h-20');
      }
    });
  </script>
</body>
</html>
