<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Http\Response;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
        $suppliers = Supplier::all();

        return response()->json([
            'error' => false,
            'suppliers' => $suppliers
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        //
        $add = Supplier::create($request->all());

        return response()->json([
            'error' => false,
            'message' => 'Added'
        ], 201);
    }

    public function getSupplierById(Request $request): JsonResponse
    {

        $id = $request->route()->parameter('id');

        $supplier = Supplier::find($id);

        return response()->json([
            'error' => false,
            'supplier' => $supplier
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request): JsonResponse
    {
        $id = $request->route()->parameter('id');

        $supplier = Supplier::where('id', $id);

        $updated = $supplier->update($request->all());

        return response()->json([
            'error' => false,
            'message' => 'Updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request): JsonResponse
    {
        //
        $id = $request->route()->parameter('id');

        Supplier::find($id)->delete();

        return response()->json([
            'error' => false,
            'message' => 'Deleted'
        ],200);
    }
}
