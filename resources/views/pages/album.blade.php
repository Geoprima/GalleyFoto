<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/src/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @media(max-width:768px) {
            .flex-container {
                flex-direction: column;
            }

            .fulwidth {
                width: 100%;
            }

            .fulheight {
                height: 100%;
            }
        }
    </style>
    <title>Gallery</title>
</head>

<body>


    <nav class="fixed top-0 z-20 w-full bg-white shadow-md">
        <div class="flex flex-wrap items-center justify-center max-w-screen-xl p-4 mx-auto">
            <a href="explore.html" class="mr-4">EXPLORE</a>
            <a href="upload.html" class="mr-4">UPLOAD</a>
           
            <input type="text" class="px-4 py-1 rounded-full mr-4" placeholder="Search ...">
            
                
            <div class="flex items-center space-x-1 md:order-2 md:space-x-0 rtl:space-x-reverse">
                <img src="/assets/img-08.jpg" alt="" class="w-10 h-10 rounded-full" data-dropdown-toggle="user-dropdown-menu">
                <!-- Drop Down -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                    id="user-dropdown-menu">
                    
                    <ul class="py-2" role="none">
                        <li>
                            <a href="myprofile.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="album.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Album
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="ubahpassword.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Perbaharui Password
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Log Out
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </div>
    </nav>
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Gallery</h3>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container">
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="#">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/img-11.jpg" alt="" class="w-full transition duration-500 hover:scale-105">
                                
                            </div>
                        </a>
                        <div class="text-center font-semibold">
                            Bunga
                        </div>
                    </div>
                </div>
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="#">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/img-12.jpg" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                            </div>
                        </a>
                       <div class="text-center font-semibold">
                        Kendaraan 
                       </div>
                    </div>
                </div>
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="#">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/img-13.jpg" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="text-center font-semibold">
                            Hewan
                        </div>
                    </div>
                </div>
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="#">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="/assets/img-14.jpg" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                            </div>
                        </a>
                       <div class="text-center font-semibold">
                        Pemandangan
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>

    
</body>

</html>