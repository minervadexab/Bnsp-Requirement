<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact Us | Nexora Digital Agency</title>
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
      vertical-align: middle;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(12px);
      border: 1px solid #E2E8F0;
    }
    .form-input-focus:focus {
      outline: none;
      border-color: #2563EB;
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }
  </style>
</head>
<body class="bg-background text-on-surface font-body-md antialiased">

    <!-- PANGGIL NAVIGATION -->
    @include('layouts.navigation')

  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-section-padding overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
        <div class="z-10">
          <span class="text-secondary font-label-md text-label-md tracking-widest uppercase mb-stack-sm block">Connect with us</span>
          <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-stack-md">Let's build the <br>future together.</h1>
          <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
            Whether you have a specific project in mind or just want to explore possibilities, our team of engineers and creatives is ready to listen.
          </p>
        </div>
        <div class="relative hidden md:block">
          <div class="absolute -top-12 -right-12 w-64 h-64 bg-secondary-fixed rounded-full opacity-20 blur-3xl"></div>
          <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-primary-fixed rounded-full opacity-30 blur-3xl"></div>
          <img
            alt="Modern workspace"
            class="rounded-xl shadow-lg border border-outline-variant w-full h-[400px] object-cover relative z-10"
            data-alt="A premium, high-end digital agency office environment with clean lines and minimal furniture. Large floor-to-ceiling windows reveal a blurred metropolitan skyline during the golden hour. Inside, a sleek black conference table is surrounded by ergonomic designer chairs. The lighting is soft and intentional, emphasizing a calm authority and technological sophistication in a light-mode aesthetic."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaP_2zxLLqjfpb4LWv5gnJf5cwB5-jE_SRIC0uQSD_9L_m6NJaNpOAWYTxQVMj4I3XwuI2DAUrD3ef3nnkUJ-JBQkegqY3VbZY7Cfj9BWwe1zbkwfG5u54ce71cYJwZh3mgiU_EzAUmCHS6eiQLlr3T4uHi6arPageSuKw9sKHqkmvJFTvk5_oQIMvaCbNweZnDqNiByiJESE4eTZ5wSStn4cm6NgnbIsmSKhcixpYob5SnrXjUQYvQicdRTZqjz4m9Yea1Zxf5Wo"
          >
        </div>
      </div>
    </section>

    <!-- Contact Content Section -->
    <section class="bg-surface-container-low py-section-padding">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
          <!-- Left: Contact Information -->
          <div class="lg:col-span-5 space-y-stack-lg">
            <div class="space-y-stack-md">
              <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary">Office Headquarters</h2>
              <p class="font-body-md text-body-md text-on-surface-variant">Visit us at our central innovation hub located in the heart of the tech district.</p>
            </div>

            <div class="grid grid-cols-1 gap-stack-md">
              <!-- Contact Card 1 -->
              <div class="flex gap-stack-md items-start p-stack-md bg-white rounded-lg border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-secondary text-[24px]">location_on</span>
                <div>
                  <h3 class="font-label-md text-label-md text-primary mb-1">Our Address</h3>
                  <p class="font-body-md text-body-md text-on-surface-variant">Jl. Jend. Sudirman No. 20<br>Jakarta Barat, Indonesia</p>
                </div>
              </div>

              <!-- Contact Card 2 -->
              <div class="flex gap-stack-md items-start p-stack-md bg-white rounded-lg border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-secondary text-[24px]">call</span>
                <div>
                  <h3 class="font-label-md text-label-md text-primary mb-1">Phone Number</h3>
                  <p class="font-body-md text-body-md text-on-surface-variant">+62 123 456 789</p>
                </div>
              </div>

              <!-- Contact Card 3 -->
              <div class="flex gap-stack-md items-start p-stack-md bg-white rounded-lg border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-secondary text-[24px]">mail</span>
                <div>
                  <h3 class="font-label-md text-label-md text-primary mb-1">Email Support</h3>
                  <p class="font-body-md text-body-md text-on-surface-variant">hello@nexora-digital.com</p>
                </div>
              </div>
            </div>

            <!-- Social Media Links -->
            <div class="pt-stack-md border-t border-outline-variant">
              <p class="font-label-md text-label-md text-on-surface-variant mb-stack-sm">Follow our journey</p>
              <div class="flex gap-stack-sm">
                <a class="w-10 h-10 rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all" href="#">
                  <span class="material-symbols-outlined">share</span>
                </a>
                <a class="w-10 h-10 rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all" href="#">
                  <span class="material-symbols-outlined">camera</span>
                </a>
                <a class="w-10 h-10 rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all" href="#">
                  <span class="material-symbols-outlined">public</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Right: Modern Contact Form -->
          <div class="lg:col-span-7">
            <div class="bg-white p-stack-lg rounded-xl shadow-lg border border-outline-variant">
              <h3 class="font-headline-md text-headline-md text-primary mb-stack-md">Send us a message</h3>
              <form class="space-y-stack-md" id="contactForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                  <div class="space-y-1">
                    <label class="font-label-md text-label-md text-on-surface" for="firstName">First Name</label>
                    <input class="w-full bg-white border border-outline-variant p-3 rounded-lg form-input-focus font-body-md" id="firstName" name="firstName" placeholder="John" required="" type="text">
                  </div>
                  <div class="space-y-1">
                    <label class="font-label-md text-label-md text-on-surface" for="lastName">Last Name</label>
                    <input class="w-full bg-white border border-outline-variant p-3 rounded-lg form-input-focus font-body-md" id="lastName" name="lastName" placeholder="Doe" required="" type="text">
                  </div>
                </div>

                <div class="space-y-1">
                  <label class="font-label-md text-label-md text-on-surface" for="email">Email Address</label>
                  <input class="w-full bg-white border border-outline-variant p-3 rounded-lg form-input-focus font-body-md" id="email" name="email" placeholder="john@company.com" required="" type="email">
                </div>

                <div class="space-y-1">
                  <label class="font-label-md text-label-md text-on-surface" for="subject">Subject</label>
                  <select class="w-full bg-white border border-outline-variant p-3 rounded-lg form-input-focus font-body-md" id="subject" name="subject">
                    <option>New Project Inquiry</option>
                    <option>Collaboration Opportunity</option>
                    <option>Career Information</option>
                    <option>General Support</option>
                  </select>
                </div>

                <div class="space-y-1">
                  <label class="font-label-md text-label-md text-on-surface" for="message">Message</label>
                  <textarea class="w-full bg-white border border-outline-variant p-3 rounded-lg form-input-focus font-body-md" id="message" name="message" placeholder="How can we help you achieve your goals?" required="" rows="5"></textarea>
                </div>

                <button class="w-full bg-primary text-on-primary py-4 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all flex items-center justify-center gap-2" type="submit">
                  <span>Send Inquiry</span>
                  <span class="material-symbols-outlined">send</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="py-section-padding bg-surface">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="mb-stack-lg text-center">
          <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary mb-stack-sm">Find Us</h2>
          <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Located in the heart of San Francisco's technology corridor, our studio is designed for collaboration.</p>
        </div>

        <div class="relative w-full h-[500px] rounded-xl overflow-hidden shadow-md border border-outline-variant">
          <div class="absolute inset-0 bg-surface-container-high flex items-center justify-center group cursor-pointer" data-location="San Francisco">
            <img
              alt="San Francisco Map Placeholder"
              class="w-full h-full object-cover grayscale opacity-80 group-hover:opacity-100 transition-opacity duration-500"
              data-alt="A stylized, architectural map view of downtown San Francisco, rendered in a sophisticated monochromatic palette with subtle primary blue accents for landmarks. The aesthetic is modern and clean, utilizing thin lines and minimal text. The mood is precise and engineered, reflecting a top-tier digital agency's focus on geographic presence and technical clarity."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKfuYEvDeyICcKC8bM6d94VNUZYMmIYbo04xv0ONvE6s2D60fJcrmXSLXuaG5Yb2ls8wSJhwizCsXbhp-d5-XAI5PW7qMnTuFNjqzCExepwqNtVZpZlZ5EY3uaIjqV_jVLZUK3g4c80P6mM0pImMGj_iQyP5JlB78QbQVVAx1Z-tYo8qwmNQoypDTKy2h_6pS6-3tVRKGnGGbkUs64AKoombdLaW9WP9A6QdIMAfUDQtnT9iVVx98zDSjPHQbvMkdKA8H0mJLVO3I"
            >
            <div class="absolute z-20 bg-white/90 backdrop-blur-sm p-stack-md rounded-lg shadow-xl border border-outline-variant text-center transform group-hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-secondary text-[40px] mb-2" data-weight="fill">location_on</span>
              <h4 class="font-headline-md text-[20px] text-primary">Nexora Studio</h4>
              <p class="font-caption text-caption text-on-surface-variant">Click to open Interactive Map</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-section-padding">
      <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="bg-primary p-stack-lg md:p-section-padding rounded-xl relative overflow-hidden text-center md:text-left">
          <div class="absolute top-0 right-0 w-1/3 h-full bg-secondary/10 transform skew-x-12"></div>
          <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-stack-lg">
            <div class="max-w-2xl">
              <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-primary mb-stack-sm">Ready to start your digital transformation?</h2>
              <p class="font-body-lg text-body-lg text-primary-fixed">Schedule a free 30-minute consultation with our lead strategists.</p>
            </div>
            <button class="bg-secondary text-on-secondary px-stack-lg py-stack-md rounded-lg font-label-md text-label-md whitespace-nowrap hover:shadow-xl transition-all">
              Book a Consultation
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-surface-container-lowest dark:bg-surface-container-high w-full py-stack-lg border-t border-outline-variant">
    <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <div class="col-span-1 md:col-span-1">
        <a class="font-headline-md text-headline-md font-bold text-primary mb-stack-sm block" href="#">Nexora Digital</a>
        <p class="font-caption text-caption text-on-surface-variant">Engineering excellence for the modern digital landscape. Premium solutions for forward-thinking enterprises.</p>
      </div>

      <div>
        <h4 class="font-label-md text-label-md text-primary mb-stack-md">Company</h4>
        <ul class="space-y-2">
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">About</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Careers</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Portfolio</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors underline" href="#">Contact Us</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-label-md text-label-md text-primary mb-stack-md">Resources</h4>
        <ul class="space-y-2">
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Articles</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacy Policy</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Terms of Service</a></li>
          <li><a class="font-caption text-caption text-on-surface-variant hover:text-secondary transition-colors" href="#">Cookie Policy</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-label-md text-label-md text-primary mb-stack-md">Newsletter</h4>
        <p class="font-caption text-caption text-on-surface-variant mb-stack-sm">Stay updated with our latest insights.</p>
        <div class="flex border border-outline-variant rounded-lg overflow-hidden">
          <input class="bg-white p-2 w-full text-caption border-none focus:ring-0" placeholder="Email" type="email">
          <button class="bg-primary text-on-primary px-3"><span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
        </div>
      </div>
    </div>

    <div class="max-w-container-max mx-auto px-margin-desktop mt-stack-lg pt-stack-md border-t border-outline-variant/30 text-center">
      <p class="font-caption text-caption text-on-surface-variant opacity-60">© 2024 Nexora Digital Agency. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Micro-interaction for the form submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const btn = this.querySelector('button');
      const originalContent = btn.innerHTML;

      btn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Sending...';
      btn.disabled = true;

      setTimeout(() => {
        btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Message Sent';
        btn.classList.remove('bg-primary');
        btn.classList.add('bg-green-600');

        setTimeout(() => {
          btn.innerHTML = originalContent;
          btn.classList.remove('bg-green-600');
          btn.classList.add('bg-primary');
          btn.disabled = false;
          this.reset();
        }, 3000);
      }, 1500);
    });

    // Simple scroll reveal effect
    const observerOptions = {
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100', 'translate-y-0');
          entry.target.classList.remove('opacity-0', 'translate-y-10');
        }
      });
    }, observerOptions);

    document.querySelectorAll('section').forEach(section => {
      section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
      observer.observe(section);
    });
  </script>
</body>
</html>
