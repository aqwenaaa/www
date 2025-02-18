<!DOCTYPE html>
<html>
    <head>
        <title>Item Details</title>
    </head>
    <body>
        <h1>Items</h1>
        @if (session('success')) /*Hampir sama dengan index.blade.php tapi ini lebih fokus ke detail tampilan per item */
            <p>{{ session('success') }}</p>
        @endif
        <a href="{{ route('items.create') }}">Add Item</a>
        <ul>
            @foreach ($items as $item) /*Menggunakan looping foreach untuk menampilkan data item*/
            <li>
                {{$item->name}}
                <a href = "{{route('items.edit',$item)}}">Edit</a> */tombol link untuk mengedit item*/
                <form action="{{route('items.destroy',$item)}}" method="POST" style="display:inline"> /*Menggunakan action untuk menghapus item dengan metode delete*/
                    @csrf
                    @method('DELETE') 
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
