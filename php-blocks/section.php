    <section>
<div class='p-text'>
     <h1 >Bitcoin Private Keys</h1>
        <p class='p-desc'>Hello everyone! On this site, you can explore all possible Bitcoin private keys and addresses of the Bitcoin network. We list private keys both in compressed and uncompressed WIF format. For each private key we display corresponding Bitcoin address, current balance, received balance and number of transactions. At the top of the list, you can find total balance and total received balance of all private keys/addresses listed on the page</p>
<div class="p-wrapper"><p>&#x26a0 This site is for educational purposes only! Nobody should use someones else's private key to steal bitcoins! Also it's recommended not to type or paste private keys because they could leak!</p>
</div></div></section> 	

<section class='section-table'>
	<div class="spisok" style="">
		<table class='main-table'>
			<?php
			$file=file('src\good.txt');


			// Can look $index of array
			//  foreach($file as $index => $val)
			// {
			// 	echo("<tr><td>$val</td></tr>");
			//  }



			$arr_length=count($file);
			echo ("<th>Private key</th><th>Public key</th>");
			for ($i=0; $i < $arr_length;$i++) {
				$file1=$file[$i];	 
				$file2=$file[$i+1];
				echo("<tr><td><a href='#' class='a-key'>$file1</a></td><td>$file2</td></tr>");
				$i=$i+1;
			}



//Выводит все троки файла в одну строку, не могу вывести 2 строки рядом 
// $file_handle = fopen("src\good.txt", "r");
// while (!feof($file_handle)) {
//    $line = fgets($file_handle);
//    echo ("<tr><td>$line</td></tr>");
// }
// fclose($file_handle);



			?>
		</table>
	</div>
</section>