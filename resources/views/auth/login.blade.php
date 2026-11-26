<x-layouts.app title="Login">
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <x-form-input name="email" label="Email" type="email" />
        <x-form-input name="password" label="Password" type="password" />

        <button type="submit">Login</button>
        <a href="{{ route('register') }}">Need an account? Register</a>
    </form>
</x-layouts.app>