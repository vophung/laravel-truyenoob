@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<h1>Quản Lí Thành Viên</h1>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
                        @can('admin')
                        <div class="row">
                            <div class="col-sm-8">@include('partials.alerts')</div>
                            {{-- <div class="col-sm-4" style="float:right">
                                <a class="btn btn-app col-sm-12" href="{{route('manage.user.create')}}">
                                    <i class="fas fa-folder-plus"></i> Thêm Roles
                                </a>
                            </div> --}}
                        </div>
                        @endcan
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center"><i>Tên Tài Khoản</i></th>
                                    <th class="text-center"><i>Email</i></th>
                                    <th class="text-center"><i>Vai Trò</i></th>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <th class="text-center"><i>Action</i></th>
                                    @endif
								</tr>
							</thead>
							<tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="text-center py-0 align-middle">{{ $user->name }}</td>
                                    <td class="text-center py-0 align-middle">{{ $user->email }}</td>
                                    <td class="text-center py-0 align-middle">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray() )}}</td>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <td class="text-center py-0 align-middle">
                                        @can('edit-users')<a href="{{route('manage.user.edit',$user->id)}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>@endcan
                                        @can('delete-users')<a href="{{route('manage.user.destroy',$user->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>@endcan
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
									<th class="text-center"><i>Tên Tài Khoản</i></th>
                                    <th class="text-center"><i>Email</i></th>
                                    <th class="text-center"><i>Vai Trò</i></th>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <th class="text-center"><i>Action</i></th>
                                    @endif
								</tr>
							</tfoot>
                        </table>
                    </div>

					<!-- /.card-body -->
                </div>
				<!-- /.card -->
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
@endsection
