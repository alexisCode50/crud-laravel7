@extends('welcome')

@section('content')
    <h1>Editar Nota</h1>

    <div class="row">
        <div class="col-md-4 m-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="row">
    	<div class="col-md-4">
    		<form action="{{ route('update-nota', $nota->id) }}" method="POST">
    			@csrf
    			@method('PUT')

				  <div class="form-group">
				    <label>Name</label>
				    <input type="text" class="form-control" name="nombre" value="{{ $nota->name }}">
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <input type="text" class="form-control" name="description" value="{{ $nota->description }}">
				  </div>
				  <button type="submit" class="btn btn-primary">Save Changes</button>
			</form>
    	</div>
    </div>
@endsection