<x-layout>

php
<div class="min-vh-100 d-flex justify-content-center align-items-center"
     style="background-color: #f4f6f9;">

    <div class="card border-0 shadow"
         style="width: 100%; max-width: 500px; border-radius: 16px;">

        <div class="card-body p-5">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h2 class="fw-bold text-dark mb-2">
                    Create Account
                </h2>

                <p class="text-muted mb-0">
                    Register to get started
                </p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert alert-danger rounded-3">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register.process') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name"
                           class="form-label fw-semibold">
                        Full Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                    >
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email"
                           class="form-label fw-semibold">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        placeholder="Enter your email address"
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
                        placeholder="Create a password"
                        required
                    >
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation"
                           class="form-label fw-semibold">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control"
                        placeholder="Confirm your password"
                        required
                    >
                </div>

                <!-- Register Button -->
                <button
                    type="submit"
                    class="btn btn-primary w-100 fw-semibold"
                    style="height: 48px; border-radius: 8px;">
                    Create Account
                </button>

            </form>

            <!-- Login -->
            <div class="text-center mt-4">

                <p class="text-muted mb-0">
                    Already have an account?

                    <a href="{{ route('login') }}"
                       class="text-primary fw-semibold text-decoration-none">
                        Login
                    </a>
                </p>

            </div>

        </div>
    </div>

</div>


</x-layout>
