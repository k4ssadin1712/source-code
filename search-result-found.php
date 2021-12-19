<?php include_once('./master_layout/header.php') ?>
<?php
      require "connect.php";
?> 

<?php
  $search = "";
  $limit = 15;
  $page = 1;
  if(isset($_REQUEST['p']) && (int)$_REQUEST['p'] >= 1) {
    $page = (int) $_REQUEST['p'];
  }
  if(isset($_GET['txtsearch'])){
    $search = $_GET['txtsearch'];
  } else {
    header('Location: index.php');
  }

  $offset = ($page - 1) * $limit;
  $sql = "SELECT * FROM posts WHERE title LIKE '%$search%' OR  content LIKE '%$search%'";
  $query = mysqli_query($conn ,$sql . " LIMIT $offset, $limit");
  $count = mysqli_num_rows(mysqli_query($conn ,$sql));
  $totalPage = ceil($count/$limit) ?? 0;
?>
  <div class="container"> 
    
    <!-- bage header start -->
    <div class="page-header">
      <h1>Kết quả tìm kiếm </h1>
      <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Tìm kiếm</a></li>
        <li class="active">Kết quả tìm kiếm</li>
      </ol>
    </div>
    <div>
    <?php while($row=mysqli_fetch_array($query)): ?>
      <ul>
        <li>
            <div class="news_item">
              <a class="news_item_avatar" title="<?php echo $row['title']; ?>" href="">

                <div class="news_item_img">
                  <img alt="<?php echo $row['title']; ?>" src="<?php echo $row['image']; ?>">
                </div>
              </a>
              <div class="news_item_content">
                <h3 class="news_item_title">
                  <a>
                    <?php echo $row['title']; ?>
                  </a>
                </h3>

                <a class="news_item_sapo" title="<?php echo $row['title']; ?>" href="">
                (Báo GENZ) - <?php echo $row['slug']; ?>
                </a>
              </div>
          </div>
        </li>
      </ul>
  
    
    </div>
    <!-- bage header end --> 
  <?php endwhile;?>  
  </div>
  

  <!-- data start -->
  
<?php 
  for ($i=1; $i <= $totalPage; $i++)
    if($i == $page) {
      echo "<a href = 'view_user.php?p=$i' style='font-size: 20px; color: red;'> $i </a>";
    } elseif($i==1){
      if($i!=$page)echo "<a href = 'view_user.php?p=$i'> $i </a>...";
      else echo "...<span style='font-size: 20px; color: red;'> $i</span>";
    }elseif($i==$totalPage){
      if($i!=$page)echo "...<a href = 'view_user.php?p=$i'> $i </a>";
      else echo "...<span style='font-size: 20px; color: red;'> $i</span>";
    }
?>  
  <?php  include_once('./master_layout/footer.php') ?>
<style>
  
.btn {
    outline: none;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 600;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 8px 12px;
    font-size: 13px;
    line-height: 1.3846154;
    border-radius: 4px;
    background-color: #e2e8f2;
    border-color: #e2e8f2;
    padding: 12px 20px;
    font-size: 17px;
    line-height: 23px;
  }

a{
  text-decoration: none;
}

</style>