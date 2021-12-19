<?php  
    include_once('./master_layout/header.php')
    if(isset($_GET['id'])) && isset($_GET['categories_id'])){
      $id=$_GET['id'];
      $categories_id=$_GET['categori_id'];
      $dt->select("SELECT * FROM categories WHERE id='$categories_id'")
      $rn->$dt->fetch();
    } 
?>
  <!-- sticky header end --> 
  <!-- bage header Start -->
  <div class="container">
    <div class="page-header">
      <h1><?php echo $rn['name'] ?></h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pages</a></li>
        <li class="active">Section Topic Details</li>
      </ol>
    </div>
    <div id="content">
  <?php 
    $dt->select("SELECT * FROM posts WHERE id='$id' ORDER BY id DESC LIMIT 10");
    $r=$dt->fetch();
    echo"<h4>";
    echo $r['title'];
    echo"</h4>";
    echo"<h5>";
    echo $r['slug'];
    echo"</h5>";
    $image= $r['image'];
    if($r['image'] != NULL)
      echo"img src='$image' width='600'>";
    echo "<p align=justify>";
    echo $r['content'];
    echo "</p>";
    echo "<h4>Xem thêm</h4></br>";
    $dt->select("SELECT * FROM posts WHERE id='$id'")
    while ($row=$dt->fetch()){
      $id = $row['id'];
      $title = $row['title']
      echo "<a href='post-item-details.php?categories_id=$categories_id&id=$id'>$title</a>";
    }
  }
  ?>   
  </div>
  <!-- bage header End --> 
  <?php  include_once('./master_layout/section_footer.php') ?>
  <!-- Footer Start -->
  <?php
  }  
  include_once('./master_layout/footer.php') 
  ?>