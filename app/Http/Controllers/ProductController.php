<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Package;
use App\Models\PackageCatalog;
use App\Models\PackageFile;
use App\Models\PackageLocation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $packages = Package::with("category")->get();
        return view('product.index', compact('packages'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('product.create', compact('categories'));
    }


    public function store(StoreProductRequest $request)
    {
        $payload = $request->validated();
        DB::beginTransaction();
        try {
            $package = Package::create([
                'title' => $payload['title'],
                'desc' => $payload['description'],
                'active' => 1,
                'status' => 'LISTING',
                'price' => $payload['price'],
                "categories_id" => $payload['category_id'],
                "user_id" => auth()->user()->id
            ]);

            if ($package) {
                if ($request->file('images')) {
                    $file_names = [];
                    $googleDriveDisk = Storage::disk('google');
                    foreach ($request->file('images') as $image) {
                        $file_name = $image->getClientOriginalName();
                        $path  = $googleDriveDisk->putFileAs('assets', $image, $file_name);
                        // $url = $googleDriveDisk->get($path);
                        $file_names[] = $file_name;
                    }
                    PackageFile::create([
                        'package_id' => $package->id,
                        'image' => $file_names
                    ]);
                }

                PackageLocation::create([
                    'package_id' => $package->id,
                    'country' => $payload['country'],
                    'city' => $payload['city'],
                    'address' => $payload['address']
                ]);
                PackageCatalog::create([
                    'package_id' => $package->id,
                    'title' => $payload['catalog_title'],
                    'desc' => $payload['catalog_description'] ?? null,
                    'discount_base' => $payload['discount'] ?? 0,
                    'is_price_base' => $payload['is_price_base'] ?? 0,
                    'price_base' => $payload['price_base'] ?? 0,
                    'value_discount' => $payload['value_discount'] ?? null,
                    'available_day' => $payload['available_days']
                ]);
            }
            DB::commit();
            return back()->with('toast_success', 'Successfully created product');
        } catch (\Exception $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
