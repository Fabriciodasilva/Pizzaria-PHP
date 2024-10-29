<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pizza App</title>
    @vite("resources/css/welcome.css")
  </head>
  <body>
    <div class="section1">
      <h1>Pizza App</h1>
      <div class="text1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut atque,
        necessitatibus repellendus illum sint iure at doloribus odit tenetur
        possimus vitae laboriosam excepturi eaque. Dolorem, exercitationem quo.
        Accusamus, amet nam.
      </div>
      <div class="sign">
        <a href="{{route("register")}}"><button class="signup">Register</button></a>
        <a href="{{route("login")}}"><button class="signin">Login</button></a>
      </div>
    </div>
    <div class="section2">
      <h2>About Pizza App</h2>
      <div class="content">
        <div class="text">
          Nulla sollicitudin ipsum a dolor consectetur, eget cursus sem
          venenatis. Praesent justo mi, mattis vel mollis eget, fermentum quis
          mi. Nullam ut rhoncus urna.
        </div>
        <div class="img2">
          <img
            src="/section-02.jpg"
            alt="Pizzaria estilo retro com algumas mesas e cadeiras"
            height="100%"
            width="100%"
          />
        </div>
      </div>
    </div>
    <div class="section3">
      <h2>A lot of flavors to Taste!!</h2>
      <div class="section3-content">
        <div class="img3">
          <img
            src= "/section-03.jpg"
            alt="3 pizzas de diferentes sabores em formas de metal em cima de uma mesa de madeira"
            width="100%"
            height="100%"
          />
        </div>
        <div class="section3-text">
          <div>
            Mauris rhoncus ullamcorper nibh vitae mollis. Ut mollis mollis
            porta. In in lacus neque. Etiam vel elit nisl. Curabitur sed metus
            ut felis gravida ornare.
          </div>
          <a href="{{route("menu")}}"><button class="signup">Menu</button></a>
        </div>
      </div>
    </div>
  </body>
</html>
