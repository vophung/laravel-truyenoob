@extends('layouts.app')
@section('content-login')
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>Đăng</b> <i>Nhập</i></a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<form action="{{route('login')}}" method="post">
				@csrf
				<div class="input-group mb-3">
					<input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="help-info">
					@if ($errors->has('password'))
					<p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('password') }}</p>
					@else
					<p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('email') }}</p>
					@endif
				</div>
				<div class="row">
					<div class="col-6">
						<div class="icheck-primary">
							<input type="checkbox" id="remember">
							<label for="remember">
							Disabled
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-6">
						<button type="submit" class="btn btn-primary btn-block">Đăng <i>Nhập</i></button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="{{route('register')}}" class="btn btn-block btn-danger">
				<i class="fas fa-user-circle"></i>
				Tôi Chưa Có Tài Khoản
				</a>
			</div>
			<!-- /.social-auth-links -->
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
@endsection
