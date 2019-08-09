function register_ajax_send(){


    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         document.getElementById("body").innerHTML = this.responseText;
        }
    };
}