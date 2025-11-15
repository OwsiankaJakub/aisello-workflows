<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Automatyzacja dla Księgowości | Aisello</title>
    <meta name="description" content="Automatyzacja procesów księgowych. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych. Oszczędzaj czas i zmniejsz błędy."/>
    <meta name="keywords" content="automatyzacja księgowości, automatyzacja faktur, automatyzacja dokumentów, integracja systemów księgowych, automatyzacja raportów finansowych, automatyzacja rozliczeń, accounting automation"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('solutionKsiegowosc') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('solutionKsiegowosc') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('solutionKsiegowosc') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('solutionKsiegowosc') }}"/>
    <meta property="og:title" content="Automatyzacja dla Księgowości | Aisello"/>
    <meta property="og:description" content="Automatyzacja procesów księgowych. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('solutionKsiegowosc') }}"/>
    <meta name="twitter:title" content="Automatyzacja dla Księgowości | Aisello"/>
    <meta name="twitter:description" content="Automatyzacja procesów księgowych. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Accounting Automation',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello',
                'url' => url('/')
            ],
            'description' => 'Automatyzacja procesów księgowych. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych.',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Poland'
            ],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'Accounting Professionals'
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
                                    Automatyzacja dla działów księgowości. <a href="{{ route('howItWorks') }}" class="font-semibold whitespace-nowrap text-indigo-600 dark:text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Zobacz jak to działa <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl dark:text-white">Oszczędzaj czas i zmniejsz błędy.</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Automatyzujemy procesy księgowe w Twojej firmie. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych. Mniej pracy ręcznej, więcej czasu na analizę. Przygotujemy rozwiązanie specjalnie dla Ciebie.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Rozpocznij</a>
                                <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 dark:bg-gray-800">
                <img src="{{ asset('assets/images/ksiegowa.webp') }}" alt="" class="aspect-3/2 object-cover lg:aspect-auto lg:size-full" />
            </div>
        </div>



        {{-- Sekcja: Problemy działów księgowości --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Problemy w księgowości</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Pracujesz w księgowości? <br/> Te problemy znasz
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Działy księgowości mają swoje specyficzne wyzwania. Ręczne wprowadzanie faktur, brak czasu na rozliczenia, problemy z synchronizacją danych. Oto najczęstsze bolączki, które rozwiązujemy w księgowości.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne wprowadzanie faktur
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Każda faktura wymaga ręcznego wprowadzenia danych do systemu księgowego. Kopiujesz informacje z dokumentów, sprawdzasz dane, wprowadzasz pozycje. To zajmuje godziny i prowadzi do błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na rozliczenia
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno znaleźć czas na rozliczenia, kontrolę dokumentów, weryfikację danych. Musisz ręcznie sprawdzać faktury, porównywać dane, korygować błędy. To prowadzi do opóźnień i nieprawidłowości.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne przetwarzanie dokumentów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Dokumenty przychodzą z różnych źródeł — maile, skany, pliki PDF. Musisz ręcznie je sortować, przetwarzać, wprowadzać do systemu. To zajmuje dużo czasu i zwiększa ryzyko błędów.</p>
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
                            <p class="flex-auto">Twój system księgowy, CRM, system e-mail i inne narzędzia działają osobno. Musisz ręcznie przenosić dane między nimi. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych przypomnień o płatnościach
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zapominasz o terminach płatności, przypomnieniach dla klientów, kontroli zaległości. Musisz ręcznie sprawdzać kalendarz, przypominać sobie o ważnych rzeczach. To prowadzi do opóźnień w płatnościach.</p>
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
                            <p class="flex-auto">Raporty finansowe, rozliczenia, zestawienia wymagają ręcznego przygotowania. Zbierasz dane z różnych miejsc, analizujesz, tworzysz dokumenty. To zajmuje czas i prowadzi do błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z kontrolą terminów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno śledzić terminy płatności, rozliczeń, deklaracji. Musisz ręcznie sprawdzać kalendarz, przypominać sobie o ważnych rzeczach. To prowadzi do opóźnień i kar.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne wprowadzanie danych do systemów księgowych
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Po każdym dokumencie, transakcji czy operacji musisz ręcznie wprowadzać dane do systemu księgowego. Kopiujesz informacje, aktualizujesz statusy, dodajesz notatki. To zajmuje czas i prowadzi do błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych powiadomień
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nie otrzymujesz automatycznych powiadomień o nowych dokumentach, terminach płatności, ważnych wydarzeniach. Musisz ręcznie sprawdzać system, kalendarz, maile. To prowadzi do opóźnień w reakcji.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z archiwizacją dokumentów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Faktury, umowy, dokumenty — wszystko w różnych miejscach. Trudno znaleźć potrzebny dokument, śledzić wersje, zarządzać archiwum. To zajmuje czas i prowadzi do chaosu.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne sprawdzanie zgodności
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno kontrolować zgodność dokumentów z przepisami, sprawdzać poprawność danych, weryfikować rozliczenia. Musisz ręcznie analizować dokumenty, porównywać dane. To prowadzi do błędów i nieprawidłowości.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na analizę finansową
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zajmujesz się wprowadzaniem danych, przetwarzaniem dokumentów, tworzeniem raportów zamiast analizą finansową. Brakuje czasu na analizę trendów, prognozowanie, optymalizację procesów. Trudno podejmować decyzje strategiczne.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z integracją systemów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Twój system księgowy, CRM, system e-mail i inne narzędzia nie komunikują się ze sobą. Musisz ręcznie przenosić dane między systemami. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie dokumentami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Faktury, umowy, dokumenty — wszystko w różnych miejscach. Trudno znaleźć potrzebny dokument, śledzić wersje, zarządzać archiwum. To zajmuje czas i prowadzi do chaosu.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych rozliczeń
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Rozliczenia, zestawienia, raporty wymagają ręcznego przygotowania. Zbierasz dane z różnych miejsc, analizujesz, tworzysz dokumenty. To zajmuje czas i prowadzi do błędów.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sekcja: Rozwiązania dla księgowości --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Rozwiązania dla księgowości</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Jak automatyzacja zmienia księgowość
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy księgowe. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych. Wszystko działa automatycznie.
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
                                Faktury tworzą się automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Faktury tworzą się automatycznie na podstawie zamówień, umów czy transakcji. System sprawdza dane, przygotowuje dokumenty i wysyła do klientów. Nie musisz ręcznie tworzyć faktur.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Dokumenty przetwarzają się same
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dokumenty z maili, skanów i plików PDF automatycznie trafiają do systemu, są przetwarzane i wprowadzane do księgowości. Nie musisz ręcznie sortować i przetwarzać dokumentów.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Automatyczne przypomnienia o płatnościach
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Przypomnienia o terminach płatności, kontroli zaległości i ważnych terminach wysyłają się automatycznie. Nie zapomnisz o ważnych rzeczach.</dd>
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
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie automatycznie generowane raporty finansowe, rozliczenia i zestawienia wysyłane na e-mail. Wiesz, jak działa Twoja księgowość.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Automatyczna archiwizacja dokumentów
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Faktury, umowy, dokumenty automatycznie trafiają we właściwe miejsce w systemie — posegregowane i opisane. Nie musisz ręcznie zarządzać archiwum.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Wszystkie systemy działają razem
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Twój system księgowy, CRM, system e-mail i inne narzędzia działają razem. Dane przepływają automatycznie między wszystkimi systemami.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Co można zautomatyzować w księgowości --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Przykłady automatyzacji</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Co możemy zautomatyzować w Twoim dziale księgowości
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Oto konkretne przykłady procesów, które automatyzujemy w działach księgowości. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych.
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
                            Tworzenie faktur i dokumentów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Faktury, umowy i protokoły generują się automatycznie po wykonaniu konkretnej akcji. System sprawdza dane, przygotowuje dokumenty i wysyła do klientów. Nie musisz ręcznie tworzyć faktur.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przetwarzanie dokumentów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dokumenty z maili, skanów i plików PDF automatycznie trafiają do systemu, są przetwarzane i wprowadzane do księgowości. Nie musisz ręcznie sortować i przetwarzać dokumentów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Raporty finansowe i analiz
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie automatycznie generowane raporty finansowe, rozliczenia i zestawienia wysyłane na e-mail. Wiesz, jak działa Twoja księgowość.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Powiadomienia i przypomnienia
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Przypomnienia o płatnościach, terminach rozliczeń, deklaracjach i deadline'ach wysyłają się automatycznie. Nie zapomnisz o ważnych rzeczach.</dd>
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
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dane z systemu księgowego automatycznie synchronizują się z CRM, systemem e-mail i innymi narzędziami. Nie musisz ręcznie przenosić informacji między systemami.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Aktualizacja danych w systemach księgowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy dane zmieniają się w jednym systemie, automatycznie aktualizują się we wszystkich powiązanych narzędziach. Nie musisz ręcznie wprowadzać zmian w każdym miejscu osobno.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przetwarzanie e-maili
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">AI odczytuje wiadomości e-mail, rozpoznaje dokumenty (faktury, umowy, rachunki) i uruchamia odpowiedni proces. Nie musisz ręcznie sortować maili.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne rozliczenia
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Rozliczenia, zestawienia i raporty przygotowują się automatycznie na podstawie danych z systemu. Nie musisz ręcznie zbierać i analizować danych.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Kontrola terminów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie kontroluje terminy płatności, rozliczeń, deklaracji i wysyła powiadomienia. Nie musisz ręcznie sprawdzać kalendarza.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Alerty o ważnych wydarzeniach
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie wysyła powiadomienia o nowych dokumentach, terminach płatności, ważnych terminach i zagrożeniach. Możesz szybko zareagować.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Archiwizacja dokumentów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Faktury, umowy, dokumenty automatycznie trafiają we właściwe miejsce w systemie — posegregowane i opisane. Nie musisz ręcznie zarządzać archiwum.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Kontrola zgodności
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie kontroluje zgodność dokumentów z przepisami, sprawdza poprawność danych i weryfikuje rozliczenia. Nie musisz ręcznie analizować dokumentów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyzacja procesów biurowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Tworzenie, aktualizacja i porządkowanie informacji bez ręcznej pracy. Dane przepływają automatycznie między systemami. Mniej błędów, więcej czasu na analizę.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div id="kontakt" class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Gotowy na automatyzację w swoim dziale księgowości?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Twojego działu księgowości. Tworzenie faktur, przetwarzanie dokumentów, raporty i synchronizacja danych — wszystko automatycznie.
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

