@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="card mx-auto p-3 my-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $project->title }}</h5>
              <p class="card-text">{{ $project->slug }}</p>
              <p class="card-text">{!! $project->content !!}</p>
              <div class="d-flex gap-2">
                
                  <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.edit', $project) }}">Modifica</a>
                
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">

                      @csrf
                      @method('DELETE')

                      <input type="submit" class="btn btn-danger btn-sm" value="delete">
                    </form>
                
              </div>
            </div>
          </div>
    </div>
</section>
    
@endsection