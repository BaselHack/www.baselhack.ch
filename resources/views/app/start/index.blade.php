@extends('app.layouts.default')
@section('content')
    <main>
        <div>
            <div>
                <div class="container relative py-32">
                    <div>
                        <h1 class="max-w-screen-xl mt-12 text-4xl leading-tight uppercase md:text-7xl">Register now</h1>
                        <h2 id="descryption-text" class="max-w-screen-xl mt-4 text-xl font-normal leading-tight md:text-4xl">
                            <span>28. / 29. October 2023</span><br>
                            <span>HDW, Pratteln</span>
                        </h2>
                    </div>

                    {{--
                        <div class="absolute inset-0">
                            <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.432/build/spline-viewer.js"></script>
                            <spline-viewer url="https://prod.spline.design/w6GdochUhBe9HGAq/scene.splinecode"></spline-viewer>
                        </div>
                    --}}
                </div>                
            </div>

            @include('app.components._cta')

            <div class="container my-24 text-left">
                <div class="py-8">
                    <div class="mb-14">
                        <h1 class="mb-1 text-4xl">Sponsors & Partners BaselHack 2023</h1>
                        <p class="text-lg text-neutral-400">Making BaselHack possible by their support</p>
                    </div>
                    <div class="grid grid-cols-1 gap-12 md:grid-cols-4">
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Main Sponsor</span>
                            <svg data-sponsor="endress-hauser" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 34">
                                <path fill="none" d="M-30.08-39.69h340.16V73.7H-30.08z"/>
                                <path fill="#fff" d="M.61 10.39h11.53V13H3.62v6.86h6.89v2.58H3.62v7.87h9v2.59H.61zM16.25 16.53h2.19l.42 2a7.15 7.15 0 0 1 5-2.45c2.35 0 3.95 1.2 3.95 4V32.9H25V21c0-1.86-.53-2.38-2-2.38a6.66 6.66 0 0 0-4 2V32.9h-2.75zM31.63 24.83c0-6.14 1.8-8.72 5.62-8.72a6.37 6.37 0 0 1 4.34 2V9.25h2.81V32.9h-2.18l-.46-1.7a6 6 0 0 1-4.54 2.12c-3.14 0-5.59-1.76-5.59-8.49zm10 4.31v-8.85A5.52 5.52 0 0 0 38 18.52c-2.32 0-3.33.85-3.33 6.11s.85 6.27 3.07 6.27a5.31 5.31 0 0 0 3.85-1.76zM49.1 16.53h2.19l.45 2.32a6 6 0 0 1 4.61-2.61 1.7 1.7 0 0 1 .59.09l-.33 3a3.14 3.14 0 0 0-1-.13 5.07 5.07 0 0 0-3.72 1.67v12H49.1zM58.59 24.7c0-6.21 2.55-8.59 6.41-8.59s6.1 2.22 6.1 8.13v1.11h-9.5c.06 4.48 1 5.59 3.75 5.59a5.69 5.69 0 0 0 3.86-1.54l1.54 2a7.77 7.77 0 0 1-5.46 1.89c-4.29.03-6.7-2.45-6.7-8.59zm3-1.47h6.5c0-3.76-.85-4.9-3.2-4.9-1.89 0-3.03.98-3.26 4.9zM73.29 31.56l1.18-2.09A7.59 7.59 0 0 0 78.85 31c2.22 0 2.9-.88 2.9-2.42 0-1.83-.85-2.19-3.46-2.91-2.29-.67-4.18-1.85-4.18-5.09 0-2.38 1.54-4.47 5.13-4.47a8.78 8.78 0 0 1 4.54 1.07l-1 2.22a6.92 6.92 0 0 0-3.46-.91c-1.77 0-2.58.62-2.58 2s.68 1.92 2.94 2.54c2.51.69 4.8 1.67 4.8 5.36 0 3.4-1.93 4.9-5.78 4.9a9.3 9.3 0 0 1-5.41-1.73zM86.65 31.56l1.18-2.09A7.59 7.59 0 0 0 92.21 31c2.22 0 2.91-.88 2.91-2.42 0-1.83-.85-2.19-3.47-2.91-2.28-.62-4.18-1.82-4.18-5.06 0-2.38 1.54-4.47 5.13-4.47a8.78 8.78 0 0 1 4.54 1.07l-1 2.22a6.92 6.92 0 0 0-3.46-.91c-1.77 0-2.58.62-2.58 2s.68 1.92 2.94 2.54c2.51.69 4.8 1.67 4.8 5.36 0 3.4-1.93 4.9-5.78 4.9a9.3 9.3 0 0 1-5.41-1.76zM108.08 24.57h-5.25v-2.45h5.25v-5.79h2.65v5.79H116v2.45h-5.23v5.78h-2.65zM122.39 10.39h3v9.21h8.1v-9.21h3V32.9h-3V22.25h-8.1V32.9h-3zM140.35 28.22c0-3.72 2.19-5.45 7.55-5.45h1.34V21.5c0-1.83-.23-2.94-2.36-2.94a10.14 10.14 0 0 0-4.76 1.5L141 17.9a11.44 11.44 0 0 1 6.14-1.79c3.2 0 4.87 1.43 4.87 4.93V32.9h-2.19l-.46-1.64a5.6 5.6 0 0 1-4.12 2.06c-3.09 0-4.89-1.73-4.89-5.1zm8.89.92v-4.35h-1c-4.12 0-4.9 1.05-4.9 3.43 0 2.16.68 2.88 2.28 2.88a5 5 0 0 0 3.62-1.96zM156.34 29.14V16.53h2.81v11.73c0 1.93.65 2.58 2.12 2.58a6.47 6.47 0 0 0 3.92-2V16.53H168V32.9h-2.18l-.43-2a6.84 6.84 0 0 1-4.87 2.45 3.86 3.86 0 0 1-4.18-4.21zM171.3 31.56l1.18-2.09a7.59 7.59 0 0 0 4.38 1.5c2.22 0 2.9-.88 2.9-2.42 0-1.83-.85-2.19-3.46-2.91-2.29-.62-4.18-1.82-4.18-5.06 0-2.38 1.54-4.47 5.13-4.47a8.78 8.78 0 0 1 4.54 1.07l-1 2.22a6.92 6.92 0 0 0-3.46-.91c-1.77 0-2.58.62-2.58 2s.68 1.92 2.94 2.54c2.51.69 4.8 1.67 4.8 5.36 0 3.4-1.93 4.9-5.78 4.9a9.3 9.3 0 0 1-5.41-1.73zM185.22 24.7c0-6.21 2.55-8.59 6.4-8.59s6.11 2.22 6.11 8.13v1.11h-9.5c.06 4.48 1 5.59 3.75 5.59a5.69 5.69 0 0 0 3.86-1.54l1.53 2a7.74 7.74 0 0 1-5.45 1.89c-4.28.03-6.7-2.45-6.7-8.59zm3-1.47h6.5c0-3.76-.85-4.9-3.2-4.9-1.86 0-3.03.98-3.26 4.9zM201.31 16.53h2.19l.46 2.32a6 6 0 0 1 4.61-2.61 1.64 1.64 0 0 1 .58.09l-.32 3a3.18 3.18 0 0 0-1-.13 5.09 5.09 0 0 0-3.73 1.67v12h-2.81z"/><path d="M277.16 1a4.07 4.07 0 0 0-1-.12h-46.04a3.82 3.82 0 0 0-3.69 2.83l-6.53 24.37a3.84 3.84 0 0 0 2.71 4.69 4.14 4.14 0 0 0 1 .13h46a3.83 3.83 0 0 0 3.69-2.84l6.53-24.35A3.83 3.83 0 0 0 277.16 1z" fill-rule="evenodd" fill="#fff"/>
                                <path fill="#000" d="M248.74 29.84h-18.62a.77.77 0 0 1-.76-.77V4.72a.77.77 0 0 1 .76-.77h18.62l-1.88 7h-9.21v2.42H244l-1.88 7h-4.44v2.42h11.09z"/>
                                <path fill="#000" d="M270.41 29.07a.77.77 0 0 1-.76.77h-7.52V20.4h-2.55v9.44h-8.29V20.4h-7l1.88-7h5.08V4h8.29v9.44h2.55V4h7.52a.77.77 0 0 1 .76.77z" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Main Sponsor</span>
                            <svg data-sponsor="bell" xmlns="http://www.w3.org/2000/svg" data-year="2019" viewBox="0 0 99 73" width="75" height="56">
                                <style>.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#fff}</style>
                                <path fill="#fff" fill-rule="evenodd" d="M99.2 36.6c0 20.1-22 36.5-49.6 36.5S0 56.8 0 36.6C0 16.5 22 .1 49.6.1s49.6 16.4 49.6 36.5" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M17.2 59.9c8.2-6.1 19.7-9.9 32.4-9.9s24.1 3.8 32.4 9.9c8-6 13-14.2 13-23.3C95 18.3 74.6 3.5 49.5 3.5S4.1 18.3 4.1 36.6c0 9.1 5 17.3 13.1 23.3" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M23.8 63.9c7.3 3.7 16.2 5.8 25.7 5.8 11.2 0 21.5-3 29.4-7.9-8.6-5.9-21.2-8.6-34.5-6.2-7.8 1.4-14.9 4.4-20.6 8.3" clip-rule="evenodd"></path>
                                <path d="M47.1 32.3c0-2.2.9-3.5 2.7-3.5 1.6 0 2.7 1.4 2.9 2.5.2 1.5-2.5 3.1-4.6 4.5-.8-1.1-1-2.2-1-3.5zm6.9 7.9c-2-.5-3.7-1.4-5-3l3.8-2.6c4-2.6 5.5-4.5 5.5-6.2 0-2-2.2-3.8-4.7-3.8-2.1 0-4.8 1.1-7.6 3.9-2.2 2.3-3.3 4.7-3.3 7.5 0 2 .8 4 2.3 5.6 1.7 1.9 4.7 3.3 6.9 3.1l6.8-4.7c-.1.2-2.6.8-4.7.2zm21.1-26S69 16.4 69 20.6v29l6.1 1.7c.1 0 0-37.1 0-37.1m-15 10.6V47l6 1.6V18.8c-.1-.1-6 2.3-6 6m-30.2 21V32.3s5.3.7 5.4 6.5c0 6.2-5.4 7-5.4 7zm.1-26.2s4.6 1.7 4.7 4.9C34.8 28.9 30 30 30 30V19.6zM33.6 31s6.8-1.9 6.6-6.5c-.1-4-6.2-6.8-16.3-10.2v37.1s6.1-1.7 8.5-2.6c3.5-1.2 9.1-2.6 9.1-9.5 0-6.2-7.9-8.3-7.9-8.3z" class="st1"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Main Sponsor</span>
                            <svg data-sponsor="pax" class="object-contain max-h-12 max-w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 454.099 152.662">
                                <path d="M313.288 144.806l44.794-58.06-44.365-57.495h43.368l25.82 34.954 26.11-34.954h38.802L403.309 86.46l45.79 58.347h-44.936l-25.391-33.952-25.968 33.952h-39.516zm-43.082-35.092V92.31c-4.992.71-9.416 1.425-22.111 3.566-13.41 2.283-17.835 7.418-17.835 13.84 0 7.131 3.995 12.266 14.269 12.266 7.704 0 18.402-5.278 25.677-12.267m4.99 35.092l-2.712-11.842c-12.266 9.988-23.965 14.698-39.368 14.698-22.974 0-39.092-13.124-39.092-34.382 0-21.543 14.55-33.528 43.94-38.09 16.69-2.57 25.11-3.853 31.383-4.563V66.77c0-10.412-5.277-15.122-17.114-15.122-13.13 0-17.835 5.282-18.407 14.126h-34.81c2.569-29.529 24.966-39.373 55.782-39.373 37.518 0 50.786 16.118 50.786 47.787v39.092c0 12.839.286 18.545 3.137 31.526h-33.524zM125.69 73.478c17.978 0 24.251-7.418 24.251-19.975 0-12.553-6.273-19.97-24.251-19.97h-18.83v39.945h18.83zm-56.207 71.328V5h59.344c41.233 0 59.348 20.256 59.348 48.503 0 28.251-18.115 48.507-59.348 48.507h-21.968v42.796H69.482z" fill="#fff"/>
                                <path d="M5 104.29h39.373v40.517H5v-40.518z" fill="#fff"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Gold Sponsor</span>
                            [certifever]
                        </div>
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Silver Sponsor</span>
                            [silver sponsor?]
                        </div>
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Partner</span>
                            [demo partner?]
                        </div>
                        <div class="flex flex-col items-start justify-start gap-4 p-4">
                            <span class="self-start px-1 text-xs text-black uppercase bg-white">Location Sponsor</span>
                            <svg class="w-56 h-12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Gruppe_2" data-name="Gruppe 2" width="723.502" height="299.258" viewBox="0 0 723.502 299.258">
                                <g>
                                <path id="Pfad_1" data-name="Pfad 1" d="M593.281,1.065V3.708c47.282,8.93-4.3,107.817-16.908,167.653L520.815,1.065h-3.624L468.88,168.041c-2.319-6.749-23.072-66.369-37.174-106.383l-.008,0C407.68-12.4,318.093.824,241.275,1.056v.01H241.1V3.708c17.211,0,19.022,10.04,19.022,32.082v65.152H143.871V35.79c0-22.042,1.812-32.082,19.023-32.082V1.066H98.579V3.708c17.211,0,18.721,10.04,19.023,32.082V177.7c-.3,22.042-1.812,32.082-19.023,32.082v2.641h64.315v-2.641c-17.211,0-19.023-10.04-19.023-32.082V104.717H260.119V177.7c0,21.275-1.692,31.365-17.285,32.043q-.758.028-1.559.029v.007c-.061,0-.118,0-.178,0v2.641h2.086c77.974.4,168.53,13.479,189.981-65.339l21.223,65.339h4.983l48.915-167.88,54.2,167.88h5.284s39.553-135.271,48.311-163.05C624.532,22.5,638.571,7.331,657.9,3.708V1.065ZM305.588,209.775c-17.205-.452-19.022-11.173-19.022-33.215V36.913c-.067-1.252-.108-2.441-.136-3.6A109.452,109.452,0,0,1,287.4,19c2.418-11.776,9.1-14.8,18.88-15.413,0,0,3.181-.305,7.216-.271,5.2.042,15.342.381,15.342.381,39.949.841,80.619,22.419,80.619,103.038-1.8,94.941-47.988,104.506-103.869,103.039" fill="#fff"/>
                                <path id="Pfad_2" data-name="Pfad 2" d="M25.326,298.609V279.061H2.43v19.548H0V259.188H2.43V276.9h22.9V259.188h2.431v39.421Z" fill="#fff"/>
                                <path id="Pfad_3" data-name="Pfad 3" d="M71.582,298.609l-5.4-15.12H51.6l-5.4,15.12H43.61l14.634-40.068h1.35l14.58,40.068Zm-12.69-35.587-6.534,18.307H65.426Z" fill="#fff"/>
                                <path id="Pfad_4" data-name="Pfad 4" d="M102.464,299.258c-7.831,0-14.04-5.94-14.04-14.959v-25.11h2.43V284.3c0,7.236,5.183,12.69,11.61,12.69s11.664-5.454,11.664-12.69v-25.11h2.43V284.3c0,9.019-6.264,14.959-14.094,14.959" fill="#fff"/>
                                <path id="Pfad_5" data-name="Pfad 5" d="M142.866,299.258a15.3,15.3,0,0,1-10.368-4.1l1.566-1.728a13.149,13.149,0,0,0,8.8,3.563c4.536,0,8.532-3.078,8.532-7.668,0-5.616-4.59-7.938-9.126-10.314-4.643-2.43-9.234-4.968-9.234-11.016,0-5.778,4.591-9.45,9.828-9.45,4.051,0,7.236,1.134,9.99,4.266l-1.836,1.566c-2.429-2.808-4.805-3.564-8.154-3.564a6.967,6.967,0,0,0-7.29,7.182c0,4.914,4.267,7.02,8.694,9.342,4.752,2.485,9.666,5.185,9.666,11.88,0,5.887-5.345,10.045-11.07,10.045" fill="#fff"/>
                                <path id="Pfad_6" data-name="Pfad 6" d="M201.779,298.61h-8.1V259.189h8.1c11.34,0,20.466,6.7,20.466,19.333,0,12.582-9.018,20.088-20.466,20.088m.648-37.261h-6.318v35.1h6.318c9.774,0,17.28-7.128,17.28-17.928s-7.506-17.173-17.28-17.173" fill="#fff"/>
                                <path id="Pfad_7" data-name="Pfad 7" d="M239.585,298.609V259.188h19.926v2.16h-17.5v15.391h15.768v2.16H242.015v17.55h18.522v2.16Z" fill="#fff"/>
                                <path id="Pfad_8" data-name="Pfad 8" d="M296.219,298.61l-16.9-18.9v18.9h-2.43V259.189h9.666c6.7,0,12.474,4.051,12.474,10.908,0,7.236-5.994,11.286-13.068,11.286h-1.89l15.282,17.227Zm-9.666-37.261h-7.236v17.874h6.642c5.562,0,10.531-2.754,10.531-9.126,0-5.939-4.7-8.748-9.937-8.748" fill="#fff"/>
                                <path id="Pfad_9" data-name="Pfad 9" d="M371.6,298.609h-1.836l-9.127-32.725a7.4,7.4,0,0,1-.323-1.566l-.324,1.513-9.181,32.778h-1.836l-12.258-39.421h2.592l10.152,33.265c.162.594.432,1.458.432,1.458s.162-.81.324-1.35l9.181-33.373h1.727l9.289,33.373c.162.54.324,1.35.324,1.35s.269-.864.431-1.458l9.883-33.265h2.538Z" fill="#fff"/>
                                <rect id="Rechteck_1" data-name="Rechteck 1" width="2.43" height="39.421" transform="translate(399.5 259.188)" fill="#fff"/>
                                <path id="Pfad_10" data-name="Pfad 10" d="M440.517,298.61l-16.9-18.9v18.9h-2.43V259.189h9.666c6.7,0,12.474,4.051,12.474,10.908,0,7.236-5.994,11.286-13.068,11.286h-1.89l15.282,17.227Zm-9.666-37.261h-7.236v17.874h6.642c5.562,0,10.531-2.754,10.531-9.126,0-5.939-4.7-8.748-9.937-8.748" fill="#fff"/>
                                <path id="Pfad_11" data-name="Pfad 11" d="M469.045,261.349V298.61h-2.43V261.349H456.571v-2.16h22.464v2.16Z" fill="#fff"/>
                                <path id="Pfad_12" data-name="Pfad 12" d="M502.994,299.258a15.3,15.3,0,0,1-10.368-4.1l1.566-1.728a13.149,13.149,0,0,0,8.8,3.563c4.536,0,8.532-3.078,8.532-7.668,0-5.616-4.59-7.938-9.126-10.314-4.643-2.43-9.234-4.968-9.234-11.016,0-5.778,4.591-9.45,9.828-9.45,4.051,0,7.236,1.134,9.99,4.266l-1.836,1.566c-2.429-2.808-4.805-3.564-8.154-3.564a6.967,6.967,0,0,0-7.29,7.182c0,4.914,4.267,7.02,8.694,9.342,4.752,2.485,9.666,5.185,9.666,11.88,0,5.887-5.345,10.045-11.07,10.045" fill="#fff"/>
                                <path id="Pfad_13" data-name="Pfad 13" d="M547.663,299.258c-10.584,0-19.062-8.8-19.062-20.358,0-10.746,8.316-20.359,19.062-20.359a17.835,17.835,0,0,1,14.04,6.21l-1.727,1.566a15.813,15.813,0,0,0-12.367-5.508c-9.666,0-16.47,8.532-16.47,17.928,0,10.314,7.128,18.252,16.632,18.252,5.995,0,9.558-2.429,13.014-6.156l1.674,1.458a18.984,18.984,0,0,1-14.8,6.967" fill="#fff"/>
                                <path id="Pfad_14" data-name="Pfad 14" d="M603.941,298.609V279.061h-22.9v19.548h-2.43V259.188h2.43V276.9h22.9V259.188h2.43v39.421Z" fill="#fff"/>
                                <path id="Pfad_15" data-name="Pfad 15" d="M650.2,298.609l-5.4-15.12h-14.58l-5.4,15.12h-2.592l14.634-40.068h1.35l14.58,40.068Zm-12.69-35.587-6.534,18.307h13.068Z" fill="#fff"/>
                                <path id="Pfad_16" data-name="Pfad 16" d="M671.073,261.349v15.606H684.79v2.161H671.073V298.61h-2.43V259.189h17.605v2.16Z" fill="#fff"/>
                                <path id="Pfad_17" data-name="Pfad 17" d="M713.511,261.349V298.61h-2.43V261.349H701.037v-2.16H723.5v2.16Z" fill="#fff"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 
            <div class="py-16">
                <div class="px-6 mx-auto max-w-7xl lg:px-8">
                    <h2 class="text-lg font-semibold leading-8 text-center text-white">Sponsoring & Partner of BaselHack 2023</h2>
                    <div class="grid items-center max-w-lg grid-cols-4 mx-auto mt-10 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                        <svg data-sponsor="endress-hauser" class="object-contain w-full col-span-2 max-h-12 lg:col-span-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 34">
                            <path fill="none" d="M-30.08-39.69h340.16V73.7H-30.08z"/>
                            <path fill="#fff" d="M.61 10.39h11.53V13H3.62v6.86h6.89v2.58H3.62v7.87h9v2.59H.61zM16.25 16.53h2.19l.42 2a7.15 7.15 0 0 1 5-2.45c2.35 0 3.95 1.2 3.95 4V32.9H25V21c0-1.86-.53-2.38-2-2.38a6.66 6.66 0 0 0-4 2V32.9h-2.75zM31.63 24.83c0-6.14 1.8-8.72 5.62-8.72a6.37 6.37 0 0 1 4.34 2V9.25h2.81V32.9h-2.18l-.46-1.7a6 6 0 0 1-4.54 2.12c-3.14 0-5.59-1.76-5.59-8.49zm10 4.31v-8.85A5.52 5.52 0 0 0 38 18.52c-2.32 0-3.33.85-3.33 6.11s.85 6.27 3.07 6.27a5.31 5.31 0 0 0 3.85-1.76zM49.1 16.53h2.19l.45 2.32a6 6 0 0 1 4.61-2.61 1.7 1.7 0 0 1 .59.09l-.33 3a3.14 3.14 0 0 0-1-.13 5.07 5.07 0 0 0-3.72 1.67v12H49.1zM58.59 24.7c0-6.21 2.55-8.59 6.41-8.59s6.1 2.22 6.1 8.13v1.11h-9.5c.06 4.48 1 5.59 3.75 5.59a5.69 5.69 0 0 0 3.86-1.54l1.54 2a7.77 7.77 0 0 1-5.46 1.89c-4.29.03-6.7-2.45-6.7-8.59zm3-1.47h6.5c0-3.76-.85-4.9-3.2-4.9-1.89 0-3.03.98-3.26 4.9zM73.29 31.56l1.18-2.09A7.59 7.59 0 0 0 78.85 31c2.22 0 2.9-.88 2.9-2.42 0-1.83-.85-2.19-3.46-2.91-2.29-.67-4.18-1.85-4.18-5.09 0-2.38 1.54-4.47 5.13-4.47a8.78 8.78 0 0 1 4.54 1.07l-1 2.22a6.92 6.92 0 0 0-3.46-.91c-1.77 0-2.58.62-2.58 2s.68 1.92 2.94 2.54c2.51.69 4.8 1.67 4.8 5.36 0 3.4-1.93 4.9-5.78 4.9a9.3 9.3 0 0 1-5.41-1.73zM86.65 31.56l1.18-2.09A7.59 7.59 0 0 0 92.21 31c2.22 0 2.91-.88 2.91-2.42 0-1.83-.85-2.19-3.47-2.91-2.28-.62-4.18-1.82-4.18-5.06 0-2.38 1.54-4.47 5.13-4.47a8.78 8.78 0 0 1 4.54 1.07l-1 2.22a6.92 6.92 0 0 0-3.46-.91c-1.77 0-2.58.62-2.58 2s.68 1.92 2.94 2.54c2.51.69 4.8 1.67 4.8 5.36 0 3.4-1.93 4.9-5.78 4.9a9.3 9.3 0 0 1-5.41-1.76zM108.08 24.57h-5.25v-2.45h5.25v-5.79h2.65v5.79H116v2.45h-5.23v5.78h-2.65zM122.39 10.39h3v9.21h8.1v-9.21h3V32.9h-3V22.25h-8.1V32.9h-3zM140.35 28.22c0-3.72 2.19-5.45 7.55-5.45h1.34V21.5c0-1.83-.23-2.94-2.36-2.94a10.14 10.14 0 0 0-4.76 1.5L141 17.9a11.44 11.44 0 0 1 6.14-1.79c3.2 0 4.87 1.43 4.87 4.93V32.9h-2.19l-.46-1.64a5.6 5.6 0 0 1-4.12 2.06c-3.09 0-4.89-1.73-4.89-5.1zm8.89.92v-4.35h-1c-4.12 0-4.9 1.05-4.9 3.43 0 2.16.68 2.88 2.28 2.88a5 5 0 0 0 3.62-1.96zM156.34 29.14V16.53h2.81v11.73c0 1.93.65 2.58 2.12 2.58a6.47 6.47 0 0 0 3.92-2V16.53H168V32.9h-2.18l-.43-2a6.84 6.84 0 0 1-4.87 2.45 3.86 3.86 0 0 1-4.18-4.21zM171.3 31.56l1.18-2.09a7.59 7.59 0 0 0 4.38 1.5c2.22 0 2.9-.88 2.9-2.42 0-1.83-.85-2.19-3.46-2.91-2.29-.62-4.18-1.82-4.18-5.06 0-2.38 1.54-4.47 5.13-4.47a8.78 8.78 0 0 1 4.54 1.07l-1 2.22a6.92 6.92 0 0 0-3.46-.91c-1.77 0-2.58.62-2.58 2s.68 1.92 2.94 2.54c2.51.69 4.8 1.67 4.8 5.36 0 3.4-1.93 4.9-5.78 4.9a9.3 9.3 0 0 1-5.41-1.73zM185.22 24.7c0-6.21 2.55-8.59 6.4-8.59s6.11 2.22 6.11 8.13v1.11h-9.5c.06 4.48 1 5.59 3.75 5.59a5.69 5.69 0 0 0 3.86-1.54l1.53 2a7.74 7.74 0 0 1-5.45 1.89c-4.28.03-6.7-2.45-6.7-8.59zm3-1.47h6.5c0-3.76-.85-4.9-3.2-4.9-1.86 0-3.03.98-3.26 4.9zM201.31 16.53h2.19l.46 2.32a6 6 0 0 1 4.61-2.61 1.64 1.64 0 0 1 .58.09l-.32 3a3.18 3.18 0 0 0-1-.13 5.09 5.09 0 0 0-3.73 1.67v12h-2.81z"/><path d="M277.16 1a4.07 4.07 0 0 0-1-.12h-46.04a3.82 3.82 0 0 0-3.69 2.83l-6.53 24.37a3.84 3.84 0 0 0 2.71 4.69 4.14 4.14 0 0 0 1 .13h46a3.83 3.83 0 0 0 3.69-2.84l6.53-24.35A3.83 3.83 0 0 0 277.16 1z" fill-rule="evenodd" fill="#fff"/>
                            <path fill="#000" d="M248.74 29.84h-18.62a.77.77 0 0 1-.76-.77V4.72a.77.77 0 0 1 .76-.77h18.62l-1.88 7h-9.21v2.42H244l-1.88 7h-4.44v2.42h11.09z"/>
                            <path fill="#000" d="M270.41 29.07a.77.77 0 0 1-.76.77h-7.52V20.4h-2.55v9.44h-8.29V20.4h-7l1.88-7h5.08V4h8.29v9.44h2.55V4h7.52a.77.77 0 0 1 .76.77z" />
                        </svg>
                        <svg data-sponsor="bell" class="object-contain w-full col-span-2 max-h-12 lg:col-span-1" xmlns="http://www.w3.org/2000/svg" data-year="2019" viewBox="0 0 99 73" width="75" height="56">
                            <style>.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#fff}</style>
                            <path fill="#fff" fill-rule="evenodd" d="M99.2 36.6c0 20.1-22 36.5-49.6 36.5S0 56.8 0 36.6C0 16.5 22 .1 49.6.1s49.6 16.4 49.6 36.5" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M17.2 59.9c8.2-6.1 19.7-9.9 32.4-9.9s24.1 3.8 32.4 9.9c8-6 13-14.2 13-23.3C95 18.3 74.6 3.5 49.5 3.5S4.1 18.3 4.1 36.6c0 9.1 5 17.3 13.1 23.3" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M23.8 63.9c7.3 3.7 16.2 5.8 25.7 5.8 11.2 0 21.5-3 29.4-7.9-8.6-5.9-21.2-8.6-34.5-6.2-7.8 1.4-14.9 4.4-20.6 8.3" clip-rule="evenodd"></path>
                            <path d="M47.1 32.3c0-2.2.9-3.5 2.7-3.5 1.6 0 2.7 1.4 2.9 2.5.2 1.5-2.5 3.1-4.6 4.5-.8-1.1-1-2.2-1-3.5zm6.9 7.9c-2-.5-3.7-1.4-5-3l3.8-2.6c4-2.6 5.5-4.5 5.5-6.2 0-2-2.2-3.8-4.7-3.8-2.1 0-4.8 1.1-7.6 3.9-2.2 2.3-3.3 4.7-3.3 7.5 0 2 .8 4 2.3 5.6 1.7 1.9 4.7 3.3 6.9 3.1l6.8-4.7c-.1.2-2.6.8-4.7.2zm21.1-26S69 16.4 69 20.6v29l6.1 1.7c.1 0 0-37.1 0-37.1m-15 10.6V47l6 1.6V18.8c-.1-.1-6 2.3-6 6m-30.2 21V32.3s5.3.7 5.4 6.5c0 6.2-5.4 7-5.4 7zm.1-26.2s4.6 1.7 4.7 4.9C34.8 28.9 30 30 30 30V19.6zM33.6 31s6.8-1.9 6.6-6.5c-.1-4-6.2-6.8-16.3-10.2v37.1s6.1-1.7 8.5-2.6c3.5-1.2 9.1-2.6 9.1-9.5 0-6.2-7.9-8.3-7.9-8.3z" class="st1"></path>
                        </svg>
                        <svg data-sponsor="pax" class="object-contain w-full col-span-2 max-h-12 lg:col-span-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 454.099 152.662">
                            <path d="M313.288 144.806l44.794-58.06-44.365-57.495h43.368l25.82 34.954 26.11-34.954h38.802L403.309 86.46l45.79 58.347h-44.936l-25.391-33.952-25.968 33.952h-39.516zm-43.082-35.092V92.31c-4.992.71-9.416 1.425-22.111 3.566-13.41 2.283-17.835 7.418-17.835 13.84 0 7.131 3.995 12.266 14.269 12.266 7.704 0 18.402-5.278 25.677-12.267m4.99 35.092l-2.712-11.842c-12.266 9.988-23.965 14.698-39.368 14.698-22.974 0-39.092-13.124-39.092-34.382 0-21.543 14.55-33.528 43.94-38.09 16.69-2.57 25.11-3.853 31.383-4.563V66.77c0-10.412-5.277-15.122-17.114-15.122-13.13 0-17.835 5.282-18.407 14.126h-34.81c2.569-29.529 24.966-39.373 55.782-39.373 37.518 0 50.786 16.118 50.786 47.787v39.092c0 12.839.286 18.545 3.137 31.526h-33.524zM125.69 73.478c17.978 0 24.251-7.418 24.251-19.975 0-12.553-6.273-19.97-24.251-19.97h-18.83v39.945h18.83zm-56.207 71.328V5h59.344c41.233 0 59.348 20.256 59.348 48.503 0 28.251-18.115 48.507-59.348 48.507h-21.968v42.796H69.482z" fill="#fff"/>
                            <path d="M5 104.29h39.373v40.517H5v-40.518z" fill="#fff"/>
                        </svg>
                    </div>
                </div>
            </div>
            --}}

            @include('app.components._benefits')

            <div class="p-8 my-8 lg:my-20">
                <div class="container">
                    <div class="flex items-center w-full h-6 max-w-xs gap-5 mx-auto mb-12 lg:mb-24" role="separator">
                        <div class="flex-1 bg-white h-0.5"></div>
                        <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                        <div class="flex-1 bg-white h-0.5"></div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 lg:gap-24 lg:grid-cols-2">
                        <div class="mb-8 lg:mb-0">
                            <h1 class="max-w-3xl mb-6 text-2xl leading-tight md:text-4xl">We connect people, take fun seriously and grow open innovation</h1>
                            <p class="max-w-3xl text-lg leading-normal">
                                BaselHack is the hackathon for Basel, Northwestern Switzerland and bordering Alsace and
                                Südbaden. Young and young-at-heart developers, technology fanatics, designers and others meet for a
                                weekend tinkering and developing various ideas. Join us for a weekend full of fun, challenges, for
                                meeting new friends and to enjoy free drinks & foods.
                            </p>
                        </div>
                        <div class="flex items-center justify-center">
                            <img class="rounded-md object-fit" src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=650&h=450&q=80" alt="BaselHack - Join uf for a weekend full of fun" />
                        </div>
                    </div>
                </div>
            </div>

            @include('app.components._countdown')

            @include('app.components._sponsors')

            {{-- @include('app.components._image-text') --}}

            {{--<div class="flex flex-wrap justify-center gap-6 mt-6 md:mt-12">
                <a target="_blank"
                    href="https://eventfrog.ch/en/p/wissenschaft-und-technik/baselhack-2022-6932206412039604221.html#ticket-container"
                    class="inline-block px-6 py-2 m-2 text-sm font-bold text-black border rounded-md border-yellow md:text-base bg-yellow hover:bg-yellow-accent">
                    Register Ticket</a>
                <a href="{{ asset('files/baselhack-2022.ics') }}"
                    class="inline-block px-6 py-2 m-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md md:text-base hover:bg-gray-400">
                    Add to Calendar</a>
                <a href="#more" class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black">Learn More</a>
                <a href="{{ route('posts.index') }}" class="focus:bg-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr hover:from-yellow-500 transition-colors hover:to-yellow-500 from-[#efe73e] to-[#50b1bf] text-black">Latest News</a>
            </div>--}}
        </div>

        {{-- @include('app.components._timetable') --}}

        <div class="p-8 my-32">
            <div x-data="{ active: 1 }" class="mx-auto max-w-6xl w-full min-h-[16rem]">
                <div x-data="{ id: 1, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="border-b shadow border-neutral-600">
                    <h2 class="py-4 rounded">
                        <button :class="expanded ? 'text-yellow-500' : ''" x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full py-2 text-xl font-bold group">
                            <div class="flex items-center gap-4">
                                <svg :class="expanded ? 'text-yellow-500' : ''" class="w-6 transition duration-200 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                                <span class="transition duration-200 group-hover:text-yellow-500">What is a hackathon?</span>
                            </div>
                            <div x-cloak x-show="expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <div x-cloak x-show="!expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                                </svg>
                            </div>
                        </button>
                    </h2>
                    <div x-show="expanded" x-collapse x-cloak>
                        <div class="pb-6">A hackathon is a multi-day event (usually 48 hours) where people meet to solve challenges together. The problems are presented by companies or institutions at the start of the event. You have the chance to spend a weekend with a team developing ideas for a real problem and turning them into a working prototype.</div>
                    </div>
                </div>
                <div x-data="{ id: 2, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="border-b shadow border-neutral-600">
                    <h2 class="py-4 rounded">
                        <button :class="expanded ? 'text-yellow-500' : ''" x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full py-2 text-xl font-bold group">
                            <div class="flex items-center gap-4">
                                <svg :class="expanded ? 'text-yellow-500' : ''" class="w-6 transition duration-200 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                                <span class="transition duration-200 group-hover:text-yellow-500">Who can participate at BaselHack - do I need coding skills?</span>
                            </div>
                            <span x-cloak x-show="expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                            <span x-cloak x-show="!expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div x-show="expanded" x-collapse x-cloak>
                        <div class="pb-6">Anyone interested in technology – including but not limited to developers, technology fanatics, and designers – can participate. Although programming can be a part of many projects, non-programmers are also very welcome. We appreciate an interdisciplinary audience.</div>
                    </div>
                </div>
                <div x-data="{ id: 3, get expanded() { return this.active === this.id }, set expanded(value) { this.active = value ? this.id : null } }" role="region" class="border-b shadow border-neutral-600">
                    <h2 class="py-4 rounded">
                        <button :class="expanded ? 'text-yellow-500' : ''" x-on:click="expanded = !expanded" :aria-expanded="expanded" class="flex items-center justify-between w-full py-2 text-xl font-bold group">
                            <div class="flex items-center gap-4">
                                <svg :class="expanded ? 'text-yellow-500' : ''" class="w-6 transition duration-200 text-neutral-400 group-hover:text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                                <span class="transition duration-200 group-hover:text-yellow-500">Why should I participate in a hackathon?</span>
                            </div>
                            <span x-cloak x-show="expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                            <span x-cloak x-show="!expanded" aria-hidden="true" class="ml-4 group-hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div x-show="expanded" x-collapse x-cloak>
                        <div class="pb-6">Our hackathon is a great opportunity to network with like-minded people and meet exciting companies. You'll have the possibility to experiment, being close to new technologies, experience collaborative teamwork, and benefit from top mentoring. You also have the chance to win attractive award prize money!</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
