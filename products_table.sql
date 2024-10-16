CREATE TABLE category_table (
    category_id INT PRIMARY KEY,
    category_name VARCHAR(50) NOT NULL,
    created_at DATE DEFAULT CURRENT_DATE
);

CREATE TABLE products_table (
    product_id INT PRIMARY KEY,
    product_name VARCHAR(50),
    category_id INT,
    price DECIMAL(6,2),
    quantity INT,
    created_at DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (category_id) REFERENCES category_table(category_id)
);
