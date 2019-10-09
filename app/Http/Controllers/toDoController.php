<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\toDo as ToDoModel;
use App\Repositories\ToDoInterface;
use App\Repositories\ToDoRepository;
use App\Repositories\ToDoLogRepository;


class todoController extends Controller
{
    private $todoRepo;

    public function __construct(TodoRepository $repo) {
        $this->todoRepo = $repo;
    }

    // list all ToDo
    public function index() {
        $todo = $this->todoRepo->all();
        return view('todo.todo', ['todos'=>$todo]);
    }

    public function index_finished() {
        $todo = $this->todoRepo->finished();
        return view('todo.todo', ['todos'=>$todo]);
    }

    //menampilkan page new form
    public function new_form() {
        return view('todo.new');
    }

    public function save(Request $request) {
        $description = $request->input('desc');
        $status = $request->input('status');
        $this->todoRepo->create($description, $status);
        return redirect(route('todoIndex'));
    }

    public function edit_form($id) {
        $todo = ToDoModel::find($id);
        return view('todo.edit', ['todos'=>$todo]);
    }

    public function update(Request $request) {
        $todo = new ToDoModel;
        $todo->description = $request->desc;
        $todo->status = $request->status;
        $this->todoRepo->update($request->id, $request->desc, $request->status);
        return redirect('/todo');
    }

    public function delete_form($id) {
        $this->todoRepo->delete($id);
        return redirect('/todo');
    }

}
