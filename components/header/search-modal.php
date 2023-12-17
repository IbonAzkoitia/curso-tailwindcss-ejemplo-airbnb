<?php
	$destinos = [
		[
			'imagen' => 'busqueda-flexible',
			'texto' => 'Búsqueda flexible'
		],
		[
			'imagen' => 'sudamerica',
			'texto' => 'Sudamérica'
		],
		[
			'imagen' => 'italia',
			'texto' => 'Italia'
		],
		[
            'imagen' => 'estados-unidos',
            'texto' => 'Estados Unidos'
        ],
		[
			'imagen' => 'portugal',
			'texto' => 'Portugal'
		],
		[
			'imagen' => 'caribe',
			'texto' => 'Caribe'
		],
		[
			'imagen' => 'reino-unido',
			'texto' => 'Reino Unido'
		],
		[
			'imagen' => 'africa',
			'texto' => 'África'
		],
		[
			'imagen' => 'alemania',
			'texto' => 'Alemania'
		]
	]
?>

<div class="absolute top-0 w-full h-full bg-gray-50 flex flex-col justify-between"
	x-show="searchModal"
    x-data="{searchModalTabs: 1}">

	<div class="relative p-6 flex items-center justify-center">
		<div class="absolute left-6 border border-gray-400 bg-white p-2 rounded-full" @click="searchModal = false">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>

		</div>


		<div class="flex justify-center gap-4">
			<button class="font-bold text-airbnb-gray-light"
				:class="searchModalTabs === 1 ? 'text-black underline underline-offset-8 decoration-2' : ''"
				@click="searchModalTabs = 1">
				Alojamientos
			</button>
			<button class="font-bold text-airbnb-gray-light"
			        :class="searchModalTabs === 2 ? 'text-black underline underline-offset-8 decoration-2' : ''"
			        @click="searchModalTabs = 2">
				Experiencias
			</button>
		</div>
	</div>

	<div class="px-3 flex-grow" x-show="searchModalTabs === 1">

		<!-- Destinos -->
		<div class="searchCard overflow-hidden">
			<div class="text-xl font-extrabold">
				¿Dónde quieres ir?
			</div>

			<div class="my-4 p-4 border border-gray-400 rounded-xl flex items-center gap-2 text-sm font-semibold text-airbnb-gray-light">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-black">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>

				Buscar destinos
			</div>

			<div class="-mx-6 pl-6 flex flex-nograp overflow-x-scroll no-scrollbar gap-5">
				<?php foreach ( $destinos as $destino ) : ?>
				<div class="w-32 flex-none">
					<button class="border border-gray-300 rounded-xl">
						<img class="rounded-xl" src="/assets/images/search/<?php echo $destino['imagen']; ?>.jpg" alt="">
					</button>
					<div class="text-sm font-medium">
						<?php echo $destino['texto']; ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- end Destinos -->
	</div>

	<div class="py-2 px-6 bg-white flex items-center justify-between">
		<a href="#" class="font-semibold underline">
			Restablecer
		</a>

		<button class="py-3 px-6 rounded-xl flex items-center gap-2 bg-gradient-to-r from-[#e61d4d] to-[#d70666] text-white font-medium">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
			</svg>

			<span>
				Buscar
			</span>
		</button>
	</div>

</div>
