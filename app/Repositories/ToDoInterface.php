<?php

namespace App\Repositories;

use App\toDo;

interface toDoInterface {
    public function create($name, $todo);
    public function all();
    public function get($id);
    public function update($id, $desc, $status);
    public function delete($id);
}

?>