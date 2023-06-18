@extends('layouts.app')

@section('content')
  <div class="ms-projects-container">
    @foreach ($projects as $project)
      @include('admin.partials.projectsCard')
    @endforeach
  </div>
@endsection
