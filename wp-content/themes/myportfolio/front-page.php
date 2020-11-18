<?php get_header(); ?>

<body>
  <div class="supertitre">
   <h1 class="titre-page">Alan Akra</h1>
   <h2 class="accroche-first">Développeur web</h2>
   <h3 class="accroche">Bienvenue sur le portfolio d'un jeune <span id="accroche1"></span> <span id="accroche2"></span></h3>
  </div>

  <script>

  accroche();

  function accroche() {
   const tabAccroche1 = ['étudiant 👨🏾‍💼', 'développeur 👨🏿‍💻', 'webmaster'];
   const tabAccroche2 = ['créatif 🎨.', 'polyvalent.', "à l'écoute.", 'collaboratif 🤝.', 'curieux 👀.'];

   var accrocheAleatoire1 = tabAccroche1[Math.floor(Math.random() * tabAccroche1.length)];
   var accrocheAleatoire2 = tabAccroche2[Math.floor(Math.random() * tabAccroche2.length)];
   document.getElementById("accroche1").innerHTML = accrocheAleatoire1;
   document.getElementById("accroche2").innerHTML = accrocheAleatoire2;
   setTimeout(accroche, 2000);
  }
  </script>

<?php get_footer(); ?>