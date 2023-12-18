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
	];

    $fechas = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
    ];

    $quienes = [
        [
            'titulo' => 'Adultos',
            'texto' => '13 años o más',
        ],
	    [
		    'titulo' => 'Niños',
		    'texto' => 'De 2 a 12 años',
	    ],
	    [
		    'titulo' => 'Bebés',
		    'texto' => 'Menos de 2',
	    ],
        [
		    'titulo' => 'Mascotas',
		    'texto' => '¿Viajas con un animal de asistencia?',
	    ]
    ];
?>

<div class="absolute top-0 w-full h-full bg-gray-50 flex flex-col justify-between"
	x-show="searchModal"
    x-data="{searchModalTabs: 1, searchModalFechasTabs: 1}">

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
		<div class="hidden searchCard overflow-hidden">
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

        <!-- Fechas -->
        <div class="hidden searchCard">
            <div class="text-xl font-extrabold">
                ¿Cuándo quieres viajar?
            </div>

            <div class="my-4 p-1 bg-gray-200 rounded-full grid grid-cols-3 items-center text-sm font-bold text-center">
                <div class=""
                     :class="searchModalFechasTabs === 1 ? 'py-1.5 border border-[#DDDDDD] bg-white rounded-full' : ''"
                     @click="searchModalFechasTabs = 1">
                    Fechas
                </div>

                <div class=""
                     :class="searchModalFechasTabs === 2 ? 'py-1.5 border border-[#DDDDDD] bg-white rounded-full' : ''"
                     @click="searchModalFechasTabs = 2">
                    Meses
                </div>

                <div class=""
                     :class="searchModalFechasTabs === 3 ? 'py-1.5 border border-[#DDDDDD] bg-white rounded-full' : ''"
                    @click="searchModalFechasTabs = 3">
                    Flexible
                </div>
            </div>

            <!-- Tabs -->
            <div>
                <!-- Tabs » Fechas -->
                <div class="relative" x-show="searchModalFechasTabs === 1">
                    <div>
                        <ul class="pb-2 mx-auto text-center font-semibold text-xs text-[#717171]">
                            <li class="inline-block w-[42px]">L</li>
                            <li class="inline-block w-[42px]">M</li>
                            <li class="inline-block w-[42px]">X</li>
                            <li class="inline-block w-[42px]">J</li>
                            <li class="inline-block w-[42px]">V</li>
                            <li class="inline-block w-[42px]">S</li>
                            <li class="inline-block w-[42px]">D</li>
                        </ul>
                    </div>

                    <hr class="-mx-6">

                    <div class="overflow-y-scroll no-scrollbar h-[400px]">
                        <div>
                            <div class="py-4">
                                <div class="font-semibold">
                                    diciembre 2023
                                </div>

                                <table id="SearchDates">
                                    <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <div class="date dateDisabled">1</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">2</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">3</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date dateDisabled">4</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">5</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">6</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">7</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">8</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">9</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">10</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date dateDisabled">11</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">12</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">13</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">14</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">15</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">16</div>
                                        </td>
                                        <td>
                                            <div class="date dateDisabled">17</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">18</div>
                                        </td>
                                        <td>
                                            <div class="date">19</div>
                                        </td>
                                        <td>
                                            <div class="date">20</div>
                                        </td>
                                        <td>
                                            <div class="date">21</div>
                                        </td>
                                        <td>
                                            <div class="date">22</div>
                                        </td>
                                        <td>
                                            <div class="date">23</div>
                                        </td>
                                        <td>
                                            <div class="date">24</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">25</div>
                                        </td>
                                        <td>
                                            <div class="date">26</div>
                                        </td>
                                        <td>
                                            <div class="date">27</div>
                                        </td>
                                        <td>
                                            <div class="date">28</div>
                                        </td>
                                        <td>
                                            <div class="date">29</div>
                                        </td>
                                        <td>
                                            <div class="date">30</div>
                                        </td>
                                        <td>
                                            <div class="date">31</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="py-4">
                                <div class="font-semibold">
                                    enero 2024
                                </div>

                                <table id="SearchDates">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="date">1</div>
                                        </td>
                                        <td>
                                            <div class="date">2</div>
                                        </td>
                                        <td>
                                            <div class="date">3</div>
                                        </td>
                                        <td>
                                            <div class="date">4</div>
                                        </td>
                                        <td>
                                            <div class="date">5</div>
                                        </td>
                                        <td>
                                            <div class="date">6</div>
                                        </td>
                                        <td>
                                            <div class="date">7</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">8</div>
                                        </td>
                                        <td>
                                            <div class="date">9</div>
                                        </td>
                                        <td>
                                            <div class="date">10</div>
                                        </td>
                                        <td>
                                            <div class="date">11</div>
                                        </td>
                                        <td>
                                            <div class="date">12</div>
                                        </td>
                                        <td>
                                            <div class="date">13</div>
                                        </td>
                                        <td>
                                            <div class="date">14</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">15</div>
                                        </td>
                                        <td>
                                            <div class="date">16</div>
                                        </td>
                                        <td>
                                            <div class="date">17</div>
                                        </td>
                                        <td>
                                            <div class="date">18</div>
                                        </td>
                                        <td>
                                            <div class="date">19</div>
                                        </td>
                                        <td>
                                            <div class="date">20</div>
                                        </td>
                                        <td>
                                            <div class="date">21</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">22</div>
                                        </td>
                                        <td>
                                            <div class="date">23</div>
                                        </td>
                                        <td>
                                            <div class="date">24</div>
                                        </td>
                                        <td>
                                            <div class="date">25</div>
                                        </td>
                                        <td>
                                            <div class="date">26</div>
                                        </td>
                                        <td>
                                            <div class="date">27</div>
                                        </td>
                                        <td>
                                            <div class="date">28</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">29</div>
                                        </td>
                                        <td>
                                            <div class="date">30</div>
                                        </td>
                                        <td>
                                            <div class="date">31<div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="py-4">
                                <div class="font-semibold">
                                    febrero 2024
                                </div>

                                <table id="SearchDates">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">1</div>
                                        </td>
                                        <td>
                                            <div class="date">2</div>
                                        </td>
                                        <td>
                                            <div class="date">3</div>
                                        </td>
                                        <td>
                                            <div class="date">4</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">5</div>
                                        </td>
                                        <td>
                                            <div class="date">6</div>
                                        </td>
                                        <td>
                                            <div class="date">7</div>
                                        </td>
                                        <td>
                                            <div class="date">8</div>
                                        </td>
                                        <td>
                                            <div class="date">9</div>
                                        </td>
                                        <td>
                                            <div class="date">10</div>
                                        </td>
                                        <td>
                                            <div class="date">11</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">12</div>
                                        </td>
                                        <td>
                                            <div class="date">13</div>
                                        </td>
                                        <td>
                                            <div class="date">14</div>
                                        </td>
                                        <td>
                                            <div class="date">15</div>
                                        </td>
                                        <td>
                                            <div class="date">16</div>
                                        </td>
                                        <td>
                                            <div class="date">17</div>
                                        </td>
                                        <td>
                                            <div class="date">18</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">19</div>
                                        </td>
                                        <td>
                                            <div class="date">20</div>
                                        </td>
                                        <td>
                                            <div class="date">21</div>
                                        </td>
                                        <td>
                                            <div class="date">22</div>
                                        </td>
                                        <td>
                                            <div class="date">23</div>
                                        </td>
                                        <td>
                                            <div class="date">24</div>
                                        </td>
                                        <td>
                                            <div class="date">25</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="date">26</div>
                                        </td>
                                        <td>
                                            <div class="date">27</div>
                                        </td>
                                        <td>
                                            <div class="date">28</div>
                                        </td>
                                        <td>
                                            <div class="date">29</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                        <td>
                                            <div class="date">&nbsp;</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <hr class="-mx-6 my-3">

                    <div class="-mx-6 pl-6 flex flex-nowrap whitespace-nowrap items-center overflow-x-scroll no-scrollbar gap-2 text-xs">
                        <div class="py-1.5 px-3 bg-gray-100 border-2 border-gray-900 rounded-full">
                            Fechas exactas
                        </div>
                        <div class="py-1.5 px-3 border border-gray-300 rounded-full flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 2.66667; overflow: visible;"><path fill="none" d="M16 4v16m-8-8h16M8 26h16"></path></svg>
                            1 día
                        </div>
                        <div class="py-1.5 px-3 border border-gray-300 rounded-full flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 2.66667; overflow: visible;"><path fill="none" d="M16 4v16m-8-8h16M8 26h16"></path></svg>
                            2 días
                        </div>
                        <div class="py-1.5 px-3 border border-gray-300 rounded-full flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 2.66667; overflow: visible;"><path fill="none" d="M16 4v16m-8-8h16M8 26h16"></path></svg>
                            3 días
                        </div>
                        <div class="py-1.5 px-3 border border-gray-300 rounded-full flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 2.66667; overflow: visible;"><path fill="none" d="M16 4v16m-8-8h16M8 26h16"></path></svg>
                            7 días
                        </div>
                    </div>

                    <hr class="-mx-6 my-3">

                    <div class="py-2 bg-white flex items-center justify-between">
                        <a href="#" class="font-semibold underline">
                            Omitir
                        </a>

                        <button class="py-3 px-6 rounded-xl flex items-center gap-2 bg-[#222222] text-white">
                            Siguiente
                        </button>
                    </div>
                </div>
                <!-- end Tabs » Fechas -->

                <!-- Tabs » Meses -->
                <div x-show="searchModalFechasTabs === 2">
                    <div class="min-h-[230px] max-h-[290px] min-with-[230px] max-w-[290px] w-full mx-auto relative flex flex-grow-0 flex-shrink rounded-full" style="aspect-ratio: 1;">

                        <div class="absolute h-full w-full bg-[#e6e6e6] rounded-full cursor-pointer" style="box-shadow: 0 -5px 5px rgba(0,0,0,0.2), 0 5px 5px #ffffff, inset 0 -20px 30px #ffffffe5, inset 0 10px 20px rgba(0,0,0,0.2);">
                        </div>

                        <div class="absolute top-[60px] right-[60px] bottom-[60px] left-[60px] flex flex-col items-center justify-center rounded-full bg-[#F7F7F7] overflow-hidden text-center" style="box-shadow: 0 -5px 5px rgba(255,255,255,0.4), inset 0 5px 3px rgba(255,255,255,0.8), inset 0 -5px 5px rgba(0,0,0,0.2), 0 11px 18px rgba(0,0,0,0.18), 0 -20px 30px rgba(255,255,255,0.8);">
                            <div class="flex flex-col items-center justify-center text-center" style="">
                                <div class="text-8xl font-bold">
                                    3
                                </div>
                                <div class="-mt-2 text-xl font-bold">
                                    meses
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        A partir del 1 de enero de 2024 · <a href="#" class="underline font-semibold">Editar</a>
                    </div>

                </div>
                <!-- end Tabs » Meses -->

                <!-- Tabs » Flexible -->
                <div x-show="searchModalFechasTabs === 3">
                    <div class="pt-3 border-t border-gray-200">
                        <div class="mb-2 font-semibold">
                            ¿Cuánto tiempo te gustaría quedarte?
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="py-1.5 px-3 border border-gray-300 rounded-full">
                                Fin de semana
                            </div>
                            <div class="py-1.5 px-3 bg-gray-100 border-2 border-gray-900 rounded-full">
                                Semana
                            </div>
                            <div class="py-1.5 px-3 border border-gray-300 rounded-full">
                                Mes
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-t border-gray-200">
                        <div class="mb-2 font-semibold">
                            ¿Cuánto quieres ir?
                        </div>
                        <div class="-mx-6 pl-6 flex flex-nograp overflow-x-scroll no-scrollbar gap-2">
		                    <?php foreach ( $fechas as $fecha ) : ?>
                                <div class="py-2 w-[114px] flex-none border border-gray-300 rounded-2xl text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-10 h-10 mx-auto text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                    </svg>
                                    <div class="mt-1 text-sm font-medium">
					                    <?php echo $fecha; ?>
                                        <div>2024</div>
                                    </div>
                                </div>
		                    <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- end Tabs » Flexible -->
            </div>
            <!-- end Tabs -->
        </div>
        <!-- end Fechas -->

        <!-- Cuántos -->
        <div class="searchCard">
            <div class="text-xl font-extrabold">
                ¿Cuántos sois?
            </div>

            <?php foreach ( $quienes as $index => $quien ) : ?>
                <div class="py-3 flex items-center justify-between">
                    <div>
                        <p class="font-semibold"><?php echo $quien['titulo']; ?></p>
                        <p class="text-sm text-[#7c7c7c] <?php echo $index === 3 ? 'underline' : ''; ?>">
                            <?php echo $quien['texto']; ?>
                        </p>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="border border-gray-200 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-200">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                        </div>
                        <div>
                            0
                        </div>
                        <div class="border border-[#7c7c7c] rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#7c7c7c]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>

                        </div>
                    </div>
                </div>

                <hr class="<?php echo $index === 3 ? 'hidden' : ''; ?>"">
            <?php endforeach; ?>

        </div>
        <!-- end Cuántos -->
	</div>

	<div class="py-2 px-6 bg-white flex items-center justify-between"
        :class="searchModalFechasTabs === 1 ? 'hidden' : ''">
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
