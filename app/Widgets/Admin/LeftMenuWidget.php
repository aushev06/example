<?php

namespace App\Widgets\Admin;

use Arrilot\Widgets\AbstractWidget;

class LeftMenuWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.admin.left_menu_widget', [
            'config' => $this->config,
            'items' => [],
        ]);
    }
}
