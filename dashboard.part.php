@vite('resources/css/app.css')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="{{ mix('node_modules/flowbite/dist/flowbite.min.js') }}"></script>

@vite('resources/css/app.css')

<div id="mainContainer" class="flex overflow-auto h-screen flex-col w-full max-w-full">
    <div id="navbar" class="bg-white fixed flex justify-end shadow-lg px-5 py-4 z-1 top-0 w-full max-w-full">
        <ul class="flex flex-row gap-3 items-center">
            {{-- add using <li></li> --}}
            <li>          
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-slate-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Hi {{ auth()->user()->username }} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
    
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                    </ul>
                </div>
            </li>
        </ul>
    
    </div>
    
    <div id="sidebar" class="absolute h-screen p-5 z-3 flex justify-between flex-col gap-2 bg-slate-800">
        <ul>
            <li>
                <div class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 via-pink-500 to-red-500">
                    W<span id="fullNameWeb" class="hidden">@web</span>
                </div>
            </li>
            <div class="border-t border-gray-500 my-4"></div>
            {{-- dashboard --}}
            <li class="lists p-2 rounded-full duration-150 transition-all cursor-pointer flex flex-row gap-2 text-slate-300 hover:text-white">
                <i id="icons" data-feather="layers" class="duration-150 transition-all"></i>
                <span class="icon_titles duration-150 transition-all hidden">dashboard</span>
            </li>
            {{-- posts --}}
            <li class="lists p-2 rounded-full duration-150 transition-all cursor-pointer flex flex-row gap-2 text-slate-300 hover:text-white">
                <i id="icons" data-feather="book-open" class="duration-150 transition-all"></i>
                <span class="icon_titles duration-150 transition-all hidden">posts</span>
            </li>
            {{-- bookmark --}}
            <li class="lists p-2 rounded-full duration-150 transition-all cursor-pointer flex flex-row gap-2 text-slate-300 hover:text-white">
                <i id="icons" data-feather="bookmark" class="duration-150 transition-all"></i>
                <span class="icon_titles duration-150 transition-all hidden">bookmark</span>
            </li>
            {{-- dropdown --}}
            <li>
                <li id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-slate-300 cursor-pointer p-2 flex gap-2 text-center items-center" type="button">
                    <i id="icons" data-feather="sliders" class="duration-150 transition-all"></i> <span class="icon_titles hidden flex flex-row gap-2">
                        Dropdown <i id="icons" data-feather="chevron-down" class="duration-150 transition-all"></i>
                    </span>
                </svg>
            </li>  
                    <!-- Dropdown menu -->
                <div id="dropdownDivider" class="z-10 hidden bg-white divide-ydivide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100  dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100  dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100  dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700  hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200  dark:hover:text-white">Separated link</a>
                    </div>
                </div>           
            </li>
        </ul>
        <ul class="w-full md:flex lg:flex justify-center align-bottom items-center max-sm:hidden">
            <li id="toggleButton" class="bg-slate-700 hover:scale-110 duration-150 transition-all cursor-pointer rounded-full p-2 text-white">
                <i id="toggleIcon" data-feather="arrow-right" class="arrow duration-150 transition-all"></i>
            </li>
        </ul>
    </div>
    <div id="mainbar" class="z-2 flex w-full h-[100vh] max-w-full pl-[7rem] py-[5rem] pr-[3rem] box-border flex-wrap">
        <span class="text-2xl font-semibold text-slate-600">hallo dunia</span>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sit incidunt eaque, ipsum corporis nostrum! Reprehenderit, voluptate. Officia consectetur necessitatibus tempora quod soluta modi tenetur quos itaque vitae quaerat distinctio blanditiis velit, dignissimos deserunt dolorem iste iusto, quis quam sit unde accusamus excepturi corrupti laborum. Facilis maxime error fugiat impedit quis, vero provident autem obcaecati, placeat ullam, laboriosam animi. Asperiores iure error dolorem illo perferendis, ipsam, ratione voluptates tempore hic architecto reprehenderit aperiam laudantium magnam alias non assumenda aut, atque necessitatibus voluptas. Eius maxime minus, unde deleniti voluptatem ipsam eaque adipisci amet, iste quidem tempora quod ratione dignissimos ipsa itaque? Blanditiis nisi voluptatem natus, ex error perspiciatis adipisci officia, nihil explicabo asperiores commodi dolore cupiditate cumque repellat eveniet laboriosam dignissimos hic sed maxime, exercitationem odit quasi magni. Quibusdam esse quaerat velit repellendus possimus sapiente dolore quas ea quia nam illum dolorem porro impedit nostrum est ipsa, aut cupiditate voluptatem in? Itaque in nobis impedit nemo assumenda aliquam voluptatem ad accusamus excepturi, voluptatum dolorem, reiciendis repellendus beatae iure dolore quia eligendi? Corporis cupiditate mollitia at. Possimus natus fugit incidunt nam officia explicabo qui ratione est mollitia ab corporis sapiente animi vero, perspiciatis laboriosam itaque quis ut tempora perferendis voluptatum, distinctio aliquid.</span>
        <span>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam delectus voluptas, omnis inventore maiores pariatur eaque tempore! Quos fuga quidem odit, facere quibusdam et officia nemo at, dolores incidunt perspiciatis earum consequuntur similique. Temporibus fugiat sapiente velit facere repudiandae enim molestiae dolorum? Earum, molestiae. Cupiditate unde autem ipsam, obcaecati inventore porro laboriosam dolore, amet, temporibus eos ipsa deserunt! Doloremque rem blanditiis perferendis dignissimos. Itaque aut quibusdam cum cumque assumenda totam molestias omnis molestiae, nisi provident ea dolorum culpa labore. Sapiente hic sint reiciendis ea esse tempore repudiandae placeat minima accusamus voluptatibus! Perspiciatis, quisquam! Aliquid fuga, vitae corporis earum nemo libero itaque? Dolore accusantium repellendus expedita unde inventore, delectus odio quod sed ipsa eos dolorum, beatae laudantium veniam neque at fuga rem voluptas quae, alias cumque quaerat similique quis. Sapiente natus nesciunt suscipit numquam est excepturi modi optio quam dolor distinctio? Delectus molestiae quidem iusto illum? Deleniti labore provident, veritatis, necessitatibus ullam animi facilis fugit vero veniam consequuntur suscipit explicabo praesentium debitis possimus! Repudiandae quisquam animi laudantium molestias minima reiciendis suscipit rerum iure quo quibusdam amet pariatur quidem nesciunt expedita architecto id ipsa, itaque libero saepe, vitae vero doloribus temporibus blanditiis? Assumenda placeat quod, delectus ipsam, obcaecati neque eveniet blanditiis magnam doloribus eum consequuntur corrupti beatae nihil ad velit consectetur quo repellendus? Eveniet delectus minima et dolor voluptas similique perferendis perspiciatis minus quae sunt. Fugiat, vel! Explicabo, voluptates sed. Aut dignissimos omnis eius, quia autem consequatur modi eveniet. Mollitia dolores voluptatum eligendi vel beatae voluptates assumenda explicabo corrupti iure quis possimus facere quae repellat modi ea asperiores doloribus consequatur, aperiam iusto unde! Voluptates mollitia totam quam odio, autem corrupti velit quidem ex architecto accusantium fugiat at exercitationem, explicabo aliquid ea nulla dolores accusamus inventore aliquam ipsum pariatur! Doloremque aspernatur adipisci soluta, veniam blanditiis eveniet suscipit consequatur sint mollitia dolore voluptates ipsa optio odio laudantium nostrum ab explicabo aliquid fugit hic esse vero possimus ut perferendis! Eius porro explicabo quidem non veritatis dicta qui quos laborum nulla iusto odio dignissimos atque, repellat doloremque unde? Voluptas illum natus voluptate enim sint vero libero iusto necessitatibus, atque facere ducimus sed cupiditate quis, eveniet illo totam. Voluptas vitae cumque nemo dolorem, veniam maxime consectetur iusto quia quasi? Sapiente, facilis omnis ipsa similique cum explicabo cumque porro harum beatae culpa unde ratione cupiditate enim itaque doloribus incidunt alias, quaerat voluptates. Reiciendis veritatis incidunt voluptates expedita iure quia aut ipsam, numquam totam nulla nisi iste cum omnis?
        </span>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    feather.replace();

    var mainbar = $('#mainbar');
    var fullNameWeb = $('#fullNameWeb');
    var toggleButton = $('#toggleButton');
    var navbar = $('#navbar');

    function showNav() {
        fullNameWeb.toggleClass('hidden');

        $('.icon_titles').toggleClass('hidden')
        if(mainbar.hasClass('pl-[7rem]')) {
            mainbar.removeClass('pl-[7rem]').addClass('pl-[14rem]');
            // fullNameWeb.toggleClass('hidden');
            $('#toggleIcon').attr('data-feather', 'arrow-left')
        } else {
            mainbar.addClass('pl-[7rem]').removeClass('pl-[14rem]');
            // fullNameWeb.toggleClass('hidden');
            $('#toggleIcon').attr('data-feather', 'arrow-right')
        }

        feather.replace()
    }

    $('#sidebar').children().on('click', function(e) {
        e.stopPropagation();
    })

    $('#sidebar').on('click', function() {
        showNav();
    })

    toggleButton.on('click', function(e) {
        showNav()

        e.stopPropagation();
    })

    $('#mainContainer').scroll(function() {
        $(this).scrollTop() > 100 ? navbar.fadeOut() : navbar.fadeIn();
    })
})
</script>
