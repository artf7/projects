<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class ItemController extends Controller
{
    public function createForm()
    {
        // Fetch categories to populate the category dropdown in the form
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'sku' => 'required|unique:items,sku',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload and move it to the images folder
        $imagePath = $request->file('picture')->store('images', 'public');

        Item::create([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'sku' => $request->input('sku'),
            'picture' => $imagePath,
        ]);

        return redirect('/items');
    }

    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function editForm($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all(); // Fetch categories
        return view('items.edit', compact('item', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'sku' => 'required|unique:items,sku,' . $id,
        ]);

        $item = Item::findOrFail($id);

        if ($request->hasFile('picture')) {
            // Handle image upload and move it to the images folder
            $imagePath = $request->file('picture')->store('images', 'public');
            // Delete the old image
            Storage::disk('public')->delete($item->picture);
            $item->picture = $imagePath;
        }

        $item->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'sku' => $request->input('sku'),
        ]);

        // Fetch updated items
        $items = Item::all();

        // Redirect to the items index page with updated items
        return view('items.index', compact('items'));
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        return view('items.delete', compact('item'));
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        // Delete the image
        Storage::disk('public')->delete($item->picture);

        // Soft delete the item
        $item->delete();

        return redirect('/items');
    }
}
