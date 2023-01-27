<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Despesas</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #15141a;
            background-image: linear-gradient(60deg, #15141a 0%, #2a0435 100%);
        }

        #container {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        #left-container {
            align-items: left;
            width: 60%;
            margin: 1rem;
        }

        table {
            font-size: 0.9rem;
            border-radius: 15px;
        }

        .formulario {
            width: auto;
        }

        .confirmar-exclusao {
            width: 40rem;
        }

        .borda {
            width: 120px;
            padding-left: 35px;
            border: 2px solid white;
            border-radius: 30px;
        }
    </style>
</head>

<body>