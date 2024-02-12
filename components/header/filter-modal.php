<?php
    $numeros = [
        'Todos',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8+',
    ];

    $propiedades = [
        [
            'imagen' => 'casa',
            'texto' => 'Casa',
        ],
	    [
		    'imagen' => 'apartamento',
		    'texto' => 'Apartamento',
	    ],
	    [
		    'imagen' => 'casa-invitados',
		    'texto' => 'Casa de invitados',
	    ],
	    [
		    'imagen' => 'hotel',
		    'texto' => 'Hotel',
	    ],
    ];

    $servicios = [
      'Wifi',
      'Cocina',
      'Lavadora',
      'Secadora',
    ];

    $servicios_ocultos = [
        'Aire acondicionado',
        'Calefacción'
    ];

    $opciones_reserva = [
        [
            'titulo' => 'Reserva inmediata',
            'texto' => 'Anuncios que no requieren que el anfitrión acepte la solicitud',
        ],
	    [
		    'titulo' => 'Llegada autónoma',
		    'texto' => 'Fácil acceso a la propiedad al llegar',
	    ],
	    [
		    'titulo' => 'Admite mascotas',
		    'texto' => '¿Viajas con un animal de asistencia?',
	    ]
    ];

    $accesibilidad = [
        'Entrada sin escalones al alojamiento',
        'Entrada con más de 81 cm de ancho',
        'Camino sin escalones hasta la entrada del alojamiento',
        'Aparcamiento para personas con discapacidad',
    ];

    $accesibilidad_ocultos = [
        'Entrada sin escalones a la habitación',
        'Entrada al dormitorio con más de 81 cm de ancho',
    ];

    $idiomas = [
        'inglés',
        'frances',
        'aleman',
        'japones',
    ];

    $idiomas_ocultos = [
        'italiano',
        'español',
    ];

?>


