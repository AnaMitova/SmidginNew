<!DOCTYPE html>
<html lang="mk" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додади Нова Тура - Административен Панел</title>

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
<body class="font-montserrat antialiased text-slate-800 bg-slate-50 min-h-full">

    <!-- Заглавие и навигација -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-30 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="h-9 w-9 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-lg shadow-sm">
                        А
                    </div>
                    <div>
                        <h1 class="text-base font-bold text-slate-900 leading-tight">Административен панел</h1>
                        <p class="text-xs text-slate-500">Управување со тури</p>
                    </div>
                </div>

                <!-- Копче за назад -->
                <a href="{{ route('tours.index') }}" 
                   class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-indigo-600 bg-slate-50 hover:bg-slate-100 border border-slate-200 px-3.5 py-2 rounded-xl transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    <span>Назад кон сите тури</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Главна содржина -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-slate-900">Додади нова тура</h2>
            <p class="text-xs text-slate-500 mt-1">Внесете ги сите потребни информации за да креирате нова туристичка понуда.</p>
        </div>

        <!-- Картичка со формата -->
<form action="{{ route('events.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 sm:p-8 space-y-6">

    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Title -->
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold mb-1.5">Наслов</label>
            <input type="text"
                   name="title"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5"
                   required>
        </div>

        <!-- Category -->
        <div>
            <label class="block text-xs font-semibold mb-1.5">Категорија</label>
            <input type="text"
                   name="category"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5">
        </div>

        <!-- Date -->
        <div>
            <label class="block text-xs font-semibold mb-1.5">Датум</label>
            <input type="date"
                   name="date"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5">
        </div>

        <!-- Location -->
        <div>
            <label class="block text-xs font-semibold mb-1.5">Локација</label>
            <input type="text"
                   name="location"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5">
        </div>

        <!-- Price -->
        <div>
            <label class="block text-xs font-semibold mb-1.5">Цена</label>
            <input type="text"
                   name="price"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5">
        </div>

        <!-- Shop Link -->
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold mb-1.5">Shop Link</label>
            <input type="url"
                   name="shop_link"
                   placeholder="https://..."
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5">
        </div>

        <!-- Image -->
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold mb-1.5">Слика</label>

            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 border-dashed rounded-xl bg-slate-50">
                <div class="text-center">
                    <svg class="mx-auto h-10 w-10 text-slate-400"
                         stroke="currentColor"
                         fill="none"
                         viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20L28 8z"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M28 8v12h12"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                    <label for="image"
                           class="cursor-pointer font-semibold text-indigo-600">
                        Изберете датотека
                    </label>

                    <input id="image"
                           name="image"
                           type="file"
                           class="sr-only">

                    <p class="text-xs text-slate-400 mt-2">
                        PNG, JPG, WEBP
                    </p>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold mb-1.5">Опис</label>

            <textarea
                name="description"
                rows="6"
                class="w-full border border-slate-200 rounded-xl p-3"></textarea>
        </div>

    </div>

    <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">

        <a href="{{ route('events.index') }}"
           class="px-5 py-2.5 text-xs font-semibold border rounded-xl">
            Откажи
        </a>

        <button type="submit"
                class="px-5 py-2.5 bg-indigo-600 text-white rounded-xl text-xs font-semibold">
            Зачувај настан
        </button>

    </div>

</form>

    </main>

</body>
</html>