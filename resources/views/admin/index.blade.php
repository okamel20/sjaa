@include('admin.layouts.header')
@include('admin.layouts.menu')

<div class="app-container">
	@include('admin.layouts.nav')
	<div class="app-main">
		@include('admin.layouts.headerPage')
		@include('admin.layouts.msg')
    	@yield('content')
	</div>
    
</div>          
 
@include('admin.layouts.footer')
