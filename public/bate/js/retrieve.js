
$(function(){
	$('button').click(function(){
		alert('sssss');
		$.ajax("{{url('/findPassword')}}","_token":"{{csrf_token}}",function(data){

		})
	})
})