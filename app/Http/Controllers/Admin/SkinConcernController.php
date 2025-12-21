<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkinConcern;
use Illuminate\Http\Request;
use Toastr;
use Image;
use File;
use Str;

class SkinConcernController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('permission:skinconcern-list|skinconcern-create|skinconcern-edit|skinconcern-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:skinconcern-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:skinconcern-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:skinconcern-delete', ['only' => ['destroy']]);
    }

    // index
    public function index()
    {
        $data = SkinConcern::all();
        return view('backEnd.skinconcerns.index', compact('data'));

    }

    // create
    public function create()
    {
        return view('backEnd.skinconcerns.create');
    }

    // store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:skin_types,name',
            'order' => 'nullable|integer',
            'status' => 'required',
        ]);

        // image with intervention 
        $image = $request->file('image');

        if ($image) {
            $name = time() . '-' . $image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));

            $uploadpath = public_path('uploads/skinConcern/');
            if (!file_exists($uploadpath)) {
                mkdir($uploadpath, 0775, true);
            }

            $imageUrl = $uploadpath . $name;

            $img = Image::make($image->getRealPath())->encode('webp', 90);

            $width = "";
            $height = "";
            $img->height() > $img->width() ? $width = null : $height = null;

            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($imageUrl);

            $imageUrl = 'public/uploads/skinConcern/' . $name;
        } else {
            $imageUrl = null;
        }

        $input = $request->all();
        $input['name'] = $request->name;
        $input['Slug'] = Str::slug($request->name);
        $input['order'] = $request->order;
        $input['status'] = $request->status;
        $input['image'] = $imageUrl;
        SkinConcern::create($input);
        if ($imageUrl) {
            Toastr::success('Skin Type created successfully');
        } else {
            Toastr::error('Skin Type created but image upload failed');
        }
        return redirect()->route('skinconcerns.index');
    }

    // edit
    public function edit($id)
    {
        $data = SkinConcern::find($id);
        return view('backEnd.skinconcerns.edit', compact('data'));
    }

    // update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:skin_types,name,' . $id,
            'order' => 'nullable|integer',
            'status' => 'required',
        ]);

        $data = SkinConcern::find($id);

        $image = $request->file('image');
        if ($image) {
            $name = time() . '-' . $image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));

            $uploadpath = public_path('uploads/skinConcern/');
            if (!file_exists($uploadpath)) {
                mkdir($uploadpath, 0775, true);
            }

            $imageUrl = $uploadpath . $name;

            $img = Image::make($image->getRealPath())->encode('webp', 90);

            $width = "";
            $height = "";
            $img->height() > $img->width() ? $width = null : $height = null;

            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($imageUrl);

            // only relative path save in DB
            $imageUrl = 'uploads/skinConcern/' . $name;

            if (File::exists(public_path(str_replace('public/', '', $data->image)))) {
                File::delete(public_path(str_replace('public/', '', $data->image)));
            }
        } else {
            $imageUrl = $data->image;
        }

        $input = $request->all();
        $input['name'] = $request->name;
        $input['Slug'] = Str::slug($request->name);
        $input['order'] = $request->order;
        $input['status'] = $request->status;
        $input['image'] = $imageUrl;
        $data->update($input);
        if ($imageUrl) {
            Toastr::success('Skin Type updated successfully');
        } else {
            Toastr::error('Skin Type updated but image upload failed');
        }
        return redirect()->route('skinconcerns.index');
    }

    // destroy
    public function destroy(Request $request)
    {
        $data = SkinConcern::find($request->hidden_id);
        if (File::exists(public_path($data->image))) {
            File::delete(public_path($data->image));
        }
        $data->delete();
        Toastr::success('Skin Type deleted successfully');
        return redirect()->route('skinConcerns.index');
    }

    // 
}
