<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\BlogCategory;

class BlogCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BlogCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BlogCategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('seo_title', __('Seo title'));
        $grid->column('seo_des', __('Seo des'));
        $grid->column('seo_keyword', __('Seo keyword'));
        $grid->column('created_at', __('Created at'));
       

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
        $show = new Show(BlogCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('des', __('Des'));
        $show->field('slug', __('Slug'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_des', __('Seo des'));
        $show->field('seo_keyword', __('Seo keyword'));
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
        $form = new Form(new BlogCategory());

        $form->text('name', __('Name'));
        $form->textarea('des', __('Des'));
        $form->hidden('slug');

        $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->name)));
        });
        $form->text('seo_title', __('Seo title'));
        $form->text('seo_des', __('Seo des'));
        $form->text('seo_keyword', __('Seo keyword'));

        return $form;
    }
}
