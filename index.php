<?php
    //Kết nối database
    include "connect.php";
    
    //Tạo database
    $sql = " CREATE DATABASE webtintuc"; 
    
    //Thực thi truy vấn
    if(mysqli_query($conn , $sql ) ){
        echo "Tạo database thành công";
    }
    else
    {
        echo " Tạo database thất bại";
    } 
    
    //Tạo bảng

        $sql = "CREATE TABLE categories(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        name VARCHAR(100) NOT NULL, 
        slug VARCHAR(100) NOT NULL
    )"; */

        $sql = "CREATE TABLE posts(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        title VARCHAR(500) NOT NULL,
        slug VARCHAR(500) NOT NULL,
        image VARCHAR(500) NOT NULL,
        content VARCHAR(10000) NOT NULL,
        categories_id INT(10) NOT NULL,
        user_id INT(10) NOT NULL,
        date DATE NOT NULL
    )"; 

    $sql = "CREATE TABLE account(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        username VARCHAR(30) NOT NULL,
        fullname VARCHAR(30) NOT NULL,
        gender VARCHAR(30) NOT NULL,
        birthday Date NOT NULL,
        role VARCHAR(30) NOT NULL,
        created_at date NOT NULL,
        updated_at date NOT NULL,
        status VARCHAR(50) NOT NULL

    )"; 
    
    $sql = "CREATE TABLE posts(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        title VARCHAR(500) NOT NULL,
        slug VARCHAR(500) NOT NULL,
        image VARCHAR(500) NOT NULL,
        content TEXT NOT NULL,
        categories_id INT(10) NOT NULL,
        user_id INT(10) NOT NULL,
        date DATE NOT NULL 
    )"; 

    $sql = "CREATE TABLE advertisement(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    title VARCHAR(500) NOT NULL,
    image VARCHAR(500) NOT NULL,
    link VARCHAR(500) NOT NULL
    )";
    
   $sql = "CREATE TABLE comment(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    content text NOT NULL,
    post_id INT(10) NOT NULL,
    account_id INT(10) NOT NULL,
    date_create DATE NOT NULL,
    date_submit DATE NOT NULL,
    date_fix DATE NOT NULL, 
    status VARCHAR(50) NOT NULL
    )"; 
    

    //Thực thi truy vấn
    if ($conn->query($sql) == TRUE ) {
        echo "tạo bảng thành công ";
    } else
    {
        echo"tạo bảng không thành công";
    }

/*  $id = '';
    $username = 'admin';
    $password = '123456';
    $level = '1';

    $sql = "INSERT INTO  userinfo (id, username, password, level) 
    VALUES('$id', '$username', '$password', '$level') ";

    mysqli_query($conn, $sql);
*/
?>