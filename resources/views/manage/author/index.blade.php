@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tác Giả</h1>
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
							<div class="col-sm-4" style="float:right">
								<a  class="create-modal-author btn btn-app col-sm-12" href="javascript:void(0)">
								<i class="fas fa-folder-plus"></i> Thêm Tác Giả
								</a>
							</div>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="table" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($authors as $author)
								<tr class="author{{$author->id}}">
									<td>{{$loop->iteration}}</td>
									<td>{{$author->name}}</td>
									<td class="text-center py-0 align-middle">
										<a href="javascript:void(0)" class="edit-modal-author btn btn-info" data-id="{{$author->id}}" data-name="{{$author->name}}" data-keyword="{{$author->keyword}}" data-description="{{$author->description}}">
										<i class="fas fa-user-edit"></i>
										</a>
										<a href="javascript:void(0)" class="delete-modal-author btn btn-danger" data-id="{{$author->id}}" data-name="{{$author->name}}" data-keyword="{{$author->keyword}}" data-description="{{$author->description}}">
										<i class="fas fa-trash"></i>
										</a>
									</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th class="text-center">Action</th>
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
<div id="create-author" class="modal fade" id="category-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"></h4>
			</div>
			<form class="form-horizontal" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label>Tên:</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Tên Tác Giả">
						<p class="error-name text-center alert alert-danger hidden"></p>
					</div>
					<div class="form-group">
						<label>Từ Khóa Tìm Kiếm:</label>
						<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Từ Khóa Tìm Kiếm" >
						<p class="error-keyword text-center alert alert-danger hidden"></p>
					</div>
					<div class="form-group">
						<label>Mô Tả Thể Loại:</label>
						{{-- <input type="text" name="description" id="description" class="form-control" placeholder="Description"> --}}
						<textarea  id="description" name="description" class="form-control" rows="3" placeholder="Mô Tả Ngắn"></textarea>
						<p class="error-description text-center alert alert-danger hidden"></p>
					</div>
				</div>
			</form>
			<div class="modal-footer">
				<div class="form-group">
					<button class="btn btn-success btn-submit" id="add-author">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="myModal-author"class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="modal">
					<div class="form-group">
                        <label>ID:</label>
                        <input type="text" id="fid" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tên thể loại:</label>
                        <input type="text" class="form-control" id="n" placeholder="Tên Thể Loại">
                        <p class="error-name text-center alert alert-danger hidden"></p>
					</div>
					<div class="form-group">
                        <label>Từ Khóa Tìm Kiếm:</label>
                        <input type="text" class="form-control" id="k" placeholder="Từ Khóa Tìm Kiếm">
                        <p class="error-keyword text-center alert alert-danger hidden"></p>
					</div>
					<div class="form-group">
                        <label>Mô Tả Thể Loại:</label>
                        <textarea id="d" class="form-control" rows="3" placeholder="Mô Tả Ngắn"></textarea>
                        <p class="error-description text-center alert alert-danger hidden"></p>
					</div>
                </form>
				{{-- Form Delete Post --}}
				<div class="deleteContent">
					Bạn có chắc chắn xóa Tác Giả <span class="title"></span>?
					<span class="hidden id"></span>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn actionBtn" data-dismiss="modal">
				<span id="footer_action_button" class="glyphicon"></span>
				</button>
				<button type="button" class="btn btn-warning" data-dismiss="modal">
				<span class="glyphicon glyphicon"></span>Close
				</button>
			</div>
		</div>
	</div>
</div>
@endsection
