<?php


namespace App\Http\Controllers;


class SaleOrderController extends Controller
{
    /**
     * Show the create new sale order form
     *
     * @return View
     */
    public function create()
    {
        return view('sale_order.create');
    }
}
