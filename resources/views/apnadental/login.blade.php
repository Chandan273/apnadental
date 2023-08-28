@extends('apnadental.master')
@section("content")
<main>
	<div class="bg_color_2">
		<div class="container margin_60_35">
			<div id="login-2">
				<h1>Please login to Findoctor!</h1>
				<form>
					<div class="box_form clearfix">
						<div class="box_login">
							<h2 class="mt-3">Welcome to Apna Dental</h2>
						</div>
						<div class="box_login last">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Your email address">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Your password" name="password" id="password">
								<a href="#0" class="forgot"><small>Forgot password?</small></a>
							</div>
							<div class="form-group">
								<input class="btn_1" type="submit" value="Login">
							</div>
						</div>
					</div>
				</form>
				<p class="text-center link_bright">Do not have an account yet? <a href="#0"><strong>Register now!</strong></a></p>
			</div>
			<!-- /login -->
		</div>
	</div>
</main>
<!-- /main -->
@endsection("content")