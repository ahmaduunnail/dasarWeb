<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Architecto provident nobis, 
            labore necessitatibus incidunt doloribus obcaecati! 
            Vel fugit quos perspiciatis dolor, ipsam, architecto optio, 
            minus rem distinctio quaerat numquam repellendus?";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
