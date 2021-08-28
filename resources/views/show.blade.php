<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detalhes do {{$investor->name}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form method="post" action="{{ route('investors.update',$investor->id) }}">
          @csrf
          @method("put")
            <div class="form-group">
                <label>Id</label>
                <input value="{{$investor->id}}" type="text" readonly="readonly" class="form-control"/>
              </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input value="{{$investor->name}}" type="text" class="form-control" id="name" name="name" placeholder="Alex Tromboghozy"/>
              </div>
            <div class="form-group">
                <label for="capital">Capital</label>
                <input value="{{$investor->capital}}" type="number" class="form-control" id="capital" name="capital" placeholder="R$ 1000,00"/>
              </div>
              <div class="form-group">
                <label for="period">Prazo</label>
                <select class="form-control" id="period" name="period">
                  @if ($investor->period == 'Semanal')
                  <option selected value="Semanal">Uma semana</option>
                  <option value="Mensal">Um mês</option>
                  <option value="Anual">Um ano</option>
                  @elseif($investor->period == 'Mensal')
                  <option value="Semanal">Uma semana</option>
                  <option selected value="Mensal">Um mês</option>
                  <option value="Anual">Um ano</option>
                  @else
                  <option value="Semanal">Uma semana</option>
                  <option value="Mensal">Um mês</option>
                  <option selected value="Anual">Um ano</option>
                  @endif
                </select>
              </div>
            <div class="form-group">
              <label for="toleration">Tolerância</label>
              <select class="form-control" id="toleration" name="toleration">
                @if ($investor->toleration == 'Conservador')
                <option value="Conservador" selected>Conservador</option>
                <option value="Moderado">Moderado</option>
                <option value="Arrojado">Arrojado</option>
                @elseif($investor->toleration == 'Moderado')
                <option value="Conservador">Conservador</option>
                <option value="Moderado" selected>Moderado</option>
                <option value="Arrojado">Arrojado</option>
                @else
                <option value="Conservador">Conservador</option>
                <option value="Moderado">Moderado</option>
                <option value="Arrojado" selected>Arrojado</option>
                @endif
                
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
          </form>
          <form method="post" action="{{ route('investors.delete', $investor->id) }}">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger">Deletar {{$investor->name}}</button>
          </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
