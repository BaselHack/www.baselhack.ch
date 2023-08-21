<div class="container px-8 mx-auto group">
    <div class="max-w-6xl p-8 mx-auto my-8 border-2 rounded-lg md:p-12 md:my-16 newsletter-signup border-slate-300">
        <div class="flex grid items-center grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-12">
            <div class="mb-4 lg:mb-0">
                <h2 class="flex items-center gap-4 mb-4 text-2xl font-bold">
                    <svg class="hidden w-6 transition-colors duration-500 group-hover:text-yellow-500 shrink-0 sm:inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                    </svg>
                    <span>{{ __('app/newsletter.title') }}</span>
                </h2>
                <span>{{ __('app/newsletter.subtitle') }}</span>
            </div>
            <div class="flex flex-col items-start lg:items-end">
                <form class="flex flex-col flex-wrap justify-start w-full gap-3 sm:flex-row sm:w-auto" aria-labelledby="newsletter-headline" method="POST" action="{{ route('newsletter.store') }}">
                    @csrf
                    @honeypot
                    <input id="email" name="email" aria-label="{{ __('app/newsletter.form.input.email') }}" type="email" required class="w-full px-4 py-3 bg-transparent border-2 border-white rounded-md focus:border-yellow-500 focus:ring-transparent sm:w-80" placeholder="{{ __('app/newsletter.form.input.email') }}">
                    <input type="submit" class="hover:from-yellow-500 hover:to-yellow-500 focus:outline outline-offset-2 outline-2 outline-yellow-500 w-full md:w-auto px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr transition-colors from-[#efe73e] to-[#50b1bf] text-black focus:from-yellow-500 focus:to-yellow-500" value="{{ __('app/newsletter.form.button') }}">
                </form>
                @error('email')
                    <p class="mt-3 text-sm leading-5 text-red-200">
                        {{ $errors->first('email') }}
                    </p>
                @enderror
                <small class="inline-block mt-4">{{ __('app/newsletter.form.privacy') }}</small>
            </div>
        </div>
    </div>
</div>