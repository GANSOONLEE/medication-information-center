
<header class="sticky top-0">
    <nav class=" border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">藥物信息中心</span>
            </a>
            <div class="flex items-center lg:order-2">

                <!-- 登入前 -->
                @guest
                <a href="#" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 hover:bg-gray-700 focus:outline-none focus:ring-gray-800">登入</a>
                <a href="#" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 hover:bg-gray-700 focus:outline-none focus:ring-gray-800">注冊</a>
                @endguest

                <!-- 登入后 -->
                @auth
                <a href="#" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 hover:bg-gray-700 focus:outline-none focus:ring-gray-800">登出</a>
                <a href="#" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 hover:bg-gray-700 focus:outline-none focus:ring-gray-800">個人資料</a>
                @endauth

                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm rounded-lg lg:hidden  focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>

            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">

                    <!-- Define navbar links 定義導覽行鏈接 -->
                    @php
                        $links = [
                            (object)[
                                'href' => 'frontend.home',
                                'label' => '首頁'
                            ],
                            (object)[
                                'href' => 'frontend.inquire',
                                'label' => '藥物查詢'
                            ],
                            (object)[
                                'href' => '#',
                                'label' => '資料管理'
                            ],
                            (object)[
                                'href' => '#',
                                'label' => '網站管理'
                            ],
                            (object)[
                                'href' => '#',
                                'label' => '法律資訊'
                            ],
                        ];
                    @endphp

                    @foreach ($links as $link)
                        <navbar-link
                            :current-page="{{ Request::route()->getName() === $link->href ? 'true' : 'false' }}"
                            href="{{ $link->href !== '#' ? route($link->href) : '#' }}"
                            label="{{ $link->label }}"
                        ></navbar-link>
                    @endforeach

                </ul>
            </div>
        </div>
    </nav>
</header>