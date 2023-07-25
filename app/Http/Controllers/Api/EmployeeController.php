<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\EmployeeCreateRequest;

use App\Models\Employee;
use App\Models\Position;

class EmployeeController extends Controller
{
    public function create(EmployeeCreateRequest $request)
    {
        $data = $request->validated();
        $data['position'] = Position::select('id')
        	->where('slug', $data['position'])
        	->first()->id;

        $employee = Employee::create($data);

        return ([ 'ok' => true, 'employee' => $employee ]);
    }
}
