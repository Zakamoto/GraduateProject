$(document).ready(function(){
  $("#Report").hide();
//  $("#Report_temp").hide();
  $("#Report_moisture").hide();
  $("#table_test").hide();
  $("#area_result").hide();
  //console.log(radioValue);
  /*setInterval(function() 
  { ObserveInputValue($('#plantData').val()); 
  }, 100);
  */

  var lastSelected = "0";
    $(function () {
        //if you have any radio selected by default
        lastSelected = $('[name="plant"]:checked').val();
        if (lastSelected = "1")
        {
          rice_chart();
          table_rice(0);
        }
    });
    $(document).on('click', '[name="plant"]', function () {
        if (lastSelected != $(this).val() && typeof lastSelected != "undefined") {
          //alert($(this).val());
          if (lastSelected != "0" || lastSelected != "1") {
            switch($(this).val()) {
              case "1":
                  rice_chart();
                  table_rice(0);
                  break;
              case "4":
                  rubber_chart();
                  table_rubber(0);
                  break;
              case "5":
                  cassava_chart();
                  table_cassava(0);
                  break;
              case "2":
                  sugarcane_chart();
                  table_sugarcane(0);
                  break;
              case "3":
                  oilpalm_chart();
                  table_oilpalm(0);
                  break;
            }
          }
            //alert("radio box with value " + $('[name="plant"][value="' + lastSelected + '"]').val() + " was deselected");
        }
        lastSelected = $(this).val();
    });
  
    //table_test(1);
    select_time_temp(1);
    select_time_mois(1);
    dropdown_table(5);
    area_table();


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





//option แสดง div อุณหถูมิ , ความชื้น

  $("#option_weather").change(function(){
    if($("#option_weather").val()==1){
      $("#Report_temp").show();
      $("#Report_moisture").hide();
    }
    else {
      $("#Report_moisture").show();
      $("#Report_temp").hide();
    }
  });

//ตาราง




    $("#change_page1").change(function(){
      var page = $("#change_page1").val();
      table_test(page);

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



//dropdown_temp



      $("#select_year_temp3hour").change(function(){
        $("#select_month_temp3hour").empty();
        $("#select_date_temp3hour").empty();
        $("#select_temp3hour").empty();
        if($("#select_year_temp3hour").val()!=0)
          select_time_temp(2);
      });
      $("#select_month_temp3hour").change(function(){
        $("#select_date_temp3hour").empty();
        $("#select_temp3hour").empty();
        if($("#select_month_temp3hour").val()!=0)
          select_time_temp(3);
      });
      $("#select_date_temp3hour").change(function(){
        $("#select_temp3hour").empty();
          select_time_temp(4);
      });

      $("#select_temp3hour").change(function(){
        var year3 = $("#select_year_temp3hour").val();
        var month3 = $("#select_month_temp3hour").val();
        var date3 = $("#select_date_temp3hour").val();
        var time3 = $("#select_temp3hour").val();
        $.post("set_data_tempchart.php",{
          type:100,
          year3: year3,
          month3: month3,
          date3: date3,
          time3: time3,
        },function(result){
          console.log(result);
          $("#chart_temp_3hour").html(result);
        });
      });



      function select_time_temp(settime){
        if(settime==1){         //นำปีมาแสดง(เป็นส่วนเริ่มต้น)
          $.post("./dropdown_time.php",{
            type:1,
          },
          function(result){
            $("#select_year_temp3hour").html(result);
          });
        }
        else if(settime==2){    //นำเดือนมาแสดง
          $.post("./dropdown_time.php",{
            type:2,
          },
          function(result){
            $("#select_month_temp3hour").html(result);
          });
        }
        else if(settime==3){    //เลือกวันที่มีจำนวนตรงกับเดือน
          var month = $("#select_month_temp3hour").val();
          $.post("./dropdown_time.php",{
            type:3,
            month:month,
          },
          function(result){
            $("#select_date_temp3hour").html(result);
          });
        }
        else {                  //เลือกเวลา
          $.post("./dropdown_time.php",{
            type:4
          },
          function(result){
            $("#select_temp3hour").html(result);
          });
        }
      }





//dropdown_moisture


      $("#select_year_mois3hour").change(function(){
        $("#select_month_mois3hour").empty();
        $("#select_date_mois3hour").empty();
        $("#select_mois3hour").empty();
        if($("#select_year_mois3hour").val()!=0)
          select_time_mois(2);
      });
      $("#select_month_mois3hour").change(function(){
        $("#select_date_mois3hour").empty();
        $("#select_mois3hour").empty();
        if($("#select_month_mois3hour").val()!=0)
          select_time_mois(3);
      });
      $("#select_date_mois3hour").change(function(){
        $("#select_mois3hour").empty();
          select_time_mois(4);
      });

      $("#select_mois3hour").change(function(){
        var year3 = $("#select_year_mois3hour").val();
        var month3 = $("#select_month_mois3hour").val();
        var date3 = $("#select_date_mois3hour").val();
        var time3 = $("#select_mois3hour").val();
        $.post("set_data_moisturechart.php",{
          type:100,
          year3: year3,
          month3: month3,
          date3: date3,
          time3: time3,
        },function(result){
          console.log(result);
          $("#chart_moisture_3hour").html(result);
        });
      });



      function select_time_mois(settime){
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
        }
        else if(settime==3){    //เลือกวันที่มีจำนวนตรงกับเดือน
          var month = $("#select_month_mois3hour").val();
          $.post("./dropdown_time.php",{
            type:3,
            month:month,
          },
          function(result){
            $("#select_date_mois3hour").html(result);
          });
        }
        else {                  //เลือกเวลา
          $.post("./dropdown_time.php",{
            type:4
          },
          function(result){
            $("#select_mois3hour").html(result);
          });
        }
      }



});
