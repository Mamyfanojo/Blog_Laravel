@extends('admin/layout.base')

@section('title', 'addpost')

@section('nav', 'Add Post')

@section('content')


  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="index.html" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back to Dashboard
          </a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- POST -->
  <section id="post">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Add post</h4>
            </div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data" action="{{ route('admin.post.store', $post) }}" >
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                  <label for="title">Category</label>
                  
                  <select class="form-control" id="category" name="category_id">
                    <option value="">Selectionner une categorie</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                    @endforeach
                  </select>

                </div>
                <div class="form-group">
                  <!-- <label for="file">Image Upload</label>
                  <input type="file" name="image" class="form-control-file">
                  <small class="form-text text-muted">Max size 3 mb</small> -->
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea name="body" class="form-control"> {{ old('body') }} </textarea>
                  @error('body')
                    {{ $message }}
                  @enderror
                </div>

                
                    <button class="btn btn-secondary btn-block">
                        <i class="fa fa-check"></i> Save 
                    </button>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection

<!-- NOVAINA FARANY -->