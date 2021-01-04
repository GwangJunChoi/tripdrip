@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">feature plan</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                </h6>
                <p class="card-text">
                    1. 사용자 여행 계획 커뮤니티
                </p>
                <p class="card-text">
                    2. drip 게시판 생성
                </p>
                <p class="card-text"></p>
                <span class="badge badge-pill badge-primary">todo</span>
                <span class="badge badge-pill badge-secondary">ing</span>
                <span class="badge badge-pill badge-success">end</span>
                <span class="badge badge-pill badge-danger">error</span>
                <span class="badge badge-pill badge-warning">hurry</span>
                <span class="badge badge-pill badge-info">Info</span>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/api/documentation" class="btn btn-primary">api document information</a></li>
                <li class="list-group-item"><a href="/back" class="btn btn-primary">backend information</a></li>
                <li class="list-group-item"><a href="/front" class="btn btn-primary">front information</a></li>
                <li class="list-group-item"><a href="https://github.com/GwangJunChoi/tripdrip" target="_blank" class="btn btn-primary">github code</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
