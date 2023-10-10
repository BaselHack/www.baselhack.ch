{{--<style>
    .card-shine:before {
        --size: 0;
        left: var(--x);
        top: var(--y);
        width: var(--size);
        height: var(--size);
        background: radial-gradient(circle closest-side, #fff73e, transparent);
        transform: translate(-50%, -50%);
        transition: width 0.15s ease, height 0.15s ease;
    }
    .card-shine:hover::before {
        --size: 400px;
    }
</style>
--}}
<div class="container py-8">
    <div class="cta-element my-8 text-black md:my-16 bg-[#efe73e] card-shine appearance-none relative overflow-hidden p-8 md:p-12 before:absolute before:content-[''] rounded-sm group outline-none">
        <div class="flex flex-col items-start w-full">
            <h1 class="relative mb-4 text-xl leading-tight pointer-events-none md:text-4xl">
                <strong>Participate in BaselHack 2023 in October?</strong>
            </h1>
            <h4 class="relative mb-3 font-normal pointer-events-none">Get your ticket in exchange for a deposit of 20 CHF on eventfrog.ch</h4>
            <a class="relative flex self-center gap-4 px-6 py-3 mt-6 mb-4 text-yellow-400 bg-black rounded-lg lg:self-start focus:outline outline-offset-2 outline-2 outline-black w-fit" href="https://eventfrog.ch/de/p/wissenschaft-und-technik/baselhack-2023-7059415336391468199.html" target="_blank">
                <span>Grab your ticket</span>
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
            </a>
            <div class="relative block w-full gap-12 pt-6 mt-8 border-t border-black md:flex md:mt-8 grid-col-1 md:grid-cols-2">
                <div class="flex items-start justify-start gap-4 md:items-center">
                    <svg class="w-5 h-5 mt-1 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                    </svg>
                    <a class="underline text-start" href="https://www.letsboot.ch/basel-boot-2023" target="_blank">Bonus: Register for BaselBoot course by letsboot.ch for 90.-- CHF</a>
                </div>
                <div class="flex flex-col items-center justify-end flex-1 mt-6 md:items-end md:mt-0">
                    <small class="inline-block mb-2">sponsored by:</small>
                    <a href="https://flow.swiss" target="_blank">
                        <svg width="138px" height="36px" viewBox="0 0 158 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#000" d="M0 1.495V35.07h4.695V20.084h15.227v-4.03H4.695V5.62h16.271V1.495zM36.58 30.897h14.99v4.173H31.883V1.495h4.696zM88.373 18.235c0-1.833-.301-3.564-.902-5.193-.6-1.627-1.454-3.058-2.56-4.29a11.978 11.978 0 0 0-4.01-2.918c-1.565-.71-3.328-1.066-5.288-1.066-1.93 0-3.676.355-5.241 1.066-1.565.712-2.894 1.684-3.985 2.917-1.09 1.233-1.938 2.664-2.538 4.291-.6 1.63-.9 3.36-.9 5.193 0 1.866.3 3.62.9 5.264.6 1.644 1.454 3.075 2.562 4.291a11.893 11.893 0 0 0 3.984 2.87c1.55.695 3.289 1.043 5.218 1.043 1.929 0 3.684-.348 5.265-1.043 1.581-.696 2.925-1.652 4.032-2.87 1.107-1.216 1.96-2.647 2.561-4.291.6-1.644.902-3.398.902-5.264m5.075 0c0 2.593-.45 4.972-1.352 7.137-.9 2.166-2.142 4.03-3.723 5.596-1.582 1.565-3.463 2.782-5.645 3.651-2.182.87-4.554 1.304-7.115 1.304s-4.926-.435-7.09-1.304c-2.168-.869-4.041-2.086-5.622-3.651-1.582-1.565-2.815-3.43-3.7-5.596-.886-2.165-1.328-4.544-1.328-7.137 0-2.623.442-5.018 1.328-7.184.885-2.165 2.118-4.015 3.7-5.549 1.58-1.532 3.454-2.726 5.621-3.58 2.165-.854 4.53-1.28 7.091-1.28s4.933.426 7.115 1.28c2.182.854 4.063 2.048 5.645 3.58 1.58 1.534 2.822 3.384 3.723 5.549.902 2.166 1.352 4.56 1.352 7.184"></path>
                                <g fill="#000">
                                    <path d="M140.685 7.4a9.87 9.87 0 0 0-1.944-3.444c-.873-1-1.988-1.812-3.315-2.411-1.327-.6-2.895-.903-4.663-.903-1.766 0-3.334.304-4.662.903-1.325.599-2.441 1.41-3.315 2.411a9.87 9.87 0 0 0-1.943 3.444 12.73 12.73 0 0 0-.627 3.97v13.962h4.692V11.587c0-.823.104-1.653.31-2.466.2-.788.532-1.502.985-2.12.443-.605 1.044-1.1 1.785-1.471.745-.372 1.678-.56 2.775-.56 1.122 0 2.06.188 2.79.559.732.37 1.328.866 1.772 1.472.452.618.784 1.33.983 2.12.207.813.311 1.642.311 2.466v13.005h4.693V11.369a12.75 12.75 0 0 0-.627-3.97"></path>
                                    <path d="M120.216 14.128v10.688c0 .824-.105 1.653-.31 2.466a6.101 6.101 0 0 1-.985 2.12c-.443.606-1.044 1.1-1.786 1.471-.744.372-1.677.56-2.775.56-1.12 0-2.06-.187-2.79-.558-.731-.371-1.327-.866-1.77-1.473a6.092 6.092 0 0 1-.985-2.12 10.009 10.009 0 0 1-.31-2.466V1.484h-4.692v23.55c0 1.362.21 2.697.626 3.97a9.87 9.87 0 0 0 1.944 3.443c.873 1.001 1.988 1.812 3.315 2.412 1.327.599 2.895.902 4.662.902 1.766 0 3.335-.303 4.662-.902 1.327-.6 2.442-1.41 3.315-2.412a9.88 9.88 0 0 0 1.945-3.443c.416-1.273.626-2.608.626-3.97V14.128h-4.692z"></path>
                                </g>
                                <g transform="translate(136.118 1.261)">
                                    <path d="M16.908.222v23.333c0 .824-.105 1.654-.311 2.466-.2.79-.531 1.502-.984 2.121-.443.605-1.04 1.1-1.771 1.472-.73.37-1.669.558-2.79.558-1.098 0-2.032-.188-2.775-.56-.742-.371-1.343-.865-1.786-1.47a6.106 6.106 0 0 1-.984-2.121 10.008 10.008 0 0 1-.311-2.466v-8.918H.504v9.136c0 1.361.21 2.697.627 3.97a9.863 9.863 0 0 0 1.945 3.443c.872 1.001 1.987 1.813 3.314 2.411 1.327.6 2.896.903 4.662.903s3.336-.304 4.662-.903c1.327-.598 2.442-1.41 3.314-2.411a9.863 9.863 0 0 0 1.945-3.443c.416-1.273.627-2.609.627-3.97V.223h-4.692z" fill="#000"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <img class="absolute top-0 z-0 h-72 pointer-events-none opacity-[.035] right-8 -rotate-12" src="https://www.baselhack.ch/images/app/logos/baselhack_black.png" alt="BaselHack" />
    </div>
</div>
{{--
<script>
    const updateCursor = ({ x, y }) => {
        document.documentElement.style.setProperty('--x', x);
        document.documentElement.style.setProperty('--y', y);
    };

    document.body.addEventListener('pointermove', updateCursor);
</script>
--}}
