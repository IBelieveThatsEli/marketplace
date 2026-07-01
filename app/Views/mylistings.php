<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<?php 
    $cardStyle = "border border-gray-300 rounded-lg p-4 mb-4 hover:shadow-md transition-shadow duration-300";
?>

<section class="flex flex-col mx-auto max-w-5xl px-4 py-8 sm:px-6 md:py-12 lg:px-8">
    <section class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-xl font-bold">My Listings</h1>
            <p class="text-gray-400">Manage your products, update details, pause or mark items as sold.</p>
        </div>
        <button type="button" onclick="document.getElementById('create-listing-modal').classList.remove('hidden')" class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
            + Create Listing
        </button>
    </section>

    <section class="flex flex-col md:flex-row gap-2">
        <div class="<?= $cardStyle ?> flex gap-4 items-center">
            <svg class="size-10 text-blue-600 bg-blue-300 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <div>
                <h2 class="text-lg font-semibold">Total Listings</h2>
                <h1 class="text-2xl font-bold"><?= esc($stats['total']) ?></h1>
                <p class="text-gray-400">All time</p>
            </div>
        </div>

        <div class="<?= $cardStyle ?> flex gap-4 items-center">
            <svg class="size-10 text-green-600 bg-green-300 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            <div>
                <h2 class="text-lg font-semibold">Active Listings</h2>
                <h1 class="text-2xl font-bold"><?= esc($stats['active']) ?></h1>
                <p class="text-gray-400">Currently live</p>
            </div>
        </div>

        <div class="<?= $cardStyle ?> flex gap-4 items-center">
            <svg class="size-10 text-purple-600 bg-purple-300 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>

            <div>
                <h2 class="text-lg font-semibold">Sold Listings</h2>
                <h1 class="text-2xl font-bold"><?= esc($stats['sold']) ?></h1>
                <p class="text-gray-400">Marked as sold</p>
            </div>
        </div>

        <div class="<?= $cardStyle ?> flex gap-4 items-center">
            <svg class="size-10 text-orange-600 bg-orange-300 p-1 rounded-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            <div>
                <h2 class="text-lg font-semibold">Paused/Removed</h2>
                <h1 class="text-2xl font-bold"><?= esc($stats['paused'] + $stats['removed']) ?></h1>
                <p class="text-gray-400">Not currently live</p>
            </div>
        </div>
    </section>

    <section class="mt-8">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold">Your Listings</h2>
            <span class="text-sm text-gray-500"><?= esc($stats['total']) ?> total</span>
        </div>

        <?php if (! empty($listings)): ?>
            <div class="grid gap-4 md:grid-cols-2">
                <?php foreach ($listings as $listing): ?>
                    <?php
                        $listingModalId = 'manage-listing-modal-' . $listing['id'];
                        $isPaused = $listing['status'] === 'paused';
                        $isSold = $listing['status'] === 'sold';
                        $nextStatus = $isPaused || $isSold ? 'active' : 'paused';
                        $statusActionLabel = $isSold ? 'Sell Again' : ($isPaused ? 'Reactivate Listing' : 'Pause Listing');
                        $statusClasses = $listing['status'] === 'active'
                            ? 'bg-green-100 text-green-700'
                            : ($listing['status'] === 'sold' ? 'bg-blue-100 text-blue-700' : ($isPaused ? 'bg-orange-100 text-orange-700' : 'bg-gray-100 text-gray-700'));
                    ?>
                    <article
                        role="button"
                        tabindex="0"
                        onclick="document.getElementById('<?= esc($listingModalId) ?>').classList.remove('hidden')"
                        onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); document.getElementById('<?= esc($listingModalId) ?>').classList.remove('hidden'); }"
                        class="cursor-pointer border border-gray-300 rounded-lg p-4 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow duration-300"
                    >
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h3 class="text-lg font-semibold"><?= esc($listing['title']) ?></h3>
                                <p class="text-sm text-gray-500"><?= esc($listing['category_name'] ?? 'Uncategorized') ?></p>
                            </div>
                            <span class="inline-flex items-center gap-1 rounded-full px-2.5 py-1 text-xs font-medium uppercase tracking-wide <?= $statusClasses ?>">
                                <?php if ($isPaused): ?>
                                    <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                                    </svg>
                                <?php elseif ($listing['status'] === 'active'): ?>
                                    <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                <?php endif; ?>
                                <?= esc(ucfirst($listing['status'])) ?>
                            </span>
                        </div>

                        <?php $firstImage = $listing['images'][0] ?? null; ?>
                        <?php if ($firstImage): ?>
                            <div class="mt-3 overflow-hidden rounded-lg border border-gray-200">
                                <img src="<?= base_url(esc($firstImage['image_url'])) ?>" alt="<?= esc($listing['title']) ?>" class="h-48 w-full object-cover">
                            </div>
                        <?php endif; ?>

                        <p class="mt-3 text-sm text-gray-600">
                            <?= esc($listing['description'] ?: 'No description provided yet.') ?>
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <p class="text-xs uppercase tracking-wide text-gray-400">Price</p>
                                <p class="text-lg font-bold text-blue-600">R<?= number_format((float) $listing['price'], 2) ?></p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs uppercase tracking-wide text-gray-400">Listed</p>
                                <p class="text-sm text-gray-600"><?= esc(date('M d, Y', strtotime($listing['created_at']))) ?></p>
                            </div>
                        </div>
                    </article>

                    <div id="<?= esc($listingModalId) ?>" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50 px-4">
                        <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl">
                            <div class="mb-4 flex items-start justify-between gap-4">
                                <div>
                                    <h2 class="text-xl font-semibold"><?= esc($listing['title']) ?></h2>
                                    <p class="text-sm text-gray-500">Current status: <?= esc(ucfirst($listing['status'])) ?></p>
                                </div>
                                <button type="button" onclick="document.getElementById('<?= esc($listingModalId) ?>').classList.add('hidden')" class="text-gray-500 hover:text-gray-700">X</button>
                            </div>

                            <div class="space-y-3">
                                <form action="<?= site_url('/mylistings/' . $listing['id'] . '/status') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="status" value="<?= esc($nextStatus) ?>">
                                    <button type="submit" class="w-full rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                                        <?= esc($statusActionLabel) ?>
                                    </button>
                                </form>

                                <form action="<?= site_url('/mylistings/' . $listing['id'] . '/delete') ?>" method="post" onsubmit="return confirm('Delete this listing and its uploaded images? This cannot be undone.');">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="w-full rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-700">
                                        Delete Listing
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="rounded-lg border border-dashed border-gray-300 p-6 text-center text-gray-500">
                You do not have any listings yet.
            </div>
        <?php endif; ?>
    </section>
