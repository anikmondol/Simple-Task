<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentMonth = now()->month;
        $currentYear = now()->year;

        $expenses = Expense::with('user')
            ->whereYear('date', $currentYear)
            ->whereMonth('date', $currentMonth)
            ->orderBy('id', 'desc')
            ->get();


        $totalAmount = $expenses->sum('amount');


        $categories = ['Food', 'Transport', 'Shopping', 'Others'];
        $categoryTotals = [];
        foreach ($categories as $cat) {
            $categoryTotals[$cat] = $expenses->where('category', $cat)->sum('amount');
        }

        return view('dashboard.home.index', compact('expenses', 'totalAmount', 'categories', 'categoryTotals'));
    }
}
