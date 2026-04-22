<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();

        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'required|string|max:255',
            'department_id' => 'nullable|exists:departments,id',
        ]);

        Employee::create($data);

        return redirect()->route('employees.index')
            ->with('success', 'Nhân viên đã được thêm thành công.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::orderBy('name')->get();

        return view('employees.edit', compact('employee', 'departments'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'required|string|max:255',
            'department_id' => 'nullable|exists:departments,id',
        ]);

        $employee->update($data);

        return redirect()->route('employees.index')
            ->with('success', 'Nhân viên đã được cập nhật.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Nhân viên đã được xóa.');
    }
}
