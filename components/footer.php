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

    $escapadas_tablet = [
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

    $escapadas_tablet_ocultas = [
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

<!-- Inspiraciones -->
<div class="py-12 px-6 lg:px-10 bg-[#F7F7F7]">
    <h2 class="text-xl lg:text-2xl font-semibold lg:font-bold">
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

        <!-- Escapadas » Movil -->
        <div class="grid grid-cols-2 gap-y-6 gap-x-4 text-sm lg:hidden">
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
        <!-- end Escapadas » Movil -->

        <!-- Escapadas » Tablet -->
        <div class="hidden lg:grid grid-cols-3 gap-y-3 gap-x-4 text-sm">
            <?php foreach ( $escapadas_tablet as $index => $escapada ) : ?>
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
        <!-- end Escapadas » Tablet -->

        <!-- Escapadas Ocultas » Movil -->
        <div class="lg:hidden mt-6 grid grid-cols-2 gap-y-6 gap-x-4 text-sm" x-show="footerEscapadas">
		    <?php foreach ( $escapadas_ocultas as $escapada ) : ?>
                <div>
                    <h3><?php echo $escapada['titulo']; ?></h3>
                    <p class="text-[#717171]"><?php echo $escapada['texto']; ?></p>
                </div>
		    <?php endforeach; ?>
        </div>
        <!-- end Escapadas Ocultas » Movil -->

        <!-- Escapadas Ocultas » Tablet -->
        <div class="mt-6 hidden lg:grid grid-cols-3 gap-y-3 gap-x-4 text-sm" x-show="footerEscapadas">
            <?php foreach ( $escapadas_tablet_ocultas as $escapada ) : ?>
                <div>
                    <h3><?php echo $escapada['titulo']; ?></h3>
                    <p class="text-[#717171]"><?php echo $escapada['texto']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- end Escapadas Ocultas » Tablet -->
    </div>

</div>
</div>
<!-- end Inspiraciones -->

<footer class="px-6 lg:px-10 bg-[#F7F7F7] border-t border-gray-300 divide-y divide-gray-300">
	<div class="grid grid-cols-1 lg:grid-cols-3 divide-y divide-gray-300">
		<div class="py-6 lg:py-12 text-sm">
			<div class="mb-3 font-semibold">
				Asistencia
			</div>

			<ul class="space-y-2 lg:space-y-3">
				<li><a href="#">Centro de ayuda</a></li>
				<li><a href="#">AirCover</a></li>
				<li><a href="#">Lucha contra la discriminación</a></li>
				<li><a href="#">Ayuda a la discapacidad</a></li>
				<li><a href="#">Opciones de cancelación</a></li>
				<li><a href="#">¿Problemas en el barrio?</a></li>
			</ul>
		</div>

		<div class="py-6 lg:py-12 text-sm">
			<div class="mb-3 font-semibold">
				Cómo ser Anfitrión
			</div>

			<ul class="space-y-2 lg:space-y-3">
				<li><a href="#">Pon tu casa en Airbnb</a></li>
				<li><a href="#">AirCover para anfitriones</a></li>
				<li><a href="#">Recursos para anfitriones</a></li>
				<li><a href="#">Foro de la comunidad</a></li>
				<li><a href="#">Ser un anfitrión responsable</a></li>
			</ul>
		</div>

		<div class="py-6 lg:py-12 text-sm">
			<div class="mb-3 font-semibold">
				Airbnb
			</div>

			<ul class="space-y-2 lg:space-y-3">
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
		<div class="py-6 lg:flex lg:flex-col lg:items-center">
			<div class="mb-4 flex items-center gap-4 lg:gap-6 text-sm font-bold">
				<button class="flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-5 h-5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
					</svg>
					Español (ES)
				</button>

				<button>
					€ EUR
				</button>

                <div class="hidden lg:pl-6 lg:flex lg:items-center lg:gap-4">

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Ir a Facebook" role="img" focusable="false" style="display: block; height: 18px; width: 18px; fill: currentcolor;"><path d="M30 0a2 2 0 0 1 2 2v28a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path><path fill="#fff" d="M22.94 16H18.5v-3c0-1.27.62-2.5 2.6-2.5h2.02V6.56s-1.83-.31-3.58-.31c-3.65 0-6.04 2.21-6.04 6.22V16H9.44v4.62h4.06V32h5V20.62h3.73z"></path></svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Ir a Twitter" role="img" focusable="false" style="display: block; height: 18px; width: 18px; fill: currentcolor;"><path d="M32 4v24a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h24a4 4 0 0 1 4 4z"></path><path fill="#fff" d="M18.66 7.99a4.5 4.5 0 0 0-2.28 4.88A12.31 12.31 0 0 1 7.3 8.25a4.25 4.25 0 0 0 1.38 5.88c-.69 0-1.38-.13-2-.44a4.54 4.54 0 0 0 3.5 4.31 4.3 4.3 0 0 1-2 .06 4.64 4.64 0 0 0 4.19 3.13A8.33 8.33 0 0 1 5.8 23a12.44 12.44 0 0 0 19.32-11.19A7.72 7.72 0 0 0 27.3 9.5a8.3 8.3 0 0 1-2.5.75 4.7 4.7 0 0 0 2-2.5c-.87.5-1.81.87-2.81 1.06a4.5 4.5 0 0 0-5.34-.83z"></path></svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Ir a Instagram" role="img" focusable="false" style="display: block; height: 18px; width: 18px; fill: currentcolor;"><path d="M30 0H2a2 2 0 0 0-2 2v28c0 1.1.9 2 2 2h28a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"></path><path fill="#fff" d="M15.71 4h1.25c2.4 0 2.85.02 3.99.07 1.28.06 2.15.26 2.91.56.79.3 1.46.72 2.13 1.38.6.6 1.08 1.33 1.38 2.13l.02.06c.28.74.48 1.58.54 2.8l.01.4c.05 1.02.06 1.63.06 4.4v.92c0 2.6-.02 3.05-.07 4.23a8.78 8.78 0 0 1-.56 2.91c-.3.8-.77 1.53-1.38 2.13a5.88 5.88 0 0 1-2.13 1.38l-.06.02c-.74.28-1.59.48-2.8.53l-.4.02c-1.02.05-1.63.06-4.4.06h-.92a73.1 73.1 0 0 1-4.23-.07 8.78 8.78 0 0 1-2.91-.56c-.8-.3-1.53-.77-2.13-1.38a5.88 5.88 0 0 1-1.38-2.13l-.02-.06a8.84 8.84 0 0 1-.54-2.8l-.01-.37A84.75 84.75 0 0 1 4 16.29v-1c0-2.62.02-3.06.07-4.24.06-1.26.26-2.13.55-2.88l.01-.03c.3-.8.77-1.53 1.38-2.13a5.88 5.88 0 0 1 2.13-1.38l.06-.02a8.84 8.84 0 0 1 2.8-.54l.37-.01C12.39 4 12.99 4 15.71 4zm.91 2.16h-1.24c-2.3 0-2.91.01-3.81.05l-.42.02c-1.17.05-1.8.25-2.23.41-.56.22-.96.48-1.38.9-.4.41-.67.8-.88 1.35l-.03.06a6.7 6.7 0 0 0-.4 2.2l-.02.45c-.04.9-.05 1.53-.05 3.94v1.08c0 2.64.02 3.05.07 4.23v.07c.06 1.13.25 1.74.42 2.16.21.56.47.96.9 1.38.4.4.8.67 1.34.88l.06.03a6.7 6.7 0 0 0 2.2.4l.45.02c.9.04 1.53.05 3.94.05h1.08c2.64 0 3.05-.02 4.23-.07h.07a6.51 6.51 0 0 0 2.16-.42c.52-.19.99-.5 1.38-.9.4-.4.67-.8.88-1.34l.03-.06a6.7 6.7 0 0 0 .4-2.2l.02-.45c.04-.9.05-1.53.05-3.94v-1.09c0-2.63-.02-3.04-.07-4.22v-.07a6.51 6.51 0 0 0-.42-2.16c-.19-.52-.5-.99-.9-1.38a3.7 3.7 0 0 0-1.34-.88l-.06-.03a6.63 6.63 0 0 0-2.16-.4l-.46-.02c-.9-.04-1.5-.05-3.8-.05zM16 9.84a6.16 6.16 0 1 1 0 12.32 6.16 6.16 0 0 1 0-12.32zM16 12a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm6.4-3.85a1.44 1.44 0 1 1 0 2.88 1.44 1.44 0 0 1 0-2.88z"></path></svg>
                    </a>
                </div>
			</div>

			<div class="text-sm">
				<div class="lg:text-center">
					&copy; 2023 Airbnb, Inc.
				</div>

				<ul class="mt-2 lg:mt-0 flex flex-wrap items-center leading-relaxed">
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