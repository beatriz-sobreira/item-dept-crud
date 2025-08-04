<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return response()->json(Department::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $department = Department::create([
            'name' => $request->name,
        ]);

        return response()->json($department, 201);
    }

    public function show(Department $department)
    {
        return response()->json($department, 200);
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $department->update([
            'name' => $request->name,
        ]);

        return response()->json($department, 200);
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return response()->json(['message' => 'Departamento excluído com sucesso.'], 200);
    }
}
