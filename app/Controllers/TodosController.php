<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodosModel;

class TodosController extends BaseController {
    protected $todos;

    public function __construct(){
        $this->todos = new TodosModel();
    }

    public function createTodo() {
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'todo' => 'required',
                'deadline' => 'required',
            ];

            if ($this->validate($validationRules)) {
                $data = [
                    'todo' => $this->request->getPost('todo'),
                    'deadline' => $this->request->getPost('deadline'),
                    'status' => 'Belum Selesai',
                ];

                $this->todos->insert($data);
                return redirect()->to('/');
            } else {
                return view('todo_index');
            }
        }

        return view('todo_index');
    }

    public function doneTodo($id) {
        $todo = $this->todos->find($id);
    
        $newStatus = ($todo->status == 1) ? 0 : 1;
    
        $this->todos->update($id, ['status' => $newStatus]);
        return redirect()->to('/');
    }
    
    

    public function getTodos() {
        $data['todos'] = $this->todos->findAll();
        return view('todo_index', $data);
    }

    // function update
    public function editTodo($id) {
        $data['todo'] = $this->todos->find($id);
        return view('edit_todo', $data);
    }
    
    public function updateTodo($id) {
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'todo' => 'required',
                'deadline' => 'required',
            ];
    
            if ($this->validate($validationRules)) {
                $data = [
                    'todo' => $this->request->getPost('todo'),
                    'deadline' => $this->request->getPost('deadline'),
                ];
    
                $this->todos->update($id, $data);
                return redirect()->to('/');
            } else {
                return view('todo_index');
            }
        }
    }
    
    public function deleteTodo($id) {
        $this->todos->delete($id);
        return redirect()->to('/');
    }

    public function restoreTodo($id) {
        $this->todos->update($id, ['status' => 0]); // Set status to "Belum Selesai"
        return redirect()->to('/');
    }
    
}