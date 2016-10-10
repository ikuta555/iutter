<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>PHPのサンプル</title>
	</head>
	<body>
		<?php
		// 時間表時
			$date = date("Y/m/d H:i:s");
			print ("$date<br/>\n\t\t");

		// 条件分岐
			$a = 5;
			if($a==3){
				print("$a は 3 です。<br/>\n");
			}else{
				print("$a は 3 ではないです。<br/>\n");
			}

		// 繰り返し
			for($i=0;$i<10;$i++){
				print("$i ");
			}
			print("<br/>");

		// 関数
			function double_print($text){
				print($text.$text);
			}

			double_print("a");
			double_print("bc");
			print("<br/>");


		// 配列
			$b = array("one", "two", "three");
			$b[] = "four";
			$b[0] = "one?";
			print_r($b);
			print("<br/>");

		// 想定配列
			$c = array("one"=>"いち", "two"=>"に", "three"=>"さん", "four"=>"ふぉー");
			foreach($c as $key => $value);
			print_r($c);
			print("<br/>");

		// 正規表現
			// if(preg_match('/(-?)[0-9]+(\.[0-9]+)?/','q-6.83;',$m)){}

		?>
	</body>
</html>
