<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GroupParameter;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ParameterController extends Controller
{

    public function index()
    {
        $group = GroupParameter::where('description', 'TABLA - AUTORIDADES')->first();


        $parameters = Parameter::where('group_id', $group->id)->paginate();

        return view('admin.parameters.index', compact('parameters'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Parameter $parameter)
    {

    }

    public function edit(Parameter $parameter)
    {
        return view('admin.parameters.edit', compact('parameter'));
    }

    public function update(Request $request, Parameter $parameter)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $parameter->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('parameters', $request->file('file'));

            if ($parameter->image) {
                Storage::delete($parameter->image->url);

                $parameter->image->update([
                    'url' => $url
                ]);
            }else{
                $parameter->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.parameters.edit', $parameter)->with('info', 'El Parametro se actualizo con exitó');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parameter $parameter)
    {
        //
    }
}
