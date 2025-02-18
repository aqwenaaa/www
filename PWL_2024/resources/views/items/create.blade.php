<!DOCTYPE html>
<html>
    <head>
        <title>Add Item</title>
    </head>
    <body>
        <h1>Add Item</h1>
        <form action="{{ route('items.store') }}" method="POST"> /*Mengirim data ke route items.store menggunakan metode POST untuk menyimpan item baru.*/ 
            @csrf /*Untuk mengamankan form dari serangan CSRF.*/
            <label for="name">Name: </label> /*Membuat label untuk input field name.*/
            <input type="text" name="name" required> /*Membuat input field name yang wajib diisi!!!*/
            <br>
            <label for="description">Description: </label> /*Membuat label untuk input field description*/
            <textarea name="description" required></textarea> /*Membuat textarea untuk input field description dan wajiiib diisii/
            <br>
            <button type="submit">Add Item</button> /*Membuat button untuk menyimpan item baru*/
        </form>
        <a href="{{ route('items.index') }}">Back to List</a> /*Menampilkan link kembali ke page Item list*/
    </body>
</html>