@extends('admin/layout.base')

@section('title', 'dashboard')

@section('nav', 'Dashboard')

@section('content')
@include('admin.layout.actions')
  <!-- POST -->
  <section id="post" >
    <div class="container">
      <div class="row">
        <div class="col-md-9" >
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date posted</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td>Post One</td>
                  <td>Web development</td>
                  <td>July 12, 2017</td>
                  <td>
                    <a href="details.html" class="btn btn-outline-secondary"> Modifier </a>
                    <a href="details.html" class="btn btn-outline-danger"> Supprimer </a>
                  </td>
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td>Post two</td>
                  <td>Tech Gadgets</td>
                  <td>July 3, 2017</td>
                  <td>
                    <a href="details.html" class="btn btn-outline-secondary"> Modifier </a>
                    <a href="details.html" class="btn btn-outline-danger"> Supprimer </a>
                  </td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td>Post three</td>
                  <td>Web development</td>
                  <td>July 12, 2017</td>
                  <td>
                    <a href="details.html" class="btn btn-outline-secondary"> Modifier </a>
                    <a href="details.html" class="btn btn-outline-danger"> Supprimer </a>
                  </td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td>Post four</td>
                  <td>Bussiness</td>
                  <td>July 12, 2017</td>
                  <td>
                    <a href="details.html" class="btn btn-outline-secondary"> Modifier </a>
                    <a href="details.html" class="btn btn-outline-danger"> Supprimer </a>
                  </td>
                </tr>
                <tr>
                  <td scope="row">5</td>
                  <td>Post five</td>
                  <td>Web development</td>
                  <td>July 15, 2017</td>
                  <td>
                    <a href="details.html" class="btn btn-outline-secondary"> Modifier </a>
                    <a href="details.html" class="btn btn-outline-danger"> Supprimer </a>
                  </td>
                </tr>
                <tr>
                  <td scope="row">6</td>
                  <td>Post six</td>
                  <td>Health & Wellness</td>
                  <td>July 12, 2017</td>
                  <td>
                    <a href="details.html" class="btn btn-outline-secondary"> Modifier </a>
                    <a href="details.html" class="btn btn-outline-danger"> Supprimer </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> 6
              </h1>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View </a>
            </div>
          </div>
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> 4
              </h1>
              <a href="categories.html" class="btn btn-outline-light btn-sm"> View</a>
            </div>
          </div>
          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> 2
              </h1>
              <a href="users.html" class="btn btn-outline-light btn-sm">View </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-tittle">Add Post</h5>
          <button class="close" data-dismiss="modal"> <span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control">
                <option value="">Web development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business</option>
                <option value="">Health & Wellness</option>
              </select>
            </div>
            <div class="form-group">
              <label for="file">Image Upload</label>
              <input type="file" class="form-control-file">
              <small class="form-text text-muted">Max size 3 mb</small>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- CATEGORY MODAL -->
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
  <!-- USER MODAL -->
  <div class="modal fade" id="addUserModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-tittle">Add User</h5>
        <button class="close" data-dismiss="modal"> <span>&times;</span></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="input-group my-2">
            <span class="input-group-addon fa fa-quora"></span>
            <input type="text" class="form-control" placeholder="Tittle...">
          </div>
          <div class="input-group my-2">
            <span class="input-group-addon fa fa-user"></span>
            <input type="text" class="form-control" placeholder="Name...">
          </div>
          <div class="input-group my-2">
            <span class="input-group-addon fa fa-envelope"></span>
            <input type="text" class="form-control" placeholder="Email...">
          </div>
          <div class="input-group my-2">
            <span class="input-group-addon fa fa-key"></span>
            <input type="password" class="form-control" placeholder="Password...">
          </div>
          <div class="input-group">
            <span class="input-group-addon fa fa-key"></span>
            <input type="password" class="form-control" placeholder="Confirm password...">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>


@endsection