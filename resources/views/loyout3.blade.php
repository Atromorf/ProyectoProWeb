<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/loyout0.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Weirdo comics</title>
            <!-- Fonts -->
</head>
<body>
    <!-- Navbar -->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <a href="VendeU"><h5 class="text-white h4"><font color="yellow">Weirdo Comics</font></h5></a>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('articv.index')?'text-danger fw-bold':'' }}" aria-current="page" href="{{ route('articv.index') }}"><font color="white">Articulos</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('VentV')?'text-danger fw-bold':'' }}" aria-current="page" href="{{ route('VentV') }}"><font color="white">Ventas</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('comicsv.create')?'text-danger fw-bold':'' }}" aria-current="page" href="{{ route('comicsv.create') }}"><font color="white">Registro de Comic</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('regAV')?'text-danger fw-bold':'' }}" aria-current="page" href="{{ route('regAV') }}"><font color="white">Registro de Articulo</font></a>
          </li>
          <li class="nav-item">
            <span class="text-muted"><a href="/welcome"><img src="/IMG/quitar-usuario2.png"></a></span>
          </li>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    <!-- Fin Navbar -->
    
    <!-- Contenido -->

        @yield('contenido')
    
    <!-- pie de pagina -->
    <footer class="footer">
        <a class="enlace-footer" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 226 226"
                style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <path d="M0,226v-226h226v226z" fill="#000000"></path>
                    <g fill="#ffffff">
                        <path
                            d="M113,18.83333c-52.00825,0 -94.16667,42.15842 -94.16667,94.16667c0,52.00825 42.15842,94.16667 94.16667,94.16667c52.00825,0 94.16667,-42.15842 94.16667,-94.16667c0,-52.00825 -42.15842,-94.16667 -94.16667,-94.16667zM113,37.66667c41.60283,0 75.33333,33.7305 75.33333,75.33333c0,37.04891 -26.77936,67.78251 -62.01758,74.08269v-45.50163h22.27263l3.31054,-25.65673h-25.43603v-16.35042c-0.00001,-7.42034 2.06798,-12.43295 12.70882,-12.43295h13.4445v-22.89795c-6.54458,-0.66858 -13.11551,-0.99361 -19.69776,-0.97477c-19.53017,0 -32.90315,11.92003 -32.90315,33.80436v18.88851h-22.07031v25.65673h22.07031v45.52003c-35.40101,-6.16634 -62.34864,-36.97342 -62.34864,-74.13786c0,-41.60283 33.7305,-75.33333 75.33333,-75.33333z">
                        </path>
                    </g>
                </g>
            </svg>
        </a>

        <a class="enlace-footer" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" x="30px" y="60px" width="60" height="60" viewBox="0 0 172 172"
                style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="#000000"></path>
                    <g fill="#ffffff">
                        <path
                            d="M86,11.46667c-41.09653,0 -74.53333,33.4368 -74.53333,74.53333c0,41.09653 33.4368,74.53333 74.53333,74.53333c41.09653,0 74.53333,-33.4368 74.53333,-74.53333c0,-41.09653 -33.4368,-74.53333 -74.53333,-74.53333zM66.88516,34.4h38.21849c17.91667,0 32.49636,14.57422 32.49636,32.48516v38.21849c0,17.91667 -14.57423,32.49636 -32.48516,32.49636h-38.21849c-17.91667,0 -32.49636,-14.57423 -32.49636,-32.48516v-38.21849c0,-17.91667 14.57422,-32.49636 32.48516,-32.49636zM66.88516,45.86667c-11.58707,0 -21.01849,9.43689 -21.01849,21.02969v38.21849c0,11.58707 9.43689,21.01849 21.02969,21.01849h38.21849c11.58707,0 21.01849,-9.43689 21.01849,-21.02969v-38.21849c0,-11.58707 -9.43689,-21.01849 -21.02969,-21.01849zM112.76302,55.41849c2.10987,0 3.81849,1.70862 3.81849,3.81849c0,2.10987 -1.70862,3.82969 -3.81849,3.82969c-2.10987,0 -3.82969,-1.71982 -3.82969,-3.82969c0,-2.10987 1.71982,-3.81849 3.82969,-3.81849zM86,57.33333c15.8068,0 28.66667,12.85987 28.66667,28.66667c0,15.8068 -12.85987,28.66667 -28.66667,28.66667c-15.8068,0 -28.66667,-12.85987 -28.66667,-28.66667c0,-15.8068 12.85987,-28.66667 28.66667,-28.66667zM86,68.8c-9.4993,0 -17.2,7.7007 -17.2,17.2c0,9.4993 7.7007,17.2 17.2,17.2c9.4993,0 17.2,-7.7007 17.2,-17.2c0,-9.4993 -7.7007,-17.2 -17.2,-17.2z">
                        </path>
                    </g>
                </g>
            </svg>
        </a>
        <a class="enlace-footer" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" x="30px" y="30px" width="48" height="48" viewBox="0 0 172 172"
                style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="#000000"></path>
                    <g fill="#ffffff">
                        <path
                            d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667zM86,28.66667c31.66233,0 57.33333,25.671 57.33333,57.33333c0,31.66233 -25.671,57.33333 -57.33333,57.33333c-5.27193,0 -10.35229,-0.76706 -15.20117,-2.09961c1.52517,-3.07269 2.8933,-6.3108 3.63933,-9.18229c0.82417,-3.15333 4.19922,-16.01302 4.19922,-16.01302c2.193,4.18533 8.60247,7.74056 15.42513,7.74056c20.30317,0 34.9375,-18.67454 34.9375,-41.88021c0,-22.2525 -18.15294,-38.89876 -41.51628,-38.89876c-29.06083,0 -44.48372,19.50442 -44.48372,40.74642c0,9.87567 5.25496,22.17098 13.66146,26.09115c1.27567,0.59483 1.95975,0.33683 2.25358,-0.89583c0.22933,-0.93883 1.36682,-5.51408 1.87565,-7.64258c0.16483,-0.67367 0.08992,-1.26515 -0.46191,-1.93165c-2.78067,-3.3755 -5.01107,-9.57164 -5.01107,-15.35514c0,-14.8565 11.24584,-29.22656 30.40235,-29.22656c16.54066,0 28.12077,11.27507 28.12077,27.3929c0,18.2105 -9.19573,30.82226 -21.16406,30.82226c-6.60767,0 -11.57114,-5.45574 -9.98015,-12.16374c1.89917,-8.00516 5.58496,-16.64749 5.58496,-22.42383c0,-5.16717 -2.76275,-9.47624 -8.51042,-9.47624c-6.75817,0 -12.19173,6.98213 -12.19173,16.34896c0,5.96267 2.01563,9.99414 2.01563,9.99414c0,0 -6.66903,28.21461 -7.89453,33.46777c-0.60737,2.59249 -0.8101,5.66382 -0.82585,8.73438c-19.05164,-9.32011 -32.20801,-28.8455 -32.20801,-51.48242c0,-31.66233 25.671,-57.33333 57.33333,-57.33333z">
                        </path>
                    </g>
                </g>
            </svg>
        </a>

<p>Copyright© 2022-Todos los derechos reservados Weirdo Comics</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
