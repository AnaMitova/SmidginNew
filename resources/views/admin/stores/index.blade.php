<!DOCTYPE html>
<html>
<head>
    <title>Stores Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-7xl mx-auto py-10">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">
            Додавање на продавници и локали
        </h1>

        <a href="{{ route('stores.create') }}"
           class="bg-red-500 hover:bg-red-600 text-white px-5 py-3 rounded-lg">
            + Додади продавница
        </a>
    </div>

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-4">Слика</th>

                <th class="text-left p-4">Име</th>

                <th class="text-left p-4">Град</th>

                <th class="text-left p-4">Тип</th>

                <th class="text-left p-4">Телефон</th>

                <th class="text-left p-4"></th>

            </tr>

            </thead>

            <tbody>

            @foreach($stores as $store)

                <tr class="border-t">

                    <td class="p-4">

                        @if($store->image)
                            <img
                                src="{{ asset('storage/'.$store->image) }}"
                                class="w-16 h-16 rounded object-cover">
                        @endif

                    </td>

                    <td class="p-4">
                        {{ $store->name }}
                    </td>

                    <td class="p-4">
                        {{ $store->city }}
                    </td>

                    <td class="p-4 capitalize">
                        {{ $store->type }}
                    </td>

                    <td class="p-4">
                        {{ $store->phone }}
                    </td>

                    <td class="p-4 flex gap-2">

                        <a href="{{ route('stores.edit',$store) }}"
                           class="bg-[#9CA3AF] text-white px-4 py-2 rounded">
                            Промени
                        </a>

                        <form action="{{ route('stores.destroy',$store) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Delete this store?')"
                                class="bg-[#f14244] text-white px-4 py-2 rounded">

                                Избриши

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>