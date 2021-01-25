<?php

namespace App\Http\Controllers;

use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class VacancyController extends Controller
{

    public function store(Request $request)
    {
        // dd($request);
        if( Auth::id() && Auth::id() == 1)
        {
            //'heading', 'position', 'salary', 'urgent', 'part_time',

            Validator::make($request->all(), [
                'heading' => 'required|max:255',
                'position' => 'required|max:255',
                'salary' => 'required|max:255',
                'urgent' => 'max:255',
                'part_time' => 'max:255',
            ])->validate();

            $created = Vacancy::create($request->all());
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        dd($request);
        if(Auth::id() && Auth::id() == 1)
        {
            $update = Vacancy::where('id', $id)->first();

            Validator::make($request->all(), [
                'heading' => 'required|max:255',
                'position' => 'required|max:255',
                'salary' => 'required|max:255',
                'urgent' => 'required|max:255',
                'part_time' => 'required|max:255',
            ])->validate();

            $update->update($request->all());
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        if(Auth::id() && Auth::id() == 1)
        {
            Vacancy::where('id', $id)->first()->delete();
        }
        return redirect()->back();
    }
}
