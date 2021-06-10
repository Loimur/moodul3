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
            'is_gf' => 'required',
            'is_vegetarian' => 'required',
            'is_vegan' => 'required',
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
            $burger->is_gf = $data['is_gf'];
            $burger->is_vegetarian = $data['is_vegetarian'];
            $burger->is_vegan = $data['is_vegan'];
            $burger->hotness = $data['hotness'];
            $burger->image_path = './img/'.$imageName;
            $burger->save();
            $request->image->move(public_path('img'), $imageName);
            return redirect()->route('admin')->with('status',"Insert successful.");
        }
        catch(Exception $e){
            return redirect()->route('admin')->with('failed',"Operation failed.");
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
            'is_gf' => 'required',
            'is_vegetarian' => 'required',
            'is_vegan' => 'required',
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
            Burger::where('id', $id)->update(array(
                $burger->name = $data['name'],
                $burger->price = $data['price'],
                $burger->description = $data['description'],
                $burger->ingredients = $data['ingredients'],
                $burger->is_gf = $data['is_gf'],
                $burger->is_vegetarian = $data['is_vegetarian'],
                $burger->is_vegan = $data['is_vegan'],
                $burger->hotness = $data['hotness'],
                $burger->image_path = './img/'.$imageName
            ));
            //add new image to public folder
            $request->image->move(public_path('img'), $imageName);
            return redirect()->route('admin')->with('status',"Edit successful.");
        }
        catch(Exception $e){
            return redirect()->route('admin')->with('failed',"Operation failed.");
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
            ->with('status', 'Item deleted successfully.');
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
