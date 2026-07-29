@php
use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="mk" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административен Панел</title>

    <!-- Tailwind CSS & Inter Font -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class=" font-montserrat antialiased text-slate-800 bg-slate-50 min-h-full">

    <!-- Заглавие и навигација -->
    <header class="bg-white border-b border-slate-200  sticky top-0 z-30 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-start gap-8 h-28 items-center">
                <div class="flex items-center gap-3">
                    <div>
                        <img src="{{ asset('sliki/logo.png') }}" alt="Logo" class="w-[150px]">
                    </div>
                    </div>
                    <div>
                        <h1 class="text-base font-bold text-slate-900  leading-tight font-montserrat">Административен панел</h1>
                        <p class="text-xs text-[#EF4135]">Управување со содржини</p>
                    </div>
                </div>


            </div>
        </div>
    </header>

    {{-- Reopen the tab we were on after a save redirect (e.g. .../admin/stores#subscribers). --}}
    <main x-data="{ activeTab: window.location.hash ? window.location.hash.slice(1) : null }"
          class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-10">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

    <button @click="activeTab = 'stores'"
        class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
        <h3 class="font-bold text-slate-900">Продавници</h3>
        <p class="text-xs text-slate-500">Управување со локали</p>
    </button>

    <button @click="activeTab = 'recipes'"
        class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
        <h3 class="font-bold text-slate-900">Рецепти</h3>
        <p class="text-xs text-slate-500">Кориснички рецепти</p>
    </button>

    <button @click="activeTab = 'requests'"
        class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
        <h3 class="font-bold text-slate-900">Барања</h3>
        <p class="text-xs text-slate-500">Барања за тури</p>
    </button>

    <button @click="activeTab = 'tours'"
        class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
        <h3 class="font-bold text-slate-900">Тури</h3>
        <p class="text-xs text-slate-500">Управување со тури</p>
    </button>

    <button @click="activeTab = 'events'"
    class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
    <h3 class="font-bold text-slate-900">Настани</h3>
    <p class="text-xs text-slate-500">Управување со настани</p>
    </button>

    <button @click="activeTab = 'subscribers'"
    class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
    <h3 class="font-bold text-slate-900">Претплатници</h3>
    <p class="text-xs text-slate-500">Subscribers / Leads</p>
    </button>

    <button @click="activeTab = 'store-locations'"
    class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
    <h3 class="font-bold text-slate-900">Локации</h3>
    <p class="text-xs text-slate-500">Store Locations</p>
    </button>
    <button @click="activeTab = 'banner'"
        class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
        <h3 class="font-bold text-slate-900">Банер</h3>
        <p class="text-xs text-slate-500">Промотивен банер</p>
    </button>

    <button @click="activeTab = 'gins'"
        class="bg-white border border-slate-200 rounded-2xl p-5 text-left hover:border-indigo-500 hover:shadow transition">
        <h3 class="font-bold text-slate-900">Џинови</h3>
        <p class="text-xs text-slate-500">Discover Our Gin</p>
    </button>

</div>
            <!-- 1. ПРОДАВНИЦИ И ЛОКАЛИ -->
            <section x-show="activeTab === 'stores'" x-data="{ search: '', visible: 4 }" class="space-y-4">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl font-bold text-slate-900">Продавници и локали</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Преглед и управување со сите регистрирани локации</p>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <!-- Поле за пребарување -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text"
                               x-model="search"
                               placeholder="Пребарај по име или град..."
                               class="w-full sm:w-64 pl-9 pr-4 py-2 text-xs border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition shadow-xs">
                    </div>

                    <a href="{{ route('stores.create') }}"
                       class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>Додади продавница</span>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                <th class="py-3 px-6">Слика</th>
                                <th class="py-3 px-4">Име</th>
                                <th class="py-3 px-4">Град</th>
                                <th class="py-3 px-4">Тип</th>
                                <th class="py-3 px-4">Телефон</th>
                                <th class="py-3 px-6 text-right">Акции</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @foreach($stores as $index => $store)
                                <tr data-search="{{ mb_strtolower($store->name . ' ' . $store->city, 'UTF-8') }}"
                                    x-show="search === '' ? {{ $index }} < visible : $el.dataset.search.includes(search.toLowerCase())"
                                    class="hover:bg-slate-50/60 transition">
                                    <td class="py-3 px-6">
                                        @if($store->image)
                                            <img src="{{ asset('storage/' . $store->image) }}"
                                                 class="w-11 h-11 rounded-xl object-cover border border-slate-200 shadow-xs"
                                                 alt="{{ $store->name }}">
                                        @else
                                            <div class="w-11 h-11 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 font-semibold text-slate-900">{{ $store->name }}</td>
                                    <td class="py-3 px-4 text-slate-600">{{ $store->city }}</td>
                                    <td class="py-3 px-4 capitalize">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700 border border-slate-200">
                                            {{ $store->type }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 text-slate-600 font-mono text-xs">{{ $store->phone }}</td>
                                    <td class="py-3 px-6 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('stores.edit', $store) }}"
                                               class="px-3 py-1.5 text-xs font-medium text-slate-700 bg-slate-50 border border-slate-200 rounded-lg hover:bg-slate-100 hover:text-indigo-600 transition">
                                                Промени
                                            </a>
                                            <form action="{{ route('stores.destroy', $store) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        onclick="return confirm('Дали сте сигурни дека сакате да ја избришете оваа продавница?')"
                                                        class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                                    Избриши
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($stores->count() > 4)
                    <div x-show="search === '' && visible < {{ $stores->count() }}" class="p-3.5 border-t border-slate-100 bg-slate-50/50 text-center">
                        <button @click="visible += 4"
                                class="inline-flex items-center gap-2 text-xs font-semibold text-indigo-600 hover:text-indigo-700 bg-white px-4 py-2 rounded-xl border border-slate-200 shadow-xs hover:border-indigo-300 transition">
                            <span>Прикажи повеќе</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>
                @endif
            </div>
        </section>

        <!-- 2. РЕЦЕПТИ ОД КОРИСНИЦИ -->
        <section x-show="activeTab === 'recipes'" class="space-y-4">
            <div>
                <h2 class="text-xl font-bold text-slate-900">Рецепти од корисници</h2>
                <p class="text-xs text-slate-500 mt-0.5">Испратени рецепти за преглед и модерација</p>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                <th class="py-3 px-6">Слика</th>
                                <th class="py-3 px-4">Рецепт</th>
                                <th class="py-3 px-4">Датум</th>
                                <th class="py-3 px-6 text-right">Акции</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @forelse($recipes as $recipe)
                                <tr class="hover:bg-slate-50/60 transition">
                                    <td class="py-3 px-6">
                                        @if($recipe->image)
                                            <img src="{{ asset('storage/' . $recipe->image) }}"
                                                 class="w-11 h-11 object-cover rounded-xl border border-slate-200 shadow-xs"
                                                 alt="Слика од рецепт">
                                        @else
                                            <div class="w-11 h-11 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 max-w-lg text-slate-700 leading-relaxed">
                                        {{ \Illuminate\Support\Str::limit($recipe->recipe, 120) }}
                                    </td>
                                    <td class="py-3 px-4 text-slate-500 whitespace-nowrap text-xs font-mono">
                                        {{ $recipe->created_at->format('d.m.Y') }}
                                    </td>
                                    <td class="py-3 px-6 text-right whitespace-nowrap">
                                        <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    onclick="return confirm('Дали сте сигурни дека сакате да го избришете овој рецепт?')"
                                                    class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                                Избриши
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-10 text-slate-400">
                                        Нема испратени рецепти.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- 3. БАРАЊА ЗА ТУРИ -->
            <section x-show="activeTab === 'requests'" x-data="{ search: '' }" class="space-y-4">            
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">

    <div>
        <h2 class="text-xl font-bold text-slate-900">Барања за тури</h2>
        <p class="text-xs text-slate-500 mt-0.5">
            Доспеани резервации и прашања од корисници
        </p>
    </div>

    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>

        <input
            x-model="search"
            type="text"
            placeholder="Пребарај по име, тура или е-пошта..."
            class="w-full sm:w-72 pl-9 pr-4 py-2 text-xs border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition shadow-xs">
    </div>

</div>


            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                <th class="py-3 px-6">Тура</th>
                                <th class="py-3 px-4">Име</th>
                                <th class="py-3 px-4">Е-пошта</th>
                                <th class="py-3 px-4">Телефон</th>
                                <th class="py-3 px-4">Датум</th>
                                <th class="py-3 px-4">Бр. луѓе</th>
                                <th class="py-3 px-4">Порака</th>
                                <th class="py-3 px-6">Статус</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @foreach($requests as $request)
                                <tr
    data-search="{{ mb_strtolower(
        $request->tour->title . ' ' .
        $request->name . ' ' .
        $request->email . ' ' .
        $request->phone,
        'UTF-8'
    ) }}"
    x-show="$el.dataset.search.includes(search.toLowerCase()) || search === ''"
    class="hover:bg-slate-50/60 transition">
                                    <td class="py-3 px-6 font-semibold text-slate-900 whitespace-nowrap">{{ $request->tour->title }}</td>
                                    <td class="py-3 px-4 text-slate-800 whitespace-nowrap">{{ $request->name }}</td>
                                    <td class="py-3 px-4 text-slate-600 font-mono text-xs">{{ $request->email }}</td>
                                    <td class="py-3 px-4 text-slate-600 font-mono text-xs whitespace-nowrap">{{ $request->phone }}</td>
                                    <td class="py-3 px-4 text-slate-600 whitespace-nowrap text-xs font-mono">{{ $request->date }}</td>
                                    <td class="py-3 px-4 text-slate-700 font-medium">{{ $request->people }}</td>
                                    <td class="py-3 px-4 text-slate-500 max-w-xs truncate">{{ $request->message ?: '—' }}</td>
                                    <td class="py-3 px-6 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200">
                                            {{ $request->status }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- 4. УПРАВУВАЊЕ СО ТУРИ -->
        <section x-show="activeTab === 'tours'" class="space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <div class="flex items-center gap-2.5">
                        <h2 class="text-xl font-bold text-slate-900">Тури</h2>
                        <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-2 py-0.5 rounded-full border border-indigo-100">
                            {{ $tours->count() }} {{ $tours->count() == 1 ? 'тура' : 'тури' }}
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 mt-0.5">Управување со турстички пакети, цени и нивна достапност</p>
                </div>

                <a href="{{ url('/admin/tours/create') }}"
                   class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Додади тура
                </a>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                <th class="py-3 px-6">Тура</th>
                                <th class="py-3 px-4">Категорија</th>
                                <th class="py-3 px-4">Времетраење</th>
                                <th class="py-3 px-4">Цена</th>
                                <th class="py-3 px-4">Достапност</th>
                                <th class="py-3 px-4">Капацитет</th>
                                <th class="py-3 px-4">Барања</th>
                                <th class="py-3 px-4">Креирано</th>
                                <th class="py-3 px-6 text-right">Акции</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @forelse($tours as $tour)
                                <tr class="hover:bg-slate-50/60 transition">
                                    <td class="py-3.5 px-6">
                                        <div class="flex items-center gap-3">
                                            @if($tour->image)
                                                <img src="{{ asset('storage/'.$tour->image) }}"
                                                     class="w-12 h-12 rounded-xl object-cover border border-slate-200 shadow-xs flex-shrink-0"
                                                     alt="{{ $tour->title }}">
                                            @else
                                                <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 flex-shrink-0">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/></svg>
                                                </div>
                                            @endif
                                            <div>
                                                <h3 class="font-semibold text-slate-900 leading-tight">{{ $tour->title }}</h3>
                                                <p class="text-xs text-slate-400 font-mono mt-0.5">ID: #{{ $tour->id }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100">
                                            {{ $tour->category }}
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">{{ $tour->duration }}</td>
                                    <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">${{ $tour->price }}</td>
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        @if($tour->availability)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                                                Достапно
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200">
                                                Недостапно
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3.5 px-4 text-slate-700 font-medium whitespace-nowrap">{{ $tour->capacity }}</td>
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        <span class="inline-flex items-center justify-center bg-slate-100 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded-lg">
                                            {{ $tour->requests()->count() }}
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-4 text-slate-500 text-xs font-mono whitespace-nowrap">
                                        {{ $tour->created_at->format('d.m.Y') }}
                                    </td>
                                    <td class="py-3.5 px-6 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('tours.edit', $tour) }}"
                                               class="px-3 py-1.5 text-xs font-medium text-slate-700 bg-slate-50 border border-slate-200 rounded-lg hover:bg-slate-100 hover:text-indigo-600 transition">
                                                Промени
                                            </a>
                                            <form action="{{ route('tours.destroy', $tour) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        onclick="return confirm('Дали сте сигурни дека сакате да ја избришете оваа тура?')"
                                                        class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                                    Избриши
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center py-12 text-slate-400">
                                        Не се пронајдени тури.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Events -->
<!-- Events -->
<section x-show="activeTab === 'events'" class="space-y-4">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

        <div>
            <div class="flex items-center gap-2.5">
                <h2 class="text-xl font-bold text-slate-900">Настани</h2>

                <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-2 py-0.5 rounded-full border border-indigo-100">
                    {{ $events->count() }}
                </span>
            </div>

            <p class="text-xs text-slate-500 mt-0.5">
                Управување со настани
            </p>
        </div>

        <!-- ADD EVENT BUTTON -->
        <a href="{{ url('/admin/events/create') }}"
           class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs">

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>

            Додади настан
        </a>
        

    </div>
    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                    <th class="py-3 px-6">Настан</th>
                    <th class="py-3 px-4">Категорија</th>
                    <th class="py-3 px-4">Датум</th>
                    <th class="py-3 px-4">Локација</th>
                    <th class="py-3 px-4">Цена</th>
                    <th class="py-3 px-4">Креирано</th>
                    <th class="py-3 px-6 text-right">Акции</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100 text-sm">

                @forelse($events as $event)

                    <tr class="hover:bg-slate-50/60 transition">

                        <td class="py-3.5 px-6">
                            <div class="flex items-center gap-3">

                                @if($event->image)
                                    <img src="{{ asset('storage/'.$event->image) }}"
                                         class="w-12 h-12 rounded-xl object-cover border border-slate-200 shadow-xs">
                                @else
                                    <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200"></div>
                                @endif

                                <div>
                                    <h3 class="font-semibold text-slate-900">
                                        {{ $event->title }}
                                    </h3>

                                    <p class="text-xs text-slate-400 font-mono">
                                        ID: #{{ $event->id }}
                                    </p>
                                </div>

                            </div>
                        </td>

                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100">
                                {{ $event->category }}
                            </span>
                        </td>

                        <td class="py-3.5 px-4 whitespace-nowrap">
                            {{ $event->date }}
                        </td>

                        <td class="py-3.5 px-4">
                            {{ $event->location }}
                        </td>

                        <td class="py-3.5 px-4 font-semibold">
                            {{ $event->price }}
                        </td>

                        <td class="py-3.5 px-4 text-slate-500 text-xs font-mono">
                            {{ $event->created_at->format('d.m.Y') }}
                        </td>

                        <td class="py-3.5 px-6 text-right">
                            <div class="flex items-center justify-end gap-2">

                                <a href="{{ route('events.edit', $event) }}"
                                   class="px-3 py-1.5 text-xs font-medium text-slate-700 bg-slate-50 border border-slate-200 rounded-lg hover:bg-slate-100 hover:text-indigo-600 transition">
                                    Промени
                                </a>

                                <form action="{{ route('events.destroy', $event) }}"
                                      method="POST"
                                      class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            onclick="return confirm('Дали сте сигурни дека сакате да го избришете овој настан?')"
                                            class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                        Избриши
                                    </button>

                                </form>

                            </div>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="text-center py-12 text-slate-400">
                            Не се пронајдени настани.
                        </td>
                    </tr>

                @endforelse

            </tbody>
        </table>
    </div>
</div>

</section>

<!-- 6. ПРЕТПЛАТНИЦИ / LEADS -->
<section x-show="activeTab === 'subscribers'" x-data="{ search: '' }" class="space-y-4">

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">

        <div>
            <div class="flex items-center gap-2.5">
                <h2 class="text-xl font-bold text-slate-900">Претплатници</h2>

                <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-2 py-0.5 rounded-full border border-indigo-100">
                    {{ $subscribers->count() }}
                </span>
            </div>

            <p class="text-xs text-slate-500 mt-0.5">
                Пријави од попапот за претплата (Subscribers / Leads)
            </p>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">

            <!-- Поле за пребарување -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text"
                       x-model="search"
                       placeholder="Пребарај по име, е-пошта или телефон..."
                       class="w-full sm:w-72 pl-9 pr-4 py-2 text-xs border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition shadow-xs">
            </div>

            <a href="{{ route('subscribers.export') }}"
               class="inline-flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs whitespace-nowrap">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 15V3"/>
                </svg>
                <span>Export to CSV</span>
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold px-4 py-3 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    @php
        $popupCode = old('discount_code', $subscriptionSetting->discount_code ?: \App\Models\SubscriptionSetting::DEFAULT_DISCOUNT_CODE);
        $popupOffer = old('discount_text', $subscriptionSetting->discount_text ?: \App\Models\SubscriptionSetting::DEFAULT_DISCOUNT_TEXT);
    @endphp

    <!-- Поставки за попапот за претплата -->
    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-5"
         x-data="{ code: @js($popupCode), offer: @js($popupOffer) }">

        <div class="mb-4">
            <h3 class="text-sm font-bold text-slate-900">Понуда во попапот</h3>
            <p class="text-xs text-slate-500 mt-0.5">
                Тоа што го гледаат посетителите во попапот за претплата. Постојните претплатници го задржуваат кодот со кој се пријавиле.
            </p>
        </div>

        <form action="{{ route('subscribers.settings.update') }}" method="POST" class="space-y-4">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div>
                    <label for="discount_code" class="block text-xs font-semibold text-slate-700 mb-1.5">
                        Код за попуст
                    </label>

                    <input type="text"
                           id="discount_code"
                           name="discount_code"
                           value="{{ $popupCode }}"
                           x-model="code"
                           maxlength="50"
                           class="w-full px-4 py-2 text-sm font-mono border rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition shadow-xs {{ $errors->has('discount_code') ? 'border-rose-400' : 'border-slate-200' }}">

                    @error('discount_code')
                        <p class="text-xs font-semibold text-rose-600 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="discount_text" class="block text-xs font-semibold text-slate-700 mb-1.5">
                        Текст на понудата <span class="font-normal text-slate-400">(на пр. 10% OFF)</span>
                    </label>

                    <input type="text"
                           id="discount_text"
                           name="discount_text"
                           value="{{ $popupOffer }}"
                           x-model="offer"
                           maxlength="60"
                           class="w-full px-4 py-2 text-sm border rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition shadow-xs {{ $errors->has('discount_text') ? 'border-rose-400' : 'border-slate-200' }}">

                    @error('discount_text')
                        <p class="text-xs font-semibold text-rose-600 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Преглед -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 space-y-1.5">
                <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Преглед</p>

                <p class="text-xs text-slate-600">
                    Subscribe for exclusive updates, special offers, and
                    <strong class="text-slate-900" x-text="offer"></strong> your first order.
                </p>

                <p class="text-xs text-slate-600">
                    Unlock <span class="font-semibold text-slate-900" x-text="offer"></span> Your First Order
                </p>

                <p class="text-xs text-slate-600">
                    Код по пријавување: <span class="font-mono font-semibold text-rose-600" x-text="code"></span>
                </p>
            </div>

            <button type="submit"
                    class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs whitespace-nowrap">
                Зачувај
            </button>
        </form>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 text-xs font-semibold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                        <th class="py-3 px-6">Датум</th>
                        <th class="py-3 px-4">Име</th>
                        <th class="py-3 px-4">Е-пошта</th>
                        <th class="py-3 px-4">Телефон</th>
                        <th class="py-3 px-4">Код</th>
                        <th class="py-3 px-6 text-right">Акции</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100 text-sm">

                    @forelse($subscribers as $subscriber)

                        <tr data-search="{{ mb_strtolower($subscriber->first_name . ' ' . $subscriber->email . ' ' . $subscriber->full_phone, 'UTF-8') }}"
                            x-show="search === '' || $el.dataset.search.includes(search.toLowerCase())"
                            class="hover:bg-slate-50/60 transition">

                            <td class="py-3.5 px-6 text-slate-500 text-xs font-mono whitespace-nowrap">
                                {{ $subscriber->created_at->format('d.m.Y H:i') }}
                            </td>

                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">
                                {{ $subscriber->first_name }}
                            </td>

                            <td class="py-3.5 px-4 text-slate-600 font-mono text-xs">
                                {{ $subscriber->email }}
                            </td>

                            <td class="py-3.5 px-4 text-slate-600 font-mono text-xs whitespace-nowrap">
                                {{ $subscriber->full_phone }}
                            </td>

                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200">
                                    {{ $subscriber->discount_code }}
                                </span>
                            </td>

                            <td class="py-3.5 px-6 text-right whitespace-nowrap">
                                <form action="{{ route('subscribers.destroy', $subscriber) }}"
                                      method="POST"
                                      class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            onclick="return confirm('Дали сте сигурни дека сакате да го избришете овој претплатник?')"
                                            class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                        Избриши
                                    </button>

                                </form>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center py-12 text-slate-400">
                                Сè уште нема претплатници.
                            </td>
                        </tr>

                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

</section>

<!-- 7. ЛОКАЦИИ НА ПРОДАВНИЦИ / STORE LOCATIONS -->
<section x-show="activeTab === 'store-locations'" class="space-y-4">

    @include('partials.flag-sprite')

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2.5">
                <h2 class="text-xl font-bold text-slate-900">Локации на продавници</h2>
                <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-2 py-0.5 rounded-full border border-indigo-100">
                    {{ $storeLocations->flatten()->count() }}
                </span>
            </div>
            <p class="text-xs text-slate-500 mt-0.5">
                Се прикажуваат во модалот „Select a Location“. Влечете за да го смените редоследот.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <span id="sl-save-state" class="text-xs font-semibold text-emerald-600 opacity-0 transition-opacity">Зачувано</span>
            <a href="{{ route('store-locations.create') }}"
               class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs whitespace-nowrap">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Додади локација</span>
            </a>
        </div>
    </div>

    <div id="sl-root" data-reorder-url="{{ route('store-locations.reorder') }}" class="space-y-5">

        @forelse($storeLocations as $region => $locations)
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">

                <div class="flex items-center justify-between px-5 py-3 bg-slate-50 border-b border-slate-200">
                    <h3 class="text-xs font-bold text-slate-700 uppercase tracking-wider">{{ $region }}</h3>
                    <span class="text-[11px] text-slate-400">{{ $locations->count() }}</span>
                </div>

                <ul class="divide-y divide-slate-100" data-sl-group>
                    @foreach($locations as $location)
                        <li data-sl-id="{{ $location->id }}" draggable="true"
                            class="flex items-center gap-3 px-5 py-3 bg-white hover:bg-slate-50/60 transition cursor-grab active:cursor-grabbing">

                            <span class="shrink-0 text-slate-300" title="Влечете за редослед">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="7" cy="4" r="1.4"/><circle cx="13" cy="4" r="1.4"/>
                                    <circle cx="7" cy="10" r="1.4"/><circle cx="13" cy="10" r="1.4"/>
                                    <circle cx="7" cy="16" r="1.4"/><circle cx="13" cy="16" r="1.4"/>
                                </svg>
                            </span>

                            <span class="shrink-0 w-8 h-8 rounded-full overflow-hidden ring-1 ring-slate-200 bg-slate-100 flex items-center justify-center">
                                @if($location->flag_image)
                                    <img src="{{ asset('storage/' . $location->flag_image) }}" class="w-full h-full object-cover" alt="">
                                @elseif($location->flag_sprite_id)
                                    <svg viewBox="0 0 24 16" preserveAspectRatio="xMidYMid slice" class="w-full h-full">
                                        <use href="#{{ $location->flag_sprite_id }}"></use>
                                    </svg>
                                @endif
                            </span>

                            <div class="min-w-0 flex-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-semibold text-slate-900 text-sm truncate">{{ $location->name }}</span>

                                    @if(! $location->is_active)
                                        <span class="shrink-0 inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-slate-100 text-slate-500 border border-slate-200">
                                            Скриена
                                        </span>
                                    @endif

                                    @if($location->opens_in_new_tab)
                                        <span class="shrink-0 text-slate-300" title="Се отвора во нов таб">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                        </span>
                                    @endif
                                </div>
                                <a href="{{ $location->store_url }}" target="_blank" rel="noopener noreferrer"
                                   class="text-[11px] text-slate-400 font-mono hover:text-indigo-600 truncate block">
                                    {{ $location->store_url }}
                                </a>
                            </div>

                            <div class="shrink-0 flex items-center gap-1.5">
                                <button type="button" data-sl-move="up" aria-label="Помести нагоре"
                                        class="w-7 h-7 flex items-center justify-center text-slate-400 hover:text-indigo-600 hover:bg-slate-100 rounded-lg transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                                </button>
                                <button type="button" data-sl-move="down" aria-label="Помести надолу"
                                        class="w-7 h-7 flex items-center justify-center text-slate-400 hover:text-indigo-600 hover:bg-slate-100 rounded-lg transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </button>

                                <a href="{{ route('store-locations.edit', $location) }}"
                                   class="px-3 py-1.5 text-xs font-medium text-slate-700 bg-slate-50 border border-slate-200 rounded-lg hover:bg-slate-100 hover:text-indigo-600 transition">
                                    Промени
                                </a>

                                <form action="{{ route('store-locations.destroy', $location) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Дали сте сигурни дека сакате да ја избришете оваа локација?')"
                                            class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                        Избриши
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @empty
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs py-12 text-center">
                <p class="text-slate-400 text-sm">Сè уште нема додадено локации.</p>
                <a href="{{ route('store-locations.create') }}" class="inline-block mt-3 text-xs font-semibold text-indigo-600 hover:text-indigo-700">
                    Додади ја првата локација
                </a>
            </div>
        @endforelse
    </div>

    <script>
    (function () {
        var root = document.getElementById('sl-root');
        if (!root || root.dataset.ready === '1') return;
        root.dataset.ready = '1';

        var token = '{{ csrf_token() }}';
        var state = document.getElementById('sl-save-state');
        var dragged = null;

        function flashSaved(ok) {
            state.textContent = ok ? 'Зачувано' : 'Грешка при зачувување';
            state.classList.toggle('text-emerald-600', ok);
            state.classList.toggle('text-rose-600', !ok);
            state.style.opacity = '1';
            setTimeout(function () { state.style.opacity = '0'; }, 1800);
        }

        /* Persist the full list in DOM order, so region grouping stays intact. */
        function save() {
            var ids = [].map.call(root.querySelectorAll('[data-sl-id]'), function (li) {
                return parseInt(li.dataset.slId, 10);
            });
            if (!ids.length) return;

            fetch(root.dataset.reorderUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': token,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ ids: ids })
            }).then(function (r) { flashSaved(r.ok); })
              .catch(function () { flashSaved(false); });
        }

        /* ── Drag and drop, scoped to a single region group ─────────────── */
        root.addEventListener('dragstart', function (e) {
            var li = e.target.closest('[data-sl-id]');
            if (!li) return;
            dragged = li;
            li.classList.add('opacity-40');
            e.dataTransfer.effectAllowed = 'move';
            // Firefox needs data set for the drag to start at all.
            e.dataTransfer.setData('text/plain', li.dataset.slId);
        });

        root.addEventListener('dragend', function () {
            if (dragged) dragged.classList.remove('opacity-40');
            dragged = null;
        });

        root.addEventListener('dragover', function (e) {
            if (!dragged) return;
            var over = e.target.closest('[data-sl-id]');
            if (!over || over === dragged) return;
            if (over.parentElement !== dragged.parentElement) return;   // same region only

            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';

            var box = over.getBoundingClientRect();
            var after = (e.clientY - box.top) > box.height / 2;
            over.parentElement.insertBefore(dragged, after ? over.nextSibling : over);
        });

        root.addEventListener('drop', function (e) {
            if (!dragged) return;
            e.preventDefault();
            save();
        });

        /* ── Keyboard-accessible fallback ───────────────────────────────── */
        root.addEventListener('click', function (e) {
            var btn = e.target.closest('[data-sl-move]');
            if (!btn) return;

            var li = btn.closest('[data-sl-id]');
            var sibling = btn.dataset.slMove === 'up'
                ? li.previousElementSibling
                : li.nextElementSibling;
            if (!sibling) return;

            if (btn.dataset.slMove === 'up') {
                li.parentElement.insertBefore(li, sibling);
            } else {
                li.parentElement.insertBefore(sibling, li);
            }
            btn.focus();
            save();
        });
    })();
    </script>

</section>

<!-- Pop up banner -->
<section x-show="activeTab === 'banner'" class="space-y-4">
    <div>
        <h2 class="text-xl font-bold text-slate-900">Промотивен банер</h2>
        <p class="text-xs text-slate-500 mt-0.5">
            Промени го банерот што се прикажува на врвот на веб-страницата.
        </p>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs p-6">
        <form action="{{ route('banner.update') }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium mb-2">Текст</label>
                <input type="text"
                       name="text"
                       value="{{ $banner->text }}"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Линк</label>
                <input type="text"
                       name="link"
                       value="{{ $banner->link }}"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Текст на копче</label>
                <input type="text"
                       name="button_text"
                       value="{{ $banner->button_text }}"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Боја на позадина</label>
                    <input type="color"
                           name="background_color"
                           value="{{ $banner->background_color }}"
                           class="w-full h-12 rounded-xl border border-slate-300">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Боја на текст</label>
                    <input type="color"
                           name="text_color"
                           value="{{ $banner->text_color }}"
                           class="w-full h-12 rounded-xl border border-slate-300">
                </div>
            </div>

            <label class="flex items-center gap-3">
                <input type="checkbox"
                       name="active"
                       value="1"
                       {{ $banner->active ? 'checked' : '' }}>
                <span>Активен банер</span>
            </label>

            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-xl">
                Зачувај
            </button>
        </form>
    </div>
</section>

<!-- 9. ЏИНОВИ / DISCOVER OUR GIN -->
<section x-show="activeTab === 'gins'" class="space-y-4">

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2.5">
                <h2 class="text-xl font-bold text-slate-900">Џинови</h2>
                <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-2 py-0.5 rounded-full border border-indigo-100">
                    {{ $gins->count() }}
                </span>
            </div>
            <p class="text-xs text-slate-500 mt-0.5 max-w-2xl leading-relaxed">
                Палетата џинови: истиот список го полни каруселот „Discover Our Gin“ на почетната страница,
                лентата во менито на сите страници и тизерот „следен џин“ на дното од страниците за џин.
                Секој нов џин добива и своја страница.
            </p>
        </div>

        <a href="{{ route('gins.create') }}"
           class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition shadow-xs whitespace-nowrap">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span>Додади џин</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold px-4 py-3 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($gins as $gin)
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden flex flex-col">

                <div class="h-40 bg-slate-50 border-b border-slate-100 flex items-center justify-center overflow-hidden">
                    @if($gin->card_image)
                        <img src="{{ asset($gin->card_image) }}" alt="{{ $gin->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-xs text-slate-400">Нема слика</span>
                    @endif
                </div>

                <div class="p-4 flex-1 flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <span class="w-3.5 h-3.5 rounded-full border border-slate-200 flex-shrink-0"
                              style="background-color: {{ $gin->accent_color }}"></span>
                        <h3 class="font-bold text-slate-900 text-sm">{{ $gin->name }}</h3>

                        @unless($gin->active)
                            <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 border border-slate-200 px-2 py-0.5 rounded-full">Скриен</span>
                        @endunless
                    </div>

                    <a href="{{ $gin->url }}" target="_blank"
                       class="text-[11px] font-mono text-indigo-600 hover:underline break-all">{{ $gin->url }}</a>

                    @if($gin->tagline)
                        <p class="text-xs text-slate-500 line-clamp-2">{{ Str::limit($gin->tagline, 90) }}</p>
                    @endif

                    <div class="flex items-center gap-2 mt-auto pt-3">
                        <a href="{{ route('gins.edit', $gin) }}"
                           class="px-3 py-1.5 text-xs font-medium text-indigo-600 bg-indigo-50 border border-indigo-200 rounded-lg hover:bg-indigo-100 transition">
                            Измени
                        </a>

                        <form action="{{ route('gins.destroy', $gin) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Дали сте сигурни дека сакате да го избришете овој џин?')"
                                    class="px-3 py-1.5 text-xs font-medium text-rose-600 bg-rose-50 border border-rose-200 rounded-lg hover:bg-rose-100 transition">
                                Избриши
                            </button>
                        </form>

                        <span class="ml-auto text-[11px] text-slate-400">#{{ $gin->sort_order }}</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12 text-slate-400 bg-white rounded-2xl border border-slate-200/80">
                Сè уште нема џинови.
            </div>
        @endforelse
    </div>
</section>

</main>

</body>
</html>