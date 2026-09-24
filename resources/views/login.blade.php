<x-layout>
    <div style="max-width: 420px; margin: 4rem auto;">
        <h1>Login</h1>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="remember">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember me
            </label>

            <div>
                <button type="submit">Log in</button>
            </div>
        </form>

        <p>Need an account? <a href="{{ route('register') }}">Create one</a></p>
    </div>
</x-layout>
