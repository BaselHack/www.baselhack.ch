<div class="container px-8 mx-auto">
    <div class="max-w-6xl p-12 mx-auto my-24 border-2 rounded-lg newsletter-signup border-slate-300">
        <div class="flex grid items-center grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-12">
            <div class="mb-4 lg:mb-0">
                <h2 class="flex items-center gap-4 mb-4 text-2xl font-bold">
                    <svg class="hidden w-6 shrink-0 sm:inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                    </svg>
                    <span>{{ __('app/newsletter.title') }}</span>
                    <!-- change title to "Newsletter Subscription" -->
                </h2>
                <span>{{ __('app/newsletter.subtitle') }}</span>
            </div>
            <div class="flex flex-col items-start lg:items-end">
                <form class="flex flex-col justify-start w-full gap-3 sm:flex-row sm:w-auto" aria-labelledby="newsletter-headline" method="POST" action="{{ route('newsletter.store') }}">
                    @csrf
                    @honeypot
                    <input id="email" name="email" aria-label="{{ __('app/newsletter.form.input.email') }}" type="email" required class="w-full px-4 py-3 bg-transparent border-2 border-white rounded-md sm:w-80" placeholder="{{ __('app/newsletter.form.input.email') }}">
                    <input type="submit" class="px-4 py-2 rounded-md cursor-pointer bg-gradient-to-tr from-[#efe73e] to-[#50b1bf] text-black" value="{{ __('app/newsletter.form.button') }}">
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