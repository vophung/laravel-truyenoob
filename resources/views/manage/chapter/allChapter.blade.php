@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Toàn Bộ</h1>
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
                        <div class="col-sm-12">@include('partials.alerts')</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        {{-- ADMIN --}}
                        @if(auth()->user()->can('admin') && auth()->user()->can('writer') || auth()->user()->can('admin'))
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
                                    <th class="text-left">Tên mục</th>
                                    <th class="text-left">Tên Chương</th>
                                    <th class="text-left">Truyện</th>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <th class="text-left">Action</th>
                                    @endif
								</tr>
							</thead>
							<tbody>
                                @foreach($chaptersadmin as $chapter)
                                <tr>
                                    <td>{{$chapter->subname}}</td>
                                    <td>{{$chapter->name}}</td>
                                    <td>{{$chapter->story->name}}</td>
                                    @if(auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                    <td class="text-left py-0 align-middle">
                                        @can('edit-users')<a href="{{route('manage.story.chapter.edit',['chapter' => $chapter->id , 'story' => $chapter->story->id])}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>@endcan
                                        @can('delete-users')<a href="{{route('manage.story.chapter.destroy',$chapter->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>@endcan
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
                                    <th class="text-left">Tên mục</th>
                                    <th class="text-left">Tên Chương</th>
                                    <th class="text-left">Thuộc</th>
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
                                    <th class="text-left">Tên mục</th>
                                    <th class="text-left">Tên Chương</th>
                                    <th class="text-left">Truyện</th>
                                    <th class="text-left">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach($chapterswriter as $chapter)
                                <tr>
                                    <td>{{$chapter->subname}}</td>
                                    <td>{{$chapter->name}}</td>
                                    <td>{{$chapter->story->name}}</td>
                                    @can('admin-writer')
                                    <td class="text-left py-0 align-middle">
                                        <a href="{{route('manage.story.chapter.index',$chapter->story->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="{{route('manage.story.chapter.edit',['chapter' => $chapter->id , 'story' => $chapter->story->id])}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
                                        <a href="{{route('manage.story.chapter.destroy',$chapter->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
                                    <th class="text-left">Tên mục</th>
                                    <th class="text-left">Tên Chương</th>
                                    <th class="text-left">Thuộc</th>
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
