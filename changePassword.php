
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="src/css/flat-ui.css">
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
<style>
#formContainer{
    position:absolute;
}

form{
    background:#ecf0f1;
    border: 1px solid #7f8c8d;
    border-radius:5px;
    padding:30px;
}

#error{

}
</style>
<div class='container' >
    <h2>Please Change your password</h2>
    <br/>
    <b>Enter your old password,enter your new password
        <p> that you want to set and then just Submit</p>
</b>
<input id='idno' type="hidden" value="<?php echo $_REQUEST['rollno'] ?>" >
<div id='formContainer' >
<form  class='form-group'>
    
    Old Password :&nbsp&nbsp
    <input id='oPass' name='oldPass' type="password">
    <br/>
    <br/>
    New Password : 
    <input id='nPass' name='newPass' type="password">
    <br/>
    <br/>
    <button id='sub' type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>
<div id='success' class="alert alert-success">
  <strong>Done!</strong> Redirecting ...
</div>
<div id='error' class="alert alert-danger">
  <strong>Error!</strong> The old password is wrong :(
</div>
<div>
</div>
<script>
$(document).ready(function () {
    $('#success').hide();
    $('#error').hide();
    $('#sub').on('click', function (e) {
        e.preventDefault();
        var id_no = $('#idno').val();
        var pass = $('#oPass').val();
        var nPass = $('#nPass').val();
        var passw=  /^[A-Za-z]\w/;  
        if(!passw.test($('#nPass').val())){
            alert('Invalid new Password')  
            return;   
        }  

        $.get("isUser.php?username=" + id_no + "&password=" + pass, function (data) {
            data = data.trim();
            if (data == 'true') {
                $.get('newPassword.php?rollno='+id_no+'&newpass='+nPass,function(data){
                    $('#success').show(250);
                    setInterval(function(){window.history.back();},1000)
                })
                
            }else{
                $('#error').hide(250);
                $('#error').show(250);
            }
        });
    });
});
</script>