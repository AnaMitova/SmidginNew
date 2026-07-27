<!DOCTYPE html>
<html>
<head>
    <title>Add Tour</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-8">Add Tour</h1>

    <form action="{{ route('tours.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="bg-white p-8 rounded-xl shadow-lg">

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label>Title</label>
                <input type="text" name="title" class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label>Category</label>
                <input type="text" name="category" class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label>Duration</label>
                <input type="text" name="duration" class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label>Price</label>
                <input type="text" name="price" class="w-full border rounded-lg p-3">
            </div>

            <div class="md:col-span-2">
                <label>Availability</label>
                <textarea name="availability" rows="3" class="w-full border rounded-lg p-3"></textarea>
            </div>

            <div>
                <label>Minimum Capacity</label>
                <input type="text" name="capacity" class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" class="w-full border rounded-lg p-3">
            </div>

        </div>

        <div class="mt-6">
            <label>Description</label>
            <textarea name="description" rows="8" class="w-full border rounded-lg p-3"></textarea>
        </div>

        <button class="mt-6 bg-red-500 text-white px-6 py-3 rounded-lg">
            Save Tour
        </button>

    </form>

</div>

</body>
</html>