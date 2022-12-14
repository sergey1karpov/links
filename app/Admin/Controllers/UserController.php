<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('slug', __('Slug'));
        $grid->column('verify', __('Verify'));
        $grid->column('is_active', __('is_active'));
        $grid->column('full_url', __('Вшивать это'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('slug', __('Slug'));
        $show->field('banner', __('Banner'));
        $show->field('avatar', __('Avatar'));
        $show->field('name_color', __('Name color'));
        $show->field('description', __('Description'));
        $show->field('description_color', __('Description color'));
        $show->field('verify_color', __('Verify color'));
        $show->field('background_color', __('Background color'));
        $show->field('verify', __('Verify'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));
        $form->text('slug', __('Slug'));
        $form->textarea('banner', __('Banner'));
        $form->textarea('avatar', __('Avatar'));
        $form->textarea('name_color', __('Name color'));
        $form->text('description', __('Description'));
        $form->textarea('description_color', __('Description color'));
        $form->textarea('verify_color', __('Verify color'));
        $form->textarea('background_color', __('Background color'));
        $form->text('utag', __('Utag'));
        $form->text('is_active', __('is_active'));

        return $form;
    }
}
