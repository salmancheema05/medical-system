
get_city();
function get_city(){
  $.ajax({
    type:'get',
    url:'get_cities',
    dataType:'json',
    success:function(data){
        $('#display_data').html(data);
    }
  });
}
select_city();
function select_city(){
  $.ajax({
    type:'get',
    url:'select_cities',
    dataType:'json',
    success:function(data){
      $('#select_cities').html(data);
    }
  });
}