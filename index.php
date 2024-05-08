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
                        <input  v-model.trim="searchBar" class="form-control " name="email"  type="text" placeholder="Inserisci qui il titolo del disco">
                        <input @click.prevent.default="fetchData" class="btn btn-primary " type="submit" value="Cerca">
                    </div>
                </form>
                <div class="container-sm py-5">
                    <div class="row" > 
                        <div v-for="disk in disks" class="col-4 py-2">
                            <div class="card p-2 " >  
                                <div class="card-img text-center">
                                    <img :src="disk.poster" alt="Immagine del disco corrente">
                                    <h2>{{ disk.author }}</h2>
                                </div> 
                                <div class="card-body p-2 border-top text-center">
                                   <ul class="list-unstyled ">
                                    <li class="">{{ disk.title }}</li>
                                    <li class="">{{ disk.genre }}</li>
                                    <li class="">{{ disk.year }}</li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <span v-else >Nessun risultato</span> -->
                </div>
            </div>
        </section>













    </div>









    <script src="./js/app.js"></script>
</body>
</html>

<style>
    img{
        width: 100%;
    }
</style>