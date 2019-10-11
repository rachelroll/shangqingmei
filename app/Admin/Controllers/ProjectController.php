<?php

namespace App\Admin\Controllers;

use App\Project;
use App\ProjectCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project);

        $grid->column('id', __('Id'));
        $grid->column('title', __('名称'));
        $grid->column('client', __('客户'));
        $grid->column('type', __('类型'));
        $grid->column('content', __('内容'));
        $grid->column('date', __('日期'));
        $grid->column('logo', __('Logo'));
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
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('client', __('Client'));
        $show->field('type', __('Type'));
        $show->field('content', __('Content'));
        $show->field('date', __('Date'));
        $show->field('logo', __('Logo'));
        $show->field('images', __('Images'));
        $show->field('cover', __('Cover'));
        $show->field('project_category_id', __('Category id'));
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
        $form = new Form(new Project);

        $form->text('title', __('名称'));
        $form->text('client', __('客户'));
        $form->text('type', __('类型'));
        $form->text('content', __('内容'));
        $form->text('date', __('日期'));
        $form->image('logo', __('Logo'))->removable();
        $form->image('cover', __('封面大图'))->downloadable();
        $form->multipleImage('images')->removable();

        $form->select('project_category_id', '类目名称')->options(ProjectCategory::pluck('title','id'));
        $form->select('project_id', '服务案例大类')->options([
            1 => 'CIS 案例导入',
            2 => '品牌设计案例',
            3 => '环境规划案例'
            ]);

        return $form;
    }
}
