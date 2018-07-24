function next()
{
    var j=document.getElementById('i').value;
    var q_id=document.getElementById('q_id').value; 
    var username=document.getElementById('username').value;  
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
           document.getElementById("change").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","/next?j="+j+"&q_id="+q_id+"&username="+username,true);
    xhttp.send();
}

function back()
{
    var j=document.getElementById('i').value; 
    var q_id=document.getElementById('q_id').value; 
    var username=document.getElementById('username').value; 
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
           document.getElementById("change").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","/back?j="+j+"&q_id="+q_id+"&username="+username,true);
    xhttp.send();
}

function circle(str)
{  var op = str-1;
    var q_id=document.getElementById('q_id').value; 
    var username=document.getElementById('username').value; 
    //alert(op);
    //var op=document.getElementById('no').value-1; 
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
           document.getElementById("change").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","/circle?op="+op+"&q_id="+q_id+"&username="+username,true);
    xhttp.send();
}

function foo(str) {
    var option = str;
    //alert(option);
    var q_id=document.getElementById('q_id').value; 
    var username=document.getElementById('username').value; 
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
           //document.getElementById("radio").checked=this.true;
        }
    };
    //alert(username);
    xhttp.open("GET","/response?option="+option+"&q_id="+q_id+"&username="+username,true);
    xhttp.send();  
} 
function time() {
     var time = new Date();
    var username=document.getElementById('username').value; 
    var name=document.getElementById('name').value; 
    var email=document.getElementById('email').value; 
    var dob=document.getElementById('dob').value; 
    var Contact_no=document.getElementById('Contact_no').value; 
    var password=document.getElementById('password').value; 
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
           //document.getElementById("radio").checked=this.true;
        }
    };
    //alert(username);
    xhttp.open("GET","/time?time="+time+"&username="+username+"&name="+name+"&email="+email+"&dob="+dob+"&Contact_no="+Contact_no+"&password="+password,true);
    xhttp.send();  
} 