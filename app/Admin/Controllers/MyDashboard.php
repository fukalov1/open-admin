<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Row;

class MyDashboard extends Controller
{

    /**
     * @throws \Throwable
     */
    public static  function index()
    {
//        $content = new Content();
//        return $content
//            ->title('Dashboard')
//            ->description('介绍')
//            ->view('admin.chart', ['title' => '标题..']);
        $chart =  view('admin.chart', ['title' => 'Динамика посещений'])->render();
        $chart1 =  view('admin.chart1', ['title' => 'Мероприятия']);
        $chart2 =  view('admin.chart2', ['title' => 'Подключение ресторанов']);
        $chart3 =  view('admin.chart3', ['title' => 'Типы мероприятий']);
        $row = new Row();
        $row->column(6, function (Column $column) use ($chart) {
            $column->append($chart);
        });
        $row->column(6, function (Column $column) use ($chart1) {
            $column->append($chart1);
        });
        $row->column(6, function (Column $column) use ($chart2) {
            $column->append($chart2);
        });
        $row->column(6, function (Column $column) use ($chart3) {
            $column->append($chart3);
        });
        return $row;

    }

}
