<section class="second-section">
<?php 
echo "<div class='info-content'>";
if(isset($_GET['pbkey'])){

	echo "<h2>Address:</h2><br>";
	echo $_GET['addr'];
	echo '<h3 id="id-bt">    &#8383; ';echo $_GET['blc'];echo '    &#8383;  ';;echo $_GET['brec'];
	echo '   &#128423;';echo $_GET['tx']; echo "</h3>";
	echo "<br><h2>Private key :</h2><br>";
	echo $_GET['prkey'];
	echo "<br><h2>Public key uncompressed:</h2><br> ";
	echo $_GET['pbkey'];
echo "</div>";

}



 ?>

 </section>


