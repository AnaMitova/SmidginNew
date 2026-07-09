@php
use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>Stores Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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

<div
    x-data="{ visible: 4 }"
    class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">
        <tr>
            <th class="text-left py-1 px-4">Слика</th>
            <th class="text-left py-1 px-4">Име</th>
            <th class="text-left py-1 px-4">Град</th>
            <th class="text-left py-1 px-4">Тип</th>
            <th class="text-left py-1 px-4">Телефон</th>
            <th class="text-left py-1 px-4"></th>
        </tr>
        </thead>

        <tbody>

        @foreach($stores as $index => $store)

            <tr
                x-show="{{ $index }} < visible"
                class="border-t">

                <td class="px-4 py-1">
                    @if($store->image)
                        <img
                            src="{{ asset('storage/'.$store->image) }}"
                            class="w-16 h-16 rounded object-cover">
                    @endif
                </td>

                <td class="px-4">{{ $store->name }}</td>

                <td class="px-4">{{ $store->city }}</td>

                <td class="px-4 capitalize">
                    {{ $store->type }}
                </td>

                <td class="px-4">{{ $store->phone }}</td>

                <td class="px-4 flex gap-2">

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

    @if($stores->count() > 7)
        <div class="p-6 text-center border-t">

            <button
                x-show="visible < {{ $stores->count() }}"
                @click="visible += 7"
                class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-lg">

                Show More

            </button>

        </div>
    @endif

</div>
    
</div>

<div class="mt-16 max-w-7xl mx-auto py-10">

    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold">
            Рецепти од корисници
        </h2>
    </div>

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-4">Слика</th>
                    <th class="text-left p-4">Рецепт</th>
                    <th class="text-left p-4">Датум</th>
                    <th class="text-left p-4">Акција</th>
                </tr>
            </thead>

            <tbody>

            @forelse($recipes as $recipe)

                <tr class="border-t">

                    <td class="p-4">
                        @if($recipe->image)
                            <img
                                src="{{ asset('storage/'.$recipe->image) }}"
                                class="w-16 h-16 object-cover rounded">
                        @else
                            -
                        @endif
                    </td>

                    <td class="p-4 max-w-lg">
                        {{ \Illuminate\Support\Str::limit($recipe->recipe, 120) }}
                    </td>

                    <td class="p-4">
                        {{ $recipe->created_at->format('d.m.Y') }}
                    </td>

                    <td class="p-4">

                        <form action="{{ route('recipes.destroy', $recipe) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Delete this recipe?')"
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">

                                Избриши

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center p-8 text-gray-500">
                        Нема испратени рецепти.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>