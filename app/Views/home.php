<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<section class="mx-auto flex w-full max-w-5xl flex-col items-center justify-center px-4 py-8 sm:px-6 md:py-12 lg:px-8">
    <div class="mb-4 rounded-full bg-blue-100 px-3 py-2 text-center shadow-sm sm:mb-6">
        <h2 class="text-xs sm:text-sm">Safe local buying and selling across South Africa</h2>
    </div>
    <h1 class="mb-3 text-center text-3xl font-bold sm:text-4xl md:text-5xl">
        Sell fast. <span class="text-blue-600">Buy Local.</span>
    </h1>
    <p class="w-full max-w-2xl text-center text-sm text-gray-600 sm:text-base mb-10">
        Find second-hand electronics, furniture, clothing, vehicles, collectibles and more from people near you.
    </p>

    <form action="<?= site_url('/') ?>" method="get" class="relative w-full sm:max-w-sm">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.2-5.2m1.7-5.3a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
            </svg>
        </span>
        <input type="search" name="q" value="<?= esc($search ?? '') ?>" placeholder="Search for items..." class="w-full rounded-full border border-gray-300 px-10 py-2 pr-20 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="submit" class="absolute right-1 top-1/2 -translate-y-1/2 rounded-full bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700">
            Search
        </button>
    </form>
</section>

<section class="mx-auto flex w-full max-w-5xl flex-col px-4 sm:px-6 lg:px-8">
    <?php if (session()->has('success')): ?>
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            <?= esc(session('success')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            <?= esc(session('error')) ?>
        </div>
    <?php endif; ?>

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-xl font-bold">Available Listings</h2>
            <p class="text-sm text-gray-500">
                <?= count($listings ?? []) ?> active items<?= ! empty($search) ? ' matching "' . esc($search) . '"' : '' ?>
            </p>
        </div>
        <?php if (! empty($search)): ?>
            <a href="<?= site_url('/') ?>" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Clear search</a>
        <?php endif; ?>
    </div>

    <?php if (! empty($listings)): ?>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($listings as $listing): ?>
                <?php
                    $firstImage = $listing['first_image'] ?? null;
                    $isOwnListing = session()->get('isLoggedIn') === true && (int) session('user_id') === (int) $listing['seller_id'];
                ?>
                <article class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm">
                    <?php if ($firstImage): ?>
                        <img src="<?= base_url(esc($firstImage['image_url'])) ?>" alt="<?= esc($listing['title']) ?>" class="h-44 w-full object-cover">
                    <?php else: ?>
                        <div class="flex h-44 w-full items-center justify-center bg-gray-100 text-sm text-gray-400">
                            No image
                        </div>
                    <?php endif; ?>

                    <div class="p-4">
                        <div class="mb-3">
                            <h3 class="line-clamp-1 text-lg font-semibold"><?= esc($listing['title']) ?></h3>
                            <p class="text-sm text-gray-500"><?= esc($listing['category_name'] ?? 'Uncategorized') ?> by <?= esc($listing['seller_name']) ?></p>
                        </div>

                        <p class="mb-4 line-clamp-2 min-h-10 text-sm text-gray-600">
                            <?= esc($listing['description'] ?: 'No description provided.') ?>
                        </p>

                        <div class="flex items-center justify-between gap-3">
                            <p class="text-lg font-bold text-blue-600">R<?= number_format((float) $listing['price'], 2) ?></p>

                            <?php if ($isOwnListing): ?>
                                <span class="rounded-lg bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-500">Your Listing</span>
                            <?php elseif (session()->get('isLoggedIn') === true): ?>
                                <form action="<?= site_url('/listings/' . $listing['id'] . '/purchase') ?>" method="post" onsubmit="return confirm('Purchase this listing for R<?= number_format((float) $listing['price'], 2) ?>?');">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="rounded-lg bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                                        Purchase
                                    </button>
                                </form>
                            <?php else: ?>
                                <a href="<?= site_url('/login') ?>" class="rounded-lg bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                                    Log In To Buy
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="rounded-lg border border-dashed border-gray-300 bg-white p-8 text-center text-gray-500">
            <?= ! empty($search) ? 'No active listings match your search.' : 'No active listings are available right now.' ?>
        </div>
    <?php endif; ?>
</section>

<?= $this->endSection() ?>
