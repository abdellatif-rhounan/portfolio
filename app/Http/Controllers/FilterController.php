<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
        $data = [];

        $filters = Filter::select('name')->get();

        foreach ($filters as $filter) {
            array_push($data, $filter['name']);
        }

        return response($data, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Filter $filter)
    {
        //
    }

    public function edit(Filter $filter)
    {
        //
    }

    public function update(Request $request, Filter $filter)
    {
        //
    }

    public function destroy(Filter $filter)
    {
        //
    }
}
