<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Task;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new Task();
        $data['tasks'] = $taskModel->findAll();

        return view('tasks/index', $data);
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function store()
    {
        $taskModel = new Task();

        $taskModel->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/tasks');
    }
}
