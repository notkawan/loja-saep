<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			http-equiv="X-UA-Compatible"
			content="IE=edge"
		/>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
	</head>
	<title>Veste VC</title>
	<link
		rel="stylesheet"
		href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css"
	/>
	<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

	<body>
		<!-- NAV BAR AQUI -->

		<nav class="bg-white dark:bg-white w-full z-20 top-0 left-0">
			<div class="flex items-center justify-between mx-auto">
				<img
					src="./img/2.png"
					class="h-16 mr-5 max-md:h-10"
					alt="#"
				/>
				<div
					class="items-center m-auto flex justify-between w-full md:flex md:w-auto"
					id="navbar-sticky"
				>
					<ul
						class="flex p-4 md:p-0 mt-4 m-auto align-center font-medium md:text-center rounded-lg bg-white md:mt-0 md:border-0 md:bg-white max-md:text-xs max-md:p-2"
					>
						<li>
							<a
								href="./index.php"
								class="py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100"
								>Home</a
							>
						</li>
						<li>
							<a
								href="#"
								class="py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100"
								>Favoritos</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<header class="bg-white shadow">
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<h1 class="text-3xl font-bold tracking-tight text-gray-900">
					Favoritos
				</h1>
			</div>
		</header>

		<div class="bg-white">
			<div
				class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 text-center"
			>
				<h2 class="sr-only">Products</h2>

				<div
					class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8"
				>
					<div class="" id="div-item">
						<a
							href="#"
							class="group"
						>
							<div
								class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
							>
								<img
									src="./produtos/Lloyd Jean.jpg"
									alt=""
								/>
							</div>
						</a>
						<h3 class="mt-4 text-sm text-gray-700">Camisa Jude</h3>

						<div class="flex align-center justify-center m-auto mt-5">
							<!-- LIKE -->
							<svg
								width="24"
								height="24"
								id="gostei"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12.516 2.25-.235.21L7.195 7.5H3.75v12h12.633c1.057 0 1.98-.747 2.203-1.781l1.617-7.5C20.5 8.833 19.415 7.5 18 7.5h-4.313l.141-.563c.152-.117.25-.166.469-.468.351-.48.703-1.225.703-2.227 0-1.07-.967-1.992-2.18-1.992h-.304Zm.539 1.57c.316.062.445.19.445.422 0 .677-.205 1.096-.398 1.36-.194.263-.329.328-.329.328l-.257.14-.094.305-.445 1.688-.235.937H18c.495 0 .83.43.727.914l-1.594 7.5a.755.755 0 0 1-.75.586H8.25V8.555l4.805-4.735ZM5.25 9h1.5v9h-1.5V9Z"
								></path>
							</svg>
							<p
								class=""
								id="contador"
							></p>

							<!-- DESLIKE -->
							<svg
								class=""
								width="24"
								height="24"
								id="deslike"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M7.617 4.5c-1.057 0-1.98.747-2.203 1.781l-1.617 7.5C3.501 15.167 4.585 16.5 6 16.5h4.313l-.141.563c-.152.117-.249.167-.469.468A3.733 3.733 0 0 0 9 19.758c0 1.07.967 1.992 2.18 1.992h.305l.234-.21 5.086-5.04h3.445v-12H7.617Zm0 1.5h8.133v9.445l-4.805 4.735c-.316-.062-.445-.19-.445-.422 0-.677.205-1.096.399-1.36.193-.263.328-.328.328-.328l.258-.14.093-.305.446-1.688.234-.937H6c-.495 0-.829-.43-.726-.914l1.593-7.5A.755.755 0 0 1 7.617 6Zm9.633 0h1.5v9h-1.5V6Z"
								></path>
							</svg>
							<p id="contadorDeslike"></p>
							<!-- FAVORITO -->
							<svg
								width="24"
								class="ml-5"
								height="24"
								id="favorito"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12 1.594-.68 1.547L8.883 8.6l-5.953.633-1.688.188 1.266 1.125 4.43 4.008-1.243 5.86-.351 1.64 1.476-.844 5.18-3 5.18 3 1.476.844-.351-1.64-1.242-5.86 4.43-4.008 1.265-1.125-1.688-.188-5.953-.632L12.68 3.14 12 1.594Zm0 3.68 1.922 4.335.187.399.422.047 4.711.492-3.515 3.164-.329.305.094.421.985 4.618-4.102-2.344-.375-.234-.375.234-4.102 2.344.985-4.617.094-.422-.329-.305-3.515-3.164 4.71-.492.423-.047.187-.399L12 5.273Z"
								></path>
							</svg>
						</div>
					</div>

					<div>
						<a
							href="#"
							class="group"
						>
							<div
								class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
							>
								<img
									src="./produtos/Camisa Ryan.jpg"
									alt=""
								/>
							</div>
						</a>
						<h3 class="mt-4 text-sm text-gray-700">Camisa Ryan</h3>

						<div class="flex align-center justify-center m-auto mt-5">
							<!-- LIKE -->
							<svg
								width="24"
								height="24"
								id="gostei"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12.516 2.25-.235.21L7.195 7.5H3.75v12h12.633c1.057 0 1.98-.747 2.203-1.781l1.617-7.5C20.5 8.833 19.415 7.5 18 7.5h-4.313l.141-.563c.152-.117.25-.166.469-.468.351-.48.703-1.225.703-2.227 0-1.07-.967-1.992-2.18-1.992h-.304Zm.539 1.57c.316.062.445.19.445.422 0 .677-.205 1.096-.398 1.36-.194.263-.329.328-.329.328l-.257.14-.094.305-.445 1.688-.235.937H18c.495 0 .83.43.727.914l-1.594 7.5a.755.755 0 0 1-.75.586H8.25V8.555l4.805-4.735ZM5.25 9h1.5v9h-1.5V9Z"
								></path>
							</svg>
							<p
								class=""
								id="contador"
							></p>

							<!-- DESLIKE -->
							<svg
								class=""
								width="24"
								height="24"
								id="deslike"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M7.617 4.5c-1.057 0-1.98.747-2.203 1.781l-1.617 7.5C3.501 15.167 4.585 16.5 6 16.5h4.313l-.141.563c-.152.117-.249.167-.469.468A3.733 3.733 0 0 0 9 19.758c0 1.07.967 1.992 2.18 1.992h.305l.234-.21 5.086-5.04h3.445v-12H7.617Zm0 1.5h8.133v9.445l-4.805 4.735c-.316-.062-.445-.19-.445-.422 0-.677.205-1.096.399-1.36.193-.263.328-.328.328-.328l.258-.14.093-.305.446-1.688.234-.937H6c-.495 0-.829-.43-.726-.914l1.593-7.5A.755.755 0 0 1 7.617 6Zm9.633 0h1.5v9h-1.5V6Z"
								></path>
							</svg>
							<p id="contadorDeslike"></p>
							<!-- FAVORITO -->
							<svg
								width="24"
								class="ml-5"
								height="24"
								id="favorito"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12 1.594-.68 1.547L8.883 8.6l-5.953.633-1.688.188 1.266 1.125 4.43 4.008-1.243 5.86-.351 1.64 1.476-.844 5.18-3 5.18 3 1.476.844-.351-1.64-1.242-5.86 4.43-4.008 1.265-1.125-1.688-.188-5.953-.632L12.68 3.14 12 1.594Zm0 3.68 1.922 4.335.187.399.422.047 4.711.492-3.515 3.164-.329.305.094.421.985 4.618-4.102-2.344-.375-.234-.375.234-4.102 2.344.985-4.617.094-.422-.329-.305-3.515-3.164 4.71-.492.423-.047.187-.399L12 5.273Z"
								></path>
							</svg>
						</div>
					</div>

					<div>
						<a
							href="#"
							class="group"
						>
							<div
								class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
							>
								<img
									src="./produtos/Calção Bob.jpg"
									alt=""
								/>
							</div>
						</a>
						<h3 class="mt-4 text-sm text-gray-700">Calção Bob</h3>

						<div class="flex align-center justify-center m-auto mt-5">
							<!-- LIKE -->
							<svg
								width="24"
								height="24"
								id="gostei"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12.516 2.25-.235.21L7.195 7.5H3.75v12h12.633c1.057 0 1.98-.747 2.203-1.781l1.617-7.5C20.5 8.833 19.415 7.5 18 7.5h-4.313l.141-.563c.152-.117.25-.166.469-.468.351-.48.703-1.225.703-2.227 0-1.07-.967-1.992-2.18-1.992h-.304Zm.539 1.57c.316.062.445.19.445.422 0 .677-.205 1.096-.398 1.36-.194.263-.329.328-.329.328l-.257.14-.094.305-.445 1.688-.235.937H18c.495 0 .83.43.727.914l-1.594 7.5a.755.755 0 0 1-.75.586H8.25V8.555l4.805-4.735ZM5.25 9h1.5v9h-1.5V9Z"
								></path>
							</svg>
							<p
								class=""
								id="contador"
							></p>

							<!-- DESLIKE -->
							<svg
								class=""
								width="24"
								height="24"
								id="deslike"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M7.617 4.5c-1.057 0-1.98.747-2.203 1.781l-1.617 7.5C3.501 15.167 4.585 16.5 6 16.5h4.313l-.141.563c-.152.117-.249.167-.469.468A3.733 3.733 0 0 0 9 19.758c0 1.07.967 1.992 2.18 1.992h.305l.234-.21 5.086-5.04h3.445v-12H7.617Zm0 1.5h8.133v9.445l-4.805 4.735c-.316-.062-.445-.19-.445-.422 0-.677.205-1.096.399-1.36.193-.263.328-.328.328-.328l.258-.14.093-.305.446-1.688.234-.937H6c-.495 0-.829-.43-.726-.914l1.593-7.5A.755.755 0 0 1 7.617 6Zm9.633 0h1.5v9h-1.5V6Z"
								></path>
							</svg>
							<p id="contadorDeslike"></p>
							<!-- FAVORITO -->
							<svg
								width="24"
								class="ml-5"
								height="24"
								id="favorito"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12 1.594-.68 1.547L8.883 8.6l-5.953.633-1.688.188 1.266 1.125 4.43 4.008-1.243 5.86-.351 1.64 1.476-.844 5.18-3 5.18 3 1.476.844-.351-1.64-1.242-5.86 4.43-4.008 1.265-1.125-1.688-.188-5.953-.632L12.68 3.14 12 1.594Zm0 3.68 1.922 4.335.187.399.422.047 4.711.492-3.515 3.164-.329.305.094.421.985 4.618-4.102-2.344-.375-.234-.375.234-4.102 2.344.985-4.617.094-.422-.329-.305-3.515-3.164 4.71-.492.423-.047.187-.399L12 5.273Z"
								></path>
							</svg>
						</div>
					</div>

					<div>
						<a
							href="#"
							class="group"
						>
							<div
								class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7"
							>
								<img
									src="./produtos/Jaqueta Barry.jpg"
									alt=""
								/>
							</div>
						</a>
						<h3 class="mt-4 text-sm text-gray-700">Jaqueta Barry</h3>

						<div class="flex align-center justify-center m-auto mt-5">
							<!-- LIKE -->
							<svg
								width="24"
								height="24"
								id="gostei"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12.516 2.25-.235.21L7.195 7.5H3.75v12h12.633c1.057 0 1.98-.747 2.203-1.781l1.617-7.5C20.5 8.833 19.415 7.5 18 7.5h-4.313l.141-.563c.152-.117.25-.166.469-.468.351-.48.703-1.225.703-2.227 0-1.07-.967-1.992-2.18-1.992h-.304Zm.539 1.57c.316.062.445.19.445.422 0 .677-.205 1.096-.398 1.36-.194.263-.329.328-.329.328l-.257.14-.094.305-.445 1.688-.235.937H18c.495 0 .83.43.727.914l-1.594 7.5a.755.755 0 0 1-.75.586H8.25V8.555l4.805-4.735ZM5.25 9h1.5v9h-1.5V9Z"
								></path>
							</svg>
							<p
								class=""
								id="contador"
							></p>

							<!-- DESLIKE -->
							<svg
								class=""
								width="24"
								height="24"
								id="deslike"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M7.617 4.5c-1.057 0-1.98.747-2.203 1.781l-1.617 7.5C3.501 15.167 4.585 16.5 6 16.5h4.313l-.141.563c-.152.117-.249.167-.469.468A3.733 3.733 0 0 0 9 19.758c0 1.07.967 1.992 2.18 1.992h.305l.234-.21 5.086-5.04h3.445v-12H7.617Zm0 1.5h8.133v9.445l-4.805 4.735c-.316-.062-.445-.19-.445-.422 0-.677.205-1.096.399-1.36.193-.263.328-.328.328-.328l.258-.14.093-.305.446-1.688.234-.937H6c-.495 0-.829-.43-.726-.914l1.593-7.5A.755.755 0 0 1 7.617 6Zm9.633 0h1.5v9h-1.5V6Z"
								></path>
							</svg>
							<p id="contadorDeslike"></p>
							<!-- FAVORITO -->
							<svg
								width="24"
								class="ml-5"
								height="24"
								id="favorito"
								fill="currentColor"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="m12 1.594-.68 1.547L8.883 8.6l-5.953.633-1.688.188 1.266 1.125 4.43 4.008-1.243 5.86-.351 1.64 1.476-.844 5.18-3 5.18 3 1.476.844-.351-1.64-1.242-5.86 4.43-4.008 1.265-1.125-1.688-.188-5.953-.632L12.68 3.14 12 1.594Zm0 3.68 1.922 4.335.187.399.422.047 4.711.492-3.515 3.164-.329.305.094.421.985 4.618-4.102-2.344-.375-.234-.375.234-4.102 2.344.985-4.617.094-.422-.329-.305-3.515-3.164 4.71-.492.423-.047.187-.399L12 5.273Z"
								></path>
							</svg>
						</div>
					</div>

					<!-- More products... -->
				</div>
			</div>
		</div>

		<footer class="px-4 divide-y dark:bg-white dark:text-gray-100">
			<div
				class="container flex justify-center py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0"
			>
				<div class="">
					<div class="w-12 h-12">
						<img
							class="align-center"
							src="./img/2.png"
						/>
					</div>
				</div>
			</div>

			<div class="py-6 text-sm text-center dark:text-gray-400">
				© 1968 Company Co. All rights reserved.
			</div>
		</footer>
		<script src="./favorito.js"></script>
	</body>
</html>
