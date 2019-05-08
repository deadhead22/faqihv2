<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/**
 * Class PageController.
 */
class PageController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.page');
    }
}
