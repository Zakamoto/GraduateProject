$(document).ready(function(){

  $("#Report_temp").hide();
  $("#Report_moisture").hide();
  $("#table_test").hide();

    table_test(1);

    var moisture_yearall = $("#select_moisture_allyear").val();
    var moisture_year = $("#select_moisture_year").val();
    var moisture_month = $("#select_moisture_month").val();
    set_chart_moistureyear(moisture_yearall);
    set_chart_moisturemonth(moisture_year,moisture_month);
    set_chart_moisture3hour();

    var temp_yearall = $("#select_temp_allyear").val();
    var temp_year = $("#select_temp_year").val();
    var temp_month = $("#select_temp_month").val();
    set_chart_tempyear(temp_yearall);
    set_chart_tempmonth(temp_year,temp_month);
    set_chart_temp3hour();


    $("#change_page1").change(function(){
      var page = $("#change_page1").val();
      table_test(page);
    });



//start change of moisture group
  $("#select_moisture_allyear").change(function(){
    var year = $("#select_moisture_allyear").val();
    set_chart_moistureyear(year)
  });
  $("#select_moisture_year").change(function(){
    var year = $("#select_moisture_year").val();
    var month = $("#select_moisture_month").val();
    set_chart_moisturemonth(year,month);
  });
  $("#select_moisture_month").change(function(){
    var year = $("#select_moisture_year").val();
    var month = $("#select_moisture_month").val();
    set_chart_moisturemonth(year,month);
  });
//end change of moisture group

//start change of temp group
  $("#select_temp_allyear").change(function(){
    var year = $("#select_temp_allyear").val();
    set_chart_tempyear(year)
  });
  $("#select_temp_year").change(function(){
    var year = $("#select_temp_year").val();
    var month = $("#select_temp_month").val();
    set_chart_tempmonth(year,month);
  });
  $("#select_temp_month").change(function(){
    var year = $("#select_temp_year").val();
    var month = $("#select_temp_month").val();
    set_chart_tempmonth(year,month);
  });
//end change of temp group



  //แผนภูมิแสดงข้อมูลความชื้นรายปี
    function set_chart_moistureyear(year){
        $.post("./set_data_moisturechart.php",{
          type:1,
          year:year,
        },
        function(result){
          $("#chart_moisture_year").html(result);
        });
      }
  //แผนภูมความชื้นรายเดือน
    function set_chart_moisturemonth(year,month){
      $.post("./set_data_moisturechart.php",{
        type:2,
        year:year,
        month:month,
      },
      function(result){
       $("#chart_moisture_month").html(result);
      });
    }
  //แผนภูมิแสดงความชื้นปัจจุบัน
    function set_chart_moisture3hour(){
      $.post("./Chart/moisture/chart_moisture_3hour.php",function(result){
        $("#chart_moisture_3hour").html(result);
      });
    }




    //แผนภูมิแสดงข้อมูลอุณหภูมิรายปี
      function set_chart_tempyear(year){
          $.post("./set_data_tempchart.php",{
            type:1,
            year:year,
          },
          function(result){
            $("#chart_temp_year").html(result);
          });
        }
    //แผนภูมิอุณหภูมิรายเดือน
      function set_chart_tempmonth(year,month){
        $.post("./set_data_tempchart.php",{
          type:2,
          year:year,
          month:month,
        },
        function(result){
         $("#chart_temp_month").html(result);
        });
      }
    //แผนภูมิแสดงอุณหภูมิปัจจุบัน
      function set_chart_temp3hour(){
        $.post("./Chart/temp/chart_temp_3hour.php",function(result){
          $("#chart_temp_3hour").html(result);
        });
      }

      function table_test(page){
        $.post("./set_data_table.php",{
          page:page,
        },function(result){
          $("#table_content").html(result);
        });
      }




});
