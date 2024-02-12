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
			'imagen' => 'portugal',
			'texto' => 'Portugal'
		],
		[
			'imagen' => 'caribe',
			'texto' => 'Caribe'
		],
		[
			'imagen' => 'italia',
			'texto' => 'Italia'
		],
		[
            'imagen' => 'estados-unidos',
            'texto' => 'Estados Unidos'
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

<header x-data="{searchModal: false, filterModal: false}">

    <!-- Top -->
    <div class="py-4 px-6 lg:px-10 hidden lg:flex lg:justify-between lg:items-center">

        <!-- Logo -->
        <div class="text-airbnb-accent">
            <svg width="30" height="32" style="display: block;">
                <path d="M29.3864 22.7101C29.2429 22.3073 29.0752 21.9176 28.9157 21.5565C28.6701 21.0011 28.4129 20.4446 28.1641 19.9067L28.1444 19.864C25.9255 15.0589 23.5439 10.1881 21.0659 5.38701L20.9607 5.18316C20.7079 4.69289 20.4466 4.18596 20.1784 3.68786C19.8604 3.0575 19.4745 2.4636 19.0276 1.91668C18.5245 1.31651 17.8956 0.833822 17.1853 0.502654C16.475 0.171486 15.7005 -9.83959e-05 14.9165 4.23317e-08C14.1325 9.84805e-05 13.3581 0.171877 12.6478 0.503224C11.9376 0.834571 11.3088 1.31742 10.8059 1.91771C10.3595 2.46476 9.97383 3.05853 9.65572 3.68858C9.38521 4.19115 9.12145 4.70278 8.8664 5.19757L8.76872 5.38696C6.29061 10.1884 3.90903 15.0592 1.69015 19.8639L1.65782 19.9338C1.41334 20.463 1.16057 21.0102 0.919073 21.5563C0.75949 21.9171 0.592009 22.3065 0.448355 22.7103C0.0369063 23.8104 -0.094204 24.9953 0.0668098 26.1585C0.237562 27.334 0.713008 28.4447 1.44606 29.3804C2.17911 30.3161 3.14434 31.0444 4.24614 31.4932C5.07835 31.8299 5.96818 32.002 6.86616 32C7.14824 31.9999 7.43008 31.9835 7.71027 31.9509C8.846 31.8062 9.94136 31.4366 10.9321 30.8639C12.2317 30.1338 13.5152 29.0638 14.9173 27.5348C16.3194 29.0638 17.6029 30.1338 18.9025 30.8639C19.8932 31.4367 20.9886 31.8062 22.1243 31.9509C22.4045 31.9835 22.6864 31.9999 22.9685 32C23.8664 32.002 24.7561 31.8299 25.5883 31.4932C26.6901 31.0444 27.6554 30.3161 28.3885 29.3804C29.1216 28.4447 29.5971 27.3341 29.7679 26.1585C29.9287 24.9952 29.7976 23.8103 29.3864 22.7101ZM14.9173 24.377C13.1816 22.1769 12.0678 20.1338 11.677 18.421C11.5169 17.7792 11.4791 17.1131 11.5656 16.4573C11.6339 15.9766 11.8105 15.5176 12.0821 15.1148C12.4163 14.6814 12.8458 14.3304 13.3374 14.0889C13.829 13.8475 14.3696 13.7219 14.9175 13.7219C15.4655 13.722 16.006 13.8476 16.4976 14.0892C16.9892 14.3307 17.4186 14.6817 17.7528 15.1151C18.0244 15.5181 18.201 15.9771 18.2693 16.4579C18.3556 17.114 18.3177 17.7803 18.1573 18.4223C17.7661 20.1349 16.6526 22.1774 14.9173 24.377ZM27.7406 25.8689C27.6212 26.6908 27.2887 27.4674 26.7762 28.1216C26.2636 28.7759 25.5887 29.2852 24.8183 29.599C24.0393 29.9111 23.1939 30.0217 22.3607 29.9205C21.4946 29.8089 20.6599 29.5239 19.9069 29.0824C18.7501 28.4325 17.5791 27.4348 16.2614 25.9712C18.3591 23.3846 19.669 21.0005 20.154 18.877C20.3723 17.984 20.4196 17.0579 20.2935 16.1475C20.1791 15.3632 19.8879 14.615 19.4419 13.9593C18.9194 13.2519 18.2378 12.6768 17.452 12.2805C16.6661 11.8842 15.798 11.6777 14.9175 11.6777C14.0371 11.6777 13.1689 11.8841 12.383 12.2803C11.5971 12.6765 10.9155 13.2515 10.393 13.9589C9.94707 14.6144 9.65591 15.3624 9.5414 16.1465C9.41524 17.0566 9.4623 17.9822 9.68011 18.8749C10.1648 20.9993 11.4748 23.384 13.5732 25.9714C12.2555 27.4348 11.0845 28.4325 9.92769 29.0825C9.17468 29.5239 8.34007 29.809 7.47395 29.9205C6.64065 30.0217 5.79525 29.9111 5.0162 29.599C4.24581 29.2852 3.57092 28.7759 3.05838 28.1217C2.54585 27.4674 2.21345 26.6908 2.09411 25.8689C1.97932 25.0334 2.07701 24.1825 2.37818 23.3946C2.49266 23.0728 2.62663 22.757 2.7926 22.3818C3.0274 21.851 3.27657 21.3115 3.51759 20.7898L3.54996 20.7197C5.75643 15.9419 8.12481 11.0982 10.5894 6.32294L10.6875 6.13283C10.9384 5.64601 11.1979 5.14267 11.4597 4.6563C11.7101 4.15501 12.0132 3.68171 12.3639 3.2444C12.6746 2.86903 13.0646 2.56681 13.5059 2.35934C13.9473 2.15186 14.4291 2.04426 14.9169 2.04422C15.4047 2.04418 15.8866 2.15171 16.3279 2.35911C16.7693 2.56651 17.1593 2.86867 17.4701 3.24399C17.821 3.68097 18.1242 4.15411 18.3744 4.65538C18.6338 5.13742 18.891 5.63623 19.1398 6.11858L19.2452 6.32315C21.7097 11.0979 24.078 15.9415 26.2847 20.7201L26.3046 20.7631C26.5498 21.2936 26.8033 21.8419 27.042 22.382C27.2082 22.7577 27.3424 23.0738 27.4566 23.3944C27.7576 24.1824 27.8553 25.0333 27.7406 25.8689Z" fill="currentcolor"></path>
            </svg>
        </div>
        <!-- end Logo -->

        <!-- Nav / Tabs -->
        <div class="flex items-center gap-6">
            <button class="font-semibold">
                Alojamientos
            </button>

            <button class="font-semibold text-gray-500">
                Experiencias
            </button>

            <a href="#" class="font-semibold text-gray-500">
                Experiencias online
            </a>
        </div>
        <!-- end Nav / Tabs -->

        <!-- Nav » User -->
        <div class="relative flex items-center gap-6" x-data="{userNavModal: false}">
            <a href="#" class="font-bold text-sm">
                Pon tu casa en Airbnb
            </a>

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
            </div>

            <button class="py-2 px-3 rounded-full border border-gray-200 shadow-lg flex items-center gap-2"
                @click="userNavModal = ! userNavModal"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-gray-500">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>

            </button>

            <!-- Nav -->
            <div x-show="userNavModal" class="absolute right-0 top-16 min-w-[250px] z-50 bg-white border border-gray-100 shadow-lg rounded-xl divide-y divide-gray-200 text-sm">
                <div class="py-2">
                    <div class="py-2 px-4 font-semibold hover:bg-gray-200">
                        Regístrate
                    </div>

                    <div class="py-2 px-4 hover:bg-gray-200">
                        Iniciar sesión
                    </div>
                </div>

                <div class="py-2">
                    <div class="py-2 px-4 hover:bg-gray-200">
                        Tarjeta regalo
                    </div>

                    <div class="py-2 px-4 hover:bg-gray-200">
                        Pon tu casa en Airbnb
                    </div>

                    <div class="py-2 px-4 hover:bg-gray-200">
                        Centro de ayuda
                    </div>
                </div>
            </div>
            <!-- end Nav -->
        </div>
        <!-- end Nav » User -->

    </div>
    <!-- end Top -->

    <!-- Search Bar » Tablet/Desktop -->
    <div class="hidden lg:block max-w-3xl mx-auto">
        <div class="relative border border-gray-300 shadow-lg rounded-full grid grid-cols-12 text-xs"
             :class="searchCards !== 0 ? 'bg-gray-100' : ''"
             x-data="{searchModalTabs: 1, searchModalFechasTabs: 1, searchCards: 0}">
            <!-- Destinos -->
            <div class="relative col-span-4 pl-8 pr-6 flex flex-col justify-center space-y-1 border-gray-300 border-r"
                 :class=" [
                    searchCards === 1 ? 'bg-white rounded-full py-4 shadow-lg' : 'my-4',
                    searchCards === 2 ? '!border-r-0' : ''
                ]"
            >
                <div @click="searchCards = 1">
                    <div class="font-bold">
                        Destino
                    </div>
                    <div class="text-gray-500">
                        Buscar destinos
                    </div>
                </div>

                <div class="absolute top-20 left-0 w-[500px] searchCard z-50"
                     :class="searchCards === 1 ? '' : 'hidden'"
                >
                    <div class="mb-3 text-base font-extrabold">
                        Buscar por región
                    </div>

                    <div class="grid grid-cols-3 gap-5">
			            <?php foreach ( $destinos as $destino ) : ?>
                            <div>
                                <button class="mb-2 border border-gray-300 rounded-xl">
                                    <img class="rounded-xl" src="/assets/images/search/<?php echo $destino['imagen']; ?>.jpg" alt="">
                                </button>
                                <div class="text-sm font-medium">
						            <?php echo $destino['texto']; ?>
                                </div>
                            </div>
			            <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- end Destinos -->

            <!-- Fechas -->
            <div class="col-span-2 px-6 flex flex-col justify-center space-y-1 border-r border-gray-300"
                 :class="[
                    searchCards === 2 ? 'bg-white rounded-full py-4 shadow-lg' : 'my-4',
                    searchCards === 3 ? '!border-r-0' : ''
                 ]"
                 @click="searchCards = 2">
                <div class="font-bold">
                    Llegada
                </div>
                <div class="text-gray-500 truncate">
                    Introduce las fechas
                </div>
            </div>
            <div class="col-span-2 px-6 flex flex-col justify-center space-y-1 border-r border-gray-300"
                 :class="[
                    searchCards === 3 ? 'bg-white rounded-full py-4 shadow-lg' : 'my-4',
                    searchCards === 4 ? '!border-r-0' : ''
                 ]"
                 @click="searchCards = 3">
                <div class="font-bold">
                    Salida
                </div>
                <div class="text-gray-500 truncate">
                    Introduce las fechas
                </div>
            </div>
            <div class="absolute top-20 left-0 w-full searchCard z-50"
                 :class="searchCards === 2 || searchCards === 3 ? '' : 'hidden'"
            >
                <div class="my-4 p-1 max-w-xs mx-auto bg-gray-200 rounded-full grid grid-cols-3 items-center text-sm font-bold text-center">
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

                        <div class="grid grid-cols-2 gap-12">
                            <div class="py-4">
                                <div class="text-base text-center font-semibold">
                                    diciembre 2023
                                </div>

                                <ul class="py-4  mx-auto text-center font-semibold text-xs text-[#717171] flex items-center justify-between">
                                    <li class="flex-grow">L</li>
                                    <li class="flex-grow">M</li>
                                    <li class="flex-grow">X</li>
                                    <li class="flex-grow">J</li>
                                    <li class="flex-grow">V</li>
                                    <li class="flex-grow">S</li>
                                    <li class="flex-grow">D</li>
                                </ul>

                                <table id="SearchDates" class="w-full">
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
                                <div class="text-base text-center font-semibold">
                                    enero 2024
                                </div>

                                <ul class="py-4  mx-auto text-center font-semibold text-xs text-[#717171] flex items-center justify-between">
                                    <li class="flex-grow">L</li>
                                    <li class="flex-grow">M</li>
                                    <li class="flex-grow">X</li>
                                    <li class="flex-grow">J</li>
                                    <li class="flex-grow">V</li>
                                    <li class="flex-grow">S</li>
                                    <li class="flex-grow">D</li>
                                </ul>

                                <table id="SearchDates" class="w-full">
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
                        </div>

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
                            A partir del 1 de marzo · <a href="#" class="underline font-semibold">Editar</a>
                        </div>

                    </div>
                    <!-- end Tabs » Meses -->

                    <!-- Tabs » Flexible -->
                    <div x-show="searchModalFechasTabs === 3">
                        <div class="pt-3">
                            <div class="mb-2 font-semibold text-center text-lg">
                                ¿Cuánto tiempo te gustaría quedarte?
                            </div>
                            <div class="flex items-center justify-center gap-2 text-sm">
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
                        <div class="mt-3 pt-3">
                            <div class="mb-2 font-semibold text-center text-lg">
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

            <!-- Viajeros -->
            <div class="relative col-span-4 pl-6 pr-2">
                <div class="flex justify-between items-center"
                     :class="searchCards === 4 ? 'bg-white rounded-full pl-6 py-2 shadow-lg' : 'my-2'"
                    @click="searchCards = 4"
                >
                    <div class="flex flex-col justify-center space-y-1">
                        <div class="font-bold">
                            Viajeros
                        </div>
                        <div class="text-gray-500">
                            Añade viajeros
                        </div>
                    </div>

                    <button class="inline-flex items-center justify-center w-12 h-12 bg-[#ff385c] rounded-full text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>

                <div class="absolute top-20 right-0 w-[350px] searchCard z-50"
                     :class="searchCards === 4 ? '' : 'hidden'"
                >
                    <div class="text-xl font-extrabold">
                        ¿Cuántos sois?
                    </div>

		            <?php foreach ( $quienes as $index => $quien ) : ?>
                        <div class="py-3 flex items-center justify-between">
                            <div>
                                <p class="font-semibold"><?php echo $quien['titulo']; ?></p>
                                <p class="text-xs text-[#7c7c7c] <?php echo $index === 3 ? 'underline' : ''; ?>">
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
            </div>
            <!-- end Viajeros -->
        </div>
    </div>
    <!-- end Search Bar » Tablet/Desktop -->



    <!-- Search Bar » Mobile -->
    <div class="lg:hidden pt-[14px] px-6 flex items-center justify-between gap-4">
        <div class="flex-grow">
            <button @click="searchModal = true" class="w-full border border-gray-200 rounded-full py-2 px-4 shadow-md flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

                <span class="text-left">
                    <span class="block text-airbnb-gray-dark font-semibold">
                        Cualquier lugar
                    </span>
                    <span class="block text-xs text-airbnb-gray-light">
                        Cualquier semana · Añade viajeros
                    </span>
                </span>
            </button>
        </div>
        <div class="border border-gray-400 rounded-full p-2" @click="filterModal = true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
            </svg>
        </div>
    </div>
    <!-- end Search Bar » Mobile -->

    <?php require 'components/header/search-modal.php'; ?>
    <?php require 'components/header/filter-modal.php'; ?>
    <?php require 'components/header/filter-horizontal.php'; ?>
</header>