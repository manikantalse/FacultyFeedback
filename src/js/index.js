var id_no = document.getElementById("IDNO");
var pass = document.getElementById("pass");
var sub = document.getElementById('sub');
var error=true;
function setValues(roll_no) {
    if (roll_no.toLowerCase().indexOf("165u1a") != -1)
        document.getElementById('year').value = 2;
    if (roll_no.toLowerCase().substring(7, 8) == '5')
        document.getElementById('branch').value = 'CSE';
    if (roll_no.toLowerCase().substring(7, 8) == '4')
        document.getElementById('branch').value = 'ECE';
    if (roll_no.toLowerCase().substring(7, 8) == '3')
        document.getElementById('branch').value = 'MECH';
    if (roll_no.toLowerCase().substring(7, 8) == '2')
        document.getElementById('branch').value = 'CIVIL';
    if (typeof roll_no.toLowerCase().substring(8, 9) == 'string') {
        document.getElementById('section').value = 'B';
    }

    else if (parseInt(roll_no.toLowerCase().substring(8, 10)) > 60)
        document.getElementById('section').value = 'B';
    if (parseInt(roll_no.toLowerCase().substring(8, 10)) < 61)
        document.getElementById('section').value = 'A';
}
$(document).ready(function () {
    

    $('#sub').click(function (e) {
        if(error){
            e.preventDefault();
        }
        
        console.log("isUser.php?username="+id_no.value+"&password="+pass.value);
            $.get("isUser.php?username="+id_no.value+"&password="+pass.value,function(data){
                    data = data.trim();
                    if(data=='true'){
                        error = false;
                        sub.click();
                    }else{
                        if ($('#IDNO').val() == '') {
                            $('#rollError').show();
                        } else {
                            $('#rollError').hide();
                            $('#passError').show();
                        }            
                    }
            })
            
            

    });
});
