@extends('admin.layouts.app')

@section('content')

<div class="container mx-auto px-6 py-8">

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Events Management
            </h1>

            <p class="text-gray-500 mt-1">
                Kelola seluruh event Nexora.
            </p>
        </div>

        <a
            href="{{ route('events-admin.create') }}"
            class="bg-black text-white px-5 py-3 rounded-lg font-semibold hover:opacity-90 transition"
        >
            + Add Event
        </a>

    </div>

    <!-- SUCCESS -->
    @if(session('success'))

    <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>

    @endif

    <!-- SEARCH -->
    <form method="GET" class="mb-6">

        <input
            type="text"
            name="search"
            placeholder="Search event..."
            value="{{ request('search') }}"
            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
        >

    </form>

    <!-- TABLE -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                        Image
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                        Title
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                        Location
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                        Date
                    </th>

                    <th class="px-6 py-4 text-left text-sm font-bold text-gray-600">
                        Status
                    </th>

                    <th class="px-6 py-4 text-center text-sm font-bold text-gray-600">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($events as $event)

                <tr class="border-t border-gray-100 hover:bg-gray-50 transition">

                    <!-- IMAGE -->
                    <td class="px-6 py-4">

                        @if($event->image)

                        <img
                            src="{{ asset('storage/' . $event->image) }}"
                            class="w-20 h-14 object-cover rounded-lg"
                        >

                        @else

                        <div class="w-20 h-14 bg-gray-200 rounded-lg"></div>

                        @endif

                    </td>

                    <!-- TITLE -->
                    <td class="px-6 py-4">

                        <h3 class="font-semibold text-gray-800">
                            {{ $event->title }}
                        </h3>

                    </td>

                    <!-- LOCATION -->
                    <td class="px-6 py-4 text-gray-600">

                        {{ $event->location }}

                    </td>

                    <!-- DATE -->
                    <td class="px-6 py-4 text-gray-600">

                        {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}

                    </td>

                    <!-- STATUS -->
                    <td class="px-6 py-4">

                        <span class="
                            px-3 py-1 rounded-full text-xs font-bold
                            {{ $event->status == 'upcoming'
                                ? 'bg-blue-100 text-blue-700'
                                : 'bg-gray-200 text-gray-700'
                            }}
                        ">

                            {{ ucfirst($event->status) }}

                        </span>

                    </td>

                    <!-- ACTION -->
                    <td class="px-6 py-4">

                        <div class="flex items-center justify-center gap-3">

                            {{-- <a
                                href="{{ route('events-admin.edit', $event->id) }}"
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg text-sm font-semibold transition"
                            >
                                Edit
                            </a> --}}

                            <form
                                action="{{ route('events-admin.destroy', $event->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin hapus event ini?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition"
                                >
                                    Delete
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center py-16">

                        <h3 class="text-2xl font-bold text-gray-700 mb-2">
                            No Events Yet
                        </h3>

                        <p class="text-gray-500">
                            Event dari dashboard akan muncul di sini.
                        </p>

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <!-- PAGINATION -->
    <div class="mt-6">

        {{ $events->links() }}

    </div>

</div>

@endsection
