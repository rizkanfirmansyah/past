<?php

namespace App\Http\Controllers;

use App\DataTables\TaskDataTable;

class TaskController extends Controller
{
    public function index(TaskDataTable $taskTable)
    {
        return $taskTable->render('page.rank.index', [
            'titlePage' => 'Task DataTables',
            'titleCrumbs' => 'Task Page',
            'subCrumbs' => 'Master',
            'subCrumbsLinks' => '/master/task#',
            'currentCrumbs' => 'Task',
        ]);
    }
}
