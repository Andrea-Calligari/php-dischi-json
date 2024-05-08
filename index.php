<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
</head>
<body class="bg-dark text-light">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <div id="app">
        <section class="py-5  ">
            <div class="container " >
                <form action="" method="POST"  >
                    <div class=" container d-flex justify-content-center align-items-center gap-3">
                        <input class="form-control " name="email"  type="text" placeholder="Inserisci qui il titolo del disco">
                        <input @click="fetchData()" class="btn btn-primary " type="submit" value="Iscriviti">
                    </div>
                </form>
                <ul class="list">
                    <li v-for="disk in disks">{{ disk.title }}</li>
                </ul>
            </div>
        </section>













    </div>









    <script src="./js/app.js"></script>
</body>
</html>