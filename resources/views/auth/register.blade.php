@extends('layouts.app')
@section('content-login')
<div class="register-box">
	<div class="register-logo">
		<a href="../../index2.html"><b>Đăng</b> <i>Ký</i></a>
	</div>
	<div class="card">
		<div class="card-body register-card-body">
			<p class="login-box-msg">Đăng ký trở thành 1 thành viên của website</p>
			<form action="{{route('register')}}" method="post">
				@csrf
				<div class="input-group mb-3">
					<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Tên Tài Khoản">
					<div class="input-group-append">
						<div class="input-group-text">
						</div>
					</div>
				</div>
				<div class="help-info">
					@if ($errors->has('name'))
					<p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('name') }}</p>
					@endif
				</div>
				<div class="input-group mb-3">
					<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
					<div class="input-group-append">
						<div class="input-group-text">
						</div>
					</div>
				</div>
				<div class="help-info">
					@if ($errors->has('email'))
					<p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('email') }}</p>
					@endif
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Mật Khẩu">
					<div class="input-group-append">
						<div class="input-group-text">
						</div>
					</div>
				</div>
				<div class="help-info">
					@if ($errors->has('password'))
					<p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('password') }}</p>
					@endif
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password_confirmation" class="form-control" placeholder="Nhập Lại Mật Khẩu">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="{{route('login')}}" class="btn btn-block btn-danger">
				<i class="fas fa-user-circle"></i>
				Tôi Đã Có Tài Khoản
				</a>
			</div>
		</div>
		<!-- /.form-box -->
	</div>
	<!-- /.card -->
</div>
@endsection
