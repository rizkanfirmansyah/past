<?php

namespace App\Http\Controllers;

use App\DataTables\TeamDataTable;

class TeamController extends Controller
{
    public function index(TeamDataTable $teamTable)
    {
        return $teamTable->render('page.rank.index', [
            'titlePage' => 'Team DataTables',
            'titleCrumbs' => 'Team Page',
            'subCrumbs' => 'Master',
            'subCrumbsLinks' => '/master/team#',
            'currentCrumbs' => 'Team',
        ]);
    }
}
