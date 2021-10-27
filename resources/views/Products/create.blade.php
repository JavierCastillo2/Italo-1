
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
        <div class="col-md-4">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <br/>
                <div class="form-group">
                    <label for="">ID de la empresa</label>
                    <input type="text" class="form-control" name="companies_id">
                </div>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" class="form-control" name="precio">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione la imagen</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <br/>
                    <hr>
                    <div class="form-group">
                        <label for=""></label>
                        <button class="btn btn-primary" type="submit">Crear Producto</button>
                        <a href="{{ url('products') }}" class="btn btn-danger">Cancelar</a>
                    </div>
            </form>
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

