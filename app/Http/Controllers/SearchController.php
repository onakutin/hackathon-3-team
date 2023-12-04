<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $error = 'Not found';
        $name = $request->input('name', false);
        $owners = Owner::query()
            ->where('first_name', 'like', '%' . $name . '%')
            ->orWhere('surname', 'like', '%' . $name . '%')
            ->orderBy('surname', 'ASC')
            // ->limit(10)
            ->get();

        $animals = Animal::query()
            ->where('name', 'like', '%' . $name . '%')
            ->limit(10)
            ->orderBy('name', 'ASC')
            ->get();

        return view('search.searchResult', compact('error', 'owners', 'animals'));
    }
}
