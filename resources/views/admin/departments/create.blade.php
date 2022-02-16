@extends('layouts.app')

@section('content')

<div class="card-footer col-md-12">
    <div class="stats col-md-12 ">
     <a href="" class="">
        <button class="btn m-3 btn-primary">Back</button>
      </a>
   
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Create Book</h4>
            </div>
    

            <div class="card-body">
              <form>

                <div class="row">
    
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Bookcase</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Section</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Category</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Book_id</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Author</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
               
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
    
@endsection