async function signup() {
    var email = document.getElementById("email").value;
    var withinitialsName = document.getElementById("withinitialsName").value;
    var fullName = document.getElementById("fullName").value;
    var mobile = document.getElementById("mobile").value;
    var tel = document.getElementById("tel").value;
    var address = document.getElementById("address").value;
    var SchoolyearInput = document.getElementById("SchoolyearInput").value;
    var CadetyearInput = document.getElementById("CadetyearInput").value;
    var birthday = document.getElementById("birthday").value;
    var password = document.getElementById("password").value;

    var f = new FormData();
    f.append("email", email);
    f.append("withinitialsName", withinitialsName);
    f.append("fullName", fullName);
    f.append("mobile", mobile);
    f.append("tel", tel);
    f.append("address", address);
    f.append("SchoolyearInput", SchoolyearInput);
    f.append("CadetyearInput", CadetyearInput);
    f.append("birthday", birthday);
    f.append("password", password);

    f.append("file", document.getElementById("image").files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var response = r.responseText;
            if (r.responseText) {
                alert("Registerd Succes, Please Sign in ");
                window.location = "signin";
            } else {
                alert(r.responseText);
            }
        }
    };
    r.open("POST", "../signupProcess.php", true);
    r.send(f);
}
