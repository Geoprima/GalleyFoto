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
                            <a href="myprofile.html" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="album.html" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Album
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="ubahpassword.html" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Perbaharui Password
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index.html" class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
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
    <section class="w-96 mx-auto ">
            <div class="w-full">
                <div class="bg-white rounded-md shadow-md ">
                    <div class="flex flex-col px-8 py-4 ">
                        <h5 class="text-3xl text-center font-serif my-5">Perbaharui Password</h5>
                        <h5>Password Lama</h5>
                        <input type="password" class="py-1 rounded-md">
                        <h5>Password Baru</h5>
                        <input type="password" class="py-1 rounded-md">
                        <h5>Konfirmasi Password</h5>
                        <input type="password" class="py-1 rounded-md">
                        <button class="py-2 mt-4 text-white rounded-md bg-green-500">Perbaharui</button>
                    </div>
                </div>
            </div>
    </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>