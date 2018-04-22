<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <input id="email" type="email" class="form-control" name="email" placeholder="john@example.com" value="{{old('email')}}" required autofocus>
    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
    <button type="submit" class="btn btn-primary">
        Login
    </button>
</form>
<!--

-->