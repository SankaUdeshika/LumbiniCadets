async  function signup() {


    const user_dto = {
        first_name: document.getElementById("firstName").value,
        last_name: document.getElementById("lastName").value,
        email: document.getElementById("email").value,
        password: document.getElementById("password").value,
    };




    const response = await fetch("SignUp",
            {
                method: "POST",
                body: JSON.stringify(user_dto),
                headers: {
                    "Content-type": "applicaiton/json"
                }
            }
    );

    if (response.ok) {
        //response eke ena JSON eka ganne meken
        const json = await response.json();

        if (json.success) {
            console.log(json); // json object ekama print karagannawa
            window.location = "verify-account.html"
            document.getElementById("message").innerHTML = json.content;
        } else {
            document.getElementById("message").innerHTML = json.content;
        }
    } else {
        document.getElementById("message").innerHTML = "Please Try again Later";
        console.log("error");
    }

}


