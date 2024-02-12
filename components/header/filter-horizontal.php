<?php
	$alojamientos = [
		[
			'imagen' => 'cabanas',
			'texto' => 'Cabañas'
		],
		[
			'imagen' => 'con-vistas',
			'texto' => 'Con vistas'
		],
		[
			'imagen' => 'singulares',
			'texto' => 'Singulares'
		],
		[
			'imagen' => 'a-pie-de-playa',
			'texto' => 'A pie de playa'
		],
		[
			'imagen' => 'cuevas',
			'texto' => 'Cuevas'
		],
		[
			'imagen' => 'en-el-campo',
			'texto' => 'A pie de campo'
		],
		[
			'imagen' => 'casas-domo',
			'texto' => 'Casas domo'
		],
		[
			'imagen' => 'esqui',
			'texto' => 'Esquí'
		],
		[
			'imagen' => 'minicasas',
			'texto' => 'Mini casas'
		],
		[
			'imagen' => 'a-pie-de-playa',
			'texto' => 'A pie de playa'
		],
		[
			'imagen' => 'singulares',
			'texto' => 'Singulares'
		],
		[
			'imagen' => 'a-pie-de-playa',
			'texto' => 'A pie de playa'
		],
	];
?>

<!-- Filters -->
<div class="mt-4 lg:mt-6 px-6 lg:px-10 flex justify-between items-stretch gap-0 border-t border-gray-200 lg:py-6">
    <!-- Filter » Horizontal -->
    <div class="border-b-4 border-[#f5f5f5] lg:border-0 flex flex-nowrap items-center gap-6 lg:gap-10 overflow-x-auto no-scrollbar">
        <?php foreach ( $alojamientos as $index => $alojamiento ) : ?>
            <div class="whitespace-nowrap pb-3 border-b-2 <?php echo $index === 0 ? 'border-black' : 'border-transparent'; ?>">
                <img src="/assets/images/filters/horizontal/<?php echo $alojamiento['imagen']; ?>.png" alt="<?php echo $alojamiento['texto']; ?>"
                     class="w-6 h-6 mx-auto <?php echo $index !== 0 ? 'opacity-60' : ''; ?>">
                <p class="mt-1 text-xs font-bold <?php echo $index !== 0 ? 'text-gray-500' : ''; ?>">
                    <?php echo $alojamiento['texto']; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- end Filter » Horizontal -->

    <div class="-ml-6 bg-white w-[50px] opacity-60"></div>

    <div class="hidden lg:flex items-center justify-center">
        <button @click="filterModal = true" class="flex p-3 border border-gray-300 rounded-2xl items-center gap-3 text-xs font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
            </svg>
            Filtros
        </button>
    </div>
</div>
<!-- end Filters -->