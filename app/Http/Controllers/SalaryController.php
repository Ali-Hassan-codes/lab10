<?php

namespace App\Http\Controllers;
 use App\Models\Salary;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function getByUserId($id)
    {
        $salaries = Salary::where('user_id', $id)->get();

        return response()->json([
            'salaries' => $salaries
        ]);
    }
}
