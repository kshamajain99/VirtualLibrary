function formValidation()  
{  
if(rollno_validation() )  
{  
if(allLetter())  
{  
if(check_email())  
{  
if(confirm_password())  
{   
if(allNumber())  
{  
}   
}  
}  
}  
}  
return false;  
}  

function rollno_validation(node)  
{ 
var x= document.getElementById("rid").value; 
var rollno_len = x.length;  
//alert(rollno_len);
if (rollno_len != 8)  
{  
alert("Rollno should be of length 8");  
node.focus();  
return false;  
}
else  
return true;  
}

function allLetter(node)  
{  
   var y=document.getElementById("uid").value;
   var letters = /^[A-Za-z]+[\s]*[A-Za-z]+$/;  
   if(y.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter only alpha");
	 node.focus();	 
     return false;  
     }  
}

function check_email(node)  
{  
   var y=document.getElementById("eid").value;
   var letters = /^[A-Za-z_.0-9]+@[A-Za-z0-9]+[.][A-Za-z.]+$/;  
   if(y.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Please enter a valid emailID");  
     node.focus();
	 return false;  
     }  
}  

function confirm_password(node)
{
	var x=document.getElementById("pid").value;
	var y=document.getElementById("cpid").value;
	var n = y.localeCompare(x);
	if( n!=0)
	{
	alert("Password doesnt match!!!");
	node.focus();
	return false;
	}
	else 
	return true;
}

function allNumber(node)  
{  
   var y=document.getElementById("noid").value;
   var num = /^[1-9]{1}[0-9]{9}$/;  
   if(y.match(num))  
     {  
      return true;  
     }  
   else  
     {  
     alert("Enter a valid contact number");
	 node.focus();
     return false;  
     }  
}