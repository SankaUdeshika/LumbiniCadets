function updateProfile() {
    var withinitialsName = document.getElementById("namewithInitials").value;
    var fullName = document.getElementById("fullname").value;
    var mobile = document.getElementById("mobile").value;
    var tel = document.getElementById("tel").value;
    var address = document.getElementById("address").value;
    var SchoolyearInput = document.getElementById("SchoolyearInput").value;
    var CadetyearInput = document.getElementById("CadetyearInput").value;
    var birthday = document.getElementById("birthday").value;

    var f = new FormData();
    f.append("withinitialsName", withinitialsName);
    f.append("fullName", fullName);
    f.append("mobile", mobile);
    f.append("tel", tel);
    f.append("address", address);
    f.append("SchoolyearInput", SchoolyearInput);
    f.append("CadetyearInput", CadetyearInput);
    f.append("birthday", birthday);

    f.append("file", document.getElementById("image").files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var response = r.responseText;
            alert(response);
            // if (r.responseText) {
            //     alert("Registerd Succes, Please Sign in ");
            //     window.location = "signin";
            // } else {
            //     alert(r.responseText);
            // }
        }
    };
    r.open("POST", "../updateProfileProcess.php", true);
    r.send(f);
}

function makePayment() {
    var PaymentAmount = document.getElementById("PaymentAmount").value;
    var description = document.getElementById("description").value;

    var f = new FormData();
    f.append("PaymentAmount", PaymentAmount);
    f.append("description", description);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var response = r.responseText;
            if (response == "Payment Success") {
                alert(response);
                window.location.reload();
            } else {
                alert(response);
            }
        }
    };
    r.open("POST", "../makePayment.php", true);
    r.send(f);
}
