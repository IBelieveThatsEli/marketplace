<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<?php
    $userName = old('name', $user['name'] ?? session('user_name'));
    $userEmail = old('email', $user['email'] ?? session('user_email'));
?>

<section class="mx-auto flex max-w-5xl flex-col px-4 py-8 sm:px-6 md:py-12 lg:px-8">
    <section class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-xl font-bold">Profile</h1>
            <p class="text-gray-400">Manage your personal information, wallet, and account settings.</p>
        </div>
    </section>

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

    <?php if (session()->has('errors')): ?>
        <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            <?php foreach (session('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <section class="grid gap-4 lg:grid-cols-[1.2fr_0.8fr]">
        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <div class="mb-6 flex items-center gap-4">
                <div class="flex size-14 items-center justify-center rounded-full bg-blue-100 text-xl font-bold text-blue-700">
                    <?= esc(strtoupper(substr($userName ?: 'U', 0, 1))) ?>
                </div>
                <div>
                    <h2 class="text-lg font-semibold"><?= esc($userName) ?></h2>
                    <p class="text-sm text-gray-500"><?= esc($userEmail) ?></p>
                </div>
            </div>

            <form action="<?= site_url('/profile/update') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700" for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?= esc($userName) ?>" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700" for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?= esc($userEmail) ?>" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700" for="current_password">Current Password</label>
                        <input type="password" id="current_password" name="current_password" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700" for="new_password">New Password</label>
                        <input type="password" id="new_password" name="new_password" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700" for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>

        <aside class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <div class="mb-5">
                <p class="text-sm font-medium uppercase tracking-wide text-gray-400">Wallet Balance</p>
                <p class="mt-1 text-3xl font-bold text-blue-600">R<?= number_format((float) $walletBalance, 2) ?></p>
            </div>

            <form action="<?= site_url('/profile/wallet/deposit') ?>" method="post" class="space-y-3">
                <?= csrf_field() ?>
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700" for="amount">Add Funds</label>
                    <input type="number" id="amount" name="amount" step="0.01" min="1" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="100.00">
                </div>
                <button type="submit" class="w-full rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">
                    Add To Wallet
                </button>
            </form>

            <div class="mt-6">
                <h3 class="mb-3 text-sm font-semibold text-gray-700">Recent Activity</h3>
                <?php if (! empty($walletTransactions)): ?>
                    <div class="space-y-2">
                        <?php foreach ($walletTransactions as $transaction): ?>
                            <div class="flex items-center justify-between rounded-lg bg-gray-50 px-3 py-2 text-sm">
                                <div>
                                    <p class="font-medium text-gray-700"><?= esc(ucfirst($transaction['type'])) ?></p>
                                    <p class="text-xs text-gray-400"><?= esc($transaction['description'] ?: 'Wallet transaction') ?></p>
                                </div>
                                <p class="font-semibold <?= (float) $transaction['amount'] >= 0 ? 'text-green-600' : 'text-red-600' ?>">
                                    R<?= number_format((float) $transaction['amount'], 2) ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p class="rounded-lg bg-gray-50 px-3 py-3 text-sm text-gray-500">No wallet activity yet.</p>
                <?php endif; ?>
            </div>
        </aside>
    </section>
</section>

<?= $this->endSection() ?>
