<x-guest-layout>
    <div class="flex flex-col gap-1 mb-6">
        <h1 class="text-[#0d1b0d] dark:text-[#f8fcf8] text-3xl font-black leading-tight tracking-tight">
            Welcome back
        </h1>
        <p class="text-[#4c9a4c] dark:text-[#a3d4a3] text-sm">
            Please enter your details to sign in.
        </p>
    </div>

    @if (session('status'))
        <x-auth-session-status class="mb-4 text-xs" :status="session('status')" />
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-3">
        @csrf

        <div class="flex flex-col gap-1">
            <label for="email" class="text-[#0d1b0d] dark:text-[#f8fcf8] text-xs font-bold">Email Address</label>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-lg">mail</span>
                <input id="email" name="email" type="email" :value="old('email')" required autofocus
                    class="flex w-full pl-11 rounded-xl text-[#0d1b0d] dark:text-[#f8fcf8] focus:ring-2 focus:ring-primary/50 border border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] h-12 text-sm" 
                    placeholder="name@example.com">
            </div>
            <x-input-error :messages="$errors->get('email')" class="text-[10px]" />
        </div>

        <div class="flex flex-col gap-1">
            <div class="flex justify-between items-center">
                <label for="password" class="text-[#0d1b0d] dark:text-[#f8fcf8] text-xs font-bold">Password</label>
                @if (Route::has('password.request'))
                    <a class="text-[10px] font-bold text-primary hover:underline" href="{{ route('password.request') }}">
                        Forgot?
                    </a>
                @endif
            </div>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#4c9a4c] text-lg">lock</span>
                <input id="password" name="password" type="password" required
                    class="flex w-full pl-11 rounded-xl text-[#0d1b0d] dark:text-[#f8fcf8] focus:ring-2 focus:ring-primary/50 border border-[#cfe7cf] dark:border-[#2e4d2e] bg-white dark:bg-[#1b301b] h-12 text-sm" 
                    placeholder="••••••••">
            </div>
            <x-input-error :messages="$errors->get('password')" class="text-[10px]" />
        </div>

        <div class="flex items-center gap-2 py-0.5">
            <input id="remember_me" type="checkbox" name="remember" 
                class="w-4 h-4 rounded border-[#cfe7cf] text-primary focus:ring-primary/50 dark:bg-[#1b301b]">
            <label for="remember_me" class="text-xs text-[#4c9a4c] dark:text-[#a3d4a3] cursor-pointer">
                Remember me
            </label>
        </div>

        <div class="pt-2">
            <button type="submit" class="flex w-full cursor-pointer items-center justify-center rounded-xl h-12 bg-primary text-[#0d1b0d] text-base font-black hover:shadow-md transition-all">
                Log in
            </button>
        </div>
    </form>

    <p class="text-center text-[#4c9a4c] text-xs pt-6">
        Don't have an account? 
        <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Create one</a>
    </p>
</x-guest-layout>