@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Create Article
</h1>

<form method="POST"
      action="{{ route('articles-admin.store') }}"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded-2xl shadow space-y-5">

    @csrf

    <div>
        <label>Title</label>

        <input type="text"
               name="title"
               class="w-full border rounded-lg p-3">
    </div>

    <div>
        <label>Category</label>

        <select name="category"
                class="w-full border rounded-lg p-3">

            <option>Tech Trends</option>
            <option>Case Studies</option>
            <option>AI Insights</option>
            <option>Strategy</option>
            <option>AI & Data</option>

        </select>
    </div>

    <div>
        <label>Image</label>

        <input type="file"
               name="image"
               class="w-full border rounded-lg p-3">
    </div>

    <div>
        <label>Content</label>

        <textarea name="content"
                  rows="8"
                  class="w-full border rounded-lg p-3"></textarea>
    </div>

    <button class="bg-blue-600 text-white px-6 py-3 rounded-lg">
        Save Article
    </button>

</form>

@endsection
