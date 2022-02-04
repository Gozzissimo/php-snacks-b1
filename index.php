<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <main id="app">
        <ul class="flex">
            <li v-for="auto in autoList" class="card ">
                <div class="img">
                    <img :src="`img/${auto.foto}`" :alt="auto.id">
                </div>
                <div class="text">
                    <div>{{ auto.modello }}</div>
                    <div>{{ auto.allestimento }}</div>
                </div>
            </li>
        </ul>
    </main>
    
    <script src="js/script.js"></script>
</body>
</html>