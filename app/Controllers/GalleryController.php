<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\GalleryImageModel;

class GalleryController extends BaseController
{
	
    public function index()
    {
        $model = new GalleryModel();

        // Fetch galleries with pagination
        $data = [
            'galleries' => $model->paginate(10), // 10 items per page
            'pager' => $model->pager,
        ];

        return view('gallery/index', $data);
    }
	
    public function detail($slug)
    {
        $galleryModel = new GalleryModel();
        $galleryImageModel = new GalleryImageModel();
        // Fetch gallery by slug
        $gallery = $galleryModel->where('slug', $slug)->first();

        if (!$gallery) {
            // If gallery not found, redirect back
            return redirect()->back()->with('error', 'Gallery not found.');
        }

        // Fetch associated images for the gallery
        $images = $galleryImageModel->where('gallery_id', $gallery['id'])->findAll();

        return view('gallery/detail', ['gallery' => $gallery, 'images' => $images]);
    }
}
