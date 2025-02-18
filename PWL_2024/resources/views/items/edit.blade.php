<!DOCTYPE html>
<html>
    <head>
        <title>Edit Item</title>
    </head>
    <body>
        <h1>Edit Item</h1>
        <form action="{{ route('items.update'), $item }}" method="POST"> /*Mengirim data ke route items.update menggunakan metode PUT (mengganti data lama dgn yg baru) untuk menyimpan item baru*/
            @csrf /*Untuk mengamankan form */
            @method('PUT') /*metode PUT utk update data*/
            <label for="name">Name: </label>
            <input type="text" name="name" value="{{$item->name}}" required> /*Membuat input field name yang wajib diisi, menampilkan isi nilai lama dr item dalam form agar bisa diedit*/
            <br>
            <label for="description">Description: </label>
            <textarea name="description">{{$item->description}}</textarea> /*Membuat textarea untuk input field description*/
            <br>
            <button type="submit">Update Item</button>
        </form>
        <a href="{{ route('items.index') }}">Back to List</a>
    </body>
</html>
        