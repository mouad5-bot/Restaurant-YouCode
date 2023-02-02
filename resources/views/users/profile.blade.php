@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card m-3">
                <div class="text-center"> <h1>  <b> My Profile </b> </h1> </div>

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group m-3">
                          <label for="name">Name</label>
                          <input type="name" class="form-control" id="name">
                        </div>

                        <div class="form-group m-3">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group m-3">
                            <label for="pswd">Password</label>
                            <input type="password" class="form-control" id="pswd">
                          </div>

                          <div class="form-group m-3">
                            <label for="Cpswd">Comfirm Password</label>
                            <input type="Cpassword" class="form-control" id="Cpswd">
                          </div>
                        
                        <div class="m-3">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
