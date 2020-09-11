<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="{{route('manage.home')}}" class="brand-link">
    <img src="{{URL::to('images/logo/logo-manage.jpg')}}" alt="Logo" class="brand-image img-circle elevation-3"
		style="opacity: .8">
	<span class="brand-text font-weight-light">Trang Quản Lý</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
                <img src="
                @if(auth()->user()->image == '')
                {{URL::to('/images/avatar/avatar-default.jpg')}}
                @else
                {{URL::to('/images/avatar/' .  auth()->user()->image)}}
                @endif
                " class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="{{route('manage.profile.index')}}" class="d-block">{{auth()->user()->name}}</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview menu-open">
					<a href="{{route('home')}}" class="nav-link active">
						<i class="nav-icon fas fa-house-user"></i>
						<p>Home</p>
					</a>
                </li>
                @if(auth()->user()->can('admin'))
				<li class="nav-item has-treeview">
					<a href="{{route('manage.category.index')}}" class="nav-link">
						<i class="nav-icon far fa-folder-open"></i>
						<p>Thể Loại</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="{{route('manage.author.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-injured"></i>
						<p>Tác Giả</p>
					</a>
                </li>
                @endif
                @if(auth()->user()->can('admin') || auth()->user()->can('writer') || auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
						<p>
							Truyện
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
                        @if(auth()->user()->can('admin-writer'))
						<li class="nav-item">
							<a href="{{route('manage.story.create')}}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Thêm Mới Truyện</p>
							</a>
                        </li>
                        @endif
						<li class="nav-item">
							<a href="{{route('manage.story.index')}}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh Sách Truyện</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('manage.story.chapter.show')}}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh Sách Chương, Truyện</p>
							</a>
						</li>
                    </ul>
                    </li>
                    @endif
                    @if(auth()->user()->can('admin') || auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                    <li class="nav-item has-treeview">
                        <a href="{{route('manage.user.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>Thành Viên</p>
                        </a>
                    </li>
                    @endcan
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
