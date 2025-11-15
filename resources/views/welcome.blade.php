<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Automatyzacja Procesów | Aisello - Oszczędzaj Czas</title>
    <meta name="description" content="Automatyzujemy procesy w Twojej firmie. Oszczędzasz czas i pieniądze. Integracje systemów, automatyzacja bez technicznej wiedzy. Dla małych i średnich firm."/>
    <meta name="keywords" content="automatyzacja procesów, automatyzacja dla firm, integracja systemów, automatyzacja CRM, automatyzacja e-commerce, oszczędność czasu, automatyzacja bez programowania, n8n automatyzacja"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ url('/') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ url('/') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:title" content="Automatyzacja Procesów Firmowych | Aisello"/>
    <meta property="og:description" content="Automatyzujemy procesy w Twojej firmie. Oszczędzasz czas i pieniądze. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ url('/') }}"/>
    <meta name="twitter:title" content="Automatyzacja Procesów Firmowych | Aisello"/>
    <meta name="twitter:description" content="Automatyzujemy procesy w Twojej firmie. Oszczędzasz czas i pieniądze. Przygotujemy rozwiązanie specjalnie dla Ciebie."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Aisello',
        'description' => 'Automatyzacja procesów firmowych dla małych i średnich firm. Oszczędzamy czas i pieniądze poprzez automatyzację i integrację systemów.',
        'url' => url('/'),
        'logo' => asset('assets/images/logo_aisello_black.svg'),
        'sameAs' => [],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'availableLanguage' => 'Polish'
        ],
        'areaServed' => 'PL',
        'serviceType' => 'Business Process Automation'
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'serviceType' => 'Business Process Automation',
        'provider' => [
            '@type' => 'Organization',
            'name' => 'Aisello'
        ],
        'description' => 'Automatyzacja procesów firmowych, integracja systemów, automatyzacja bez technicznej wiedzy. Dla małych i średnich firm.',
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Poland'
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
        <div class="relative isolate">
            <svg aria-hidden="true" class="absolute inset-x-0 top-0 -z-10 h-256 w-full mask-[radial-gradient(32rem_32rem_at_center,white,transparent)] stroke-gray-200 dark:stroke-white/10">
                <defs>
                    <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50 dark:fill-gray-800">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" stroke-width="0" />
            </svg>
            <div aria-hidden="true" class="absolute top-0 right-0 left-1/2 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48">
                <div style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)" class="aspect-801/1036 w-200.25 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"></div>
            </div>
            <div class="overflow-hidden">
                <div class="mx-auto max-w-7xl px-6 pt-36 pb-32 sm:pt-60 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                        <div class="relative w-full lg:max-w-xl lg:shrink-0 xl:max-w-2xl">
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl dark:text-white">Wszystko działa automatycznie.</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:max-w-md sm:text-xl/8 lg:max-w-none dark:text-gray-400">Automatyzujemy procesy w Twojej firmie. Oszczędzasz czas i pieniądze. Twoje systemy wreszcie ze sobą współpracują. Przygotujemy rozwiązanie specjalnie dla Ciebie.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Rozpocznij</a>
                                <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Zobacz jak to działa <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                        <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                            <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-0 xl:pt-80">
                                <div class="relative">
                                    <img src="{{ asset('assets/images/ksiegowa.webp') }}" alt="" class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg dark:bg-gray-700/5" />
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset dark:ring-white/10"></div>
                                </div>
                            </div>
                            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                <div class="relative">
                                    <img src="{{ asset('assets/images/marketing.webp') }}" alt="" class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg dark:bg-gray-700/5" />
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset dark:ring-white/10"></div>
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('assets/images/sprzedaz_ubran.webp') }}" alt="" class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg dark:bg-gray-700/5" />
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset dark:ring-white/10"></div>
                                </div>
                            </div>
                            <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                <div class="relative">
                                    <img src="{{ asset('assets/images/sprzedaz_wyrobow.webp') }}" alt="" class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg dark:bg-gray-700/5" />
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset dark:ring-white/10"></div>
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('assets/images/fotografia.webp') }}" alt="" class="aspect-2/3 w-full rounded-xl bg-gray-900/5 object-cover shadow-lg dark:bg-gray-700/5" />
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-gray-900/10 ring-inset dark:ring-white/10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--Sekcja: Problemy klientów--}}
        <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <div class="col-span-2">
                        <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Czy to brzmi znajomo?</h2>
                        <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">Masz dość ręcznej pracy?</p>
                        <p class="mt-6 text-base/7 text-gray-700 dark:text-gray-300">Każdego dnia te same problemy. Ręczna praca, brak integracji, chaos w procesach. Czas to zmienić.</p>
                    </div>
                    <dl class="col-span-3 grid grid-cols-1 gap-x-8 gap-y-10 text-base/7 text-gray-600 sm:grid-cols-2 lg:gap-y-16 dark:text-gray-400">
                        <div class="relative pl-9">
                            <dt class="font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-0 size-5 text-red-500 dark:text-red-400">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                                Za dużo czasu na powtarzalne zadania
                            </dt>
                            <dd class="mt-2">Pracownicy marnują czas na nudne, powtarzalne czynności. Możesz to zautomatyzować.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-0 size-5 text-red-500 dark:text-red-400">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                                Wysokie koszty obsługi
                            </dt>
                            <dd class="mt-2">Codzienne zadania kosztują za dużo. Czas <br/>i pieniądze idą na marne. Automatyzacja to zmienia.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-0 size-5 text-red-500 dark:text-red-400">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                                Chaos w procesach
                            </dt>
                            <dd class="mt-2">Brak porządku. Każdy robi po swojemu. Błędy i opóźnienia.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-0 size-5 text-red-500 dark:text-red-400">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                                Brak wiedzy technicznej
                            </dt>
                            <dd class="mt-2">Nie wiesz, jak wdrożyć automatyzację. <br/>Nie musisz. My to zrobimy.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-0 size-5 text-red-500 dark:text-red-400">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                                Ręczne przepisywanie danych
                            </dt>
                            <dd class="mt-2">Dane z jednego systemu do drugiego. Wciąż ręcznie. Każdego dnia.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="absolute top-1 left-0 size-5 text-red-500 dark:text-red-400">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                                Systemy nie współpracują
                            </dt>
                            <dd class="mt-2">CRM, ERP, magazyn, marketplace. Wszystko osobno. Nic się nie łączy.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        {{--Sekcja: Co można zautomatyzować--}}
        <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Przykłady</h2>
                    <p class="mt-2 text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Co można zautomatyzować?</p>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">Nie wiesz, co da się zautomatyzować?<br/>Oto przykłady. Każdego dnia robisz to ręcznie. Możesz to zmienić.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                    <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                                </svg>
                                Obsługa zapytań od klientów
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Automatyczne odpowiedzi, potwierdzenia i przekierowanie zapytań do odpowiednich osób. Klient dostaje odpowiedź od razu.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Przepisywanie danych między systemami
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">System sam przenosi dane z formularzy, maili lub sklepów do CRM, ERP, arkuszy. Bez ręcznego przepisywania.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm4.75 11.25a.75.75 0 0 0 1.5 0v-2.546l1.22 1.22a.75.75 0 1 0 1.06-1.061l-2.5-2.5a.75.75 0 0 0-1.06 0l-2.5 2.5a.75.75 0 1 0 1.06 1.06l1.22-1.22v2.547Z" clip-rule="evenodd" />
                                </svg>
                                Tworzenie faktur i dokumentów
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Faktury, umowy i protokoły generują się automatycznie po wykonaniu konkretnej akcji. Gotowe do wysyłki.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z" clip-rule="evenodd" />
                                </svg>
                                Powiadomienia i przypomnienia
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Przypomnienia o płatnościach, spotkaniach, zadaniach lub terminach. Wysyłane automatycznie. Nic nie umknie.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M10 2a.75.75 0 0 1 .75.75v16.5a.75.75 0 0 1-1.5 0V2.75A.75.75 0 0 1 10 2ZM4.5 4a.75.75 0 0 0-.75.75v10.5a.75.75 0 0 0 1.5 0V4.75A.75.75 0 0 0 4.5 4Zm11 0a.75.75 0 0 0-.75.75v10.5a.75.75 0 0 0 1.5 0V4.75a.75.75 0 0 0-.75-.75Z" clip-rule="evenodd" />
                                </svg>
                                Raporty sprzedaży i analiz
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Codziennie automatycznie generowane raporty wysyłane na e-mail. Wiesz, jak idzie sprzedaż. Bez ręcznego liczenia.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 3 3 0 0 1 4.12 0 3 3 0 0 1 4.308 3.516.78.78 0 0 1-.358.442h-2.48c-.15 0-.29-.07-.38-.19l-.49-.68a.5.5 0 0 0-.63-.175l-1.22.61a.25.25 0 0 1-.228 0l-1.22-.61a.5.5 0 0 0-.63.175l-.49.68a.5.5 0 0 1-.38.19H1.49ZM16.44 15.98a.75.75 0 0 0 1.06 0l1.5-1.5a.75.75 0 1 0-1.06-1.06l-.97.97-.97-.97a.75.75 0 1 0-1.06 1.06l1.5 1.5ZM18.75 12.75a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5h1.5ZM12.75 3a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5h-1.5ZM4.25 2.25a.75.75 0 0 0 0 1.5H5.5a.75.75 0 0 0 0-1.5H4.25ZM3.75 15a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5h-1.5Z" />
                                </svg>
                                Obsługa leadów sprzedażowych
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Nowe leady wpadają do CRM, są tagowane i przypisywane do handlowców. Automatycznie. Bez ręcznego wprowadzania.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Synchronizacja danych między narzędziami
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Połączone systemy pracują razem bez ręcznego przenoszenia informacji. Wszystko zsynchronizowane automatycznie.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M15.993 1.385a1.87 1.87 0 0 1 2.623 2.622l-4.03 5.27a12.749 12.749 0 0 1-4.237 3.562 4.508 4.508 0 0 0-3.188-3.188 12.75 12.75 0 0 1 3.562-4.237l5.27-4.03ZM6 11a3 3 0 1 0-6 0 3 3 0 0 0 6 0Z" />
                                </svg>
                                Generowanie opisów produktów (AI)
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Gotowe, unikalne opisy tworzone automatycznie na podstawie danych produktu. Szybko i bez wysiłku.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                                </svg>
                                Obsługa reklamacji i zgłoszeń
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Zgłoszenia tworzą się automatycznie i trafiają do odpowiedniego działu. Szybka reakcja. Bez chaosu.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 0 0-1 1v1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V3a1 1 0 1 0-2 0v1H7V3a1 1 0 0 0-1-1Zm0 5a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H6Z" clip-rule="evenodd" />
                                </svg>
                                Harmonogramy i planowanie zadań
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Pracownicy automatycznie otrzymują zadania i przypomnienia według ustalonego procesu. Wszystko zaplanowane.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z" />
                                </svg>
                                Kontrola stanów magazynowych
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Alerty o brakach, automatyczne zamówienia lub rezerwacje produktów. Magazyn pod kontrolą. Bez ręcznego sprawdzania.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                    <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                                </svg>
                                Przetwarzanie e-maili
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">AI odczytuje wiadomości, rozpoznaje intencję i uruchamia odpowiedni proces. E-maile obsługiwane automatycznie.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z" />
                                    <path fill-rule="evenodd" d="M2 8.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.8a2 2 0 0 1-1.99-1.79L2 8.5Zm5.22 1.97a.75.75 0 0 0 1.06 0l2.25-2.25a.75.75 0 0 0-1.06-1.06l-.97.97-.97-.97a.75.75 0 0 0-1.06 1.06l1.5 1.5Z" clip-rule="evenodd" />
                                </svg>
                                Archiwizacja dokumentów
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Dokumenty trafiają automatycznie we właściwe miejsce - posegregowane i opisane. Porządek bez wysiłku.</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

