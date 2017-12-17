$(document).ready(function () {
  $("#logout").click(function (e) {
    e.preventDefault();
    $('#logout-form').submit();
  });

  $('#btn-buy').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#popup').css('display', 'block');
  });
  $('#popup').click(function (e) {
    e.stopPropagation();
  });
  $('html').click(function () {
    $('#popup').hide();
  });
  $('.close').click(function () {
    $('#popup').hide();
  });
  $("#order-form").submit(function () {
    var form = $('#order-form');
    var dataForm = form.serialize();
    $('#notification').html('Заказ отправляется');
    $.ajax({
      type: "post",
      url: '/orders/store',
      dataType: 'json',
      data: dataForm,
      success: function (json) {
        $('#notification').html('');
        form.html(json.message);
      },
      error: function (jqXhr, json, errorThrown) {
        var errors = JSON.parse(jqXhr.responseText);
        var errorsHtml = '<ul>';
        $.each(errors, function (key, value) {
          errorsHtml += '<li>' + value[0] + '</li>';
        });
        errorsHtml += '</ul>';
        $('#notification').html(errorsHtml);
      }
    });
    return false;
  });
});