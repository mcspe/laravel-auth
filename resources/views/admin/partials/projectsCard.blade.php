<div class="ms-card bg-dark text-bg-dark">
  <a href="{{ route('admin.project.show', $project) }}" class="d-flex p-3 gap-3 align-items-center">
    <div class="ms-card-img">
      <img src="{{ Vite::asset($project->preview) }}" alt="{{ $project->title }}">
    </div>
    <div class="ms-card-info">
      <p>ID: {{ $project->id }}</p>
      <p>Title: {{ ucwords($project->title) }}</p>
    </div>
  </a>
</div>
