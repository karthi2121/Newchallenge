<form class="account-form" method="POST"  action="javascript:void(0)">
	<div class="form-group">
		<label class="input-label">User Name</label>
		<input type="text" name='name' class="form-control"  placeholder="Enter Name" value="{{ ($_POST)?$_POST['name']:'' }}" >
        <span class="error-message">@error('name'){{$message}}@enderror</span>
	</div>
	<div class="form-group">
		<label class="input-label">Email</label>
		<input type="email" name='email' class="form-control"  placeholder="Enter Email" value="{{ ($_POST)?$_POST['email']:'' }}" >
        <span class="error-message">@error('email'){{$message}}@enderror</span>
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control" >
        <span class="error-message">@error('password'){{$message}}@enderror</span>
	</div>
	<div class="form-group">
		<input type="password" name="password_confirmation" class="form-control" >
        <span class="error-message">@error('password_confirmation'){{$message}}@enderror</span>
	</div>
	<div class="form-group mt-4">
		<label> <input type="checkbox" name="accepted_terms"  value='1'>I agree with <a href="#">Terms and conditions</a></label>
		<br>
        <span class="error-message">@error('accepted_terms'){{$message}}@enderror</span>
	</div>
	<div class="form-group">
		<input class="form-control" type="submit" value="Sign Up" onclick="submit_registration()" name="">
	</div>
</form>