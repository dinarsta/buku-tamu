<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Isi Buku Tamu</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guestbook.store') }}" method="POST">
        @csrf
        <label for="name">Nama Lengkap:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

        <label for="phone">Nomor Telepon:</label><br>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"><br>

        <label for="address">Alamat:</label><br>
        <input type="text" id="address" name="address" value="{{ old('address') }}"><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message">{{ old('message') }}</textarea><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
