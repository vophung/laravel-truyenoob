@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Chuyên Mục</h1>
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
						<h3 class="card-title"><i>Sửa Tác Giả <strong>{{$authors->name}}</strong> by</i> <strong>{{auth()->user()->name}}</strong></h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
                    <form role="form" action="{{route('manage.author.update',$authors)}}" method="POST" id="quickForm">
                        @csrf
                        {{method_field('PUT')}}
						<div class="card-body">
							<div class="form-group">
								<label for="#">Tên Tác Giả</label>
								<input type="text" name="name" class="form-control" value="{{$authors->name}}" id="#" placeholder="Nhập Tên Thể Loại">
							</div>
							<div class="form-group">
								<label for="#">Từ Khóa Tìm Kiếm</label>
								<input type="text" name="keyword" class="form-control" value="{{$authors->keyword}}" id="#" placeholder="Từ Khóa Tìm Kiếm">
							</div>
							<div class="form-group">
								<label for="#">Mô Tả Của Tác Giả</label>
								<textarea name="description" class="form-control ckeditor" id="#" rows="5" placeholder="Mô Tả Ngắn">{{$authors->description}}</textarea>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" onclick="location.href='{{route('manage.category.index')}}'" class="btn btn-primary">Back</button>
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
