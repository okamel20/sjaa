<?php

namespace App\DataTables;

use App\Notfi;
use Yajra\DataTables\Services\DataTable;

class NotfiDataTable extends DataTable
{
    public function __construct() {
        $this->setting = \App\Setting::find(1);
        include($this->setting['urlHelperOne']);
    }


    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox', 'admin.notfis.btn.checkbox')
            ->addColumn('edit', 'admin.notfis.btn.edit')
            ->addColumn('delete', 'admin.notfis.btn.delete')
            ->addColumn('user_type', 'admin.notfis.btn.user_type')
            ->rawColumns([
                'edit',
                'delete' ,
                'checkbox' ,
                'active',
                'user_type'
            ]);
    }

   
    public function query()
    {
        return Notfi::orderBy('id','desc')->get();
    }

    public static function lang()
    {
        $jsonLang = [
            'sProcessing' => trans('admin.sProcessing'),
            'sLengthMenu' => trans('admin.sLengthMenu'),
            'sZeroRecords' => trans('admin.sZeroRecords'),
            'sEmptyTable' => trans('admin.sEmptyTable'),
            'sInfo' => trans('admin.sInfo'),
            'sInfoEmpty' => trans('admin.sInfoEmpty'),
            'sInfoFiltered' => trans('admin.sInfoFiltered'),
            'sInfoPostFix' => trans('admin.sInfoPostFix'),
            'sSearch' => trans('admin.sSearch'),
            'sUrl' => trans('admin.sUrl'),
            'sInfoThousands' => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),

            'oPaginate' => [
                'sFirst' => trans('admin.sFirst'),
                'sLast' => trans('admin.sLast'),
                'sNext' => trans('admin.sNext'),
                'sPrevious' => trans('admin.sPrevious'),
            ],
            
            'oAria' => [
                 'sSortAscending' => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ]
           

        ];

        return $jsonLang;
        
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
                    //->addAction(['width' => '80px'])
                    // ->parameters($this->getBuilderParameters());
                    ->parameters([
                        'dom'           => 'Blfrtip',
                        'lengthMenu'    => [[10,25,50,100],[10,25,50,trans('admin.allRecord')]], // title and limit
                        'buttons'       => [
                            ['text' => '<i class="fa fa-trash-o" alt="Delete All"></i>','className' => 'btn btn-default pull-left deleteBtnHideen',
                             ],
                        ],
                        
                        
                        
                        'language' => datatableLang(),
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
            [
                'name'  => 'checkbox',
                'data'  => 'checkbox',
                'title' => '<input type="checkbox" class="check-all" onclick="checkAll()"/>',
                'exportable'    => false,
                'printable'     => false,
                'orderable'     => false,
                'searchable'    => false,
            ],
            [
                'name'  => 'id',
                'data'  => 'id',
                'title' => trans('admin.id'),
            ],
            [
                'name'  => 'user_type',
                'data'  => 'user_type',
                'title' => trans('admin.user_type'),
            ],
            [
                'name'  => 'notfi_content_'.lang(),
                'data'  => 'notfi_content_'.lang(),
                'title' => trans('admin.notfi_content_'.lang()),
            ],
            [
                'name'          => 'edit',
                'data'          => 'edit',
                'title'         => trans('admin.edit'),
                'exportable'    => false,
                'printable'     => false,
                'orderable'     => false,
                'searchable'    => false,
            ],
            [
                'name'          => 'delete',
                'data'          => 'delete',
                'title'         => trans('admin.delete'),
                'exportable'    => false,
                'printable'     => false,
                'orderable'     => false,
                'searchable'    => false,


            ],

            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Notfi_' . date('YmdHis');
    }
}
