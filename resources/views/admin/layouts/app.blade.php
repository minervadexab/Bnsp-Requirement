<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white p-5">

        <h1 class="text-2xl font-bold mb-10">
            Nexora Admin
        </h1>

        <nav class="space-y-3">

            <a href="{{ route('dashboard') }}"
               class="block px-4 py-3 rounded-lg hover:bg-slate-700 transition">
                Dashboard
            </a>

            <a href="{{ route('articles-admin.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-slate-700 transition">
                Articles
            </a>

            <a href="{{ route('events-admin.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-slate-700 transition">
                Events
            </a>

            <a href="{{ route('galleries-admin.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-slate-700 transition">
                Gallery
            </a>

        </nav>

        <!-- Logout -->
        <div class="mt-10">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="w-full bg-red-500 hover:bg-red-600 transition px-4 py-3 rounded-lg">
                    Logout
                </button>
            </form>

        </div>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>
