<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\RESTful\ResourceController;

class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modelData = new StudentModel();
        $data['students'] = $modelData->findAll();

        $data['title'] = 'Student List';
        return view('students/student_list', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modelData = new StudentModel();
        $data['student'] = $modelData->find($id);
        $data['title'] = 'Single User';
        return view('students/single_student', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['title'] = 'Student Entry';
        return view('students/add_student.php', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new StudentModel();
        $data = $this->request->getPost();

        if ($model->save($data)) {
            // return $this->index();
            return redirect()->to('student');
            // return redirect()->back();
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $modelData = new StudentModel();
        $data['student'] = $modelData->find($id);
        $data['title'] = 'Student Edit';
        return view('students/student_edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new StudentModel();
        $data = $this->request->getPost();


        if ($model->update($id, $data)) {
            // return $this->index();
            return redirect()->to('student');
            // return redirect()->back();
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('./student');
    }
}