</section>

<div id="create-listing-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50 px-4">
    <div class="w-full max-w-2xl rounded-2xl bg-white p-6 shadow-xl">
        <div class="mb-4 flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold">Create a new listing</h2>
                <p class="text-sm text-gray-500">Add your product details and upload photos for the marketplace.</p>
            </div>
            <button type="button" onclick="document.getElementById('create-listing-modal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700">X</button>
        </div>

        <form action="<?= site_url('/mylistings/store') ?>" method="post" enctype="multipart/form-data" class="space-y-4">
            <?= csrf_field() ?>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700" for="title">Title</label>
                    <input type="text" id="title" name="title" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g. Canon EOS 70D Camera">
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700" for="category_id">Category</label>
                    <select id="category_id" name="category_id" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select a category</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= esc($category['id']) ?>"><?= esc($category['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700" for="description">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Describe the product, condition, delivery, etc."></textarea>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700" for="price">Price (R)</label>
                    <input type="number" id="price" name="price" step="0.01" min="0.01" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="0.00">
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700" for="status">Status</label>
                    <select id="status" name="status" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="active">Active</option>
                        <option value="paused">Paused</option>
                        <option value="removed">Removed</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700" for="images">Product Images</label>
                <input type="file" id="images" name="images[]" multiple accept="image/*" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-sm">
                <p class="mt-1 text-xs text-gray-500">You can select multiple images from your device.</p>
            </div>

            <div class="flex justify-end gap-2">
                <button type="button" onclick="document.getElementById('create-listing-modal').classList.add('hidden')" class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</button>
                <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">Create Listing</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
