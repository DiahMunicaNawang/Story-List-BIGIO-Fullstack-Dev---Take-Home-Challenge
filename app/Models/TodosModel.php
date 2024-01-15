<?php

namespace App\Models;
use CodeIgniter\Model;

class TodosModel extends Model {
    protected $table = 'todos';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'todo', 'deadline', 'status'];
}