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