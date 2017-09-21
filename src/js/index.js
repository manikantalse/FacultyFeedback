var id_no = document.getElementById("IDNO");
var pass = document.getElementById("pass");
var sub = document.getElementById('sub');
var login = document.getElementById('login');


$(document).ready(function () {
    $('#sub').on('click', function (e) {
        e.preventDefault();
        $.get("isUser.php?username=" + id_no.value + "&password=" + pass.value, function (data) {
            data = data.trim();
            if (data == 'true') {

                var roll_no = document.getElementById('IDNO').value;
                var str = roll_no.toLowerCase();
                switch (0) {
                    case str.indexOf('175u1a0'): document.getElementById('year').value = 1; break;
                    case str.indexOf('165u1a0'): document.getElementById('year').value = 2; break;
                    case str.indexOf('155u1a0'): document.getElementById('year').value = 3; break;
                    case str.indexOf('145u1a0'): document.getElementById('year').value = 4; break;
                }
                if (roll_no.toLowerCase().substring(7, 8) == '5') {
                    document.getElementById('branch').value = 'CSE';

                    if (parseInt(roll_no.toLowerCase().substring(8, 10)) < 61)
                        document.getElementById('section').value = 'A';
                    else
                        document.getElementById('section').value = 'B';

                }
                if (roll_no.toLowerCase().substring(7, 8) == '4') {
                    document.getElementById('branch').value = 'ECE';
                    if (parseInt(roll_no.toLowerCase().substring(8, 10)) < 51)
                        document.getElementById('section').value = 'A';
                    else
                        document.getElementById('section').value = 'B';
                }
                if (roll_no.toLowerCase().substring(7, 8) == '3') {
                    document.getElementById('branch').value = 'MECH';
                    document.getElementById('section').value = 'A';
                }
                if (roll_no.toLowerCase().substring(7, 8) == '1') {
                    document.getElementById('branch').value = 'CIVIL';
                    document.getElementById('section').value = 'A';
                }

                login.submit();
            } else {
                if ($('#IDNO').val() == '') {
                    $('#rollError').hide();
                    $('#rollError').show(250);
                } else {
                    $('#rollError').hide();
                    $('#passError').hide();
                    $('#passError').show(250);
                }
            }
        })

    });

})



