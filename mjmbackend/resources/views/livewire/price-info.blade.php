

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- andere head tags -->
        @livewireStyles
    </head>

    <body>
    <div class="z-20 mt-[4rem] px-12 py-8 border border-companyBorderGrey rounded-1rem flex flex-col md:flex-row gap-8 bg-companyLightGrey shadow-gray-900/20">


        <div
            class="ring-companyBorderGrey ring-[1px] flex flex-col bg-clip-border rounded-xl bg-darkGrey40 border-gray-300 text-white shadow-gray-900/20 shadow-md w-full max-w-[20rem] p-8">
            <div
                class="relative pb-8 m-0 mb-8 overflow-hidden text-center text-gray-700 bg-transparent border-b rounded-none shadow-none bg-clip-border border-white/10">
                <p class="block text-sm antialiased font-normal leading-normal text-white uppercase">
                    Basisplan
                </p>
                <h1 class="flex justify-center gap-1 mt-6 font-sans antialiased font-normal tracking-normal text-white text-7xl">
                    <span class="mt-2 text-4xl">€</span>49
                    <!-- <span class="self-end text-4xl">/mo</span> -->
                </h1>
            </div>
            <div class="p-0">
                <ul class="flex flex-col gap-4">
                    <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
                        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                            desc1
                        </p>
                    </li>
                    <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
                        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                            desc2
                        </p>
                    </li>
                    <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
                        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                            desc3
                        </p>
                    </li>
                    <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
                        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                            desc4
                        </p>
                    </li>
                    <li class="flex items-center gap-4">
        <span class="p-1 border rounded-full border-white/20 bg-white/20"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
          </svg></span>
                        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-inherit">
                            desc5
                        </p>
                    </li>
                </ul>
            </div>
            <div class="p-0 mt-12">
                <button
                    class="btn hover:opacity-80 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm py-3.5 px-7 rounded-lg bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none block w-full hover:scale-[1.02] focus:scale-[1.02] active:scale-100"
                    type="button">
                    Anzeige Schalten
                </button>
            </div>

    </div>



    </div>
    @livewireScripts
    </body>

    <style>
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25;
        }
        .text-4xl {
            font-size: 2.25rem;
            line-height: 1.25;
        }
        .text-7xl {
            font-size: 4rem;
            line-height: 1;
        }

        .bg-companyDarkGrey {
            background-color: #181818;
        }
        .bg-companyLightGrey {
            background-color: #282727;
        }

        .darkGrey100 {
            color: #252323;
        }

        .darkGrey60 {
            color: rgba(37, 35, 35, 0.6);
        }

        .darkGrey40 {
            color: rgba(37, 35, 35, 0.4);
        }

        .customBlue {
            color: #4A7D91;
        }

        .customBlueDarker {
            color: #6ccff6;
        }

        .almostBlack {
            color: #0f0f0f;
        }

        .almostWhite {
            color: #F7F7F7;
        }

        .customBlue10 {
            color: #F0FAFE;
        }

        .customBlue20 {
            color: #E2F5FD;
        }

        .companyDarkGrey {
            color: #181818;
        }

        .companyLightGrey {
            color: #282727;
        }

        .companyBorderGrey {
            color: #525151;
        }
        .rounded-1rem {
            border-radius: 1rem;
        }
    </style>
