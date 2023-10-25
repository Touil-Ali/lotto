<script setup>
import { ref } from 'vue';
import AppLayout from "@/Pages/layouts/AppLayout.vue";



</script>


<template>
    <app-layout>


<section class="bg-white pb-14  rounded-xl bg-[url('/img/home/home.png')]">
    <div class="py-8 px-4 mx-auto text-center   lg:py-16 z-10 relative">
        <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">Nouvelle</span> <span class="text-sm font-medium">Regardez ce qu'il y a de nouveau</span>
            <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </a>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">PARTAGEZ VOTRE ROUTE,ECONMISEZ ET EXPLOREZ</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">
            Bienvenue dans notre communauté de partage de voitures en pair-à-pair où vous pouvez
            facilement vous connecter avec d'autres. Que vous soyez propriétaire
             de voiture cherchant à Économiser sur les dépenses ou un explorateur
              à la recherche de nouveaux horizons,
              notre plateforme offre un moyen fluide d'accéder aux véhicules et de les partager.
              Rejoignez-nous dès aujourd'hui et faites l'expérience de la liberté des déplacements collaboratifs.




        </p>
            <div class="relative">
               <a href="/map">
                <button type="submit" class="mx-auto text-2xl    bottom-2.5 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none px-4 py-2 focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Open The Map</button>
            </a>
            </div>
    </div>
    <div class="bg-gradient-to-b from-blue-500 to-transparent  w-full h-full absolute top-14 left-0 z-0"></div>
</section>

<section class="mt-24 relative mx-auto">
    <h2 class="text-black text-4xl font-extrabold leading-10 ml-5">les mieux notées au Maroc</h2>
    <div class="w-80 h-12 left-[123px] top-[5px] bg-sky-400 bg-opacity-30 absolute  "></div>
<div class=" flex flex-wrap justify-center space-x-6">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-14 ">
            <a href="#">
                <img class="rounded-t-lg" src="https://via.placeholder.com/400x250" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">BMW</h5>
                </a>
                                    <div class="flex items-center mb-5 space-x-24">
                                        <div class="flex items-center order-1">
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 ">4.95</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full "></span>
                        <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline ">73 reviews</a>
                    </div>
                        <div class="order-last">
                            <p class="font-bold text-gray-900 ">250DH/Jour</p>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Louer maintenant
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-14 ">
            <a href="#">
                <img class="rounded-t-lg" src="https://via.placeholder.com/400x250" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">BMW</h5>
                </a>
                                    <div class="flex items-center mb-5 space-x-24">
                                        <div class="flex items-center order-1">
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 ">4.95</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full "></span>
                        <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline ">73 reviews</a>
                    </div>
                        <div class="order-last">
                            <p class="font-bold text-gray-900 ">250DH/Jour</p>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Louer maintenant
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-14 ">
            <a href="#">
                <img class="rounded-t-lg" src="https://via.placeholder.com/400x250" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">BMW</h5>
                </a>
                                    <div class="flex items-center mb-5 space-x-24">
                                        <div class="flex items-center order-1">
                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 ">4.95</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full "></span>
                        <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline ">73 reviews</a>
                    </div>
                        <div class="order-last">
                            <p class="font-bold text-gray-900 ">250DH/Jour</p>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Louer maintenant
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
</div>
<div class="text-center mt-8">
<button type="button" class="text-white  bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 ">Réserver une Voiture</button>
</div>
</section>
<section class="relative mt-24">
    <div class="w-full h-96 bg-white rounded-full shadow-lg  ">
        <div class="w-80 h-12 left-[123px] top-[5px] bg-sky-400 bg-opacity-30 absolute  "></div>
    <h2 class="text-black text-4xl font-extrabold leading-10 ml-5 absolute" >Louez votre voiture, gagnez de l'argent !</h2>
    <p class="ml-16 mt-24 md:mr-96 absolute">
        Vous possédez une voiture que vous n'utilisez pas pleinement ? Mettez-la à disposition et rentabilisez-la en la louant à d'autres personnes pour de courtes durées. Notre plateforme de partage de voitures pair-à-pair connecte les propriétaires de voitures avec des individus ayant besoin d'un moyen de transport temporaire. C'est une alternative pratique et économique aux services de location de voitures traditionnels.
    </p>
    <img class="left-96 absolute w-24 h-24" src="/img/icon/money.svg"/>
    <img class="left-32 top-52  absolute w-24 h-24" src="/img/icon/money.svg"/>
    <img class="left-[62%] top-32  absolute w-24 h-24" src="/img/icon/money.svg"/>

    <img class="w-96 h-96 hidden md:block  rounded-[80px] absolute left-[950px]" src="https://via.placeholder.com/390x585" />
    <button type="button" class="text-white absolute left-[220px] top-[290px]  md:left-[400px] md:top-[240px]  bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2 ">DÉPOSER UNE ANNONCE</button>

    </div>
    <img class="left-[80%]  absolute" src="/img/icon/money.svg"/>
</section>
<section class="mt-32 relative mx-auto">
    <h2 class="text-black text-4xl font-extrabold leading-10 ml-5">Pourquoi choisir notre plateforme de partage de voitures ?
