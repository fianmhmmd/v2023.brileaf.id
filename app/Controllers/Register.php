<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        // Load the register view
        return view('register');
    }

    public function register()
    {
        // Here, you can write the logic to handle the registration process.
        // You can use the $this->request object to access the form data.

        // Example registration logic:
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Perform validation, data processing, and saving to database

        // Redirect to a success page or show an appropriate message
        return redirect()->to('/home');
    }
}
