@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">dev ops</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                    <span class="badge badge-pill badge-secondary">ing</span>
                </h6>
                <p class="card-text">
                    <a href="https://cloud.google.com/">gcp</a>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">php-swagger</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                    <span class="badge badge-pill badge-secondary">ing</span>
                </h6>
                <p class="card-text">
                    <a href="https://swagger.io/" class="card-link">swagger</a>
                    <a href="https://github.com/DarkaOnLine/L5-Swagger" class="card-link">darkaonline/l5-swagger rest api document ui</a>
                    <a href="https://github.com/zircote/swagger-php/tree/master/Examples/petstore-3.0r" class="card-link">swagger example</a>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Auth</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                </h6>
                <p class="card-text">
                    <a href="https://laravel.kr/docs/8.x/sanctum">laravel Sanctum</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
