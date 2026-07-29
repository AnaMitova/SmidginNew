<!DOCTYPE html>
<html lang="mk" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Измени џин - Административен Панел</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { montserrat: ['Montserrat', 'sans-serif'] } } }
        }
    </script>
</head>
<body class="font-montserrat antialiased text-slate-800 bg-slate-50 min-h-full">

    <header class="bg-white border-b border-slate-200 sticky top-0 z-30 shadow-xs">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="h-9 w-9 rounded-xl text-white flex items-center justify-center font-bold text-lg shadow-sm"
                         style="background-color: {{ $gin->accent_color }}">{{ Str::substr($gin->name, 0, 1) }}</div>
                    <div>
                        <h1 class="text-base font-bold text-slate-900 leading-tight">Административен панел</h1>
                        <p class="text-xs text-slate-500">Џинови</p>
                    </div>
                </div>

                <a href="{{ route('stores.index') }}#gins"
                   class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-indigo-600 bg-slate-50 hover:bg-slate-100 border border-slate-200 px-3.5 py-2 rounded-xl transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    <span>Назад кон панелот</span>
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Измени „{{ $gin->name }}“</h2>
                <p class="text-xs text-slate-500 mt-1">
                    Страница: <a href="{{ $gin->url }}" target="_blank" class="font-mono text-indigo-600 hover:underline">{{ $gin->url }}</a>
                </p>
            </div>

            <form action="{{ route('gins.destroy', $gin) }}" method="POST"
                  onsubmit="return confirm('Дали сте сигурни дека сакате да го избришете овој џин?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="px-3.5 py-2 text-xs font-semibold text-rose-600 bg-rose-50 border border-rose-200 rounded-xl hover:bg-rose-100 transition">
                    Избриши џин
                </button>
            </form>
        </div>

        @include('admin.gins.form', [
            'action'      => route('gins.update', $gin),
            'method'      => 'PUT',
            'submitLabel' => 'Зачувај промени',
        ])
    </main>

</body>
</html>
