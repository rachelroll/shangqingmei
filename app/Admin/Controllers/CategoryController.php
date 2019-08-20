<?php

namespace App\Admin\Controllers;

use App\ProjectCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\ProjectCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectCategory);

        $grid->column('id', __('Id'));
        $grid->column('title', __('名称'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('修改时间'));

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
        $show = new Show(ProjectCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('名称'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectCategory);

        $form->text('title', __('Title'));
        $form->select('project_id', '服务案例大类')->options([
            1 => 'CIS 案例导入',
            2 => '品牌设计案例',
            3 => '环境规划案例'
        ]);

        return $form;
    }
}
