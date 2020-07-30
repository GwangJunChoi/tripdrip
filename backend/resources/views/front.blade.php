@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">vuejs</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                    <span class="badge badge-pill badge-secondary">ing</span>
                </h6>
                <p class="card-text">
                    vuejs 기반 frontend 
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ui framework</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                    <span class="badge badge-pill badge-secondary">ing</span>
                </h6>
                <p class="card-text">
                    bootstrap-vue
                </p>
                <a href="https://bootstrap-vue.org/docs" class="card-link">bootstrap-vue</a>
            </div>
        </div>
    </div>
</div>
@endsection