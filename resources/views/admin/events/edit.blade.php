<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

@if ($errors->any())
    <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4">
        <p class="font-semibold text-red-700">
            Не смеете да ги оставите задолжителните полиња празни.
        </p>
    </div>
@endif

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white p-8 rounded-xl shadow">

        <h1 class="text-3xl font-bold mb-8">
            Edit Event
        </h1>

        <form action="{{ route('events.update', $event) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <input
                type="text"
                name="title"
                value="{{ old('title', $event->title) }}"
                placeholder="Title"
                class="w-full border p-3 rounded mb-4">

            <input
                type="text"
                name="category"
                value="{{ old('category', $event->category) }}"
                placeholder="Category"
                class="w-full border p-3 rounded mb-4">

            <input
                type="date"
                name="date"
                value="{{ old('date', $event->date) }}"
                class="w-full border p-3 rounded mb-4">

            <input
                type="text"
                name="location"
                value="{{ old('location', $event->location) }}"
                placeholder="Location"
                class="w-full border p-3 rounded mb-4">

            <input
                type="text"
                name="price"
                value="{{ old('price', $event->price) }}"
                placeholder="Price"
                class="w-full border p-3 rounded mb-4">

            <input
                type="url"
                name="shop_link"
                value="{{ old('shop_link', $event->shop_link) }}"
                placeholder="Shop Link"
                class="w-full border p-3 rounded mb-4">

            <textarea
                name="description"
                placeholder="Description"
                class="w-full border p-3 rounded mb-4"
                rows="6">{{ old('description', $event->description) }}</textarea>

            @if($event->image)
                <img
                    src="{{ asset('storage/'.$event->image) }}"
                    class="w-40 rounded mb-4"
                    loading="lazy"
                    decoding="async">
            @endif

            <input
                type="file"
                name="image"
                class="mb-6">

            <br>

            <button
                class="bg-red-500 text-white px-8 py-3 rounded">
                Update Event
            </button>

        </form>

    </div>

</div>

</body>
</html>