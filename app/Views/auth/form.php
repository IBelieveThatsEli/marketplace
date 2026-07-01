<form class="w-full flex flex-col gap-2" action="<?= esc($action) ?>" method="POST">
    <?php $page = $activePage ?? 'login'; ?>
 
    <?php if (session()->has('errors')): ?>
        <div class="rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-sm text-red-700">
            <?php $errors = session('errors'); ?>
            <?php if (is_array($errors)): ?>
                <?php foreach ($errors as $error): ?>
                    <?php if (is_array($error)): ?>
                        <?php foreach ($error as $message): ?>
                            <p><?= esc($message) ?></p>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p><?= esc($error) ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p><?= esc($errors) ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if (session()->has('success')): ?>
        <div class="rounded-lg border border-green-200 bg-green-50 px-3 py-2 text-sm text-green-700">
            <?php $success = session('success'); ?>
            <?php if (is_array($success)): ?>
                <?php foreach ($success as $message): ?>
                    <?php if (is_array($message)): ?>
                        <?php foreach ($message as $item): ?>
                            <p><?= esc($item) ?></p>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p><?= esc($message) ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p><?= esc($success) ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ($page === 'register'): ?>
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <div class="relative items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-500 absolute left-3 top-1/2 -translate-y-1/2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0zM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21c-2.676 0-5.216-.584-7.499-1.882z" />
                </svg>

                <input 
                    type="text"
                    id="name" 
                    name="name"
                    value="<?= old('name') ?>"
                    class="w-full border border-gray-300 rounded-lg px-9 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your name"
                >
            </div>
        </div>
    <?php endif; ?>
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <div class="relative items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-500 absolute left-3 top-1/2 -translate-y-1/2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>

            <input 
                type="email"
                id="email" 
                name="email"
                value="<?= old('email') ?>"
                class="w-full border border-gray-300 rounded-lg px-9 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your email"
            >
        </div>
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1 mt-4">Password</label>
        <div class="relative items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-500 absolute left-3 top-1/2 -translate-y-1/2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>

            <input 
                type="password"
                id="password" 
                name="password"
                class="w-full border border-gray-300 rounded-lg px-9 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your password"
            >

            <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" data-toggle-password data-target="password" aria-label="Toggle password visibility">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </button>

        </div>
    </div>

    <?php if ($page === 'register'): ?>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1 mt-4">Confirm Password</label>
            <div class="relative items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-500 absolute left-3 top-1/2 -translate-y-1/2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

                <input 
                    type="password"
                    id="confirm_password" 
                    name="confirm_password"
                    class="w-full border border-gray-300 rounded-lg px-9 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Confirm your password"
                >

                <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" data-toggle-password data-target="confirm_password" aria-label="Toggle confirm password visibility">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>

            </div>
        </div>
    <?php endif; ?>

    <?php if ($page === 'login'): ?>
    <div class="flex items-center justify-between mt-6">
        <div class="flex gap-2 items-center">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4"/>
            <label for="remember" class="text-xs text-gray-600">Remember me</label>
        </div>
        <label for="remember" class="text-xs text-gray-600">Keep me signed in</label>
    </div>
    <?php else: ?>
    <div class="flex items-center gap-2 mt-6">
        <input type="checkbox" id="terms_accepted" name="terms_accepted" value="1" class="w-4 h-4" required/>
        <label for="terms_accepted" class="text-xs text-gray-600">I agree to the <a href="<?= base_url('/termsandconditions') ?>" class="text-blue-500 font-bold hover:underline">Terms & Conditions</a> and <a href="#" class="text-blue-500 font-bold hover:underline">Privacy Policy</a></label>
    </div>
    <?php endif; ?>

    <button type="submit" class="w-full bg-blue-500 text-white my-4 py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <?php echo $page === 'login' ? 'Sign in' : 'Create account'; ?>
    </button>

    <div class="text-center mt-6">
        <p class="text-sm text-gray-800">
            <?php echo $page === 'login' ? "Don't have an account?" : "Already have an account?"; ?> 
            <a href="<?= $page === 'login' ? '/register' : '/login' ?>" class="text-blue-500 hover:underline">
                <?php echo $page === 'login' ? 'Sign up' : 'Sign in'; ?>
            </a>
        </p>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-toggle-password]').forEach(function (button) {
            button.addEventListener('click', function () {
                const input = document.getElementById(this.getAttribute('data-target'));
                if (!input) {
                    return;
                }

                const isPassword = input.type === 'password';
                input.type = isPassword ? 'text' : 'password';

                const icon = this.querySelector('svg');
                if (!icon) {
                    return;
                }

                icon.innerHTML = isPassword
                    ? '<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65" />'
                    : '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />';
            });
        });
    });
</script>
