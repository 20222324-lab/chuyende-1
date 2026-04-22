@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">Danh sách sản phẩm</h1>
            <p class="text-muted mb-0">Quản lý kho hàng, tìm kiếm nhanh và kiểm tra tồn kho.</p>
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-success">Thêm sản phẩm</a>
    </div>

    <div class="mb-4">
        <h5 class="mb-3">Tìm kiếm sản phẩm</h5>
        <form method="GET" action="{{ route('products.index') }}" class="row g-3 align-items-end">
            <div class="col-md-9">
                <label class="form-label">Tên sản phẩm</label>
                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control" placeholder="Tìm theo tên sản phẩm">
            </div>
            <div class="col-md-3 d-grid">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </form>
    </div>

    <div class="section-card">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ number_format($product->price, 0, ',', '.') }} ₫</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                @if($product->quantity === 0)
                                    <span class="badge bg-danger">Hết hàng</span>
                                @elseif($product->quantity < 5)
                                    <span class="badge bg-warning text-dark">Sắp hết hàng (&lt;5)</span>
                                @else
                                    <span class="badge bg-success">Còn hàng</span>
                                @endif
                            </td>
                            <td class="text-nowrap">
                                <div class="d-flex flex-column gap-2">
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary action-btn">Sửa</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger action-btn">Xóa</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Không có sản phẩm nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        {{ $products->links() }}
    </div>
@endsection
