@section('content')
<div class="welcome">
	<h1>Admin</h1>
	<p>
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<p class="erros">{{ $error }}</p>
		@endforeach
	@endif
	</p>
	
	{{ Form::open(array('url' => 'admin/login/login', 'method' => 'post')) }}
		<p>
			{{ Form::label('E-mail') }}
			{{ Form::input('text', 'email') }}
		</p>
		<p>
			{{ Form::label('Senha') }}
			{{ Form::input('password', 'password') }}
		</p>
		<p>
			{{ Form::submit('Enviar') }}
		</p>
	{{ Form::close() }}
</div>
@endsection