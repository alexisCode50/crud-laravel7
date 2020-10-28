@extends('welcome')

@section('content')
    <h1>Notas</h1>

    <a href="/agregar" class="btn btn-primary">Crear Nota</a>

    <table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Name</th>
		      <th scope="col">Description</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
	  <tbody>
	  		@foreach($notas as $item)
			    <tr>
			      	<th>{{ $item->id }}</th>
			      	<td>{{ $item->name }}</td>
			      	<td>{{ $item->description }}</td>
			      	<td>
			      		<a href="{{ route('adit-nota', $item->id) }}" class="btn btn-primary">Editar</a>
			      		

			      		<form action="{{ route('borrar-nota', $item->id) }}" method="POST">
			      			@csrf
    						@method('DELETE')
			      			<button type="submit" class="btn btn-danger">Borrar</button>
			      		</form>

			      	</td>
			    </tr>
		    @endforeach
	  </tbody>
	</table>


@endsection