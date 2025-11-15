<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Automatyzacja dla IT | Aisello</title>
    <meta name="description" content="Automatyzacja procesów IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty. Oszczędzaj czas i zwiększ efektywność działu IT."/>
    <meta name="keywords" content="automatyzacja IT, automatyzacja zgłoszeń, automatyzacja monitoringu, integracja systemów IT, automatyzacja raportów IT, automatyzacja wdrożeń, IT automation"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('solutionIt') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('solutionIt') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('solutionIt') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('solutionIt') }}"/>
    <meta property="og:title" content="Automatyzacja dla IT | Aisello"/>
    <meta property="og:description" content="Automatyzacja procesów IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('solutionIt') }}"/>
    <meta name="twitter:title" content="Automatyzacja dla IT | Aisello"/>
    <meta name="twitter:description" content="Automatyzacja procesów IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'IT Automation',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello',
                'url' => url('/')
            ],
            'description' => 'Automatyzacja procesów IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty.',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Poland'
            ],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'IT Professionals'
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
                                    Automatyzacja dla działów IT. <a href="{{ route('howItWorks') }}" class="font-semibold whitespace-nowrap text-indigo-600 dark:text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Zobacz jak to działa <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl dark:text-white">Skup się na rozwoju, nie na rutynie.</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Automatyzujemy procesy IT w Twojej firmie. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty. Mniej pracy ręcznej, więcej czasu na innowacje. Przygotujemy rozwiązanie specjalnie dla Ciebie.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Rozpocznij</a>
                                <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 dark:bg-gray-800">
                <img src="{{ asset('assets/images/it.webp') }}" alt="" class="aspect-3/2 object-cover lg:aspect-auto lg:size-full" />
            </div>
        </div>



        {{-- Sekcja: Problemy działów IT --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Problemy w IT</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Pracujesz w IT? <br/> Te problemy znasz
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Działy IT mają swoje specyficzne wyzwania. Ręczne zarządzanie zgłoszeniami, brak czasu na rozwój, problemy z monitorowaniem systemów. Oto najczęstsze bolączki, które rozwiązujemy w IT.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie zgłoszeniami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Każde zgłoszenie wymaga ręcznego przypisania, weryfikacji i obsługi. Kopiujesz informacje, sprawdzasz dane, aktualizujesz statusy. To zajmuje godziny i prowadzi do opóźnień w reakcji.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na rozwój
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno znaleźć czas na rozwój, optymalizację, wdrażanie nowych rozwiązań. Zajmujesz się obsługą zgłoszeń, naprawą błędów, rutyną. To prowadzi do stagnacji i utraconych możliwości.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z monitorowaniem systemów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno monitorować wszystkie systemy, śledzić wydajność, wykrywać problemy. Musisz ręcznie sprawdzać logi, analizować dane, reagować na awarie. To prowadzi do opóźnień i niezadowolonych użytkowników.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne wdrażanie zmian
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Każda zmiana wymaga ręcznego wdrożenia, testowania i weryfikacji. Kopiujesz pliki, aktualizujesz konfiguracje, sprawdzasz działanie. To zajmuje czas i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych backupów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać backupami, sprawdzać ich poprawność, przywracać dane. Musisz ręcznie planować, wykonywać i weryfikować kopie zapasowe. To prowadzi do ryzyka utraty danych.</p>
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
                            <p class="flex-auto">Twój system zgłoszeń, system monitoringu, system e-mail i inne narzędzia działają osobno. Musisz ręcznie przenosić dane między nimi. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie dostępami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać dostępami użytkowników, kontrolować uprawnienia, śledzić zmiany. Musisz ręcznie aktualizować konta, sprawdzać uprawnienia, usuwać nieaktywne konta. To zajmuje czas i zwiększa ryzyko bezpieczeństwa.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak raportów IT
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nie masz czasu na analizę efektywności, czasu reakcji, liczby zgłoszeń czy kosztów IT. Dane są rozproszone. Trudno podejmować decyzje o optymalizacji procesów IT.</p>
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
                            <p class="flex-auto">Twój system zgłoszeń, system monitoringu, system e-mail i inne narzędzia nie komunikują się ze sobą. Musisz ręcznie przenosić dane między systemami. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie dokumentacją
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Dokumentacja techniczna, instrukcje, procedury — wszystko w różnych miejscach. Trudno znaleźć potrzebny dokument, śledzić wersje, zarządzać archiwum. To zajmuje czas i prowadzi do chaosu.</p>
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
                            <p class="flex-auto">Nie otrzymujesz automatycznych powiadomień o nowych zgłoszeniach, awariach, ważnych wydarzeniach. Musisz ręcznie sprawdzać system, logi, maile. To prowadzi do opóźnień w reakcji.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z zarządzaniem infrastrukturą
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać infrastrukturą, kontrolować zasoby, optymalizować koszty. Musisz ręcznie sprawdzać serwery, analizować dane, podejmować decyzje. To prowadzi do nieefektywności i wysokich kosztów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie aktualizacjami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać aktualizacjami, sprawdzać dostępność, wdrażać zmiany. Musisz ręcznie planować, testować i wdrażać aktualizacje. To zajmuje czas i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na optymalizację
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zajmujesz się obsługą zgłoszeń, naprawą błędów, rutyną zamiast optymalizacją. Brakuje czasu na analizę wydajności, wdrażanie ulepszeń, przygotowanie rozwiązań. Trudno rozwijać infrastrukturę.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z zarządzaniem projektami IT
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno zarządzać projektami IT, śledzić postępy, koordynować zadania. Musisz ręcznie aktualizować statusy, przypominać sobie o ważnych rzeczach. To prowadzi do opóźnień i niezadowolonych klientów.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sekcja: Rozwiązania dla IT --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Rozwiązania dla IT</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Jak automatyzacja zmienia IT
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty. Wszystko działa automatycznie.
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
                                Zgłoszenia obsługują się automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowe zgłoszenia automatycznie trafiają do systemu, są kategoryzowane i przypisywane do odpowiednich specjalistów. Nie musisz ręcznie zarządzać zgłoszeniami.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Systemy monitorują się same
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie monitoruje wszystkie systemy, wykrywa problemy i wysyła powiadomienia. Nie musisz ręcznie sprawdzać logów i analizować danych.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Zmiany wdrażają się automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Zmiany wdrażają się automatycznie po testach i weryfikacji. System aktualizuje konfiguracje, sprawdza działanie. Nie musisz ręcznie wdrażać zmian.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Backup wykonuje się automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Backupy wykonują się automatycznie według harmonogramu, są weryfikowane i archiwizowane. Nie musisz ręcznie zarządzać kopiami zapasowymi.</dd>
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
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie automatycznie generowane raporty z zgłoszeń, czasu reakcji, wydajności systemów i kosztów IT wysyłane na e-mail. Wiesz, jak działa Twoje IT.</dd>
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
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Twój system zgłoszeń, system monitoringu, system e-mail i inne narzędzia działają razem. Dane przepływają automatycznie między wszystkimi systemami.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Co można zautomatyzować w IT --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Przykłady automatyzacji</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Co możemy zautomatyzować w Twoim dziale IT
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Oto konkretne przykłady procesów, które automatyzujemy w działach IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty.
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
                            Obsługa zgłoszeń IT
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowe zgłoszenia automatycznie trafiają do systemu, są kategoryzowane według typu i przypisywane do odpowiednich specjalistów. Nie musisz ręcznie zarządzać zgłoszeniami.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne odpowiedzi i potwierdzenia
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie odpowiada użytkownikom, potwierdza otrzymanie zgłoszenia, informuje o statusie. Użytkownik od razu wie, że jego zgłoszenie zostało odebrane.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Monitorowanie systemów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie monitoruje wszystkie systemy, wykrywa problemy, analizuje wydajność i wysyła powiadomienia. Nie musisz ręcznie sprawdzać logów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Wdrażanie zmian
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Zmiany wdrażają się automatycznie po testach i weryfikacji. System aktualizuje konfiguracje, sprawdza działanie. Nie musisz ręcznie wdrażać zmian.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Backup i archiwizacja
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Backupy wykonują się automatycznie według harmonogramu, są weryfikowane i archiwizowane. Nie musisz ręcznie zarządzać kopiami zapasowymi.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Powiadomienia i alerty
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Przypomnienia o awariach, ważnych wydarzeniach, zadaniach i deadline'ach wysyłają się automatycznie. Nie zapomnisz o ważnych rzeczach.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Raporty IT i analiz
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie automatycznie generowane raporty z zgłoszeń, czasu reakcji, wydajności systemów i kosztów IT wysyłane na e-mail. Wiesz, jak działa Twoje IT.</dd>
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
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dane z systemu zgłoszeń automatycznie synchronizują się z systemem monitoringu, e-mail i innymi narzędziami. Nie musisz ręcznie przenosić informacji między systemami.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Zarządzanie dostępami
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie zarządza dostępami użytkowników, kontroluje uprawnienia i usuwa nieaktywne konta. Nie musisz ręcznie aktualizować kont.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przetwarzanie logów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie przetwarza logi, wykrywa błędy, analizuje wzorce i wysyła powiadomienia. Nie musisz ręcznie analizować logów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Zarządzanie aktualizacjami
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie zarządza aktualizacjami, sprawdza dostępność, testuje i wdraża zmiany. Nie musisz ręcznie planować aktualizacji.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Archiwizacja dokumentacji
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dokumentacja techniczna, instrukcje, procedury automatycznie trafiają we właściwe miejsce w systemie — posegregowane i opisane. Nie musisz ręcznie zarządzać archiwum.</dd>
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
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Tworzenie, aktualizacja i porządkowanie informacji bez ręcznej pracy. Dane przepływają automatycznie między systemami. Mniej błędów, więcej czasu na rozwój.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div id="kontakt" class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Gotowy na automatyzację w swoim dziale IT?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Twojego działu IT. Zarządzanie zgłoszeniami, monitorowanie systemów, wdrażanie zmian i raporty — wszystko automatycznie.
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

