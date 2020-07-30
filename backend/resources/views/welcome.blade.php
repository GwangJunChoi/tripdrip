@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <span class="badge badge-pill badge-primary">todo</span>
        <span class="badge badge-pill badge-secondary">ing</span>
        <span class="badge badge-pill badge-success">end</span>
        <span class="badge badge-pill badge-danger">error</span>
        <span class="badge badge-pill badge-warning">hurry</span>
        <span class="badge badge-pill badge-info">Info</span>
        <span class="badge badge-pill badge-light">Light</span>
        <span class="badge badge-pill badge-dark">Dark</span>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">project feature plan</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <span class="badge badge-pill badge-primary">todo</span>
                </h6>
                <p class="card-text">
                    1.사용자 여행 계획 커뮤니티
                </p>
                <p class="card-text">
                    2.각 여행사별 상품 크롤링 상품 추천
                </p>
                <p class="card-text">
                    3.구글맵 api를 활용한 개인 여행 스케쥴 관리 기능 추가
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">
                    <span class="badge badge-pill badge-dark">laravel</span>
                    <span class="badge badge-pill badge-dark">sanctum</span>
                    <span class="badge badge-pill badge-dark">swagger</span>
                    <span class="badge badge-pill badge-dark">vuejs</span>
                </p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">frontend</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    frontend
                </h6>
                <a href="https://tripndrip.com" class="card-link">tripndrip.com</a>
            </div>
        </div>
    </div>
</div>
@endsection