<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-center text-gray-800">Add New Item</h2>
      <form class="mt-4">
        <!-- Item Name -->
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="item_name"
          >
            Item Name
          </label>
          <input
            id="item_name"
            type="text"
            placeholder="Enter item name"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <!-- Description -->
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="description"
          >
            Description
          </label>
          <textarea
            id="description"
            rows="3"
            placeholder="Enter item description"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          ></textarea>
        </div>

        <!-- Price -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Price ($)
          </label>
          <input
            id="price"
            type="number"
            placeholder="Enter price"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <!-- Category -->
        <div class="mb-4">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="category"
          >
            Category
          </label>
          <select
            id="category"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          >
            <option>Select category</option>
            <option>Electronics</option>
            <option>Clothing</option>
            <option>Accessories</option>
            <option>Books</option>
          </select>
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
            Upload Image
          </label>
          <input
            id="image"
            type="file"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
        </div>

        <!-- Submit Button -->
        <button
          type="submit"
          class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg"
        >
          Add Item
        </button>
      </form>
    </div>
  </body>
</html>
