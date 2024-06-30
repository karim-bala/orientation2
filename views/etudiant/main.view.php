

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-rv1Qhya3w9lLNVEbClfep8e0VZ64SYGXpXbB8Vc0IxK2l2R0uINxvD1gWBHvSMMLYtu=w300">
    <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
    <script>
      function selectFun(){
        let optionName = document.getElementsByName('choix1').value;
        alert('hi'.$optionName);
      }
    </script>
</head>
<body>
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
       
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-16 w-auto" src="https://lh3.googleusercontent.com/-rv1Qhya3w9lLNVEbClfep8e0VZ64SYGXpXbB8Vc0IxK2l2R0uINxvD1gWBHvSMMLYtu=w300" alt="Univirsty of algirs 2">
        </div>
        
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <form action="/login" method="post">
          <button  type="submit" name="logout" class="relative inline-flex items-center justify-center p-0.5 mb-1 me-1 overflow-hidden text-sm font-mediu
           text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 hover:text-white dark:text-white focus:ring-2  
           dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Déconnecté
            </span>
          </button>
        </form> 
    </div>
  </div>

 
</nav>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      
      <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
                <dl class="-my-3 divide-y divide-gray-100 text-sm">
                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Matricule</dt>
                    <dd class="text-gray-700 sm:col-span-2"><?= $_SESSION['mat_etudaint'];?></dd>
                  </div>

                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Nom</dt>
                    <dd class="text-gray-700 sm:col-span-2"><?=$_SESSION['nom_etudaint'];?></dd>

                  </div>

                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Prénom</dt>
                    <dd class="text-gray-700 sm:col-span-2"><?=$_SESSION['prenom_etudaint'];?></dd>
                
                  </div>

                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Moyen général</dt>
                    <dd class="text-gray-700 sm:col-span-2"><?=$_SESSION['MG'];?></dd>
                  </div>

                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    
                    <dt class="font-medium text-gray-900">Décision</dt>
                    <dd class="text-gray-700 sm:col-span-2"><?=$_SESSION['Decision'];?></dd>
                    
                    </dd>
                  </div>
                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    
                    <dt class="font-medium text-gray-900">votre choix</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                    <?="1) ".$choix["choix1"]." 2) ".$choix["choix2"]." 3) ".$choix["choix3"]." 4) ".$choix["choix4"];?>
                    </dd>
                  </div>
                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    
                    <dt class="font-medium text-gray-900">Nombre de tantative résté :</dt>
                    
                    <dd class="text-gray-700 sm:col-span-2"><?php print (($choix["sauvgard"])<3)?(3 - $choix["sauvgard"]): "<p class='text-red-600'>vous avez dépassé le nombre de tantative autorisé !</p>";?></dd>
                    
                    
                  </div>
                </dl>
        </div>

       
</div> 


<form action="#" method="POST" class="max-w-sm mx-auto">
 
      
    <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
                <dl class="-my-3 divide-y divide-gray-100 text-sm">
                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">première choix</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                    <select id="select1" name="select1"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg 
                      border-s-gray-100 dark:border-s-gray-900 border-s-2 focus:ring-blue-500 focus:border-blue-500 block
                      w-full p-2.5 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                      dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Choix de spécialité</option>
                      <?php foreach ($branchs as $branch):?>

                        
                        
                          <option value="<?=$branch['name']?>"><?=$branch['name']?></option>  

                      
                    
                        <?php endforeach?>
                    </select>
                    
                    </dd>
                  </div>

                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">deuxième choix</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                      <select id="select2" name="select2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg 
                      border-s-gray-100 dark:border-s-gray-900 border-s-2 focus:ring-blue-500 focus:border-blue-500 block
                      w-full p-2.5 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                      dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Choix de spécialité</option>
                      <?php foreach ($branchs as $branch):?>
                          <option ><?=$branch['name']?></option>
                        <?php endforeach?>
                      </select>
                  
                    </dd>

                  </div>

                  <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">troisième choix</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                    <select id="select3" name="select3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg 
                      border-s-gray-100 dark:border-s-gray-900 border-s-2 focus:ring-blue-500 focus:border-blue-500 block
                      w-full p-2.5 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                      dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Choix de spécialité</option>
                      <?php foreach ($branchs as $branch):?>
                          <option ><?=$branch['name']?></option>
                        <?php endforeach?>
                      </select>
                      
                    </dd>
                
                  </div>

                
                </dl>
                <div class="center">
                  <p class="text-red-600 "><?php print isset($error['selection'])?  $error['selection'] : "" ;?></p>
                </div>
    </div>
    <div class="flex justify-center  mt-2  mb-10">
      
     
      <button type="submit" name="submit" class="flex-shrink-1 inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 
      rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white 
      dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
        <span class="flex px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
        <svg class="h-6 w-6 text-green-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />  <polyline points="22 4 12 14.01 9 11.01" /></svg>
                <?=$submit_value;?>
        </span>
        
      </button>
    </div>
  
