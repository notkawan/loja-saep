<?php
session_start();
include_once './Controllers/func.php';
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: /index.php');
} else {
    $logado = $_SESSION['email'];
    $id = $_SESSION['idusuarios'];
    if (empty($logado)) {
        header('Location: ./index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
   <title>Document</title>
       <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
     
</head>
<body>
<!-- NAV BAR AQUI -->

<nav class="bg-white dark:bg-white fixed w-full z-20 top-0 left-0">
  <div class=" flex items-center justify-between mx-auto ">

      <img src="./img/2.png" class="h-16 mr-5 max-md:h-10" alt="#">
  <div class="items-center m-auto flex justify-between w-full md:flex md:w-auto" id="navbar-sticky">
    <ul class="flex p-4 md:p-0 mt-4 m-auto align-center font-medium md:text-center rounded-lg bg-white md:mt-0 md:border-0 md:bg-white  max-md:text-xs max-md:p-2">

      <li>
        <a href="#" class=" py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100">Home</a>
      </li>

      <li>
        <a href="#" class=" py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100">Favoritos</a>
      </li>

      <li>

        <a class="cursor-pointer py-2 pl-3 pr-4 text-gray-900  rounded hover:bg-gray-100"  data-modal-toggle="authentication-modal">
    Login
    </a>

      </li>

      <li>
        <a class=" cursor-pointer py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100"  data-modal-toggle="cadastrar-modal">
      Cadastre-se
    </a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- MODAL -->
<div class="max-w-2xl mx-auto">
    

    <!-- Main modal -->
    <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-white">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-white hover:text-zinc-800 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="./Controllers/login.php">
                    <h3 class="text-xl font-medium text-black dark:text-black">Login</h3>
                    <div>
                        <input type="email" name="email" id="email" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-sm block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-whitedark:text-white" placeholder="CPF" required="">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Senha" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-sm block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-whitedark:text-white" required="">
                    </div>
                
                    <button type="submit" class="w-full text-black bg-white hover:bg-white text-sm px-5 py-2.5 text-center dark:bg-white dark:hover:bg-white border border-gray-300 rounded-sm focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 ">Cancelar</button>
                    <button type="submit" class="w-full text-white bg-zinc-800 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-zinc-800 dark:hover:bg-zinc-800">Confirmar</button>
                    <div class="text-sm font-medium text-zinc-800 dark:text-zinc-800">
                        Sem conta? <a href="#" class="text-red-700 hover:underline dark:text-red-500" >Crie uma!</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>

<!-- MODAL-CADASTRO -->
<div class="max-w-2xl mx-auto">


    <!-- Main modal CADASTRO -->
    <div id="cadastrar-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content CADASTRO -->
            <div class="bg-white rounded-lg shadow relative dark:bg-white">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-white hover:text-zinc-800 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="cadastrar-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="./Controllers/cadastro-controller.php">
                    <h3 class="text-xl font-medium text-black dark:text-black">Cadastrar</h3>
                    <div>
                        <input type="text" name="usuario" id="usuario" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-sm block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-whitedark:text-white" placeholder="Usuario" required="">
                    </div>
                    <div>
                        <input type="email" name="email" id="email" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-sm block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-whitedark:text-white" placeholder="e-mail" required="">
                    </div>
                    <div>
                        <input type="text" name="cpf" id="text" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-sm block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-whitedark:text-white" placeholder="CPF" required="">
                    </div>
                    <div>
                        <input type="password" name="senha" id="password" placeholder="Senha" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-sm block w-full p-2.5 dark:bg-white dark:border-gray-500 dark:placeholder-whitedark:text-white" required="">
                    </div>
                
                    <button type="submit" class="w-full text-black bg-white hover:bg-white text-sm px-5 py-2.5 text-center dark:bg-white dark:hover:bg-white border border-gray-300 rounded-sm focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 ">Cancelar</button>
                    <button type="submit" class="w-full text-white bg-zinc-800 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-800 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-zinc-800 dark:hover:bg-zinc-800">Confirmar</button>
                </form>
            </div>
        </div>
    </div> 
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
<!-- END MODAL -->

<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid lg:grid-cols-2 gap-6 justify-center align-center m-auto">
    <!-- Card -->
    <a class="group relative block " href="#">
      <div class="flex-shrink-0">
         
        <img class="max-md:w-52" src="./produtos/Zumbi Jean.jpg" alt="#">
       
      </div>

      <div class="absolute top-0 inset-x-0 z-10">
        <div class="p-4 flex flex-col h-full sm:p-6">
        </div>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group relative block" href="#">
      <div class="flex-shrink-0 ">
        <img class="max-md:w-52" src="./produtos/Martin Jean.jpg" alt="#">
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->

<!-- Grid -->

<div class="grid p-5 grid-cols-4 gap-4 ">
  <div class="">
<img class="max-md:w32" src="./produtos/Calça Mantis.jpg" alt="">
 <!-- PARTE DO CARD COM ITENS DE CURTIR E FAVORITAR -->
 <span class="flex align-center justify-center">
 <img id="like" class="cursor-pointer" src="./icones/like.svg" alt="">
 <img src="./icones/favorite.svg" alt="">
</span>
  </div>

  <div>
<img class=" " src="./produtos/Calção Bob.jpg" alt="">
<span class="flex align-center justify-center">
   <!-- LIKE -->
   <svg  width="24" height="24" id="gostei" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="m12.516 2.25-.235.21L7.195 7.5H3.75v12h12.633c1.057 0 1.98-.747 2.203-1.781l1.617-7.5C20.5 8.833 19.415 7.5 18 7.5h-4.313l.141-.563c.152-.117.25-.166.469-.468.351-.48.703-1.225.703-2.227 0-1.07-.967-1.992-2.18-1.992h-.304Zm.539 1.57c.316.062.445.19.445.422 0 .677-.205 1.096-.398 1.36-.194.263-.329.328-.329.328l-.257.14-.094.305-.445 1.688-.235.937H18c.495 0 .83.43.727.914l-1.594 7.5a.755.755 0 0 1-.75.586H8.25V8.555l4.805-4.735ZM5.25 9h1.5v9h-1.5V9Z"></path>
  
</svg>
<p class="mr-10" id="contador"></p>

<!-- FAVORITO -->
<svg width="24" height="24" id="favorito" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="m12 1.594-.68 1.547L8.883 8.6l-5.953.633-1.688.188 1.266 1.125 4.43 4.008-1.243 5.86-.351 1.64 1.476-.844 5.18-3 5.18 3 1.476.844-.351-1.64-1.242-5.86 4.43-4.008 1.265-1.125-1.688-.188-5.953-.632L12.68 3.14 12 1.594Zm0 3.68 1.922 4.335.187.399.422.047 4.711.492-3.515 3.164-.329.305.094.421.985 4.618-4.102-2.344-.375-.234-.375.234-4.102 2.344.985-4.617.094-.422-.329-.305-3.515-3.164 4.71-.492.423-.047.187-.399L12 5.273Z"></path>
</svg>


 <!-- DESLIKE -->
 <svg class="ml-10" width="24" height="24" id="deslike" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M7.617 4.5c-1.057 0-1.98.747-2.203 1.781l-1.617 7.5C3.501 15.167 4.585 16.5 6 16.5h4.313l-.141.563c-.152.117-.249.167-.469.468A3.733 3.733 0 0 0 9 19.758c0 1.07.967 1.992 2.18 1.992h.305l.234-.21 5.086-5.04h3.445v-12H7.617Zm0 1.5h8.133v9.445l-4.805 4.735c-.316-.062-.445-.19-.445-.422 0-.677.205-1.096.399-1.36.193-.263.328-.328.328-.328l.258-.14.093-.305.446-1.688.234-.937H6c-.495 0-.829-.43-.726-.914l1.593-7.5A.755.755 0 0 1 7.617 6Zm9.633 0h1.5v9h-1.5V6Z"></path>
</svg>
<p  id="contadorDeslike"></p>
</span>
  </div>

  <div>
    <img class="" src="./produtos/Camisa Jude.jpg" alt="">
    <span class="flex align-center justify-center">
 <img id="like" class="cursor-pointer" src="./icones/like.svg" alt="">
 <img src="./icones/favorite.svg" alt="">
</span>
  </div>

  <div>
<img class="  " src="./produtos/Camisa Kurt.jpg" alt="">
<span class="flex  align-center justify-center">
 <img id="like" class="cursor-pointer" src="./icones/like.svg" alt="">
 <img id="favorito" class="cursor-pointer" src="./icones/favorite.svg" alt="">
</span>
  </div>
</div>

<!-- FOOTER -->

<footer class="px-4 divide-y dark:bg-white dark:text-gray-100">
	<div class="container flex justify-center py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
		<div class="">
	
				<div class="w-12 h-12">
					<img class="align-center" src="./img/2.png">
				</div>
			
		</div>
		</div>
	</div>
	<div class="py-6 text-sm text-center dark:text-gray-400">© 1968 Company Co. All rights reserved.</div>
</footer>
<script src="./script.js"></script>
</body>
</html>