@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Modifica progetto</h1>
        <section>
            <div class="container">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST">
              
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" required class="form-control" id="title" name="title" placeholder="Titolo del progetto" value="{{ old('title', $project->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" readonly required class="form-control" id="slug" name="slug" placeholder="Slug del progetto" value="{{ old('slug', $project->slug) }}">
                    </div>
            
                    <div class="mb-3">
                        <label for="content" class="form-label">Project content</label>
                        <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $project->content) }}</textarea>
                    </div>
            
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Mofifica">
                    </div>
                </form>
        
                <!-- /resources/views/post/create.blade.php -->
         
        
         
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                         @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                         @endforeach
                      </ul>
                 </div>
                @endif
         
        <!-- Create Post Form -->
            </div>
        </section>
    </div>
</section>
    
@endsection