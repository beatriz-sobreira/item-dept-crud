<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return response()->json(Item::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        $item = Item::create([
            'name' => $request->name,
            'department_id' => $request->department_id,
        ]);

        return response()->json($item, 201);
    }

    public function show(Item $item)
    {
        return response()->json($item, 200);
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        $item->update([
            'name' => $request->name,
            'department_id' => $request->department_id,
        ]);

        return response()->json($item, 200);
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return response()->json(['message' => 'Item excluído com sucesso.'], 200);
    }
}
