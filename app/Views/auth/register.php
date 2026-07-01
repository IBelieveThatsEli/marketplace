<?= $this->extend('app') ?>
<?= $this->section('content') ?>

<div class="flex flex-col items-center max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="bg-blue-100 rounded-full p-2 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 text-blue-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
        </svg>
    </div>
    <h1 class="text-2xl font-bold mb-2">Create your account</h1>
    <p class="text-center text-gray-600 mb-6">Join MarketPlace and start buying or selling with people near you.</p>

    <?= view('auth/form', [
        'activePage' => $activePage,
        'action' => site_url('/register'),
    ]) ?>
</div>

<?= $this->endSection() ?>
