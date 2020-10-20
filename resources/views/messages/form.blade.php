{!! csrf_field() !!}
	@unless ($message->user_id)
		<p><label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{ $message->nombre ?? old('nombre') }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</label></p>
		<p><label for="email">
			Email
			<input class="form-control" type="text" name="email" value="{{ $message->email ?? old('email') }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label></p>
	@endunless
	<p><label for="mensaje">
		Mensaje
		<textarea class="form-control" name="mensaje">{{ $message->mensaje ?? old('mensaje') }}</textarea>
		{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
	</label></p>

	<input class="btn btn-primary" type="submit" value="{{ $btnText ?? 'Guardar' }}">