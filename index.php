<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- vuejs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.2/axios.min.js"></script>

</head>
<body class="bg-dark">
    <div id="app">
    <div class="container">
        <div class="form-control">
            <ul  class="list-unstyled d-flex flex-column">
                <li class="border-bottom p-2">prova
                    <button class="btn btn-danger">DELETE</button>
                </li>
            </ul>
        </div>
        <div class="form-control">
            <input type="text" name="newEl">
            <button>Inserisci</button>
        </div>
    </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>