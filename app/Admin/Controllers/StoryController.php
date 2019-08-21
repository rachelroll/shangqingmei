<?php

namespace App\Admin\Controllers;

use App\Story;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Story';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Story);

        $grid->column('id', __('Id'));
        $grid->column('client_name', __('客户'));
        $grid->column('type_name', __('类型'));
        $grid->column('content', __('内容'));
        $grid->column('sub_category', __('二级分类'));
        $grid->column('date', __('时间'));
        $grid->column('created_at', __('创建日期'));
        $grid->column('updated_at', __('更新日期'));

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
        $show = new Show(Story::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('client_name', __('客户'));
        $show->field('type_name', __('类型'));
        $show->field('content', __('内容'));
        $show->field('date', __('时间'));
        $show->field('logo', __('Logo'));
        $show->field('images', __('Images'));
        $show->field('background', __('背景介绍'));
        $show->field('category', __('分类'));
        $show->field('created_at', __('创建日期'));
        $show->field('updated_at', __('更新日期'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Story);

        $form->text('client_name', __('客户'));
        $form->text('type_name', __('类型'));
        $form->text('content', __('内容'));
        $form->text('date', __('时间'));
        $form->image('logo', __('上传 Logo 图'));
        $form->multipleImage('images', __('上传照片(支持多图)'));
        $form->text('background', __('背景介绍'));
        $form->select('category', __('一级分类'))->options([
            1 => '行业经验',
            2 => 'CI 故事'
        ]);
        $form->text('sub_category', __('二级分类'));

        return $form;
    }
}
