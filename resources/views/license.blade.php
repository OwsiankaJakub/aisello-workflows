<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Licencja | Aisello - Warunki Użytkowania</title>
    <meta name="description" content="Warunki licencyjne Aisello. Dowiedz się o prawach autorskich, zakazie kopiowania i możliwości korzystania z automatyzacji."/>
    <meta name="keywords" content="licencja, warunki użytkowania, prawa autorskie, automatyzacja"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('license') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('license') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('license') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('license') }}"/>
    <meta property="og:title" content="Licencja | Aisello - Warunki Użytkowania"/>
    <meta property="og:description" content="Warunki licencyjne Aisello. Dowiedz się o prawach autorskich i możliwości korzystania z automatyzacji."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('license') }}"/>
    <meta name="twitter:title" content="Licencja | Aisello - Warunki Użytkowania"/>
    <meta name="twitter:description" content="Warunki licencyjne Aisello. Dowiedz się o prawach autorskich i możliwości korzystania z automatyzacji."/>
    <meta name="twitter:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

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
                    <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Licencja i Warunki Użytkowania</h1>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Ostatnia aktualizacja: {{ date('d.m.Y') }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Sekcja: Treść licencji --}}
        <div class="mx-auto max-w-7xl px-6 pb-24 sm:pb-32 lg:px-8">
            <div class="mx-auto max-w-3xl space-y-8 text-base text-gray-700 dark:text-gray-300">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">1. Wprowadzenie</h2>
                    <p class="leading-relaxed">
                        Niniejsza Licencja określa warunki użytkowania usług i rozwiązań oferowanych przez Aisello ("my", "nas", "nasz"). Korzystając z naszych usług, akceptujesz warunki niniejszej licencji.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">2. Prawa autorskie</h2>
                    <p class="leading-relaxed">
                        Wszystkie rozwiązania automatyzacji, kody, konfiguracje, dokumentacja, materiały szkoleniowe oraz inne treści stworzone przez Aisello są chronione prawem autorskim i stanowią własność intelektualną Aisello.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">3. Zakaz kopiowania i udostępniania</h2>
                    <p class="leading-relaxed mb-4">
                        <strong class="font-semibold text-gray-900 dark:text-white">Zabrania się:</strong>
                    </p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Kopiowania, powielania lub reprodukowania naszych rozwiązań automatyzacji, kodów, konfiguracji lub dokumentacji bez wyraźnej pisemnej zgody Aisello</li>
                        <li>Udostępniania, dystrybuowania, publikowania lub przekazywania naszych rozwiązań, kodów lub konfiguracji osobom trzecim</li>
                        <li>Modyfikowania, adaptowania lub tworzenia dzieł pochodnych na podstawie naszych rozwiązań bez zgody</li>
                        <li>Używania naszych rozwiązań w celach komercyjnych innych niż te, dla których zostały stworzone</li>
                        <li>Reverse engineering lub próby odtworzenia logiki naszych rozwiązań w celu stworzenia konkurencyjnych produktów</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">4. Korzystanie z automatyzacji</h2>
                    <p class="leading-relaxed mb-4">
                        <strong class="font-semibold text-gray-900 dark:text-white">Możesz korzystać z automatyzacji:</strong>
                    </p>
                    <ul class="list-disc list-inside space-y-2 ml-4 mb-4">
                        <li>W ramach swojej firmy lub organizacji, dla której zostało wdrożone rozwiązanie</li>
                        <li>Do celów, dla których rozwiązanie zostało stworzone i wdrożone</li>
                        <li>W sposób zgodny z umową zawartą z Aisello</li>
                    </ul>
                    <p class="leading-relaxed">
                        Korzystanie z automatyzacji oznacza używanie wdrożonego rozwiązania do automatyzacji procesów w Twojej firmie. Nie oznacza to jednak prawa do kopiowania, modyfikowania lub udostępniania samego rozwiązania, kodu lub konfiguracji.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">5. Własność rozwiązania</h2>
                    <p class="leading-relaxed mb-4">
                        Wszystkie rozwiązania automatyzacji, w tym kody, konfiguracje, workflow, integracje i dokumentacja, pozostają własnością Aisello. Klient otrzymuje prawo do korzystania z rozwiązania zgodnie z warunkami umowy, ale nie nabywa praw własności do samego rozwiązania.
                    </p>
                    <p class="leading-relaxed">
                        <strong class="font-semibold text-gray-900 dark:text-white">Możliwość negocjacji:</strong> W przypadku większych projektów lub szczególnych potrzeb klienta, istnieje możliwość uzgodnienia warunków własności rozwiązania. Wszelkie odstępstwa od standardowych warunków licencyjnych wymagają pisemnej umowy zawartej z Aisello. Skontaktuj się z nami, aby omówić indywidualne potrzeby.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">6. Dane i treści klienta</h2>
                    <p class="leading-relaxed">
                        Wszystkie dane, treści i informacje należące do klienta pozostają własnością klienta. Aisello nie rości sobie praw do danych klienta i zobowiązuje się do ich ochrony zgodnie z Polityką Prywatności.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">7. Odpowiedzialność</h2>
                    <p class="leading-relaxed mb-4">
                        Aisello nie ponosi odpowiedzialności za:
                    </p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Szkody wynikające z nieprawidłowego użycia rozwiązania</li>
                        <li>Zmiany wprowadzone przez klienta lub osoby trzecie w rozwiązaniu</li>
                        <li>Problemy wynikające z modyfikacji rozwiązania bez zgody Aisello</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">8. Naruszenie licencji</h2>
                    <p class="leading-relaxed mb-4">
                        W przypadku naruszenia warunków niniejszej licencji, Aisello zastrzega sobie prawo do:
                    </p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Natychmiastowego zaprzestania świadczenia usług</li>
                        <li>Wymagania usunięcia skopiowanych materiałów</li>
                        <li>Dochodzenia roszczeń na drodze prawnej</li>
                        <li>Domagania się odszkodowania za naruszenie praw autorskich</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">9. Wyjątki</h2>
                    <p class="leading-relaxed">
                        Wyjątki od powyższych zasad mogą być udzielone wyłącznie na podstawie pisemnej umowy licencyjnej zawartej z Aisello. Wszelkie odstępstwa wymagają wyraźnej, pisemnej zgody.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">10. Zmiany w licencji</h2>
                    <p class="leading-relaxed">
                        Zastrzegamy sobie prawo do wprowadzania zmian w niniejszej licencji. O wszelkich zmianach będziemy informować poprzez publikację zaktualizowanej wersji na naszej stronie internetowej. Kontynuowanie korzystania z usług po wprowadzeniu zmian oznacza akceptację nowych warunków.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">11. Prawo właściwe</h2>
                    <p class="leading-relaxed">
                        Niniejsza licencja podlega prawu polskiemu. Wszelkie spory będą rozstrzygane przez właściwe sądy polskie.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">12. Kontakt</h2>
                    <p class="leading-relaxed mb-4">
                        W przypadku pytań dotyczących licencji lub warunków użytkowania, prosimy o kontakt:
                    </p>
                    <p class="leading-relaxed">
                        <strong class="font-semibold text-gray-900 dark:text-white">E-mail:</strong> kontakt@aisello.pl<br/>
                        <strong class="font-semibold text-gray-900 dark:text-white">Formularz kontaktowy:</strong> <a href="{{ route('contact') }}" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 underline">{{ route('contact') }}</a>
                    </p>
                </div>

                <div class="mt-8 rounded-lg bg-indigo-50 p-6 dark:bg-indigo-900/20">
                    <h3 class="text-lg font-semibold text-indigo-900 dark:text-indigo-100">Podsumowanie</h3>
                    <p class="mt-2 text-indigo-800 dark:text-indigo-200">
                        <strong class="font-semibold text-indigo-900 dark:text-indigo-100">Możesz:</strong> <span class="text-indigo-800 dark:text-indigo-200">korzystać z wdrożonej automatyzacji w swojej firmie zgodnie z umową.</span>
                    </p>
                    <p class="mt-2 text-indigo-800 dark:text-indigo-200">
                        <strong class="font-semibold text-indigo-900 dark:text-indigo-100">Nie możesz:</strong> <span class="text-indigo-800 dark:text-indigo-200">kopiować, modyfikować, udostępniać ani dystrybuować naszych rozwiązań, kodów lub konfiguracji bez pisemnej zgody.</span>
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>

