<h2>Verification Email has been sent.</h2>

<form action="{{ route('verification.send')}}" method="post">
    @csrf
<button type="submit">Resend Email</button>
</form>