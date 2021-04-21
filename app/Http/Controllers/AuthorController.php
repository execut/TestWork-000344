<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * Authors API CRUD controller
 * @package App\Http\Controllers
 */
class AuthorController extends Controller
{
    /**
     * Returns items list
     * @return array
     */
    public function index():array
    {
        $authors = Author::all()->toArray();
        return array_reverse($authors);
    }

    /**
     * Create new record
     * @param Request $request Request object
     * @return JsonResponse
     */
    public function store(Request $request):JsonResponse
    {
        $author = new Author([
            'name' => $request->input('name'),
        ]);
        $author->save();

        return response()->json('Author created!');
    }

    /**
     * Get record
     * @param int $id Record identity
     * @return JsonResponse
     */
    public function show(int $id):JsonResponse
    {
        $author = Author::find($id);
        return response()->json($author);
    }

    /**
     * Update existed record
     * @param int $id Record identity
     * @param Request $request Request object
     * @return JsonResponse
     */
    public function update(int $id, Request $request):JsonResponse
    {
        $author = Author::find($id);
        $author->update($request->all());

        return response()->json('Author updated!');
    }

    /**
     * @param int $id Record identity
     * @return JsonResponse
     */
    public function destroy(int $id):JsonResponse
    {
        $author = Author::find($id);
        $author->delete();

        return response()->json('Author deleted!');
    }
}
