@extends('layouts.app.default')
@section('content')
<div class="container">
    <div class="row text-center padding-top-40 padding-bottom-40"> 
        <div class="col-12">
            <img src="/images/default.png" class="prof_img img-responsive"/>
        </div>    
        <div class="col-12 font-weight-thin">
            Welcome <span class="text-info">{{Auth::user()->name}}</span>
        </div>
    </div>
    <div class="row"> 
        <div class="col border border-warning margin-5 padding-0">
            <div class="card">
                <div class="card-header text-center bg-secondary text-white font-weight-thin">Profile</div>
                <div class="card-body">
                	<p>Name : {{Auth::user()->name}}</p>
                	<p>Email : {{Auth::user()->email}}</p>
                </div> 
            </div>
        </div>
        <div class="col border border-warning margin-5 padding-0">
            <div class="card">
                <div class="card-header text-center bg-secondary text-white font-weight-thin">List</div>
                <div class="card-body"></div> 
            </div>
        </div>
        <div class="col border border-warning margin-5 padding-0">
            <div class="card">
                <div class="card-header text-center bg-secondary text-white font-weight-thin">Campaigns</div>
                <div class="card-body"></div> 
            </div>
        </div>
    
    </div>
</div>
@endsection
