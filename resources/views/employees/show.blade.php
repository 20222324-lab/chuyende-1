@extends('layouts.master')

@section('title', 'Thông tin nhân viên')

@section('content')
    <h2>Thông tin nhân viên</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $employee->name }}</h5>
            <p>Email: {{ $employee->email }}</p>
            <p>Chức vụ: {{ $employee->position }}</p>
            <p>Phòng ban: {{ $employee->department?->name ?? 'Chưa chọn' }}</p>
        </div>
    </div>
@endsection
