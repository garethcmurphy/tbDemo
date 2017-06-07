<?php
$OBJ = array(
    "id"    => "001",
    "name"  => "Scooby Doo",
    "email" => "scooby@mysterymachine.com",
);

function showObject($obj) {
?>
  <div>
    <label for="id">ID</label>
    <span id="id"><?php echo $obj["id"]?></span>
  </div>
  <div>
    <label for="name">Name</label>
    <span id="name"><?php echo $obj["name"]?></span>
  </div>
  <div>
  <label for="email">E-mail</label>
    <span id="email"><?php echo $obj["email"]?></span>
  </div>
<?php
}
?>