<x-guest-layout>
    <!-- Main container with gradient background -->
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 px-4 py-12">
        
        <!-- Login Card with frosted glass effect and animation -->
        <div class="w-full max-w-md bg-white/90 p-8 rounded-3xl shadow-2xl backdrop-blur-lg border border-gray-200 animate-fade-in-down transition-all duration-300 hover:shadow-3xl">
            
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <a href="/" class="block">
                    <img src="{{ asset('images/logo.png') }}" alt="Skylink Technologies" class="w-20 h-20 object-contain" />
                </a>
            </div>

            <!-- Welcome Text -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Welcome, Admin</h1>
                <p class="text-sm text-gray-600 mt-2">Log in to manage the <span class="font-semibold text-purple-700">Skylink</span> Dashboard</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 p-4 bg-blue-100 border border-blue-300 text-blue-800 rounded-lg shadow-sm">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Heroicon: envelope -->
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" /><path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" /></svg>
                        </div>
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                            class="block w-full pl-10 pr-3 py-2" placeholder="you@example.com" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Heroicon: lock-closed -->
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3A5.25 5.25 0 0012 1.5zm-3.75 5.25v3a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5v-3a3.75 3.75 0 10-7.5 0z" clip-rule="evenodd" /></svg>
                        </div>
                        <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                            class="block w-full pl-10 pr-3 py-2" placeholder="••••••••" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-purple-600 hover:text-purple-500">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div>
                    <x-primary-button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-sm font-semibold text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-all duration-300 transform hover:scale-105">
                        Log In
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>