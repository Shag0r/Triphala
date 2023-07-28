<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        return view('Back.addproduct');
    }

    public function addproduct(Request $request)
    {
        $request->validate([
            'productImage' => 'required|mimes:png,jpg,jpeg',
        ]);

        $product = new Product();

        $imageName = "";
        if ($image = $request->file('productImage')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images/products', $imageName);
        }

        $product->productName = $request->input('productName');
        $product->productCatagory = $request->input('productCatagory');
        $product->productImage = $imageName;
        $product->productPrice = $request->input('productPrice');
        $product->productStatus = $request->input('productStatus');

        $product->save();

        return redirect()->route('manageproduct');
    }

    // Rest of the methods...
    // images/products

    // function for manage product 
    public function manageproduct(){
        $products= Product::all();
        return view('Back.manageproduct',compact('products'));
    }
    // for delete the product
    public function deleteproduct($id){
        $product= Product::find($id);
        $deleteOldImage='images/products/' . $product->productImage;
        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }
        $product->delete();
        return back();



    }
    // for active and inactive 
    public function activeproduct($id){
        $product= Product::find($id);
        $product->productStatus='1';
        $product->save();
        return redirect()->Route('manageproduct');

    }
    public function inactiveproduct($id){
        $product= Product::find($id);
        $product->productStatus='0';
        $product->save();
        return redirect()->Route('manageproduct');

    }
    // for the update product
    public function updateproduct($id){
        $product  = Product::find($id);
        return view('Back.updateproduct',compact('product'));
    }
    // 
    

    public function updatesaveproduct(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $product = Product::find($id);

        // Update product details
        $product->productName = $request->input('productName');
        $product->productCatagory = $request->input('productCatagory');
        $product->productPrice = $request->input('productPrice');
        $product->productStatus = $request->input('productStatus');

        // Check if a new image is uploaded
        if ($request->hasFile('productImage')) {
            // Delete the old image file
            $oldImagePath = public_path('images/products/' . $product->productImage);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Upload and save the new image
            $image = $request->file('productImage');
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images/products', $imageName);
            $product->productImage = $imageName;
        }

        // Save the updated product
        $product->save();

        return redirect()->route('manageproduct');
    }

}
