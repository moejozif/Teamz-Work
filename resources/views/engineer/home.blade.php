@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4> What's on your plate? </h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <div class="col-md-4">
                            <div class="card">
                                    <div class="card-header">
                                        <img src="{{ asset('img/mo3.png') }}" width="40" height="30" alt=""> 
                                    Due On: <span class="text-success">
                                        <strong> 06-November </strong></span></div>

                                    <div class="card-body">
                                        Description :  <strong> Tata Tcs Tender Prep. </strong> <br>
                                        Assigend By :  <strong> Owner Ali. </strong><br>
                                        <small>10-11-2019</small> 
                                        <div  class="row justify-content-center"><br>
                                                <a class="btn btn-outline-success btn-sm" href="#" role="button">
                                                        <img src="{{ asset('img/comp.jpg') }}" width="30" height="20" alt="">
                                                        <strong> DONE</strong>
                                                </a>
                                        </div>

                                    </div>
                            </div>
                    </div>

                    
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
