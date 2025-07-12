<x-guest-layout>
    <!-- Bootstrap Container -->
    <div class="container min-vh-100 d-flex align-items-center justify-content-center bg-gradient" style="background: linear-gradient(to right, #6366F1, #9333EA, #EC4899); padding: 2rem;">
        <div class="card shadow-lg border-0 rounded-4 p-4" style="min-width: 400px; max-width: 500px; width: 100%; background-color: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
            
            <!-- Logo -->
            <div class="text-center mb-4">
                <a href="/">
                    <img src="{{ asset('assets/images/skylink-logo.svg') }}" alt="Skylink Logo" class="img-fluid" style="max-height: 80px;">
                </a>
                <h2 class="mt-2 fw-bold text-dark">Create Your Account</h2>
                <p class="text-muted small">Join the <strong>Skylink</strong> family today!</p>
            </div>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')" class="form-label fw-semibold" />
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="text-danger mt-1 small" />
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" class="form-label fw-semibold" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1 small" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" class="form-label fw-semibold" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1 small" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label fw-semibold" />
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1 small" />
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="{{ route('login') }}" class="text-decoration-none text-muted small">
                        {{ __('Already registered?') }}
                    </a>
                    <x-primary-button class="btn btn-primary px-4 py-2 rounded-3">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
