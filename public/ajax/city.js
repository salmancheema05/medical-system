$(document).on('click','.city_id',function(){
	var city_id=$(this).attr('id');
	$.ajax({
        type:"get",
        url:"city_search_doctor",
        data:{city_id:city_id},
        dataType:'json',
        successs:function(response){
        	alert(response);
        }

	});
});
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
