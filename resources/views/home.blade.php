<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casmart - Biggest shopping center</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <div class="header-search">
        <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

      <a href="#" class="logo">
        <img src="/images/books.gif" alt="Casmart logo" width="65" height="31">
      </a>

      <div class="header-actions">
      <a href="dashboard">
        <button class="header-action-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
           
          <p class="header-action-label">Perfil</p>
          
        </button>
        </a>

       

        <button class="header-action-btn">
         

          
        </button>

        <button class="header-action-btn">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <p class="header-action-label">Desejos</p>

          <div class="btn-badge" aria-hidden="true">10</div>
        </button>

      </div>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="/images/books.png" alt="Casmart logo" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Sobre</a>
          </li>

          <li>
            <a href="#produtos" class="navbar-link">Livros</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Contato</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('/images/img2.jpg')">
        <div class="container">

          <div class="hero-content" >

            <p class="hero-subtitle" >Descubra novos mundos</p>

            <h2 class="h1 hero-title">The Book House</h2>
            <a href="#produtos">
            <button class="btn btn-primary">VER MAIS</button>
            </a>
          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

    



      





      <!-- 
        - #PRODUCT
      -->

      <section id ="produtos" class="section product">
        <div class="container">

          <h2 class="h2 section-title">Produtos</h2>

      
          <ul class="product-list">
@foreach($livros -> shuffle() as $livros)
            <li>
              <div class="product-card">

                <figure class="card-banner">

              
                <a href="#">
                    <img src="images/livros/{{$livros-> image}}" alt="Varsi Leather Bag" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>
                 

                  <div class="card-actions">

                 

                    <button class="card-action-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">{{$livros -> nome}}</a>
                  </h3>
                  <h3 class="h4 card-title">
                    <a href="#">{{$livros -> autor}}</a>
                  </h3>

                  <div class="card-price">
                    <data >{{$livros -> valor}}</data>

                  </div>
                  
                  <div class="card-price">
                    <data >{{$livros -> categoria}}</data>

                  </div>
                </div>

              </div>
            </li>
@endforeach
          

          </ul>

          <button class="btn btn-outline">View All Products</button>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">

          <h2 class="h2 section-title">Sobre nós</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="/images/livro1.jpg" alt="Worthy Cyber Monday Fashion From Casmart" loading="lazy"
                      width="1020" height="700px" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  

                  <h3 class="h3 card-title">
                    <a href="#">Um site desenvolvido para te ajudar a levar novos mundos ao mundo</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="/images/livro2.jpg" alt="Holiday Home Decoration I’ve Recently Ordered"
                      loading="lazy" width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">
                <ul class="card-meta-list">

                    
</ul>

                 

                  <h3 class="h3 card-title">
                    <a href="#">Basta se cadastrar</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="/images/livro3.jpg" alt="Unique Ideas for Fashion You Haven’t heard yet"
                      loading="lazy" width="1020" height="700" class="w-100">
                  </a>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    
                  </ul>

                  <h3 class="h3 card-title">
                    <a href="#">Unique Ideas for Fashion You Haven’t heard yet</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





     

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="/images/books.png"  width="50" alt="Casmart logo">
          </a>

        

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

       
        

   

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Ajuda</p>
          </li>

          <li>
            <p class="footer-list-title">Fale conosco</p>
          </li>


        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

        </ul>


      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>