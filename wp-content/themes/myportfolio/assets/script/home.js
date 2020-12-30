function hook(description_list, description_list_2) {
  // description_list = ['étudiant 👨🏾‍💼', 'développeur 👨🏿‍💻', 'webmaster'];
  // description_list_2 = ['créatif 🎨.', 'polyvalent.', "à l'écoute.", 'collaboratif 🤝.', 'curieux 👀.'];

    let randHook1 = description_list[Math.floor(Math.random() * description_list.length)];
    let randHook2 = description_list_2[Math.floor(Math.random() * description_list_2.length)];
    console.log(randHook1);
    console.log(randHook2);
    // setTimeout(hook, 2000);
  }