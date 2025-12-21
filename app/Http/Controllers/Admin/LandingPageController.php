<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LandingPage;
use App\Models\Template;
use Illuminate\Support\Str;
use Toastr;

class LandingPageController extends Controller
{
    public function index()
    {
        $landingPages = LandingPage::with('template')->orderBy('created_at', 'desc')->get();
        return view('backEnd.landing-pages.index', compact('landingPages'));
    }

    public function create()
    {
        $templates = Template::active()->get();
        return view('backEnd.landing-pages.create', compact('templates'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|url',
            'template_id' => 'required|exists:templates,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $input = $request->except(['image']);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            try {
                $uploadPath = 'public/uploads/landing-pages/';
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                
                $image = $request->file('image');
                $name = time() . '-' . Str::slug($image->getClientOriginalName()) . '.webp';
                $imageUrl = $uploadPath . $name;
                
                // Process image
                $img = \Image::make($image->getRealPath());
                $img->resize(800, 600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->encode('webp', 85);
                $img->save($imageUrl);
                
                $input['image_url'] = $imageUrl;
            } catch (\Exception $e) {
                Toastr::error('Error', 'Image upload failed: ' . $e->getMessage());
                return redirect()->back()->withInput();
            }
        }

        // Generate slug
        $input['slug'] = Str::slug($request->title);
        
        // Set status
        $input['status'] = $request->has('status') ? 1 : 0;

        LandingPage::create($input);
        
        Toastr::success('Success', 'Landing page created successfully');
        return redirect()->route('landing-pages.index');
    }

    public function show($id)
    {
        $landingPage = LandingPage::with('template')->findOrFail($id);
        return view('backEnd.landing-pages.show', compact('landingPage'));
    }

    public function edit($id)
    {
        $landingPage = LandingPage::findOrFail($id);
        $templates = Template::active()->get();
        return view('backEnd.landing-pages.edit', compact('landingPage', 'templates'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|url',
            'template_id' => 'required|exists:templates,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $landingPage = LandingPage::findOrFail($id);
        $input = $request->except(['image']);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            try {
                // Delete old image
                if ($landingPage->image_url && file_exists($landingPage->image_url)) {
                    unlink($landingPage->image_url);
                }
                
                $uploadPath = 'public/uploads/landing-pages/';
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                
                $image = $request->file('image');
                $name = time() . '-' . Str::slug($image->getClientOriginalName()) . '.webp';
                $imageUrl = $uploadPath . $name;
                
                // Process image
                $img = \Image::make($image->getRealPath());
                $img->resize(800, 600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->encode('webp', 85);
                $img->save($imageUrl);
                
                $input['image_url'] = $imageUrl;
            } catch (\Exception $e) {
                Toastr::error('Error', 'Image upload failed: ' . $e->getMessage());
                return redirect()->back()->withInput();
            }
        }

        // Update slug if title changed
        if ($landingPage->title !== $request->title) {
            $input['slug'] = Str::slug($request->title);
        }
        
        // Set status
        $input['status'] = $request->has('status') ? 1 : 0;

        $landingPage->update($input);
        
        Toastr::success('Success', 'Landing page updated successfully');
        return redirect()->route('landing-pages.index');
    }

    public function destroy($id)
    {
        $landingPage = LandingPage::findOrFail($id);
        
        // Delete image
        if ($landingPage->image_url && file_exists($landingPage->image_url)) {
            unlink($landingPage->image_url);
        }
        
        $landingPage->delete();
        
        Toastr::success('Success', 'Landing page deleted successfully');
        return redirect()->route('landing-pages.index');
    }
}
