
<?php

$type = $_POST['type'];

if($type==1){?>
<option value="0">กรุณาเลือกปี</option>
<option value="1">2557</option>
<option value="2">2558</option>
<option value="3">2559</option>
<option value="4">2560</option>
<option value="5">2561</option>

<?php } else if($type==2) { ?>
<option value="0">กรุณาเลือเดือน</option>
<option value="1">มกราคม</option>
<option value="2">กุมภาพันธ์</option>
<option value="3">มีนาคม</option>
<option value="4">เมษายน</option>
<option value="5">พฤษภาคม</option>
<option value="6">มิถุนายน</option>
<option value="7">กรกฎาคม</option>
<option value="8">สิงหาคม</option>
<option value="9">กันยายน</option>
<option value="10">ตุลาคม</option>
<option value="11">พฤศจิกายน</option>
<option value="12">ธันวาคม</option>

<?php } else if($type==3) {
  $date_Of_Month = $_POST['month'];
  if($date_Of_Month==1||$date_Of_Month==3||$date_Of_Month==5||$date_Of_Month==7||$date_Of_Month==8||$date_Of_Month==10||$date_Of_Month==12) { ?>
    <option value="0">กรุณาเลือกวัน</option>
    <?php for($i=1;$i<=31;$i++){ ?>
      <option value="<?= $i ?>"><?php echo $i; ?></option>
    <?php }
   } else if($date_Of_Month==4||$date_Of_Month==6||$date_Of_Month==9||$date_Of_Month==11) { ?>
     <option value="0">กรุณาเลือกวัน</option>
    <?php for($i=1;$i<=30;$i++){ ?>
      <option value="<?= $i ?>"><?php echo $i; ?></option>
    <?php }
   } else { ?>
     <option value="0">กรุณาเลือกวัน</option>
    <?php for($i=1;$i<=28;$i++){ ?>
      <option value="<?= $i ?>"><?php echo $i; ?></option>
    <?php }
   }
} else { ?>
<option value="0">กรุณาเลือกเวลา</option>
<option value="1">1.00 น</option>
<option value="2">4.00 น</option>
<option value="3">7.00 น</option>
<option value="4">10.00 น</option>
<option value="5">13.00 น</option>
<option value="6">16.00 น</option>
<option value="7">19.00 น</option>
<option value="8">22.00 น</option>
<?php } ?>
