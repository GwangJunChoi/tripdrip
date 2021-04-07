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
                    <a href="https://vuejs.org" class="card-link">vuejs</a>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">quasar framework</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                    <span class="badge badge-pill badge-secondary">ing</span>
                </h6>
                <p class="card-text">
                    <a href="https://quasar.dev" class="card-link">quasar</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
