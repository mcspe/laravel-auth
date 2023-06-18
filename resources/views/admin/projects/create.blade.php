@extends('layouts.app')

@section('content')

  <h2>Add a new Project</h2>
  <form action="{{ route('admin.project.store') }}" method="POST" class="w-75 my-5 mx-auto px-5">
    <div class="mb-3">
      <label for="title" class="form-label">Insert the project title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
    </div>
    <div class="mb-3">
      <label for="preview" class="form-label">Insert the project image path</label>
      <input type="text" class="form-control" id="preview" name="preview" value="{{ old('preview') }}">
    </div>
    <div class="mb-3">
      <label for="summary" class="form-label">Insert the project summary</label>
      <textarea name="summary" id="summary" class="form-control">{{ old('summary') }}</textarea>
    </div>
    <div class="mb-3">
      <label for="languages" class="form-label">Insert the project image languages</label>
      <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages') }}">
    </div>
    <div class="mb-3">
      <label for="link" class="form-label">Insert the project image link</label>
      <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script>
    ClassicEditor
        .create( document.querySelector( '#summary' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

@endsection
