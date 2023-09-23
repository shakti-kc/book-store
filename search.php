<?php
if(isset($_POST['search'])){
    $keyword=$_POST['keyword'];

?>
<h2>Result</h2>
<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT *FROM blog WHERE title LIKE '%$keyword%'");
if(mysqli_num_rows($query)>0){
    while ($row=mysqli_fetch_assoc($query)){
        ?>
        <a href="#"><?php echo $row['title'];?></a>
        <p><?php echo $row['content']; ?></p>
        <?php
    }
}
?>
<?php
}
?>