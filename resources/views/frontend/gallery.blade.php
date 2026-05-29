<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio | Nexora Digital Agency</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">

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
    .bento-grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 24px;
    }
    .gallery-card {
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
    }
    .gallery-card:hover {
      transform: translateY(-8px);
    }
    .img-overlay {
      background: linear-gradient(0deg, rgba(15, 23, 42, 0.8) 0%, rgba(15, 23, 42, 0) 60%);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .gallery-card:hover .img-overlay {
      opacity: 1;
    }
  </style>
</head>
<body class="bg-background text-on-surface font-body-md">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-32 pb-section-padding">
    <!-- Hero Section -->
    <section class="max-w-container-max mx-auto px-margin-desktop mb-stack-lg">
      <div class="flex flex-col gap-stack-sm">
        <span class="text-secondary font-label-md tracking-widest uppercase">The Nexora Lens</span>
        <h1 class="font-display-lg text-display-lg text-on-surface leading-none">Culture &amp; <span class="text-outline">Impact.</span></h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          Beyond the lines of code and design systems, we are a collective of creators. Explore our journey through the moments that define our studio life.
        </p>
      </div>
    </section>

    <!-- Gallery Filter / Tabs -->
    <section class="max-w-container-max mx-auto px-margin-desktop mb-stack-lg">
      <div class="flex flex-wrap gap-4 border-b border-outline-variant pb-4">
        <button class="px-6 py-2 bg-primary text-on-primary rounded-full text-label-md">All Moments</button>
      </div>
    </section>

    <!-- Bento Gallery Grid -->
    <section class="max-w-container-max mx-auto px-margin-desktop">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[280px]">

        <!-- Main Featured: Office Culture -->
        <div class="md:col-span-8 md:row-span-2 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A high-end modern office interior for Nexora Digital Agency featuring expansive floor-to-ceiling windows and minimalist architectural lines. The scene is bathed in bright, natural morning light, creating a professional and clean corporate atmosphere. Sleek black furniture provides a sharp contrast against light-gray marble flooring, following the premium digital brand palette of whites, blacks, and subtle blue accents."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk561_BqvKcxN4syE_tq39tFmIqa1QhIqRrPk0zvlQzidgl6hC7pHuVEmVe9fe6h8XR619q38P9RWm7kC-w4Wy5r8hrmrIey4Odefb5TUGuNMZ17S9cqasFPsY-DprQfEompCJM7iOjcGceQLFThSK3Tc5ltIKNreVMAKKxD7x2pQfGOosBGZR8YVS7DjkmUIFfUfRyhXdRLnG3WYjlLOKhGDhgchMtzPBdvZi90QRV9xhsl2Y2yTY-PYoj6xRBlUYJSKNfBTX-9E"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">THE STUDIO</span>
            <h3 class="text-headline-md font-bold">Innovation Hub HQ</h3>
          </div>
        </div>

        <!-- Vertical: Collaboration -->
        <div class="md:col-span-4 md:row-span-2 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A candid, high-shutter speed photograph of diverse creative professionals collaborating around a large, minimalist white table at Nexora Digital Agency. The lighting is soft and diffused, highlighting the focused expressions and modern casual attire of the team members. The aesthetic is clean and premium, emphasizing a collaborative corporate culture with a cool-toned color grading."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2I-58zxCbmqMM-R3fkU0Gn8IfArgczodV6DYbsqmOr_RN3VUy7LWzXAq63y0wnTBYOS-tfnddDVXZwJV0AOtmud6cC-fSmIQ0nwYVjn0pkydcY4g8oevjH5HcpvQCpA9mIb3B3_4TGPqDNzEGwi3yR9O4yMzzj1j3sPRn1RKoKOEHev4JVzuY9oJ6vCh4DMiCQQzjoEJdWtRAki8rMfrFuC6tEjMOvSfIFCh-QxoFQZMW08ScOHXLjebQlEXsp7OU7w7ZzTc9qqc"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">TEAM EVENTS</span>
            <h3 class="text-headline-md font-bold">Design Sprints</h3>
          </div>
        </div>

        <!-- Horizontal: Team Coffee -->
        <div class="md:col-span-4 md:row-span-1 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A minimalist close-up of high-end coffee brewing equipment in a sleek, modern corporate lounge at Nexora Digital. The environment features polished steel, matte black surfaces, and soft overhead lighting that creates elegant reflections. The scene evokes a sense of refined professional leisure and premium agency culture within a bright, airy architectural setting."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTyTMPjuBOmZBwZEIUmaQdnj9-CwU2m8jgNW2zFtjPEl2s6PoSppb4aE0P0t5Fch_HJ7ZLZoTFBTwbm_8oDnaCayoKZhsno8X3G7Su9jb3RIagQXRAgRFNJwJR9mHZdFFJmw2OClU0Tu0fitGXkivX1kWUnLWs6URrNobUOo2PiMLT2zMFB3VLZg-KU9dS2_d8en8pt50UUlNZ6S2eRhVdLWiUmNHhAELTBiuP_ZV6qbbZ-7FG_YR0_0aegekpRQeYYC7M8wmbpoY"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">CULTURE</span>
            <h3 class="text-body-lg font-bold">Morning Rituals</h3>
          </div>
        </div>

        <!-- Square: Tech Stack -->
        <div class="md:col-span-4 md:row-span-1 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A wide-angle professional photograph of a high-tech presentation room at Nexora Digital Agency. A team of engineers is silhouetted against a large luminous screen displaying complex digital schematics in deep blue and white. The lighting is low-key and dramatic, emphasizing the cutting-edge technology and sophisticated innovation environment of the company."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDa1-dlptyA2lctRi_TSU3sTP0KVHpTOGqURjlY6QqsUSFEeoCrRpSKENU_40K7_obzHRpp7KIrDykrtnobSK7XvG70y8b-q8tjC9ftbQez2Jdk_w8E1HvoV63md4dfzZQshqESArHhaTK7ZLAlZRDzpqLlkIWO99z4tqzfLLw3Ig1x286H5ooY2wSBPesgKomiVTPUrIH_uXDpHO3KQ-IAjKpdjbhya-z07lr6P-WR0XpWee9oCg3wYzKfVTD9PnDRc9YjTt9mdZE"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">INNOVATION</span>
            <h3 class="text-body-lg font-bold">Workshop 01</h3>
          </div>
        </div>

        <!-- Square: Award/Event -->
        <div class="md:col-span-4 md:row-span-1 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A sophisticated evening corporate event hosted by Nexora Digital Agency. The setting is a minimalist glass pavilion with ambient blue and white accent lighting that mirrors the brand's secondary color palette. Professionals in formal-modern attire are seen in soft-focus conversation, creating a mood of celebration, high-tier networking, and technical excellence."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaqpPEQHN5461if62E0x5SenPwW_VgXB6835l7UFGVTnQKzLQ-ruKkTO6J50RDKILEmSu0JugeassncQ9q6M7SMqK0_hEeItEJhTYkr2TT3oVemXl0fdObvqzCi6ztuV-1KpNfU9VG67arr5IQ5m0m_WP74w4RdniM8WavdPOq6THfGRlw9bpaVV-PpgdJPRme9-9Z5r_4Erqkh6v1Hqwv_uX63V7BMr7XiwCE2TNPeslS5MGIRfUxzYkK2P8IOkDxrcZKb30SkzQ"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">CELEBRATION</span>
            <h3 class="text-body-lg font-bold">Annual Gala</h3>
          </div>
        </div>

        <!-- Large Horizontal: Office Exterior/Mood -->
        <div class="md:col-span-6 md:row-span-1 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A striking architectural shot of a modern glass skyscraper reflecting a clear blue sky, serving as the Nexora Digital corporate office. The perspective is looking up from the street level, emphasizing scale and technological ambition. The clean lines of the building and the high-contrast lighting align with a premium modernism aesthetic."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxuarlL5W74c8pmcDeQHIdJ4KXrDialf-55332L-aRO0LlCPghylp6G3AfrsBF373pQRbXLE7ulCgT6yxMMXsbEa1KVaoiaosoT3i7dynRqSKDHzsUJN-1awC9wK_X8gHf7qr7-_0JJ5XfX6DL7jE_d3OguQFhwa3J3q_UdFyKJmgE1REGXOf9pSUSnMYPN0tqwznngWslpZLTEe3OrP_9Dg406aIpH3VA-MmJ8-MBebhkaC2MgLb3WWh-a0E2DnBucanrT9BdwY8"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">ARCHITECTURAL</span>
            <h3 class="text-body-lg font-bold">Skyward Vision</h3>
          </div>
        </div>

        <!-- Horizontal: Focus -->
        <div class="md:col-span-6 md:row-span-1 relative gallery-card rounded-xl overflow-hidden group">
          <img
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            data-alt="A focused deep-work scene at Nexora Digital Agency. A designer works on a large retina display showing elegant UI prototypes. The desk is meticulously organized with minimalist peripherals and a single desk lamp providing a warm pool of light amidst a cool-toned office background. The composition reflects precision, engineering excellence, and creative focus."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeP7jMePQMG2IYDxZrFIEucmOVFqdCei3WPBm5sCZWOW_7COqiIZK2P-YPntLnJeAePVQk4fTla7fTNFkVgEYV-qL1oIe9ItGqcq64enKBCcw9JOmrdoSeGlEsPQqa02HUF9EHR1spokVzKj02tiMFfdMD-ggFSh6XxQZA1TjwzvVNtiJiVmQMtQXHbr8Qj4GcaTJJQgxvClBbf8kzIWnCpXDCc3dJTF-buX-H8hbWB-NyzFmvgSRNUBipiR42sAq2p07vNBcSxaw"
          >
          <div class="img-overlay absolute inset-0 flex flex-col justify-end p-stack-md text-white">
            <span class="text-label-md font-medium opacity-80 mb-1">WORK FLOW</span>
            <h3 class="text-body-lg font-bold">Deep Work Sessions</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="max-w-container-max mx-auto px-margin-desktop mt-section-padding text-center">
      <div class="bg-primary-container p-stack-lg rounded-xl flex flex-col items-center gap-stack-md">
        <h2 class="font-headline-xl text-headline-xl text-on-secondary-container">Want to join the team?</h2>
        <p class="font-body-lg text-body-lg text-on-primary-container max-w-xl">
          We are always looking for visionary creators and technical engineers to push the boundaries of digital experiences.
        </p>
        <a class="mt-stack-sm bg-secondary text-white px-8 py-4 rounded-lg font-label-md hover:shadow-lg transition-all" href="#">View Openings</a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="w-full py-stack-lg bg-surface-container-lowest border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="md:col-span-1 flex flex-col gap-stack-sm">
        <div class="font-headline-md text-headline-md font-bold text-primary">Nexora</div>
        <p class="text-on-surface-variant font-caption text-caption pr-4">
          Leading the digital transformation for the next generation of industry giants.
        </p>
      </div>
      <div class="flex flex-col gap-4">
        <span class="font-label-md text-primary font-bold">Company</span>
        <a class="text-on-surface-variant hover:text-secondary font-caption text-caption transition-colors" href="#">About Us</a>
        <a class="text-on-surface-variant hover:text-secondary font-caption text-caption transition-colors" href="#">Portfolio</a>
        <a class="text-on-surface-variant hover:text-secondary font-caption text-caption transition-colors" href="#">Careers</a>
      </div>
      <div class="flex flex-col gap-4">
        <span class="font-label-md text-primary font-bold">Support</span>
        <a class="text-on-surface-variant hover:text-secondary font-caption text-caption transition-colors" href="#">Privacy Policy</a>
        <a class="text-on-surface-variant hover:text-secondary font-caption text-caption transition-colors" href="#">Terms of Service</a>
        <a class="text-on-surface-variant hover:text-secondary font-caption text-caption transition-colors" href="#">Cookie Policy</a>
      </div>
      <div class="flex flex-col gap-4">
        <span class="font-label-md text-primary font-bold">Connect</span>
        <div class="flex gap-4">
          <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-secondary">public</span>
          <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-secondary">share</span>
          <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-secondary">alternate_email</span>
        </div>
        <p class="text-on-surface-variant font-caption text-caption mt-2">
          © 2024 Nexora Digital Agency. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script>
    // Micro-interactions for header on scroll
    window.addEventListener('scroll', () => {
      const header = document.querySelector('header');
      if (window.scrollY > 20) {
        header.classList.add('shadow-md', 'py-1');
        header.classList.remove('shadow-sm', 'py-0');
      } else {
        header.classList.remove('shadow-md', 'py-1');
        header.classList.add('shadow-sm', 'py-0');
      }
    });

    // Simple filter logic simulation
    const buttons = document.querySelectorAll('button[class*="rounded-full"]');
    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        buttons.forEach(b => {
          b.classList.remove('bg-primary', 'text-on-primary');
          b.classList.add('text-on-surface-variant');
        });
        btn.classList.add('bg-primary', 'text-on-primary');
        btn.classList.remove('text-on-surface-variant');
      });
    });
  </script>
</body>
</html>
