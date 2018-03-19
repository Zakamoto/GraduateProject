<div>
    <br/>
    <center>โปรดทำการลาก หมุดปัก บนแผนที่ไปยังตำแหน่งที่ต้องการ<br/>
    <img src="img_option/position.png" width="300px" height="300px"></center>
   <!-- <button id="enter_position" style="float:right;" class="btn btn-success" data-toggle="collapse" data-target="#Report">ยืนยันตำแหน่ง</button> !-->
    <button id="back" class="btn btn-info">ยกเลิก</button>

</div>

<script type="text/javascript">
$(function(){
$("#back").click(function(e){
  my_Marker.setVisible(false);
  e.preventDefault();
  var link = "search.html";
  $.get(link, function(res){
    $('#showDDD').html(res);
    });
  });
  var $elem = $('#Report');
  $('#enter_position').click(
    function (e) {
      $('html, body').animate({scrollTop: $elem.height()}, 800);
  });
});
  </script>
