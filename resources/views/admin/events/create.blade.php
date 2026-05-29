@extends('admin.layouts.app')

@section('content')

<div class="container mx-auto px-6 py-8 max-w-4xl">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-gray-800">
            Create Event
        </h1>

        <p class="text-gray-500 mt-2">
            Tambahkan event baru untuk ditampilkan di website Nexora.
        </p>

    </div>

    <!-- ERROR -->
    @if ($errors->any())

    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-4 rounded-lg mb-6">

        <ul class="list-disc pl-5 space-y-1">

            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif

    <!-- FORM -->
    <form
        action="{{ route('events-admin.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 space-y-6"
    >

        @csrf

        <!-- TITLE -->
        <div>

            <label class="block text-sm font-bold text-gray-700 mb-2">
                Event Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ old('title') }}"
                placeholder="Enter event title"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
            >

        </div>

        <!-- LOCATION -->
        <div>

            <label class="block text-sm font-bold text-gray-700 mb-2">
                Location
            </label>

            <input
                type="text"
                name="location"
                value="{{ old('location') }}"
                placeholder="Event location"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
            >

        </div>

        <!-- DATE -->
        <div>

            <label class="block text-sm font-bold text-gray-700 mb-2">
                Event Date
            </label>

            <input
                type="date"
                name="event_date"
                value="{{ old('event_date') }}"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
            >

        </div>

        <!-- STATUS -->
        <div>

            <label class="block text-sm font-bold text-gray-700 mb-2">
                Status
            </label>

            <select
                name="status"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
            >

                <option value="upcoming">
                    Upcoming
                </option>

                <option value="completed">
                    Completed
                </option>

            </select>

        </div>

        <!-- IMAGE -->
        <div>

            <label class="block text-sm font-bold text-gray-700 mb-2">
                Event Image
            </label>

            <input
                type="file"
                name="image"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 bg-white"
            >

        </div>

        <!-- DESCRIPTION -->
        <div>

            <label class="block text-sm font-bold text-gray-700 mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="8"
                placeholder="Write event description..."
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
            >{{ old('description') }}</textarea>

        </div>

        <!-- BUTTON -->
        <div class="flex items-center gap-4">

            <button
                type="submit"
                class="bg-black text-white px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition"
            >
                Create Event
            </button>

            <a
                href="{{ route('events-admin.index') }}"
                class="text-gray-600 hover:text-black transition"
            >
                Cancel
            </a>

        </div>

    </form>

</div>

@endsection
