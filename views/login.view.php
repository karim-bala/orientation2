<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>
<body class="bg-gray-300">
    <div class="w-1/3  h-96 bg-gray-100 mt-32 mx-auto my-auto">
        <h3 class="text-center text-xl p-5">
            Progiciel de Gestion Intégré 
        </h3>
        <h4 class="text-center  text-lg">
            Formation et Vie Etudiante 
        </h4>
        <div >
        <form method="POST" action="/login" class="flex mx-auto p-5" >
                    <div class="  w-full">
                            <input type="password" name="password" x-model="input2" class=" w-80 h-10 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none"
                            placeholder="Matricule" >
                    </div>

                    <div>
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

    </div>
</body>
</html>