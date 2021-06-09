@if (flash()->message)
    <div class="relative bg-green-600">
        <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="pr-16 sm:text-center sm:px-16">
                <p class="font-medium text-white">
                    {{ flash()->message }}
                </p>
            </div>

        </div>
    </div>
@endif



