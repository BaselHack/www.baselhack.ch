@extends('app.layouts.default')

@section('styles')
@endsection

@section('content')

    <x-page :title="$title" :teaser="$teaser">


            <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                    <div>
                        <p class="text-sm text-gray-500">
                            <time datetime="2020-03-16">Mar 16, 2020</time>
                        </p>
                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">
                                Boost your conversion rate
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
                            </p>
                        </a>
                        <div class="mt-3">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                Read full story
                            </a>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            <time datetime="2020-03-10">Mar 10, 2020</time>
                        </p>
                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">
                                How to use search engine optimization to drive sales
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.
                            </p>
                        </a>
                        <div class="mt-3">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                Read full story
                            </a>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            <time datetime="2020-02-12">Feb 12, 2020</time>
                        </p>
                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">
                                Improve your customer experience
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Cupiditate maiores ullam eveniet adipisci in doloribus nulla minus. Voluptas iusto libero adipisci rem et corporis.
                            </p>
                        </a>
                        <div class="mt-3">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                Read full story
                            </a>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">
                            <time datetime="2020-01-29">Jan 29, 2020</time>
                        </p>
                        <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">
                                Writing effective landing page copy
                            </p>
                            <p class="mt-3 text-base text-gray-500">
                                Ipsum voluptates quia doloremque culpa qui eius. Id qui id officia molestias quaerat deleniti. Qui facere numquam autem libero quae cupiditate asperiores vitae cupiditate. Cumque id deleniti explicabo.
                            </p>
                        </a>
                        <div class="mt-3">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                Read full story
                            </a>
                        </div>
                    </div>
                </div>
            </div>


    </x-page>

@endsection
