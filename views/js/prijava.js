function send_ajax_login(){
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let xhttp = new XMLHttpRequest();

    let data = [
        username,
        password
    ];

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         document.getElementById("body").innerHTML = this.responseText;
        }
      };

    xhttp.open("POST", "http://dev.carmarket.com/views/HTML/Prijava.html", true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send("username="+username+"&password="+password);
}