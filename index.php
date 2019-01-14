<!DOCTYPE html>
<html>
<style>
table,th,td {
  border: 1px solid black;
  border-collapse:  collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<h1>Fetch one species from database with AJAX</h1>

<form action="">
<select name="species" onchange="showSpecies(this.value)">
  <option value="">Select an animal</option>
  <option value="1">Lion</option>
  <option value="2">Monkey</option>
  <option value="3">Peacock</option>
  <option value="4">Bear</option>
</select>
</form>
<br>
<div id="txtHint">Animal info will be listed here...</div>

<script>
  function showSpecies(str) {
    var xhttp;
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getspecies.php?q="+str, true);
  xhttp.send();
  }
</script>

</body/>
</html>
