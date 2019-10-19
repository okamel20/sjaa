
		<!-- validation -->
   
		@if($errors->any())
		<ul>
		<div class="container-fluid">
		<div class="alert alert-dismissable alert-danger  ">
			<button class="close" aria-hidder="true" data-dismiss="alert">&times;</button>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>					
		@endforeach
		</div>
		</div>			
		</ul>
		
		@endif
		
		
		<!-- save -->	
		
		@if(!empty(Session::get('save')))
		<div class="alert alert-success">
		<button class="close" aria-hidder="true" data-dismiss="alert">&times;</button>
		<h4>{!!Session::get('save') !!}</h4>
			
		</div>
		@endif
		
				
		<!-- error -->
		@if(!empty(Session::get('error')))
		
		<div class="alert alert-warning">
		<button class="close" aria-hidder="true" data-dismiss="alert">&times;</button>
			<h4>{!!Session::get('error') !!}</h4>
			
		</div>
		
		@endif
			   