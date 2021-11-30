<?php
    include "connect.php";

    $sql = " CREATE DATABASE QLSV"; 

    if(mysqli_query($conn , $sql ) ){
        echo "Tạo database thành công";
    }
    else
    {
        echo " Tạo database thất bại";
    }

    $sql = "CREATE TABLE class(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        tenlop VARCHAR(100) NOT NULL, 
        malop VARCHAR(100) NOT NULL,
        khoa VARCHAR(100) NOT NULL
    )";

    $sql = "CREATE TABLE students(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    tensinhvien VARCHAR(100) NOT NULL, 
    masinhvien VARCHAR(100) NOT NULL,
    malop VARCHAR(100) NOT NULL,
    diemToan FLOAT(2) NOT NULL,
    diemLy FLOAT(2) NOT NULL,
    diemHoa FLOAT(2) NOT NULL
)";

  if ($conn->query($sql) == TRUE ) {
    echo "tạo bảng thành công ";
} else
{
    echo"tạo bảng không thành công";
}


SELECT *
FROM class

INSERT INTO class
 VALUES('CL01','CNPMK64')
INSERT INTO class
 VALUES('CL02','CNPMK65')
INSERT INTO class
 VALUES('CL03','CNPMK66')

 NSERT INTO tblSINHVIEN
 VALUES('SV01',N'Phạm Việt Long','7/9/2000','Nam','CL01',10)
INSERT INTO tblSINHVIEN
 VALUES('SV02',N'Nguyễn Xuân Long','1/1/2000','Nam','CL01',1)
