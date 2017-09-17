/*Schedule events*/

function  formValidation() {
	

var ename = document.events.ename;
var venue = document.events.venue;
var date  = document.events.date;
var time  = document.events.time;
var schedule = document.events.schedule;


if(allLetter(ename))  
{  
if(allLetter(venue)) 
{   
if(allLetter(date)) 
{
if(allLetter(time)) 
{
if(allLetter(schedule)) 
{
	
}








































	

//``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````'
		
function ename( ){
	
	var input = document.getElementByName("ename") .value;
	var  len  = /^[A-Za-z]+$/; 
	var msg;
	
	if(input == " "){
		msg = " Name Field Empty";
		document.getElementById('para1'). innerHTML=msg;
		retur false;
	}
	
	else if(!input.match(len)){
		msg = "All must be letters";
		document.getElementById('para1').innerHTML=msg;
		return false;
	}
	
	else{
		return true;
	}
		
}

//``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````'
		
function valid_itemcode(){
	
	var  input2 =  document.getElementById('Item_id').value;
	var  msg1;
	
	if(input2 == ""){
		
		alert ("Item code filed Empty ");
		//document.getElementById(' para2').innerHTML=msg1;
		return false;
	}
	else if(isNaN(input2))
	{
		msg1 = "All must be numbers " ;
		document.getElementById('para2').innerHTML=msg1;
		return false;
		
	}
	else if((input2 > 0)) || (input2 < 12)
	{
		msg1 = " Item code invalid";
		document.getElementById('para2').innerHTML=msg1;
		return false;
	}
	else{
		return true;
	}
	
}	
	
//``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````'

function  empty(val){
	
		if(val == " "){
			return true;
		}
		else
		{
			return false;
		}
}
	
	
}








	
		
	