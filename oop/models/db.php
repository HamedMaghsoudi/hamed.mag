<?php

class Db
{
    public $table;

    public function all_get()
    {
    }

    public function find($id, $columns = null)
    {
        $columns = !is_null($columns) ? implode(',', $columns) : '*';
        return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public function delete($id)
    {
        return "DELETE FROM {this->table} WHERE id={$id}";
    }

    private function sort()
    {

    }

}

