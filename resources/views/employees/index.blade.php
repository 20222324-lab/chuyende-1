@extends('layouts.master')

@section('title', 'Danh sách nhân viên')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Danh sách nhân viên</h2>
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Thêm nhân viên</a>
    </div>

    @forelse($employees as $emp)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $emp->name }}</h5>
                <p class="card-text">Email: {{ $emp->email }}</p>
                <p class="card-text">Chức vụ: {{ $emp->position }}</p>
                <p class="card-text">Phòng ban: {{ $emp->department?->name ?? 'Chưa chọn' }}</p>
            </div>
        </div>
    @empty
        <p>Không có dữ liệu</p>
    @endforelse

    <div class="mt-4">
        {{ $employees->links() }}
    </div>
@endsection
