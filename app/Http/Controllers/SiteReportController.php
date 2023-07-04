<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteReportController extends Controller
{
    public function customerOrder()
    {
        $data = [
            'pageTitle' => 'Customer Order'
        ];

        return view('pages.reports.customer_order', $data);
    }

    public function customerReturn()
    {
        $data = [
            'pageTitle' => 'Customer Order'
        ];

        return view('pages.reports.returns', $data);
    }

    public function sales()
    {
        $data = [
            'pageTitle' => 'Sales'
        ];

        return view('pages.reports.sales', $data);
    }

    public function shipping()
    {
        $data = [
            'pageTitle' => 'Shipping'
        ];

        return view('pages.reports.shipping', $data);
    }

    public function product()
    {
        $data = [
            'pageTitle' => 'Shipping'
        ];

        return view('pages.reports.product_view', $data);
    }
}