</form>

<?php
// Options for the dropdown menus
$options = array(
    "histoire" => "Histoire",
    "bib" => "Bibliothèque",
    "journalisme" => "Journalisme",
    "philo" => "Philosophie"
);

?>

    <script>
        const form = document.getElementById("selection-form");
        const select1 = document.getElementById("select1");
        const select2 = document.getElementById("select2");
        const select3 = document.getElementById("select3");

        // Désactiver les options correspondantes dans la deuxième sélection
        function disableMatchingOptionsInSelect2() {
            const selectedOption1 = select1.value;
            const selectedOption3 =select3.value;
            const select2Options = select2.querySelectorAll("option");
            select2Options.forEach(option => {
                if (option.value === selectedOption1 || option.value === selectedOption3 ) {
                    option.disabled = true;
                } else {
                    option.disabled = false; // Réactiver les options précédemment désactivées
                }
                if (option.value === "Choix de spécialité") {
                    option.disabled = false;
                }
            });
        }

        function disableMatchingOptionsInSelect3() {
            const selectedOption1 = select1.value;
            const selectedOption2 = select2.value;
            const select3Options = select3.querySelectorAll("option");
            select3Options.forEach(option => {
                if (option.value === selectedOption1 || option.value === selectedOption2) {
                    option.disabled = true;
                } else {
                    option.disabled = false; // Réactiver les options précédemment désactivées
                }
                if (option.value === "Choix de spécialité") {
                    option.disabled = false;
                }
            });
        }
        function disableMatchingOptionsInSelect1() {
            const selectedOption2 = select2.value;
            const selectedOption3 = select3.value;
            const select1Options = select1.querySelectorAll("option");
            select1Options.forEach(option => {
                if (option.value === selectedOption2 || option.value === selectedOption3) {
                    option.disabled = true;
                } else {
                    option.disabled = false; // Réactiver les options précédemment désactivées
                }
                if (option.value === "Choix de spécialité") {
                    option.disabled = false;
                }
            });
        }
        // Événement de changement pour la première sélection
        select1.addEventListener("change", disableMatchingOptionsInSelect2);
        select1.addEventListener("change", disableMatchingOptionsInSelect3);
        select2.addEventListener("change", disableMatchingOptionsInSelect3);
        select2.addEventListener("change", disableMatchingOptionsInSelect1);
        select3.addEventListener("change", disableMatchingOptionsInSelect2);
        select3.addEventListener("change", disableMatchingOptionsInSelect1);
        // Événement de soumission du formulaire
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire par défaut

            const selectedOption1 = select1.value;
            const selectedOption2 = select2.value;

            console.log("Sélection 1:", selectedOption1);
            console.log("Sélection 2:", selectedOption2);

            // Vous pouvez ici traiter les valeurs sélectionnées (par exemple, les envoyer au serveur)
        });
    </script>
</body>
</html>

</body>
</html>