<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>Polityka Prywatności | Aisello</title>
    <meta name="description" content="Polityka prywatności Aisello. Dowiedz się, jak chronimy Twoje dane osobowe i przetwarzamy informacje."/>
    <meta name="keywords" content="polityka prywatności, ochrona danych, RODO, prywatność"/>
    <meta name="author" content="Aisello"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="{{ route('privacy') }}"/>
    <link rel="alternate" hreflang="pl" href="{{ route('privacy') }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ route('privacy') }}"/>

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('privacy') }}"/>
    <meta property="og:title" content="Polityka Prywatności | Aisello"/>
    <meta property="og:description" content="Polityka prywatności Aisello. Dowiedz się, jak chronimy Twoje dane osobowe."/>
    <meta property="og:image" content="{{ asset('assets/images/logo_aisello_black.svg') }}"/>
    <meta property="og:locale" content="pl_PL"/>

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="{{ route('privacy') }}"/>
    <meta name="twitter:title" content="Polityka Prywatności | Aisello"/>
    <meta name="twitter:description" content="Polityka prywatności Aisello. Dowiedz się, jak chronimy Twoje dane osobowe."/>
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
                    <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl dark:text-white">Polityka Prywatności</h1>
                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400">
                        Ostatnia aktualizacja: {{ date('d.m.Y') }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Sekcja: Treść polityki --}}
        <div class="mx-auto max-w-7xl px-6 pb-24 sm:pb-32 lg:px-8">
            <div class="mx-auto max-w-3xl space-y-8 text-base text-gray-700 dark:text-gray-300">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">1. Wprowadzenie</h2>
                    <p class="leading-relaxed">
                        Aisello ("my", "nas", "nasz") szanuje Twoją prywatność i zobowiązuje się do ochrony Twoich danych osobowych. Niniejsza Polityka Prywatności wyjaśnia, w jaki sposób zbieramy, wykorzystujemy, przechowujemy i chronimy Twoje dane osobowe zgodnie z Rozporządzeniem Ogólnym o Ochronie Danych (RODO).
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">2. Administrator Danych</h2>
                    <p class="leading-relaxed">
                        Administratorem danych osobowych jest Aisello. W sprawach dotyczących przetwarzania danych osobowych możesz skontaktować się z nami poprzez formularz kontaktowy na stronie lub bezpośrednio na adres e-mail: kontakt@aisello.pl
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">3. Jakie dane zbieramy</h2>
                    <p class="leading-relaxed mb-4">Zbieramy następujące kategorie danych osobowych:</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li><strong class="font-semibold text-gray-900 dark:text-white">Dane kontaktowe:</strong> imię, nazwisko, adres e-mail, numer telefonu</li>
                        <li><strong class="font-semibold text-gray-900 dark:text-white">Dane dotyczące komunikacji:</strong> treść wiadomości, zapytań i odpowiedzi</li>
                        <li><strong class="font-semibold text-gray-900 dark:text-white">Dane techniczne:</strong> adres IP, typ przeglądarki, informacje o urządzeniu</li>
                        <li><strong class="font-semibold text-gray-900 dark:text-white">Dane dotyczące korzystania z usług:</strong> informacje o korzystaniu z naszych usług automatyzacji</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">4. Cel przetwarzania danych</h2>
                    <p class="leading-relaxed mb-4">Twoje dane osobowe przetwarzamy w następujących celach:</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Odpowiadanie na zapytania i wiadomości</li>
                        <li>Świadczenie usług automatyzacji i konsultacji</li>
                        <li>Komunikacja dotycząca realizacji usług</li>
                        <li>Wypełnianie obowiązków prawnych</li>
                        <li>Marketing bezpośredni (za Twoją zgodą)</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">5. Podstawa prawna przetwarzania</h2>
                    <p class="leading-relaxed mb-4">Przetwarzamy Twoje dane osobowe na podstawie:</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Twojej zgody (art. 6 ust. 1 lit. a RODO)</li>
                        <li>Wykonania umowy (art. 6 ust. 1 lit. b RODO)</li>
                        <li>Prawnie uzasadnionego interesu (art. 6 ust. 1 lit. f RODO)</li>
                        <li>Wypełnienia obowiązku prawnego (art. 6 ust. 1 lit. c RODO)</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">6. Udostępnianie danych</h2>
                    <p class="leading-relaxed mb-4">
                        Twoje dane osobowe mogą być udostępniane wyłącznie:
                    </p>
                    <ul class="list-disc list-inside space-y-2 ml-4 mb-4">
                        <li>Dostawcom usług technicznych (hosting, e-mail) działającym jako podmioty przetwarzające</li>
                        <li>Organom państwowym, gdy wymaga tego prawo</li>
                    </ul>
                    <p class="leading-relaxed">
                        Nie sprzedajemy ani nie udostępniamy Twoich danych osobowych stronom trzecim w celach marketingowych.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">7. Okres przechowywania danych</h2>
                    <p class="leading-relaxed">
                        Przechowujemy Twoje dane osobowe przez okres niezbędny do realizacji celów, dla których zostały zebrane, lub przez okres wymagany przepisami prawa. Po upływie tego okresu dane są usuwane lub anonimizowane.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">8. Twoje prawa</h2>
                    <p class="leading-relaxed mb-4">Masz prawo do:</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Dostępu do swoich danych osobowych</li>
                        <li>Sprostowania danych</li>
                        <li>Usunięcia danych ("prawo do bycia zapomnianym")</li>
                        <li>Ograniczenia przetwarzania</li>
                        <li>Przenoszenia danych</li>
                        <li>Wniesienia sprzeciwu wobec przetwarzania</li>
                        <li>Cofnięcia zgody w dowolnym momencie</li>
                        <li>Wniesienia skargi do organu nadzorczego (UODO)</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">9. Bezpieczeństwo danych</h2>
                    <p class="leading-relaxed">
                        Stosujemy odpowiednie środki techniczne i organizacyjne w celu ochrony Twoich danych osobowych przed nieuprawnionym dostępem, utratą, zniszczeniem lub zmianą.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">10. Pliki cookies</h2>
                    <p class="leading-relaxed">
                        Nasza strona internetowa może wykorzystywać pliki cookies. Więcej informacji znajdziesz w naszej Polityce Cookies (jeśli dotyczy).
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">11. Zmiany w Polityce Prywatności</h2>
                    <p class="leading-relaxed">
                        Zastrzegamy sobie prawo do wprowadzania zmian w niniejszej Polityce Prywatności. O wszelkich zmianach będziemy informować poprzez publikację zaktualizowanej wersji na naszej stronie internetowej.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">12. Kontakt</h2>
                    <p class="leading-relaxed mb-4">
                        W przypadku pytań dotyczących przetwarzania danych osobowych, prosimy o kontakt:
                    </p>
                    <p class="leading-relaxed">
                        <strong class="font-semibold text-gray-900 dark:text-white">E-mail:</strong> kontakt@aisello.pl<br/>
                        <strong class="font-semibold text-gray-900 dark:text-white">Formularz kontaktowy:</strong> <a href="{{ route('contact') }}" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 underline">{{ route('contact') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

</body>
</html>

