<x-layout>
    <div style="max-width: 480px; margin: 4rem auto;">
        <h1>Register</h1>

        <form method="POST" action="{{ route('register.process') }}">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <span role="alert">{{ $message }}</span>
            @enderror

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span role="alert">{{ $message }}</span>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span role="alert">{{ $message }}</span>
            @enderror

            <label for="password_confirmation">Confirm password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>

        <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
    </div>
</x-layout>