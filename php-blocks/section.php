    <section>
<div class='p-text'>
     <h1 >Graduation project EPAM DevOps Spring 2018</h1>
        <p class='p-desc'>Hello everyone! On this site, you can explore all possible Bitcoin private keys and addresses of the Bitcoin network. We list private keys both in compressed and uncompressed WIF format. For each private key we display corresponding Bitcoin address, current balance, received balance and number of transactions. At the top of the list, you can find total balance and total received balance of all private keys/addresses listed on the page</p>
<div class="p-wrapper"><p>&#x26a0 This site is for educational purposes only! Nobody should use someones else's private key to steal bitcoins! Also it's recommended not to type or paste private keys because they could leak!</p>
</div></div></section> 	

<section class='section-table'>
	<div class="spisok" style="">
		<table class='main-table'>
			<?php
			$file=file('src/good.txt');


			$arr_length=count($file);
			echo ("<tr><th width='300'>Address</th><th>Public key</th><th>Private key</th><th width='75'>Balance</th><th width='85'>Received</th><th width='50'>TX</th></tr>");
			// не правильный вывод 
			for ($i=0; $i < $arr_length;$i++) {
				$tmp_string=explode(" ", $file[$i]);
				echo ("<tr><td>$tmp_string[0] <a class='a-key' href='https://blockchain.info/address/$tmp_string[0]'>&#128279;</a></td><td><a class='a-key ' href='second.php?tx=$tmp_string[5]&pbkey=$tmp_string[1]&addr=$tmp_string[0]&prkey=$tmp_string[2]&blc=$tmp_string[3]&brec=$tmp_string[4]'>$tmp_string[1]</a></td><td ><a class='private-class' href='#'>$tmp_string[2]</a></td><td class='bit-bal'>&#8383;  $tmp_string[3]</td><td class='bit-bal'>&#8383;  $tmp_string[4]</td><td class='tx-class'>&#128423;  $tmp_string[5]</td></tr>");
				}
			?>
		</table>
	</div>
</section>