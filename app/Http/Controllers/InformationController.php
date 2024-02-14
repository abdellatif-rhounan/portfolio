<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $data = [];

        $informations = Information::select('key', 'value')->get();

        foreach ($informations as $information) {
            $data[$information['key']] = $information['value'];
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

    public function show(Information $information)
    {
        //
    }

    public function edit(Information $information)
    {
        //
    }

    public function update(Request $request, Information $information)
    {
        //
    }

    public function destroy(Information $information)
    {
        //
    }
}
