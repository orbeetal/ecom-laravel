<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <header class="space-y-0.5">
            <div
                class="container flex flex-wrap justify-between bg-lime-500 text-sm *:border *:border-black *:px-1.5 *:pb-1 *:pt-2 md:text-base *:md:px-4"
            >
                <div class="order-2 shrink-0 grow-0 md:order-1">Language</div>
                <div class="order-3 shrink-0 grow-0 md:order-2">Currency</div>
                <div
                    class="order-1 flex w-full shrink grow items-center justify-center gap-2 text-xs md:order-3 md:w-auto md:text-base"
                >
                    <span class="md:block">Customer Care: </span>
                    <a href="#">+88 01511-786658,</a>
                    <a href="#">+88 01615-786658</a>
                </div>
                <div class="order-4 md:order-4">
                    <a href="#">Sign-In</a>
                </div>
                <div class="order-4 md:order-4">
                    <a href="#">Sign-Up</a>
                </div>
                <div class="order-5 md:order-5">
                    <a href="#">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            x="0px"
                            y="0px"
                            class="h-7"
                            viewBox="0 0 48 48"
                        >
                            <path
                                fill="#3F51B5"
                                d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"
                            ></path>
                            <path
                                fill="#FFF"
                                d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"
                            ></path>
                        </svg>
                    </a>
                </div>
                <div class="order-5 md:order-5">
                    <a href="#">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            x="0px"
                            y="0px"
                            class="h-7"
                            viewBox="0 0 48 48"
                        >
                            <linearGradient
                                id="PgB_UHa29h0TpFV_moJI9a_9a46bTk3awwI_gr1"
                                x1="9.816"
                                x2="41.246"
                                y1="9.871"
                                y2="41.301"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop offset="0" stop-color="#f44f5a"></stop>
                                <stop offset=".443" stop-color="#ee3d4a"></stop>
                                <stop offset="1" stop-color="#e52030"></stop>
                            </linearGradient>
                            <path
                                fill="url(#PgB_UHa29h0TpFV_moJI9a_9a46bTk3awwI_gr1)"
                                d="M45.012,34.56c-0.439,2.24-2.304,3.947-4.608,4.267C36.783,39.36,30.748,40,23.945,40	c-6.693,0-12.728-0.64-16.459-1.173c-2.304-0.32-4.17-2.027-4.608-4.267C2.439,32.107,2,28.48,2,24s0.439-8.107,0.878-10.56	c0.439-2.24,2.304-3.947,4.608-4.267C11.107,8.64,17.142,8,23.945,8s12.728,0.64,16.459,1.173c2.304,0.32,4.17,2.027,4.608,4.267	C45.451,15.893,46,19.52,46,24C45.89,28.48,45.451,32.107,45.012,34.56z"
                            ></path>
                            <path
                                d="M32.352,22.44l-11.436-7.624c-0.577-0.385-1.314-0.421-1.925-0.093C18.38,15.05,18,15.683,18,16.376	v15.248c0,0.693,0.38,1.327,0.991,1.654c0.278,0.149,0.581,0.222,0.884,0.222c0.364,0,0.726-0.106,1.04-0.315l11.436-7.624	c0.523-0.349,0.835-0.932,0.835-1.56C33.187,23.372,32.874,22.789,32.352,22.44z"
                                opacity=".05"
                            ></path>
                            <path
                                d="M20.681,15.237l10.79,7.194c0.689,0.495,1.153,0.938,1.153,1.513c0,0.575-0.224,0.976-0.715,1.334	c-0.371,0.27-11.045,7.364-11.045,7.364c-0.901,0.604-2.364,0.476-2.364-1.499V16.744C18.5,14.739,20.084,14.839,20.681,15.237z"
                                opacity=".07"
                            ></path>
                            <path
                                fill="#fff"
                                d="M19,31.568V16.433c0-0.743,0.828-1.187,1.447-0.774l11.352,7.568c0.553,0.368,0.553,1.18,0,1.549	l-11.352,7.568C19.828,32.755,19,32.312,19,31.568z"
                            ></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div
                class="container flex flex-wrap justify-between bg-blue-500 text-sm *:border *:border-black *:px-1.5 *:pb-1 *:pt-2 md:text-base *:md:px-4"
            >
                <div class="shrink-0 grow-0 text-center">
                    Company <br />
                    Logo
                </div>
                <div class="flex shrink grow items-center justify-center">
                    <div class="flex *:px-2 *:py-2 *:text-base">
                        <div class="border border-black bg-white">
                            Main Category
                        </div>
                        <div class="border border-black bg-white">
                            Sub Category
                        </div>
                        <div class="border border-black bg-white">Brands</div>
                        <div class="border border-black bg-white">
                            What are you looking Product ?
                        </div>
                        <div
                            class="w-8 scale-110 border border-black bg-blue-600"
                        ></div>
                    </div>
                </div>
                <div class="flex shrink-0 grow-0 items-center gap-4">
                    <div class="pentagon h-12 w-14 bg-white"></div>
                    <div class="w-48">
                        <div class="text-lg">Hello, Sign-in</div>
                        <div class="text-xl font-bold">My Account</div>
                    </div>
                </div>
                <div class="flex shrink-0 grow-0 items-center justify-center">
                    Cart
                </div>
            </div>

            <div>
                <div
                    class="container flex flex-wrap bg-white text-sm *:grow *:border *:border-black *:px-1.5 *:pb-1 *:pt-2 md:text-base *:md:px-4"
                >
                    <div>Allah is Almighty of the World</div>
                    <div>Thank you for Visiting Our Website</div>
                    <div>Total Customer:</div>
                    <div>Total New Customer:</div>
                    <div>Today Visitor:</div>
                </div>
                <div
                    class="container flex flex-wrap bg-white text-sm *:grow *:border *:border-black *:px-1.5 *:pb-1 *:pt-2 md:text-base *:md:px-4"
                >
                    <div>Main Category</div>
                    <div>Home</div>
                    <div>Popular Products</div>
                    <div>Today Deal</div>
                    <div>Top Sale</div>
                    <div>Blogs Info.</div>
                    <div>Vendor Point</div>
                    <div>Contact Us</div>
                    <div>Company Info</div>
                    <div>More Info.</div>
                </div>
            </div>
        </header>

        {{ $slot }}

        <footer>
            <div class="container grid grid-cols-3 py-4 bg-black">
                <div class="col-start-2 flex gap-4 justify-center items-center *:bg-white *:rounded-full">
                    <img class="w-12" src="{{ asset('/images/icons/facebook.png') }}" alt="">
                    <img class="w-12" src="{{ asset('/images/icons/twitter.png') }}" alt="">
                    <img class="w-12" src="{{ asset('/images/icons/instagram.png') }}" alt="">
                    <img class="w-12" src="{{ asset('/images/icons/youtube.png') }}" alt="">
                </div>
            </div>
        </footer>
    </body>
</html>
