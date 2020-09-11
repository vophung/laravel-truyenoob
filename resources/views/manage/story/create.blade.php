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
			<!-- left column -->
			<div class="col-md-12">
				<!-- jquery validation -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title"><i>Thêm Truyện by</i> <strong>{{auth()->user()->name}}</strong></h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form role="form" enctype="multipart/form-data" action="{{route('manage.story.store')}}" method="POST" id="quickForm">
						@csrf
						<div class="card-body">
							<div class="form-group">
								<label for="#">Tên Truyện</label>
								<input type="text" name="name" value="{{ old('name') }}"  class="form-control" id="#" placeholder="Nhập Tên Truyện">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('name'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label>Chuyên Mục</label>
								<select class="select2" name="category[]"  multiple="multiple" data-placeholder="Chọn Chuyên Mục" style="width: 100%;">
									@foreach($categories as $category)
									<option value="{{$category->id}}"  >{{$category->name}}</option>
									@endforeach
								</select>
                            </div>
                            <div class="help-info">
                                @if ($errors->has('category'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('category') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label>Tác Giả</label>
								<div class="select2-purple">
									<select class="select2" name="author[]" multiple="multiple" data-placeholder="Chọn Tác Giả" data-dropdown-css-class="select2-purple" style="width: 100%;">
										@foreach($authors as $author)
										<option value="{{$author->id}}">{{$author->name}}</option>
										@endforeach
									</select>
								</div>
                            </div>
                            <div class="help-info">
                                @if ($errors->has('author'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('author') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <label>Hình Của Truyện</label>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="image">
                                </div>
                              </div>
                              <div class="help-info">
                                @if ($errors->has('image'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('image') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Mô Tả Ngắn Của Truyện</label>
								<textarea name="description"   class="form-control ckeditor" id="#" rows="5" placeholder="Mô Tả Ngắn">
                                    {{-- {{{ old('content',$stories->content) }}} --}} 
                                </textarea>
                            </div>
                            <div class="help-info">
                                @if ($errors->has('description'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Mô Tả Nội Dung Của Truyện</label>
								<textarea name="content" class="form-control ckeditor" id="#" rows="5" placeholder="Mô Tả Ngắn">
                                    {{-- {{{ old('content',$stories->content) }}} --}}
                                </textarea>
                            </div>
                            <div class="help-info">
                                @if ($errors->has('content'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('content') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Từ Khóa Tìm Kiếm</label>
								<input type="text" name="keyword" value="{{ old('keyword') }}" class="form-control" id="#" placeholder="Từ Khóa Tìm Kiếm">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('keyword'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('keyword') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Nguồn Truyện</label>
								<input type="text" name="source"  value="{{ old('source') }}" class="form-control" id="#" placeholder="Từ Khóa Tìm Kiếm">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('source'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('source') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Trạng Thái</label>
                                <div class="form-check">
                                  <input class="form-check-input" name="status" type="radio" value="1">
                                  <label class="form-check-label">Hoàn Thành</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="status" type="radio" value="0">
                                    <label class="form-check-label">Đang Cập Nhật</label>
                                  </div>
                              </div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" onclick="location.href='{{route('manage.story.index')}}'" class="btn btn-primary">Back</button>
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
