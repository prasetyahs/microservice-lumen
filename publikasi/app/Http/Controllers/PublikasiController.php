<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publikasi = array(array(
            'title' => "test title publikasi",
            'jenis_publikasi' => "test jenis publikasi"
        ), array(
            'title' => "test title publikasi",
            'jenis_publikasi' => "test jenis publikasi"
        ));
        $data = response([
            "data" => $publikasi,
            "count" => count($publikasi)
        ]);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = response([
            "message" => "sukses tambah data"
        ]);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publikasi = array(array(
            'title' => "test title publikasi",
            'jenis_publikasi' => "test jenis publikasi"
        ), array(
            'title' => "test title publikasi",
            'jenis_publikasi' => "test jenis publikasi"
        ));
        $data = response([
            "data" => $publikasi[$id]
        ]);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = response([
            "message" => "sukses edit data"
        ]);
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = response([
            "message" => "sukses hapus data"
        ]);
        return $data;
    }
}
