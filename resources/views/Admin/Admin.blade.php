<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-blue-900 text-white w-64 space-y-6 py-7 px-2 flex flex-col">
            <!-- Logo -->
            <div class="text-center mb-4">
                <h1 class="text-3xl font-bold">Admin</h1>
            </div>
            <!-- Navigation -->
            <nav class="flex flex-col space-y-2">
                <a href="#" class="text-lg font-semibold hover:bg-blue-800 p-2 rounded">Produk</a>
            </nav>
        </div>
        <!-- Main content -->
        <div class="flex-1 p-10">
            <!-- Header with Frontend Button -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Produk</h2>
                <a href="#" class="text-lg font-semibold hover:bg-blue-800 p-2 rounded">Frontend</a>
            </div>

            <!-- Insert Image Form -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-xl font-semibold mb-4">Insert Product</h3>

                <form action="{{ route('savedata') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="flex space-x-4 mb-4">
                        <div class="w-1/2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product-name">Product Name</label>
                            <input type="text" id="product-name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price</label>
                            <input type="number" id="price" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image</label>
                        <input type="file" id="image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required onchange="displayFileName()">
                        <span id="file-name" class="block text-gray-600 mt-2"></span>
                    </div>
                    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">Upload</button>
                </form>
            </div>
            <!-- List of Images (Scrollable) -->
            <div class="bg-white rounded-lg shadow-md overflow-y-auto max-h-80">
                <h3 class="text-xl font-semibold px-6 pt-6 pb-4">List of Products</h3>
                <table class="w-full text-left table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Image</th>
                            <th class="px-4 py-2">Product Name</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item as $items)
                        <tr class="border-t">
                            <td class="px-4 py-2">
                                <img src="{{ asset('img/images/' . $items->image) }}" class="w-20 h-20 object-cover">
                            </td>
                            <td class="px-4 py-2">{{ $items->name }}</td>
                            <td class="px-4 py-2">{{ $items->price }}</td>
                            <td class=" flex px-4 py-2">
                                <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-700" onclick="openEditModal('{{ $items->id }}', '{{ $items->name }}', '{{ $items->price }}', '{{ $items->image }}')">Edit</button>
                                <form action="{{ route('products.delete', $items->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-md w-1/2">
            <h3 class="text-xl font-semibold mb-4">Edit Product</h3>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" id="edit-id" name="id">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-name">Product Name</label>
                    <input type="text" id="edit-name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-price">Price</label>
                    <input type="number" id="edit-price" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-image">Image</label>
                    <input type="file" id="edit-image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" onchange="displayEditFileName()">
                    <span id="edit-file-name" class="block text-gray-600 mt-2"></span>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="current-image">Current Image</label>
                    <span id="current-image" class="block text-gray-600 mt-2">{{ $product->image ?? 'No image uploaded' }}</span>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 mr-2" onclick="closeEditModal()">Cancel</button>
                    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(id, name, price, image) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-price').value = price;
            document.getElementById('current-image').innerText = image ? image : 'No image uploaded';
            document.getElementById('editForm').action = '/products/' + id;
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        function displayFileName() {
            var input = document.getElementById('image');
            var fileName = input.files[0] ? input.files[0].name : 'No file selected';
            document.getElementById('file-name').innerText = fileName;
        }

        function displayEditFileName() {
            var input = document.getElementById('edit-image');
            var fileName = input.files[0] ? input.files[0].name : 'No file selected';
            document.getElementById('edit-file-name').innerText = fileName;
        }
    </script>
</body>
</html>
