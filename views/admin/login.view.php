<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-rv1Qhya3w9lLNVEbClfep8e0VZ64SYGXpXbB8Vc0IxK2l2R0uINxvD1gWBHvSMMLYtu=w300">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>
<body class="bg-gray-300">
    <!-- <div class="w-1/3  h-96 bg-gray-100 mt-32 mx-auto my-auto">
        <h3 class="text-center text-xl p-5">
            Progiciel de Gestion Intégré 
        </h3>
        <h4 class="text-center  text-lg">
            Formation et Vie Etudiante 
        </h4>
        <div >
        <form method="POST" action="/admin/login" class="block mx-auto p-5 space-y-4" >
                    <div class="  w-full">
                            <input type="email" name="email" x-model="input2" class=" w-96 h-10 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none"
                            placeholder="Email" >
                    </div>
                    <div class="  w-full">
                            <input type="password" name="password" x-model="input2" class=" w-96 h-10 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none"
                            placeholder="Password" >
                    </div>

                    <div class=" ">
                        <button type="submit" name="btn-submit"
                            class="flex items-center bg-green-300 rounded-l-md border border-white justify-center w-20 h-10 text-white "
                            :class="(search.length > 0) ? 'bg-purple-500' : 'bg-green-500 cursor-not-allowed'"
                            :disabled="search.length == 0">
                          
                            <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                            </svg>
                        </button>
                    </div>


        </form>
        
        </div>

    </div> -->

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-20 w-auto" src="https://lh3.googleusercontent.com/-rv1Qhya3w9lLNVEbClfep8e0VZ64SYGXpXbB8Vc0IxK2l2R0uINxvD1gWBHvSMMLYtu=w300" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Faculté des sciences humaines</h2>
        <h5  class=" text-center  font-bold leading-9 tracking-tight text-gray-900"> Platforme d'orientation </h5>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/admin/login" method="POST">
        <div>
            
            <div class="mt-2">
            <input id="email" name="email" type="email"  required  placeholder="  E-mail" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            
            <div class="mt-2">
            <input id="password" name="password" type="password"  required  placeholder="  Mot de pass" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <button type="submit" name="btn-submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2
            focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Connexion</button>
        </div>
        </form>

        <p class="mt-10 text-center text-sm text-red-500">
        <?=$error;?>
        </p>
    </div>
    </div>
</body>
</html>