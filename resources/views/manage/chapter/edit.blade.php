@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Truyện {{$chapters->story->name}}</h1>
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
						<h3 class="card-title"><i>Sửa <strong>{{$chapters->subname}}</strong> tên chương <strong>{{$chapters->name}}</strong> by</i> <strong>{{auth()->user()->name}}</strong></h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
                    <form role="form" action="{{route('manage.story.chapter.update',['chapter' => $chapters,'story' => $stories])}}" method="POST" id="quickForm">
                        @csrf
                        {{method_field('PUT')}}
						<div class="card-body">
							<div class="form-group">
								<label for="#">Tên Mục</label>
								<input type="text" name="subname" value="{{$chapters->subname}}" class="form-control" id="#" placeholder="Nhập Tên Mục">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('subname'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('subname') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Tên Chương</label>
								<input type="text" name="name" value="{{$chapters->name}}" class="form-control" id="#" placeholder="Tên Chương">
                            </div>
                            <div class="help-info">
                                @if ($errors->has('name'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
							<div class="form-group">
								<label for="#">Nội Dung</label>
								<textarea name="content" class="form-control ckeditor" id="#" rows="5" placeholder="Nội Dung Truyện">
                                {{{ old('content',$chapters->content) }}}
                                </textarea>
                            </div>
                            <div class="help-info">
                                @if ($errors->has('content'))
                                <p class="help is-danger" STYLE="COLOR:RED;">{{ $errors->first('content') }}</p>
                                @endif
                            </div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" onclick="location.href='{{{route('manage.story.chapter.index',['story' => $chapters->story->id])}}}'" class="btn btn-primary">Back</button>
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
