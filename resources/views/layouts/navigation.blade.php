<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30 shadow-sm transition-shadow duration-200">
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center justify-between h-20">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="font-headline-md text-headline-md font-bold text-primary">Nexora Digital</a>

    <!-- Navigasi Desktop -->
    <nav class="hidden md:flex items-center gap-8">

      <!-- Link Services -->
      <a href="{{ route('services') }}" class="text-on-surface-variant hover:text-primary transition-colors font-body-md {{ request()->routeIs('services') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : '' }}">
        Services
      </a>

      <!-- Dropdown Articles -->
      <div class="relative dropdown">
        <button class="font-body-md text-body-md flex items-center gap-1 group {{ request()->routeIs('articles*') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}">
          Articles
          <span class="material-symbols-outlined text-[18px] group-hover:rotate-180 transition-transform">expand_more</span>
        </button>
        <div class="dropdown-content absolute top-full left-0 mt-2 w-56 bg-surface-container-lowest border border-outline-variant rounded-lg shadow-xl p-2 z-[60]">
          <a href="{{ route('articles') }}?category=tech-trends" class="block px-4 py-3 font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-low hover:text-primary rounded transition-all">Tech Trends</a>
          <a href="{{ route('articles') }}?category=case-studies" class="block px-4 py-3 font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-low hover:text-primary rounded transition-all">Case Studies</a>
          <a href="{{ route('articles') }}?category=ai-insights" class="block px-4 py-3 font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-low hover:text-primary rounded transition-all">AI Insights</a>
          <a href="{{ route('articles') }}?category=design-systems" class="block px-4 py-3 font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-low hover:text-primary rounded transition-all">Design Systems</a>
        </div>
      </div>

      <!-- Link About -->
      <a href="{{ route('about') }}" class="text-on-surface-variant hover:text-primary transition-colors font-body-md {{ request()->routeIs('about') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : '' }}">
        About
      </a>

      <!-- Link Portfolio -->
      <a href="{{ route('portfolio') }}" class="text-on-surface-variant hover:text-primary transition-colors font-body-md {{ request()->routeIs('portfolio') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : '' }}">
        Portfolio
      </a>

      <!-- Link Gallery -->
      <a href="{{ route('gallery') }}" class="text-on-surface-variant hover:text-primary transition-colors font-body-md {{ request()->routeIs('gallery') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : '' }}">
        Gallery
      </a>

      <!-- Link Events -->
      <a href="{{ route('events') }}" class="text-on-surface-variant hover:text-primary transition-colors font-body-md {{ request()->routeIs('events') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : '' }}">
        Events
      </a>

      <!-- Link Contact -->
      <a href="{{ route('contact') }}" class="text-on-surface-variant hover:text-primary transition-colors font-body-md {{ request()->routeIs('contact') ? 'text-secondary font-bold border-b-2 border-secondary pb-1' : '' }}">
        Contact
      </a>
    </nav>

    <!-- Tombol Action di Kanan -->
    <div class="flex items-center gap-3">
      <!-- Tombol Login (Biru) -->
      <a href="{{ route('login') }}" class="bg-primary text-white px-5 py-2.5 rounded-lg font-label-md hover:bg-opacity-90 transition-all duration-200 shadow-sm hover:shadow-md">
        Login
      </a>

  </div>
</header>

<!-- Style untuk Dropdown -->
<style>
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
  .dropdown:hover .material-symbols-outlined {
    transform: rotate(180deg);
  }
  .material-symbols-outlined {
    transition: transform 0.2s ease;
  }
</style>
