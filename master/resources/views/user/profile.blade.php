@extends('layout.master')
@section('content')
{{-- end navbar --}}

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0 " style="color: #ff5a5f">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/profile">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              
              <h5 class="my-3"></h5>
              <p class="text-muted mb-1">Hello {{$users->name}}</p>
              <p class="text-muted mb-4">Jordan - {{$users->address}}</p>
              <div class="d-flex justify-content-center mb-2" >
                <button type="button" class="btn btn-outline-primary ms-1" style="background-color: #ff5a5f;border-color: #ff5a5f"><a href="{{'/user/edit_profile/'.$users->id}}">Edit</a></button>
                {{-- <button type="button" class="btn btn-outline-primary ms-1" style="border-color: #ff5a5f;color:#ff5a5f">Add Estate</button> --}}
              </div>
            </div>
          </div>
     
        </div>
        
        <div class="col-lg-8">
          <form action="/profile/{{$users->id}}"> 
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" name='name'>{{$users->name}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" name='email'>{{$users->email}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" name='phone'>{{$users->phone}}</p>
                </div>
              </div>
              {{-- <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
              </div> --}}
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0" name='address'>{{$users->address}}</p>
                </div>
              </div>
            </div>
          </div>
          </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section> 

{{-- footer --}}
@endsection