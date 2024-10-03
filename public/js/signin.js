function signIn() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var f = new FormData();
    f.append("email", email);
    f.append("password", password);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var response = r.responseText;
            if (response == "succcess") {
                window.location = "homepage";
            } else {
                alert(r.responseText);
            }
        }
    };
    r.open("POST", "../signinProcess.php", true);
    r.send(f);
}
