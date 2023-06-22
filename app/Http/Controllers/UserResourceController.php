<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'resource index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return 'resource create';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|unique:users|min:20'
            ]);
        } catch (\Throwable $e) {
            echo $e;
        }


        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
        } catch (\Throwable $e) {
            echo $e;
        }


        return 'resource store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return 'resource show';

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return 'resource edit';

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return 'resource update';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return 'resource destroy';

    }

    /**
     * Display a listing of the resource.
     */
    public function addedAction()
    {
        //
        return 'resource addedAction';

    }
}
