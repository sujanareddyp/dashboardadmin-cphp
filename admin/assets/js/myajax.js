function validatesavecontact(){
	var name=$("#fname").val();
	var email=$("#email").val();
	var mobile=$("#mobile").val();
	var message=$("#msg").val();
	var status=true;
	if(name=="")
	{
		$("#fname").css("border","2px solid red");
		status=false;
	}
	else{
		$("#fname").css("border","");
		
	}
	//----------------------for email--------------------------------//
	if(email=="")
	{
		$("#email").css("border","2px solid red");
		status=false;
	}
	else{
		$("#email").css("border","");
		
	}
	//-------------------for Mobile--------------------------------------//
	if(mobile=="")
	{
		$("#mobile").css("border","2px solid red");
		status=false;
	}
	else{
		$("#mobile").css("border","");
		
	}
	//------------------for Message------------------------------------//
	if(message=="")
	{
		$("#msg").css("border","2px solid red");
		status=false;
	}
	else{
		$("#msg").css("border","");
		
	}
	if(status==true)
	{
		var mydata={"n":name,"e":email,"mob":mobile,"mesg":message};
		$.ajax({
			url:"savecontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}	
		});//ajax closes
	}//if closes	
}//validatesavecontactcloses
function deletecontact(contactId)
{
	var status=confirm("Are u sure u want to delete contact with id="+contactId);
	if(status==true)
	{
		mydata={"cid":contactId};
		$.ajax({
			url:"deletecontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
			
		});//ajax closes
	}//if closes
}//deletecontact
function editcontact(contactId)
{
	var status=confirm("Are u sure u want to Edit contact with id="+contactId);
	if(status==true)
	{
		mydata={"cid":contactId};
		$.ajax({
			url:"editcontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				$("#result").html(response);
			}
			
		});//ajax closes
	}//if closes
	
}//editcontact closes
function validateupdatecontact()
{
	var name=$("#efname").val();
	var email=$("#eemail").val();
	var mobile=$("#emobile").val();
	var message=$("#emsg").val();
	var id=$("#eid").val();
	var status=true;
	if(name=="")
	{
		$("#efname").css("border","2px solid red");
		status=false;
	}
	else{
		$("#efname").css("border","");
		
	}
	//----------------------for email--------------------------------//
	if(email=="")
	{
		$("#eemail").css("border","2px solid red");
		status=false;
	}
	else{
		$("#eemail").css("border","");
		
	}
	//-------------------for Mobile--------------------------------------//
	if(mobile=="")
	{
		$("#emobile").css("border","2px solid red");
		status=false;
	}
	else{
		$("#emobile").css("border","");
		
	}
	//------------------for Message------------------------------------//
	if(message=="")
	{
		$("#emsg").css("border","2px solid red");
		status=false;
	}
	else{
		$("#emsg").css("border","");
		
	}
	if(status==true)
	{
		var mydata={"n":name,"e":email,"mob":mobile,"mesg":message,"eid":id};
		$.ajax({
			url:"updatecontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}	
		});//ajax closes
	}//if closes	
	
}