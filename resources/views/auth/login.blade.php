<x-guest-layout>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-gradient bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 p-4">
        <div class="card shadow-lg border-0 rounded-4 p-4 bg-white bg-opacity-75 backdrop-blur-lg animate-fade-in-down" style="max-width: 420px; width: 100%;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Skylink Technologies" class="rounded-circle" width="80" height="80">
                <h2 class="fw-bold mt-3 text-dark">Welcome, Admin</h2>
                <p class="text-muted small">Log in to manage <span class="text-primary fw-semibold">Skylink</span> Dashboard</p>
            </div>

            @if (session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Email address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white text-muted"><i class="fa fa-envelope"></i></span>
                        <input id="email" type="email" name="email" class="form-control" placeholder="you@example.com" value="{{ old('email') }}" required autofocus>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white text-muted"><i class="fa fa-lock"></i></span>
                        <input id="password" type="password" name="password" class="form-control" placeholder="••••••••" required>
                        <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()"><i class="fa fa-eye"></i></button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                </div>

                <!-- Remember + Forgot -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label text-muted">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="small text-decoration-none text-primary">Forgot password?</a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary w-100 fw-bold text-white shadow-sm py-2 rounded-pill">
                    Log In
                </button>


                
            </form>
        </div>
    </div>

    <!-- Password Toggle Script -->
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = event.currentTarget.querySelector('i');
            input.type = input.type === 'password' ? 'text' : 'password';
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        }
    </script>

    <!-- Optional Custom Gradient Button -->
    <style>
        .btn-gradient {
            background-image: linear-gradient(to right, #7e5bef, #fb5283);
        }
        .btn-gradient:hover {
            background-image: linear-gradient(to right, #6d49d6, #e7406c);
        }
    </style>
</x-guest-layout>
