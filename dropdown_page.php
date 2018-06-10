<?php

$page = $_POST['page'];

for($i=1;$i<=($page);$i++){ ?>
  <option value="<?=$i?>"><?php echo $i;?></option>
<?php }


 ?>
