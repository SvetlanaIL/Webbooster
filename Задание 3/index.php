<?
$f_json = 'product.json';

$json = file_get_contents("$f_json");

$data = json_decode($json, true);

foreach($data as $value) {
	foreach ($value as $key => $index) {
		$img = $index['img'];
		$name = $index['name'];
		$price = $index['price'];

		$content = "<div class='container'><div class='main'><img src='$img'><div>$name</div><div class='price'>$price</div></div></div>";
		
		echo <<<HTML

		{$content}

		<style>
			.container {
				text-align: center;
				margin:40px;
				line-height: 2;
			}
			.price {
				font-weight: 900;
			}
		</style>
HTML;

	}
}

?>


