@extends('layouts.app')

@section('content')
    <section>
        
      <div class="container">
        <h1>Your Projects</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <table class="table table-stripped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Project Type</th>
              <th>Link</th>
              <th>Project Status</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($projects as $project)
                <tr>
                  <td>{{ $project->id}}</td>
                  <td>
                    <a href="{{ route('admin.projects.show',$project) }}">
                    {{ $project->name  }}
                  </a>
                  </td>
                  <td>{{ $project->description }}</td>
                  <td>{{$project->project_type}}</td>
                  <td>{{$project->link}}</td>
                  <td>{{$project->project_status}}</td>

                  <td>
                    <a class="btn btn-primary" href="{{ route('admin.projects.edit',$project) }}">Edit</a>
                  </td>
                 <td>
                    <form action="{{ route('admin.projects.destroy',$project)}}" method="POST">
                      @csrf
                      @method('DELETE')

                      <button class="btn btn-danger">Delete</button>
                    </form>
                  </td> 

                </tr>
            @empty
                <tr>
                  <td>Nessun project</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
@endsection