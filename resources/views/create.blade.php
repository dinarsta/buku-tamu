<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Tamu</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-[#F9F5FF] to-[#EFE0F9] text-gray-900">

    <header class="bg-white shadow-md py-6">
        <div class="container mx-auto">
            <img src="{{ asset('logo.png') }}" alt="Logo Perusahaan" class="mx-auto h-24">
        </div>
    </header>

    <div class="container mx-auto my-12">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl bg-white shadow-lg rounded-xl p-8 transform transition duration-500 hover:scale-105">
                <div class="guestbook-form">

                    <!-- Notifikasi sukses jika ada -->
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 relative"
                            role="alert">
                            <strong class="font-bold">Berhasil!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20"><path d="M14.348 14.849l-4.348-4.348-4.348 4.348-.849-.849 4.348-4.348-4.348-4.348.849-.849 4.348 4.348 4.348-4.348.849.849-4.348 4.348 4.348 4.348z"/></svg>
                            </span>
                        </div>
                    @endif

                    <!-- Validasi error jika ada -->
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('guestbook.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Kolom pertama -->
                            <div>
                                <div class="mb-6">
                                    <label for="name" class="block text-sm font-medium text-[#2E073F]">Nama Lengkap</label>
                                    <input type="text"
                                        class="mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#A367B1] focus:border-[#A367B1] p-3"
                                        id="name" name="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-[#2E073F]">Email</label>
                                    <input type="email"
                                        class="mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#A367B1] focus:border-[#A367B1] p-3"
                                        id="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="block text-sm font-medium text-[#2E073F]">Nomor Telepon</label>
                                    <input type="text"
                                        class="mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#A367B1] focus:border-[#A367B1] p-3"
                                        id="phone" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>

                            <!-- Kolom kedua -->
                            <div>
                                <div class="mb-6">
                                    <label for="instansi" class="block text-sm font-medium text-[#2E073F]">Asal Instansi</label>
                                    <input type="text"
                                        class="mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#A367B1] focus:border-[#A367B1] p-3"
                                        id="instansi" name="instansi" value="{{ old('instansi') }}">
                                </div>
                                <div class="mb-6">
                                    <label for="address" class="block text-sm font-medium text-[#2E073F]">Alamat</label>
                                    <input type="text"
                                        class="mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#A367B1] focus:border-[#A367B1] p-3"
                                        id="address" name="address" value="{{ old('address') }}">
                                </div>
                                <div class="mb-6">
                                    <label for="message" class="block text-sm font-medium text-[#2E073F]">Pesan</label>
                                    <textarea
                                        class="mt-2 block w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#A367B1] focus:border-[#A367B1] p-3"
                                        id="message" name="message" rows="4">{{ old('message') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full py-3 px-6 bg-[#2E073F] text-white font-medium rounded-lg shadow-lg hover:bg-[##2E073F] transition-transform transform hover:scale-105">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white text-center py-6">
        <p class="text-gray-600">&copy; 2024 Buku Tamu. All Rights Reserved.</p>
    </footer>

</body>

</html>
