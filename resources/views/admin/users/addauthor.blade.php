@extends('layouts.app')

@section('content')
<div class="card-footer col-md-12">
    <div class="stats col-md-12 ">
     <a href="/" class="">
        <button class="btn m-3 btn-primary">Back</button>
      </a>
    </div>

    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create User</h4>
                </div>
   
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
    
                            <form action="{{ route('register.author') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                        required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif 
                                </div>
    
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                        name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
    
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
    
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

        <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning ">
                <h4 class="card-title">User List</h4>
              </div>
             
              <div class="card-body text-center table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="250px">Action</th>
                  </thead>
        
                  <tbody>
                    @foreach ($users as $user)
                
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                      
                        <form action="{{ route('admin.delete', $user->id) }}" method="POST">           
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
    </div>
</div>
</div>
</div>

@endsection