<div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true"
     x-show="filterModal"
     x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="ease-in duration-400"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
	<div class="fixed inset-0 bg-[#7e7e7e] transition-opacity lg:opacity-80"></div>

	<div class="fixed inset-0 z-10 w-screen" style="overflow:clip;">
		<div class="relative flex min-h-full items-end justify-center pt-3 text-center lg:items-start sm:p-0"
             x-show="filterModal"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 translate-y-96"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
			<div class="relative sm:my-8 sm:p-6 lg:p-0 w-full sm:max-w-sm lg:max-w-3xl flex flex-col transform overflow-hidden rounded-lg lg:rounded-xl bg-white text-left shadow-xl transition-all " style="">

				<!-- Header -->
				<div class="relative py-3 border-b border-gray-300 text-center font-bold">
					<div class="absolute top-4 left-6"  @click="filterModal = false">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
					Filtros
				</div>
				<!-- end Header -->

				<div class="max-h-[700px] lg:max-h-[1150px] overflow-y-auto">
					<!-- Tipo Alojamiento -->
					<div class="p-6">
						<div class="text-lg font-semibold">
							Tipo de Alojamiento
						</div>
						<p class="my-4 text-sm font-semibold">
							Busca habitaciones, alojamientos enteros o cualquier tipo de espacios.
						</p>

                        <div class="px-10">
                            <div class=" grid grid-cols-3 border border-gray-200 rounded-xl divide-x divide-gray-300 min-h-[64px] text-center text-sm font-semibold">
                                <div class="py-4 px-2 rounded-tl-xl rounded-bl-xl bg-[#222222] border border-[#222222] text-white leading-10" style="background-image: linear-gradient(to bottom,rgba(255 255 255/0.16),rgba(255 255 255/0)); box-shadow: inset 0 2px 8px #000000;">
                                    Todos
                                </div>

                                <div class="py-4 px-2 leading-10">
                                    Habitación
                                </div>

                                <div class="py-4 px-2 leading-normal">
                                    Alojamiento entero
                                </div>
                            </div>
                        </div>
					</div>
					<!-- end Tipo Alojamiento -->

					<hr class="mx-6">

					<!-- Rango Precios -->
					<div class="p-6">
						<div class="text-lg font-semibold">
							Rango de precios
						</div>
						<p class="mt-1 mb-4 text-sm font-semibold">
							Precios por noche con comisiones e impuestos incluidos
						</p>

                        <img src="/assets/images/filters/modal/graphs.png" alt="" class="lg:hidden mb-4 w-full">
                        <img src="/assets/images/filters/modal/graphs-tablet.png" alt="" class="hidden lg:block mb-4 w-full">

						<div class="lg:px-10 grid grid-cols-5 lg:grid-cols-7 items-center">
                            <div class="col-span-2 lg:col-span-3 py-1.5 px-3 border border-gray-400 rounded-lg">
                                <div class="text-xs text-[#919191]">
                                    Mínimo
                                </div>
                                <div class="font-semibold text-[#2c2c2c]">
                                    € 9
                                </div>
                            </div>

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-[#dddddd]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>

                            </div>

                            <div class="col-span-2 lg:col-span-3 py-1.5 px-3 border border-gray-400 rounded-lg">
                                <div class="text-xs text-[#919191]">
                                    Máximo
                                </div>
                                <div class="font-semibold text-[#2c2c2c]">
                                    € 230+
                                </div>
                            </div>
                        </div>
					</div>
					<!-- end Rango Precios -->

					<hr class="mx-6">

                    <!-- Habitaciones y Camas -->
                    <div class="p-6 space-y-4">
                        <div class="text-lg font-semibold">
                            Habitaciones y camas
                        </div>

                        <!-- Dormitorios -->
                        <div>
                            <div class="mb-2 font-semibold">
                                Dormitorios
                            </div>
                            <div class="-mx-6 pl-6 flex flex-nograp overflow-x-scroll no-scrollbar gap-2">
		                        <?php foreach ( $numeros as $index => $numero ) : ?>
                                    <div class="py-2 px-6 flex-none border border-gray-300 rounded-full text-center text-sm font-bold
                                        <?php echo $index === 0 ? 'bg-[#222222] text-[#bbbbbb]' : 'text-[#656565]'; ?>
                                        <?php echo $index >= 5 ? 'hidden lg:block' : ''; ?>"
                                    >
                                        <?php echo $numero; ?>
                                    </div>
		                        <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- end Dormitorios -->

                        <!-- Camas -->
                        <div>
                            <div class="mb-2 font-semibold">
                                Camas
                            </div>
                            <div class="-mx-6 pl-6 flex flex-nograp overflow-x-scroll no-scrollbar gap-2">
			                    <?php foreach ( $numeros as $index => $numero ) : ?>
                                    <div class="py-2 px-6 flex-none border border-gray-300 rounded-full text-center text-sm font-bold
                                        <?php echo $index === 0 ? 'bg-[#222222] text-[#bbbbbb]' : 'text-[#656565]'; ?>
                                        <?php echo $index >= 5 ? 'hidden lg:block' : ''; ?>"
                                    >
					                    <?php echo $numero; ?>
                                    </div>
			                    <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- end Camas -->

                        <!-- Baños -->
                        <div>
                            <div class="mb-2 font-semibold">
                                Baños
                            </div>
                            <div class="-mx-6 pl-6 flex flex-nograp overflow-x-scroll no-scrollbar gap-2">
			                    <?php foreach ( $numeros as $index => $numero ) : ?>
                                    <div class="py-2 px-6 flex-none border border-gray-300 rounded-full text-center text-sm font-bold
                                        <?php echo $index === 0 ? 'bg-[#222222] text-[#bbbbbb]' : 'text-[#656565]'; ?>
                                        <?php echo $index >= 5 ? 'hidden lg:block' : ''; ?>"
                                    >
					                    <?php echo $numero; ?>
                                    </div>
			                    <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- end Baños -->
                    </div>
                    <!-- end Habitaciones y Camas -->

                    <hr class="mx-6">

                    <!-- Alojamientos de primera -->
                    <div class="p-6 grid grid-cols-1 lg:grid-cols-2">
                        <div class=" space-y-4">
                            <div class="text-lg font-semibold">
                                Alojamientos de primera
                            </div>

                            <div class="py-5 px-6 border border-gray-300 rounded-xl">

                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 40px; width: 40px; fill: currentcolor;">
                                    <path d="m26.3732689 2.47961624.6167441.48322004c1.7072543 1.33763663 2.6054782 2.90952832 2.6054782 4.67605261 0 .3660905-.0390268.72618704-.116891 1.07902433.2220822-.04940579.4535208-.09078168.6921664-.12465571l.775726-.11010878.2925061.72685288c.8097073 2.01205449.8016461 3.82246449-.0816161 5.35231939-.2032148.3519785-.4424546.6712615-.7165374.9579743l.2224321.0794128.9515555.3797252-.1101088.7757261c-.3048001 2.1473439-1.2169863 3.7111744-2.7468413 4.5944365-.5761025.332613-1.1919899.5411159-1.8434482.6285758.1841168.1929555.3637753.4031581.5393959.6273064l.48322.6167441-.48322.6167441c-1.3376366 1.7072543-2.9095283 2.6054781-4.6760526 2.6054781-1.2480882 0-2.4019214-.4496183-3.4432232-1.3171892l-.0012213.0394115c0 1.2886644 1.044669 2.3333333 2.3333334 2.3333333.5522847 0 1 .4477153 1 1s-.4477153 1-1 1c-2.3932339 0-4.3333334-1.9400994-4.3333334-4.3333333 0-.9731196.3231417-1.8972354.901435-2.6461065.0487133-.1124489.1099252-.2143841.183909-.2995515.2333023-.2685692.4731075-.5134836.719657-.7345023 1.092313-.9792012 2.3169607-1.4865064 3.6394435-1.4865064l.0684312.0004504c.3275052-1.8187509 1.1205491-3.1889128 2.3863714-4.0426116-.4569936-1.4757574-.4468151-2.8322754.0552629-4.0354282-1.4028349-1.2488618-2.1367966-2.68667211-2.1367966-4.28352171 0-1.76652429.8982238-3.33841598 2.6054781-4.67605261zm-3.5954911 19.52038376c-.8090047 0-1.5656514.3134377-2.3044395.9757225l-.1826884.1713488-.0733166.074262.1281937.1295236c.7776797.743284 1.5802193 1.0935875 2.4322508 1.0935875l.218427-.0078032c.7972463-.0573203 1.5547873-.4315014 2.2882491-1.1577185l.0555461-.056256-.0555461-.057145c-.8001401-.7922368-1.6289366-1.1655217-2.5066761-1.1655217zm3.7578827-4.4994059-.1852617.1159713c-.6617754.448264-1.1307346 1.1510849-1.4028227 2.1467382l-.0182612.0759557.0749618.0222525c1.0890601.2860271 1.9934613.1949031 2.753606-.2439667l.1852618-.1159712c.6617753-.4482641 1.1307346-1.1510849 1.4028226-2.1467383l.0193478-.0769097-.0760483-.0212985c-1.0890601-.2860271-1.9934613-.194903-2.7536061.2439667zm3.1123395-6.7679274-.0769097.0193477c-1.0861673.2968233-1.8238397.8279397-2.2627095 1.5880844l-.1024557.1930649c-.3489823.7190957-.4037025 1.5622361-.141511 2.5605412l.0222526.0749618.0759556-.0182613c1.0861673-.2968233 1.8238397-.8279397 2.2627095-1.5880844s.5299938-1.664546.2439667-2.7536061zm-3.2751755-5.65600003-.0562561.05554607c-.7922368.80014014-1.1655217 1.62893662-1.1655217 2.50667615l.0078032.21842698c.0573204.7972463.4315015 1.55478738 1.1577185 2.28824913l.0575894.0537683.0189905-.0176348c.505107-.50232394.8443631-1.01414101 1.0296433-1.53660354.1153772-.32534636.1726996-.65911739.1726996-1.00620607 0-.87773953-.3732849-1.70653601-1.1655217-2.50667615zm-20.9125938-2.59705043-.6167441.48322004c-1.70725429 1.33763663-2.60547812 2.90952832-2.60547812 4.67605261 0 .3660905.03902677.72618704.11689093 1.07902433-.22208221-.04940579-.45352077-.09078168-.69216632-.12465571l-.77572608-.11010878-.29250604.72685288c-.80970728 2.01205449-.80164608 3.82246449.08161606 5.35231939.20321486.3519785.44245466.6712615.71653743.9579743l-.2224321.0794128-.95155553.3797252.11010879.7757261c.30480015 2.1473439 1.21698637 3.7111744 2.74684128 4.5944365.57610257.332613 1.19198995.5411159 1.84344825.6285758-.18411676.1929555-.36377531.4031581-.53939589.6273064l-.48322004.6167441.48322004.6167441c1.33763662 1.7072543 2.90952832 2.6054781 4.67605261 2.6054781 1.24808813 0 2.40192143-.4496183 3.44322313-1.3171892l.0012213.0394115c0 1.2886644-1.0446689 2.3333333-2.3333333 2.3333333-.55228477 0-1.00000002.4477153-1.00000002 1s.44771525 1 1.00000002 1c2.3932339 0 4.3333333-1.9400994 4.3333333-4.3333333 0-.9731196-.3231417-1.8972354-.901435-2.6461065-.0487133-.1124489-.1099252-.2143841-.1839089-.2995515-.2333024-.2685692-.4731075-.5134836-.7196571-.7345023-1.092313-.9792012-2.3169606-1.4865064-3.63944343-1.4865064l-.06843124.0004504c-.32750516-1.8187509-1.12054908-3.1889128-2.38637136-4.0426116.45699357-1.4757574.44681506-2.8322754-.05526292-4.0354282 1.40283491-1.2488618 2.13679658-2.68667211 2.13679658-4.28352171 0-1.76652429-.89822383-3.33841598-2.60547813-4.67605261zm3.59549117 19.52038376c.8090047 0 1.56565133.3134377 2.30443953.9757225l.1826884.1713488.0733165.074262-.1281937.1295236c-.7776796.743284-1.58021923 1.0935875-2.43225073 1.0935875l-.21842698-.0078032c-.7972463-.0573203-1.55478738-.4315014-2.28824918-1.1577185l-.05554607-.056256.05554607-.057145c.80014014-.7922368 1.62893662-1.1655217 2.50667616-1.1655217zm-3.75788275-4.4994059.18526172.1159713c.66177537.448264 1.13073465 1.1510849 1.40282266 2.1467382l.01826127.0759557-.07496179.0222525c-1.08906009.2860271-1.99346135.1949031-2.75360608-.2439667l-.18526171-.1159712c-.66177538-.4482641-1.13073465-1.1510849-1.40282267-2.1467383l-.01934775-.0769097.07604828-.0212985c1.08906008-.2860271 1.99346134-.194903 2.75360607.2439667zm-3.11233948-6.7679274.07690971.0193477c1.08616726.2968233 1.82383971.8279397 2.26270948 1.5880844l.10245572.1930649c.34898228.7190957.40370248 1.5622361.14151095 2.5605412l-.02225252.0749618-.07595567-.0182613c-1.08616726-.2968233-1.8238397-.8279397-2.26270947-1.5880844s-.5299938-1.664546-.24396668-2.7536061zm3.27517551-5.65600003.05625608.05554607c.7922368.80014014 1.1655217 1.62893662 1.1655217 2.50667615l-.0078032.21842698c-.05732034.7972463-.43150144 1.55478738-1.1577185 2.28824913l-.05758942.0537683-.01899046-.0176348c-.50510698-.50232394-.84436314-1.01414101-1.02964333-1.53660354-.11537714-.32534636-.17269954-.65911739-.17269954-1.00620607 0-.87773953.3732849-1.70653601 1.1655217-2.50667615z"></path></svg>

                                <div class="mt-2 text-lg font-semibold">
                                    Recomendación del viajero
                                </div>

                                <p class="text-sm text-[#696969]">
                                    Los alojamientos en Airbnb que más triunfan entre los huéspedes
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- end Alojamientos de primera -->

                    <hr class="mx-6">

                    <!-- Tipo de propiedad -->
                    <div class="p-6 space-y-4">
                        <div class="text-lg font-semibold">
                            Tipo de propiedad
                        </div>

                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                            <?php foreach ( $propiedades as $propiedad ) : ?>
                            <div class="p-4 border border-gray-300 rounded-lg flex flex-col justify-between">
                                <img src="/assets/images/filters/modal/<?php echo $propiedad['imagen']; ?>.png" alt="" class="mb-4 w-8">
                                <span class="font-semibold">
                                    <?php echo $propiedad['texto']; ?>
                                </span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- end Tipo de propiedad -->

                    <hr class="mx-6">

                    <!-- Servicios -->
                    <div class="p-6 space-y-4">
                        <div class="text-lg font-semibold">
                            Servicios
                        </div>

                        <div class="mt-3 font-semibold">
                            Servicios básicos
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <?php foreach ( $servicios as $servicio ) : ?>
                                <div class="flex flex-row lg:flex-row-reverse lg:gap-4 items-center justify-between">
                                    <div class="flex-grow">
                                        <?php echo $servicio; ?>
                                    </div>
                                    <label for="servicioWifi" class="hidden">
                                        <?php echo $servicio; ?>
                                    </label>
                                    <input id="servicioWifi" type="checkbox" class="h-6 w-6 rounded border-gray-300 text-[#222222] focus:ring-0">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div x-data="{serviciosOcultos: false, text: 'Mostrar más'}">
                            <div x-show="serviciosOcultos" class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
		                        <?php foreach ( $servicios_ocultos as $servicio ) : ?>
                                    <div class="flex flex-row lg:flex-row-reverse lg:gap-4 items-center justify-between">
                                        <div class="flex-grow">
					                        <?php echo $servicio; ?>
                                        </div>
                                        <label for="servicioWifi" class="hidden">
					                        <?php echo $servicio; ?>
                                        </label>
                                        <input id="servicioWifi" type="checkbox" class="h-6 w-6 rounded border-gray-300 text-[#222222] focus:ring-0">
                                    </div>
		                        <?php endforeach; ?>
                            </div>

                            <div class="mt-3 font-semibold underline" @click="serviciosOcultos = ! serviciosOcultos; text = ! text" x-text="text ? 'Mostrar más' : 'Mostrar menos'">
                            </div>
                        </div>
                    </div>
                    <!-- end Servicios -->

                    <hr class="mx-6">

                    <!-- Opciones de reserva -->
                    <div class="p-6 space-y-4">
                        <div class="text-lg font-semibold">
                            Opciones de reserva
                        </div>

                        <?php foreach ( $opciones_reserva as $index => $opcion ) : ?>
                            <div class="flex items-center justify-between gap-16">
                                <div>
                                    <div class="font-semibold">
                                        <?php echo $opcion['titulo']; ?>
                                    </div>
                                    <div class="text-sm <?php echo $index === 2 ? 'underline' : ''; ?>">
                                        <?php echo $opcion['texto']; ?>
                                    </div>
                                </div>

                                <div>
                                    <button type="button" class="bg-[#b0b0b0] relative inline-flex h-8 w-12 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2" role="switch" aria-checked="false">
                                        <span class="sr-only">Use setting</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-7 w-7 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- end Opciones de reserva -->

                    <hr class="mx-6">

                    <!-- Accesibilidad -->
                    <div class="p-6 space-y-4">
                        <div class="text-lg font-semibold">
                            Prestaciones de accesibilidad
                        </div>

                        <div class="mt-3 font-semibold">
                            Entrada y aparcamiento para los huéspedes
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <?php foreach ( $accesibilidad as $acceso ) : ?>
                                <div class="flex flex-row lg:flex-row-reverse lg:gap-4 items-center justify-between">
                                    <div class="flex-grow">
                                        <?php echo $acceso; ?>
                                    </div>
                                    <label for="servicioWifi" class="hidden">
                                        <?php echo $acceso; ?>
                                    </label>
                                    <input id="servicioWifi" type="checkbox" class="h-6 w-6 rounded border-gray-300 text-[#222222] focus:ring-0">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div x-data="{accesibilidadOcultos: false, text: 'Mostrar más'}">
                            <div x-show="accesibilidadOcultos" class="space-y-4">

                                <div class="mt-3 font-semibold">
                                    Dormitorio
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <?php foreach ( $accesibilidad_ocultos as $acceso ) : ?>
                                        <div class="flex flex-row lg:flex-row-reverse lg:gap-4 items-center justify-between">
                                            <div class="flex-grow">
                                                <?php echo $acceso; ?>
                                            </div>
                                            <label for="servicioWifi" class="hidden">
                                                <?php echo $acceso; ?>
                                            </label>
                                            <input id="servicioWifi" type="checkbox" class="h-6 w-6 rounded border-gray-300 text-[#222222] focus:ring-0">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="mt-3 font-semibold underline" @click="accesibilidadOcultos = ! accesibilidadOcultos; text = ! text" x-text="text ? 'Mostrar más' : 'Mostrar menos'">
                            </div>
                        </div>
                    </div>
                    <!-- end Accesibilidad -->

                    <hr class="mx-6">

                    <!-- Idioma -->
                    <div class="p-6 space-y-4">
                        <div class="text-lg font-semibold">
                            Idioma del anfitrión
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <?php foreach ( $idiomas as $idioma ) : ?>
                                <div class="flex flex-row lg:flex-row-reverse lg:gap-4 items-center justify-between">
                                    <div class="flex-grow">
                                        <?php echo $idioma; ?>
                                    </div>
                                    <label for="servicioWifi" class="hidden">
                                        <?php echo $idioma; ?>
                                    </label>
                                    <input id="servicioWifi" type="checkbox" class="h-6 w-6 rounded border-gray-300 text-[#222222] focus:ring-0">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div x-data="{idiomasOcultos: false, text: 'Mostrar más'}">
                            <div x-show="idiomasOcultos" class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
								<?php foreach ( $idiomas_ocultos as $idioma ) : ?>
                                    <div class="flex flex-row lg:flex-row-reverse lg:gap-4 items-center justify-between">
                                        <div class="flex-grow">
											<?php echo $idioma; ?>
                                        </div>
                                        <label for="servicioWifi" class="hidden">
											<?php echo $idioma; ?>
                                        </label>
                                        <input id="servicioWifi" type="checkbox" class="h-6 w-6 rounded border-gray-300 text-[#222222] focus:ring-0">
                                    </div>
								<?php endforeach; ?>
                            </div>

                            <div class="mt-3 font-semibold underline" @click="idiomasOcultos = ! idiomasOcultos; text = ! text" x-text="text ? 'Mostrar más' : 'Mostrar menos'">
                            </div>
                        </div>
                    </div>
                    <!-- end Idioma -->

				</div>

                <!-- Footer -->
                <div class="py-3 px-6 border-t border-gray-300 text-center font-bold flex justify-between items-center">
                    <button>
                        Quitar filtros
                    </button>

                    <button class="py-3 px-6 bg-[#222222] text-white text-center rounded-lg font-normal">
                        Mostrar 688 alojamientos
                    </button>

                </div>
                <!-- end Footer -->
			</div>
		</div>
	</div>
</div>
