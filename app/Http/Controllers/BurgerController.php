<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use Illuminate\Http\Request;

class BurgerController extends Controller
{
    // get and display items from database
    public function index()
    {
        $burgers = Burger::all();
        return view('burger.index', compact('burgers'));
    }

    // show the form for creating a new item
    public function create()
    {
        return view('burger.create');
    }

    // store the newly created item in database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'ingredients' => 'required',
            'hotness' => 'required',
        ]);
        $data = $request->input();
        try{
            $burger = new Burger;
            $imageName = date("dmyHis").'.'.$request->image->extension();
            $burger->name = $data['name'];
            $burger->price = $data['price'];
            $burger->description = $data['description'];
            $burger->ingredients = $data['ingredients'];
            if(array_key_exists('is_gf', $data)) {$burger->is_gf = true;}
            if(array_key_exists('is_gf', $data)) {$burger->is_vegetarian = true;}
            if(array_key_exists('is_vegan', $data)) {$burger->is_vegan = true;}
            $burger->hotness = $data['hotness'];
            $burger->image_path = './img/'.$imageName;
            $burger->save();
            $request->image->move(public_path('img'), $imageName);
            return redirect()->route('admin')->with('status',"Andmed edukalt sisestatud.");
        }
        catch(Exception $e){
            return redirect()->route('admin')->with('failed',"Sisestamine ebaõnnestus.");
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'ingredients' => 'required',
            'hotness' => 'required',
        ]);
        $data = $request->input();
        try{
            $imageName = date("dmyHis").'.'.$request->image->extension();
            //delete previous image
            $burger = Burger::where('id', $id)->get();
            $imagePath = base_path().'/public/'.$burger[0]->image_path;
            $imagePath = str_replace('./', '', $imagePath);
            $imagePath = str_replace('/', '\\', $imagePath);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            //add new info to db
            (array_key_exists('is_gf', $data)) ? $data['is_gf'] = true : $data['is_gf'] = false;
            (array_key_exists('is_vegetarian', $data)) ? $data['is_vegetarian'] = true : $data['is_vegetarian'] = false;
            (array_key_exists('is_vegan', $data)) ? $data['is_vegan'] = true : $data['is_vegan'] = false;
            Burger::where('id', $id)->update(array(
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'ingredients' => $data['ingredients'],
                'is_gf' => $data['is_gf'],
                'is_vegetarian' => $data['is_vegetarian'],
                'is_vegan' => $data['is_vegan'],
                'hotness' => $data['hotness'],
                'image_path' => '/../img/'.$imageName
            ));
            //add new image to public folder
            $request->image->move(public_path('img'), $imageName);
            return redirect()->route('admin')->with('status',"Andmed edukalt muudetud.");
        }
        catch(Exception $e){
            return redirect()->route('admin')->with('failed',"Andmete muutmine ebaõnnestus.");
        }
    }

    public function destroy($id)
    {
        $burger = Burger::where('id', $id)->get();
        $imagePath = base_path().'/public/'.$burger[0]->image_path;
        $imagePath = str_replace('./', '', $imagePath);
        $imagePath = str_replace('/', '\\', $imagePath);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        Burger::where('id', $id)->delete();
        return redirect()->back()
            ->with('status', 'Toode edukalt kustutatud.');
    }

    public function show($id)
    {
        $burger = Burger::where('id', $id)->get();
        return response()->view('burger.show', compact('burger'));
    }

    public function edit($id)
    {
        $burger = Burger::where('id', $id)->get();
        return response()->view('burger.edit', compact('burger'));
    }

    public function admin()
    {
        $burgers = Burger::all();
        return view('admin', compact('burgers'));
    }
}
