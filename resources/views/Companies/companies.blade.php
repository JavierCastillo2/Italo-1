<!DOCTYPE html>

<html lang="en">
<head>
<base href="./../">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="description" content="CoreUI - Bootstrap Admin Template">
<meta name="author" content="Łukasz Holeczek">
<meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">
<title>Italo</title>
<link rel="manifest" href="assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
<link rel="stylesheet" href="css/simplebar.css">
<link rel="stylesheet" href="css/vendors/simplebar.css">

<link href="css/style.css" rel="stylesheet">

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
<script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-118965717-1');
    </script>
<link rel="canonical" href="https://coreui.io/docs/4.0/components/buttons/">
</head>
<body>

<div>@include('layouts.components.sidebar')</div>

<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
@include('layouts.components.header')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <a href="{{ url('companies/create') }}" class="btn btn-primary">Crear Empresa</a>
            @if (session('update'))
                <div class="alert alert-success mt-3" >
                    {{ session('update') }}
                </div>
            @elseif (session('delete'))
            <div class="alert alert-danger mt-3" >
                {{ session('delete') }}
            </div>
            @elseif (session('create'))
            <div class="alert alert-info mt-3" >
                {{ session('create') }}
            </div>
            @endif
            <div class="table-reponsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Nit</th>
                            <th>Fecha de creacion</th>
                            <th>Fecha de Actualizacion</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                    <tbody>
                        @foreach ( $companies as $Compani )
                        <tr>
                            <td>{{ $Compani->id }}</td>
                            <td>{{ $Compani->name }}</td>
                            <td>{{ $Compani->nit }}</td>
                            <td>{{ $Compani->created_at }}</td>
                            <td>{{ $Compani->updated_at }}</td>
                            <td>
                                <form action="{{ route('companies.destroy', $Compani->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('companies.show',$Compani->id )}}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href= "{{route('companies.edit',$Compani->id )}}" class="btn btn-sm btn-warning">Editar</a>
                                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           {{ $companies-> Links() }}
        </div>
    </div>
</div>

</div>

<script src="js/coreui.bundle.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script>
      if (document.body.classList.contains('dark-theme')) {
        var element = document.getElementById('btn-dark-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-dark-theme').checked = true;
        }
      } else {
        var element = document.getElementById('btn-light-theme');
        if (typeof(element) != 'undefined' && element != null) {
          document.getElementById('btn-light-theme').checked = true;
        }
      }

      function handleThemeChange(src) {
        var event = document.createEvent('Event');
        event.initEvent('themeChange', true, true);

        if (src.value === 'light') {
          document.body.classList.remove('dark-theme');
        }
        if (src.value === 'dark') {
          document.body.classList.add('dark-theme');
        }
        document.body.dispatchEvent(event);
      }
    </script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
<script>
    </script>
</body>
</html>

