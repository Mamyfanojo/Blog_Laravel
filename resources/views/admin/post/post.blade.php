@extends('admin/layout.base')

@section('title', 'posts')

@section('nav', 'Posts')

@section('content')

<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3" id="actions">
            <a href=" {{ route('admin.post.create') }} " class="btn btn-primary btn-block" >
            <i class="fa fa-plus"></i> Add post
            </a>
        </div>
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="search">
            <span class="input-group-btn">
              <button class="btn btn-primary">Search </button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
  <div class="container mt-5">
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      
    </div>
  </section>

  <!-- POST -->
  <section id="post">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>All Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date creation</th>
                  <th>Body</th>
                  <th>Actions</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post )
                  <tr>@if ($post->image)
                      <td>
                        <img width="50px" height="50px" src="{{ $post->imageUrl() }}" alt="">
                      </td>
                    @endif
                    <td> {{ $post->title }} </td>
                    <td> {{ $post->category?->name }} </td>
                    <td> {{ $post->created_at }} </td>
                    <td> {{ $post->body }} </td>

                    

                    <td style="display: flex;  ">
                    <a style=" margin-right: 10px; " href=" {{ route('admin.post.edit', [$post]) }} " class="btn btn-outline-secondary">
                      Modifier 
                    
                    </a>
                    <form method="post" action=" {{ route('admin.post.destroy', [$post]) }} ">
                      @csrf
                      @method('delete')
                      <button href="details.html" class="btn btn-outline-danger"> Supprimer </button>
                    </form>
                    
                  </td>
                  </tr>
                @endforeach
                
              </tbody>
            </table>

            <nav class="ml-4">
              {{ $posts->links() }}
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- ADD POST -->
  <div class="modal fade" id="addCategoryModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-tittle">Add Category</h5>
            <button class="close" data-dismiss="modal"> <span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-success" data-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>

@endsection