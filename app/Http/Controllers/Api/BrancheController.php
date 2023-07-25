<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\BrancheCreateRequest;

use App\Models\Branche;
use App\Models\Employee;

class BrancheController extends Controller
{
    public function index()
    {
        $items = Branche::get();

        return [ 'ok' => true, 'items' => $items ];
    }
	
	public function show(Request $request, Branche $branche)
    {
        $employees = Employee::where('branche', $branche->id)->get();
        $employees = $employees->sortBy('full_name');

        return [ 'ok' => true, 'branche' => $branche, 'employees' => $employees->values() ];
    }

    public function create(BrancheCreateRequest $request)
    {
        $data = $request->validated();

        $branche = Branche::create($data);

        return ([ 'ok' => true, 'branche' => $branche ]);
    }
}
