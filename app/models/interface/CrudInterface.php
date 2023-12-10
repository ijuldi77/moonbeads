<?php
interface CrudInterface
{
    public function insert($data);
    public function findById($id);
    public function findAll();
    public function edit($data);
    public function destroy($id);
}

?>