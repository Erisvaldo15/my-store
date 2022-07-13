const check = document.querySelector("#checkInputPassword");

if (check) {

    console.log(check);
    check.addEventListener("click", function () {
        const password = document.querySelector("#password");

        if (password.type == "password") {
            return (password.type = "text");
        }

        return password.type = "password";
    });
}


