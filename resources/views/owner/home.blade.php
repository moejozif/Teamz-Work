@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                    <div class="d-flex justify-content-between">
                            <div>
                                    <h3> Projects </h3>
                            </div>
                            <div>
                                <a href="/mngusers/create" class="btn btn-outline-success ">
                                    <img src="{{ asset('img/newproject.ico') }}" width="30">
                                   <strong> New Project</strong>
                                  
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

                        <div class="row">
                    <div class="col-md-4 divbg">
                        <div class="row justify-content-center">
                            
                            <div class="container text-center divbgr"><br>
                             <strong> Data Center Installation </strong>
                            </div>
                        </div><br>
                        <div class="row justify-content-center"><br>
                            <div class="col-md-offset-1 col-md-4 aramco"></div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-2 engineericon rounded-circle custom-tooltip"  data-toggle="tooltip" data-placement="bottom" id="eng" title="Mohamed Osman"></div>
                            <div class="col-md-2 engineericon rounded-circle" title="Mohamed Jozif"></div>
                            <div class="col-md-2 engineericon rounded-circle" title="Sheeta"></div>
                            <div class="col-md-2 engineericon rounded-circle" title="Mohamed Saeed"></div>
                            <div class="col-md-2 engineericon rounded-circle"></div>
                            <div class="col-md-2 engineericon rounded-circle"></div>
                            



                        </div><br>
                    </div>
                    <div class="col-md-4 divbg">
                            <div class="row justify-content-center">
                                
                                <div class="container text-center divbgr"><br>
                                 <strong> Technicals Requirements </strong> <br>
                                </div>
                            </div><br>
                            <div class="row justify-content-center"><br>
                                <div class="col-md-offset-1 col-md-4 raji"></div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-2 engineericon rounded-circle"></div>
                                <div class="col-md-2 engineericon rounded-circle"></div>                                
                                <div class="col-md-2 engineericon rounded-circle"></div>
                            </div><br>
                        </div>
                        <div class="col-md-4 divbg">
                                <div class="row justify-content-center">
                                    
                                    <div class="container text-center divbgr"><br>
                                     <strong> Inventory Resupply Requests </strong>
                                    </div>
                                </div><br>
                                <div class="row justify-content-center"><br>
                                    <div class="col-md-offset-1 col-md-4 ncb"></div>
                                </div>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-2 engineericon rounded-circle"></div>
                                    <div class="col-md-2 engineericon rounded-circle"></div>
                                    <div class="col-md-2 engineericon rounded-circle"></div>                                   
                                    <div class="col-md-2 engineericon rounded-circle"></div>
                                </div><br>
                            </div>
                  
                        
                        </div>


                </div>
            </div>
        </div>
    </div><br>
    
</div>
@endsection
