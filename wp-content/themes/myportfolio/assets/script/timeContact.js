'use strict';
   bonjourBonsoir();
   

   function bonjourBonsoir(){
     let jour = new Date();
     let heure = jour.getHours();
     let heureAffiche = jour.getHours();
     let minuteAffiche = jour.getMinutes();
     let  debutJournee = "et je suis disponible pour répondre à vos demandes ou questions .";
     let finJournee = ", mais il n'y a pas d'heure pour discuter...";

       if(minuteAffiche<=9){
         minuteAffiche = "0"+minuteAffiche;
       }
   
       if(heureAffiche<=9){
         heureAffiche = "0"+heureAffiche;
       }

       if(heureAffiche >=8 && heureAffiche <= 18){
         document.getElementById("finPhrase").innerHTML = debutJournee;
       }else{
         document.getElementById("finPhrase").innerHTML = finJournee;
       }

       document.getElementById("heureLocal").innerHTML = heureAffiche;
    document.getElementById("minutesLocal").innerHTML = minuteAffiche;
   setTimeout(bonjourBonsoir, 1000);
   }