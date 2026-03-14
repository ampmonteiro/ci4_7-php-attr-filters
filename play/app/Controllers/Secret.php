<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Filters\AuthDummyFilter;
use App\Filters\ModuleDummyFilter;
use CodeIgniter\Router\Attributes\Filter;

class Secret extends BaseController
{
    // All of two define as follow individual
    // #[Filter(by: 'module')]
    // #[Filter(by: 'auth')]


    #[Filter(by: AuthDummyFilter::class)]
    #[Filter(by: ModuleDummyFilter::class)]

    // no working and no documented
    // #[Filter(by: [AuthDummyFilter::class, ModuleDummyFilter::class])]

    // no working and documented
    // #[Filter(by: ['auth', 'module'])]
    public function index()
    {
        return view('secret-area');
    }
}
