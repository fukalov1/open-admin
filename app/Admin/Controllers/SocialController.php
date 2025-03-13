<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Social;

class SocialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Социальные сети';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Social());

        $grid->filter(function ($filter) {
            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', 'Наименование');
        });

//        $grid->column('id', __('Id'));
        $grid->column('name', __('Наименование'))->sortable();
        $grid->column('description', __('Описание'));
        $grid->column('created_at', __('Создана'));
//        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Social::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Наименование'));
        $show->field('description', __('Описание'));
        $show->field('created_at', __('Создано'));
        $show->field('updated_at', __('Обновлено'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Social());

        $form->text('name', __('Наименование'));
        $form->textarea('description', __('Описание'));

        return $form;
    }
}
