<?php
$loremIpsum = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas aliquam, nemo atque neque veniam maxime tenetur tempore. Sapiente veniam, placeat sed asperiores quaerat incidunt consequatur exercitationem nesciunt architecto libero!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter : " . strlen($loremIpsum) . "<br>";
echo "Panjang Kata : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>
