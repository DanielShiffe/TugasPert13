<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\rstatus;
use Illuminate\Http\Request;

class rstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $rstatus = rstatus::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $rstatus = rstatus::latest()->paginate($perPage);
        }

        return view('admin.rstatus.index', compact('rstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.rstatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        rstatus::create($requestData);

        return redirect('admin/rstatus')->with('flash_message', 'rstatus added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $rstatus = rstatus::findOrFail($id);

        return view('admin.rstatus.show', compact('rstatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $rstatus = rstatus::findOrFail($id);

        return view('admin.rstatus.edit', compact('rstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $rstatus = rstatus::findOrFail($id);
        $rstatus->update($requestData);

        return redirect('admin/rstatus')->with('flash_message', 'rstatus updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        rstatus::destroy($id);

        return redirect('admin/rstatus')->with('flash_message', 'rstatus deleted!');
    }
}
