<?php

namespace App\Http\Controllers;

use App\DataTables\MemberDataTable;

class MemberController extends Controller
{
    public function index(MemberDataTable $dataTable)
    {
        return $dataTable->render('page.aio.content', [
            'titlePage' => 'Member DataTables',
            'titleCrumbs' => 'Member Page',
            'subCrumbs' => 'Master',
            'subCrumbsLinks' => '/master/member#',
            'currentCrumbs' => 'Member',
        ]);
    }
}
