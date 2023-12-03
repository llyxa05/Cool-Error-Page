<?php

//Fields
$error = $_GET['e'];

echo "<!DOCTYPE html>
    <head>
        <title>Error</title>
        <style>
            body {
                background-color: #212121;
                font-family: Roboto, 'Open Sans', sans-serif;
                color: #999;
                user-select: none;
                margin: 0;
                display: table;
                width: 100%;
                height: 100vh;
                text-align: center;
            }
            div {
                display: table-cell;
                vertical-align: middle;
            }
            h1 {
                font-size: 80px;
                margin: 0;
            }
            button {
                background: gray;
                border: 0;
                padding: 8px 14px;
                border-radius: 2px;
                color: #fff;
                cursor: pointer;
                transition: background 0.3s;
            }
            button:hover{
                background: darkgray;
            }
        </style>
    </head>

    <script> 
	document.onkeydown = function(e) { 
	if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) { 
	} 
	return false; 
	}; 
</script>
    ";

//body
echo "
<body>
<div>
";

if ($error == "400") {
    echo "<h1>400</h1>
        <p>Bad request (отвал)</p>";
} else if ($error == "401") {
    echo "<h1>401</h1>
        <p>Authorization required</p>
        <p>This server cannot verify that you are authorized to access the requested documents. Perhaps you entered incorrect data (for example, an incorrect password), or your browser does not know how to transfer the necessary data.</p>";
} else if ($error == "403") {
    echo "  <h1>403</h1>
            <p>Forbidden</p>
            <p>Тебе сюда нельзя. Этот клуб только для крутых.</p>";
} else if ($error == "404") {
    echo "<h1>404</h1>
        <p>Couldn't find what you were looking for</p>
        <p>Куда мы лезем?</p>";
} elseif ($error == "500") {
    echo "<h1>500</h1>
        <p>Internal Server Error</p>";
} elseif ($error == "503") {
    echo "<h1>503</h1>
        <p>Service Unavailable</p>";
} elseif ($error == "405") {
    header('Location: https://yoursite.com');
    exit;
} else {
    echo "<h2>This page is designed to display errors.</h2>
        <h3>Example: error.php?e=404</h3>
        <h3>List of errors: </h3>
        <h4>400, 401, 403, 404, 500, 503</h4>";
}

//end body
echo "
<button onclick='window.history.back(1)'>Go Back</button>
</div>
</body>";

?>
