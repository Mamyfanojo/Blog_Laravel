@extends('admin/layout.base')

@section('title', 'Add categorie')

@section('nav', 'Add categorie')

@section('content')

 <!-- CATEGORY add -->
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
              <h4>Add category</h4>
            </div>
            <div class="card-body">
              <form method="post" action=" {{ route('admin.category.store') }} ">
                @csrf
                @method('post')
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" value="{{old('name')}}">
                  <div class="col-md-3 mt-4 ml-auto">
                    <button class="btn btn-secondary ">
                      Save category
                    </button>
                  </div>
              </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    
@endsection