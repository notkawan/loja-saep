<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Document</title>
       <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

</head>
<body>
<!-- NAV BAR AQUI -->

<nav class="bg-white dark:bg-white fixed w-full z-20 top-0 left-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="./img/2.png" class="h-20 mr-10" alt="#">
  </a>
  <div class="flex md:order-2">
        <svg class="w-6 h-6" aria-hidden="true"></svg>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium  rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-white">
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-white rounded md:bg-transparent md:text-zinc-500 md:p-0" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-zinc-700 md:p-0 dark:text-zinc-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Favoritos</a>
      </li>
      <li>
        <button class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-zinc-700 md:p-0 dark:text-zinc-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" type="button" data-modal-toggle="authentication-modal">
    Login
    </button>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- MODAL -->
<div class="max-w-2xl mx-auto">
 
    <!-- Modal toggle -->
    

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
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
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
                        Sem conta? <a href="#" class="text-red-700 hover:underline dark:text-red-500">Crie uma!</a>
                    </div>
                </form>
            </div>
        </div>
    </div> 

    <p class="mt-5">This modal element is part of a larger, open-source library of Tailwind CSS components. Learn more by going to the official <a class="text-blue-600 hover:underline" href="#" target="_blank">Flowbite Documentation</a>.</p>
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid lg:grid-cols-2 gap-6">
    <!-- Card -->
    <a class="group relative block" href="#">
      <div class="flex-shrink-0">
        <img class="" src="./produtos/Zumbi Jean.jpg" alt="#">
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
        <img class="" src="./produtos/Martin Jean.jpg" alt="#">
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->

<!-- Grid -->

<div class="grid grid-cols-4 gap-4 flex-shrink-0">
  <div>
<img class="" src="./produtos/Calça Mantis.jpg" alt="">
  </div>
  <div>
<img class=" " src="./produtos/Calção Bob.jpg" alt="">
  </div>
  <div>
    <img class="" src="./produtos/Camisa Jude.jpg" alt="">
  </div>
  <div>
<img class="  " src="./produtos/Camisa Kurt.jpg" alt="">
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

</body>
</html>