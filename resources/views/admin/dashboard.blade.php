@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500 mb-2">
            Total Articles
        </h2>

        <p class="text-4xl font-bold">
            12
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500 mb-2">
            Total Events
        </h2>

        <p class="text-4xl font-bold">
            5
        </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-gray-500 mb-2">
            Gallery Images
        </h2>

        <p class="text-4xl font-bold">
            24
        </p>
    </div>

</div>

<div class="mt-10 bg-white p-6 rounded-2xl shadow">

    <h2 class="text-2xl font-semibold mb-4">
        Welcome Back 👋
    </h2>

    <p class="text-gray-600">
        Hello, {{ Auth::user()->name }}.
        Manage your company profile website here.
    </p>

</div>

@endsection
