<div class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
    <script type="text/javascript">function getCookie(d){d+="=";for(var b=decodeURIComponent(document.cookie).split(";"),c=[],a=0;a<b.length;a++)0==b[a].trim().indexOf(d)&&(c=b[a].trim().split("="));return 0<c.length?c[1]:""}var js_bgcolor=getCookie("bgcolor-cookie");"#232323"==js_bgcolor&&(document.getElementsByTagName("body")[0].className+=" dark-theme");</script>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Hiện menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <h1><a class="header-logo" href="{{route('trangchu')}}" title="doc truyen">doc truyen</a></h1>
        </div>
        <div class="navbar-collapse collapse" itemscope itemtype="">
            <meta itemprop="url" content="" />
            <ul class="control nav navbar-nav ">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Danh sách <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('truyenmoi')}}" title="Truyện mới cập nhật">Truyện Mới Cập Nhật</a></li>
                        <li><a href="javascript:void(0)" title="Truyện Hot">Truyện Hot</a></li>
                        <li><a href="{{route('truyenfull')}}" title="Truyện Full">Truyện Full</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Thể loại <span class="caret"></span></a>
                    <div class="dropdown-menu multi-column">
                        <div class="row">
                            @foreach($category as $ctg)
                            <div class="col-md-4">
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('parent-category',$ctg->id)}}" title="Thể Loại {{$ctg->name}}">
                                            {{$ctg->name}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Tùy chỉnh <span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right settings">
                        <form class="form-horizontal">
                            <div class="form-group form-group-sm">
                                <label class="col-sm-2 col-md-5 control-label" for="truyen-background">Màu nền</label>
                                <div class="col-sm-5 col-md-7">
                                    <select class="form-control" id="truyen-background">
                                        <option value="#F4F4F4" selected>Xám nhạt</option>
                                        <option value="#232323">Màu tối</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="dropdown">
                    @if (Route::has('login'))
                    @auth
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{auth()->user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if(auth()->user()->can('admin-writer') || auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                        <li><a href="{{route('manage.home')}}" title="Truyện mới cập nhật">Trang Quản Lí</a></li>
                        @endcan
                        <li><a href="{{ route('logout') }}" title="Truyện Hot"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                    @else
                    <a href="{{ route('login') }}">Đăng Nhập</a>
                    @if (Route::has('register'))
                    <li class="dropdown">
                    <a href="{{ route('register') }}"> Đăng Ký</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </li>
            </ul>
            <form class="navbar-form navbar-right" action="#" role="search" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
                <div class="input-group search-holder">
                    <meta itemprop="target" content="#" />
                    <input aria-label="Từ khóa tìm kiếm" role="search key" class="form-control" id="search-input" type="search" name="tukhoa" placeholder="Tìm kiếm..." value="" itemprop="query-input" required>
                    <div class="input-group-btn"><button class="btn btn-default" type="submit" aria-label="Tìm kiếm" role="search"><span class="glyphicon glyphicon-search"></span></button></div>
                </div>
                <div class="list-group list-search-res hide"></div>
            </form>
        </div>
    </div>
    <div class="navbar-breadcrumb">
        <div class="container breadcrumb-container"> Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục. </div>
    </div>
</div>

