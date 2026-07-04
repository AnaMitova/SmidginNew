<!DOCTYPE html>
<html>
<head>
    <title>Add Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white shadow rounded-xl p-8">

        <h1 class="text-3xl font-bold mb-8">
            Додади продавница/локал
        </h1>

        <form action="{{ route('stores.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-5">
                <label class="font-semibold">Име</label>

                <input
                    type="text"
                    name="name"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-5">
                <label class="font-semibold">Град</label>

                <input
                    type="text"
                    name="city"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-5">
                <label class="font-semibold">Тип</label>

                <select
                    name="type"
                    class="w-full border rounded-lg p-3">

                    <option value="buy">Продавница</option>
                    <option value="taste">Локал</option>

                </select>
            </div>

            <div class="mb-5">
                <label class="font-semibold">Адреса</label>

                <input
                    type="text"
                    name="address"
                    class="w-full border rounded-lg p-3">
            </div>

            <div class="mb-5">
                <label class="font-semibold">Часови</label>

                <input
                    type="text"
                    name="hours"
                    class="w-full border rounded-lg p-3">
            </div>

            <div class="mb-5">
                <label class="font-semibold">Телефон</label>

                <input
                    type="text"
                    name="phone"
                    class="w-full border rounded-lg p-3">
            </div>

            <div class="mb-5">
                <label class="font-semibold">Google Maps / Website Link</label>

                <input
                    type="text"
                    name="link"
                    class="w-full border rounded-lg p-3">
            </div>

            <div class="mb-8">
                <label class="font-semibold">Слика</label>

                <input
                    type="file"
                    name="image"
                    class="w-full border rounded-lg p-3">
            </div>

            <button
                class="bg-red-500 hover:bg-red-600 text-white px-8 py-3 rounded-lg">

                Зачувај

            </button>

        </form>

    </div>

</div>

</body>
</html>