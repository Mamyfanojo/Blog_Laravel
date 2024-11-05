@extends('admin/layout.base')

@section('title', 'Add categorie')

@section('nav', 'Categories')

@section('content')

 <!-- CATEGORY MODAL --><!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3" id="actions">
            <a href=" {{ route('admin.category.create') }} " class="btn btn-primary btn-block" >
            <i class="fa fa-plus"></i> Add category
            </a>
        </div>
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="search">
            <span class="input-group-btn">
              <button class="btn btn-success">Search </button>
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

  <!-- CATEGORIES -->
  <section id="post">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>All categories</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Date posted</th>
                  <th>Actions</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

              @foreach ($categories as $category )
                <tr>
                  <td scope="row"> {{ $category->id }} </td>
                  <td> {{ $category->name }} </td>
                  <td> {{ $category->created_at }} </td>
                  <td style="display: flex;  ">
                    <a style=" margin-right: 10px; " href=" {{ route('admin.category.edit', $category) }} " class="btn btn-outline-secondary"> 
                      Modifier 
                    
                    </a>
                    <form method="post" action=" {{ route('admin.category.destroy', $category) }} ">
                      @csrf
                      @method('delete')
                      <button href="details.html" class="btn btn-outline-danger"> Supprimer </button>
                    </form>
                    
                  </td>
                </tr>
              @endforeach

              </tbody>
            </table>

                
          {{$categories->links()}}
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <!-- END CATEGORY MODAL -->
@endsection