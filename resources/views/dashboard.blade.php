<x-layout>
    <div style="max-width: 720px; margin: 4rem auto;">
        <h1>Dashboard</h1>
        <p>Welcome back, {{ auth()->user()->name ?? 'guest' }}.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </div>
</x-layout>
