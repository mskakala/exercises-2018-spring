<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
var obj, dbParam, xmlhttp;
obj = { "table":"customer", "limit":10 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
    }
};
xmlhttp.open("GET", "jsondb1.php?x=" + dbParam, true);
xmlhttp.send();

</script>
</body>
</html>
