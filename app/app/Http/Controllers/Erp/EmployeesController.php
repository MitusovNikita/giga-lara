<?php
namespace App\Http\Controllers\Erp;

use App\Models\Employee;

class EmployeesController
{
    public function index()
    {
        $allEmployees = Employee::all();

        return view('erp.employees.index',
            [
                'allEmployees' => $allEmployees
            ]
        );
    }
}
