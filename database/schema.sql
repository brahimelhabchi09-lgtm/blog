
CREATE DATABASE blog ;
USE blog ; 
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('READER', 'AUTHOR', 'ADMIN') NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT NOT NULL
);
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
    cover_image VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
        ON DELETE CASCADE
);
CREATE TABLE article_category (
    article_id INT NOT NULL,
    category_id INT NOT NULL,
    PRIMARY KEY (article_id, category_id),
    FOREIGN KEY (article_id) REFERENCES articles(id)
        ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id)
        ON DELETE CASCADE
);
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    body TEXT NOT NULL,
    reader_id INT NOT NULL,
    article_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (reader_id) REFERENCES users(id)
        ON DELETE CASCADE,
    FOREIGN KEY (article_id) REFERENCES articles(id)
        ON DELETE CASCADE
);
CREATE TABLE likes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reader_id INT NOT NULL,
    article_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    UNIQUE (reader_id, article_id),
    FOREIGN KEY (reader_id) REFERENCES users(id)
        ON DELETE CASCADE,
    FOREIGN KEY (article_id) REFERENCES articles(id)
        ON DELETE CASCADE
);
