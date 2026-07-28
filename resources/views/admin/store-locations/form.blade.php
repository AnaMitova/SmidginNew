{{--
    Shared create/edit form for store locations.
    Expects: $action, $method, $regions, $countries, and optionally $location.
--}}
@php
    $location ??= null;
@endphp

@include('partials.flag-sprite')

<form action="{{ $action }}"
      method="POST"
      enctype="multipart/form-data"
      x-data="{
          code: @js(old('flag_code', $location->flag_code ?? '')),
          hasUpload: @js((bool) ($location->flag_image ?? false)),
          removeUpload: false
      }"
      class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 sm:p-8 space-y-6">

    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    @if($errors->any())
        <div class="rounded-xl border border-rose-200 bg-rose-50 px-4 py-3">
            <p class="text-xs font-semibold text-rose-700 mb-1">Ве молиме проверете ги полињата:</p>
            <ul class="list-disc list-inside text-xs text-rose-600 space-y-0.5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Name --}}
        <div>
            <label for="name" class="block text-xs font-semibold mb-1.5">
                Име на локација <span class="text-rose-500">*</span>
            </label>
            <input type="text" id="name" name="name" required maxlength="120"
                   value="{{ old('name', $location->name ?? '') }}"
                   placeholder="United States"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
            <p class="text-[11px] text-slate-400 mt-1">Се прикажува на копчето, на пр. „UAE, Dubai“.</p>
        </div>

        {{-- Region --}}
        <div>
            <label for="region" class="block text-xs font-semibold mb-1.5">
                Регион / континент <span class="text-rose-500">*</span>
            </label>
            <input type="text" id="region" name="region" required maxlength="60" list="region-options"
                   value="{{ old('region', $location->region ?? '') }}"
                   placeholder="Europe"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
            <datalist id="region-options">
                @foreach($regions as $region)
                    <option value="{{ $region }}"></option>
                @endforeach
            </datalist>
            <p class="text-[11px] text-slate-400 mt-1">Изберете од листата или внесете сопствен регион.</p>
        </div>

        {{-- Flag code --}}
        <div>
            <label for="flag_code" class="block text-xs font-semibold mb-1.5">Знаме (код на држава)</label>
            <div class="flex items-center gap-3">
                <span class="shrink-0 w-9 h-9 rounded-full overflow-hidden ring-1 ring-slate-200 bg-slate-100 flex items-center justify-center">
                    <svg x-show="code" viewBox="0 0 24 16" preserveAspectRatio="xMidYMid slice" class="w-full h-full">
                        <use :href="code ? '#{{ \App\Support\CountryFlags::SPRITE_PREFIX }}' + code : ''"></use>
                    </svg>
                    <svg x-show="!code" x-cloak class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 21V4a1 1 0 011-1h11l-1.5 3L15 9H4"/>
                    </svg>
                </span>
                <select id="flag_code" name="flag_code" x-model="code"
                        class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
                    <option value="">— без знаме —</option>
                    @foreach($countries as $iso => $countryName)
                        <option value="{{ $iso }}" @selected(old('flag_code', $location->flag_code ?? '') === $iso)>
                            {{ $countryName }} ({{ $iso }})
                        </option>
                    @endforeach
                </select>
            </div>
            <p class="text-[11px] text-slate-400 mt-1">Се црта од вградениот сет на знамиња.</p>
        </div>

        {{-- Flag image upload --}}
        <div>
            <label for="flag_image" class="block text-xs font-semibold mb-1.5">Или прикачете слика за знаме</label>
            <input type="file" id="flag_image" name="flag_image" accept="image/*"
                   @change="hasUpload = true; removeUpload = false"
                   class="w-full text-xs border border-slate-200 rounded-xl px-4 py-2 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">

            @if($location?->flag_image)
                <div class="flex items-center gap-2 mt-2" x-show="!removeUpload">
                    <img src="{{ asset('storage/' . $location->flag_image) }}"
                         class="w-8 h-8 rounded-full object-cover ring-1 ring-slate-200" alt="">
                    <label class="text-[11px] text-rose-600 inline-flex items-center gap-1.5 cursor-pointer">
                        <input type="checkbox" name="remove_flag_image" value="1" x-model="removeUpload"
                               class="rounded border-slate-300 text-rose-600">
                        Отстрани ја сликата
                    </label>
                </div>
            @endif
            <p class="text-[11px] text-slate-400 mt-1">Ако е прикачена слика, таа има предност пред кодот. Макс. 2 MB.</p>
        </div>

        {{-- Store URL --}}
        <div class="md:col-span-2">
            <label for="store_url" class="block text-xs font-semibold mb-1.5">Линк до продавница</label>
            <input type="url" id="store_url" name="store_url" maxlength="2048"
                   value="{{ old('store_url', $location->store_url ?? '') }}"
                   placeholder="https://de.smidgin.com"
                   class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm font-mono focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
        </div>

        {{-- Toggles --}}
        <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-3">
            <label class="flex items-start gap-3 border border-slate-200 rounded-xl px-4 py-3 cursor-pointer hover:bg-slate-50 transition">
                <input type="checkbox" name="is_active" value="1" class="mt-0.5 rounded border-slate-300 text-indigo-600"
                       @checked(old('is_active', $location->is_active ?? true))>
                <span>
                    <span class="block text-xs font-semibold text-slate-900">Активна</span>
                    <span class="block text-[11px] text-slate-500">Видлива на страницата.</span>
                </span>
            </label>

            <label class="flex items-start gap-3 border border-slate-200 rounded-xl px-4 py-3 cursor-pointer hover:bg-slate-50 transition">
                <input type="checkbox" name="opens_in_new_tab" value="1" class="mt-0.5 rounded border-slate-300 text-indigo-600"
                       @checked(old('opens_in_new_tab', $location->opens_in_new_tab ?? true))>
                <span>
                    <span class="block text-xs font-semibold text-slate-900">Отвори во нов таб</span>
                    <span class="block text-[11px] text-slate-500">Исклучете за отворање во истиот таб.</span>
                </span>
            </label>
        </div>
    </div>

    <div class="flex items-center justify-end gap-3 pt-2 border-t border-slate-100">
        <a href="{{ route('stores.index') }}"
           class="px-4 py-2.5 text-xs font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-xl hover:bg-slate-100 transition">
            Откажи
        </a>
        <button type="submit"
                class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-5 py-2.5 rounded-xl transition shadow-xs">
            {{ $submitLabel }}
        </button>
    </div>
</form>
