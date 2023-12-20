<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Airbnb | Alquileres vacacionales, cabañas, casas en la playa y mucho más</title>

	<!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

	<!-- Alpine JS -->
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

	<link rel="stylesheet" href="assets/css/style-production.css" />
</head>
<body>
<?php require 'components/header.php'; ?>

<main>
    <div class="p-6 grid grid-cols-1">
        <div class="col-span-1">
            <div>
                <div class="relative mb-3 h-[324px] rounded-xl">
                    <img src="https://a0.muscache.com/im/pictures/b7c9264d-73c9-45c3-882e-6e9577d63d68.jpg?im_w=720" alt=""
                         class="absolute h-full rounded-xl object-cover object-center">

                    <div class="relative p-4 flex justify-between">
                        <div class="py-1 px-3 bg-white rounded-full text-sm font-bold">
                            Recomendación del viajero
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-7 h-7 text-white fill-black opacity-80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>


                    </div>
                </div>

                <div class="flex items-start justify-between">
                    <div class="text-sm">
                        <div class="text-base font-bold">
                            Drimnin, Reino Unido
                        </div>
                        <div class="text-[#818181]">Anfitrión particular</div>
                        <div class="mb-2 text-[#818181]">25–30 sept</div>
                        <div><span class="font-bold">231 €</span> noche</div>
                    </div>
                    <div class="flex items-center gap-1 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        4,94
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'components/footer.php'; ?>
</body>
</html>