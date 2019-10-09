<?php

namespace App\Repositories;

use App\toDo;

class toDoRepository implements ToDoInterface {
    public function create($desc, $status) {
        $newToDo = new ToDo;
        $newToDo->description = $desc;
        $newToDo->status = $status;
        $newToDo->save();
    }

    public function all() {
        return ToDo::all();
    }

    public function finished() {
        return ToDo::all()->where('status',1);
    }

    public function get($id) {
        return ToDo::findOrFail($id);
    }

    public function update($id, $desc, $status) {
        $newToDo = ToDo::find($id);
        $newToDo->description = $desc;
        $newToDo->status = $status;
        $newToDo->save();
    }

    public function delete($id) {
        $newToDo = ToDo::findOrFail($id);
        $newToDo->delete();
    }
}

?>