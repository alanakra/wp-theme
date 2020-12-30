
  accroche();

  function accroche() {
  tabAccroche1 = ['étudiant 👨🏾‍💼', 'développeur 👨🏿‍💻', 'webmaster'];
  tabAccroche2 = ['créatif 🎨.', 'polyvalent.', "à l'écoute.", 'collaboratif 🤝.', 'curieux 👀.'];

   var accrocheAleatoire1 = tabAccroche1[Math.floor(Math.random() * tabAccroche1.length)];
   var accrocheAleatoire2 = tabAccroche2[Math.floor(Math.random() * tabAccroche2.length)];
   document.getElementById("accroche1").innerHTML = accrocheAleatoire1;
   document.getElementById("accroche2").innerHTML = accrocheAleatoire2;
   setTimeout(accroche, 2000);
  }