<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TestController extends Controller
{
   public function index()
    {
        return Task::all();
    }
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|min:3'
    ]);

    $task = Task::create([
        'title' => $request->title
    ]);

    return $task;
    //dd($request->all());
}
public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|min:3'
    ]);

    $task = Task::findOrFail($id);

    $task->update([
        'title' => $request->title,
        'completed' => $request->completed ?? false
    ]);

    return $task;
}
public function destroy($id)
{
    $task = Task::findOrFail($id);
    $task->delete();

    return ['mensaje' => 'eliminado'];
}
}
