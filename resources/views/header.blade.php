<header >
        <!-- header inner -->
        <div class="header" style="position: fixed; background-color: black; z-index: 150;top: 0;width:100%;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('images/logoWin.png') }}" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" style="display: flex; justify-content: flex-end;align-items: center;">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">Sobre nosotros</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Mision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Vision</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/rooms') }}">Habitaciones</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contactanos</a>
                              </li>
                           </ul>
                                <!-- <div class="sign_btn"><a href="#">Sign in</a></div> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>