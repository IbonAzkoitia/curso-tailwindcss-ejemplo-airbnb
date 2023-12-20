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

    <!-- SmoothScroll -->
    <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>

	<link rel="stylesheet" href="assets/css/style-production.css" />
</head>
<body class="relative">
<?php require 'components/header.php'; ?>

<main>
    <div class="p-6 grid grid-cols-1 gap-y-10">
        <div class="col-span-1">
            <div>

                <!-- Carousel -->
                <div class="relative mb-3 rounded-xl">

                    <div class="relative h-full">
                        <div x-data="{
                            currentSlide: 0,
                            skip: 1,
                            atBeginning: false,
                            atEnd: false,
                            autoSlideInterval: null,
                            startAutoSlide() {
                                this.autoSlideInterval = setInterval(() => {
                                    this.next();
                                }, 2500);
                            },
                            stopAutoSlide() {
                                clearInterval(this.autoSlideInterval);
                            },
                            goToSlide(index) {
                                let slider = this.$refs.slider;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                slider.scrollTo({ left: offset * index, behavior: 'smooth' });
                            },
                            next() {
                                let slider = this.$refs.slider;
                                let current = slider.scrollLeft;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                let maxScroll = offset * (slider.children.length - 1);

                                current + offset >= maxScroll ? slider.scrollTo({ left: 0, behavior: 'smooth' }) : slider.scrollBy({ left: offset * this.skip, behavior: 'smooth' });
                            },
                            prev() {
                                let slider = this.$refs.slider;
                                let current = slider.scrollLeft;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                let maxScroll = offset * (slider.children.length - 1);

                                current <= 0 ? slider.scrollTo({ left: maxScroll, behavior: 'smooth' }) : slider.scrollBy({ left: -offset * this.skip, behavior: 'smooth' });
                            },
                            updateButtonStates() {
                                let slideEls = this.$el.parentElement.children;
                                this.atBeginning = slideEls[0] === this.$el;
                                this.atEnd = slideEls[slideEls.length-1] === this.$el;
                            },
                            focusableWhenVisible: {
                                'x-intersect:enter'() { this.$el.removeAttribute('tabindex'); },
                                'x-intersect:leave'() { this.$el.setAttribute('tabindex', '-1'); }
                            },
                            disableNextAndPreviousButtons: {
                                'x-intersect:enter.threshold.05'() { this.updateButtonStates(); },
                                'x-intersect:leave.threshold.05'() { this.updateButtonStates(); }
                            },
                            updateCurrentSlide() {
                                let slider = this.$refs.slider;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                this.currentSlide = Math.round(slider.scrollLeft / offset);
                            }
                        }" class="flex flex-col w-full">
                            <div x-on:keydown.right="next" x-on:keydown.left="prev" tabindex="0" role="region" aria-labelledby="carousel-label" class="flex space-x-6">
                                <ul x-ref="slider" @scroll="updateCurrentSlide" tabindex="0" role="listbox" aria-labelledby="carouse-content-lagel"
                                class="flex w-full overflow-x-hidden snap-x snap-mandatory">
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/b7c9264d-73c9-45c3-882e-6e9577d63d68.jpg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/4588d88f-0224-42f4-94cb-594f4d362fba.jpg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/150e47d8-76b8-4233-8724-cbbd12880848.jpg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                </ul>
                            </div>

                            <!-- Navigation -->
                            <div class="absolute px-3 flex items-center justify-between w-full h-full">
                                <button @click="prev" :aria-disabled="atBeginning" :tabindex="atEnd ? -1 : 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-8 h-8 bg-white p-1.5 border border-gray-600 rounded-full text-gray-900">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>

                                <button @click="next" :aria-disabled="atEnd" :tabindex="atEnd ? -1 : 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-8 h-8 bg-white p-1.5 border border-gray-600 rounded-full text-gray-900">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>
                            <!-- end Navigation -->

                            <!-- Indicators -->
                            <div class="absolute z-50 w-full bottom-4">
                                <div class="flex justify-center space-x-2">
                                    <template x-for="(slide, index) in Array.from($refs.slider.children)" :key="index">
                                        <button @click="goToSlide(index)" :class="{'bg-gray-100': currentSlide === index, 'bg-gray-300': currentSlide !== index}" class="w-1.5 h-1.5 rounded-full hover:bg-gray-500 focus:outline-none focus:bg-gray-500"></button>
                                    </template>
                                </div>
                            </div>
                            <!-- end Indicators -->
                        </div>


                    </div>

                    <div class="absolute top-0 w-full p-4 flex justify-between">
                        <div class="py-1 px-3 bg-white rounded-full text-sm font-bold">
                            Recomendación del viajero
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-7 h-7 text-white fill-black opacity-80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>


                    </div>
                </div>
                <!-- end Carousel -->

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

        <div class="col-span-1">
            <div>

                <!-- Carousel -->
                <div class="relative mb-3 rounded-xl">

                    <div class="relative h-full">
                        <div x-data="{
                            currentSlide: 0,
                            skip: 1,
                            atBeginning: false,
                            atEnd: false,
                            autoSlideInterval: null,
                            startAutoSlide() {
                                this.autoSlideInterval = setInterval(() => {
                                    this.next();
                                }, 2500);
                            },
                            stopAutoSlide() {
                                clearInterval(this.autoSlideInterval);
                            },
                            goToSlide(index) {
                                let slider = this.$refs.slider;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                slider.scrollTo({ left: offset * index, behavior: 'smooth' });
                            },
                            next() {
                                let slider = this.$refs.slider;
                                let current = slider.scrollLeft;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                let maxScroll = offset * (slider.children.length - 1);

                                current + offset >= maxScroll ? slider.scrollTo({ left: 0, behavior: 'smooth' }) : slider.scrollBy({ left: offset * this.skip, behavior: 'smooth' });
                            },
                            prev() {
                                let slider = this.$refs.slider;
                                let current = slider.scrollLeft;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                let maxScroll = offset * (slider.children.length - 1);

                                current <= 0 ? slider.scrollTo({ left: maxScroll, behavior: 'smooth' }) : slider.scrollBy({ left: -offset * this.skip, behavior: 'smooth' });
                            },
                            updateButtonStates() {
                                let slideEls = this.$el.parentElement.children;
                                this.atBeginning = slideEls[0] === this.$el;
                                this.atEnd = slideEls[slideEls.length-1] === this.$el;
                            },
                            focusableWhenVisible: {
                                'x-intersect:enter'() { this.$el.removeAttribute('tabindex'); },
                                'x-intersect:leave'() { this.$el.setAttribute('tabindex', '-1'); }
                            },
                            disableNextAndPreviousButtons: {
                                'x-intersect:enter.threshold.05'() { this.updateButtonStates(); },
                                'x-intersect:leave.threshold.05'() { this.updateButtonStates(); }
                            },
                            updateCurrentSlide() {
                                let slider = this.$refs.slider;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                this.currentSlide = Math.round(slider.scrollLeft / offset);
                            }
                        }" class="flex flex-col w-full">
                            <div x-on:keydown.right="next" x-on:keydown.left="prev" tabindex="0" role="region" aria-labelledby="carousel-label" class="flex space-x-6">
                                <ul x-ref="slider" @scroll="updateCurrentSlide" tabindex="0" role="listbox" aria-labelledby="carouse-content-lagel"
                                    class="flex w-full overflow-x-hidden snap-x snap-mandatory">
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-5264493/original/10d2c21f-84c2-46c5-b20b-b51d1c2c971a.jpeg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-5264493/original/e3beaf52-13ab-44ed-bbfa-56ccf43bab98.jpeg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-5264493/original/bc9fdbba-a126-4357-946b-4d5f5581ca0f.jpeg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                </ul>
                            </div>

                            <!-- Navigation -->
                            <div class="absolute px-3 flex items-center justify-between w-full h-full">
                                <button @click="prev" :aria-disabled="atBeginning" :tabindex="atEnd ? -1 : 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-8 h-8 bg-white p-1.5 border border-gray-600 rounded-full text-gray-900">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>

                                <button @click="next" :aria-disabled="atEnd" :tabindex="atEnd ? -1 : 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-8 h-8 bg-white p-1.5 border border-gray-600 rounded-full text-gray-900">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>
                            <!-- end Navigation -->

                            <!-- Indicators -->
                            <div class="absolute z-50 w-full bottom-4">
                                <div class="flex justify-center space-x-2">
                                    <template x-for="(slide, index) in Array.from($refs.slider.children)" :key="index">
                                        <button @click="goToSlide(index)" :class="{'bg-gray-100': currentSlide === index, 'bg-gray-300': currentSlide !== index}" class="w-1.5 h-1.5 rounded-full hover:bg-gray-500 focus:outline-none focus:bg-gray-500"></button>
                                    </template>
                                </div>
                            </div>
                            <!-- end Indicators -->
                        </div>
                    </div>
                </div>
                <!-- end Carousel -->

                <div class="flex items-start justify-between">
                    <div class="text-sm">
                        <div class="text-base font-bold">
                            Ponta delgada, Portugal
                        </div>
                        <div class="text-[#818181]">Anfitrión profesional</div>
                        <div class="mb-2 text-[#818181]">5-10 abril</div>
                        <div><span class="font-bold">200 €</span> noche</div>
                    </div>
                    <div class="flex items-center gap-1 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        4,93
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1">
            <div>

                <!-- Carousel -->
                <div class="relative mb-3 rounded-xl">

                    <div class="relative h-full">
                        <div x-data="{
                            currentSlide: 0,
                            skip: 1,
                            atBeginning: false,
                            atEnd: false,
                            autoSlideInterval: null,
                            startAutoSlide() {
                                this.autoSlideInterval = setInterval(() => {
                                    this.next();
                                }, 2500);
                            },
                            stopAutoSlide() {
                                clearInterval(this.autoSlideInterval);
                            },
                            goToSlide(index) {
                                let slider = this.$refs.slider;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                slider.scrollTo({ left: offset * index, behavior: 'smooth' });
                            },
                            next() {
                                let slider = this.$refs.slider;
                                let current = slider.scrollLeft;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                let maxScroll = offset * (slider.children.length - 1);

                                current + offset >= maxScroll ? slider.scrollTo({ left: 0, behavior: 'smooth' }) : slider.scrollBy({ left: offset * this.skip, behavior: 'smooth' });
                            },
                            prev() {
                                let slider = this.$refs.slider;
                                let current = slider.scrollLeft;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                let maxScroll = offset * (slider.children.length - 1);

                                current <= 0 ? slider.scrollTo({ left: maxScroll, behavior: 'smooth' }) : slider.scrollBy({ left: -offset * this.skip, behavior: 'smooth' });
                            },
                            updateButtonStates() {
                                let slideEls = this.$el.parentElement.children;
                                this.atBeginning = slideEls[0] === this.$el;
                                this.atEnd = slideEls[slideEls.length-1] === this.$el;
                            },
                            focusableWhenVisible: {
                                'x-intersect:enter'() { this.$el.removeAttribute('tabindex'); },
                                'x-intersect:leave'() { this.$el.setAttribute('tabindex', '-1'); }
                            },
                            disableNextAndPreviousButtons: {
                                'x-intersect:enter.threshold.05'() { this.updateButtonStates(); },
                                'x-intersect:leave.threshold.05'() { this.updateButtonStates(); }
                            },
                            updateCurrentSlide() {
                                let slider = this.$refs.slider;
                                let offset = slider.firstElementChild.getBoundingClientRect().width;
                                this.currentSlide = Math.round(slider.scrollLeft / offset);
                            }
                        }" class="flex flex-col w-full">
                            <div x-on:keydown.right="next" x-on:keydown.left="prev" tabindex="0" role="region" aria-labelledby="carousel-label" class="flex space-x-6">
                                <ul x-ref="slider" @scroll="updateCurrentSlide" tabindex="0" role="listbox" aria-labelledby="carouse-content-lagel"
                                    class="flex w-full overflow-x-hidden snap-x snap-mandatory">
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/9da940a2-82d0-4efc-808e-381292ac5321.jpg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-20445002/original/b4f6fb84-505b-4160-817c-7a462363ec28.jpeg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                    <li x-bind="disableNextAndPreviousButtons" class="w-full shrink-0 snap-start">
                                        <img src="https://a0.muscache.com/im/pictures/miso/Hosting-20445002/original/eb6dc382-c096-497c-a321-f2d533e2ab93.jpeg?im_w=720" alt=""
                                             class="w-full rounded-xl">
                                    </li>
                                </ul>
                            </div>

                            <!-- Navigation -->
                            <div class="absolute px-3 flex items-center justify-between w-full h-full">
                                <button @click="prev" :aria-disabled="atBeginning" :tabindex="atEnd ? -1 : 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-8 h-8 bg-white p-1.5 border border-gray-600 rounded-full text-gray-900">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>

                                <button @click="next" :aria-disabled="atEnd" :tabindex="atEnd ? -1 : 0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" data-slot="icon" class="w-8 h-8 bg-white p-1.5 border border-gray-600 rounded-full text-gray-900">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>
                            <!-- end Navigation -->

                            <!-- Indicators -->
                            <div class="absolute z-50 w-full bottom-4">
                                <div class="flex justify-center space-x-2">
                                    <template x-for="(slide, index) in Array.from($refs.slider.children)" :key="index">
                                        <button @click="goToSlide(index)" :class="{'bg-gray-100': currentSlide === index, 'bg-gray-300': currentSlide !== index}" class="w-1.5 h-1.5 rounded-full hover:bg-gray-500 focus:outline-none focus:bg-gray-500"></button>
                                    </template>
                                </div>
                            </div>
                            <!-- end Indicators -->
                        </div>
                    </div>

                    <div class="absolute top-0 w-full p-4 flex justify-between">
                        <div class="py-1 px-3 bg-white rounded-full text-sm font-bold">
                            Recomendación del viajero
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-7 h-7 text-white fill-black opacity-80">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </div>
                </div>
                <!-- end Carousel -->

                <div class="flex items-start justify-between">
                    <div class="text-sm">
                        <div class="text-base font-bold">
                            Redberth, Reino Unido
                        </div>
                        <div class="text-[#818181]">Anfitrión particular</div>
                        <div class="mb-2 text-[#818181]">20-25 diciembre</div>
                        <div><span class="font-bold">248 €</span> noche</div>
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

