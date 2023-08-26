<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
    private $Student;

    public function __construct()
    {
        $this->Student  = new StudentModel();
    }

    public function index(): string
    {

        return view('welcome_message');
    }

    public function search()
    {
        $name = $this->request->getPost('name');

        $students = $this->Student->like('nama', $name)->findAll();

        $data = [
            'students' => $students
        ];

        return view('students', $data);
    }
}
