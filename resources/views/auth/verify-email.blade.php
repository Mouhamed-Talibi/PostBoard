<x-master>
    <h1>Email Verification</h1>

    <p>
        Thanks for signing up! Before getting started, please verify your email address.
        If you didn’t receive the email, we’ll gladly send you another.
    </p>

    @if (session('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Resend Verification Email</button>
    </form>
</x-master>
