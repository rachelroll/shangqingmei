<?php

namespace App\Admin\Controllers;

use App\Chuanqi;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ChuanqiController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Chuanqi';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Chuanqi);

        $grid->column('id', __('Id'));
        $grid->column('type', __('分类'));
        $grid->column('title', __('标题'));
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
        $show = new Show(Chuanqi::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('分类'));
        $show->field('title', __('标题'));
        $show->field('content', __('内容'));
        $show->field('photos', __('图片'));
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
        $form = new Form(new Chuanqi);

        $form->select('type', __('分类'))->options([
            'CI 传奇' => 'CI 传奇',
            '欧美 CI 范例' => '欧美 CI 范例',
            '日本 CI 范例' => '日本 CI 范例',
            '港台 CI 范例' => '港台 CI 范例',
            '大陆 CI 范例' => '大陆 CI 范例',
        ]);
        $form->text('title', __('标题'));
        $form->simditor('content', '内容')->rules('required',['required'=>'必填项']);
        $form->multipleImage('photos', __('图片上传'))->removable();

        return $form;
    }
}
