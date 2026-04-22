@extends('layouts.master')

@section('title', 'Chỉnh sửa nhân viên')

@section('content')
    <h2>Chỉnh sửa nhân viên</h2>

    <form method="POST" action="{{ route('employees.update', $employee) }}" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Họ tên</label>
            <input type="text" name="name" value="{{ old('name', $employee->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email', $employee->email) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Chức vụ</label>
            <input type="text" name="position" value="{{ old('position', $employee->position) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phòng ban</label>
            <select name="department_id" class="form-select">
                <option value="">Chọn phòng ban (tuỳ chọn)</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ old('department_id', $employee->department_id) == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
