<?php

$myarray = array(

  array("Ankit", "Ram", "Shyam"),
  array("Unnao", "Trichy", "Kanpur")
);

echo "<pre>";
print_r($myarray);
echo"</pre>";


$data = [
  'Game of Thrones' => ['Jainme Lannister' , 'Catelyn Stark', 'Cersei Lannister'],
  'Black Mirror' => ['Nanette Cole', 'Selma Telse', 'Karin Parke']
];

echo"<pre>";
print_r($data);
echo"</pre>";

echo '<h1> Famous TV Series and Actors';
foreach ($data as $series => $actors) {
  echo "<h2> $series </h2>";
  foreach ($actors as $actor) {
    echo "<div> $actor </div>" ;
  }
}
 ?>
