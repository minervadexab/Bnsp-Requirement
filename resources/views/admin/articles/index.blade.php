@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-3xl font-bold">
        Articles
    </h1>

    <a href="{{ route('articles-admin.create') }}"
       class="bg-blue-600 text-white px-5 py-3 rounded-lg">
        + Add Article
    </a>

</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>
                <th class="p-4 text-left">Title</th>
                <th class="p-4 text-left">Category</th>
                <th class="p-4 text-left">Action</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($articles as $article)

            <tr class="border-t">

                <td class="p-4">
                    {{ $article->title }}
                </td>

                <td class="p-4">
                    {{ $article->category }}
                </td>

                <td class="p-4 flex gap-3">

                    {{-- <a href="{{ route('articles-admin.edit', $article->id) }}"
                       class="bg-yellow-400 px-4 py-2 rounded">
                        Edit
                    </a> --}}

                    <form method="POST"
                          action="{{ route('articles-admin.destroy', $article->id) }}">

                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 text-white px-4 py-2 rounded">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection
