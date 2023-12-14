<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoListController extends Controller
{
    // halaman dashboard todo
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index', compact('todos'));
    }
    // menampilkan data dari database ke halaman create
    public function create(Request $r)
    {
        $r->validate([
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required',
        ]);
        // dd($r);
        // simpan data ke database
        // $user = Todo::where('user_id', Auth::user()->id)->first();
        $todo = new Todo();
        $todo->name = $r->name;
        $todo->description = $r->description;
        $todo->deadline = $r->deadline;
        $todo->status = 'Belum Selesai';
        // $todo->user_id = $user->id;
        $todo->save();

        return redirect()->route('todo');
    }
}
