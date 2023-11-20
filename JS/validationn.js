function showAlert(message) {
    var customAlert = document.getElementById('customAlert');
    customAlert.innerHTML = message;
    customAlert.style.display = 'block';
    customAlert.style.opacity = '1'; // Set opacity to 1 for fade-in effect
    setTimeout(function () {
      hideAlert();
  }, 2000);
}

function hideAlert() {
    var customAlert = document.getElementById('customAlert');
        customAlert.style.display = 'none';

}
function validateForm() {
  // Get input values
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Validate username
  if (username === "") {
      showAlert("isi Username!");
      return;
  }

  // Validate password
  if (password === "") {
      showAlert("Isi Password!");
      return;
  }
  if (username !== "" && password !== "") {
    document.getElementById('input').submit();
  }else {
    showAlert("Please fill in both username and password");
}
  // If all validations pass, submit the form to a PHP script
  
}

function checkDatabase() {

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          document.getElementById("result").innerHTML = this.responseText;
      }
  };

  xhttp.open("GET", "check_database.php", true);
  

  xhttp.send();
}

