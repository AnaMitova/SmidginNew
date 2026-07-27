<!DOCTYPE html>
<html>
<head>
    <title>Edit Tour</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">    <script>

        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-montserrat">

@if ($errors->any())
    <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4">
        <p class="font-semibold text-red-700">
            Не смеете да ги оставите задолжителните полиња празни.
        </p>
    </div>
@endif

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white p-8 rounded-2xl shadow">

        <h1 class="text-3xl font-bold mb-8">
            Edit Tour
        </h1>

        <form action="{{ route('tours.update', $tour) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <input
                type="text"
                name="title"
                value="{{ old('title', $tour->title) }}"
                placeholder="Tour Title"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">

            <input
                type="text"
                name="category"
                value="{{ old('category', $tour->category) }}"
                placeholder="Category"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">

            <input
                type="text"
                name="duration"
                value="{{ old('duration', $tour->duration) }}"
                placeholder="Duration"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">

            <input
                type="text"
                name="price"
                value="{{ old('price', $tour->price) }}"
                placeholder="Price"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">

            <select
                name="availability"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">

                <option value="1" {{ $tour->availability ? 'selected' : '' }}>
                    Available
                </option>

                <option value="0" {{ !$tour->availability ? 'selected' : '' }}>
                    Unavailable
                </option>

            </select>

            <input
                type="text"
                name="capacity"
                value="{{ old('capacity', $tour->capacity) }}"
                placeholder="Capacity"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">

            <textarea
                name="description"
                rows="6"
                placeholder="Description"
                class="w-full border border-gray-300 p-3 rounded-lg mb-4">{{ old('description', $tour->description) }}</textarea>

            @if($tour->image)
                <img
                    src="{{ asset('storage/'.$tour->image) }}"
                    class="w-48 rounded-xl mb-4 object-cover border">
            @endif

            <input
                type="file"
                name="image"
                class="mb-6 block">

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl transition">
                    Update Tour
                </button>

                <a
                    href="{{ route('stores.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-8 py-3 rounded-xl transition">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>