</h2>
    <div class="w-80 h-12 left-[123px] top-[5px] bg-sky-400 bg-opacity-30 absolute  "></div>

    <div class="flex flex-wrap justify-center mt-12">
        <div class="mt-24 ml-12 order-1">
            <span class="text-black text-3xl font-semibold capitalize leading-10 tracking-wider">Gagnez de l'argent supplémentaire :</span>
            <p class="text-black text-xl  "> Votre voiture peut devenir une source de revenus lorsque vous ne l'utilisez pas.<br/> Louez-la à des personnes de confiance et <br/>générez un revenu supplémentaire sans effort supplémentaire.</p>
        </div>
        <div class="order-2">
        <img class="mr-5 w-96 h-96  " src="/img/home/1.svg"/>
        </div>
    </div>
    <div class="flex flex-wrap justify-center mt-12">
        <div class="mt-24 ml-12 md:order-2 sm:order-1">
            <span class="text-black text-3xl font-semibold capitalize leading-10 tracking-wider">Flexibilité :</span>
            <p class="text-black text-xl  ">Vous décidez quand votre voiture est disponible à la location et<br/> pour quelles périodes. Vous avez un contrôle total sur son utilisation.</p>
        </div>
        <div class="md:order-1 sm:order-2">
        <img class="mr-5 w-96 h-96  " src="/img/home/2.svg"/>
        </div>
    </div>
    <div class="flex flex-wrap justify-center mt-12">
        <div class="mt-24 ml-12 order-1">
            <span class="text-black text-3xl font-semibold capitalize leading-10 tracking-wider">Large choix de voitures :</span>
            <p class="text-black text-xl  ">Notre plateforme propose une variété de véhicules adaptés à <br/> tous les besoins, des voitures compactes économiques aux <br/>véhicules de luxe haut de gamme.</p>
        </div>
        <div class="order-2">
        <img class="mr-5 w-96 h-96  " src="/img/home/3.svg"/>
        </div>
    </div>
</section>
<section class="relative mt-24">
    <div class="flex flex-wrap justify-center space-x-5">
        <div class="order-1">
            <img class="w-96 h-96" src="/img/home/bg1.svg" />
            <div class="absolute top-5 ">
            <img class="w-80 h-40" src="/img/home/4.svg" />
            <a  href="" class="text-sky-400 text-4xl font-semibold leading-10">Réserver une voiture ></a>
            <p class="text-black text-xl font-semibold leading-relaxed">Dans la rue ou à travers le pays,trouvez<br> le véhicule  parfait pour votre prochaine<br> aventure.</p>
             </div>
        </div>
        <div class="order-2 mt-5">
            <img class="w-96 h-96" src="/img/home/bg-2.svg" />
            <div class="absolute md:top-5 top-[54%]">
            <a href="" class="text-sky-400 text-4xl font-semibold leading-10">Devenir hôte ></a>
            <p class="text-black text-xl font-semibold leading-relaxed">Accélérez votre esprit d'entreprise et commencez à <br> créer une petite entreprise d'autopartage sur Turo.</p>
            <img class="w-80 h-40 ml-16" src="/img/home/5.svg" />

        </div>
        </div>
    </div>
</section>
<section class=" mt-24 relative mx-8">
    <div class="text-black text-center text-4xl font-semibold  ">Questions fréquemment posées</div>
    <div class="grid pt-8 text-left mt-5 border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
          <div>
              <div class="mb-10">
                  <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 ">
                      <svg class="flex-shrink-0 mr-2 w-5 h-5 text-black " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                      Comment fonctionne la location de voiture entre particuliers ?
                  </h3>
                  <p class="text-gray-500 ">You will have access to download the full Figma project including all of the pages, the components, responsive pages, and also the icons, illustrations, and images included in the screens.</p>
              </div>
              <div class="mb-10">
                  <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 ">
                      <svg class="flex-shrink-0 mr-2 w-5 h-5 text-black " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                      Comment puis-je m'inscrire en tant que propriétaire de voiture ?
                  </h3>
                  <p class="text-gray-500 ">Once you have purchased either the design, code, or both packages, you will have access to all of the future updates based on the roadmap, free of charge.</p>
              </div>


          </div>
          <div>
              <div class="mb-10">
                  <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 ">
                      <svg class="flex-shrink-0 mr-2 w-5 h-5 text-black " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                      Comment se déroule le processus de paiement ?

                  </h3>
                  <p class="text-gray-500 dark:text-gray-400">The free updates that will be provided is based on the <a href="#" class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">roadmap</a> that we have laid out for this project. It is also possible that we will provide extra updates outside of the roadmap as well.</p>
              </div>
              <div class="mb-10">
                  <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 ">
                      <svg class="flex-shrink-0 mr-2 w-5 h-5 text-black " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                      Que se passe-t-il en cas d'incident ?
                  </h3>
                  <p class="text-gray-500 ">The <a href="#" class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">free version</a> of Windster includes a minimal style guidelines, component variants, and a dashboard page with the mobile version alongside it.</p>
                  <p class="text-gray-500 ">You can use this version for any purposes, because it is open-source under the MIT license.</p>
              </div>


          </div>
        </div>
</section>
    </app-layout>
</template>

<style>

</style>

