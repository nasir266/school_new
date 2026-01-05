<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolExpenseController extends Controller
{
    public function AddSchoolExpense(){
       return view('School Expense.addSchoolExpense');
    }
    public function ExpenseList(){
       return view('School Expense.expenseList');
    }
    public function ExpenseByDate(){
       return view('School Expense.expenseByDate');
    }
}
