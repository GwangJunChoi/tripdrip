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
                    gcp dev ops
                </p>
                <a href="https://github.com/DarkaOnLine/L5-Swagger" class="card-link">swagger github</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">php-swagger</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">Todo</span>
                    <span class="badge badge-pill badge-secondary">ing</span>
                </h6>
                <p class="card-text">darkaonline/l5-swagger rest api document ui</p>
                <a href="https://swagger.io/" class="card-link">swagger</a>
                <a href="https://github.com/DarkaOnLine/L5-Swagger" class="card-link">swagger github</a>
                <a href="/api/document"" class="card-link">trip api document</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Auth</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">Todo</span>
                    <span class="badge badge-pill badge-warning">hurry</span>
                </h6>
                <p class="card-text">laravel Sanctum을 사용한 SPA 인증</p>
            </div>
        </div>        
    </div>
</div>
@endsection