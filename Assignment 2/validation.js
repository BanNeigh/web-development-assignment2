function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["email"].value;
    var checkboxs = document.getElementsByClassName('checkboxes');
    var check = false;
    var DOB = document.forms["myForm"]["date"].value;


    for(var i=0,l=checkboxs.length;i<l;i++)
    {
        if(checkboxs[i].checked)
        {
            check=true;
            break;
        }
    }


    if (x == "") {
        alert("Name must be filled out");
        return false;
    }


    if (y == "") {
        alert("Email must be filled out");
        return false;
    }


    if (!y.includes("@")) {
        alert("Invalid email address!");
        return false;
    }

    if (!check) {
        alert("Pick at least one!");
        return false;
    }

    if (DOB == "") {
        alert("Birthday must be filled out");
        return false;
    }

}

