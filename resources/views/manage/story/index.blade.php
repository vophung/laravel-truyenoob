@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Truyện</h1>
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
				<!-- /.card -->
				<div class="card">
					<div class="card-header">
                        <div class="row">
                            <div class="col-sm-8">@include('partials.alerts')</div>
                            @if(auth()->user()->can('admin') && auth()->user()->can('writer') || auth()->user()->can('admin') || auth()->user()->can('writer'))
                            <div class="col-sm-4" style="float:right">
                                <a class="btn btn-app col-sm-12" href="{{route('manage.story.create')}}">
                                    <i class="fas fa-folder-plus"></i> <strong>Thêm Truyện</strong>
                                </a>
                            </div>
                            @endif
                        </div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        {{-- ADMIN --}}
                        @if((auth()->user()->can('admin') && auth()->user()->can('writer')) || (auth()->user()->can('edit-users') && auth()->user()->can('delete-users')) || auth()->user()->can('admin') || auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
                                    <th class="text-left">Tên Truyện</th>
                                    <th class="text-left">Ảnh</th>
                                    <th class="text-left">Chuyên Mục</th>
                                    <th class="text-left">Tác Giả</th>
                                    <th class="text-left">Trạng Thái</th>
                                    <th class="text-left">Người Đăng</th>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <th class="text-left">Action</th>
                                    @endif
								</tr>
							</thead>
							<tbody>
                                @foreach($storiesadmin as $story)
                                <tr>
                                    <td class="text-center py-0 align-middle">{{$story->name}}</td>
                                    <td class="text-center py-0 align-middle">
                                        <img src="{{URL::to('images/' . $story->image)}}" style="width:100px;height:100px;" alt="image-story"/>
                                    </td>
                                    <td class="text-center py-0 align-middle">{{implode(', ', $story->category()->get()->pluck('name')->toArray())}}</td>
                                    <td class="text-center py-0 align-middle">{{implode(', ', $story->author()->get()->pluck('name')->toArray())}}</td>
                                    <td class="text-center py-0 align-middle">
                                        @if($story->status == 1)
                                        Hoàn Thành
                                        @else
                                        Đang Cập Nhật
                                        @endif
                                    </td>
                                    <td class="text-center py-0 align-middle">
                                        {{$story->user()->first()->name}}
                                    </td>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <td class="text-center py-0 align-middle">
                                        @can('edit-users')<a href="{{route('manage.story.chapter.index',$story->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>@endcan
                                        @can('edit-users')<a href="{{route('manage.story.edit',$story->id)}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>@endcan
                                        @can('delete-users')<a href="{{route('manage.story.destroy',$story->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>@endcan
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
                                    <th class="text-left">Tên Truyện</th>
                                    <th class="text-left">Ảnh</th>
                                    <th class="text-left">Chuyên Mục</th>
                                    <th class="text-left">Tác Giả</th>
                                    <th class="text-left">Trạng Thái</th>
                                    <th class="text-left">Người Đăng</th>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <th class="text-left">Action</th>
                                    @endif
								</tr>
							</tfoot>
                        </table>
                        @else
                        {{-- WRITER --}}
                        <table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
                                    <th class="text-left">Tên Truyện</th>
                                    <th class="text-left">Ảnh</th>
                                    <th class="text-left">Chuyên Mục</th>
                                    <th class="text-left">Tác Giả</th>
                                    <th class="text-left">Trạng Thái</th>
                                    @can('admin')<th class="text-left">Người Đăng</th>@endcan
									<th class="text-left">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach($storieswriter as $story)
                                <tr>
                                    <td class="text-center py-0 align-middle">{{$story->name}}</td>
                                    <td class="text-center py-0 align-middle">
                                        <img src="{{URL::to('images/' . $story->image)}}"  style="width:100px;height:100px;" alt="image-story"/>
                                    </td>
                                    <td class="text-center py-0 align-middle">{{implode(', ', $story->category()->get()->pluck('name')->toArray())}}</td>
                                    <td class="text-center py-0 align-middle">{{implode(', ', $story->author()->get()->pluck('name')->toArray())}}</td>
                                    <td class="text-center py-0 align-middle">
                                        @if($story->status == 1)
                                        Hoàn Thành
                                        @else
                                        Đang Cập Nhật
                                        @endif
                                    </td>
                                    @can('admin')
                                    <td class="text-center py-0 align-middle">
                                        {{$story->user()->first()->name}}
                                    </td>
                                    @endcan
                                    <td class="text-center py-0 align-middle">
                                        <a href="{{route('manage.story.chapter.index',$story->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="{{route('manage.story.edit',$story->id)}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
                                       <a href="{{route('manage.story.destroy',$story->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>

                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
                                    <th class="text-left">Tên Truyện</th>
                                    <th class="text-left">Ảnh</th>
                                    <th class="text-left">Chuyên Mục</th>
                                    <th class="text-left">Tác Giả</th>
                                    <th class="text-left">Trạng Thái</th>
                                    @can('admin')<th class="text-left">Người Đăng</th>@endcan
									<th class="text-left">Action</th>
								</tr>
							</tfoot>
                        </table>
                        @endif
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
@endsection
