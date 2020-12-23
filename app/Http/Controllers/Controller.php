<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $breadcrumbs;

    public function __construct()
    {
        $this->breadcrumbs = $this->getBreadcrumbs();
    }

    public function getBreadcrumbs()
    {
        if(!isset($this->label)) return null;

        return (object) array(
            $this->label => (object) array(
                "label" => $this->label,
                "route" => $this->route
            ),
        );
    }

    public function getThead($data)
    {
        $thead = array_keys($data->first()->toArray());

        return $thead;
    }
}
