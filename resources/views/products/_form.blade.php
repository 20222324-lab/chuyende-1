<div class="form-group-box">
    <h5 class="mb-3">Thông tin sản phẩm</h5>
    <div class="mb-4">
        <label for="name" class="form-label">Tên sản phẩm</label>
        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', optional($product)->name) }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <label for="price" class="form-label">Giá</label>
            <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', optional($product)->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="quantity" class="form-label">Số lượng</label>
            <input id="quantity" name="quantity" type="number" min="0" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', optional($product)->quantity) }}">
            @error('quantity')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="category" class="form-label">Danh mục</label>
            <input id="category" name="category" type="text" class="form-control @error('category') is-invalid @enderror" value="{{ old('category', optional($product)->category) }}">
            @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
