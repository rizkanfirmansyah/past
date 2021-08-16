<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;

class UserController extends Controller
{
    public function index(UserDataTable $userTable)
    {
        return $userTable->render('page.rank.index', [
            'titlePage' => 'User DataTables',
            'titleCrumbs' => 'User Page',
            'subCrumbs' => 'Master',
            'subCrumbsLinks' => '/master/user#',
            'currentCrumbs' => 'User',
        ]);
    }
}
