<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    // Tambah produk baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|string' // Ubah validasi ini
        ]);

        $product = Product::create($validated);

        // return error massgae 
        if (!$product) {
            return response()->json(['message' => 'Gagal menambahkan produk'], 500);
        }
        return response()->json($product, 201);
    }

    // Tampilkan produk spesifik
    public function show(Product $product)
    {
        return response()->json($product);
    }

    // Update produk
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'category' => 'sometimes|string',
            'price' => 'sometimes|numeric|min:0',
            'stock' => 'sometimes|integer|min:0',
            'image' => 'nullable|string' // Ubah validasi ini
        ]);

        $product->update($validated);
        return response()->json($product);
    }

    // Hapus produk
    public function destroy(Product $product)
    {
        $product->delete();
        // do right return and return statsu code
        return response()->json(['message' => 'Produk berhasil dihapus'], 204);
    }
}