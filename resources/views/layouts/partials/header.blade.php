<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('familias.inicio')}}">
                <img src="https://scontent.ftru3-1.fna.fbcdn.net/v/t39.30808-6/293164450_353506510296821_5028679871833543578_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFD4cttxTLclbsoQcOHkIGEoLi0DWyc8iGguLQNbJzyIS2XnMQut1IxosSiVv7juKAyDVYS4iIHSAu62Y8Xsz9b&_nc_ohc=Nz7O8YoQwPwAX8kui5G&_nc_ht=scontent.ftru3-1.fna&oh=00_AT_fl-ufF_4b9zycm1LWJjItgFl4v8_M0daf6R3hzoLURg&oe=62E40E2F" alt="" width="30" height="24" class="d-inline-block align-text-top">
                CITEcall Trujillo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li>
                        <a class="nav-link {{request()->routeIs('familias.*') ? 'active servicio-ctivo':''}}" href="{{route('familias.inicio')}}">Familia</a>
                    </li>
                    <li>
                        <a class="nav-link {{request()->routeIs('flujodecajas.*') ? 'active servicio-ctivo':''}}" href="{{route('flujodecajas.inicio')}}">Flujo de Caja</a>
                    </li>
                    <li>
                        <a class="nav-link {{request()->routeIs('listas.*') ? 'active servicio-ctivo':''}}" href="{{route('listas.inicio')}}">Listas</a>
                    </li>
                    <li>
                        <a class="nav-link disabled">Mas...</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
</header>