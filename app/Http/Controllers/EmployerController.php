<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EmployerController extends Controller
{
    public function store(Request $request, Employer $employer)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'logo' => 'required|mimetypes:image/jpeg,image/png'
        ]);

        $path = $request->file('logo')->store('employers');
        $employer->name = $request->name;
        $employer->logo = $path;

        if(! $employer->save()){
            throw ValidationException::withMessages(['name' => 'Erreur inserting Companies']);
        }
        return redirect('/');
    }
}
