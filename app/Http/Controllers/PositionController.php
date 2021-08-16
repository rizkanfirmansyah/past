<?php

namespace App\Http\Controllers;

use App\DataTables\PositionDataTable;

class PositionController extends Controller
{
    public function index(PositionDataTable $dataTable)
    {
        return $dataTable->render('page.aio.content', [
            'titlePage' => 'Position DataTables',
            'titleCrumbs' => 'Position Page',
            'subCrumbs' => 'Master',
            'subCrumbsLinks' => '/master/position#',
            'currentCrumbs' => 'Position',
        ]);
    }
}
