@extends('layouts.app')

@section('content')

<div class="card-footer col-md-12 text-right ml-auto">
  <div class="stats col-md-12 ">
   <a href="" class="">
      <button class="btn btn-danger">Back</button>
    </a>
    <a href="" class="">
      <button class="btn btn-primary">Create Category</button>
    </a>
    
    <a href="{{ route('author.book_create', $user_id) }}" class="">
      <button class="btn btn-primary">Add Book</button>
    </a>


    {{-- <div class = "btn-group">
   
      <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle = "dropdown">
         Select Category 
         <span class = "caret"></span>
      </button>
      
      <ul class = "dropdown-menu" role = "menu">
         <li><a href = "#">1</a></li>
         <li><a href = "#">2</a></li>
         <li><a href = "#">3</a></li>
         
         <li class = "divider"></li>
         <li><a href = "#">4</a></li>
      </ul>
    </div>
    
    <div class = "btn-group">
    
    <button type = "button" class = "btn btn-primary dropdown-toggle" data-toggle = "dropdown">
       Select Bookcase
       <span class = "caret"></span>
    </button>
    
    <ul class = "dropdown-menu" role = "menu">
       <li><a href = "#">1</a></li>
       <li><a href = "#">2</a></li>
       <li><a href = "#">3</a></li>
       
       <li class = "divider"></li>
       <li><a href = "#">4</a></li>
    </ul>
    </div>

    <div class="stats col-md-3 ">
      <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
      </div>
      
      </div> --}}
    
</div>
</div>





{{-- <a href="" class="">
<button class="btn btn-primary">Back</button>
</a> --}}

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
            {{-- <th>Section</th> --}}
            {{-- <th>Category</th> --}}
            <th>Author</th>
            <th width="250px">Action</th>
          </thead>

          <tbody>
            @foreach ($books as $book)
        
            <tr>
              <td>{{ $book->id }}</td>
              <td>{{ $book->name }}</td>
              <td>{{ $book->bookcase }}</td>
              {{-- <td>{{ $book->section }}</td> --}}
              {{-- <td>{{ $book->category }}</td> --}}
              <td>{{ $book->author }}</td>
          
              <td>
              
                <form action="" method="POST"> 
                  <a href="" class="btn btn-success" title="edit" style="border:none;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger" type="submit" title="delete" onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE')" title="show" style="border:none;"><i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                  @endforeach
              </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
 


@endsection