<?php
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('db', 'quan_ly_hoc_tap');
$connect=mysqli_connect(host,user,pass,db);
mysqli_set_charset($connect,'utf8');
if(!$connect){
  die('kết nối không thành công');
}

?>
 <table class="table" id="table">
    <thead>
      <tr>
        <th>stt</th>
        <th>Danh sách môn học</th>
        <th>Bài tập về nhà</th>
        <th>Bài tập lớn</th>
        <th>Điểm</th>
        <th>Xóa</th>
     
      </tr>
    </thead>

    <tbody>
    // <?php
    //$result=mysqli_query($connect,$sql);
    //if(mysqli_num_rows($result)>0){
        // $i=1;
        // while ($row=mysqli_fetch_assoc($result)) {

            //?>
       <tr>
        <td><?php echo $row['stt'];?></td>
        <td><?php echo $row['mon_hoc'];?></td>
        <td><?php echo $row['btvn'];?></td>
        <td><?php echo $row['btl'];?></td>
        <td><?php echo $row['diem'];?></td>
        <td><?php echo $row['xóa'];?></td>
        
         <!-- <td><a href="change.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit"></i> </a></td> -->
        <!-- <td><a href="delete.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash"></i> </a></td> -->
        <td><button style="border:0px;background-color: #fff; " onclick="suasv('')"><i class="fas fa-edit" style="color: red;"></i> </button></td>
        <td><button style="border:0px;background-color: #fff; " onclick="xoasv('')"><i class="fas fa-trash" style="color: red;"></i> </button></td>
      </tr>

    <?php
       $i++;
      }

    }
    ?>

     
      
    </tbody>
  </table>
