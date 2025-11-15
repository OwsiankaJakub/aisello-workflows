<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Usługi | Aisello - Automatyzacja i Konsultacje</title>
    <meta name="description" content="Oferujemy automatyzację procesów biznesowych i konsultacje. Przygotujemy rozwiązanie specjalnie dla Twojej firmy. Oszczędzaj czas i pieniądze."/>
    <meta name="keywords" content="automatyzacja procesów, konsultacje automatyzacji, wdrożenie automatyzacji, integracja systemów"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('services') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('services') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('services') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('services') }}"/>
    <meta property="og:title" content="Usługi | Aisello - Automatyzacja i Konsultacje"/>
    <meta property="og:description" content="Oferujemy automatyzację procesów biznesowych i konsultacje. Przygotujemy rozwiązanie specjalnie dla Twojej firmy."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('services') }}"/>
    <meta name="twitter:title" content="Usługi | Aisello - Automatyzacja i Konsultacje"/>
    <meta name="twitter:description" content="Oferujemy automatyzację procesów biznesowych i konsultacje. Przygotujemy rozwiązanie specjalnie dla Twojej firmy."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Usługi Aisello',
            'description' => 'Automatyzacja procesów biznesowych i konsultacje. Przygotujemy rozwiązanie specjalnie dla Twojej firmy.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello'
            ],
            'serviceType' => ['Automatyzacja procesów', 'Konsultacje automatyzacji']
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
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8 dark:bg-gray-900">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <div class="text-center">
                    <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Usługi jakie oferujemy</h1>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy w Twojej firmie i oferujemy konsultacje. Przygotujemy rozwiązanie specjalnie dla Ciebie. Oszczędzaj czas i pieniądze.
                    </p>
                </div>
            </div>
        </div>

        {{-- Sekcja: Automatyzacja --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Automatyzacja</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Automatyzacja procesów biznesowych
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Automatyzujemy procesy w Twojej firmie, aby oszczędzać czas i pieniądze. Przygotujemy rozwiązanie specjalnie dla Ciebie.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div>
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Integracja systemów</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Łączymy Twoje systemy - CRM, ERP, sklepy internetowe, narzędzia marketingowe. Wszystko działa razem automatycznie.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Automatyzacja procesów</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Automatyzujemy powtarzalne zadania - faktury, raporty, powiadomienia, synchronizacja danych. Mniej pracy ręcznej.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Wdrożenie i wsparcie</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Wdrażamy rozwiązanie i przeszkalamy Twój zespół. Jesteśmy dostępni po wdrożeniu, gdy potrzebujesz wsparcia.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: Konsultacje --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Konsultacje</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Konsultacje automatyzacji
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Pomagamy zidentyfikować procesy do automatyzacji i przygotować plan działania. Bez zobowiązań.
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Analiza procesów</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Analizujemy Twoje procesy i identyfikujemy obszary do automatyzacji. Pokazujemy, gdzie możesz oszczędzić czas i pieniądze.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Plan automatyzacji</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Przygotowujemy szczegółowy plan automatyzacji. Pokazujemy, co można zautomatyzować i jakie będą korzyści.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Rekomendacje</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Rekomendujemy najlepsze narzędzia i rozwiązania dla Twojej firmy. Wybieramy to, co najlepiej pasuje do Twoich potrzeb.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Jak to działa --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Proces</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Jak pracujemy
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <ol class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            1
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Konsultacja</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Rozmawiamy o Twoich potrzebach. Analizujemy procesy i proponujemy rozwiązania.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            2
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Projektowanie</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Przygotowujemy szczegółowy plan. Projektujemy rozwiązanie dopasowane do Twoich potrzeb.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            3
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Wdrożenie</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Wdrażamy automatyzację. Testujemy rozwiązanie i wprowadzamy poprawki.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            4
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Wsparcie</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Przeszkalamy zespół i jesteśmy dostępni po wdrożeniu. Pomagamy, gdy potrzebujesz.
                        </p>
                    </li>
                </ol>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Gotowy na automatyzację?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Ciebie. Bez zobowiązań.
                </p>
                <div class="mx-auto mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('contact') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-xs hover:bg-indigo-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Skontaktuj się z nami</a>
                    <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-white">Jak to działa <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>

