@extends('layouts.app')

@section('content')
  
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="#fff" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <!-- <i class="material-icons">bible</i> -->
            </div>
            <h3 class="card-category">Manage Users</h3>
            <h4 class="card-title">Available Users</h4>
          </div>
          <div class="card-footer col-md-12">
            <div class="stats col-md-12 ">
             <a href="" class="">
                <button class="btn btn-primary">...View Users...</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
              <!-- <i class="material-icons">bible</i> -->
            </div>
            <h3 class="card-category">Available Books</h3>
            <h4 class="card-title">Manage Books</h4>
          </div>
          <div class="card-footer col-md-12">
            <div class="stats col-md-12 ">
             <a href="book" class="">
                <button class="btn btn-primary">...View Books...</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-muted card-header-icon">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
              </svg>
              <!-- <i class="material-icons">bible</i> -->
            </div>
            <h3 class="card-category pt-3">Issued Books</h3>
            <h4 class="card-title">Issued to Users</h4>
          </div>
          <div class="card-footer col-md-12">
            <div class="stats col-md-12 ">
             <a href="" class="">
                <button class="btn btn-primary">..Issued Books..</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
              </svg>
              <!-- <i class="material-icons">bible</i> -->
            </div>
            <h3 class="card-category pt-3">Returned Books</h3>
            <h4 class="card-title">Returned by Users</h4>
          </div>
          <div class="card-footer col-md-12">
            <div class="stats">
             <a href="" class="">
                <button class="btn btn-primary">Returned Books</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      @endsection