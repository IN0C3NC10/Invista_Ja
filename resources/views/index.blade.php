<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Investidores</title>
    <link  rel="stylesheet" src="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        form{
          padding-left: 20%;
          padding-right: 20%;
        }

    </style>
</head>

<body class="antialiased">
    <form class="form" method="post" action="{{ route('investors.store') }}">
        @csrf
        <div class="form-group">
            <label>Id</label>
            <input type="text" readonly="readonly" class="form-control" />
        </div>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Alex Tromboghozy" />
        </div>
        <div class="form-group">
            <label for="capital">Capital</label>
            <input type="number" step="0.01" class="form-control" id="capital" name="capital" placeholder="R$ 1000,00"
                onchange="verifyNumber();" onclick="verifyNumber();" onfocus="verifyNumber();" />
            <label id="what" style="padding-left: 1%; color:red;"></label>
        </div>
        <div class="form-group">
            <label for="period">Prazo</label>
            <select class="form-control" id="period" name="period">
                <option value="Semanal">Uma semana</option>
                <option value="Mensal">Um mês</option>
                <option value="Anual">Um ano</option>
            </select>
        </div>
        <div class="form-group">
            <label for="toleration">Tolerância</label>
            <select class="form-control" id="toleration" name="toleration">
                <option value="Conservador">Conservador</option>
                <option value="Moderado">Moderado</option>
                <option value="Arrojado">Arrojado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{ asset('js/validation.js') }}"></script>

</html>
