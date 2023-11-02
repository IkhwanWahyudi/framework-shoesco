<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store(Request $request)
    {
        // Validasi input, termasuk validasi gambar
        $validatedData = $request->validate([
            'price' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'color' => 'required|string',
            'brand' => 'required|string',
            'size' => 'required|integer',
            'amount' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk gambar
        ]);

        $lastProduct = (int) Product::max('id');
        $newProductId = $lastProduct + 1; // ID produk terakhir + 1

        // Simpan gambar ke direktori yang diinginkan (public/assets/images/product)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $newProductId . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/product'), $imageName);

            // Update kolom image_path dengan nama file gambar
            $validatedData['image_path'] = $imageName;
        }

        Product::create($validatedData);

        // Redirect ke halaman yang sesuai, dan beri pesan sukses jika diperlukan
        return redirect()->route('admin')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('admin.edit', [
            'products' => Product::all()->where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'price' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'color' => 'required|string',
            'brand' => 'required|string',
            'size' => 'required|integer',
            'amount' => 'required|integer',
        ]);
        $pd = Product::findOrFail($id);
        $pd->update([
            'price' => $request->price,
            'name' => $request->name,
            'description' => $request->description,
            'color' => $request->color,
            'brand' => $request->brand,
            'size' => $request->size,
            'amount' => $request->amount,
        ]);
        return redirect()->route('admin')->with('success', '');
    }


    public function delete($id)
    {
        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Dapatkan nama file gambar yang terkait dengan produk
        $imagePath = $product->image_path;

        // Hapus file gambar dari sistem file jika ada
        if (!empty($imagePath)) {
            $imagePath = public_path('assets/images/product/') . $imagePath;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Hapus produk dari database
        $product->delete();

        return redirect()->route('admin')->with('success', 'Produk berhasil dihapus.');
    }
}
