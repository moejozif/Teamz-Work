@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4>Tasks</h4>
                        </div>
                        <div>
                            <a href="/mngusers/create" class="btn btn-info colorgreen">
                                {{-- <img src="{{ asset('images/addu.png') }}" width="30"> --}}
                                {{-- {{ __('messages.Add_User') }} --}}
                                Add Task
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
                        <th></th>
                        <th>Desc</th>
                        <th>AssignedTO</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        {{-- <th>IsActive?</th> --}}
                        
                        <th>{{ __('messages.Action') }}</th></tr>
                        </thead>
                        <tr>
                        <th>1</th>
                        <td><img src="{{ asset('img/mo3.png') }}" width="40" height="30" alt=""></td>
                        <td>Aramco's RFP</td>
                        <td>Mohamed Osman</td>
                        <td>11-11-2019</td>
                        <td>Waiting Approval</td> 
                        <td>
                            <a class="btn btn-outline-info btn-sm" href="#" role="button">view</a>
                            <a class="btn btn-outline-success btn-sm" href="#" role="button">Approve</a>
                            <a class="btn btn-info btn-sm" href="#" role="button">Edit</a>

                        </td>
                        </tr>
                        <tr>
                                <th>2</th>
                                <td><img src="{{ asset('img/mo3.png') }}" width="40" height="30" alt=""></td>
                                <td>Functional Requirement</td>
                                <td>Mustafa abdalla</td>
                                <td>12-01-2019</td>
                                <td>Completed</td> 
                                <td>
                                    <a class="btn btn-outline-info btn-sm" href="#" role="button">view</a>
                                    <a  class="btn btn-secondary disabled btn-sm" href="#" role="button">Approve</a>
                                    <a class="btn btn-info btn-sm" href="#" role="button">Edit</a>
        
                                </td>
                                </tr>

                                <tr>
                                        <th>3</th>
                                        <td><img src="{{ asset('img/mo3.png') }}" width="40" height="30" alt=""></td>
                                        <td>NCP RFQ</td>
                                        <td>Mohamed Osman</td>
                                        <td>11-11-2019</td>
                                        <td>Waiting Approval</td> 
                                        <td>
                                            <a class="btn btn-outline-info btn-sm" href="#" role="button">view</a>
                                            <a class="btn btn-outline-success btn-sm" href="#" role="button">Approve</a>
                                            <a class="btn btn-info btn-sm" href="#" role="button">Edit</a>
                
                                        </td>
                                        </tr>
                                        <tr>
                                                <th>4</th>
                                                <td><img src="{{ asset('img/mo3.png') }}" width="40" height="30" alt=""></td>
                                                <td>Alrajhi Meeting</td>
                                                <td>Hassan Ali</td>
                                                <td>11-11-2019</td>
                                                <td>Pending</td> 
                                                <td>
                                                    <a class="btn btn-outline-info btn-sm" href="#" role="button">view</a>
                                                    <a class="btn btn-secondary disabled btn-sm" href="#" role="button">Approve</a>
                                                    <a class="btn btn-info btn-sm" href="#" role="button">Edit</a>
                        
                                                </td>
                                                </tr>
                    </table> 
                    {{-- {{$inters->links()}}  --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
