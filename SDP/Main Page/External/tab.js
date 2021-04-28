function openTab(evt, roles) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(roles).style.display = "block";
  evt.currentTarget.className += " active";
}
 
  // Show password (Initially the input type is password, if checkbox is selected then input type will change to text)
  function myFunctionS() {
  var x = document.getElementById("student password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
 }
  function myFunctionL() {
    var x = document.getElementById("lecturer password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
 }
   function myFunctionA() {
    var x = document.getElementById("admin password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}