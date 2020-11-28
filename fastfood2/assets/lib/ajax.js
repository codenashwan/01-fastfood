$(document).ready(function () {

  $(".nav-item").on("click" , function(){
    click("nclick");
  })
  function click(sound) {
    var obj = document.createElement("audio");
    obj.src = "assets/img/" + sound + ".mp3";
    obj.play();
  }

  $(".bt1").on("click", function () {
    click("click");

    var product_id = $(this).attr('id');
    var price = $(this).attr('data-loc-subject');
    var tt = "#thisprice" + product_id.trim();
    var rr = "#thisrows" + product_id.trim();
    var k = "#undoproccess" + product_id.trim();
    $(k).show();
    $.post("vendor/sell_product.php", {
      price: price,
      product_id: product_id
    }, function (response) {
      if (response === "success") {
        bank(" ", ".bank");
        bank("WHERE is_now = 1", ".banktoday");
        $.post('vendor/getPrice.php', {
          product_id: product_id
        }, function (response2) {
          $(tt).html(response2 + " IQD");
        })
        $.post('vendor/getRows.php', {
          product_id: product_id
        }, function (response3) {
          $(rr).html(response3 + " P");
        })
      }
    })

  })

  function bank(condition, direction) {
    var cond = condition;
    $.post('vendor/getBank.php', {
      cond: cond
    }, function (response) {
      $(direction).html(response + " IQD");
    })
  }

  bank(" ", ".bank");
  bank("WHERE is_now = 1", ".banktoday");


  $("#clean").on("click", function () {
    click("clean");
    $(".undo").hide();
    var set = $(this).attr('data-loc-subject');
    $.post('vendor/getUpdate.php', {
      set: set
    }, function () {
      $(".p1").html(0 + " IQD");
      $(".p2").html(0 + " P");

    })
  })
  $("#cleantoday").on("click", function () {
    click("clean");
    $(".undo").hide();

    var set = $(this).attr('data-loc-subject');
    $.post('vendor/getUpdate.php', {
      set: set
    }, function () {
      $(".banktoday").html(0 + " IQD");
    })
  })




  $(".undo").on("click", function () {
    click("undo");
    var product_id = $(this).attr('pid');
    var k = "#undoproccess" + product_id.trim();
    var tt = "#thisprice" + product_id.trim();
    var rr = "#thisrows" + product_id.trim();

    $.post('vendor/getUndo.php', {
      product_id: product_id
    }, function (response) {
      if (response === "done") {
        $(k).hide();
      } else {
        $(tt).html(response + " IQD");
        $.post('vendor/getRows.php', {
          product_id: product_id
        }, function (response3) {
          if (response3 == 0) {
            $(k).hide();
          }
          $(rr).html(response3 + " P");
        })
      }
      bank(" ", ".bank");
      bank("WHERE is_now = 1", ".banktoday");

    })


  })

});