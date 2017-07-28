<?php

namespace App\Admin\Controllers;

use App\Blog;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PostController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('文章管理');
            $content->description('文章的创建与编辑');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('文章管理');
            $content->description('文章的创建与编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('文章管理');
            $content->description('文章的创建与编辑');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Blog::class, function (Grid $grid) {

            $grid->column('id','文章ID')->sortable();
            $grid->column('title','文章标题');
            $grid->column('author','作者');
            $grid->column('created_at','创建于');
            $grid->column('updated_at','更新于');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Blog::class, function (Form $form) {

            $form->display('id', '文章ID');
            $form->text('title', '文章标题');
            $form->text('author', '作者');
            $form->textarea('description', '文章描述');
            // $form->wangeditor('content','文章内容')->attribute(['rows' => '20']);
            $form->markdowneditor('content','文章内容');
            // $form->editor('content');
            // $form->textarea('content', '文章内容');
            $form->display('created_at', '创建于');
            $form->display('updated_at', '更新于');
        });
    }
}
