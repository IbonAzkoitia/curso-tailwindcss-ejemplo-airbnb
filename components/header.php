<header x-data="{searchModal: true}">
<div class="pt-[14px] px-6 flex items-center justify-between gap-4">
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
	<div class="border border-gray-400 rounded-full p-2">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
			<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
		</svg>

	</div>
</div>

<?php require 'components/header/search-modal.php'; ?>
</header>