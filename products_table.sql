create table products_table (
	product_id INT,
	product_name VARCHAR(50),
	category VARCHAR(17),
	price DECIMAL(6,2),
	quantity INT,
	created_at DATE
);
INSERT INTO products_table (product_id, product_name, category, price, quantity, created_at) VALUES
(1, 'Smartphone', 'Electronics', 699.99, 40, '2024-01-10'),
(2, 'Laptop', 'Electronics', 1299.99, 20, '2024-01-11'),
(3, 'Wireless Speaker', 'Electronics', 149.99, 50, '2024-01-12'),
(4, 'T-Shirt', 'Clothing', 25.99, 100, '2024-01-13'),
(5, 'Jeans', 'Clothing', 49.99, 75, '2024-01-14'),
(6, 'Winter Jacket', 'Clothing', 99.99, 30, '2024-01-15'),
(7, 'Blender', 'Home & Kitchen', 59.99, 40, '2024-01-16'),
(8, 'Cookware Set', 'Home & Kitchen', 139.99, 25, '2024-01-17'),
(9, 'Air Fryer', 'Home & Kitchen', 89.99, 20, '2024-01-18'),
(10, 'Lipstick', 'Beauty', 19.99, 150, '2024-01-19'),
(11, 'Moisturizer', 'Beauty', 29.99, 80, '2024-01-20'),
(12, 'Perfume', 'Beauty', 59.99, 60, '2024-01-21'),
(13, 'Yoga Mat', 'Sports & Outdoors', 39.99, 100, '2024-01-22'),
(14, 'Tennis Racket', 'Sports & Outdoors', 89.99, 50, '2024-01-23'),
(15, 'Basketball', 'Sports & Outdoors', 29.99, 70, '2024-01-24'),
(16, 'Fiction Novel', 'Books', 14.99, 200, '2024-01-25'),
(17, 'Cookbook', 'Books', 29.99, 120, '2024-01-26'),
(18, 'Children’s Book', 'Books', 9.99, 150, '2024-01-27'),
(19, 'Toy Car', 'Toys', 19.99, 100, '2024-01-28'),
(20, 'Puzzle', 'Toys', 14.99, 80, '2024-01-29');
