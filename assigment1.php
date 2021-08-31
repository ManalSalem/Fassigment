<DOCTYPE html>
    <html lang="eng">
        <head>
            <meta chareset="UTF-8">
            <meta name="viweport" content="width=device-width, inital-scale=1.0">
            <title> first assignment </title>

</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
    <label for="first"> First Name :</label>
    <input type="text" id="first" name="first" autocomplete="off">
    <label for="first"> Last Name :</label>
    <input type="text" id="last" name="last" autocomplete="off">
<div class="buttons">
        <button type="submit">Submit</button>
        <button type="submit" formmethod="post">Submit using Post</button>
        <button type="rest">Rest</button>
</div>
</form>
</body>
</html>


