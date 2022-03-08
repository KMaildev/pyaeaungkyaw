<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact/index');
    }

    public function create()
    {
        $ContactModel = new ContactModel();
        if ($this->request->getMethod() == "post") {
            $rules = [
                "name" => "required|min_length[2]|max_length[40]",
                "email" => "required",
                "subject" => "required",
                "message" => "required",
            ];

            if (!$this->validate($rules)) {
                $session = session();
                $session->setFlashdata("error", "Error: Please enter your information below");
                return redirect()->back();
            } else {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'email'  => $this->request->getPost('email'),
                    'phone'  => $this->request->getPost('phone'),
                    'subject'  => $this->request->getPost('subject'),
                    'message'  => $this->request->getPost('message'),
                    'date'  => date("Y/m/d"),
                ];
                $ContactModel->save($data);
                $session = session();
                $session->setFlashdata("success", "Your message successfully sent!");
                return redirect()->back();
            }
        }
        return view('contact/index');
    }
}
