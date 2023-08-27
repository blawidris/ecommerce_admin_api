<?php

namespace App\Http\Controllers;

use App\Http\Requests\PressPostRequest;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    private $data;

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $posts = Posts::orderBy('id', 'desc')->get();

        // Remove HTML tags from the body attribute of each post
        $posts->each(function ($post) {
            $post->body = strip_tags($post->body); // Remove HTML tags
            $post->body = Str::limit($post->body, 80); // Truncate to 80 characters
        });

        $this->data = [
            'pageTitle' => 'All Press Post',
            'user' => Auth::guard('admin')->user(),
            'posts' => $posts

        ];

        return view('pages.post.index', $this->data);
    }


    public function create()
    {
        $this->data = [
            'pageTitle' => 'Create press post',
            'post' => Posts::orderBy('id', 'desc')->get(),
            'user' => Auth::guard('admin')->user()

        ];

        return view('pages.post.create', $this->data);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:posts',
        ]);

        if ($validator->fails()) {

            return response()->json($this->sendMessage($validator->messages()->first(), 'error', false), 401);
        }

        $name = $request->title;
        $file = $request->file('avatar');

        $thumbnail = $request->hasFile('avatar') ? $this->upload($file, $name, 'post/') : '';

        $data = [
            'title' => $request->title,
            'image' => $thumbnail,
            'slug' => Str::slug($request->title),
            'body' => strip_tags($request->description),
            'status' => $request->status,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_description,
            'meta_keyword' => $request->meta_keywords,
            'created_by' => Auth::guard('admin')->user()->id

        ];

        if (!Posts::create($data)) {
            return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 401);
        }


        return response()->json($this->sendMessage("Post was created successfully"), 200);
    }

    public function edit($post, Posts $posts)
    {

        // dd($posts);

        $this->data = [
            'pageTitle' => 'Create press post',
            'post' => $posts->findOrFail($post),
            'user' => Auth::guard('admin')->user()

        ];

        return view('pages.post.update', $this->data);
    }


    public function update(Request $request, $id, Posts $posts)
    {
        if ($request->id) {


            $postData = $posts->findOrFail($id);

            // dd($postData);

            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
            ]);


            if ($validator->stopOnFirstFailure()->fails()) {

                return response()->json($this->sendMessage($validator->messages()->first(), 'error', false), 401);
            }

            $name = $request->title;
            $file = $request->file('avatar');
            $oldFile = $postData->image;

            $thumbnail = $request->hasFile('avatar') ? $this->upload($file, $name, 'post/', $oldFile) : '';

            $data = [
                'title' => $request->title,
                'body' => $request->description,
                'image' => $thumbnail,
                'slug' => Str::slug($request->title),
                'status' => $request->status,
                'meta_title' => $request->meta_title,
                'meta_desc' => $request->meta_description,
                'meta_keyword' => $request->meta_keywords,
                'created_by' => Auth::guard('admin')->user()->id
            ];

            if (!$posts->where('id', $id)->update($data)) {
                return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 401);
            }


            return response()->json($this->sendMessage("Post was updated successfully"), 200);
        }
    }



    public function destroy($post, Posts $posts)
    {
        if (!$posts->where('id', $post)->delete()) {
            return response()->json($this->sendMessage('An error occured, please try again', 'error', false), 401);
        };


        return response()->json($this->sendMessage("Post was deleted successfully"), 200);
    }
}
