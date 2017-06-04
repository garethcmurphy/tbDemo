// <![CDATA[
<?php include 'header.php'?>
<?php include '02_Object.php'?>
<h1>Demo: <?php echo basename(__FILE__)?></h1>
<div id="main">
  <div>
    <label for="id">ID</label>
    <span id="id"><?php echo $OBJ["id"]?></span>
  </div>
  <div>
    <label for="name">Name</label>
    <span id="name"><?php echo $OBJ["name"]?></span>
  </div>
  <div>
  <label for="email">E-mail</label>
    <span id="email"><?php echo $OBJ["email"]?></span>
  </div>
</div>
<?php include 'footer.php'?>
// ]]>