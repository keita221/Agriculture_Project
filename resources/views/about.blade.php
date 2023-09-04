<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            background-color: #dedede;
        }
    </style>
    <title>Document</title>
</head>
<body>
<header class="head">
         <div class="container">
          <div class="menu">
                <div class="logo">
                    <img src="{{ asset('img/Group 42.png') }}" alt="" srcset="">
                </div>
                <div class="item-menu">
                   <ul class="item-ul">
                      <li><a href="/" class="item-li">Home</a></li>
                      <li><a href="/culture" class="item-li">Cultures</a></li>
                      <li><a href="/about" class="item-li">About</a></li>
                      <li><a href="/contact" class="item-li">Contact</a></li>
                   </ul>
                </div>
                <div class="item">
                     <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="button1" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                    <a class="deconnexion" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
          </div>

          <section class="section section-baige">
    			    <div class="container">
    		     
             <div className='item-classe'>

                  <div>
                      <h1 className="section-title1">A Propos de nous</h1>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis laborum quasi et 
                        vero aspernatur quam harum nam libero. Error quos ab exercitationem tempore dicta quae
                         dolorem necessitatibus ratione mollitia enim aliquam facere possimus optio obcaecati
                          vitae nobis odit et qui reprehenderit, tenetur doloribus. Quisquam ipsum sapiente 
                          quae, atque necessitatibus tenetur nihil voluptate molestias saepe, nostrum laborum 
                           deleniti repellendus assumenda dolor fugiat. Quod voluptatibus nisi amet totam nam!
                            Temporibus ullam quos tenetur recusandae numquam aperiam nobis, mollitia veritatis
                             unde quo ratione fuga autem ut dolor ex eaque ducimus eum similique nam quibusdam 
                             dolore impedit odit fugit alias! Perferendis, quaerat dolorum.
                      </p>
                      <input type="submit" name="" id="env" className='button' value="Nous Contactez"/>
                  </div>

                 

             </div>

    			</div>
    		</section>

            <section class="section section-white">
                <div class="container">

                <h3 class="section-title2">Quelqu'uns de nos secteurs de travailles</h3>

                  <div className="item-client">
                    <div>
                      <img src={partenaire} alt="" />
                    </div>
                    <div>
                      <img src={partenaire1} alt="" />
                    </div>
                    <div>
                      <img src={partenaire2} alt="" />
                    </div>
                    <div>
                      <img src={partenaire3} alt="" />
                    </div>
                    <div>
                      <img src={partenaire4} alt="" />
                    </div>
                  </div>
                </div>
    		</section>

    <footer>
        <div class="container">
          <div class='footer-item'>
            <div>
              <div>
                <img src="{{ asset('img/Group 42.png') }}" alt="" srcset="">
              </div>
              <p class='item-pied'>adipisicing elit. Optio ratione itaque sequi rem vel ipsa numquam at nam unde explicabo!</p>
            </div>
            <div>
              <h4 class='item-h4'>Get in Touch</h4>
              <p class='item-pied'> 8819 Ohio St. South Gate, CA 90280.</p>
              <p class='item-pied'>charodesignestudio@gmail.com</p>
              <p class='item-pied'>+221 337899087.</p>
            </div>
            <div>
              <div class='item-p'>
                <p class='ronded'><a href="" class='rond'>FB</a></p>
                <p class='ronded'><a href="" class='rond'>IN</a></p>
                <p class='ronded'><a href="" class='rond'>LN</a></p>
                <p class='ronded'><a href="" class='rond'>YB</a></p>
              </div>
              <p class='item-pied'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, assumenda?.</p>
            </div>
            <div>
              <h4 class='item-h4'>Join a Newsletter</h4>
              <div>
                <label htmlFor="">your email</label>
                <input type="text" class='inpute' placeholder='ecrire ici...'/>
              </div><br />
                <input type="submit" name="" id="env" class='button1'/>
            </div>
          </div>
        </div>
    </footer>
</header>
</body>
</html>