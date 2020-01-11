get_information();
function get_information(){
  $.ajax({
    type:'get',
    url:'office_detail',
    dataType:'json',
    success:function(data){
        $('#display_data').html(data);
    }
  });
}
