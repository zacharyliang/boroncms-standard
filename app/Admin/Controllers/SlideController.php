<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\SlideForm;
use App\Admin\Grids\SlideGrid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class SlideController extends AdminController
{

    private $grid;

    private $form;

    public function __construct(SlideGrid $grid, SlideForm $form)
    {
        $this->grid = $grid;
        $this->form = $form;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return $this->grid->grid();
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return $this->grid->detail($id);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return $this->form->default();
    }

}
