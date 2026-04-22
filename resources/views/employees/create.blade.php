@extends('layouts.master')

@section('title', 'Tạo nhân viên mới')

@section('content')
    <h2>Thêm nhân viên</h2>

    <form method="POST" action="{{ route('employees.store') }}" class="mt-4">
        @csrf

        <div class="mb-3">
            <label class="form-label">Họ tên</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Chức vụ</label>
            <input type="text" name="position" value="{{ old('position') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phòng ban</label>
            <select name="department_id" class="form-select">
                <option value="">Chọn phòng ban (tuỳ chọn)</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
@endsection
