<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Automatyzacja E-commerce | Aisello</title>
    <meta name="description" content="Automatyzacja procesów w sklepie internetowym. Synchronizacja zamówień, magazynu, faktur i obsługi klienta. Oszczędzaj czas i pieniądze w e-commerce."/>
    <meta name="keywords" content="automatyzacja e-commerce, automatyzacja sklepu internetowego, integracja sklepu, automatyzacja zamówień, synchronizacja magazynu e-commerce, automatyzacja faktur, obsługa klienta e-commerce"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('solutionEcommerce') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('solutionEcommerce') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('solutionEcommerce') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('solutionEcommerce') }}"/>
    <meta property="og:title" content="Automatyzacja E-commerce | Aisello"/>
    <meta property="og:description" content="Automatyzacja procesów w sklepie internetowym. Synchronizacja zamówień, magazynu, faktur i obsługi klienta. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('solutionEcommerce') }}"/>
    <meta name="twitter:title" content="Automatyzacja E-commerce | Aisello"/>
    <meta name="twitter:description" content="Automatyzacja procesów w sklepie internetowym. Synchronizacja zamówień, magazynu, faktur i obsługi klienta. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'E-commerce Automation',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello',
                'url' => url('/')
            ],
            'description' => 'Automatyzacja procesów w sklepie internetowym. Synchronizacja zamówień, magazynu, faktur i obsługi klienta.',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Poland'
            ],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'E-commerce Business Owners'
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
                                    Automatyzacja dla sklepów internetowych. <a href="{{ route('howItWorks') }}" class="font-semibold whitespace-nowrap text-indigo-600 dark:text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Zobacz jak to działa <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl dark:text-white">Zaoszczędź pieniądze i wyróżnij się.</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Automatyzujemy procesy w Twoim sklepie internetowym. Faktury tworzą się same, magazyn synchronizuje się automatycznie, klienci otrzymują szybkie odpowiedzi. Mniej pracy ręcznej, więcej czasu na rozwój. Przygotujemy rozwiązanie specjalnie dla Ciebie.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Rozpocznij</a>
                                <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 dark:bg-gray-800">
                <img src="{{ asset('assets/images/ai-ecommerce.webp') }}" alt="" class="aspect-3/2 object-cover lg:aspect-auto lg:size-full" />
            </div>
        </div>



        {{-- Sekcja: Problemy właścicieli sklepów e-commerce --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Problemy właścicieli sklepów</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Znasz to? Codziennie to samo
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Pracujesz w sklepie internetowym i wiesz, ile czasu marnujesz na powtarzalne zadania. Oto najczęstsze problemy, które rozwiązujemy.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Chaos w magazynie
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Stan magazynowy nie synchronizuje się z zamówieniami. Sprzedajesz produkty, których nie masz. Albo masz zapasy, których nie widzisz.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczne tworzenie faktur
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Po każdym zamówieniu musisz ręcznie stworzyć fakturę. Kopiujesz dane, sprawdzasz, wysyłasz. To się powtarza setki razy.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na obsługę klienta
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zapytania klientów czekają. Nie masz czasu na szybkie odpowiedzi, potwierdzenia zamówień czy informacje o statusie przesyłki.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Wysokie koszty obsługi
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Płacisz za pracę, którą może wykonać automatyzacja. Każde zamówienie kosztuje Cię czas i pieniądze, które mogłyby być zautomatyzowane.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Systemy nie współpracują
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Twój sklep, system magazynowy, CRM i fakturowanie działają osobno. Musisz ręcznie przenosić dane między nimi.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Ręczna obsługa reklamacji i zwrotów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Każda reklamacja i zwrot wymaga ręcznego wprowadzenia danych, sprawdzenia statusu i wysłania odpowiedzi. To zajmuje dużo czasu.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak synchronizacji z marketplace'ami
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zamówienia z Allegro, Amazon czy innych platform musisz ręcznie przenosić do swojego systemu. To podwaja pracę i zwiększa ryzyko błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak powiadomień o statusie zamówień
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Klienci nie wiedzą, gdzie jest ich przesyłka. Musisz ręcznie sprawdzać status i wysyłać informacje. To frustruje klientów i zajmuje Twój czas.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Błędy w zamówieniach
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Ręczne wprowadzanie danych prowadzi do błędów. Złe adresy, nieprawidłowe produkty, pomyłki w ilościach. To kosztuje Cię klientów i pieniądze.</p>
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
                            <p class="flex-auto">Nie masz czasu na analizę sprzedaży, stanów magazynowych czy efektywności. Dane są rozproszone w różnych systemach. Trudno podejmować decyzje.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z integracją kurierów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Ręczne tworzenie etykiet kurierskich, sprawdzanie statusów przesyłek i aktualizacja zamówień. To zabiera czas, który mógłby być wykorzystany na rozwój sklepu.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak automatycznych opisów produktów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Każdy nowy produkt wymaga ręcznego stworzenia opisu. To zajmuje czas i ogranicza skalowanie. Trudno dodać wiele produktów szybko.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak czasu na marketing
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Zajmujesz się obsługą zamówień zamiast promocją sklepu. Brakuje czasu na kampanie, social media czy rozwój marki. Konkurencja wyprzedza Cię.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Problemy z obsługą wielu kanałów sprzedaży
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Sprzedajesz przez sklep, Allegro, Amazon i inne kanały. Każdy wymaga osobnej obsługi. Trudno zarządzać wszystkimi jednocześnie bez błędów.</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h3 class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                            <svg class="h-6 w-6 flex-none text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Brak alertów o brakach produktów
                        </h3>
                        <div class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                            <p class="flex-auto">Dowiadujesz się o brakach produktów dopiero, gdy klient składa zamówienie. To prowadzi do niezadowolonych klientów i utraconych sprzedaży.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sekcja: Rozwiązania dla e-commerce --}}
        <div class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Rozwiązania</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Co zyskujesz dzięki automatyzacji
                    </p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy w Twoim sklepie. Oszczędzasz czas, pieniądze i zyskujesz spokój.
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
                                Zamówienia trafiają automatycznie
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Każde zamówienie z Twojego sklepu automatycznie trafia do systemu magazynowego, CRM i fakturowania. Nie musisz nic przepisywać.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Magazyn synchronizuje się sam
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Stan magazynowy aktualizuje się automatycznie po każdym zamówieniu. Wiesz dokładnie, co masz na stanie.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Faktury tworzą się same
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Po każdym zamówieniu faktura generuje się automatycznie i wysyła do klienta. Nie musisz nic robić.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Klienci otrzymują automatyczne odpowiedzi
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Potwierdzenia zamówień, informacje o statusie przesyłki i odpowiedzi na częste pytania wysyłają się automatycznie.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Oszczędzasz czas i pieniądze
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Godziny pracy dziennie zamieniają się w automatyczne procesy. Mniej błędów, więcej czasu na rozwój sklepu.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold text-gray-900 dark:text-white">
                                <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                Wszystkie systemy współpracują
                            </dt>
                            <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Twój sklep, magazyn, CRM i fakturowanie działają razem. Dane przepływają automatycznie między systemami.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Sekcja: Co można zautomatyzować w e-commerce --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Przykłady automatyzacji</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Co możemy zautomatyzować w Twoim sklepie
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Oto konkretne przykłady procesów, które automatyzujemy w sklepach internetowych.
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
                            Obsługa zamówień
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Zamówienia z sklepu automatycznie trafiają do systemu magazynowego, CRM i fakturowania. Nie musisz nic przepisywać.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Synchronizacja magazynu
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Stan magazynowy aktualizuje się automatycznie po każdym zamówieniu. Alerty o brakach produktów wysyłają się same.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Tworzenie faktur
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Faktury generują się automatycznie po każdym zamówieniu i wysyłają się do klienta. Nie musisz nic robić.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Obsługa zapytań klientów
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Automatyczne odpowiedzi na częste pytania, potwierdzenia zamówień i informacje o statusie przesyłki.</dd>
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
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Przypomnienia o płatnościach, statusie zamówień, terminach dostaw i zadaniach dla zespołu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Raporty sprzedaży
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Codziennie automatycznie generowane raporty sprzedaży, stanów magazynowych i analiz wysyłane na e-mail.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Obsługa reklamacji
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Reklamacje tworzą się automatycznie i trafiają do odpowiedniego działu. Klient otrzymuje potwierdzenie od razu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Generowanie opisów produktów (AI)
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Gotowe, unikalne opisy produktów tworzone automatycznie na podstawie danych produktu przez AI.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Synchronizacja z marketplace'ami
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Zamówienia z Allegro, Amazon, eBay i innych platform automatycznie trafiają do Twojego systemu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Kontrola stanów magazynowych
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Alerty o brakach produktów, automatyczne zamówienia u dostawców lub rezerwacje produktów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Walka z porzuconymi koszykami
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Automatyczne e-maile z przypomnieniem o porzuconym koszyku, oferty rabatowe i zachęty do finalizacji zakupu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne kampanie e-mail marketingowe
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Seria e-maili powitalnych dla nowych klientów, przypomnienia o produktach, promocje i newsletter wysyłane automatycznie.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Organizacja list mailingowych i personalizacja
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Automatyczne organizowanie list mailingowych według zachowań, historii zakupów i preferencji. Spersonalizowane oferty i rekomendacje produktów.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne promocje i rabaty
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Rabaty dla klientów, którzy nie kupowali od dłuższego czasu, promocje na produkty z niskim obrotem lub automatyczne kody rabatowe.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne opinie i recenzje
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Automatyczne prośby o opinie po zrealizowaniu zamówienia. To zwiększa liczbę recenzji i buduje zaufanie do sklepu.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            Automatyczne publikacje w social media
                        </dt>
                        <dd class="mt-2 text-base text-gray-600 dark:text-gray-400">Nowe produkty, promocje i aktualności automatycznie publikują się na Facebook, Instagram i innych platformach.</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div id="kontakt" class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Gotowy na automatyzację w swoim sklepie?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Twojego sklepu internetowego.
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
