@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="card mx-auto p-3 bg-primary my-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $project->title }}</h5>
              <p class="card-text text-light">{!! $project->content !!}</p>
            </div>
          </div>
    </div>
</section>
    
@endsection