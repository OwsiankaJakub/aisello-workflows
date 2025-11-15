<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Automatyzacja dla Logistyki | Aisello</title>
    <meta name="description" content="Automatyzacja procesów w firmach logistycznych. Zarządzanie transportem, śledzenie przesyłek, optymalizacja tras i koordynacja dostaw. Oszczędzaj czas i pieniądze."/>
    <meta name="keywords" content="automatyzacja logistyki, automatyzacja transportu, automatyzacja magazynów, integracja systemów logistycznych, automatyzacja dostaw, śledzenie przesyłek, zarządzanie flotą, optymalizacja tras"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('solutionLogistyka') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('solutionLogistyka') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('solutionLogistyka') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('solutionLogistyka') }}"/>
    <meta property="og:title" content="Automatyzacja dla Logistyki | Aisello"/>
    <meta property="og:description" content="Automatyzacja procesów w firmach logistycznych. Zarządzanie transportem, śledzenie przesyłek, optymalizacja tras i koordynacja dostaw. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('solutionLogistyka') }}"/>
    <meta name="twitter:title" content="Automatyzacja dla Logistyki | Aisello"/>
    <meta name="twitter:description" content="Automatyzacja procesów w firmach logistycznych. Zarządzanie transportem, śledzenie przesyłek, optymalizacja tras i koordynacja dostaw. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Logistics Automation',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello',
                'url' => url('/')
            ],
            'description' => 'Automatyzacja procesów w firmach logistycznych. Zarządzanie transportem, śledzenie przesyłek, optymalizacja tras i koordynacja dostaw.',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Poland'
            ],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'Logistics Business Owners'
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
                                    Automatyzacja dla firm logistycznych. <a href="{{ route('howItWorks') }}" class="font-semibold whitespace-nowrap text-indigo-600 dark:text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Zobacz jak to działa <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl dark:text-white">Przyspiesz dostawy i zoptymalizuj koszty.</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Automatyzujemy procesy w Twojej firmie logistycznej. Śledzenie przesyłek, optymalizacja tras, koordynacja dostaw i zarządzanie flotą. Mniej błędów, szybsze dostawy, niższe koszty. Przygotujemy rozwiązanie specjalnie dla Ciebie.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Rozpocznij</a>
                                <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 dark:bg-gray-800">
                <img src="{{ asset('assets/images/logistyka.webp') }}" alt="" class="aspect-3/2 object-cover lg:aspect-auto lg:size-full" />
            </div>
        </div>



        {{-- Sekcja: Problemy firm logistycznych --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Problemy w logistyce</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Prowadzisz firmę logistyczną? <br/> Te problemy znasz
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Firmy logistyczne mają swoje specyficzne wyzwania. Ręczne śledzenie przesyłek, brak optymalizacji tras, problemy z koordynacją dostaw. Oto najczęstsze bolączki, które rozwiązujemy w branży logistycznej.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne śledzenie przesyłek
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Klienci dzwonią i pytają o status przesyłki. Musisz ręcznie sprawdzać w systemie, dzwonić do kierowców, informować klienta. To zajmuje czas i frustruje klientów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak optymalizacji tras
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Kierowcy jeżdżą nieoptymalnymi trasami, tracą czas i paliwo. Musisz ręcznie planować trasy, sprawdzać mapy, koordynować dostawy. To zwiększa koszty i wydłuża czas dostaw.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z koordynacją dostaw
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno koordynować wiele dostaw jednocześnie. Musisz ręcznie przypisywać kierowców, sprawdzać dostępność pojazdów, planować harmonogramy. To prowadzi do opóźnień i błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne tworzenie dokumentów transportowych
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Po każdej dostawie musisz ręcznie stworzyć list przewozowy, potwierdzenie odbioru, fakturę. Kopiujesz dane z jednego systemu do drugiego. To się powtarza dziesiątki razy dziennie.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak informacji o lokalizacji pojazdów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nie wiesz, gdzie są Twoje pojazdy. Musisz dzwonić do kierowców, sprawdzać status, szacować czas przyjazdu. Klienci pytają o dostawę, a Ty nie możesz podać dokładnej informacji.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z zarządzaniem flotą
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno śledzić, które pojazdy są dostępne, które w trasie, które wymagają serwisu. Musisz ręcznie aktualizować statusy, planować przeglądy, zarządzać zasobami. To prowadzi do nieefektywności.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak powiadomień o statusie dostaw
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Klienci nie wiedzą, kiedy będzie dostawa. Musisz ręcznie informować o statusie, dzwonić do klientów, koordynować odbiory. To frustruje klientów i zajmuje Twój czas.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne zarządzanie magazynem
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno śledzić stany magazynowe, lokalizację produktów, terminy wysyłek. Musisz ręcznie aktualizować dane, sprawdzać dostępność, planować kompletacje. To prowadzi do błędów i opóźnień.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z fakturowaniem dostaw
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Po każdej dostawie musisz ręcznie stworzyć fakturę, sprawdzić dane, wysłać do klienta. To zajmuje czas i prowadzi do błędów. Trudno śledzić, które dostawy są opłacone.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak raportów i analiz
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Nie masz czasu na analizę efektywności, kosztów tras, czasu dostaw czy wykorzystania floty. Dane są rozproszone. Trudno podejmować decyzje o optymalizacji procesów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z obsługą reklamacji
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Reklamacje wymagają ręcznego wprowadzenia danych, sprawdzenia dokumentów, kontaktu z kierowcą. To zajmuje dużo czasu i frustruje klientów, którzy czekają na rozwiązanie.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak synchronizacji między systemami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Twój system magazynowy, transportowy, fakturowania i śledzenia działają osobno. Musisz ręcznie przenosić dane między nimi. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z planowaniem załadunków
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Trudno optymalnie zaplanować załadunek pojazdów. Musisz ręcznie sprawdzać wymiary, wagę, kolejność dostaw. To prowadzi do nieefektywnego wykorzystania przestrzeni i zwiększa koszty.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na rozwój biznesu
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zajmujesz się koordynacją dostaw, śledzeniem przesyłek, tworzeniem dokumentów zamiast rozwojem biznesu. Brakuje czasu na pozyskiwanie nowych klientów, optymalizację procesów, budowanie marki.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne przypisywanie zadań kierowcom
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Gdy przychodzi nowe zlecenie, musisz ręcznie przypisać kierowcę, sprawdzić dostępność pojazdu, zaplanować trasę. Trudno zarządzać wieloma zleceniami jednocześnie bez błędów.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sekcja: Rozwiązania dla logistyki --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Rozwiązania dla logistyki</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Jak automatyzacja zmienia logistykę
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy w firmach logistycznych. Śledzenie przesyłek, optymalizacja tras, koordynacja dostaw i zarządzanie flotą. Wszystko działa automatycznie.
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
                                Śledzenie przesyłek w czasie rzeczywistym
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Klient pyta o status przesyłki? System automatycznie pokazuje lokalizację, szacowany czas dostawy i historię. Nie musisz ręcznie sprawdzać ani dzwonić do kierowców.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Automatyczna optymalizacja tras
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie planuje optymalne trasy, uwzględniając odległości, czas przejazdu i priorytety. Kierowcy jeżdżą najkrótszymi trasami, oszczędzasz paliwo i czas.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Dokumenty transportowe tworzą się same
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Po każdej dostawie list przewozowy, potwierdzenie odbioru i faktura generują się automatycznie i wysyłają do klienta. Nie musisz ręcznie tworzyć dokumentów.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Automatyczne powiadomienia o statusie dostaw
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Klienci automatycznie otrzymują powiadomienia o statusie przesyłki, szacowanym czasie dostawy i potwierdzeniu odbioru. Nie musisz ręcznie informować klientów.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Zarządzanie flotą w czasie rzeczywistym
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Wiesz dokładnie, gdzie są Twoje pojazdy, które są dostępne, które wymagają serwisu. System automatycznie przypisuje pojazdy do zleceń i optymalizuje wykorzystanie floty.</dd>
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
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Twój system magazynowy, transportowy, fakturowania i śledzenia działają razem. Dane przepływają automatycznie między wszystkimi systemami.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Co można zautomatyzować w logistyce --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Przykłady automatyzacji</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Co możemy zautomatyzować w Twojej firmie logistycznej
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Oto konkretne przykłady procesów, które automatyzujemy w firmach logistycznych. Przetwarzanie zamówień, tworzenie dokumentów, powiadomienia i synchronizacja danych.
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
                            Obsługa zapytań o przesyłki
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Klient wysyła zapytanie o status przesyłki? System automatycznie sprawdza w bazie danych, przygotowuje odpowiedź i wysyła e-mail lub SMS. Nie musisz ręcznie sprawdzać ani odpowiadać.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Tworzenie dokumentów transportowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy kierowca potwierdza dostawę w systemie, list przewozowy, potwierdzenie odbioru i faktura generują się automatycznie na podstawie danych z zamówienia i wysyłają się do klienta.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Powiadomienia o statusie dostaw
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy status przesyłki zmienia się w systemie, klient automatycznie otrzymuje powiadomienie SMS i e-mail. Nie musisz ręcznie informować klientów o każdej zmianie.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przetwarzanie zamówień z formularzy i maili
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowe zamówienia z formularzy na stronie lub maili automatycznie trafiają do systemu transportowego, są tagowane i przypisywane do odpowiednich działów. Nie musisz ręcznie przepisywać danych.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Raporty i analizy transportowe
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie automatycznie generowane raporty z dostaw, kosztów, czasu realizacji i wykorzystania floty na podstawie danych z systemu, wysyłane na e-mail. Wiesz, jak działa Twoja firma.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Synchronizacja danych między systemami
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dane z systemu transportowego automatycznie synchronizują się z systemem magazynowym, fakturowania i CRM. Nie musisz ręcznie przenosić informacji między systemami.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Alerty o brakach w magazynie
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy stan magazynowy spada poniżej określonego poziomu, system automatycznie wysyła alert e-mail do odpowiednich osób. Nie musisz ręcznie sprawdzać stanów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Fakturowanie dostaw
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Po potwierdzeniu dostawy w systemie faktura generuje się automatycznie na podstawie danych z zamówienia, wysyła się do klienta, a system śledzi status płatności.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przypomnienia o terminach i zadaniach
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie wysyła przypomnienia o terminach dostaw, przeglądach pojazdów, płatnościach i zadaniach dla kierowców. Nie zapomnisz o ważnych rzeczach.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Obsługa reklamacji i zgłoszeń
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Reklamacje z formularzy lub maili automatycznie tworzą się w systemie, trafiają do odpowiedniego działu, przypisują priorytet. Klient otrzymuje potwierdzenie od razu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Przetwarzanie e-maili od klientów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">AI odczytuje wiadomości e-mail od klientów, rozpoznaje intencję (zapytanie o status, reklamacja, nowe zamówienie) i uruchamia odpowiedni proces. Nie musisz ręcznie sortować maili.</dd>
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
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Dokumenty transportowe, faktury i potwierdzenia automatycznie trafiają we właściwe miejsce w systemie — posegregowane i opisane. Nie musisz ręcznie zarządzać archiwum.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne odpowiedzi na częste pytania
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">System automatycznie odpowiada na częste pytania klientów o status przesyłki, terminy dostaw czy cenniki. Klient otrzymuje odpowiedź od razu, bez czekania.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Aktualizacja statusów w systemach
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gdy kierowca zmienia status dostawy w aplikacji mobilnej, dane automatycznie aktualizują się we wszystkich powiązanych systemach. Nie musisz ręcznie wprowadzać zmian.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div id="kontakt" class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Gotowy na automatyzację w swojej firmie logistycznej?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Twojej firmy logistycznej. Śledzenie przesyłek, optymalizacja tras, koordynacja dostaw i zarządzanie flotą — wszystko automatycznie.
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

