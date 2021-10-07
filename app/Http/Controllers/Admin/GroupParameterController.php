<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GroupParameter;
use Illuminate\Http\Request;

class GroupParameterController extends Controller
{

    public function index()
    {
        $mision = GroupParameter::where('name', 'Mision')->first();
        $vision = GroupParameter::where('name', 'Vision')->first();

        return view('admin.groups.index', compact('mision', 'vision'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($name)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy(GroupParameter $groupParameter)
    {
        //
    }
}
