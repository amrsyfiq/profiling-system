<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SearchController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);
    
        $file = $request->file('file');
        $columnIndex = 4; // Modify this with the desired column index
    
        Excel::import(new DataImport($columnIndex), $file);
    
        return redirect()->route('home')->with('success', 'Data imported successfully!');
    }
    

    public function search(Request $request)
    {
        $query = $request->input('query');

        $profiles = UserData::where('no_tentera', 'LIKE', '%' . $query . '%')->get();

        return view('home', compact('profiles', 'query'));
    }

    public function profile($id)
    {
        $profiles = UserData::where('id', $id)->get();

        return view('profile', compact('profiles', 'id'));
    }
}
