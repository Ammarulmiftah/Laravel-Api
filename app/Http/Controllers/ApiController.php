<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = Barang::paginate(10);
        return[ 'table' => $data,
];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Barang::create([
          'namaBarang' => $request->namaBarang,
          'deskripsiBarang' => $request->deskripsiBarang,
          'harga' => $request->harga,
        ]);
        return response()->json([
            'message' => "Create successfully",
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $api
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $data)
    {
        return response()->json([
          'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $api
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $data)
    {
        $data->namaBarang = $request->namaBarang;
        $data->deskripsiBarang = $request->deskripsiBarang;
        $data->harga = $request->harga;
        $data->save();
        
        return response()->json([
            'message' => "Update successfully",
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $data)
    {
        $data->delete();
        return response()->json([
            'message' => 'barang delete'
        ], 204);
    }
}