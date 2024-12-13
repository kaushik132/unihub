<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\HomeBanner;

class HomeBannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HomeBanner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomeBanner());

        $grid->column('id', __('Id'));
        $grid->column('banner', __('Banner'))->image(url('/uploads/'), 100, 150);
        $grid->column('short_title', __('Short title'));
        $grid->column('created_at', __('Created at'))->display(function ($createdAt) {
            return \Carbon\Carbon::parse($createdAt)->format('d-m-Y'); // Format as Day-Month-Year
        });
        


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
        $show = new Show(HomeBanner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('banner', __('Banner'));
        $show->field('alt', __('Alt'));
        $show->field('url', __('Url'));
        $show->field('link_1', __('Link 1'));
        $show->field('link_2', __('Link 2'));
        $show->field('short_title', __('Short title'));
        $show->field('main_title', __('Main title'));
        $show->field('short_description', __('Short description'));
        $show->field('main_title_color', __('Main title color'));
        $show->field('short_description_color', __('Short description color'));
        $show->field('link_1_color', __('Link 1 color'));
        $show->field('link_2_color', __('Link 2 color'));
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
        $form = new Form(new HomeBanner());

        $form->image('banner', __('Banner'));
        $form->text('alt', __('Alt'));
        $form->url('url', __('Url'));
        $form->url('link_1', __('Link 1'));
        $form->url('link_2', __('Link 2'));
        $form->text('short_title', __('Short title'));
        $form->text('main_title', __('Main title'));
        $form->ckeditor('short_description', __('Short description'));
        $form->color('main_title_color', __('Main title color'));
        $form->color('short_description_color', __('Short description color'));
        $form->color('link_1_color', __('Link 1 color'));
        $form->color('link_2_color', __('Link 2 color'));

        return $form;
    }
}
