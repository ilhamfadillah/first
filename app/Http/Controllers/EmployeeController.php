<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Transaction;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function create()
   {
     /*
     $employee = Employee::find(1);
     foreach ($employee->transactions as $transaction) {
       echo $transaction->transaction_amount."<br>";
     }exit();
     */

     //contoh relasi hasmany
     //var_dump($employee->transactions); exit();

     $transaction = Transaction::find(1);
     var_dump($transaction->employee); exit();
     return view('employee.createEmployee');
   }
   public function store(Request $request)
   {
     $employee = new Employee;
     $employee->employee_name = $request->get('employee_name');
     $employee->amount = $request->get('employee_salary');

     $employee->save();

     return 'Success';
   }
}
