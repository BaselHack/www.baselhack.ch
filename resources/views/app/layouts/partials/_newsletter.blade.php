
<div class="text-white bg-black">
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:py-16 lg:px-8">
        <div class="px-6 py-6 border-2 rounded-lg border-white-600 md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
            <div class="xl:w-0 xl:flex-1">
                <h2 class="text-2xl font-extrabold leading-8 tracking-tight text-white sm:text-3xl sm:leading-9">
                    {{ __('app/newsletter.title') }}
                </h2>
                <p class="max-w-3xl mt-3 text-lg leading-6 text-gray-300" id="newsletter-headline">
                    {{ __('app/newsletter.subtitle') }}
                </p>
            </div>
            <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                <form class="sm:flex" aria-labelledby="newsletter-headline" method="POST" action="{{ route('newsletter.store') }}">
                    @csrf
                    @honeypot
                    <input id="email" name="email" aria-label="{{ __('app/newsletter.form.input.email') }}" type="email" required class="w-full px-5 py-3 text-base leading-6 text-white placeholder-gray-200 transition duration-150 ease-in-out bg-black border border-white rounded-md appearance-none focus:outline-none focus:placeholder-gray-200" placeholder="{{ __('app/newsletter.form.input.email') }}">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button class="flex items-center justify-center w-full px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400">
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
