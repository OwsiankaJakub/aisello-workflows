<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Rozwiązania | Aisello - Automatyzacja dla Twojej Branży</title>
    <meta name="description" content="Automatyzacje procesów dla każdej branży - e-commerce, handel, usługi, logistyka, produkcja, marketing, sprzedaż, księgowość, HR, IT. Odkryj rozwiązanie dla swojej firmy."/>
    <meta name="keywords" content="automatyzacja procesów, rozwiązania automatyzacji, automatyzacja e-commerce, automatyzacja handlu, automatyzacja usług, automatyzacja logistyki"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('solutions') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('solutions') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('solutions') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('solutions') }}"/>
    <meta property="og:title" content="Rozwiązania | Aisello - Automatyzacja dla Twojej Branży"/>
    <meta property="og:description" content="Automatyzacje procesów dla każdej branży. Odkryj rozwiązanie dopasowane do Twojej firmy."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('solutions') }}"/>
    <meta name="twitter:title" content="Rozwiązania | Aisello - Automatyzacja dla Twojej Branży"/>
    <meta name="twitter:description" content="Automatyzacje procesów dla każdej branży. Odkryj rozwiązanie dopasowane do Twojej firmy."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Rozwiązania automatyzacji Aisello',
            'description' => 'Automatyzacje procesów dla każdej branży - e-commerce, handel, usługi, logistyka, produkcja, marketing, sprzedaż, księgowość, HR, IT.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Aisello'
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
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8 dark:bg-gray-900">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <div class="text-center">
                    <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Rozwiązania dopasowane do Twojej branży</h1>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Automatyzujemy procesy w każdej branży. Przygotujemy rozwiązanie specjalnie dla Ciebie. Oszczędzaj czas i pieniądze dzięki automatyzacji.
                    </p>
                </div>
            </div>
        </div>

        {{-- Sekcja: Rozwiązania dla branż --}}
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Wybierz swoją branżę</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    Automatyzacja dla każdej branży
                </p>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                    Każda branża ma swoje unikalne potrzeby. Przygotowaliśmy dedykowane rozwiązania dla najpopularniejszych branż.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                {{-- E-commerce --}}
                <a href="{{ route('solutionEcommerce') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            E-commerce
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Synchronizacja zamówień, automatyzacja faktur, zarządzanie magazynem, marketing automation.</p>
                    </div>
                </a>

                {{-- Handel --}}
                <a href="{{ route('solutionHandel') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Handel
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Automatyzacja sprzedaży, zarządzanie zamówieniami, integracja z dostawcami, faktury.</p>
                    </div>
                </a>

                {{-- Usługi --}}
                <a href="{{ route('solutionUslugi') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Usługi
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Rezerwacje, przypomnienia, obsługa klientów, dokumentacja, faktury, kalendarz.</p>
                    </div>
                </a>

                {{-- Logistyka --}}
                <a href="{{ route('solutionLogistyka') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Logistyka
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Synchronizacja zamówień, powiadomienia, zarządzanie dokumentacją, raporty transportowe.</p>
                    </div>
                </a>

                {{-- Produkcja --}}
                <a href="{{ route('solutionProdukcja') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Produkcja
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Zarządzanie zleceniami, kontrola jakości, raporty produkcyjne, synchronizacja z magazynem.</p>
                    </div>
                </a>

                {{-- Marketing --}}
                <a href="{{ route('solutionMarketing') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Marketing
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Kampanie email, social media, raporty, organizacja list mailingowych, automatyzacja treści.</p>
                    </div>
                </a>

                {{-- Sprzedaż --}}
                <a href="{{ route('solutionSprzedaz') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Sprzedaż
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">CRM automation, follow-up, oferty, faktury, raporty sprzedaży, zarządzanie leadami.</p>
                    </div>
                </a>

                {{-- Księgowość --}}
                <a href="{{ route('solutionKsiegowosc') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            Księgowość
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Automatyzacja faktur, przypomnień o płatnościach, raportów, synchronizacja z systemami księgowymi.</p>
                    </div>
                </a>

                {{-- HR --}}
                <a href="{{ route('solutionHr') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            HR
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Rekrutacja, onboarding, urlopy, dokumentacja pracownicza, przypomnienia, raporty.</p>
                    </div>
                </a>

                {{-- IT --}}
                <a href="{{ route('solutionIt') }}" class="group relative flex gap-x-4 rounded-xl bg-white p-6 ring-1 ring-inset ring-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 dark:hover:bg-gray-700">
                    <div class="flex-none">
                        <svg class="h-7 w-7 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                            IT
                        </h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Monitoring systemów, automatyzacja deploymentów, zarządzanie ticketami, backupy, raporty.</p>
                    </div>
                </a>
            </div>
        </div>

        {{-- Sekcja: CTA --}}
        <div class="bg-indigo-600">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                    Nie znalazłeś swojej branży?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-center text-lg text-indigo-100">
                    Automatyzujemy procesy w każdej branży. Skontaktuj się z nami, a przygotujemy rozwiązanie specjalnie dla Ciebie.
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

