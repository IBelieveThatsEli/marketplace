<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<section class="flex flex-col justify-center lg:flex-row lg:justify-between mb-7 lg:mb-0">
    <img class="block lg:hidden" src="<?= base_url('images/helpcenter.png') ?>" alt="">
    <div class="flex items-center md:px-20">
        <div>
            <h1 class="text-2xl font-bold">Help Center</h1>
            <p class="w-3/4 text-gray-700">Find your answers to common questions and get the support you need.</p>
            <div class="relative w-full max-w-md">
                <form action="https://www.google.com/search" method="GET" target="_blank">
                    <svg 
                        class="absolute left-4 top-6 h-5 w-5 -translate-y-1/2 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke-width="1.5" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" 
                        />
                    </svg>

                    <input 
                        type="text"
                        name="q"
                        placeholder="Search for help articles..."
                        class="w-full rounded-lg border border-gray-300 bg-white py-3 pl-12 pr-4 text-sm text-gray-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >

                    <button 
                        type="submit"
                        class="mt-3 rounded-lg bg-blue-600 px-4 py-2 text-white"
                    >
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>

    <img class="hidden lg:block w-[35%]" src="<?= base_url('images/helpcenter.png') ?>" alt="">
</section>

<section class="w-full px-6 py-10">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-bold text-xl mb-6">Browse help topics</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">

            <!-- Buying -->
            <a href="" class="group border border-gray-300 rounded-xl bg-white p-5 flex flex-col gap-4 transition hover:shadow-md hover:border-blue-300">
                <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-bold text-sm text-gray-900">Buying on MarketPlace</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Learn how to find items, place orders, and manage your purchases.
                    </p>
                </div>

                <div class="mt-auto flex justify-end text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>

            <!-- Selling -->
            <a href="" class="group border border-gray-300 rounded-xl bg-white p-5 flex flex-col gap-4 transition hover:shadow-md hover:border-blue-300">
                <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5A2.25 2.25 0 0 0 11.25 11.25h-4.5A2.25 2.25 0 0 0 4.5 13.5V21m15 0v-7.5A2.25 2.25 0 0 0 17.25 11.25H15m4.5 9.75H4.5M6 7.5h12M6 3h12v4.5H6V3Z" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-bold text-sm text-gray-900">Selling on MarketPlace</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Create listings, manage orders, and grow your sales.
                    </p>
                </div>

                <div class="mt-auto flex justify-end text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>

            <!-- Safety -->
            <a href="" class="group border border-gray-300 rounded-xl bg-white p-5 flex flex-col gap-4 transition hover:shadow-md hover:border-blue-300">
                <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75A11.959 11.959 0 0 1 12 2.714Z" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-bold text-sm text-gray-900">Safety & Security</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Tips to stay safe and protect your account.
                    </p>
                </div>

                <div class="mt-auto flex justify-end text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>

            <!-- Account -->
            <a href="" class="group border border-gray-300 rounded-xl bg-white p-5 flex flex-col gap-4 transition hover:shadow-md hover:border-blue-300">
                <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a8.25 8.25 0 0 1 15 0" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-bold text-sm text-gray-900">Account</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Manage your account settings and preferences.
                    </p>
                </div>

                <div class="mt-auto flex justify-end text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>

            <!-- Shipping -->
            <a href="" class="group border border-gray-300 rounded-xl bg-white p-5 flex flex-col gap-4 transition hover:shadow-md hover:border-blue-300">
                <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h7.5m0 0a1.5 1.5 0 0 1 3 0m-3 0a1.5 1.5 0 0 0 3 0m-3 0H21V9.75a2.25 2.25 0 0 0-2.25-2.25h-3.75L12.75 4.5H3v14.25h2.25m13.5 0H21" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-bold text-sm text-gray-900">Shipping & Delivery</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Find information about delivery and shipping options.
                    </p>
                </div>

                <div class="mt-auto flex justify-end text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 transition group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </a>

        </div>
    </div>
</section>

<section class="flex flex-col md:flex-row border border-blue-400 bg-blue-200 rounded-lg p-4 items-center md:justify-between">
    <div class="flex flex-col md:flex-row gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 text-blue-600 hidden md:block">
            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
        </svg>

        <div class="flex-col text-center mb-3 md:m-0">
            <h1 class="text-normal md:text-sm font-bold">Can't find what you're looking for?</h1>
            <p class="text-xs md:text-sm text-gray-600">Our support team is here to help you.</p>
        </div>
    </div>

    <a href="<?= base_url('/contactus') ?>" class="p-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white">Contact Us</a>

</section>


<?= $this->endSection() ?>