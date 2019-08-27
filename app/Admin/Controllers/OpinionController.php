<?php

namespace App\Admin\Controllers;

use App\Opinion;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OpinionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Opinion';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Opinion);

        $grid->column('id', __('Id'));
        $grid->column('title', __('标题'));
        $grid->column('created_at', __('创建日期'));
        $grid->column('updated_at', __('修改日期'));

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
        $show = new Show(Opinion::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('标题'));
        $show->field('created_at', __('创建日期'));
        $show->field('updated_at', __('修改日期'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Opinion);

        $form->text('title', __('标题'));
        $form->file('file', __('上传 PDF 文件'));
        $form->select('type', __('分类'))->options([
            'CI / VI',
            '品牌',
            '营销与传播'
        ]);

        return $form;
    }
}
