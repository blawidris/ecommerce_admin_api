<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->only('dashboard');
    }


    public function dashboard()
    {


        $currentMonth = Carbon::now()->startOfMonth();
        $currentDay = Carbon::now();
        $yesterday = Carbon::yesterday()->toDate();


        $lastMonth = $currentMonth->subMonth()->startOfMonth();
        $lastDay = $lastMonth->copy()->endOfMonth();


        // total sale
        $totalSalesAllMonths = Order::sum('total_price');

        // percentages
        $currentMonthSalesPercentage = 0;
        $lastMonthSalesPercentage = 0;


        // calculate summary for last month
        $lastMonthOrder = Order::whereBetween('created_at', [$lastMonth, $lastDay]);
        $lastMonthTotalSum = $lastMonthOrder->sum('total_price');


        $lastMonthSalesPercentage = $this->calculateSalePercentage($lastMonthTotalSum) ?? 0;


        // calculate this month %
        $currentMonthOrder = Order::whereBetween('created_at', [$currentMonth, $currentDay]);

        $currentMonthTotalSales = $currentMonthOrder->sum('total_price');
        $currentMonthCompletedTotalSales = $currentMonthOrder->where('status', 2)->sum('total_price');



        $currentMonthSalesPercentage = $this->calculateSalePercentage($currentMonthTotalSales) ?? 0;


        // calculate average daily sales
        $todayOrderSales = Order::whereDay('created_at', $currentDay)->where('status', 2)->sum('total_price');
        $yesterdayOrderSales = Order::whereDay('created_at', $yesterday)->where('status', 2)->sum('total_price');

        // calculate today %
        $todayOrderPercentage = $this->calculateSalePercentage($todayOrderSales);

        //calculate yesterday %
        $yesterdayOrerPerc = $this->calculateSalePercentage($yesterdayOrderSales);

        // orders
        $avgOrder = Order::whereDate('created_at', $currentDay)->count();
        $order = [

            'average_order_per_day' => $avgOrder,
            'orders' => Order::with('customer')->orderBy('created_at', 'desc')->limit(5)->get(),
            'currentMonthOrder' => $currentMonthOrder->count(),
            'lastMonthPercentage' => $lastMonthSalesPercentage,
            'currentMonthPercentage' => $currentMonthSalesPercentage,
            'currentMonthCompletedSales' => $currentMonthCompletedTotalSales,
            'todayOrderSales' => $todayOrderSales,
            'todayPerc' => $todayOrderPercentage,
            'yesterdayPerc' => $yesterdayOrerPerc
        ];

        // product
        $products = Product::orderBy('created_at')->limit(5)->get();

        // customers
        $customers = Customers::whereBetween('created_at', [$currentMonth, $currentDay]);

        $customer = [
            'total' => $this->formatNumberToK($customers->count()),
            'recent' => $customers->limit(6)->get()
        ];

        $data = [
            'pageTitle' => 'Dashboard',
            'user' => Auth::guard('admin')->user(),
            'order' => $order,
            'products' => $products,
            'productCount' => Product::count(),
            'customers' => $customer
        ];

        return view('pages.dashboard', $data);
    }




    // public function categoryView()
    // {

    //     $data = [
    //         'pageTitle' => 'Category'
    //     ];

    //     return view('pages.categories.view', $data);
    // }

    // public function addCategory()
    // {
    //     $data = [
    //         'pageTitle' => 'Add Category'
    //     ];

    //     return view('pages.categories.add', $data);
    // }


    // public function editCategory()
    // {
    //     $data = [
    //         'pageTitle' => 'Edit Category'
    //     ];

    //     return view('pages.categories.edit', $data);
    // }




    public function settings()
    {

        $data = [
            'pageTitle' => 'Settings',
            'user' => Auth::guard('admin')->user()
        ];

        return view('pages.settings', $data);
    }


    private function calculateSalePercentage($value)
    {
        $totalSalesAllMonths  = Order::sum('total_price');

        $currentMonthSalesPercentage = 0;


        if ($totalSalesAllMonths > 0) {
            $currentMonthSalesPercentage = ($value / $totalSalesAllMonths) * 100;
        }

        return $currentMonthSalesPercentage;
    }
}
