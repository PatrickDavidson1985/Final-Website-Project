function validateForm() {
    var x = document.forms["myForm"]["fname"]["email"]["address"]["city"]["state"]["zipCode"].value;
    if (x == "") {
      alert("all fields must be filled out");
      return false;
    }
  }


  function validateForm() {
    var x = document.forms["myForm"]["lname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }