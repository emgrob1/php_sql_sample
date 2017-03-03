function ajaxCall(){
	$.ajax({
       url : "mysql.php",
		cache : false,
		dataType : "json",
        success: function (data) {
                var tr = data.report
                for (var i = 0; i < data.length; i++) {
                    tr = $('<tr/>');
                    tr.append("<td style='border:1px solid black'>" + "<div id='teacher' name='"+data[i].teacher_name+"> Action </div>" + "</td>");
                    tr.append("<td style='border:1px solid black'>" + "<div id='teacher' name='"+data[i].teacher_name+"' onclick=\"value(this)\">" + data[i].room_number + "</div>" + "</td>");
                    tr.append("<td style='border:1px solid black'>" + "<div id='teacher' name='"+data[i].teacher_name+"' onclick=\"value(this)\">" + data[i].classroom_type + "</td>");                           
                    $('.table1').append(tr);                  
                }
        }             
    });
   }   
   
   function value(name){
   	
    if($(name).attr('name') !== 'undefined') {
        alert($(name).attr('name'));
    }

}