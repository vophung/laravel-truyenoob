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
						<h3 class="card-title"><i>Thêm Tác Giả by</i> <strong>{{auth()->user()->name}}</strong></h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
                    <form role="form" action="{{route('manage.author.store')}}" method="POST" id="quickForm">
                        @csrf
						<div class="card-body">
							<div class="form-group">
								<label for="#">Tên Tác Giả</label>
								<input type="text" name="name" class="form-control" id="#" placeholder="Nhập Tên Tác Giả">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('name'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Từ Khóa Tìm Kiếm</label>
								<input type="text" name="keyword" class="form-control" id="#" placeholder="Từ Khóa Tìm Kiếm">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('keyword'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('keyword') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Mô Tả Của Tác Giả</label>
								<textarea name="description" class="form-control ckeditor" id="#" rows="5" placeholder="Mô Tả Ngắn">
								</textarea>
                            </div>
                            <div class="help-info">
                                @if ($errors->has('description'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
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
