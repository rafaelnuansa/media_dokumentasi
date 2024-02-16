<?php

namespace App\Controllers;

use App\Models\DokumenFileModel;
use App\Models\DokumenModel;

class DokumenController extends BaseController
{
    public function index()
    {
        $model = new DokumenModel();

        // Fetch dokumen with pagination
        $data = [
            'dokumen' => $model->paginate(10), // 10 items per page
            'pager' => $model->pager,
        ];

        return view('dokumen/index', $data);
    }

    public function detail($slug)
    {
        $dokumenModel = new DokumenModel();
        $dokumenFileModel = new DokumenFileModel();

        // Fetch dokumen by slug
        $dokumen = $dokumenModel->where('slug', $slug)->first();

        if (!$dokumen) {
            // If dokumen not found, redirect back
            return redirect()->back()->with('error', 'Dokumen not found.');
        }

        // Fetch associated files for the dokumen
        $files = $dokumenFileModel->where('dokumen_id', $dokumen['id'])->findAll();
	

        return view('dokumen/detail', ['dokumen' => $dokumen, 'files' => $files]);
    }
}
