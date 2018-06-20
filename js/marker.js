$(document).ready(function(){
  $("#Report").hide();
//  $("#Report_temp").hide();
//  $("#Report_moisture").hide();
  $("#table_test").hide();
  $("#area_result").hide();
  $("#Display_rice").hide();
  $("#pop_alert").hide();
  //console.log(radioValue);
  /*setInterval(function()
  { ObserveInputValue($('#plantData').val());
  }, 100);
  */


  get_place();
  set_chart_moisture3hour();
  set_chart_temp3hour();
  area_table();
  document.getElementById("tab_1").click();


  var lastSelected = "0";
  var setFirstData = false;
  var num_page = 1;
  var p_rice=1;
  var p_cane=0;
  var p_rubber=0;
  var p_plam=0;
  var p_cassava=0;
    $(function () {
        //if you have any radio selected by default
        lastSelected = $('[name="plant"]:checked').val();
        if (lastSelected = "1")
        {
          rice_chart();
          dropdown_table(8);
          table_rice("0");
          table_rice_averge("ข้าว");
        }
        setFirstData = true;
    });
    $(document).on('click', '[name="plant"]', function () {
        if (lastSelected != $(this).val() && typeof lastSelected != "undefined") {
          //alert($(this).val());
          if (lastSelected != "0" || lastSelected != "1") {
            switch($(this).val()) {
              case "1":
                num_page = 1;
                p_rice=1;
                p_cane=0;
                p_rubber=0;
                p_plam=0;
                p_cassava=0;
                $("#num_page").html("page 1");
                rice_chart();
                dropdown_table(8);
                table_rice("0");
                table_rice_averge("ข้าว");
                  break;
                  case "4":
                      num_page = 1;
                      p_rice=0;
                      p_cane=0;
                      p_rubber=1;
                      p_plam=0;
                      p_cassava=0;
                      $("#num_page").html("page 1");
                      rubber_chart();
                      dropdown_table(7);
                      table_rubber("0");
                      table_rice_averge("ยางพารา");
                      break;
                  case "5":
                      num_page = 1;
                      p_rice=0;
                      p_cane=0;
                      p_rubber=0;
                      p_plam=0;
                      p_cassava=1;
                      $("#num_page").html("page 1");
                      cassava_chart();
                      dropdown_table(5);
                      table_cassava("0");
                      table_rice_averge("มันสำปะหลัง");
                      break;
                  case "2":
                      num_page = 1;
                      p_rice=0;
                      p_cane=1;
                      p_rubber=0;
                      p_plam=0;
                      p_cassava=0;
                      $("#num_page").html("page 1");
                      sugarcane_chart();
                      dropdown_table(5);
                      table_sugarcane("0");
                      table_rice_averge("อ้อย");
                      break;
                  case "3":
                      num_page = 1;
                      p_rice=0;
                      p_cane=0;
                      p_rubber=0;
                      p_plam=1;
                      p_cassava=0;
                      $("#num_page").html("page 1");
                      oilpalm_chart();
                      dropdown_table(7);
                      table_oilpalm("0");
                      table_rice_averge("ปาล์มน้ำมัน");
                      break;
                }
              }
                //alert("radio box with value " + $('[name="plant"][value="' + lastSelected + '"]').val() + " was deselected");
            }
            lastSelected = $(this).val();
        });




    function rice_chart(){
        $.post("./Chart/plant/rice_chart.php",function(result){
          $("#chart_content").html(result);
        });
    }
    function area_table(){
        $.post("./table/area_table.php",function(result){
          $("#area_table").html(result);
        });
    }
    function rubber_chart(){
      //console.log("runber_charat used");
      $.post("./Chart/plant/rubber_chart.php",function(result){
        console.log("chart rubber");
        $("#chart_content").html(result);
      });
    }
    function cassava_chart(){
    //console.log(radioValue);
    $.post("./Chart/plant/cassava_chart.php",function(result){
      console.log("cassava chart");
      $("#chart_content").html(result);
    });
  }
    function oilpalm_chart(){
    //console.log(radioValue);
    $.post("./Chart/plant/oilpalm_chart.php",function(result){
      console.log("oilpalm chart");
      $("#chart_content").html(result);
      });
    }
    function sugarcane_chart(){
    //console.log(radioValue);
    $.post("./Chart/plant/sugarcane_chart.php",function(result){
      console.log("sugarcane chart");
      $("#chart_content").html(result);
      });
    }

function table_rice_averge(typeInput){
  $.post("./table/table_plant_averge/table_rice_averge.php",
  {
    type:typeInput,
  },function(result){
    $("#other_content").html(result);
  });
}




//ตาราง
$("#F_page").click(function(){

    if(p_rice==1){
      switch (num_page) {
        case 1:
            num_page++;
            table_rice(num_page);
            $("#num_page").html("page 2");
            break;
        case 2:
            num_page++;
            table_rice(num_page);
            $("#num_page").html("page 3");
            break;
        case 3:
            num_page++;
            table_rice(num_page);
            $("#num_page").html("page 4");
            break;
        case 4:
            num_page++;
            table_rice(num_page);
            $("#num_page").html("page 5");
            break;
        case 5:
            num_page++;
            table_rice(num_page);
            $("#num_page").html("page 6");
            break;
        case 6:
            num_page++;
            table_rice(num_page);
            $("#num_page").html("page 7");
            break;
        case 7:
            num_page=8;
            table_rice(num_page);
            $("#num_page").html("page 8");
            break;
      }
    }else if(p_cane==1){
      switch (num_page) {
        case 1:
            num_page++;
            table_sugarcane(num_page);
            $("#num_page").html("page 2");
            break;
        case 2:
            num_page++;
            table_sugarcane(num_page);
            $("#num_page").html("page 3");
            break;
        case 3:
            num_page++;
            table_sugarcane(num_page);
            $("#num_page").html("page 4");
            break;
        case 4:
            num_page=5;
            table_sugarcane(num_page);
            $("#num_page").html("page 5");
            break;
      }
    }else if(p_rubber==1){
      switch (num_page) {
        case 1:
            num_page++;
            table_rubber(num_page);
            $("#num_page").html("page 2");
            break;
        case 2:
            num_page++;
            table_rubber(num_page);
            $("#num_page").html("page 3");
            break;
        case 3:
            num_page++;
            table_rubber(num_page);
            $("#num_page").html("page 4");
            break;
        case 4:
            num_page++;
            table_rubber(num_page);
            $("#num_page").html("page 5");
            break;
        case 5:
            num_page++;
            table_rubber(num_page);
            $("#num_page").html("page 6");
            break;
        case 6:
            num_page=7;
            table_rubber(num_page);
            $("#num_page").html("page 7");
            break;
      }
    }else if(p_plam==1){
      switch (num_page) {
        case 1:
            num_page++;
            table_oilpalm(num_page);
            $("#num_page").html("page 2");
            break;
        case 2:
            num_page++;
            table_oilpalm(num_page);
            $("#num_page").html("page 3");
            break;
        case 3:
            num_page++;
            table_oilpalm(num_page);
            $("#num_page").html("page 4");
            break;
        case 4:
            num_page++;
            table_oilpalm(num_page);
            $("#num_page").html("page 5");
            break;
        case 5:
            num_page++;
            table_oilpalm(num_page);
            $("#num_page").html("page 6");
            break;
        case 6:
            num_page=7;
            table_oilpalm(num_page);
            $("#num_page").html("page 7");
            break;
      }
    }else if(p_cassava==1){
      switch (num_page) {
        case 1:
            num_page++;
            table_cassava(num_page);
            $("#num_page").html("page 2");
            break;
        case 2:
            num_page++;
            table_cassava(num_page);
            $("#num_page").html("page 3");
            break;
        case 3:
            num_page++;
            table_cassava(num_page);
            $("#num_page").html("page 4");
            break;
        case 4:
            num_page=5;
            table_cassava(num_page);
            $("#num_page").html("page 5");
            break;
          }
        }
});

$("#B_page").click(function(){
  if(p_rice==1){
    switch (num_page) {
      case 2:
          num_page=1;
          table_rice(num_page);
          $("#num_page").html("page 1");
          break;
      case 3:
          num_page--;
          table_rice(num_page);
          $("#num_page").html("page 2");
          break;
      case 4:
          num_page--;
          table_rice(num_page);
          $("#num_page").html("page 3");
          break;
      case 5:
          num_page--;
          table_rice(num_page);
          $("#num_page").html("page 4");
          break;
      case 6:
          num_page--;
          table_rice(num_page);
          $("#num_page").html("page 5");
          break;
      case 7:
          num_page--;
          table_rice(num_page);
          $("#num_page").html("page 6");
          break;
      case 8:
          num_page--;
          table_rice(num_page);
          $("#num_page").html("page 7");
          break;
      }
    }else if(p_cane==1){
      switch (num_page) {
        case 2:
            num_page=1;
            table_sugarcane(num_page);
            $("#num_page").html("page 1");
            break;
        case 3:
            num_page--;
            table_sugarcane(num_page);
            $("#num_page").html("page 2");
            break;
        case 4:
            num_page--;
            table_sugarcane(num_page);
            $("#num_page").html("page 3");
            break;
        case 5:
            num_page--;
            table_sugarcane(num_page);
            $("#num_page").html("page 4");
            break;
        case 6:
            num_page--;
            table_sugarcane(num_page);
            $("#num_page").html("page 5");
            break;
        case 7:
            num_page--;
            table_sugarcane(num_page);
            $("#num_page").html("page 6");
            break;
        case 8:
            num_page--;
            table_sugarcane(num_page);
            $("#num_page").html("page 7");
            break;
        }
    }else if(p_rubber==1){
      switch (num_page) {
        case 2:
            num_page=1;
            table_rubber(num_page);
            $("#num_page").html("page 1");
            break;
        case 3:
            num_page--;
            table_rubber(num_page);
            $("#num_page").html("page 2");
            break;
        case 4:
            num_page--;
            table_rubber(num_page);
            $("#num_page").html("page 3");
            break;
        case 5:
            num_page--;
            table_rubber(num_page);
            $("#num_page").html("page 4");
            break;
        case 6:
            num_page--;
            table_rubber(num_page);
            $("#num_page").html("page 5");
            break;
        case 7:
            num_page--;
            table_rubber(num_page);
            $("#num_page").html("page 6");
            break;
        case 8:
            num_page--;
            table_rubber(num_page);
            $("#num_page").html("page 7");
            break;
        }
    }else if(p_plam==1){
      switch (num_page) {
        case 2:
            num_page=1;
            table_oilpalm(num_page);
            $("#num_page").html("page 1");
            break;
        case 3:
            num_page--;
            table_oilpalm(num_page);
            $("#num_page").html("page 2");
            break;
        case 4:
            num_page--;
            table_oilpalm(num_page);
            $("#num_page").html("page 3");
            break;
        case 5:
            num_page--;
            table_oilpalm(num_page);
            $("#num_page").html("page 4");
            break;
        case 6:
            num_page--;
            table_oilpalm(num_page);
            $("#num_page").html("page 5");
            break;
        case 7:
            num_page--;
            table_oilpalm(num_page);
            $("#num_page").html("page 6");
            break;
        case 8:
            num_page--;
            table_oilpalm(num_page);
            $("#num_page").html("page 7");
            break;
        }
    }else if(p_cassava==1){
      switch (num_page) {
        case 2:
            num_page=1;
            table_cassava(num_page);
            $("#num_page").html("page 1");
            break;
        case 3:
            num_page--;
            table_cassava(num_page);
            $("#num_page").html("page 2");
            break;
        case 4:
            num_page--;
            table_cassava(num_page);
            $("#num_page").html("page 3");
            break;
        case 5:
            num_page--;
            table_cassava(num_page);
            $("#num_page").html("page 4");
            break;
        case 6:
            num_page--;
            table_cassava(num_page);
            $("#num_page").html("page 5");
            break;
        case 7:
            num_page--;
            table_cassava(num_page);
            $("#num_page").html("page 6");
            break;
        case 8:
            num_page--;
            table_cassava(num_page);
            $("#num_page").html("page 7");
            break;
        }
    }
});


          function table_test(page){
            $.post("./set_data_table.php",{
              page:page,
            },function(result){
              $("#table_content").html(result);
            });
          }
          function table_rice(page){
            $.post("./set_data_table.php",{
              page:page,
              type: "rice",
            },function(result){
              $("#table_content").html(result);
            });
          }
          function table_rubber(page){
            $.post("./set_data_table.php",{
              page:page,
              type: "rubber",
            },function(result){
              $("#table_content").html(result);
            });
          }
          function table_cassava(page){
            $.post("./set_data_table.php",{
              page:page,
              type: "cassava",
            },function(result){
              $("#table_content").html(result);
            });
          }
          function table_sugarcane(page){
            $.post("./set_data_table.php",{
              page:page,
              type: "sugarcane",
            },function(result){
              $("#table_content").html(result);
            });
          }
          function table_oilpalm(page){
            $.post("./set_data_table.php",{
              page:page,
              type: "oilpalm",
            },function(result){
              $("#table_content").html(result);
            });
          }

          function dropdown_table(page){
            $.post("./dropdown_page.php",{
              page:page,
            },function(result){
              $("#change_page1").html(result);
            });
          }



          $("#select_place_temp3hour").change(function(){
            $("#select_year_temp3hour").empty();
            $("#select_month_temp3hour").empty();
            $("#select_date_temp3hour").empty();
            if($("#select_place_temp3hour").val()!=0){
                select_time_temp(1,0);
            }
            else{
              $("#chart_temp_year").empty();
              $("#chart_temp_month").empty();
              $("#chart_temp_3hour").empty();
            }
          });
          $("#select_place_mois3hour").change(function(){
            $("#select_year_mois3hour").empty();
            $("#select_month_mois3hour").empty();
            $("#select_date_mois3hour").empty();
            if($("#select_place_mois3hour").val()!=0){
                select_time_mois(1,0);
            }
            else{
              $("#chart_moisture_year").empty();
              $("#chart_moisture_month").empty();
              $("#chart_moisture_3hour").empty();
            }
          });

          //แผนภูมิแสดงอุณหภูมิปัจจุบัน
            function set_chart_temp3hour(){
              $.post("./Chart/temp/chart_temp_3hour.php",function(result){
                $("#chart_temp_3hour").html(result);
              });
            }
          //แผนภูมิแสดงความชื้นปัจจุบัน
            function set_chart_moisture3hour(){
              $.post("./Chart/moisture/chart_moisture_3hour.php",function(result){
                $("#chart_moisture_3hour").html(result);
              });
            }




//dropdown_temp
      $("#select_year_temp3hour").change(function(){
        $("#select_month_temp3hour").empty();
        $("#select_date_temp3hour").empty();
        if($("#select_year_temp3hour").val()!=0){
          var year = $("#select_year_temp3hour").val();
          select_time_temp(2,year);
          $("#chart_temp_month").empty();
          $("#chart_temp_3hour").empty();
        }
        else{
            set_chart_temp3hour();
          $("#chart_temp_year").empty();
          $("#chart_temp_month").empty();
        }
      });
      $("#select_month_temp3hour").change(function(){
        $("#select_date_temp3hour").empty();
        if($("#select_month_temp3hour").val()!=0){
          var year = $("#select_year_temp3hour").val();
          select_time_temp(3,year);
          $("#chart_temp_3hour").empty();
        }
        else {
          $("#chart_temp_month").empty();
          $("#chart_temp_3hour").empty();
        }
      });
      $("#select_date_temp3hour").change(function(){
        var year3 = $("#select_year_temp3hour").val();
        var month3 = $("#select_month_temp3hour").val();
        var date3 = $("#select_date_temp3hour").val();
        var place = $("#select_place_temp3hour").val();
        $.post("set_data_tempchart.php",{
          type:100,
          year3: year3,
          month3: month3,
          date3: date3,
          place:place,
        },function(result){
          $("#chart_temp_3hour").html(result);
        });
        $('html, body').animate({scrollTop: 760}, 800);
      });



      function get_place(){
        $.post("./dropdown_time.php",{
          type:4,
        },
        function(result){
          $("#select_place_temp3hour").html(result);
          $("#select_place_mois3hour").html(result);
        });
      }


      function select_time_temp(settime,year){
        if(settime==1){         //นำปีมาแสดง(เป็นส่วนเริ่มต้น)
          $.post("./dropdown_time.php",{
            type:1,
          },
          function(result){
            $("#select_year_temp3hour").html(result);
          });
        }
        else if(settime==2){    //นำเดือนมาแสดง และแสดงแผนภูมิปี
          $.post("./dropdown_time.php",{
            type:2,
          },
          function(result){
            $("#select_month_temp3hour").html(result);
          });
          var place = $("#select_place_temp3hour").val();
          $.post("./Chart/temp/chart_temp_allyear.php",{
            place:place,
            year:year,
          }
          ,function(result){
            $("#chart_temp_year").html(result);
          });
        }
        else {    //เลือกวันที่มีจำนวนตรงกับเดือน
          var month = $("#select_month_temp3hour").val();
          var place = $("#select_place_temp3hour").val();
          $.post("./dropdown_time.php",{
            type:3,
            month:month,
          },
          function(result){
            $("#select_date_temp3hour").html(result);
          });
          $.post("./set_data_tempchart.php",{
            type:2,
            year:year,
            month:month,
            place:place,
          },function(result){
            $("#chart_temp_month").html(result);
          });
        }
}




//dropdown_moisture


      $("#select_year_mois3hour").change(function(){
        $("#select_month_mois3hour").empty();
        $("#select_date_mois3hour").empty();
        $("#select_mois3hour").empty();
        if($("#select_year_mois3hour").val()!=0){
          var year = $("#select_year_mois3hour").val();
          select_time_mois(2,year);
          $("#chart_moisture_month").empty();
          $("#chart_moisture_3hour").empty();
        }
        else {
          set_chart_moisture3hour();
          $("#chart_moisture_year").empty();
          $("#chart_moisture_month").empty();
        }
      });
      $("#select_month_mois3hour").change(function(){
        $("#select_date_mois3hour").empty();
        $("#chart_moisture_3hour").empty();
        if($("#select_month_mois3hour").val()!=0){
          var year = $("#select_year_mois3hour").val();
          select_time_mois(3,year);
          $("#chart_moisture_3hour").empty();
          $('html, body').animate({scrollTop: 760}, 800);
        }
        else{
          $("#chart_moisture_month").empty();
          $("#chart_moisture_3hour").empty();
        }
      });
      $("#select_date_mois3hour").change(function(){
        var year3 = $("#select_year_mois3hour").val();
        var month3 = $("#select_month_mois3hour").val();
        var date3 = $("#select_date_mois3hour").val();
        var place = $("#select_place_mois3hour").val();
        $.post("set_data_moisturechart.php",{
          type:100,
          year3: year3,
          month3: month3,
          date3: date3,
          place:place,
        },function(result){

          $("#chart_moisture_3hour").html(result);
        });
        $('html, body').animate({scrollTop: 760}, 800);
      });



      function select_time_mois(settime,year){
        if(settime==1){         //นำปีมาแสดง(เป็นส่วนเริ่มต้น)
          $.post("./dropdown_time.php",{
            type:1,
          },
          function(result){
            $("#select_year_mois3hour").html(result);
          });
        }
        else if(settime==2){    //นำเดือนมาแสดง
          $.post("./dropdown_time.php",{
            type:2,
          },
          function(result){
            $("#select_month_mois3hour").html(result);
          });
          var place = $("#select_place_mois3hour").val();
          $.post("./Chart/moisture/chart_moisture_year.php",{
            place:place,
            year:year,
          },function(result){
            $("#chart_moisture_year").html(result);
          });
        }
        else {    //เลือกวันที่มีจำนวนตรงกับเดือน
          var month = $("#select_month_mois3hour").val();
          var place = $("#select_place_mois3hour").val();
          $.post("./dropdown_time.php",{
            type:3,
            month:month,
            place:place,
          },
          function(result){
            $("#select_date_mois3hour").html(result);
          });
          $.post("./set_data_moisturechart.php",{
            type:3,
            year:year,
            month:month,
            place:place,
          },function(result){
            $("#chart_moisture_month").html(result);
          });
        }
      }



});
