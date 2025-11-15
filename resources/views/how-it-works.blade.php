<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Jak to działa | Aisello - Proces Automatyzacji</title>
    <meta name="description" content="Poznaj proces automatyzacji procesów biznesowych w Aisello. Od konsultacji przez implementację do wsparcia. Proste, przejrzyste, indywidualne."/>
    <meta name="keywords" content="proces automatyzacji, jak działa automatyzacja, wdrożenie automatyzacji, konsultacja automatyzacji"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('howItWorks') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('howItWorks') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('howItWorks') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('howItWorks') }}"/>
    <meta property="og:title" content="Jak to działa | Aisello - Proces Automatyzacji"/>
    <meta property="og:description" content="Poznaj proces automatyzacji procesów biznesowych w Aisello. Od konsultacji przez implementację do wsparcia. Proste, przejrzyste, indywidualne."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('howItWorks') }}"/>
    <meta name="twitter:title" content="Jak to działa | Aisello - Proces Automatyzacji"/>
    <meta name="twitter:description" content="Poznaj proces automatyzacji procesów biznesowych w Aisello. Od konsultacji przez implementację do wsparcia. Proste, przejrzyste, indywidualne."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'HowTo',
            'name' => 'Jak działa automatyzacja procesów w Aisello',
            'description' => 'Proces automatyzacji procesów biznesowych w Aisello. Od konsultacji przez implementację do wsparcia.',
            'step' => [
                [
                    '@type' => 'HowToStep',
                    'name' => 'Konsultacja',
                    'text' => 'Rozmawiamy o Twoich potrzebach i procesach. Analizujemy, co można zautomatyzować i jakie będą korzyści.'
                ],
                [
                    '@type' => 'HowToStep',
                    'name' => 'Projektowanie',
                    'text' => 'Przygotowujemy szczegółowy plan automatyzacji. Projektujemy rozwiązanie dopasowane do Twoich potrzeb.'
                ],
                [
                    '@type' => 'HowToStep',
                    'name' => 'Implementacja',
                    'text' => 'Wdrażamy automatyzację. Testujemy rozwiązanie i wprowadzamy poprawki.'
                ],
                [
                    '@type' => 'HowToStep',
                    'name' => 'Szkolenie',
                    'text' => 'Przeszkalamy Twój zespół. Pokazujemy, jak korzystać z nowych rozwiązań.'
                ],
                [
                    '@type' => 'HowToStep',
                    'name' => 'Wsparcie',
                    'text' => 'Jesteśmy dostępni po wdrożeniu. Pomagamy, gdy potrzebujesz wsparcia.'
                ]
            ]
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
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0 dark:bg-gray-900">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-lg">
                            <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Nasz proces</p>
                            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Jak działa automatyzacja?</h1>
                            <p class="mt-6 text-xl text-gray-700 dark:text-gray-300">
                                Proste, przejrzyste kroki od pierwszej rozmowy do pełnej automatyzacji. Bez technicznego żargonu, bez ukrytych kosztów.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sekcja: Proces krok po kroku --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Proces automatyzacji</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    5 kroków do automatyzacji
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Od konsultacji przez implementację do wsparcia. Przygotujemy rozwiązanie specjalnie dla Ciebie.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <ol class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-5">
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            1
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Konsultacja</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Rozmawiamy o Twoich potrzebach i procesach. Analizujemy, co można zautomatyzować i jakie będą korzyści. Bez zobowiązań.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            2
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Projektowanie</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Przygotowujemy szczegółowy plan automatyzacji. Projektujemy rozwiązanie dopasowane do Twoich potrzeb i budżetu.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            3
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Implementacja</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Wdrażamy automatyzację. Testujemy rozwiązanie, wprowadzamy poprawki i upewniamy się, że wszystko działa prawidłowo.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            4
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Szkolenie</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Przeszkalamy Twój zespół. Pokazujemy, jak korzystać z nowych rozwiązań. Proste, zrozumiałe instrukcje.
                        </p>
                    </li>
                    <li class="flex flex-col">
                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-600 text-white text-xl font-bold">
                            5
                        </div>
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">Wsparcie</h3>
                        <p class="mt-4 text-base text-gray-600 dark:text-gray-400">
                            Jesteśmy dostępni po wdrożeniu. Pomagamy, gdy potrzebujesz wsparcia. Rozwiązujemy problemy i wdrażamy poprawki.
                        </p>
                    </li>
                </ol>
            </div>
        </div>

        {{-- Sekcja: Korzyści --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Dlaczego Aisello?</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Co nas wyróżnia
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Podchodzimy indywidualnie do każdego klienta. Przygotujemy rozwiązanie specjalnie dla Ciebie.
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Indywidualne podejście
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nie oferujemy gotowych rozwiązań. Każdy projekt jest przygotowywany specjalnie dla Ciebie, dopasowany do Twoich potrzeb i budżetu.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Bez technicznego żargonu
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Rozmawiamy prostym językiem. Wyjaśniamy wszystko krok po kroku. Nie musisz znać się na technologii.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Szybkie wdrożenie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Proste automatyzacje możemy wdrożyć w 1-2 tygodnie. Zaczynasz oszczędzać czas szybko.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Wsparcie po wdrożeniu
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Jesteśmy dostępni po wdrożeniu. Pomagamy, gdy potrzebujesz wsparcia. Nie zostawiamy Cię samego.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: FAQ --}}
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
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Ile trwa konsultacja?</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Pierwsza konsultacja trwa zwykle 30-60 minut. Rozmawiamy o Twoich potrzebach, analizujemy procesy i proponujemy rozwiązania. Konsultacja jest darmowa i bez zobowiązań.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Czy muszę znać się na technologii?</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Nie. Zajmujemy się całym procesem wdrożenia i konfiguracji. Przygotujemy rozwiązanie, które jest proste w obsłudze i nie wymaga wiedzy technicznej.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Czy mogę zmienić coś po wdrożeniu?</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Tak. Jesteśmy dostępni po wdrożeniu. Możesz wprowadzać zmiany, dodawać nowe funkcje i optymalizować rozwiązanie. Jesteśmy elastyczni.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">Jak wygląda wsparcie po wdrożeniu?</dt>
                        <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Oferujemy różne formy wsparcia - od mailowego po telefon. Rozwiązujemy problemy, wprowadzamy poprawki i pomagamy w rozwoju rozwiązania. Jesteśmy dostępni, gdy potrzebujesz.</dd>
                    </div>
                </dl>
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
                    <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-white">Wróć do strony głównej <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>

