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
</header>

      <div class="section">
          <div class="form-parent">
               <div class="formulaire">
                  <h2>Ecrivez-nous</h2>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, dolorem.</p>
                  <form>
                        <div>
                            <label htmlFor="">Prenom et Nom</label>
                            <input type="text" class="item-input" name="name" placeholder="donner votre nom complet" />
                        </div>
                        <div>
                            <label htmlFor="">Adresse Email</label>
                            <input type="text" class="item-input" name="email" placeholder="donner votre email" />
                        </div>
                        <div>
                            <label htmlFor="">Telephone</label>
                            <input type="text" class="item-input" name="telephone" placeholder="donner votre telephone" />
                        </div>
                        <div>
                            <label htmlFor="">Votre Message</label>
                            <textarea name="decription" id="" cols="30" rows="4" placeholder="ecrivez ici votre message" class="messgae"></textarea>
                        </div>
                        <button type="submit" class="button">Envoyer</button>
                  </form>
               </div>
               <div class="section-image">
                   <img src=""alt="" srcset="" />
               </div>
          </div>
       </div>


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
</body>
</html>