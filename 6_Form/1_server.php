<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server Info</title>
</head>
<body>
    
    <h2>Get to know about different information related to PHP Server.</h2>
    <hr>

    <ul>

        <li>
            <p>Current Script Name: 
            <strong>
                <?= $_SERVER["PHP_SELF"] ?>   <!-- $_SERVER["REQUEST_URI"]  -->
            </strong>
            </p>
        </li>

        <li>
            <p>Server Software: 
            <strong>
                <?= $_SERVER["SERVER_SOFTWARE"] ?>
            </strong>
            </p>
        </li>

        <li>
            <p>Request Method: 
            <strong>
                <?= $_SERVER["REQUEST_METHOD"] ?>
            </strong>
            </p>
        </li>

        <li>
            <p>HTTP Host: 
            <strong>
                <?= $_SERVER["HTTP_HOST"] ?>
            </strong>
            </p>
        </li>

        <li>
            <p>Server Name: 
            <strong>
                <?= $_SERVER["SERVER_NAME"] ?>
            </strong>
            </p>
        </li>
        
        <li>
            <p>Server Port: 
            <strong>
                <?= $_SERVER["SERVER_PORT"] ?>
            </strong>
            </p>
        </li>

        <li>
            <p>Server Protocol: 
            <strong>
                <?= $_SERVER["SERVER_PROTOCOL"] ?>
            </strong>
            </p>
        </li>



        <li>
            <p>Remote Address: 
            <strong>
                <?= $_SERVER["REMOTE_ADDR"] ?>
            </strong>
            </p>
        </li>

        <li>
            <p>User Agent: 
            <strong>
                <?= $_SERVER["HTTP_USER_AGENT"] ?>
            </strong>
            </p>
        </li>

    </ul>
</body>
</html>