@extends('layouts.app')

@section('content')
  
<div class="card-footer col-md-12 text-right ml-auto">
  <div class="stats col-md-12 ">
   <a href="" class="">
      <button class="btn btn-primary">Back</button>
    </a>
    <a href="" class="">
      <button class="btn btn-primary">Create Category</button>
    </a>
    
    <a href="" class="">
      <button class="btn btn-primary">Add Book</button>
    </a>
  </div>

  {{-- <a href="" class="">
    <button class="btn btn-primary">Back</button>
  </a> --}}
</div>

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary ">
        <h4 class="card-title">Book List</h4>
      </div>
      <div class="card-body text-center table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>ID</th>
            <th>Name</th>
            <th>Bookcase</th>
            <th>Section</th>
            <th>Category</th>
            <th>Email</th>
            <th>Book Id</th>
            <th>Author</th>
            <th width="200px">Action</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Chika</td>
              <td>2</td>
              <td>34</td>
              <td>chika@gmail.com</td>
              <td>Web Development</td>
              <td>1</td>
              <td>Hallel Amaechi</td>
              <td>
                <form action="" method="POST">

                  <a href="" class="btn btn-success" title="edit" style="border:none;"><i class="fa fa-edit" aria-hidden="true"></i></a>

                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger" type="submit" title="delete" onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE')" title="show" style="border:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
              </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
 


@endsection