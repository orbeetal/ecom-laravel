<x-master-layout>
    <main class="space-y-8 py-8">
        <div class="container flex gap-8 overflow-x-auto py-2">
            @for($i = 1; $i <= 13; $i++)
            <div class="flex flex-col items-center justify-center gap-2">
                <div class="min-w-max shrink-0 grow-0">
                    <img
                        src="{{ asset('/images/categories/1.webp') }}"
                        class="h-16 w-20 rounded-full border bg-gray-100"
                    />
                </div>
                <div class="text-xs">PHARMACY</div>
            </div>
            @endfor
        </div>
        <div class="container space-y-6">
            <div class="grid gap-4 md:grid-cols-4">
                <div class="md:col-span-3">
                    <img
                        src="{{ asset('/images/banners/1.png') }}"
                        class="aspect-[12/5] w-full rounded-lg border bg-gray-100 object-cover"
                    />
                </div>
                <div class="grid gap-2 md:col-span-1">
                    <div>
                        <img
                            src="{{ asset('/images/banners/2.png') }}"
                            class="w-full rounded-lg border bg-gray-100"
                        />
                    </div>
                    <div>
                        <img
                            src="{{ asset('/images/banners/3.png') }}"
                            class="w-full rounded-lg border bg-gray-100"
                        />
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <img
                                src="{{ asset('/images/banners/4.png') }}"
                                class="w-full rounded-lg border bg-gray-100"
                            />
                        </div>
                        <div>
                            <img
                                src="{{ asset('/images/banners/5.png') }}"
                                class="w-full rounded-lg border bg-gray-100"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-3 md:grid-cols-3">
                <div>
                    <img
                        src="{{ asset('/images/banners/6.png') }}"
                        class="w-full rounded-lg border bg-gray-100"
                    />
                </div>
                <div>
                    <img
                        src="{{ asset('/images/banners/7.png') }}"
                        class="w-full rounded-lg border bg-gray-100"
                    />
                </div>
                <div>
                    <img
                        src="{{ asset('/images/banners/8.png') }}"
                        class="w-full rounded-lg border bg-gray-100"
                    />
                </div>
            </div>
        </div>
        <div class="container space-y-4">
            <div class="flex items-center justify-between gap-4">
                <div class="text-lg font-semibold">Most Popular Product:</div>
                <button
                    type="button"
                    class="rounded border border-black px-4 py-1.5 text-sm text-black"
                >
                    View All
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-6">
                <div>
                    <img
                        src="{{ asset('/images/offers/1.png') }}"
                        class="w-full rounded-lg border bg-gray-100"
                    />
                </div>

                @for($i = 1; $i <= 5; $i++)
                <div class="relative flex flex-col gap-1 rounded-md border p-2">
                    <div
                        class="absolute left-0 top-4 rounded-r-md bg-yellow-500 px-2 py-1 text-sm text-white"
                    >
                        50% <span class="text-xs">off</span>
                    </div>
                    <div>
                        @php $path = $i % 2 == 0 ? 2 : 1; @endphp
                        <img
                            src='{{ asset("/images/products/{$path}.webp") }}'
                            class="aspect-square w-full object-cover"
                        />
                    </div>
                    <div class="pt-1 text-sm font-semibold">
                        Product Full Name Product Full Name
                    </div>
                    <div class="text-lg text-yellow-600">
                        <span>&starf;</span>
                        <span>&starf;</span>
                        <span>&starf;</span>
                        <span>&star;</span>
                        <span>&star;</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-gray-500">
                            <span class="text-black"><b>৳</b>100</span>
                            <del class="text-red-500"><b>৳</b>200</del>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <div class="container space-y-4">
            <img
                src="{{ asset('/images/offers/2.png') }}"
                class="w-full rounded-lg border bg-gray-100"
            />
        </div>
        <div class="container space-y-4">
            <div class="flex items-center justify-between gap-4">
                <div class="text-lg font-semibold">New Arrival Product:</div>
                <button
                    type="button"
                    class="rounded border border-black px-4 py-1.5 text-sm text-black"
                >
                    View All
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-6">
                @for($i = 1; $i <= 6; $i++)
                <div class="relative flex flex-col gap-1 rounded-md border p-2">
                    <div
                        class="absolute left-0 top-4 rounded-r-md bg-yellow-500 px-2 py-1 text-sm text-white"
                    >
                        50% <span class="text-xs">off</span>
                    </div>
                    <div>
                        @php $path = $i % 2 == 0 ? 2 : 1; @endphp
                        <img
                            src='{{ asset("/images/products/{$path}.jpg") }}'
                            class="aspect-square w-full object-cover"
                        />
                    </div>
                    <div class="pt-1 text-sm font-semibold">
                        Product Full Name Product Full Name
                    </div>
                    <div class="text-lg text-yellow-600">
                        <span>&starf;</span>
                        <span>&starf;</span>
                        <span>&starf;</span>
                        <span>&star;</span>
                        <span>&star;</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-gray-500">
                            <span class="text-black"><b>৳</b>100</span>
                            <del class="text-red-500"><b>৳</b>200</del>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <div class="container space-y-4">
            <img
                src="{{ asset('/images/offers/3.png') }}"
                class="w-full rounded-lg border bg-gray-100"
            />
        </div>
        <div class="container space-y-4">
            <div class="flex items-center justify-between gap-4">
                <div class="text-lg font-semibold">Top Selling Product:</div>
                <button
                    type="button"
                    class="rounded border border-black px-4 py-1.5 text-sm text-black"
                >
                    View All
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-6">
                <div>
                    <img
                        src="{{ asset('/images/offers/1.png') }}"
                        class="w-full rounded-lg border bg-gray-100"
                    />
                </div>

                @for($i = 1; $i <= 5; $i++)
                <div class="relative flex flex-col gap-1 rounded-md border p-2">
                    <div
                        class="absolute left-0 top-4 rounded-r-md bg-yellow-500 px-2 py-1 text-sm text-white"
                    >
                        50% <span class="text-xs">off</span>
                    </div>
                    <div>
                        @php $path = $i % 2 == 0 ? 2 : 1; @endphp
                        <img
                            src='{{ asset("/images/products/{$path}.webp") }}'
                            class="aspect-square w-full object-cover"
                        />
                    </div>
                    <div class="pt-1 text-sm font-semibold">
                        Product Full Name Product Full Name
                    </div>
                    <div class="text-lg text-yellow-600">
                        <span>&starf;</span>
                        <span>&starf;</span>
                        <span>&starf;</span>
                        <span>&star;</span>
                        <span>&star;</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="text-sm font-semibold text-gray-500">
                            <span class="text-black"><b>৳</b>100</span>
                            <del class="text-red-500"><b>৳</b>200</del>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <div class="container space-y-4">
            <div class="flex items-center justify-between gap-4">
                <div class="text-lg font-semibold">Most Popular Brands</div>
            </div>
            <div class="flex justify-evenly items-center border px-4 py-4 gap-4">
                @for($i = 1; $i <= 8; $i++)
                @php $path = $i % 2 == 0 ? 2 : 1; @endphp
                <img
                    src='{{ asset("/images/brands/{$path}.png") }}'
                    class="w-[5%] aspect-square object-cover"
                />
                @endfor
            </div>
        </div>
    </main>
</x-master-layout>
