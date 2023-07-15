<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{

    private $data = [];

    public function index()
    {

        $categories = Category::all();

        $this->data = [
            'pageTitle' => 'Categories',
            'categories' => $categories
        ];



        return view('pages.categories.index', $this->data);
    }


    public function create()
    {
        $data = [
            'pageTitle' => 'Add Category'
        ];

        return view('pages.categories.add', $data);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category_name' => 'required|max:255',
            'thumbnail' => '',
            'status' => 'required',
            'description' => ['nullable'],
            'published_date' => ['nullable', 'date'],
            'meta_title' => ['nullable'],
            'meta_description' => ['nullable'],
            'meta_keywords' => ['nullable'],
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first(), 'type' => 'error', 'success' => false], 400);
        }


        $file = $request->file('avatar');
        $name = $request->category_name;
        $thumbnail = $request->hasFile('avatar') ? $this->upload($file, $name, 'category/') : '';


        if (!$thumbnail['success']) {
            return response()->json(['message' => 'Error uploading your image', 'success' => false, 'type' => 'error'], 400);
        }

        // set form data
        $data = [
            'name' => $name,
            'status' => $request->status,
            'publish_date' => $request->publish_date,
            'meta_tag' => json_encode([
                'title' => $request->meta_title,
                'description' => $request->meta_description,
                'keywords' => $request->meta_keywords,
            ]),
            'thumbnail' => $thumbnail['name'],
        ];

        // save to database
        Category::create($data);


        return response()->json(['message' => 'Category created successfully', 'success' => true]);
    }


    public function show(string $id)
    {
        $data = [
            'pageTitle' => 'Category'
        ];

        return view('pages.categories.view', $data);
    }

    public function edit(string $slug)
    {

        $category_name =  str_replace('-', ' ', $slug);

        $category =  Category::where('name', $category_name)->first();

        $this->data = [
            'pageTitle' => 'Edit Category',
            'category' => $category
        ];

        return view('pages.categories.edit', $this->data);
    }

    public function update(Request $request)
    {

        $id = $request->id;

        if ($id) {

            $validator = Validator::make($request->all(), [
                'category_name' => 'required|max:255',
                'thumbnail' => '',
                'status' => 'required',
                'description' => ['nullable'],
                'published_date' => ['nullable', 'date'],
                'meta_title' => ['nullable'],
                'meta_description' => ['nullable'],
                'meta_keywords' => ['nullable'],
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            if ($validator->fails()) {
                return response()->json(['message' => $validator->messages()->first(), 'type' => 'error', 'success' => false], 400);
            }


            // existing data
            $currentData = Category::FindOrFail($id);

            // upload file
            $file = $request->file('avatar');
            $name = $request->category_name;
            $oldFile = $currentData->thumbnail;
            $thumbnail = $request->hasFile('avatar') ? $this->upload($file, $name, 'category/', $oldFile) : '';


            if (!$thumbnail['success']) {
                return response()->json(['message' => 'Error uploading your image', 'success' => false, 'type' => 'error'], 400);
            }

            // set form data
            $data = [
                'name' => $name,
                'status' => $request->status,
                'publish_date' => $request->publish_date,
                'meta_tag' => json_encode([
                    'title' => $request->meta_title,
                    'description' => $request->meta_description,
                    'keywords' => $request->meta_keywords,
                ]),
                'thumbnail' => $thumbnail['name'],
            ];
            Category::where('id', $id)->update($data);

            return response()->json(['message' => 'Your updated has been implemented', 'status' => 200]);
        }
    }


    public function destroy(string $id)
    {
        //
    }


    protected function upload($file, $name, $dir, $oldFile = '')
    {
        $ext = $file->getClientOriginalExtension();

        $fileDir = $dir . str_replace(' ', '_', strtolower($name));
        $newFile = time() . '.' . $ext;

        //check path is not empty
        if (!empty($oldFile) && Storage::path($oldFile)) {
            Storage::delete($oldFile);
        }


        if (!$file->storeAs("/$fileDir", $newFile)) {
            return ['success' => false];
        } else {

            $fileName = $fileDir . '/' . $newFile;
            return ['success' => true, 'name' => $fileName];
        }
    }
}
