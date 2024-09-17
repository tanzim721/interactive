<div>
    <h1 style="font-size: 50px; text-align: center;">Barta</h1>
    @if (request()->routeIs('login'))
        <h2 class="text-dark text-bold" style="font-size:30px;">Sign in your account</h2>
    @elseif (request()->routeIs('register'))
        <h2 class="text-dark text-bold" style="font-size:30px;">Create a new account</h2>
    @endif
</div>
