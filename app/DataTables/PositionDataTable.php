<?php

namespace App\DataTables;

use App\Models\Position;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PositionDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query results from query() method
     *
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->blacklist(['id'])
            ->whitelist(['namePosition'])
            ->addColumn('action', '<button class="btn btn-info btn-sm m-2"><i class="fas fa-edit"></i></button><button class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i></button>');
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Position $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('position-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('namePosition'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Position_'.date('YmdHis');
    }
}
