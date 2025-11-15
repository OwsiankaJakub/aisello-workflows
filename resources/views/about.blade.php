<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>O nas | Aisello - Automatyzacja Procesów Biznesowych</title>
    <meta name="description" content="Aisello to firma specjalizująca się w automatyzacji procesów biznesowych. Pomagamy małym i średnim firmom oszczędzać czas i pieniądze dzięki automatyzacji."/>
    <meta name="keywords" content="o nas Aisello, automatyzacja procesów, firma automatyzacji, n8n, no-code automation"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('about') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('about') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('about') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('about') }}"/>
    <meta property="og:title" content="O nas | Aisello - Automatyzacja Procesów Biznesowych"/>
    <meta property="og:description" content="Aisello to firma specjalizująca się w automatyzacji procesów biznesowych. Pomagamy firmom oszczędzać czas i pieniądze."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('about') }}"/>
    <meta name="twitter:title" content="O nas | Aisello - Automatyzacja Procesów Biznesowych"/>
    <meta name="twitter:description" content="Aisello to firma specjalizująca się w automatyzacji procesów biznesowych. Pomagamy firmom oszczędzać czas i pieniądze."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'name' => 'O nas - Aisello',
            'description' => 'Aisello to firma specjalizująca się w automatyzacji procesów biznesowych. Pomagamy małym i średnim firmom oszczędzać czas i pieniądze dzięki automatyzacji.',
            'url' => route('about')
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
                    <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Pomagamy firmom rozwijać się dzięki automatyzacji</h1>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Aisello to firma specjalizująca się w automatyzacji procesów biznesowych. Naszym celem jest pomóc każdej firmie oszczędzać czas, zmniejszać koszty i rozwijać się dzięki automatyzacji.
                    </p>
                </div>
            </div>
        </div>

        {{-- Sekcja: Nasza misja --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Nasza misja</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Automatyzacja dla każdej firmy
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Wierzymy, że automatyzacja procesów nie jest tylko dla dużych korporacji. Każda firma, niezależnie od wielkości czy branży, zasługuje na narzędzia, które pomagają oszczędzać czas i pieniądze.
                </p>
            </div>
        </div>

        {{-- Sekcja: Dla kogo jesteśmy --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Dla kogo jesteśmy</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Pomagamy firmom każdej wielkości
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Małe i średnie firmy</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Lokalne firmy, które mają dużo powtarzalnych zadań, brakuje im czasu i ludzi. Chcą pracować szybciej i taniej bez wiedzy technicznej.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Firmy z wieloma narzędziami</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Firmy używające CRM, ERP, systemów magazynowych, które chcą zintegrować wszystkie narzędzia i automatycznie synchronizować dane.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Rozwijające się firmy</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">E-commerce, start-upy, lokalne firmy, które chcą skalować swój biznes i potrzebują systemów rosnących razem z nimi.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Jakie problemy rozwiązujemy --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Jakie problemy rozwiązujemy</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Rozwiązania dla codziennych wyzwań
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
                            Ręczne wprowadzanie danych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Automatyzujemy przepisywanie danych między systemami - wszystko dzieje się automatycznie.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Chaos w procesach
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Wprowadzamy porządek i standaryzację - procesy stają się przewidywalne i powtarzalne.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Powtarzalne czynności
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Automatyzujemy nudne, powtarzalne zadania - Twój zespół może skupić się na ważniejszych sprawach.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Wysokie koszty obsługi
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Zmniejszamy koszty obsługi codziennych zadań - oszczędzasz czas i pieniądze.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: Dlaczego Aisello --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Dlaczego Aisello</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Co nas wyróżnia
                    </p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">No-code i programowanie</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Łączymy no-code (tanio i szybko) z programowaniem (złożone rozwiązania). Wybieramy najlepsze narzędzia dla Twoich potrzeb.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Każda branża</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Pracujemy z firmami z każdej branży - e-commerce, handel, usługi, logistyka, produkcja, marketing i wiele innych.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">Prosty język</dt>
                            <dd class="mt-4 text-base text-gray-600 dark:text-gray-400">Rozumiemy realne problemy operacyjne firm. Klient nie musi znać się na technologiach - my wszystko zrobimy.</dd>
                        </div>
                    </dl>
                </div>
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
                    <a href="{{ route('solutions') }}" class="text-sm/6 font-semibold text-white">Zobacz rozwiązania <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>

