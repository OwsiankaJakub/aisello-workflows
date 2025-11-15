<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Kontakt | Aisello - Automatyzacja Procesów Biznesowych</title>
    <meta name="description" content="Skontaktuj się z Aisello. Porozmawiajmy o automatyzacji procesów w Twojej firmie. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="keywords" content="kontakt Aisello, automatyzacja procesów, wdrożenie automatyzacji, konsultacja automatyzacji"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('contact') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('contact') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('contact') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('contact') }}"/>
    <meta property="og:title" content="Kontakt | Aisello - Automatyzacja Procesów Biznesowych"/>
    <meta property="og:description" content="Skontaktuj się z Aisello. Porozmawiajmy o automatyzacji procesów w Twojej firmie. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('contact') }}"/>
    <meta name="twitter:title" content="Kontakt | Aisello - Automatyzacja Procesów Biznesowych"/>
    <meta name="twitter:description" content="Skontaktuj się z Aisello. Porozmawiajmy o automatyzacji procesów w Twojej firmie. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'name' => 'Kontakt - Aisello',
            'description' => 'Skontaktuj się z Aisello w sprawie automatyzacji procesów biznesowych.',
            'url' => route('contact')
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

{{--Header--}}
<div class="bg-white dark:bg-gray-900">

    @include('partials.navigation')


    <main>
        {{-- Hero Section --}}
        <div class="relative isolate bg-white dark:bg-gray-900">
            <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
                <div class="relative px-6 pt-24 pb-20 sm:pt-32 lg:static lg:px-8 lg:py-48">
                    <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                        <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10 lg:w-1/2 dark:bg-gray-800 dark:ring-white/10">
                            <svg viewBox="0 0 1097 845" aria-hidden="true" class="absolute left-[max(50%,25rem)] top-0 size-[68.5625rem] -translate-x-1/2 stroke-gray-900/10 [mask-image:linear-gradient(to_bottom_right,white,transparent)] dark:stroke-white/10">
                                <path fill="none" d="M301 -1v682.5m-300-256c0 165.5 195 371 600 371 369 0 540-242 540-378S1091 -1 691 -1s-690 134-690 426z" stroke-width="2" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">Skontaktuj się z nami</h2>
                        <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                            Porozmawiajmy o automatyzacji procesów w Twojej firmie. Przygotujemy rozwiązanie specjalnie dla Ciebie. Bez zobowiązań, bez technicznego żargonu.
                        </p>
                        <dl class="mt-10 space-y-4 text-base text-gray-600 dark:text-gray-400">
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Email</span>
                                    <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </dt>
                                <dd><a href="mailto:kontakt@aisello.pl" class="hover:text-gray-900 dark:hover:text-white">kontakt@aisello.pl</a></dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <form action="{{ route('contact.submit') }}" method="POST" class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
                    @csrf
                    <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                        @if(session('success'))
                            <div class="mb-8 rounded-lg border-2 border-green-500 bg-green-50 p-6 shadow-lg dark:border-green-400 dark:bg-green-900/30">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-600 dark:text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h3 class="text-base font-semibold text-green-800 dark:text-green-200 mb-1">Wiadomość wysłana pomyślnie!</h3>
                                        <p class="text-sm text-green-700 dark:text-green-300">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div>
                                <label for="first-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Imię</label>
                                <div class="mt-2.5">
                                    <input required type="text" name="first_name" id="first-name" autocomplete="given-name" value="{{ old('first_name') }}" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-gray-800 dark:text-white dark:outline-gray-700 dark:focus:outline-indigo-500 @error('first_name') outline-red-500 focus:outline-red-500 @enderror">
                                </div>
                                @error('first_name')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Nazwisko</label>
                                <div class="mt-2.5">
                                    <input required type="text" name="last_name" id="last-name" autocomplete="family-name" value="{{ old('last_name') }}" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-gray-800 dark:text-white dark:outline-gray-700 dark:focus:outline-indigo-500 @error('last_name') outline-red-500 focus:outline-red-500 @enderror">
                                </div>
                                @error('last_name')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Email</label>
                                <div class="mt-2.5">
                                    <input required type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-gray-800 dark:text-white dark:outline-gray-700 dark:focus:outline-indigo-500 @error('email') outline-red-500 focus:outline-red-500 @enderror">
                                </div>
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">Wiadomość</label>
                                <div class="mt-2.5">
                                    <textarea required name="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-gray-800 dark:text-white dark:outline-gray-700 dark:focus:outline-indigo-500 @error('message') outline-red-500 focus:outline-red-500 @enderror">{{ old('message') }}</textarea>
                                </div>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <label for="math_answer" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">
                                    Zabezpieczenie przed spamem: Ile to {{ $math_question ?? '?' }}?
                                </label>
                                <div class="mt-2.5">
                                    <input required type="number" name="math_answer" id="math_answer" value="{{ old('math_answer') }}" placeholder="Wpisz wynik" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-gray-800 dark:text-white dark:outline-gray-700 dark:focus:outline-indigo-500 @error('math_answer') outline-red-500 focus:outline-red-500 @enderror">
                                </div>
                                @error('math_answer')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input required type="checkbox" name="privacy_policy" id="privacy_policy" value="1" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600 dark:border-gray-600 dark:bg-gray-700 dark:focus:ring-indigo-500 @error('privacy_policy') border-red-500 @enderror">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="privacy_policy" class="font-medium text-gray-900 dark:text-white">
                                            Zapoznałem się z <a href="{{ route('privacy') }}" target="_blank" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 underline">polityką prywatności</a> i wyrażam zgodę na przetwarzanie moich danych osobowych<span class="text-red-500">*</span>
                                        </label>
                                    </div>
                                </div>
                                @error('privacy_policy')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Wyślij wiadomość</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Sekcja: FAQ --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Najczęściej zadawane pytania</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Wszystko, co musisz wiedzieć
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Ile trwa wdrożenie automatyzacji?</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Czas wdrożenia zależy od złożoności projektu. Proste automatyzacje możemy wdrożyć w 1-2 tygodnie, bardziej zaawansowane projekty mogą zająć od 1 do 3 miesięcy. Wszystko zależy od Twoich potrzeb.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Jakie procesy możecie zautomatyzować?</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Automatyzujemy procesy z różnych obszarów: obsługę klientów, zarządzanie dokumentami, raporty, synchronizację danych między systemami, tworzenie faktur, zarządzanie magazynem i wiele innych. Przygotujemy rozwiązanie specjalnie dla Ciebie.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Ile kosztuje automatyzacja?</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Koszt zależy od złożoności projektu i liczby procesów do zautomatyzowania. Po konsultacji przygotujemy ofertę dopasowaną do Twoich potrzeb i budżetu. Skontaktuj się z nami, aby omówić szczegóły.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Czy potrzebuję wiedzy technicznej?</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Nie. Zajmujemy się całym procesem wdrożenia i konfiguracji. Przygotujemy rozwiązanie, które jest proste w obsłudze i nie wymaga wiedzy technicznej. Przeprowadzimy Cię przez cały proces.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>
