<nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="{{action('User\HomeController@index')}}">
                                <img src="{{asset('public/asset/')}}/img/logo.png" alt="Site logo">
                                Travello
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white ml-3">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\HomeController@index')}}">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\CarController@index')}}">Car</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\HomeController@hotel')}}">Hotels</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\BlogController@place')}}">Places</a>
                                  </li>
								  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\BlogController@index')}}">Blog</a>
                                  </li>
								  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\GalleryController@index')}}">Gallery</a>
                                  </li>
								  <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\HomeController@contact')}}">Contact</a>
                                  </li>
                                </ul>
                            </div>                            
                        </nav>  