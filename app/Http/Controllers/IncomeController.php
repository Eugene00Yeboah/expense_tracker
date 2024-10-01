<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\IncomeMail;


class IncomeController extends Controller
{
  
    public function create()
    {
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'amount' => 'required|numeric',
            'source' => 'required|string|max:255',
            'date' => 'required|date',
        ]);
    
        // Create the income record and store it in a variable
        $income = Income::create([
            'amount' => $request->amount,
            'source' => $request->source,
            'date' => $request->date,
            'user_id' => Auth::id(),
        ]);
    
        // Send email notification
        Mail::to(Auth::user()->email)->send(new IncomeMail($income));
    
        return redirect()->route('incomes.index')->with('success', 'Income added successfully.');
    }
    

    public function destroy($id)
    {
        // Find the income record by ID
        $income = Income::findOrFail($id);

        // Ensure the user is authorized to delete this income record
        if ($income->user_id !== Auth::id()) {
            return redirect()->route('incomes.index')->with('error', 'Unauthorized access.');
        }

        // Delete the income record
        $income->delete();

        // Redirect with a success message
        return redirect()->route('incomes.index')->with('danger', 'Income deleted successfully.');
    }


    public function index()
{
    $incomes = Income::where('user_id', Auth::id())->get();
    return view('incomes.index', compact('incomes'));
}

public function edit(Income $income)
{
    // Ensure the user is authorized to edit this income record
    if ($income->user_id !== Auth::id()) {
        return redirect()->route('incomes.index')->with('error', 'Unauthorized access.');
    }

    return view('incomes.edit', compact('income'));
}

public function update(Request $request, Income $income)
{
    // Ensure the user is authorized to update this income record
    if ($income->user_id !== Auth::id()) {
        return redirect()->route('incomes.index')->with('error', 'Unauthorized access.');
    }

    $request->validate([
        'amount' => 'required|numeric',
        'source' => 'required|string|max:255',
        'date' => 'required|date',
    ]);

    $income->update([
        'amount' => $request->amount,
        'source' => $request->source,
        'date' => $request->date,
    ]);

    return redirect()->route('incomes.index')->with('success', 'Income updated successfully.');
}

}
