@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<h1>Thành Viên</h1>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- jquery validation -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Edit {{$user->name}}</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" action="{{route('manage.user.update',$user)}}" method="POST" id="quickForm">
						@csrf
						{{method_field('PUT')}}
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputName">Tên Tài Khoản</label>
								<input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$user->name}}" disabled>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail">Địa chỉ Email</label>
								<input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{$user->email}}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail">Vai trò: </label>
                                @foreach($roles as $role)
                                <div class="form-group">
                                  <input type="checkbox" name="roles[]" id="checkboxPrimary1" value="{{$role->id}}"
                                  @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                  <label for="checkboxPrimary1">{{$role->name}}</label>
                                </div>
                                @endforeach
                              </div>

							<div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" onclick="location.href='{{route('manage.user.index')}}'" class="btn btn-primary">Back</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /.card -->
			</div>
			<!--/.col (left) -->
			<!-- right column -->
			<div class="col-md-6">
			</div>
			<!--/.col (right) -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
@endsection
