<?php
    $escapadas_tipos = [
        'Más buscados',
        'Ciudades',
        'Playas',
        'Con historia',
        'Islas',
        'Montañas',
        'Categorías',
    ];

    $escapadas = [
        [
            'titulo' => 'Amsterdam',
            'texto' => 'Villas en alquiler',
        ],
	    [
		    'titulo' => 'Barcelona',
		    'texto' => 'Alquileres vacacionales',
	    ],
	    [
		    'titulo' => 'Benasque',
		    'texto' => 'Alquileres vacacionales',
	    ],
	    [
		    'titulo' => 'Bordeaux',
		    'texto' => 'Apartamentos en alquiler',
	    ],
	    [
		    'titulo' => 'Cercedilla',
		    'texto' => 'Casas rurales en alquiler',
	    ],
	    [
		    'titulo' => 'Deltebre',
		    'texto' => 'Apartamentos en alquiler',
	    ],
	    [
		    'titulo' => 'La Molina',
		    'texto' => 'Casas en alquiler',
	    ],
	    [
		    'titulo' => 'Landes',
		    'texto' => 'Alquileres vacacionales'
	    ],
    ];

    $escapadas_ocultas = [
	    [
		    'titulo' => 'London',
		    'texto' => 'Casas en alquiler'
	    ],
	    [
		    'titulo' => 'Mandello del Lario',
		    'texto' => 'Alquileres vacacionales'
	    ],
	    [
		    'titulo' => 'Motril',
		    'texto' => 'Apartamentos en alquiler'
	    ],
	    [
		    'titulo' => 'Orbaneja del Castillo',
		    'texto' => 'Alquileres vacacionales'
	    ],
    ];

?>

<div class="h-[600px]"></div>

<!-- Inspiraciones -->
<div class="py-12 px-6 bg-[#F7F7F7]">
    <h2 class="text-xl font-semibold">
        Inspiración para futuras escapadas
    </h2>

    <div class="my-6 border-b border-gray-300 flex flex-nowrap items-center gap-6 overflow-x-auto no-scrollbar">
		<?php foreach ( $escapadas_tipos as $index => $escapada ) : ?>
            <div class="whitespace-nowrap pb-3 border-b-2 <?php echo $index === 0 ? 'border-black' : 'border-transparent'; ?>">
                <p class="mt-1 text-sm font-semibold <?php echo $index !== 0 ? 'text-gray-500' : ''; ?>">
					<?php echo $escapada; ?>
                </p>
            </div>
		<?php endforeach; ?>
    </div>

    <div x-data="{footerEscapadas: false}">
        <div class="grid grid-cols-2 gap-y-6 gap-x-4 text-sm">
		    <?php foreach ( $escapadas as $index => $escapada ) : ?>
                <?php if ( $index === 7 ) : ?>
                    <div :class="footerEscapadas === true ? 'block' : 'hidden'">
                <?php else : ?>
                    <div>
                <?php endif; ?>
                    <h3><?php echo $escapada['titulo']; ?></h3>
                    <p class="text-[#717171]"><?php echo $escapada['texto']; ?></p>
                </div>
		    <?php endforeach; ?>

            <button class="flex items-center gap-1 font-semibold" @click="footerEscapadas = true"
                :class="footerEscapadas === true ? 'hidden' : ''">
                Mostrar más
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" data-slot="icon" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>

        <div class="mt-6 grid grid-cols-2 gap-y-6 gap-x-4 text-sm" x-show="footerEscapadas">
		    <?php foreach ( $escapadas_ocultas as $escapada ) : ?>
                <div>
                    <h3><?php echo $escapada['titulo']; ?></h3>
                    <p class="text-[#717171]"><?php echo $escapada['texto']; ?></p>
                </div>
		    <?php endforeach; ?>
        </div>
    </div>

</div>
<!-- end Inspiraciones -->

<footer class="px-6 bg-[#F7F7F7] border-t border-gray-300 divide-y divide-gray-300">
	<div class="divide-y divide-gray-300">
		<div class="py-6 text-sm">
			<div class="mb-3 font-semibold">
				Asistencia
			</div>

			<ul class="space-y-2">
				<li><a href="#">Centro de ayuda</a></li>
				<li><a href="#">AirCover</a></li>
				<li><a href="#">Lucha contra la discriminación</a></li>
				<li><a href="#">Ayuda a la discapacidad</a></li>
				<li><a href="#">Opciones de cancelación</a></li>
				<li><a href="#">¿Problemas en el barrio?</a></li>
			</ul>
		</div>
		<div class="py-6 text-sm">
			<div class="mb-3 font-semibold">
				Cómo ser Anfitrión
			</div>

			<ul class="space-y-2">
				<li><a href="#">Pon tu casa en Airbnb</a></li>
				<li><a href="#">AirCover para anfitriones</a></li>
				<li><a href="#">Recursos para anfitriones</a></li>
				<li><a href="#">Foro de la comunidad</a></li>
				<li><a href="#">Ser un anfitrión responsable</a></li>
			</ul>
		</div>
		<div class="py-6 text-sm">
			<div class="mb-3 font-semibold">
				Airbnb
			</div>

			<ul class="space-y-2">
				<li><a href="#">Newsroom</a></li>
				<li><a href="#">Nuevas funciones</a></li>
				<li><a href="#">Empleo</a></li>
				<li><a href="#">Inversores</a></li>
				<li><a href="#">Tarjetas regalo</a></li>
				<li><a href="#">Estancias con Airbnb.org</a></li>
			</ul>
		</div>
	</div>

	<div>
		<div class="py-6">
			<div class="mb-4 flex items-center gap-4 text-sm font-bold">
				<button class="flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-5 h-5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
					</svg>
					Español (ES)
				</button>

				<button>
					€ EUR
				</button>
			</div>

			<div class="text-sm">
				<div>
					&copy; 2023 Airbnb, Inc.
				</div>

				<ul class="mt-2 flex flex-wrap items-center leading-relaxed">
					<li>
						<a href="#" class="">
							Privacidad
						</a>
						<span class="w-[19px] inline-block text-center">·</span>
					</li>
					<li>
						<a href="#" class="">
							Condiciones
						</a>
						<span class="w-[19px] inline-block text-center">·</span>
					</li>
					<li>
						<a href="#" class="">
							Mapa del sitio
						</a>
						<span class="w-[19px] inline-block text-center">·</span>
					</li>
					<li>
						<a href="#" class="">
							Datos de la empresa
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>