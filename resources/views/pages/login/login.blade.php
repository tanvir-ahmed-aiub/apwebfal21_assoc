@extends('layouts.login')
@section('content')
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
			<div class="icon d-flex align-items-center justify-content-center">
				<span class="fa fa-user-o"></span>
			</div>
			<h3 class="text-center mb-4">Have an account?</h3>
					<form action="{{route('login')}}" method="post" class="login-form">
						{{@csrf_field()}}
					<div class="form-group">
					<input type="text" class="form-control rounded-left" name="phone" placeholder="Username" required>
				</div>
			<div class="form-group d-flex">
				<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
			</div>
			<div class="form-group d-md-flex">
				<div class="w-50">
					<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="w-50 text-md-right">
								<a href="#">Forgot Password</a>
							</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
			</div>
			</form>
		</div>
			</div>
		</div>
	</div>
</section>
@endsection

