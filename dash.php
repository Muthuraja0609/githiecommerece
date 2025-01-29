<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Furniture Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            padding: 12px 15px;
            text-decoration: none;
            font-size: 18px;
            display: block;
            border-bottom: 1px solid #575d63;
        }

        .sidebar a:hover {
            background-color: #007bff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-table th, .product-table td {
            text-align: center;
            padding: 10px;
        }

        .product-table th {
            background-color: #f8f9fa;
        }

        .btn-add-product {
            background-color: #28a745;
            color: white;
        }

        .btn-edit-product, .btn-delete-product {
            background-color: #ffc107;
            color: white;
        }

        .btn-delete-product {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center text-white">Furniture Shop</h2>
        <a href="#" class="active">Dashboard</a>
        <a href="#">Products</a>
        <a href="#">Sales</a>
        <a href="#">Customers</a>
        <a href="#">Orders</a>
        <a href="#">Settings</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <div class="header">
            <h2>Admin Dashboard</h2>
        </div>

        <!-- Product Management Section -->
        <div class="card">
            <div class="card-body">
                <h3>Product Management</h3>
                <button class="btn btn-add-product mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>
                <table class="table product-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Wooden Chair</td>
                            <td>$150</td>
                            <td>20</td>
                            <td>
                                <button class="btn btn-edit-product">Edit</button>
                                <button class="btn btn-delete-product">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Leather Sofa</td>
                            <td>$500</td>
                            <td>15</td>
                            <td>
                                <button class="btn btn-edit-product">Edit</button>
                                <button class="btn btn-delete-product">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sales Overview Section -->
        <div class="card mt-4">
            <div class="card-body">
                <h3>Sales Overview</h3>
                <p>Total Sales: $20,000</p>
                <p>Orders Completed: 150</p>
                <p>Pending Orders: 25</p>
            </div>
        </div>

        <!-- Add Product Modal -->
        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addProductForm">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Price</label>
                                <input type="number" class="form-control" id="productPrice" required>
                            </div>
                            <div class="mb-3">
                                <label for="productStock" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="productStock" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Add Product Modal form submission handler
        document.getElementById('addProductForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Retrieve form data
            const productName = document.getElementById('productName').value;
            const productPrice = document.getElementById('productPrice').value;
            const productStock = document.getElementById('productStock').value;

            // Add new row to product table
            const tableBody = document.querySelector('.product-table tbody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>New</td>
                <td>${productName}</td>
                <td>$${productPrice}</td>
                <td>${productStock}</td>
                <td>
                    <button class="btn btn-edit-product">Edit</button>
                    <button class="btn btn-delete-product">Delete</button>
                </td>
            `;
            tableBody.appendChild(newRow);

            // Clear form and close modal
            document.getElementById('addProductForm').reset();
            const modal = new bootstrap.Modal(document.getElementById('addProductModal'));
            modal.hide();
        });
    </script>

</body>
</html>
