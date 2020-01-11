get_department();
function get_department(){
  $.ajax({
    type:'get',
    url:'department_detail',
    dataType:'json',
    success:function(data){
        $('#display-data').html(data);
    }
  });
}
