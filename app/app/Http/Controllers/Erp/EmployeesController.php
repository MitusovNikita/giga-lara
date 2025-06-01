<?php
namespace App\Http\Controllers\Erp;

use App\Models\Employee;

class EmployeesController
{
    // get all employees
    public function index()
    {
        $allEmployees = Employee::all();

        return view('erp.employees.index',
            [
                'allEmployees' => $allEmployees
            ]
        );
    }

    public function testGetter()
    {
        $employee = Employee::find(1);

//        $employee->name = 'Nikolas';
//        $employee->save();

        echo $employee->name;
    }


}
