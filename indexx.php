<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type='text/javascript'>
        function addFriend(){
            // Number of inputs to create
            var number = document.getElementById("exampleFormControlSelect1").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("friend" + (i+1)));
               
                var input = document.createElement("input");
                input.type = "text";
                 input.name="textdata"
                input.name ="exampleFormControlSelect1" + i;
                container.appendChild(input);
                
                container.appendChild(document.createElement("br"));

            }
        }
    </script>
</head>
<body>
	<div class="form-group">
	        </form>
	<label>Number of friends:
    </label>
<select onchange="addFriend()" class="form-control" id="exampleFormControlSelect1">
    <option value="0">select friends</option>
    <option value="1">1 friends</option>
    <option value="2">2 friends</option>
    <option value="3">3 friends</option>
    <option value="4">4 friends</option>
  </select>
    </div>
  <br>
      <form method="post">
    <div id="container"></div>
  <input type="submit" name="submit">
  </form>
  <a href=\"indexx.php\" onClick=\"window.print();return false\">Download web page</a>
  <?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
</body>
</html>
