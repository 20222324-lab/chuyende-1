@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="h3">Cập nhật tồn kho</h1>
        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">Trở về danh sách</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('products.update', $product) }}">
                @csrf
                @method('PUT')

                @include('products._form', ['product' => $product, 'buttonText' => 'Cập nhật sản phẩm'])
            </form>
        </div>
    </div>
@endsection
