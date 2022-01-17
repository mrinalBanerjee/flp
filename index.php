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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <input type="submit" name="submit" id="submit" style="display: none;">
    </form>
</body>

</html>
