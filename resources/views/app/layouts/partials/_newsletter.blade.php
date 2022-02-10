
<div class="bg-black text-white">
    <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
        <div class="px-6 py-6 border-2 border-white-600 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
            <div class="xl:w-0 xl:flex-1">
                <h2 class="text-2xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
                    {{ __('app/newsletter.title') }}
                </h2>
                <p class="mt-3 max-w-3xl text-lg leading-6 text-gray-300" id="newsletter-headline">
                    {{ __('app/newsletter.subtitle') }}
                </p>
            </div>
            <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                <form class="sm:flex" aria-labelledby="newsletter-headline" method="POST" action="{{ route('newsletter.store') }}">
                    @csrf
                    @honeypot
                    <input id="email" name="email" aria-label="{{ __('app/newsletter.form.input.email') }}" type="email" required class="appearance-none w-full px-5 py-3 border border-transparent text-base leading-6 rounded-md text-white bg-black text-white placeholder-gray-200 focus:outline-none focus:placeholder-gray-200 transition duration-150 ease-in-out" placeholder="{{ __('app/newsletter.form.input.email') }}">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-150 ease-in-out">
                            {{ __('app/newsletter.form.button') }}
                        </button>
                    </div>
                </form>

                @error('email')
                <p class="mt-3 text-sm leading-5 text-red-200">
                    {{ $errors->first('email') }}
                </p>
                @enderror
                <p class="mt-3 text-sm leading-5 text-gray-300">
                    {{ __('app/newsletter.form.privacy') }}
                </p>

            </div>
        </div>
    </div>
</div>
