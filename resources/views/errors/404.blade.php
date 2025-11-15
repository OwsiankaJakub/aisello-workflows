<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- SEO Meta Tags --}}
    <title>404 - Strona nie znaleziona | Aisello</title>
    <meta name="description" content="Strona, której szukasz nie istnieje. Wróć na stronę główną lub skontaktuj się z nami."/>
    <meta name="robots" content="noindex, follow"/>
    <link rel="canonical" href="{{ url('/') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}"/>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

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
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-9xl font-bold tracking-tight text-gray-900 sm:text-[12rem] dark:text-white">404</h1>
                        <p class="mt-6 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Strona nie znaleziona</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                            Przepraszamy, ale strona, której szukasz nie istnieje lub została przeniesiona.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="{{ route('home') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Wróć na stronę główną</a>
                            <a href="{{ route('contact') }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Skontaktuj się z nami <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Sekcja: Przydatne linki--}}
        <div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Może Cię zainteresować</h2>
                    <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Przydatne strony</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" />
                                </svg>
                                Strona główna
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Wróć na stronę główną i poznaj nasze usługi automatyzacji procesów.</p>
                                <p class="mt-6">
                                    <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-indigo-600 dark:text-indigo-400">Zobacz więcej <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd" />
                                </svg>
                                Jak to działa
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Dowiedz się, jak automatyzujemy procesy w Twojej firmie.</p>
                                <p class="mt-6">
                                    <a href="{{ route('howItWorks') }}" class="text-sm font-semibold leading-6 text-indigo-600 dark:text-indigo-400">Zobacz więcej <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="flex items-center gap-x-3 text-base font-semibold text-gray-900 dark:text-white">
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-indigo-600 dark:text-indigo-400">
                                    <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                    <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                                </svg>
                                Kontakt
                            </dt>
                            <dd class="mt-4 flex flex-auto flex-col text-base text-gray-600 dark:text-gray-400">
                                <p class="flex-auto">Masz pytania? Skontaktuj się z nami, chętnie pomożemy.</p>
                                <p class="mt-6">
                                    <a href="{{ route('contact') }}" class="text-sm font-semibold leading-6 text-indigo-600 dark:text-indigo-400">Zobacz więcej <span aria-hidden="true">→</span></a>
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>

