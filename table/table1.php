<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">


<?php

  $start = $page;

 ?>

<html>
  <body>
<div class="header"><center><h1>ตาราง</h1></center></div>
<center>
  <div class="content">
  <div id="table1" style="max-width: 1000px">
    <table class="ui celled table" style="width:100%">
      <thead  style="background-color:green;">
        <tr>
          <th>จังหวัด</th>
          <th>ผลผลิต</th>
        </tr>
      </thead>

      <tbody>
        <?php for($i=$start;$i<sizeof($data);$i++){ ?>
            <tr>
              <td><?php echo $data[$i]['Name']; ?></td>
              <td><?php echo $data[$i]['Year']; ?></td>
            </tr>
      <?php } ?>
      </tbody>

    </table>
  </div>

</div></center>
        </body>
</html>
