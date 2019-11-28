@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4>Manage Users</h4>
                        </div>
                        <div>
                            <a href="/mngusers/create" class="btn btn-info colorgreen">
                                {{-- <img src="{{ asset('images/addu.png') }}" width="30"> --}}
                                {{-- {{ __('messages.Add_User') }} --}}
                                Add User
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      

                    <table class="table table-striped">
                            <thead class="colorgreen text-white">
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created_at</th>
                        <th>IsActive?</th>
                        
                        <th>{{ __('messages.Action') }}</th></tr>
                        </thead>
                        @foreach ($users as $user)
                            <tr>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                @if ($user->isActive)
                                
                                <a class="btn" href="/mngadmin/{{$user->id}}">
                                    <span class="text-success"><b>Active</b></span></a>
                                @else
                                <a class="" href="/mngadmin/{{$user->id}}">
                                <span class="text-danger"><b>Disabled</b></span></a>
                                @endif
                                {{-- {{$user->isActive==1? 
                                'Active':'Disabled'}} --}}
                            </td>
                            <td>
                              @if ($user->id==auth()->user()->id)
                              {{-- <form action="/mnguser/{{$dream->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <a class="btn btn-info btn-sm" href="/mnguser/{{$dream->id}}" 
                                role="button">Edit</a>
                            
                                 <input type="submit" class="btn btn-danger btn-sm"  value="Delete"> 
                            </form> --}}
                              @else
                              <form action="/mnguser/{{$user->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                @if ($user->isActive)
                                <a class="btn btn-outline-info btn-sm" href="/mngadmin/{{$user->id}}" 
                                    role="button">Disable</a>
                                @else
                                <a class="btn btn-outline-success btn-sm" href="/mngadmin/{{$user->id}}" 
                                    role="button">Enable</a>
                                @endif
                            
                            
                                <input type="submit" class="btn btn-outline-danger btn-sm"  value="Delete">
                            </form>
                            
                              @endif
                            
                                {{-- <a class="btn btn-outline-info btn-sm {{$dream->dream_state? 'disabled':''}}" href="/admin/{{$dream->id}}/view" role="button">Assign</a> --}}
                                {{-- <a class="btn btn-outline-danger btn-sm {{$dream->dream_state? 'disabled':''}}" href="#" role="button">Reject</a> --}}
                            </td></tr>
                        @endforeach
                    </table> 
                    {{-- {{$inters->links()}}  --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
