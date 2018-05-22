$(document).ready(function(){

  $("#Report").hide();

    var year = $("#select_year").val();
    var month = $("#select_month").val();
    set_chart_allyear();
    set_chart_month(year,month);



  $("#select_year_all").change(function(){
    var year = $("#select_year_all").val();
    set_chart_someyear(year)
  });

  $("#select_year").change(function(){
    var year = $("#select_year").val();
    var month = $("#select_month").val();
    set_chart_month(year,month);
  });
  $("#select_month").change(function(){
    var year = $("#select_year").val();
    var month = $("#select_month").val();
    set_chart_month(year,month);
  });



//แผนภูมิรายปีที่แสดงทันทีเมื่อเปิดหน้าเว็บตอนแรก
  function set_chart_allyear(){
    $.post("./Chart/temp/chart_temp_allyear.php",
    function(result){
      $("#chart_temp_year").html(result);
    });
  }

//แผนภูมิแสดงข้อมูลเฉลี่ยรายปี
  function set_chart_someyear(year){
    if($("select_year_all").val()==0)
      set_chart_allyear();
    else{
      console.log(5555555555);
      $.post("./set_data_chart.php",{
        type:1,
        year:year,
      },
      function(result){
        $("#chart_temp_year").html(result);
      });
      }
    }


  function set_chart_month(year,month){
    $.post("./set_data_chart.php",{
      type:2,                     //แผนภูมิอุณหภูมิรายเดือน
      year:year,
      month:month,
    },
    function(result){
     $("#chart_temp_month").html(result);
    });
  }




});
