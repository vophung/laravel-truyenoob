@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Truyện {{$stories->name}}</h1>
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
                            <div class="col-sm-4">@include('partials.alerts')</div>
                            <div class="col-sm-4" >
                                <a class="btn btn-app col-sm-12" href="{{route('manage.story.chapter.create',$stories->id)}}">
                                    <i class="fas fa-folder-plus"></i>Thêm Chương {{$stories->name}}
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-app col-sm-12" href="{{route('manage.story.index')}}">
                                    <i class="fas fa-folder-plus"></i> Quản Lý Truyện
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-app col-sm-12" href="{{route('manage.story.chapter.show')}}">
                                    <i class="fas fa-folder-plus"></i> Toàn Bộ Truyện, Chương
                                </a>
                            </div>
                        </div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
                                    <th class="text-left">Tên Mục</th>
                                    <th class="text-left">Tên Chương</th>
                                    <th class="text-left">Ngày Cập Nhật</th>
									<th class="text-left">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach($chapters as $chapter)
                                <tr>
                                    <td>{{$chapter->subname}}</td>
                                    <td>{{$chapter->name}}</td>
                                    <td>{{$chapter->created_at->format('d-m-Y')}}</td>
                                    <td class="text-center py-0 align-middle">
                                        <a href="{{route('manage.story.chapter.edit',['chapter' => $chapter->id, 'story' => $stories->id])}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
                                        <a href="{{route('manage.story.chapter.destroy',$chapter->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
                                    <th class="text-left">Tên Mục</th>
                                    <th class="text-left">Tên Chương</th>
                                    <th class="text-left">Ngày Cập Nhật</th>
									<th class="text-left">Action</th>
								</tr>
							</tfoot>
						</table>
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
