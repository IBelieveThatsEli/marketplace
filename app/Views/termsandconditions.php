<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<section class="flex flex-col gap-2 p-2">
    <div class="flex flex-col justify-center lg:flex-row lg:justify-between mb-7 lg:mb-0">
        <img class="block lg:hidden" src="<?= base_url('images/termsandconditions.png') ?>" alt="">
        <div class="flex gap-2 items-center">
            <svg 
                class="w-1/2 lg:w-1/6"
                viewBox="0 0 140 140" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
            >
                <path 
                    d="M70 10L120 30V62C120 95 99 122 70 132C41 122 20 95 20 62V30L70 10Z" 
                    fill="#3B82F6"
                />

                <path 
                    d="M48 56H92" 
                    stroke="white" 
                    stroke-width="6" 
                    stroke-linecap="round"
                />

                <path 
                    d="M48 72H82" 
                    stroke="white" 
                    stroke-width="6" 
                    stroke-linecap="round"
                />

                <path 
                    d="M48 88H68" 
                    stroke="white" 
                    stroke-width="6" 
                    stroke-linecap="round"
                />

                <circle 
                    cx="98" 
                    cy="96" 
                    r="24" 
                    fill="#60A5FA"
                    stroke="white"
                    stroke-width="6"
                />

                <path 
                    d="M87 96L95 104L110 88" 
                    stroke="white" 
                    stroke-width="6" 
                    stroke-linecap="round" 
                    stroke-linejoin="round"
                />
            </svg>

            <div>
                <h1 class="text-2xl font-bold">Terms and Conditions</h1>
                <p class="w-3/4 text-gray-700">Please read these Terms and Conditions carefully before using MarketPlace. By accessing and using our platform, you agree to be bound by these terms.</p>
            </div>
        </div>

        <img class="hidden lg:block w-[35%]" src="<?= base_url('images/termsandconditions.png') ?>" alt="">
    </div>

    <div class="mb-10">
        <h2 class="text-lg font-bold mb-4">Key highlights</h2>

        <div class="flex flex-col lg:flex-row justify-between text-sm">

            <div class="flex flex-col items-center justify-start lg:justify-center border-b border-gray-400 lg:border-none p-4 lg:p-1 gap-2 lg:gap-0">
                <div class="flex lg:flex-col w-full lg:w-auto justify-between">
                    <div class="flex lg:flex-col items-center">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke-width="1.5" 
                            stroke="currentColor" 
                            class="w-14 text-blue-600 p-2 bg-blue-200 rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>

                        <h3 class="font-bold my-2">Legally binding</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            These terms form a legally binding agreement between you and MarketPlace.
                        </p>        
                    </div>
                    <button class="chevron_button">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            class="arrow w-4 lg:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <p class="hidden lg:hidden text-gray-700 w-full chevron-hidden-content">
                    These terms form a legally binding agreement between you and MarketPlace.
                </p>
            </div>

            <div class="flex flex-col items-center justify-start lg:justify-center border-b border-gray-400 lg:border-none p-4 lg:p-1 gap-2 lg:gap-0">
                <div class="flex lg:flex-col w-full lg:w-auto justify-between">
                    <div class="flex lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 text-blue-600 p-2 bg-blue-200 rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>

                        <h3 class="font-bold my-2">User responsibilities</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            You agree to use the platform responsibly and in compliance with applicable laws.
                        </p>        
                    </div>
                    <button class="chevron_button">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            class="arrow w-4 lg:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <p class="hidden lg:hidden text-gray-700 w-full chevron-hidden-content">
                    You agree to use the platform responsibly and in compliance with applicable laws.
                </p>
            </div>

            <div class="flex flex-col items-center justify-start lg:justify-center border-b border-gray-400 lg:border-none p-4 lg:p-1 gap-2 lg:gap-0">
                <div class="flex lg:flex-col w-full lg:w-auto justify-between">
                    <div class="flex lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 text-blue-600 p-2 bg-blue-200 rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>

                        <h3 class="font-bold my-2">Your privacy</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            We value your privacy. Please review our Privacy Policy to understand how we protect your data.
                        </p>        
                    </div>
                    <button class="chevron_button">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            class="arrow w-4 lg:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <p class="hidden lg:hidden text-gray-700 w-full chevron-hidden-content">
                    We value your privacy. Please review our Privacy Policy to understand how we protect your data.
                </p>
            </div>

            <div class="flex flex-col items-center justify-start lg:justify-center border-b border-gray-400 lg:border-none p-4 lg:p-1 gap-2 lg:gap-0">
                <div class="flex lg:flex-col w-full lg:w-auto justify-between">
                    <div class="flex lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 text-blue-600 p-2 bg-blue-200 rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>

                        <h3 class="font-bold my-2">Updates</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            We may update these terms. Continued use of the platform means you accept the changes.
                        </p>        
                    </div>
                    <button class="chevron_button">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            class="arrow w-4 lg:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <p class="hidden lg:hidden text-gray-700 w-full chevron-hidden-content">
                    We may update these terms. Continued use of the platform means you accept the changes.
                </p>
            </div>

            <div class="flex flex-col items-center justify-start lg:justify-center border-b border-gray-400 lg:border-none p-4 lg:p-1 gap-2 lg:gap-0">
                <div class="flex lg:flex-col w-full lg:w-auto justify-between">
                    <div class="flex lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 text-blue-600 p-2 bg-blue-200 rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                        </svg>

                        <h3 class="font-bold my-2">Governing law</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            These terms are governed by and construed in accordance with applicable laws.
                        </p>        
                    </div>
                    <button class="chevron_button">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            class="arrow w-4 lg:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <p class="hidden lg:hidden text-gray-700 w-full chevron-hidden-content">
                    These terms are governed by and construed in accordance with applicable laws.
                </p>
            </div>

        </div>
    </div>

    
    <div class="flex flex-col md:flex-row w-full justify-between items-center">
        <div class="p-8 flex items-center gap-2">
            <svg 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="1.5" 
                stroke="currentColor" 
                class="w-1/2 h-1/2 lg:w-10 lg:h-10 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
            </svg>

            <div>
                <h3 class="text-lg font-bold lg:font-semibold lg:text-base">Important.</h3>
                <p class="text-sm text-gray-700">By using MarketPlace, you acknowledge that you have read, understood, and agree to these Terms and Conditions, along with our Privacy Policy.</p>
            </div>
        </div>

        <a class="px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700" href="<?= base_url('downloads/policy.txt') ?>" download>Read policy</a>
    </div>
</section>

<?= $this->endSection() ?>