<?php 
include 'header.php';
?>

<?php
$a = mysqli_query($conn,"select * from barang_laku");
?>

<div class="col-md-10">
	<h3>Selamat datang</h3>	


</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>