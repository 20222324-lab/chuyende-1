@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="h3">Thêm sản phẩm mới</h1>
        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">Trở về danh sách</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('products.store') }}">
                @csrf

                @include('products._form', ['product' => null, 'buttonText' => 'Lưu sản phẩm'])
            </form>
        </div>
    </div>
@endsection
