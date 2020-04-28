@extends('Layouts.app')
@section('content')
<div class="container">
    <h1>CRUD app</h1>
    @if(isset($contact))
                 
        <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i>
                <strong>Edit User</strong>
                <a href="contact" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a>
            </div>

            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    <form method="post" action="{{url('update/'.$contact->id)}}">
                        @csrf
                        <div class="form-group">
                            <label>User Name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required="" value="{{$contact->name}}">
                        </div>

                        <div class="form-group">
                            <label>User Email <span class="text-danger">*</span></label>
                            <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter user email" required=""value="{{$contact->email}}">
                        </div>

                        <div class="form-group">
                            <label>User Phone <span class="text-danger">*</span></label>
                            <input type="tel"  class="tel form-control" name="userphone" id="userphone" x-autocompletetype="tel" placeholder="Enter user phone" required=""value="{{$contact->phone}}">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i>
                <strong>Add User</strong>
                <a href="contact" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a>
            </div>

            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    <form method="post" action="store">
                        @csrf
                        <div class="form-group">
                            <label>User Name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required="">
                        </div>

                        <div class="form-group">
                            <label>User Email <span class="text-danger">*</span></label>
                            <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter user email" required="">
                        </div>

                        <div class="form-group">
                            <label>User Phone <span class="text-danger">*</span></label>
                            <input type="tel"  class="tel form-control" name="userphone" id="userphone" x-autocompletetype="tel" placeholder="Enter user phone" required="">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="submit" id="submit"  class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     @endif
        
    </div>
@endsection