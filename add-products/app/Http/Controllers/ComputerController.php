<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    // private static function getdate()
    // {
    //     return[
    //         ['id' => 1, 'name' => 'LG', 'origin' => 'Koria', 'price' => '899.99 $'],
    //         ['id' => 2, 'name' => 'HP', 'origin' => 'USA', 'price' => '899.99 $'],
    //         ['id' => 3, 'name' => 'SIEMENS', 'origin' => 'Germany', 'price' => '899.99 $'],
    //         ['id' => 4, 'name' => 'TOSHIBA', 'origin' => 'Japan', 'price' => '899.99 $']
    //     ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', ['computers'=> $computers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required'
        ]);

        $computers = new Computer();
        $computers->name = strip_tags($request->input('computer-name'));
        $computers->origin = strip_tags($request->input('computer-origin'));
        $computers->price = strip_tags($request->input('computer-price'));

        $computers->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $computers = Computer::findOrFail($id);
        return view('computers.show',['computers' => $computers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $computer = Computer::findOrFail($id);
        return view('computers.edit', ['computers' => $computer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required'
        ]);

        $computers = Computer::findOrFail($id);
        $computers->name = strip_tags($request->input('computer-name'));
        $computers->origin = strip_tags($request->input('computer-origin'));
        $computers->price = strip_tags($request->input('computer-price'));

        $computers->save();

        return redirect()->route('computers.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Computer::destroy($id);
        return redirect()->route('computers.index');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $computers = Computer::where('name', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('price', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('origin', 'LIKE', "%{$searchTerm}%")->get();
        return view('computers.index', ['computers' => $computers]);
    }

}
