<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Imports\DataMarkahImport;
use App\Models\DataMarkah;
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
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);
    
        $file = $request->file('file');
    
        Excel::import(new DataImport(), $file);
    
        return redirect()->route('home')->with('success', 'Data User berjaya di import!');
    }

    public function importMarkah(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);
    
        $file = $request->file('file');
    
        Excel::import(new DataMarkahImport(), $file);
    
        return redirect()->route('home')->with('success', 'Data Pendorong berjaya di import!');
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

    public function result($id)
    {
        $results = DataMarkah::where('user_data_id', $id)->get();

        return view('result', compact('results', 'id'));
    }
}
