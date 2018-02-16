﻿/********************************************************************************/
/********************************************************************************/
/*Function Calculate Current Date*/
function get_current_date(){
	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){ dd='0'+dd; } 
    if(mm<10){ mm='0'+mm; } 
    var today = mm+'/'+dd+'/'+yyyy;
	return today;
}
/********************************************************************************/
/********************************************************************************/
/*Function Calculate Current Date Difference*/
function get_date_difference(end_date)
{
var d1 = new Date(end_date);
var d2 = new Date(get_current_date());
var timeDiff = d1.getTime() - d2.getTime();
var DaysDiff = timeDiff / (1000 * 3600 * 24);
   if(DaysDiff > 0){
	  $('.badges').append('<img src=http://www.greenschoolsprogramme.org/audit2017/assets/img/images/LogoGSPyear.jpg width=100px />');
   }
}
