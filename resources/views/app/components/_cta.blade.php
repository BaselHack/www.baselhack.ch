<style>
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

<div class="mt-12 ld:mt-16 lg:mt-24">
    <div class="my-8 text-black md:my-16 bg-[#efe73e] card-shine appearance-none relative overflow-hidden p-12 before:absolute before:content-[''] rounded-sm group outline-none">
        <div class="flex flex-col justify-center w-full gap-4">
            <h1 class="relative text-2xl text-center pointer-events-none">
                <strong>Participate in BaselHack 2023 in October?</strong>
            </h1>
            <h3 class="relative max-w-lg mx-auto mt-2 text-sm text-center pointer-events-none">Get your ticket in exchange for a deposit of 20 CHF on eventfrog.ch</h3>
            <a class="relative flex items-center gap-4 px-6 py-3 mx-auto mt-6 text-yellow-400 bg-black rounded-lg focus:outline outline-offset-2 outline-2 outline-black w-fit" href="https://eventfrog.ch/de/p/wissenschaft-und-technik/baselhack-2023-7059415336391468199.html" target="_blank">
                <span>Grab your ticket</span>
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
            </a>
        </div>
        <img class="absolute top-0 z-0 h-72 pointer-events-none opacity-[.035] right-8 -rotate-12" src="https://www.baselhack.ch/images/app/logos/baselhack_black.png" alt="BaselHack" />
    </div>
</div>

<script>
    document.querySelector(".card-shine").onmousemove = (e) => {
        const x = e.pageX - e.target.offsetLeft;
        const y = e.pageY - e.target.offsetTop;
        e.target.style.setProperty("--x", `${x}px`);
        e.target.style.setProperty("--y", `${y}px`);
    };
</script>