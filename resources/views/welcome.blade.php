<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/bulma.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <title>Test Bulma</title>
</head>
<body>

<div class="container">
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">
      <img src="{{asset('/img/Logo.png')}}" width="132" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item is-active">
        Home
      </a>

      <a class="navbar-item">
        Reservation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Movie News
          </a>
          <a class="navbar-item">
            New Teather
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            About Us
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<section class="hero video is-fullheight-with-navbar ">
  <div class="hero-video ">
    <video autoplay loop muted plays-inline class="back-video">
      <source src="{{asset('/img/ncfom-1.mp4')}}" type="video/mp4">
    </video>
  </div>

  <div class="hero-body columns ">
    <div class="container mt-6">
      <h1 class="title is-4 has-text-white ">NOW SHOWING!</h1>
        <a href="https://id.wikipedia.org/wiki/No_Country_for_Old_Men_(film)" target="_blank"><img  src="{{asset('/img/ncfom-title-1.png')}}" alt="No Country for Old Men" class="column image is-6 is-offset-0 ncfom"></a>
      <input type="submit" value="WATCH NOW" class="button is-responsive is-outlined is-white has-text-weight-bold mt-5 column is-6 py-2">
    </div>
  </div>
  </div>
</section>

<section class="section is-medium container is-primary ">
  <div class=" has-text-centered">
    <h1 class="title has-text-centered jadwal">
      Now Showing
    </h1>
    <div class="columns is-centered mt-5 ">
    <div class="card column is-2 mb-4 mx-3 ">
      <div class="card-image">
        <figure class="image is-2by3">
          <a href="">
          <img src="https://i.pinimg.com/originals/16/38/39/163839fed730562fe49422732e52be3f.jpg" alt="No More Country for Old Men">
          </a>
        </figure>
      </div>
      <div class="card-content">
        <div class="content">
          <h2 class="title has-text-weight-bold is-6">
            No Country for Old Men
          </h2>
        </div>
        <input type="submit" value="Buy Now" class="button is-outlined is-primary has-text-weight-semibold py-1 is-fullwidth">
      </div>
    </div>

    <div class="card column is-2 mb-4 mx-3">
    <div class="card-image">
        <figure class="image is-2by3">
          <a href="">
          <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/07/11/1356301783.jpg" alt="One Piece Film:Red" >
          </a>
        </figure>
      </div>
      <div class="card-content">
      <div class="content">
          <h2 class="title has-text-weight-bold is-6">
            One Piece Film:Red
          </h2>
        </div>
        <input type="submit" value="Buy Now" class="button is-outlined is-primary has-text-weight-semibold py-1 is-fullwidth">
      </div>
    </div>

    <div class="card column is-2 mx-3 mb-4">
    <div class="card-image">
        <figure class="image is-2by3">
          <a href="">
          <img src="https://awsimages.detik.net.id/community/media/visual/2017/12/07/ec351fea-d598-488f-ac4f-e6410340a2a5.jpeg?w=700&q=90" alt="Straight Outta Compton" >
          </a>
        </figure>
      </div>
      <div class="card-content">
      <div class="content">
          <h2 class="title has-text-weight-bold is-6">
            Straight Outta Compton
          </h2>
        </div>
        <input type="submit" value="Buy Now" class="button is-outlined is-primary has-text-weight-semibold py-1 is-fullwidth">
      </div>
    </div>

    <div class="card column is-2 mx-3 mb-4">
    <div class="card-image">
        <figure class="image is-2by3">
          <a href="">
          <img src="https://www.miramax.com/assets/Pulp-Fiction1.png" alt="Pulp Fiction" >
          </a>
        </figure>
      </div>
      <div class="card-content">
      <div class="content">
          <h2 class="title has-text-weight-bold is-6">
            Pulp <br> Fiction
          </h2>
        </div>
        <input type="submit" value="Buy Now" class="button is-outlined is-primary has-text-weight-semibold py-1 is-fullwidth mt-5">
      </div>
    </div>
    
    <div class="card column is-2 mx-3 mb-4">
    <div class="card-image">
        <figure class="image is-2by3">
          <a href="#">
          <img src="https://ae01.alicdn.com/kf/HTB1T_d7IFXXXXb.XXXXq6xXFXXX4/HD-home-Wallpaper-Poster-HOT-Forrest-Gump-Posters.jpg" alt="Forrest Gump" >
          </a>
        </figure>
      </div>
      <div class="card-content">
      <div class="content">
          <h2 class="title has-text-weight-bold is-6">
            Forrest <br>
            Gump
          </h2>
        </div>
        <input type="submit" value="Buy Now" class="button is-outlined is-primary has-text-weight-semibold py-1 is-fullwidth">
      </div>
    </div>
    </div>
</section>




</body>
</html>