{{--        CTA        --}}

        <div class="bg-indigo-100 dark:bg-indigo-950">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8">
                <h2 class="max-w-2xl text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">
                    Gotowy na automatyzację?
                    <br />
                    Porozmawiajmy o Twoich potrzebach.
                </h2>
                <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:shrink-0">
                    <a href="{{ route('contact') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Skontaktuj się z nami</a>
                    <a href="{{ route('howItWorks') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">
                        Zobacz jak to działa
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>

{{--        CTA        --}}



{{--        FAQ        --}}
        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
        <div class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
                <div class="mx-auto max-w-4xl">
                    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Najczęściej zadawane pytania</h2>
                    <dl class="mt-16 divide-y divide-gray-900/10 dark:divide-white/10">
                        <div class="py-6 first:pt-0 last:pb-0">
                            <dt>
                                <button type="button" command="--toggle" commandfor="faq-0" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                    <span class="text-base/7 font-semibold">Czy muszę znać się na technologii?</span>
                                    <span class="ml-6 flex h-7 items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                  <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                  <path d="M18 12H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
                                </button>
                            </dt>
                            <el-disclosure id="faq-0" class="contents">
                                <dd class="mt-2 pr-12">
                                    <p class="text-base/7 text-gray-600 dark:text-gray-400">Nie. My wszystko zrobimy. Rozmawiamy o Twoich potrzebach, przygotowujemy rozwiązanie i je wdrażamy. Ty tylko korzystasz z efektów.</p>
                                </dd>
                            </el-disclosure>
                        </div>
                        <div class="py-6 first:pt-0 last:pb-0">
                            <dt>
                                <button type="button" command="--toggle" commandfor="faq-1" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                    <span class="text-base/7 font-semibold">Ile to kosztuje?</span>
                                    <span class="ml-6 flex h-7 items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                  <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                  <path d="M18 12H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
                                </button>
                            </dt>
                            <el-disclosure id="faq-1" hidden class="contents">
                                <dd class="mt-2 pr-12">
                                    <p class="text-base/7 text-gray-600 dark:text-gray-400">Każdy projekt jest inny. Cena zależy od zakresu automatyzacji. Przygotujemy wycenę specjalnie dla Ciebie. Skontaktuj się z nami, aby omówić szczegóły.</p>
                                </dd>
                            </el-disclosure>
                        </div>
                        <div class="py-6 first:pt-0 last:pb-0">
                            <dt>
                                <button type="button" command="--toggle" commandfor="faq-2" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                    <span class="text-base/7 font-semibold">Jak długo trwa wdrożenie?</span>
                                    <span class="ml-6 flex h-7 items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                  <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                  <path d="M18 12H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
                                </button>
                            </dt>
                            <el-disclosure id="faq-2" hidden class="contents">
                                <dd class="mt-2 pr-12">
                                    <p class="text-base/7 text-gray-600 dark:text-gray-400">Zależy od złożoności projektu. Proste automatyzacje możemy wdrożyć w kilka dni. Bardziej skomplikowane integracje mogą zająć kilka tygodni. Wszystko omówimy na początku.</p>
                                </dd>
                            </el-disclosure>
                        </div>
                        <div class="py-6 first:pt-0 last:pb-0">
                            <dt>
                                <button type="button" command="--toggle" commandfor="faq-3" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                    <span class="text-base/7 font-semibold">Jakie procesy możecie zautomatyzować?</span>
                                    <span class="ml-6 flex h-7 items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                  <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                  <path d="M18 12H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
                                </button>
                            </dt>
                            <el-disclosure id="faq-3" hidden class="contents">
                                <dd class="mt-2 pr-12">
                                    <p class="text-base/7 text-gray-600 dark:text-gray-400">Generowanie raportów, wysyłkę powiadomień, przetwarzanie zamówień, tworzenie faktur, zarządzanie magazynem i wiele innych. Rozmawiamy o Twoich potrzebach i dopasowujemy rozwiązanie.</p>
                                </dd>
                            </el-disclosure>
                        </div>
                        <div class="py-6 first:pt-0 last:pb-0">
                            <dt>
                                <button type="button" command="--toggle" commandfor="faq-4" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                    <span class="text-base/7 font-semibold">Co jeśli coś przestanie działać?</span>
                                    <span class="ml-6 flex h-7 items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                  <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                  <path d="M18 12H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
                                </button>
                            </dt>
                            <el-disclosure id="faq-4" hidden class="contents">
                                <dd class="mt-2 pr-12">
                                    <p class="text-base/7 text-gray-600 dark:text-gray-400">Wspieramy Cię na każdym etapie. Monitorujemy automatyzacje i reagujemy, gdy coś wymaga uwagi. Jesteśmy dostępni, gdy potrzebujesz pomocy.</p>
                                </dd>
                            </el-disclosure>
                        </div>
                        <div class="py-6 first:pt-0 last:pb-0">
                            <dt>
                                <button type="button" command="--toggle" commandfor="faq-5" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                    <span class="text-base/7 font-semibold">Czy moja firma jest za mała na automatyzację?</span>
                                    <span class="ml-6 flex h-7 items-center">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                  <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                  <path d="M18 12H6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
                                </button>
                            </dt>
                            <el-disclosure id="faq-5" hidden class="contents">
                                <dd class="mt-2 pr-12">
                                    <p class="text-base/7 text-gray-600 dark:text-gray-400">Nie. Automatyzacja jest dla każdej firmy. Małe i średnie firmy często zyskują najwięcej, bo oszczędzają czas na powtarzalnych zadaniach i mogą się skupić na rozwoju.</p>
                                </dd>
                            </el-disclosure>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

{{--        FAQ        --}}


        {{--        CTA        --}}

        <div class="bg-white">
            <div class="relative bg-gray-900">
                <!-- Decorative image and overlay -->
                <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                    <img src="{{ asset('assets/images/sukces_automatyzacja.webp') }}" alt="" class="size-full object-cover object-top" />
                </div>
                <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

                <div class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">Gotowy na automatyzację?</h2>
                    <p class="mt-4 text-xl text-white">Porozmawiajmy o Twoich potrzebach. Przygotujemy rozwiązanie specjalnie dla Ciebie. Oszczędzisz czas i pieniądze.</p>
                    <a href="{{ route('contact') }}" class="mt-8 inline-block rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100">Skontaktuj się z nami</a>
                </div>
            </div>
        </div>

        {{--        CTA        --}}

    </main>
</div>

@include('partials.footer')






<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
