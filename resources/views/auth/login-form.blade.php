<form class="account-form mb-4 login" method="POST" action="#">
     @csrf
    <div class="form-group">
        <label class="input-label">Email</label>
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        <span class="error-message">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group mb-0">
        <label class="input-label">Password</label>
        <input class="form-control" type="password" name="password">
        <span class="error-message">@error('password'){{$message}}@enderror</span>
    </div>
    <div class="form-group text-right">
        <a href="#" class="clearBtn mt-3 pl-0">Forgot Password?</a>
    </div>
    <div class="form-group">
        <input class="form-control" type="submit" onclick="login()" value="Log In" name="">
    </div>
</form>