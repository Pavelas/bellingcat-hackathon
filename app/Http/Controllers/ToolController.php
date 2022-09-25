<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreToolRequest;
use App\Http\Requests\UpdateToolRequest;
use App\Models\Tool;
use App\Models\Favorite;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tools.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function personal()
    {
        return view('tools.personal', [
            'tools' => auth()
                ->user()
                ->favorites()
                ->with('topic')
                ->withCount(['favorites', 'comments'])
                ->paginate(Tool::TOOLS_PER_PAGE),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreToolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreToolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show(Tool $tool)
    {
        return view('tools.show', [
            'tool' => $tool,
            'favoritesCount' => $tool->favorites()->count(),
            'commentsCount' => $tool->comments()->count(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateToolRequest  $request
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateToolRequest $request, Tool $tool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        //
    }
}
