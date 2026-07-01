<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<section class="flex flex-col gap-2 p-2">
    <div class="flex flex-col justify-center lg:flex-row lg:justify-between mb-7 lg:mb-0">
        <img class="block lg:hidden" src="<?= base_url('images/safetyandsecurity.png') ?>" alt="">
        <div class="flex gap-2 items-center">
        <svg 
            class="w-1/2 lg:w-1/6"
            viewBox="0 0 24 24" 
            xmlns="http://www.w3.org/2000/svg">
            
            <!-- Shield -->
            <path 
                d="M12.113 21.98a.333.333 0 0 1-.226 0C10.917 21.64 4 18.94 4 11.252V4.304a.4.4 0 0 1 .303-.389l7.6-1.903a.4.4 0 0 1 .194 0l7.6 1.903a.4.4 0 0 1 .303.389v6.948c0 7.765-6.916 10.397-7.887 10.729Z" 
                fill="#3B82F6"/>

            <!-- Lock (scaled down and centered inside shield) -->
            <g transform="translate(6.5, 6) scale(0.46)">
                <path 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                    fill="none"
                    stroke="white"
                    stroke-width="1.5"/>
            </g>
        </svg>
            <div>
                <h1 class="text-2xl font-bold">Safety & Security</h1>
                <p class="w-3/4 text-gray-700">Your safety is our priority. Follow these tips to help ensure a secure experience on MarketPlace.</p>
            </div>
        </div>

        <img class="hidden lg:block w-[35%]" src="<?= base_url('images/safetyandsecurity.png') ?>" alt="">
    </div>

    <div class="mb-10">
        <h2 class="text-lg font-bold mb-4">Safety tips</h2>

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

                        <h3 class="font-bold my-2">Meet in public places</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            Always meet in well-lit, public places. Avoid private or isolated areas.
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
                    Always meet in well-lit, public places. Avoid private or isolated areas.
                </p>
            </div>

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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>

                        <h3 class="font-bold my-2">Communication in-app</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            Keep all conversations within MarketPlace messages.
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
                    Keep all conversations within MarketPlace messages.
                </p>
            </div>

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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>

                        <h3 class="font-bold my-2">Trust your instincts</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            If something feels off, trust your guy and walk away.
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
                    If something feels off, trust your guy and walk away.
                </p>
            </div>

            <div class="flex flex-col items-center justify-start lg:justify-center border-b border-gray-400 lg:border-none p-4 lg:p-1 gap-2 lg:gap-0">
                <div class="flex lg:flex-col w-full lg:w-auto justify-between">
                    <div class="flex lg:flex-col items-center">
                    <svg 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        xmlns="http://www.w3.org/2000/svg" 
                        class="w-14 text-blue-600 p-2 bg-blue-200 rounded-full"
                    >
                    <path 
                        d="M5.82333 6.00037C6.2383 6.36683 6.5 6.90285 6.5 7.5C6.5 8.60457 5.60457 9.5 4.5 9.5C3.90285 9.5 3.36683 9.2383 3.00037 8.82333M5.82333 6.00037C5.94144 6 6.06676 6 6.2 6H17.8C17.9332 6 18.0586 6 18.1767 6.00037M5.82333 6.00037C4.94852 6.00308 4.46895 6.02593 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3.02593 7.46895 3.00308 7.94852 3.00037 8.82333M3.00037 8.82333C3 8.94144 3 9.06676 3 9.2V14.8C3 14.9332 3 15.0586 3.00037 15.1767M3.00037 15.1767C3.36683 14.7617 3.90285 14.5 4.5 14.5C5.60457 14.5 6.5 15.3954 6.5 16.5C6.5 17.0971 6.2383 17.6332 5.82333 17.9996M3.00037 15.1767C3.00308 16.0515 3.02593 16.531 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.46895 17.9741 4.94852 17.9969 5.82333 17.9996M5.82333 17.9996C5.94144 18 6.06676 18 6.2 18H17.8C17.9332 18 18.0586 18 18.1767 17.9996M21 15.1771C20.6335 14.7619 20.0973 14.5 19.5 14.5C18.3954 14.5 17.5 15.3954 17.5 16.5C17.5 17.0971 17.7617 17.6332 18.1767 17.9996M21 15.1771C21.0004 15.0589 21 14.9334 21 14.8V9.2C21 9.06676 21 8.94144 20.9996 8.82333M21 15.1771C20.9973 16.0516 20.974 16.5311 20.782 16.908C20.5903 17.2843 20.2843 17.5903 19.908 17.782C19.5311 17.9741 19.0515 17.9969 18.1767 17.9996M20.9996 8.82333C20.6332 9.2383 20.0971 9.5 19.5 9.5C18.3954 9.5 17.5 8.60457 17.5 7.5C17.5 6.90285 17.7617 6.36683 18.1767 6.00037M20.9996 8.82333C20.9969 7.94852 20.9741 7.46895 20.782 7.09202C20.5903 6.71569 20.2843 6.40973 19.908 6.21799C19.5311 6.02593 19.0515 6.00308 18.1767 6.00037M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                    />
                    </svg>

                        <h3 class="font-bold my-2">Use secure payments</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            Avoid sharing personal information or making direct bank transfers.
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
                    Avoid sharing personal information or making direct bank transfers.
                </p>
            </div>

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
                    <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        d="M3 3v1.5M3 21v-6m0 0 2.77-.693a9 9 0 0 1 6.208.682l.108.054a9 9 0 0 0 6.086.71l3.114-.732a48.524 48.524 0 0 1-.005-10.499l-3.11.732a9 9 0 0 1-6.085-.711l-.108-.054a9 9 0 0 0-6.208-.682L3 4.5M3 15V4.5" />
                    </svg>

                        <h3 class="font-bold my-2">Report suspicious activity</h3>
                        <p class="hidden lg:block text-center text-gray-700 w-3/4">
                            Report any suspicious users or listings to help keep our community safe.
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
                    Report any suspicious users or listings to help keep our community safe.
                </p>
            </div>

        </div>
    </div>
    
    <div class="flex flex-col lg:flex-row justify-between text-lg lg:text-sm my-10 lg:m-5">
        <div class="flex gap-2 p-2 lg:border-r lg:border-gray-500">
            <svg 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="1.5" 
                stroke="currentColor" 
                class="w-1/4 h-1/4 lg:w-10 lg:h-10 bg-blue-200 text-blue-600 rounded-full p-2">
                <path 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
            <div class="flex flex-col gap-3 mt-3">
                <h3 class="font-bold">Our commitment</h3>
                <p>We're committed to building a safe community. Our team review reports, monitors activity, and takes action on any violations of our terms.</p>
                <a href="<?= base_url('/termsandconditions') ?>" class="text-blue-600 hover:text-blue-700 font-semibold hover:font-bold">Read our Terms & Privacy ></a>
            </div>
        </div>
        <div class="flex gap-2 p-2 border-gray-500">
            <svg 
            class="w-1/5 h-1/5 lg:w-10 lg:h-10 bg-blue-200 text-blue-600 rounded-full p-2" 
            viewBox="0 0 24 24" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg"
            >
            <path 
                fill-rule="evenodd" 
                clip-rule="evenodd" 
                d="M14.581 19.4041C14.6645 19.9894 14.2606 20.5326 13.676 20.6211L12 20.9841C11.6307 21.1187 11.2169 21.0265 10.9398 20.7477C10.6627 20.469 10.5729 20.0546 10.7097 19.6861C10.8466 19.3176 11.1851 19.0623 11.577 19.0321L13.252 18.6701C13.8213 18.509 14.4142 18.8364 14.581 19.4041V19.4041Z" 
                stroke="currentColor" 
                stroke-width="1.5" 
                stroke-linecap="round" 
                stroke-linejoin="round"
            />
            <path 
                fill-rule="evenodd" 
                clip-rule="evenodd" 
                d="M7 15.9919C5.89543 15.9919 5 15.0965 5 13.9919V10.9919C5 9.88737 5.89543 8.99194 7 8.99194C8.10457 8.99194 9 9.88737 9 10.9919V13.9919C9 15.0965 8.10457 15.9919 7 15.9919Z" 
                stroke="currentColor" 
                stroke-width="1.5" 
                stroke-linecap="round" 
                stroke-linejoin="round"
            />
            <path 
                fill-rule="evenodd" 
                clip-rule="evenodd" 
                d="M17 15.9919C15.8954 15.9919 15 15.0965 15 13.9919V10.9919C15 9.88737 15.8954 8.99194 17 8.99194C18.1046 8.99194 19 9.88737 19 10.9919V13.9919C19 15.0965 18.1046 15.9919 17 15.9919Z" 
                stroke="currentColor" 
                stroke-width="1.5" 
                stroke-linecap="round" 
                stroke-linejoin="round"
            />
            <path 
                d="M18.25 11C18.25 11.4142 18.5858 11.75 19 11.75C19.4142 11.75 19.75 11.4142 19.75 11H18.25ZM4.25 11C4.25 11.4142 4.58579 11.75 5 11.75C5.41421 11.75 5.75 11.4142 5.75 11H4.25ZM19.75 14.0023C19.7513 13.5881 19.4165 13.2513 19.0023 13.25C18.5881 13.2487 18.2513 13.5835 18.25 13.9977L19.75 14.0023ZM13.5113 19.8951C13.1071 19.9855 12.8527 20.3865 12.9431 20.7907C13.0335 21.1949 13.4345 21.4493 13.8387 21.3589L13.5113 19.8951ZM19.75 11V9H18.25V11H19.75ZM19.75 9C19.75 4.71979 16.2802 1.25 12 1.25V2.75C15.4518 2.75 18.25 5.54822 18.25 9H19.75ZM12 1.25C7.71979 1.25 4.25 4.71979 4.25 9H5.75C5.75 5.54822 8.54822 2.75 12 2.75V1.25ZM4.25 9V11H5.75V9H4.25ZM18.25 13.9977C18.2414 16.8289 16.2742 19.2771 13.5113 19.8951L13.8387 21.3589C17.2853 20.588 19.7393 17.534 19.75 14.0023L18.25 13.9977Z" 
                fill="currentColor"
            />
            </svg>

            <div class="flex flex-col gap-3 mt-3">
                <h3 class="font-bold">Need help?</h3>
                <p>If you feel unsafe or need assistance, our support team is here for you. Contact us anytime.</p>
                <div>
                    <a href="<?= base_url('/contactus') ?>" class="text-white font-semibold bg-blue-600 hover:bg-blue-700 p-2 rounded-md">Contact Support</a>
                </div>
            </div>
        </div>        
    </div>
    <div class="p-8 flex items-center gap-2">
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="1.5" 
            stroke="currentColor" 
            class="w-1/6 h-1/6 lg:w-10 lg:h-10 text-blue-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>

        <div>
            <h3 class="text-lg font-bold lg:font-semibold lg:text-base">Stay safe. Shop smart.</h3>
            <p class="text-sm text-gray-700">Together, we can build a trustworthy community.</p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>