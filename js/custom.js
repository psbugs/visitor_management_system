function mymsg(msg='' , type='')
{
	var bgclass=type=='success'?"bg-success":"bg-danger";
	$(".alerttext").text(msg);
	$(".alertcover").addClass(bgclass);
	setTimeout(function(){
            $('.alerttext').text('');
            $('.alertcover').removeClass('bg-success bg-danger');
      }, 15000);
}
$(document).ready(function(){
$("#register").click(function(){
	var name,contact_no,email_id,department_id,password,designation;
	var re_type_password;
	var msg;
	name=$("#name").val();
	contact_no=$("#contact_no").val();
	email_id=$("#email_id").val();
	department_id=$("#department_id").val();
	password=$("#password1").val();
	designation=$("#designation").val();
	re_type_password=$("#re_type_password").val();
	if(name.length==0){
		showMsg("Name can not be empty","error");
	}
	else if(password!=re_type_password)
	{
		showMsg("match"+password+" "+re_type_password,"error");
	}
	else{
	targetForm=$("#registerationform");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/registration.php' ,
			success : function(resp){

				showMsg("Registration Successfull.Please Login.."+resp,"success");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
	}


});
function showMsg(msg =''  , type ='' ){
	  var ts_popup_class = type=='success' ? 'ts_popup_success' : 'ts_popup_error';
	  $('.ts_message_popup_text').text(msg);
	  $('.ts_message_popup').addClass(ts_popup_class);
	  setTimeout(function(){
            $('.ts_message_popup_text').text('');
            $('.ts_message_popup').removeClass('ts_popup_error ts_popup_success');
      }, 15000);
  }


$("#inputreg").click(function(){
	$("#login1,#login").removeClass("active");
	$("#signup1,#signup").addClass("active");
	$("#signup").removeClass("fade");

});
$("#loginbtn").click(function(){
	var email_id,password;
	var msg;
	email_id=$("#email_id").val();
	password=$("#password").val();
	if(email_id.length==0){
		showMsg("Email  can not be empt","error");
	}
	else if(password.length==0)
	{
		showMsg("Password can not be empty","error");
	}
	else{
	targetForm=$("#loginform");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/login.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg("Login Successfull","success");
				window.location.href="dashboard.php";
			}
				else
				showMsg("login failed","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
	}


});
$("#add").click(function(){

	var d_name=$("#d_name").val();

	if(d_name.length<=0){
		showMsg("name can not be empty","error");

	}
	else{
	targetForm=$("#dept_add_form");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/add_department.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg("New Departement Added","success");
				window.location.href="department.php";
			}
				else
				showMsg("Error while adding Departement","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
	}
});
$(".dept_delete").click(function(){
	var id=$(this).attr("id");
	id=id.replace("d_","");
	$.ajax({
			method : 'get',

			processData: false,
			contentType: false,
			url :'api/delete_dept.php?id='+id ,
			success : function(resp){
				if(resp==="success")
			{	showMsg(" Departement Deleted","success");
				window.location.href="department.php";
			}
				else
				showMsg("Error while deleting Departement","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});

});

$(".dept_edit").click(function(){
	var id=$(this).attr("id");
	id=id.replace("e_","");
	$.ajax({
			method : 'get',

			processData: false,
			contentType: false,
			url :'api/edit_dept.php?id='+id ,
			success : function(resp){

				$("#dept_edit_form").html(resp);
				},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
});

$("#update_dept").click(function(){

	var d_name=$("#e_name").val();

	if(d_name.length<=0){
		showMsg("name can not be empty","error");

	}
	else{
	targetForm=$("#dept_edit_form");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/update_department.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg(" Departement Updated successfully","success");
				window.location.href="department.php";
			}
				else
				showMsg("Error while updating Departement","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
	}
});
$("#search").keyup(function(){
	var x=$("#search").val();
	$.ajax({
			method : 'get',

			processData: false,
			contentType: false,
			url :'api/search_dept.php?key='+x ,
			success : function(resp){

				$("#mytable").html(resp);
				},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
});

$("#add_vstr_btn").click(function(){
	var name=$("#name").val();

	if(name.length<=0){
		showMsg("name can not be empty","error");

	}
	else{
	targetForm=$("#visitor_add_form");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/add_visitor.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg("New Visitor Added","success");
				window.location.href="visitor.php";
			}
				else
				showMsg("Error while adding Departement","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
	}
});

$(".vis_edit").click(function(){
	var id=$(this).attr("id");
	id=id.replace("v_","");
	$.ajax({
			method : 'get',

			processData: false,
			contentType: false,
			url :'api/edit_vis.php?id='+id ,
			success : function(resp){

				$("#vis_edit_form").html(resp);
				},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
});

$("#update_vis").click(function(){

	var name=$("#e_name").val();


	if(name.length<=0){
		showMsg("name can not be empty","error");

	}
	else{
	targetForm=$("#vis_edit_form");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/update_visitor.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg(" Departement Updated successfully","success");
				window.location.href="visitor.php";
			}
				else
				showMsg("Error while updating Departement","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
	}
});

$(".vis_delete").click(function(){
	var id=$(this).attr("id");
	id=id.replace("v_","");
	$.ajax({
			method : 'get',

			processData: false,
			contentType: false,
			url :'api/delete_vis.php?id='+id ,
			success : function(resp){
				if(resp==="success")
			{	showMsg(" Departement Deleted","success");
				window.location.href="visitor.php";
			}
				else
				showMsg("Error while deleting Departement","error");
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});

});
$("#chgpwdbtn").click(function(){

	var o_pwd=$("#opwd").val();
	var n_pwd=$("#npwd").val();
	var r_pwd=$("#rpwd").val();

	if(o_pwd.length<=0||n_pwd.length<=0||r_pwd.length<=0){
	alert("hello1");
showMsg("password can not be empty","error");
	}
	else if(n_pwd!=r_pwd){
		alert("hello2");
		showMsg("password and retype password doesn't match","error");
	}
	else{
		alert("hello3");
	targetForm=$("#passwordForm");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/chg_pwd.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg("Password updated successfully","success");
					alert("hello4"+resp);
			}
				else
				showMsg("Error while updating password","error");
			alert("hello5"+resp);
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );
				alert("hello6");
			}
		});
	}
});

$("#add_pic_btn").click(function(){
	targetForm=$("#img_add_form");
	var data  =  new FormData(targetForm[0]);
	$.ajax({
			method : 'post',
			data : data,
			processData: false,
			contentType: false,
			url :'api/upload_pic.php' ,
			success : function(resp){
				if(resp==="success")
			{	showMsg("Password updated successfully","success");
					alert("hello4"+resp);
			}
				else
				showMsg("Error while updating password","error");
			alert("hello5"+resp);
			},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );
				alert("hello6");
			}
		});
	});

	$("#rep_year").click(function(){
	//alert("hello");
	var id=$("#year").val();

	$.ajax({
			method : 'get',

			processData: false,
			contentType: false,
			url :'api/rep_year.php?year='+id ,
			success : function(resp){

				$("#data_table").html(resp);
				},
			error : function(){
				showMsg('Something went wrong, please try again.'  , 'error' );

			}
		});
});

  function exportToExcel(tableID, filename = ''){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename?filename+'.xls':'export_excel_data.xls';

    // Create download link element
    downloadurl = document.createElement("a");

    document.body.appendChild(downloadurl);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;

        // Setting the file name
        downloadurl.download = filename;

        //triggering the function
        downloadurl.click();
    }
}

$("#dwl").click(function(){
         exportToExcel("data_table");


});
});
