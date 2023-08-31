<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>culutres</title>
</head>
<body class="body">
      <header class="head">
         <div class="container">
          <div class="menu">
                <div class="logo">
                    <img src="{{ asset('img/Group 42.png') }}" alt="" srcset="">
                </div>
                <div class="item-menu">
                   <ul class="item-ul">
                   <a href=""><li class="item-li">Home</li></a>
                      <li class="item-li"><a href="">Cultures</a></li>
                      <li class="item-li"><a href="">About</a></li>
                      <li class="item-li"><a href="">Contact</a></li>
                   </ul>
                </div>
                <div class="item">
                   <a href="{{ route('login') }}" class="inscrie">Se Connecter</a>
                </div>
            </div>
          </div>
      </header>
      <main>
           <div class="section section-img">
                 <div class="container">
                    <h1 class="titre">Faites-vous decouvrir les meilleurs<br>
                          Culture de Agriculture Galsen</h1>
                    <p class="para">Decouvriez des cultures 
                         de 100% naturel </p>
                    <a href="" class="button">Nous ecrire</a>
                 </div>
           </div> 
           <section class="section section-produit">
                <p class="cat">categories</p>
                <h2 id="titre">Nos Cultures</h2>
                   
           </section>
           <section class="section section-activites">
                <p class="cat">Partenariat</p>
                <h2 id="titre">Nos Activites de Travail</h2> 
                 <div class="part">
                    <div>
                       <img src="{{ asset('img/act1 (1).png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/act1 (2).png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/act1 (3).png') }}" width="230px" srcset="">
                    </div>
                 </div>
                 <br>
                    <div class="part">
                    <div>
                       <img src="{{ asset('img/act1 (4).png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/act1 (5).png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/act1 (6).png') }}" width="230px" srcset="">
                    </div>
                 </div>
           </section>
           <section class="section section-produit">
                <p class="cat">Services</p>
                <h2 id="titre">Nos Partenaires de Travail</h2> 
                <div class="part">
                    <div>
                       <img src="{{ asset('img/part1.png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/part2.png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/part4.png') }}" width="230px" srcset="">
                    </div>
                    <div>
                       <img src="{{ asset('img/part5.png') }}" width="230px" srcset="">
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
      </main>
</body>
</html>