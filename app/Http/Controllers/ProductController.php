<?php

namespace App\Http\Controllers;

use App\Enum\DiscountEnum;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    protected $discount = [
        1 => DiscountEnum::NO_DISCOUNT,
        2 => DiscountEnum::PERCENTAGE,
        3 => DiscountEnum::FIXED_PRICE,
    ];

    public function index()
    {

        $products = Product::orderBy('id', 'DESC')->get();

        $data = [
            'pageTitle' => 'Products',
            'products' => $products
        ];

        return view('pages.products.index', $data);
    }


    public function create()
    {

        $categories = Category::all();

        $data = [
            'pageTitle' => 'Add Product',
            'categories' => $categories
        ];

        return view('pages.products.add', $data);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:300',
            'category' => 'required|integer',
            'status' => 'required',
            'quantity' => 'integer',
            'price' => 'decimal:2',
            'tags' => 'array',
            'sku' => 'unique:products',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'max:2000',
            'publish_date' => ['date'],
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first(), 'type' => 'error', 'success' => false], 400);
        }


        // return response()->json($request->media);

        try {

            // upload image to db
            $name = $request->product_name;
            $file = $request->file('avatar');
            $thumbnail = $request->hasFile('avatar') ? $this->upload($file, $name, 'product/') : '';

            // if (!$thumbnail['success']) {
            //     return response()->json($this->sendMessage($thumbnail['message'], 'error', false));
            // }

            $sku = $request->sku ?? $this->random_number(10);

            //upload images

            $data = [
                'title' => $request->product_name,
                'category_id' => $request->category,
                'status' => $request->status,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'thumbnail' => $thumbnail,
                'discount' => json_encode(['value' => $request->discount_option, 'name' => $this->discount[$request->discount_option]]),
                'tags' => json_encode($request->product_tags),
                'variantions' => json_encode(
                    $request->product_options
                ),
                'sku' => $sku,
                'slug' => str_replace(' ', '-', strtolower($name)),
                'meta_tag' => json_encode([
                    'title' => $request->meta_title,
                    'description' => $request->meta_description,
                    'keywords' => $request->meta_keyword,
                ]),
                'publish_date' => $request->publish_date,
                'media' => json_encode($request->media)
            ];

            if (!Product::create($data)) {
                throw new Exception('Sorry, looks like there are some errors detected, please try again');
            }


            return response()->json($this->sendMessage('Product added successfully', 'success', true));
        } catch (Exception $e) {
            return response()->json($this->sendMessage($e->getMessage(), 'error', false), 400);
        }
    }


    public function show(string $id)
    {


        $product = Product::findOrFail($id);
        $categories = Category::orderBy('id', 'desc');

        $data = [
            'pageTitle' => 'Show Product',
            'product' => $product,
            'categories' => $categories
        ];

        return view('pages.products.view', $data);
    }


    public function edit(string $slug, int $id)
    {

        // dd($id);

        $product = Product::findOrFail($id);
        $categories = Category::orderBy('id', 'desc')->get();

        $data = [
            'pageTitle' => 'Edit Product',
            'product' => $product,
            'categories' => $categories
        ];

        return view('pages.products.edit', $data);
    }


    public function update(Request $request)
    {

        return response()->json($request);

        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:300',
            'category' => 'required|integer',
            'status' => 'required',
            'quantity' => 'integer',
            'price' => 'decimal:2',
            // 'tags' => 'json',
            // 'sku' => 'unique:products',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'max:2000',
            'publish_date' => ['date'],
        ]);

        $prod_id = $request->id;


        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first(), 'type' => 'error', 'success' => false], 400);
        }


        try {

            // get exising product
            $product = Product::FindOrFail($prod_id);

            // upload image to db
            $name = $request->product_name;
            $file = $request->file('avatar');
            $oldFile = $product->thumbnail;

            //  upload image
            $thumbnail = $request->hasFile('avatar') ? $this->upload($file, $name, 'product/', $oldFile) : '';

            $data = [
                'title' => $request->product_name,
                'category_id' => $request->category,
                'status' => $request->status,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'thumbnail' => $thumbnail,
                'discount' => json_encode(['value' => $request->discount_option, 'name' => $this->discount[$request->discount_option]]),
                'tags' => json_encode($request->product_tags),
                'variantions' => json_encode(
                    $request->product_options
                ),
                'sku' => $request->sku,
                'slug' => str_replace(
                    ' ',
                    '-',
                    strtolower($name)
                ),
                'meta_tag' => json_encode([
                    'title' => $request->meta_title,
                    'description' => $request->meta_description,
                    'keywords' => $request->meta_keyword,
                ]),
                'publish_date' => $request->publish_date,
                'media' => json_encode($request->media)
            ];

            if (!Product::where('id', $prod_id)->update($data)) {
                throw new Exception('Sorry, looks like there are some errors detected, please try again');
            }


            return response()->json($this->sendMessage('Product added successfully', 'success', true));
        } catch (Exception $e) {
            return response()->json($this->sendMessage($e->getMessage(), 'error', false), 400);
        }
    }


    public function destroy(Request $req)
    {

        try {
            $id = $req->id;

            // dd($req);

            if (!$id) {
                return response()->json($this->sendMessage('Product id is missing', 'error', false), 400);
            }

            if (!Product::where('id', $id)->delete($id)) {
                throw new Exception('Sorry, looks like there are some errors detected, please try again');
            }

            return response()->json($this->sendMessage('Product deleted successfully', 'error', true));
        } catch (Exception $e) {
            response()->json($this->sendMessage($e->getMessage(), 'error', false), 400);
        }
    }

    public function uploadMedia(Request $req)
    {

        // $validator = Validator::make($request)


        $media = array();

        if (!$req->hasFile('file')) {
            return response()->json($this->sendMessage('Media item is required', 'error', false), 400);
        }


        $files = $req->file('file');

        $media['name'] = array();

        foreach ($files as $file) {


            if (!$thumbnail =  $this->upload($file, 'media', 'product/')) {
                return response()->json($this->sendMessage('Unable to upload image', 'error', false), 400);
            }

            array_push(
                $media['name'],
                $thumbnail
            );
        }

        return response()->json(['media' => $media], 200);
    }
}
