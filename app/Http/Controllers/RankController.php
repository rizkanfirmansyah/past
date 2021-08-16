<?php

namespace App\Http\Controllers;

use App\DataTables\RankDataTable;

class RankController extends Controller
{
    public function index(RankDataTable $dataTable)
    {
        return $dataTable->render('page.rank.index', [
            'titlePage' => 'Rank DataTables',
            'titleCrumbs' => 'Rank Page',
            'subCrumbs' => 'Master',
            'subCrumbsLinks' => '/master/rank#',
            'currentCrumbs' => 'Rank',
        ]);
    }
}
