<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Category;
use Illuminate\Routing\Controllers\HasMiddleware;

class CategoryController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }


    // display all Categories
    public function list(): View
    {
        $items = Category::orderBy('name', 'asc')->get();

        return view(
            'category.list',
            [
                'title' => 'Categories',
                'items' => $items,
            ]
        );
    }


    // display new Category form
    public function create(): View
    {
        return view(
            'category.form',
            [
                'title' => 'Pievienot category',
                'category' => new Category,
            ]
        );
    }

    
    // creates new Category data
    public function put(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->save();

        return redirect('/categories');
    }

/*
    // display Author edit form
    public function update(Author $author): View
    {
        return view(
            'author.form',
            [
                'title' => 'Rediget autoru',
                'author' => $author,
            ]
        );
    }
    
    // update Author data
    public function patch(Author $author, Request $request): RedirectResponse
    {
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $author->name = $validatedData['name'];
        $author->save();
    
        return redirect('/authors');
    }

    // delete Author
    public function delete(Author $author): RedirectResponse
    {
        // šeit derētu pārbaude, kas neļauj dzēst autoru, ja tas piesaistīts eksistējošām grāmatām
        $author->delete();
        return redirect('/authors');
    }


    */

}
