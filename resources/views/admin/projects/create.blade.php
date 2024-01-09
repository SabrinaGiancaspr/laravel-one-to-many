@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Create a new Project</h1>
    <form action="{{ route('admin.projects.store' ) }}" method="POST" >
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="descrizione" ></textarea>
      </div>

      <div class="mb-3">
        <label for="type_id" class="form-label">project type</label>
        <select type="text" class="form-control" name="type_id" id="type_id" placeholder="project type">
          <option>select a project type</option>
          @foreach ($types as $type)
            <option @selected(old('type_id') == $type->id) value="{{$type->id}}">{{$type->name}}</option>
          @endforeach
        </select>
      </div>
      
      <div class="mb-3">
        <label for="project_status" class="form-label">project status</label>
        <input type="text" class="form-control" name="project_status" id="project_status" placeholder="project status">
      </div>
      
      <div class="">
        <input type="submit" class="btn btn-primary" value="Crea">
      </div>

    </form>
  </div>
</section>

@endsection