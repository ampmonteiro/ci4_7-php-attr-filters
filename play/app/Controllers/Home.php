<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function create()
    {
        $data = $this->request->getPost();

        if ($data['module']) {

            $m = session('module') ?? [];

            $m[] = $data['module'];


            session()->set('module', $m);
        }

        if ($data['auth'] ?? false) {
            session()->set('auth', true);
        }

        return redirect()->back();
    }


    public function delete()
    {
        session()->destroy();

        return redirect()->back();
    }
}
