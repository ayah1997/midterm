@extends('Layouts.app')
@section('content')
<div class="container">
        <h1>CRUD app</h1>
        <div><i class="fa fa-fw fa-plus-circle"></i>
            <strong>Add User</strong>
            <a href="create" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Add User</a>
        </div>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Sr#</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th class="text-center">Record Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($contacts  as $contact)
                      <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td align="center">{{$contact->created_at}}</td>
                        <td align="center">
                            <a href="{{$contact->id}}/edit" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                            <a  href="delete/{{$contact->id}}" action="delete" class="text-danger" onclick="return confirm('Are you sure to delete this user?'); ><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
