@extends('layouts.app')

@section('content')

{{-- <div class="card-footer col-md-12 text-right ml-auto">
  <div class="stats col-md-12 ">
   <a href="" class="">
      <button class="btn btn-danger">Back</button>
    </a>
    <a href="" class="">
      <button class="btn btn-primary">Create Category</button>
    </a>
    
    <a href="/book/create" class="">
      <button class="btn btn-primary">Add Book</button>
    </a>

</div>
</div> --}}

  <div class="col-lg-12 col-md-12">
    <div class="card mt-5">
      <div class="card-header card-header-primary ">
        <h4 class="card-title">Book List</h4>
      </div>
     
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>ID</th>
            <th>Name</th>
            <th>Bookcase</th>
            <th>Author</th>
            <th width="180px">Downlaod Book</th>
          </thead>

          <tbody>
            @foreach ($books as $book)
        
            <tr>
              <td>{{ $book->id }}</td>
              <td>{{ $book->name }}</td>
              <td>{{ $book->bookcase }}</td>
              <td>{{ $book->author }}</td>
          
              <td>
              
                <a href="user/download{{ $book->name }}" download="{{ $book->name }}">
                    <i class="fa fa-download" aria-hidden="true"></i>
                </a>
                  @endforeach
              </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
 


@endsection