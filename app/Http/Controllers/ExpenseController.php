<?php

namespace App\Http\Controllers;


use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function create()
    {

        return view('dashboard.expenses.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'date' => 'required|date',
            'category' => 'required|in:Food,Transport,Shopping,Others',
        ]);

        Expense::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'amount' => $request->amount,
            'date' => $request->date,
            'category' => $request->category,
        ]);

        return redirect()->route('dashboard')->with('success', 'Expense added successfully!');
    }


    public function edit($id)
    {
        $categories = ['Food', 'Transport', 'Shopping', 'Others'];
        $expense = Expense::findOrFail($id);
        return view('dashboard.expenses.edit', compact('expense', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'date' => 'required|date',
            'category' => 'required|in:Food,Transport,Shopping,Others',
        ]);

        $expense = Expense::findOrFail($id);

        $expense->update([
            'title' => $request->title,
            'amount' => $request->amount,
            'date' => $request->date,
            'category' => $request->category,
        ]);

        return redirect()->route('dashboard')->with('success', 'Expense updated successfully!');
    }


    public function destroy(Expense $expense)
    {

        $expense->delete();
        return redirect()->route('dashboard')->with('success', 'Expense deleted successfully!');
    }
}
