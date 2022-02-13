<?php

namespace WireUi\Controllers;

use Themosis\Core\Auth\Access\AuthorizesRequests;
use Themosis\Core\Bus\DispatchesJobs;
use Themosis\Core\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
