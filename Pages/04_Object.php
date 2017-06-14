<?php
$OBJS = array();

function add($id, $name) {
    global $OBJS;
    $OBJS[$obj[$id]] = array(
        "id"    => $id,
        "name"  => $name,
        "email" => "{$id}@mysterymachine.com",
    );
}

add("scooby", "Scooby Doo");
add("velma",  "Velma Jones");

 
?>