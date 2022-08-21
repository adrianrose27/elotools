<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

    <title>Elotools</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Elotools</span>
            </a>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
            <div class="flex items-center justify-between">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Products <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <!-- Produtcs Dropdown menu -->
                        <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                              <li>
                                <a href="#" class="flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SOMTA</a>
                              </li>
                              <li>
                                <a href="#" class="flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">TURBo-X</a>
                              </li><li>
                                <a href="#" class="flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">K-500N</a>
                              </li><li>
                                <a href="#" class="flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">MEZZA</a>
                              </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/download" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Download</a>
                    </li>
                    <li>
                        <a href="/wheretobuy" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Where To Buy</a>
                    </li>
                </ul>
                <div class="items-end">
                    <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Sign In</a>
                </div>
            </div>
            
        </div>
    </nav>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

</body>
</html>