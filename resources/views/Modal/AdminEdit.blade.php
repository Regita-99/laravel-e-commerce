<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Adjust modal positioning */
        #editModalBackground {
            /* Positioning */
            position: fixed;
            inset: 0;
            /* Appearance */
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
    
        #editModal {
            /* Positioning */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Appearance */
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            z-index: 100;
            /* Hide by default */
            opacity: 0;
            pointer-events: none;
            /* Animation */
            transition: opacity 0.3s ease;
        }
    
        /* Show modal and modal background */
        .modal-open {
            opacity: 1;
            pointer-events: auto;
        }
    </style>
    
</head>
<body>
    <!-- Modal Background -->
<div id="editModalBackground" class="fixed inset-0 bg-black opacity-50 z-50 hidden"></div>

<!-- Edit Modal -->
<div id="editModal" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-6 z-50 hidden">
    <h3 class="text-xl font-semibold mb-4">Edit Product</h3>
    <form id="editForm" action="{{ route('products.update') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="editProductId" name="id">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="editProductName">Product Name</label>
            <input type="text" id="editProductName" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="editProductPrice">Price</label>
            <input type="number" id="editProductPrice" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
    <button onclick="closeEditModal()" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 ml-2">Cancel</button>
</div>


</body>


</html>