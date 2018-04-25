<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();                // retrives the all current registers E.g [{id:1, name: 'foo', checked:0}]
    }

    public function store(Request $request)
    {
        $inputs = $request->all();         // fetches input requests E.g: ['name' => 'foo', 'checked' => '1']
        $todo = Todo::create($inputs);     // stores in the database
        return $todo;                      // retrives the updated register
    }

    public function show(Todo $todo)
    {
        return $todo;                      //shows current todo
    }

    public function update(Request $request, Todo $todo)
    {
        $inputs = $request->all();          // fetches input requests E.g: ['name' => 'foo', 'checked' => '1']
        $todo->fill($inputs)->save();       // stores in the database
        return $todo;                       // retrives the updated register
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return $todo;
    }
}
