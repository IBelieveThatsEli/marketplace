<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<div class="flex flex-col items-center max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="bg-blue-100 rounded-full p-2 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 text-blue-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
        </svg>
    </div>
    <h1 class="text-2xl font-bold mb-2">Welcome back!</h1>
    <p class="text-gray-600 mb-6">Sign in to continue to MarketPlace</p>

    <?= view('auth/form', [
        'activePage' => $activePage,
        'action' => site_url('/login'),
    ]) ?>
</div>

<?= $this->endSection() ?>
