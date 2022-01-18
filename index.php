<?php
if (isset($_POST['submit'])) {
    $friends = $_POST['friends'];
    $fp = fopen('data.txt', 'a');
    foreach ($friends as  $friend) {
        if (!empty($friend)) {
            fwrite($fp, $friend . "\n");
        }
    }
    fclose($fp);
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <style>
      body{
        width: 100%;
        height: 100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background-color: #DCDCDC;
      }
    </style>
    <script type='text/javascript'>
        function addFriend() {
            // Number of inputs to create
            var number = document.getElementById("friendCount").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i = 0; i < number; i++) {
                // Append a node with a random text
                container.appendChild(document.createTextNode("friend" + (i + 1)));

                var input = document.createElement("input");
                input.type = "text";
                input.name = "friends[]";
                input.className= "form-control" 
                //input.name = "friendCount" + i;
                container.appendChild(input);

                container.appendChild(document.createElement("br"));
                var submit = document.getElementById("submit");
                submit.style.display = "block";
            }
        }
    </script>
</head>

<body>

<div class="card border-dark shadow p-3 mb-5 bg-white rounded w-75 p-3" >
<div class="card-body">
  <div class="form-group">
        <label>Number of friends:</label>
        <select onchange="addFriend()" class="form-control" id="friendCount">
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
        <br>
        <input class="btn btn-dark" type="submit" name="submit" id="submit" style="display: none;">
    </form>
      </div>
      </div>
</div>
</body>

</html>
