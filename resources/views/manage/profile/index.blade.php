@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
                <h1>Profile</h1>
            </div>
        </div>
        @include('partials.alerts')
	</div>
	<!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<!-- Profile Image -->
				<div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <form action="{{route('manage.profile.updateimages')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="
                                    @if(auth()->user()->image == '')
                                    {{URL::to('/images/avatar/avatar-default.jpg')}}
                                    @else
                                    {{URL::to('/images/avatar/' .  auth()->user()->image)}}
                                    @endif"
                                    id="upfile1" alt="Avatar-User">
                            </div>
                            <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>
                            <p class="text-muted text-center">{{auth()->user()->roles()->first()->name}}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <input type="file" name="image" id="image-input">
                                </li>
                                @if ($errors->has('image'))
                                <li class="list-group-item">
                                <div class="help-info">
                                    <i class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('image') }}</i>
                                </div>
                                </li>
                                @endif
                            </ul>
                            <button type="submit" id="submit-image" class="btn btn-primary btn-block"><b>Thay Ảnh Đại Diện</b></a>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
							<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Changes Password</a></li>
						</ul>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="settings">
								<form class="form-horizontal" enctype="multipart/form-data" action={{route('manage.profile.updatesettings')}} method="POST">
									@csrf
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{auth()->user()->name}}">
										</div>
                                    </div>
                                    <div class="help-info">
                                        @if ($errors->has('name'))
                                        <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{auth()->user()->email}}" disabled>
										</div>
                                    </div>
                                    <div class="help-info">
                                        @if ($errors->has('email'))
                                        <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="timeline">
								<form class="form-horizontal" action="{{route('manage.profile.updatepassword')}}" method="POST">
									@csrf
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
										<div class="col-sm-10">
											<input type="password" name="OldPassword" class="form-control" id="inputName" placeholder="Old Password">
										</div>
                                    </div>
                                    <div class="help-info">
                                        @if ($errors->has('OldPassword'))
                                        <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('OldPassword') }}</p>
                                        @endif
                                    </div>
									<div class="form-group row">
										<label for="inputEmail"  class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-10">
											<input type="password" name="NewPassword" class="form-control" id="inputEmail" placeholder="Old Password">
										</div>
                                    </div>
                                    <div class="help-info">
                                        @if ($errors->has('NewPassword'))
                                        <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('NewPassword') }}</p>
                                        @endif
                                    </div>
									<div class="form-group row">
										<label for="inputEmail"  class="col-sm-2 col-form-label">Confirm New Password</label>
										<div class="col-sm-10">
											<input type="password" name="NewPasswordConfirm" class="form-control" id="inputEmail" placeholder="Confirm New Password">
										</div>
                                    </div>
                                    <div class="help-info">
                                        @if ($errors->has('NewPasswordConfirm'))
                                        <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('NewPasswordConfirm') }}</p>
                                        @endif
                                    </div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
@endsection
