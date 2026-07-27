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
        <form action="{{ route('tours.store') }}" 
              method="POST" 
              enctype="multipart/form-data" 
              class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 sm:p-8 space-y-6">
            
            @csrf

            <!-- Мрежа за полиња -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Наслов -->
                <div class="md:col-span-2">
                    <label for="title" class="block text-xs font-semibold text-slate-700 mb-1.5">Наслов на тура</label>
                    <input type="text" 
                           id="title" 
                           name="title" 
                           placeholder="пр. 3-дневен излет низ Охрид и Свети Наум"
                           class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"
                           required>
                </div>

                <!-- Категорија -->
                <div>
                    <label for="category" class="block text-xs font-semibold text-slate-700 mb-1.5">Категорија</label>
                    <input type="text" 
                           id="category" 
                           name="category" 
                           placeholder="пр. Планински, Културен, Авантура"
                           class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"
                           required>
                </div>

                <!-- Времетраење -->
                <div>
                    <label for="duration" class="block text-xs font-semibold text-slate-700 mb-1.5">Времетраење</label>
                    <input type="text" 
                           id="duration" 
                           name="duration" 
                           placeholder="пр. 2 дена / 1 ноќ"
                           class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"
                           required>
                </div>

                <!-- Цена -->
                <div>
                    <label for="price" class="block text-xs font-semibold text-slate-700 mb-1.5">Цена ($ / МКД)</label>
                    <input type="text" 
                           id="price" 
                           name="price" 
                           placeholder="пр. 120"
                           class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"
                           required>
                </div>

                <!-- Минимален капацитет -->
                <div>
                    <label for="capacity" class="block text-xs font-semibold text-slate-700 mb-1.5">Минимален капацитет</label>
                    <input type="text" 
                           id="capacity" 
                           name="capacity" 
                           placeholder="пр. 5 лица"
                           class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"
                           required>
                </div>

                <!-- Достапност -->
                <div class="md:col-span-2">
                    <label for="availability" class="block text-xs font-semibold text-slate-700 mb-1.5">Достапност</label>
                    <textarea id="availability" 
                              name="availability" 
                              rows="3" 
                              placeholder="Внесете детали за достапноста (напр. Секој викенд од Мај до Октомври)"
                              class="w-full border border-slate-200 rounded-xl p-3 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"></textarea>
                </div>

                <!-- Прикачување слика -->
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Слика од турата</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 border-dashed rounded-xl hover:border-indigo-400 transition bg-slate-50/50">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-10 w-10 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20a4 4 0 004 4h24a4 4 0 004-4V20L28 8z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M28 8v12h12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-xs text-slate-600 justify-center">
                                <label for="image" class="relative cursor-pointer bg-white rounded-md font-semibold text-indigo-600 hover:text-indigo-500 focus-within:outline-none px-1">
                                    <span>Изберете датотека</span>
                                    <input id="image" name="image" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">или повлечете ја тука</p>
                            </div>
                            <p class="text-xs text-slate-400">PNG, JPG, WEBP до 5MB</p>
                        </div>
                    </div>
                </div>

                <!-- Детален опис -->
                <div class="md:col-span-2">
                    <label for="description" class="block text-xs font-semibold text-slate-700 mb-1.5">Детален опис</label>
                    <textarea id="description" 
                              name="description" 
                              rows="6" 
                              placeholder="Внесете подробен опис за турата, програмата по денови и што е вклучено во цената..."
                              class="w-full border border-slate-200 rounded-xl p-3 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition"></textarea>
                </div>

            </div>

            <!-- Акциски копчиња -->
            <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                <a href="{{ route('tours.index') }}" 
                   class="px-5 py-2.5 text-xs font-semibold text-slate-600 hover:text-slate-900 bg-slate-50 hover:bg-slate-100 border border-slate-200 rounded-xl transition">
                    Откажи
                </a>
                <button type="submit" 
                        class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-5 py-2.5 rounded-xl transition shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>Зачувај тура</span>
                </button>
            </div>

        </form>

    </main>

</body>
</html>