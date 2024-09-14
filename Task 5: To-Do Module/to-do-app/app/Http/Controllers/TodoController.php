<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index() {
        return ToDo::all();
    }

    public function store(Request $request) {
        $todo = ToDo::create($request->validate([
            'title' => 'required|string',
            'completed' => 'boolean'
        ]));
        return response()->json($todo);
    }

    public function update(Request $request, $id) {
        $todo = ToDo::findOrFail($id);
        $todo->update($request->validate([
            'completed' => 'boolean'
        ]));
        return response()->json($todo);
    }

    public function destroy($id) {
        ToDo::findOrFail($id)->delete();
        return response()->json(['message' => 'To-do deleted successfully']);
    }
}

