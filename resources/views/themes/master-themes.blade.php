<!DOCTYPE html>
<html lang="vi">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile#">
        @include('themes.blocks.header')
    </head>
	<body id="body_home">
		<div id="wrap">
            @include('themes.blocks.navbar')
            @yield('themes-content')
		</div>
        @include('themes.blocks.footer')
	</body>
</html>
