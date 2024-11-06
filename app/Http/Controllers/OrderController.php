<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function detail(Request $request)
    {
        return view('user.order.detail');
    }
    
    public function create(Request $request)
    {
        return view('user.order.new', ['addresses' => auth()->user()->addresses]);
    }
    
    public function store(Request $request)
    {
        $alamat = json_decode($request->input('alamat'), true);
        $pengepul = json_decode($request->input('pengepul'), true);
        $cart = $request->input('cart');
        $selectedItemDetail = json_decode($request->input('selectedItemDetail'), true);
        $tipeAntar = $request->input('tipe_antar');
        $ongkir = $request->input('ongkir');
        $orderId = (string) Str::uuid();
        $order = Order::create([
            'id' => $orderId,
            'delivery_option' => $tipeAntar,
            'user_id' => auth()->id(),
            'agency_id' => $pengepul,
            'address_id' => $alamat['id'],
            'ship_date' => $request->input('ship_date'),
            'shipping_cost' => $tipeAntar == 'dijemput' ? $ongkir  : null
        ]);
        $items = [];
        // Proses file di dalam cart
        foreach ($cart as $key => $item) {
            $image;
            if ($request->hasFile("cart.$key.file")) {
                $file = $request->file("cart.$key.file");
                // Simpan file atau lakukan sesuatu dengan file
                // $path = $file->store('uploads');
                $extension = $file->getClientOriginalExtension();
                $filename = time();
                $file->storeAs('public/cover', $filename.'.'.$extension);
                $image = asset("storage/cover/$filename.$extension");
            }
            $barang = json_decode($item['barang']);
            array_push($items, [
                'order_id' => $orderId,
                'item_id' => $barang->id,
                'base_price' => $barang->base_price * $item['berat'],
                'top_price' => $barang->top_price * $item['berat'],
                'image' => $image,
                'amount' => $item['berat'],
            ]);
        }
        // $order->items()->attach($items);
        DB::table('item_order')->insert($items);
        return response()->json(['success' => true]);
    }
}
