<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1>
    @if (session('success')) /*Menampilkan notif sukses jika item berhasil ditambahkan, diupdate, atau dihapus*/
    <p>{{ session('success') }}</p> /*Menampilkan notif sukses*/
    @endif 
    <a href="{{ route('items.create') }}">Add Item</a> /*Menampilkan link untuk menambahkan item baru*/
    <ul> @foreach ($items as $item) /*Menggunakan looping foreach untuk menampilkan data item*/
        <li>
            {{$item->name}}
            <a href = "{{route('items.edit',$item)}}">Edit</a> /*tombol link untuk mengedit item*/
            <form action="{{route('items.destroy',$item)}}" method="POST" style="display:inline"> /*Menggunakan form untuk menghapus item dengan metode delete*/
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
                </form>
        </li>
        @endforeach
        </ul>
    </body>
</html>
