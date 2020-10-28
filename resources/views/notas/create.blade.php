@extends('welcome')

@section('content')
    <h1>Crear Nota</h1>

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
    		<form action="{{ route('add-nota') }}" method="POST">
    			@csrf
				  <div class="form-group">
				    <label>Name</label>
				    <input type="text" class="form-control" name="nombre">
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <input type="text" class="form-control" name="description">
				  </div>
				  <button type="submit" class="btn btn-primary">Save</button>
			</form>
    	</div>
    </div>
@endsection