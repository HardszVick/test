<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Task.php';

class TaskController extends Controller
{
    public function index()
    {
        $taskModel = new Task();
        $tasks = $taskModel->all();

        $this->view('task/index', [
            'tasks' => $tasks
        ]);
    }
}
