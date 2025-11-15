<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Automatyzacja dla Marketingu | Aisello</title>
    <meta name="description" content="Automatyzacja procesów marketingowych. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami. Oszczędzaj czas i zwiększ efektywność."/>
    <meta name="keywords" content="automatyzacja marketingu, automatyzacja kampanii, automatyzacja e-mail marketing, integracja narzędzi marketingowych, automatyzacja list mailingowych, automatyzacja raportów marketingowych, marketing automation"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('solutionMarketing') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('solutionMarketing') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('solutionMarketing') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('solutionMarketing') }}"/>
    <meta property="og:title" content="Automatyzacja dla Marketingu | Aisello"/>
    <meta property="og:description" content="Automatyzacja procesów marketingowych. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('solutionMarketing') }}"/>
    <meta name="twitter:title" content="Automatyzacja dla Marketingu | Aisello"/>
    <meta name="twitter:description" content="Automatyzacja procesów marketingowych. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Marketing Automation',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello',
                'url' => url('/')
            ],
            'description' => 'Automatyzacja procesów marketingowych. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami.',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Poland'
            ],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'Marketing Professionals'
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

{{--Header--}}
<div class="bg-white dark:bg-gray-900">

    @include('partials.navigation-solution')


    <main>
        {{-- Hero Section --}}
        <div class="relative">
            <div class="mx-auto max-w-7xl">
                <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block dark:fill-gray-900">
                        <polygon points="0,0 90,0 50,100 0,100" />
                    </svg>

                    <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                            <div class="hidden sm:mb-10 sm:flex">
                                <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:text-gray-400 dark:ring-white/10 dark:hover:ring-white/20">
                                    Automatyzacja dla działów marketingu. <a href="{{ route('howItWorks') }}" class="font-semibold whitespace-nowrap text-indigo-600 dark:text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Zobacz jak to działa <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl dark:text-white">Zwiększ efektywność kampanii i oszczędzaj czas.</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Automatyzujemy procesy marketingowe w Twojej firmie. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami. Mniej pracy ręcznej, więcej czasu na strategię. Przygotujemy rozwiązanie specjalnie dla Ciebie.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Rozpocznij</a>
                                <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 dark:bg-gray-800">
                <img src="{{ asset('assets/images/automatyzacja_marketingu.webp') }}" alt="" class="aspect-3/2 object-cover lg:aspect-auto lg:size-full" />
            </div>
        </div>



        {{-- Sekcja: Problemy działów marketingu --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Problemy w marketingu</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Pracujesz w marketingu? <br/> Te problemy znasz
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Działy marketingu mają swoje specyficzne wyzwania. Ręczne wysyłanie kampanii, brak czasu na organizację list mailingowych, problemy z synchronizacją danych. Oto najczęstsze bolączki, które rozwiązujemy w marketingu.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne wysyłanie kampanii e-mail
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Każda kampania wymaga ręcznego przygotowania, sprawdzenia listy odbiorców, wysłania i monitorowania. To zajmuje godziny, a kampanie wysyłają się z opóźnieniem.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na organizację list mailingowych
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno organizować listy mailingowe według zachowań, preferencji czy wartości. Musisz ręcznie analizować dane, tworzyć listy, przygotowywać spersonalizowane kampanie. To zajmuje dużo czasu.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z synchronizacją danych
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Twój CRM, system e-mail marketing, Google Analytics i narzędzia social media działają osobno. Musisz ręcznie przenosić dane między nimi. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne tworzenie raportów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Po każdej kampanii musisz ręcznie zbierać dane z różnych narzędzi, analizować wyniki, przygotowywać raporty. To zajmuje czas i prowadzi do błędów w analizie.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych kampanii powitalnych
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nowi klienci nie otrzymują automatycznych wiadomości powitalnych, serii e-maili czy ofert specjalnych. Musisz ręcznie wysyłać wiadomości, a często o tym zapominasz.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z obsługą leadów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nowe leady z formularzy, landing pages czy social media trafiają do różnych miejsc. Musisz ręcznie wprowadzać je do CRM, tagować, przypisywać do handlowców. Często tracisz leady.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych przypomnień o porzuconych koszykach
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Klienci porzucają koszyki, a Ty nie wysyłasz automatycznych przypomnień. Musisz ręcznie sprawdzać porzucone koszyki, przygotowywać wiadomości, wysyłać. To tracisz sprzedaż.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie listami mailingowymi
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać listami mailingowymi, usuwać nieaktywne adresy, aktualizować dane. Musisz ręcznie czyścić listy, sprawdzać błędy, aktualizować kontakty. To zajmuje czas.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z A/B testowaniem
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno testować różne wersje kampanii, porównywać wyniki, wybierać najlepsze warianty. Musisz ręcznie przygotowywać testy, analizować wyniki, podejmować decyzje. To zajmuje czas.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych raportów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nie masz czasu na regularne raportowanie wyników kampanii, konwersji, ROI. Musisz ręcznie zbierać dane z różnych narzędzi, przygotowywać raporty. To zajmuje czas i prowadzi do opóźnień.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z personalizacją treści
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno personalizować treści kampanii dla różnych segmentów klientów. Musisz ręcznie przygotowywać warianty, sprawdzać dane, dostosowywać komunikaty. To zajmuje dużo czasu.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak synchronizacji między kanałami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">E-mail, social media, reklamy i strona internetowa działają osobno. Trudno koordynować kampanie między kanałami, synchronizować komunikaty, analizować wyniki. To prowadzi do niespójności.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na strategię
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zajmujesz się wysyłaniem kampanii, przygotowywaniem raportów, synchronizacją danych zamiast strategią marketingową. Brakuje czasu na analizę, planowanie, optymalizację. Konkurencja wyprzedza Cię.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie reklamami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać reklamami w Google Ads, Facebook Ads czy innych platformach. Musisz ręcznie aktualizować budżety, sprawdzać wyniki, optymalizować kampanie. To zajmuje czas i prowadzi do błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych kampanii retargetingowych
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Klienci odwiedzają stronę, ale nie kupują. Nie wysyłasz automatycznych kampanii retargetingowych. Musisz ręcznie przygotowywać reklamy, targetować odbiorców, monitorować wyniki. To tracisz potencjalnych klientów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z analityką i śledzeniem
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno śledzić konwersje, źródła leadów, ścieżki klientów. Dane są rozproszone w różnych narzędziach. Musisz ręcznie łączyć informacje, analizować, wyciągać wnioski. To zajmuje czas i prowadzi do błędnych decyzji.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sekcja: Rozwiązania dla marketingu --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Rozwiązania dla marketingu</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Jak automatyzacja zmienia marketing
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy marketingowe. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami. Wszystko działa automatycznie.
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
                                Kampanie e-mail wysyłają się automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy spełnione są określone warunki, kampanie e-mail wysyłają się automatycznie do odpowiednich segmentów. Nie musisz ręcznie przygotowywać i wysyłać kampanii.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Organizacja list mailingowych działa automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie organizuje listy mailingowe według zachowań, preferencji i wartości. Nie musisz ręcznie analizować danych i tworzyć list.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Raporty generują się same
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Po każdej kampanii raporty z wynikami, konwersjami i ROI generują się automatycznie i wysyłają na e-mail. Nie musisz ręcznie zbierać danych i przygotowywać raportów.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Automatyczne kampanie powitalne
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowi klienci automatycznie otrzymują serię wiadomości powitalnych, oferty specjalne i informacje o produkcie. Nie musisz ręcznie wysyłać wiadomości.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Leady trafiają automatycznie do CRM
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowe leady z formularzy, landing pages i social media automatycznie trafiają do CRM, są tagowane i przypisywane do handlowców. Nie tracisz potencjalnych klientów.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Wszystkie narzędzia działają razem
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Twój CRM, system e-mail marketing, Google Analytics i narzędzia social media działają razem. Dane przepływają automatycznie między wszystkimi narzędziami.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Co można zautomatyzować w marketingu --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Przykłady automatyzacji</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Co możemy zautomatyzować w Twoim dziale marketingu
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Oto konkretne przykłady procesów, które automatyzujemy w działach marketingu. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami.
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
                            Automatyczne kampanie e-mail
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy spełnione są określone warunki (np. nowy klient, porzucony koszyk, rocznica), kampanie e-mail wysyłają się automatycznie do odpowiednich segmentów. Nie musisz ręcznie wysyłać kampanii.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Organizacja list mailingowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie organizuje listy mailingowe według zachowań (zakupy, odwiedziny), preferencji i wartości. Listy aktualizują się automatycznie. Nie musisz ręcznie analizować danych.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Raporty marketingowe
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie lub tygodniowo automatycznie generowane raporty z wyników kampanii, konwersji, ROI i źródeł leadów na podstawie danych z różnych narzędzi, wysyłane na e-mail. Wiesz, jak działają Twoje kampanie.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Kampanie powitalne dla nowych klientów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy nowy klient zapisuje się do newslettera lub dokonuje pierwszej zakupu, automatycznie otrzymuje serię wiadomości powitalnych, oferty specjalne i informacje o produkcie. Nie musisz ręcznie wysyłać wiadomości.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Obsługa leadów sprzedażowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowe leady z formularzy, landing pages, social media automatycznie trafiają do CRM, są tagowane według źródła i przypisywane do odpowiednich handlowców. Nie tracisz potencjalnych klientów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przypomnienia o porzuconych koszykach
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy klient porzuca koszyk, automatycznie otrzymuje serię przypomnień e-mail z produktami z koszyka. Nie musisz ręcznie sprawdzać porzuconych koszyków i wysyłać wiadomości.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Synchronizacja danych między narzędziami
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dane z CRM automatycznie synchronizują się z systemem e-mail marketing, Google Analytics, narzędziami social media. Nie musisz ręcznie przenosić informacji między narzędziami.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Czyszczenie list mailingowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie usuwa nieaktywne adresy e-mail, błędy i duplikaty z list mailingowych. Listy są zawsze aktualne. Nie musisz ręcznie czyścić kontaktów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Personalizacja treści kampanii
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie personalizuje treści kampanii na podstawie danych klienta (imię, preferencje, historia zakupów). Nie musisz ręcznie przygotowywać wariantów dla każdego segmentu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Kampanie retargetingowe
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy klient odwiedza stronę, ale nie kupuje, automatycznie trafia do listy retargetingowej i otrzymuje spersonalizowane reklamy. Nie musisz ręcznie przygotowywać kampanii retargetingowych.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            A/B testowanie kampanii
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie wysyła różne warianty kampanii do części odbiorców, porównuje wyniki i wybiera najlepszy wariant. Nie musisz ręcznie przygotowywać testów i analizować wyników.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Śledzenie konwersji i źródeł leadów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie śledzi konwersje, źródła leadów i ścieżki klientów, łącząc dane z różnych narzędzi. Raporty pokazują, które kanały przynoszą najlepsze wyniki.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne kampanie urodzinowe i rocznicowe
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Klienci automatycznie otrzymują spersonalizowane wiadomości z okazji urodzin, rocznicy pierwszej zakupu czy innych ważnych dat. Nie musisz ręcznie śledzić dat i wysyłać wiadomości.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Aktualizacja danych w systemach
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy dane klienta zmieniają się w jednym systemie, automatycznie aktualizują się we wszystkich powiązanych narzędziach. Nie musisz ręcznie wprowadzać zmian w każdym miejscu osobno.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div id="kontakt" class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Gotowy na automatyzację w swoim dziale marketingu?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Twojego działu marketingu. Kampanie e-mail, organizacja list mailingowych, raporty i synchronizacja danych między narzędziami — wszystko automatycznie.
                </p>
                <div class="mx-auto mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('contact') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-xs hover:bg-indigo-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Skontaktuj się z nami</a>
                    <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>
