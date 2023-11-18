<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords"
    content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link rel="canonical" href="index.html" />

  <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Choose your prefered color scheme -->
  <!-- <link href="css/light.css" rel="stylesheet"> -->
  <!-- <link href="css/dark.css" rel="stylesheet"> -->

  <!-- BEGIN SETTINGS -->
  <!-- Remove this after purchasing -->
  <link href="{{ asset('assets/css/light.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  @yield('style')
  <style>
    body {
      opacity: 0;
    }
  </style>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
  <div class="wrapper">
    @include('partials.sidebar')
    <div class="main">
      @include('partials.navbar')

      <main class="content">
          @yield('content')
      </main>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a href="https://adminkit.io/" target="_blank" class="text-muted"><strong>AdminKit</strong></a> &copy;
              </p>
            </div>
            <div class="col-6 text-end">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-muted" href="index.html#">Support</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="index.html#">Help Center</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="index.html#">Privacy</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="index.html#">Terms</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="{{ asset('assets/js/app.js') }}"></script>
  <script src="{{ asset('assets/js/datatables.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
			$("#datatables-reponsive").DataTable({
				responsive: true,
                //changer le message de la pagination
                "language": {
                    "paginate": {
                        "previous": "Précédent",
                        "next": "Suivant"
                    },
                    "search": "Rechercher",
                    "lengthMenu": "Afficher _MENU_ éléments",
                    "zeroRecords": "Aucun élément trouvé",
                    "info": "Page _PAGE_ sur _PAGES_",
                }
                //message de la recherche dd

			});
		});
  </script>

</body>

</html>