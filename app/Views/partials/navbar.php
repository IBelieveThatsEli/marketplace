<nav class="border-b border-gray-400">
    <section class="mx-auto max-w-5xl relative flex items-center justify-between p-4">
        <!-- 
        
            START OF HERO
        
        -->
        <a href ="<?= base_url('/') ?>" class="flex gap-1 items-center">
            <svg 
                class="size-8 bg-blue-500 p-1 rounded-lg"
                viewBox="0 0 24 24" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg" 
                stroke="#ffffff" 
                data-darkreader-inline-stroke="" 
                style="--darkreader-inline-stroke: var(--darkreader-text-ffffff, #e8e6e3);" 
                stroke-width="0.024">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> 
                    <path d="M19.24 5.57859H18.84L15.46 2.19859C15.19 1.92859 14.75 1.92859 14.47 2.19859C14.2 2.46859 14.2 2.90859 14.47 3.18859L16.86 5.57859H7.14L9.53 3.18859C9.8 2.91859 9.8 2.47859 9.53 2.19859C9.26 1.92859 8.82 1.92859 8.54 2.19859L5.17 5.57859H4.77C3.87 5.57859 2 5.57859 2 8.13859C2 9.10859 2.2 9.74859 2.62 10.1686C2.86 10.4186 3.15 10.5486 3.46 10.6186C3.75 10.6886 4.06 10.6986 4.36 10.6986H19.64C19.95 10.6986 20.24 10.6786 20.52 10.6186C21.36 10.4186 22 9.81859 22 8.13859C22 5.57859 20.13 5.57859 19.24 5.57859Z" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: var(--darkreader-background-ffffff, #181a1b);"></path> <path d="M19.0506 12H4.87064C4.25064 12 3.78064 12.55 3.88064 13.16L4.72064 18.3C5.00064 20.02 5.75064 22 9.08064 22H14.6906C18.0606 22 18.6606 20.31 19.0206 18.42L20.0306 13.19C20.1506 12.57 19.6806 12 19.0506 12ZM12.0006 19.5C9.66064 19.5 7.75064 17.59 7.75064 15.25C7.75064 14.84 8.09064 14.5 8.50064 14.5C8.91064 14.5 9.25064 14.84 9.25064 15.25C9.25064 16.77 10.4806 18 12.0006 18C13.5206 18 14.7506 16.77 14.7506 15.25C14.7506 14.84 15.0906 14.5 15.5006 14.5C15.9106 14.5 16.2506 14.84 16.2506 15.25C16.2506 17.59 14.3406 19.5 12.0006 19.5Z" fill="#ffffff" data-darkreader-inline-fill="" style="--darkreader-inline-fill: var(--darkreader-background-ffffff, #181a1b);"></path> 
                </g>
            </svg>
            <h1 class="text-base font-bold">
                Market<span class="text-blue-500">Place</span>
            </h1>
        </a>
        <!-- 
        
            END OF HERO
        
        -->

        <?php $isLoggedIn = session()->get('isLoggedIn') === true; ?>


        <!-- 
                    
            START OF AUTH ACTIONS

        -->
        <?php if ($isLoggedIn): ?>
            <div class="relative ml-2">
                <!-- Menu icon button -->
                <button 
                    type="button" 
                    id="user-menu-button" 
                    class="flex items-center justify-center rounded-lg border border-gray-300 p-2 text-gray-700 hover:bg-gray-50"
                    aria-expanded="false"
                    aria-controls="user-menu"
                >
                    <span class="sr-only">Open user menu</span>

                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke-width="1.5" 
                        stroke="currentColor" 
                        class="size-6"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" 
                        />
                    </svg>
                </button>

                <!-- Dropdown directly under menu icon -->
                <div 
                    id="user-menu" 
                    class="absolute right-0 top-full z-50 mt-2 hidden w-60 rounded-lg border border-gray-200 bg-white shadow-lg"
                >
                    <div class="border-b border-gray-100 px-4 py-3">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-500 text-sm font-semibold text-white">
                                <?= esc(strtoupper(substr(session()->get('user_name') ?? 'U', 0, 1))) ?>
                            </span>

                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-gray-900">
                                    <?= esc(session()->get('user_name') ?? 'User') ?>
                                </p>
                                <p class="truncate text-xs text-gray-500">
                                    <?= esc(session()->get('user_email') ?? '') ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col px-2 py-2">
                        <a 
                            href="<?= base_url('/') ?>" 
                            class="rounded-md px-3 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        >
                            Dashboard
                        </a>

                        <a 
                            href="<?= base_url('/mylistings') ?>" 
                            class="rounded-md px-3 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        >
                            My Listings
                        </a>

                        <a 
                            href="<?= base_url('/profile') ?>" 
                            class="rounded-md px-3 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        >
                            Profile
                        </a>

                        <form action="<?= base_url('/logout') ?>" method="post">
                            <?= csrf_field() ?>
                            <button 
                                type="submit" 
                                class="w-full rounded-md px-3 py-2 text-left text-sm text-red-600 hover:bg-red-50"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <a 
                href="<?= base_url('/login') ?>" 
                class="ml-2 rounded-lg bg-blue-500 px-3 py-1 text-white hover:bg-blue-600"
            >
                Sign in
            </a>
        <?php endif; ?>

        <!-- 
                    
            END OF AUTH ACTIONS

        -->
    </section>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.getElementById('user-menu-button');
        const menu = document.getElementById('user-menu');

        if (!button || !menu) {
            return;
        }

        button.addEventListener('click', function (event) {
            event.stopPropagation();

            const isHidden = menu.classList.contains('hidden');

            if (isHidden) {
                menu.classList.remove('hidden');
                button.setAttribute('aria-expanded', 'true');
            } else {
                menu.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            }
        });

        menu.addEventListener('click', function (event) {
            event.stopPropagation();
        });

        document.addEventListener('click', function () {
            menu.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                menu.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            }
        });
    });
</script>