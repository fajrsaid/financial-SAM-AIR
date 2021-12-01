<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;


class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::all();
        return view('pengajuan', ['pengajuans' => $pengajuan]);
    }

    public function create()
    {
        return view('pengajuan-insert');
    }

    public function store(Request $request)
    {
        $pengajuan = Pengajuan::all();
        $validateData = $request->validate([
            'nama_project'           => 'required',
            'tanggal_pengajuan'      => 'required',
            'total'                  => 'required',
            'id_status'       => 'required',
            'file'              => 'required|file|mimes:pdf',
        ]);
        if ($request->file()) {
            $fileModel = new Pengajuan();
            $namaFile = $request->file->getClientOriginalName();
            $path = $request->file('file')->storeAs('public', $namaFile);

            $fileModel->nama_project = $request->nama_project;
            $fileModel->id_status = $request->id_status;
            $fileModel->tanggal_pengajuan = $request->tanggal_pengajuan;
            $fileModel->total = $request->total;
            $fileModel->file = $namaFile;
            $fileModel->save();

            return redirect()->route('pengajuan.index')->with('pesan', 'Penambahan data berhasil');
        }
    }
    public function show($pengajuan)
    {
        $result = Pengajuan::findOrFail($pengajuan);
        return view('pengajuan-view', ['pengajuan' => $result]);
    }

    public function edit(Pengajuan $pengajuan)
    {
        return view('pengajuan-edit', ['pengajuan' => $pengajuan]);
    }

    public function update(Request $request, Pengajuan $pengajuan)
    {
        $validateData = $request->validate([
            'nama_project'           => 'required',
            'tanggal_pengajuan'      => 'required',
            'total'                  => 'required',
            'id_status'       => 'required',
            'file'            => ''
        ]);
        $validateData = $request->validate([
            'nama_project'           => 'required',
            'tanggal_pengajuan'      => 'required',
            'total'                  => 'required',
            'id_status'       => 'required',
            'file'              => '',
        ]);
        if ($request->hasFile('file')) {
            $fileModel = new Pengajuan();
            $namaFile = $request->file->getClientOriginalName();
            // $namaFiles = "/storage/".$namaFile;
            $request->file->storeAs('public', $namaFile);
        } else {
            $namaFile = $pengajuan->file;
        }
        $validateData['file'] = $namaFile;
        $pengajuan->update($validateData);


        // Pengajuan::where('id', $pengajuan->id)->update($validateData);

        return redirect()->route('pengajuan.show', ['pengajuan' => $pengajuan->id])
            ->with('pesan', "Update data berhasil");
    }

    public function destroy(Pengajuan $pengajuan)
    {
        $pengajuan->delete();
        return redirect()->route('pengajuan.index')
            ->with('pesan', "Data telah terhapus");
    }
}
