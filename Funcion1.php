<html>
<head>
Here you could calculate the different --> * = 
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}


</style>
</head>
<body>
<script>
function sumar()
 {
 var total = 0;
 var valor1 = document.getElementById("val1").value;
 var valor2 = document.getElementById("val2").value;

 total = (valor1 * valor2);

 var Display = document.getElementById("Display");
 Display.innerHTML = total;
 }
</script>

 <input id="val1" onkeyup="sumar()" />
 <input id="val2" onkeyup="sumar()" />
 <span id="Display"></span>


<button type="button" onclick="loadXMLDoc()">Show Page of Workers</button>
<br><br>
<table id="demo"></table>
<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };

  xmlhttp.open("GET", "ListXML.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>ID</th><th>Name</th><th>Date</th><th>Department</th><th>Post</th><th>Type</th><th>Hours</th><th>Prize</th><th>Wage</th></tr>";
  var x = xmlDoc.getElementsByTagName("workers");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Date")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Department")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Post")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Type")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Hours")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Prize")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Wage")[0].childNodes[0].nodeValue +
    "</td></tr>"; 
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
</body>
</html>