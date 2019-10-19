@if($errors->any())
	<div class="alert alert-danger alert-dismissable">
		<ul>
			<button class="close float-right" aria-hidder="true" data-dismiss="alert">&times;</button>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach		
		</ul>
	</div>
	
@endif

@if(!empty(Session::get('save')))
	<div class="alert alert-success" style="background-color: #8fce8f">
		<button class="close float-right" aria-hidder="true" data-dismiss="alert">&times;</button>
		<center><h4>{!!Session::get('save') !!}</h4></center>
	</div>
@endif
				
		<!-- error -->
@if(!empty(Session::get('error')))
	<div class="alert alert-warning" style="background-color: #dc6b6b">
		<button class="close float-right" aria-hidder="true" data-dismiss="alert">&times;</button>
		<center><h4>{!!Session::get('error') !!}</h4></center>
		
	</div>
@endif