<x-layout>


<div class="container d-flex justify-content-center align-items-center"
     style="min-height: 90vh;">

    <div class="card shadow-sm border-0"
         style="width: 100%; max-width: 430px; border-radius: 15px;">

        <div class="card-body p-5">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h1 class="fw-bold mb-2">Welcome Back</h1>
                <p class="text-muted">
                    Login to continue to your account
                </p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email"
                           class="form-label fw-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        style="height: 45px;"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password"
                           class="form-label fw-semibold">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Enter your password"
                        style="height: 45px;"
                        required
                    >
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-4">

                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        class="form-check-input"
                        {{ old('remember') ? 'checked' : '' }}
                    >

                    <label class="form-check-label"
                           for="remember">
                        Remember me
                    </label>

                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    class="btn btn-primary w-100 py-2 fw-semibold"
                    style="border-radius: 8px;">
                    Log in
                </button>

            </form>

            <!-- Register -->
            <div class="text-center mt-4">
                <p class="text-muted mb-0">
                    Need an account?
                    <a href="{{ route('register') }}"
                       class="text-primary fw-semibold text-decoration-none">
                        Create one
                    </a>
                </p>
            </div>

        </div>
    </div>

</div>


</x-layout>
