<?php

namespace App\DataTables;

use App\Models\ItemProgramacao;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ItemProgramacaoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->addColumn('nome', function ($model) {
                return '<a href="/itemProgramacaos/'.$model->id.'/edit">'.$model->nome.'</a>';
            })
            ->addColumn('action', function ($model) {
                return view('item_programacaos.datatables_actions')->with(['itemProgramacao' => $model, 'id' => $model->id]);
            })
            ->rawColumns(['nome', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ItemProgramacao $model)
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
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px', 'title' => 'Ações'])
            ->parameters([
                'dom'     => 'frtip',
                'order'   => [[0, 'desc']],
                'language' => ['url' => '//cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'nome',
            'tipoTexto' => ['searchable' => false, 'orderable' => false, 'title' => 'Tipo'],
            'descricao_listagem',
            'horario',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'item_programacaosdatatable_' . time();
    }
}
