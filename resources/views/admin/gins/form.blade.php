{{--
    Shared create/edit form for a gin.
    Expects: $gin, $action, $method, $submitLabel
--}}
<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="space-y-5">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    @if($errors->any())
        <div class="bg-rose-50 border border-rose-200 text-rose-800 text-xs font-semibold px-4 py-3 rounded-xl">
            Проверете ги полињата означени со црвено.
        </div>
    @endif

    {{-- Кратко објаснување каде оди се што се внесува тука --}}
    <div class="bg-indigo-50/60 border border-indigo-100 rounded-2xl p-5 text-xs text-slate-600 leading-relaxed">
        <p class="font-bold text-slate-900 text-sm mb-2">Каде се прикажува ова?</p>
        <ul class="space-y-1.5 list-disc pl-4">
            <li><span class="font-semibold text-slate-800">Картичка во каруселот</span> — во делот „Discover Our Gin“ на почетната страница, на „Our Gin“ и во менито на секоја страница за џин.</li>
            <li><span class="font-semibold text-slate-800">Своја страница</span> — секој џин добива страница на <span class="font-mono">/gins/slug</span> со насловот, описот, копчето за купување и текстовите што ќе ги внесете подолу.</li>
            <li><span class="font-semibold text-slate-800">Тизер на дното</span> — на дното од секоја страница за џин се прикажува следниот џин по редослед, за да се движи посетителот низ целата палета.</li>
        </ul>
    </div>

    {{-- Основни податоци --}}
    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 space-y-5">
        <div>
            <h3 class="text-sm font-bold text-slate-900">Основни податоци</h3>
            <p class="text-xs text-slate-500 mt-0.5">Името, описот и линкот што ги гледа посетителот.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="name" class="block text-xs font-semibold text-slate-700 mb-1.5">Име <span class="text-rose-500">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $gin->name) }}" required
                       placeholder="на пр. Amber"
                       class="w-full px-4 py-2 text-sm border rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition {{ $errors->has('name') ? 'border-rose-400' : 'border-slate-200' }}">
                <p class="text-[11px] text-slate-400 mt-1.5">
                    Само името, без „Smidgin“ — на страницата се прикажува како <span class="font-semibold">SMIDGIN {{ Str::upper($gin->name ?: 'AMBER') }}</span>.
                </p>
                @error('name')<p class="text-xs font-semibold text-rose-600 mt-1.5">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="slug" class="block text-xs font-semibold text-slate-700 mb-1.5">
                    Slug <span class="font-normal text-slate-400">(адресата на страницата)</span>
                </label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $gin->slug) }}"
                       placeholder="се пополнува автоматски од името"
                       class="w-full px-4 py-2 text-sm font-mono border rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition border-slate-200">
                <p class="text-[11px] text-slate-400 mt-1.5">
                    Оставете празно и ќе се направи од името. Страницата ќе биде на
                    <span class="font-mono">/gins/{{ $gin->slug ?: 'ime-na-dzin' }}</span> — без празни места и без букви од кирилица.
                </p>
            </div>
        </div>

        <div>
            <label for="tagline" class="block text-xs font-semibold text-slate-700 mb-1.5">Краток опис</label>
            <textarea id="tagline" name="tagline" rows="3"
                      placeholder="на пр. A spiced gin inspired by oriental flavors — crafted in Skopje with notes of nutmeg, star anise and sweet citrus."
                      class="w-full px-4 py-2 text-sm border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">{{ old('tagline', $gin->tagline) }}</textarea>
            <p class="text-[11px] text-slate-400 mt-1.5">
                Една до две реченици. Се прикажува в косо и сиво под насловот, веднаш над копчето за купување.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="buy_url" class="block text-xs font-semibold text-slate-700 mb-1.5">Линк за купување</label>
                <input type="url" id="buy_url" name="buy_url" value="{{ old('buy_url', $gin->buy_url) }}"
                       placeholder="https://smidgin-shop.myshopify.com/products/..."
                       class="w-full px-4 py-2 text-sm border rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition {{ $errors->has('buy_url') ? 'border-rose-400' : 'border-slate-200' }}">
                <p class="text-[11px] text-slate-400 mt-1.5">
                    Адресата на производот во Shopify. Го користат копчето „BUY {{ Str::upper($gin->name ?: 'AMBER') }}“ на страницата и „BUY ONLINE“ во менито.
                </p>
                @error('buy_url')<p class="text-xs font-semibold text-rose-600 mt-1.5">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="sort_order" class="block text-xs font-semibold text-slate-700 mb-1.5">Редослед</label>
                <input type="number" id="sort_order" name="sort_order" min="0" value="{{ old('sort_order', $gin->sort_order) }}"
                       class="w-full px-4 py-2 text-sm border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
                <p class="text-[11px] text-slate-400 mt-1.5">
                    Позиција во каруселот — 1 е прв одлево. Истиот редослед одредува кој џин се прикажува како „следен“ на дното од страниците.
                </p>
            </div>
        </div>

        <div>
            @php
                $otherGins = \App\Models\Gin::ordered()->get()->reject(fn ($other) => $gin->exists && $other->is($gin));
                $selectedNext = old('next_gin_id', $gin->next_gin_id);
            @endphp

            <label for="next_gin_id" class="block text-xs font-semibold text-slate-700 mb-1.5">
                Шише на дното од страницата
            </label>

            <select id="next_gin_id" name="next_gin_id"
                    class="w-full sm:w-80 px-4 py-2 text-sm border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
                <option value="">Автоматски — следниот по редослед</option>

                @foreach($otherGins as $other)
                    <option value="{{ $other->id }}" {{ (int) $selectedNext === $other->id ? 'selected' : '' }}>
                        Smidgin {{ $other->name }}{{ $other->active ? '' : ' (скриен)' }}
                    </option>
                @endforeach
            </select>

            <p class="text-[11px] text-slate-400 mt-1.5 max-w-xl leading-relaxed">
                На дното од страницата на овој џин се прикажува шише од друг џин, за посетителот да продолжи натаму.
                Изберете кое шише да биде тоа. „Автоматски“ го зема следниот по редослед и се врти во круг —
                {{ optional($gin->exists ? $gin->nextGin() : null)?->name
                    ? 'сега тоа е Smidgin ' . $gin->nextGin()->name . '.'
                    : 'како досега.' }}
            </p>
        </div>

        <label class="flex items-start gap-3 text-sm">
            <input type="checkbox" name="active" value="1" {{ old('active', $gin->active ?? true) ? 'checked' : '' }}
                   class="w-4 h-4 mt-0.5 rounded border-slate-300">
            <span>
                Прикажи го на страницата
                <span class="block text-[11px] text-slate-400 font-normal">
                    Исклучено значи дека исчезнува од каруселот и од менито, а неговата страница враќа „404“. Податоците остануваат зачувани.
                </span>
            </span>
        </label>
    </div>

    {{-- Изглед --}}
    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 space-y-5">
        <div>
            <h3 class="text-sm font-bold text-slate-900">Изглед</h3>
            <p class="text-xs text-slate-500 mt-0.5">Бојата, фонтот и сликите со кои се прикажува џинот.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="accent_color" class="block text-xs font-semibold text-slate-700 mb-1.5">Боја</label>
                <input type="color" id="accent_color" name="accent_color" value="{{ old('accent_color', $gin->accent_color ?: '#EF4135') }}"
                       class="w-full h-11 rounded-xl border border-slate-200 bg-white">
                <p class="text-[11px] text-slate-400 mt-1.5">
                    Бојата на брендот за овој џин: со неа се боји името во насловот, копчето „BUY“, копчето „Read more“ на картичката и стрелката за враќање нагоре.
                </p>
            </div>

            <div>
                <label for="name_font" class="block text-xs font-semibold text-slate-700 mb-1.5">Фонт на името</label>
                <select id="name_font" name="name_font"
                        class="w-full px-4 py-2 text-sm border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
                    @foreach(\App\Models\Gin::FONTS as $class => $label)
                        <option value="{{ $class }}" {{ old('name_font', $gin->name_font) === $class ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                <p class="text-[11px] text-slate-400 mt-1.5">
                    Со кој фонт се пишува името на џинот (Classic користи Montserrat, Orient — Papyrus, XO — Baskervville).
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @foreach([
                'card_image' => ['Слика за картичка', 'Ова е сликата во каруселот „Discover Our Gin“ и во менито. Најдобро изгледа исправена (портрет) слика на шишето во амбиент.'],
                'bottle_image' => ['Слика на шише', 'Големата слика лево на самата страница на џинот и во тизерот на дното од другите страници. Обично шишето само, без позадина.'],
                'wordmark_image' => ['Слика на името', 'Незадолжително. Ако името е испишано со посебна графика (како кај Velvet), качете ја тука и таа ќе се прикаже наместо испишаното име.'],
            ] as $field => [$label, $hint])
                <div>
                    <label for="{{ $field }}" class="block text-xs font-semibold text-slate-700 mb-1.5">{{ $label }}</label>

                    @if($gin->{$field})
                        <img src="{{ asset($gin->{$field}) }}" alt=""
                             class="w-full h-28 object-cover rounded-xl border border-slate-200 mb-2 bg-slate-50">
                    @else
                        <div class="w-full h-28 rounded-xl border border-dashed border-slate-200 mb-2 bg-slate-50 flex items-center justify-center text-[11px] text-slate-400">
                            Сè уште нема слика
                        </div>
                    @endif

                    <input type="file" id="{{ $field }}" name="{{ $field }}" accept="image/*"
                           class="w-full text-xs text-slate-600 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">

                    <p class="text-[11px] text-slate-400 mt-1.5">{{ $hint }}</p>
                    @if($gin->{$field})
                        <p class="text-[11px] text-slate-400">Ако не изберете нова слика, останува постоечката.</p>
                    @endif
                    @error($field)<p class="text-xs font-semibold text-rose-600 mt-1.5">{{ $message }}</p>@enderror
                </div>
            @endforeach
        </div>
    </div>

    {{-- Содржина на страницата --}}
    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 space-y-5">
        <div>
            <h3 class="text-sm font-bold text-slate-900">Содржина на страницата</h3>
            <p class="text-xs text-slate-500 mt-0.5">
                Текстот што оди под описот, на страницата на овој џин. Три секции, секоја со свој наслов —
                кај постоечките џинови тоа се „Distilled to Perfection“, „Flavor &amp; Botanicals“ и „How To Enjoy It“.
                Секција без текст воопшто не се прикажува, па слободно оставете празно ако не ви треба.
            </p>

            <p class="text-xs text-slate-600 mt-2 bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 leading-relaxed">
                <span class="font-semibold">Совет:</span>
                ставете <span class="font-mono">*ѕвездички*</span> околу збор за да биде во бојата на џинот
                (на пр. <span class="font-mono">Distilled to *Perfection*</span>), или
                <span class="font-mono">**двојни**</span> за задебелен збор.
            </p>
        </div>

        @foreach([
            'one' => ['Прва секција', 'на пр. Distilled to Perfection', 'Како се прави — постапка, дестилација, серии.'],
            'two' => ['Втора секција', 'на пр. Flavor & Botanicals', 'Вкус и билки — што се насетува во носот и во устата.'],
            'three' => ['Трета секција', 'на пр. How To Enjoy It', 'Како да се пие — коктели, препораки за сервирање.'],
        ] as $key => [$label, $headingPlaceholder, $hint])
            <div class="space-y-2">
                <label class="block text-xs font-semibold text-slate-700">{{ $label }}</label>

                <input type="text" name="heading_{{ $key }}" value="{{ old('heading_' . $key, $gin->{'heading_' . $key}) }}"
                       placeholder="Наслов — {{ $headingPlaceholder }}"
                       class="w-full px-4 py-2 text-sm font-semibold border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">

                <textarea name="body_{{ $key }}" rows="4" placeholder="Текст — {{ $hint }}"
                          class="w-full px-4 py-2 text-sm border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">{{ old('body_' . $key, $gin->{'body_' . $key}) }}</textarea>

                <p class="text-[11px] text-slate-400">{{ $hint }} Новите редови се задржуваат.</p>

                {{-- Само третата секција носи слика — таму каде што рачните страници имаат коктели. --}}
                @if($key === 'three')
                    <div class="flex flex-col sm:flex-row gap-4 items-start pt-2">
                        <div class="w-full sm:w-40 flex-shrink-0">
                            @if($gin->image_three)
                                <img src="{{ asset($gin->image_three) }}" alt=""
                                     class="w-full h-28 object-cover rounded-xl border border-slate-200 bg-slate-50">
                            @else
                                <div class="w-full h-28 rounded-xl border border-dashed border-slate-200 bg-slate-50 flex items-center justify-center text-[11px] text-slate-400">
                                    Сè уште нема слика
                                </div>
                            @endif
                        </div>

                        <div class="flex-1">
                            <label for="image_three" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                Слика до текстот <span class="font-normal text-slate-400">(незадолжително)</span>
                            </label>

                            <input type="file" id="image_three" name="image_three" accept="image/*"
                                   class="w-full text-xs text-slate-600 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">

                            <p class="text-[11px] text-slate-400 mt-1.5 leading-relaxed">
                                Се прикажува десно од текстот на оваа секција, а на мобилен паѓа под него.
                                Овде обично оди слика од коктел или од сервирано пијалак — на рачно направените
                                страници на тоа место стојат коктелите.
                            </p>
                            @if($gin->image_three)
                                <p class="text-[11px] text-slate-400">Ако не изберете нова слика, останува постоечката.</p>
                            @endif
                            @error('image_three')<p class="text-xs font-semibold text-rose-600 mt-1.5">{{ $message }}</p>@enderror
                        </div>
                    </div>
                @endif
            </div>
        @endforeach

        <div class="pt-4 border-t border-slate-100">
            <label for="custom_path" class="block text-xs font-semibold text-slate-700 mb-1.5">
                Води кон постоечка страница <span class="font-normal text-slate-400">(за напредни — обично се остава празно)</span>
            </label>
            <input type="text" id="custom_path" name="custom_path" value="{{ old('custom_path', $gin->custom_path) }}"
                   placeholder="/classic"
                   class="w-full sm:w-64 px-4 py-2 text-sm font-mono border border-slate-200 rounded-xl bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-600 transition">
            <div class="text-[11px] text-slate-400 mt-2 space-y-1">
                <p><span class="font-semibold text-slate-600">Празно</span> — џинот добива автоматски направена страница на <span class="font-mono">/gins/{{ $gin->slug ?: 'ime-na-dzin' }}</span> од содржината погоре. Ова е вообичаениот избор за нов џин.</p>
                <p><span class="font-semibold text-slate-600">Пополнето</span> — картичката води кон таа рачно направена страница (како <span class="font-mono">/classic</span> или <span class="font-mono">/velvet</span>), а содржината погоре не се користи. Така се поставени петте постоечки џинови, за да си ги задржат оригиналните страници.</p>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit"
                class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold px-5 py-2.5 rounded-xl transition shadow-xs">
            {{ $submitLabel }}
        </button>

        <a href="{{ route('stores.index') }}#gins"
           class="text-xs font-semibold text-slate-500 hover:text-slate-700 px-3 py-2.5">Откажи</a>
    </div>
</form>
