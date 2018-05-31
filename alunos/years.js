
var yearSelect = document.getElementById('ano_st');

function spleasechange(e){
    var sa = e.value;
    $("#ktable").html('<div class="la-ball-fall la-light"><div></div><div></div><div></div></div>');

    $.ajax({
      url: "notas_st.php",
      type: "GET",
      data: 'sa='+sa,
      success: function(response){
        $("#ktable").html(response);
      },
    });
}
