<?php
$original = (
    (
        [title] => Speed
        [width] => 14
    )

    (
        [title] => Date
        [width] => 18
    )

    (
        [title] => Pineapple
        [width] => 30
     )
)

$new = array(
    'title' => 'Time',
    'width' => 10
);
array_splice($original,1,0,array('random_string')); // can be more items
$original[1] = $new;  // replaced with actual item

 ?>
