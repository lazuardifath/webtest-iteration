<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Test Web Lazuardi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php 
    include './function/function.php';
        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numIterations = $_POST["bilangan"];
        $program = new Program();
        $output = $program->run($numIterations);
    }
?>