<!-- Mapa -->
<div class="fixed w-full flex justify-center bottom-20 z-50">
    <button class="py-2 px-5 text-sm text-white bg-[#222222] rounded-full flex items-center gap-2">
        Mapa
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 16px; width: 16px; fill: rgb(255, 255, 255);"><path d="M31.25 3.75a2.29 2.29 0 0 0-1.01-1.44A2.29 2.29 0 0 0 28.5 2L21 3.67l-10-2L2.5 3.56A2.29 2.29 0 0 0 .7 5.8v21.95a2.28 2.28 0 0 0 1.06 1.94A2.29 2.29 0 0 0 3.5 30L11 28.33l10 2 8.49-1.89a2.29 2.29 0 0 0 1.8-2.24V4.25a2.3 2.3 0 0 0-.06-.5zM12.5 25.98l-1.51-.3L9.5 26H9.5V4.66l1.51-.33 1.49.3v21.34zm10 1.36-1.51.33-1.49-.3V6.02l1.51.3L22.5 6h.01v21.34z"></path></svg>
    </button>
</div>
<!-- end Mapa -->

<!-- Footer Nav -->
<div class="fixed w-full py-3 border-t border-gray-300 bg-white flex justify-center items-center gap-8 bottom-0 z-50">
    <a href="#" class="text-red-500 text-xs font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-7 h-7 mx-auto">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        Explora
    </a>
    <a href="#" class="text-gray-500 text-xs font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-7 h-7 mx-auto">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
        </svg>
        Favoritos
    </a>
    <a href="#" class="text-gray-500 text-xs font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-7 h-7 mx-auto">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        Iniciar sesión
    </a>
</div>
<!-- end Footer Nav -->

<?php require 'components/footer.php'; ?>
</body>
</html>