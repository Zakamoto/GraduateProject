<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">


<?php

if($page==1)
$start = 1;
else if($page==2)
$start = 11;
else if($page==3)
$start = 21;
else if($page==4)
$start = 31;
else
$start = 41;

 ?>


<div class="header"><center><h1>ตาราง</h1></center></div>
<center><div class="content">
  <div id="table1" style="max-width: 1000px">
    <table class="ui celled table" style="width:100%">
      <thead  style="background-color:green;">
        <tr>
          <th>55555</th>
          <th>55555</th>
        </tr>
      </thead>

      <tbody>
        <?php for($i=$start;$i<($start+10);$i++){ ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $data[$i]; ?></td>
        </tr>
      <?php } ?>
      </tbody>

    </table>
  </div>
</div></center>
