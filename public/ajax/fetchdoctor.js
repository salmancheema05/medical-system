get_doctors();
function get_doctors(){
  $.ajax({
    type:'get',
    url:'get_doctors',
    dataType:'json',
    success:function(data){
        $('#display_doctors').html(data);
    }
  });
}