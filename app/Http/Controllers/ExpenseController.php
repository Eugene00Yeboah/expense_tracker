<?php
namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\Mail\ExpenseMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;



class ExpenseController extends Controller
{
    // Display a listing of the expenses
    public function index()
    {
        $expenses = Expense::orderBy('expense_date', 'desc')->paginate(10);
        return view('expenses.index', compact('expenses'));
    }

    // Show the form for creating a new expense
    public function create()
    {
        return view('expenses.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'category' => 'nullable|string|max:255',
            'expense_date' => 'required|date',
        ]);
    
        $expense = Expense::create($request->all());
    
        Mail::to(Auth::user()->email)->send(new ExpenseMail($expense));
    
        return redirect()->route('expenses.index')->with('success', 'Expense added successfully.');
    }
    

    // Show the form for editing the specified expense
    public function edit(Expense $expense)
    {
        return view('expenses.edit', compact('expense'));
    }

    // Update the specified expense in storage
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'category' => 'nullable|string|max:255',
            'expense_date' => 'required|date',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    // Remove the specified expense from storage
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }

    public function show(Expense $expense)
{
    return view('expenses.show', compact('expense'));
}
}
