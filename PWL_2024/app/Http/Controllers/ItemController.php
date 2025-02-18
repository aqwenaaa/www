<?php

namespace App\Http\Controllers; //namespace untuk menandakan class ini ada di folder

use App\Models\Item; //mengimport class Item dari folder Models
use Illuminate\Http\Request; //mengimport class Request dari folder Http

class ItemController extends Controller //controller yang mengelola CRUD item inheritance dari class controller
{
    public function index() 
    {
        $items = Item::all(); //mengambil semua data item dari database
        return view('items.index', compact('items')); //menampilkan view index dari folder items dan mengirimkan data items ke views
    }

    public function create()
    {
        return view('items.create'); //menampilkan view create dari folder items
    }

    public function store(Request $request)
    { 
        $request->validate([ //validasi inputan form dan harus diisi semuanya karena kriterianya required, kalo kosong = error
            'name' => 'required',
            'description' => 'required',
        ]);
        //Item::create($request->all());
        //return redirect()->route('item.index');

        //Hanya masukkan atribut yang diizinkan
        Item::create($request->only(['name','description'])); //menyimpan ke database
        return redirect()->route('items.index')->with('success', 'item added successfully.'); //setelah menyimpan kembali ke page Item list dengan notif sukses
    }

    public function show(Item $item) //menampilkan detail item dengan parameter item
    {
        return view('item.show', compact('item')); //kirim data item ke view show
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item')); //menampilkan view edit dan mengirimkan data item agar bisa diedit di form
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([ //mengecek apakah inputan sudah diisi, kalau belum = error
            'name' => 'required',
            'description' => 'required',
        ]);

        //$item->update($request->all());
        //return redirect()->route('items.index');
        // Hanya masukkan atribut yang diizinkan
        $item->update($request->only(['name','description'])); //mengupdate data di database agar sesuai dengan inputan form
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
        } //setelah update kembali ke page Item list dengan notif sukses

        public function destroy(Item $item)
        {
            //return redirect()->route('items.index');
            $item->delete(); // hapus data dari database
            return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); //setelah hapus kembali ke page Item list dengan notif sukses
            }
        }
