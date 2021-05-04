@extends('layouts.app')

@section('content')
<style>
    .container img {
        max-width:200px;
        max-height:150px;
        width: auto;
        height: auto;
    }
    .card-titles {
        width: 13rem; 
        float: left; 
        margin-right: 1%
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card col-md-12">
                <div class="card-header">

                    <div class="card card-titles">
                        <img class="card-img-top" src="img/api.jpg" alt="dashboard">
                        <div class="card-body">
                            <h5 class="card-title">Api</h5>
                            <p class="card-text">Repositorio do pauloavital.</p>
                            <a href="/github" target="_blank" class="btn btn-primary">acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection