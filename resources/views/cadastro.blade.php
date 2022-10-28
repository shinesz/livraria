<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="/css/styleCadastro.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="text">Cadastro De Livros</div>
    <div class="content">
      <form method ="post" action="{{route('bdlivros')}}" enctype="multipart/form-data" >
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details" for ="image">Imagem do livro</span>
            <input name ="image" type="file" placeholder="Enter your name" required>
          </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome do Livro</span>
            <input name ="nome" type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Autor</span>
            <input name ="autor" type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Quantidade de Páginas</span>
            <input name ="paginas" type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Edição</span>
            <input name ="edicao" type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Valor</span>
            <input name ="valor" type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Editora</span>
            <input name ="editora" type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Categoria</span>
            <input  name ="categoria" type="text" placeholder="Confirm your password" required>
          </div>
        </div>
      
        <div class="button">
          <input type="submit" value="Register">
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>
