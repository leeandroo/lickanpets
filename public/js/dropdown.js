
$(document).ready(function(){

    // LISTA DE RAZAS DE PERROS
    var perros = [
        {display: "Akita Americana", value: "1" }, 
        {display: "Beagle", value: "2" }, 
        {display: "Boxer Albino", value: "3" }, 
        {display: "Bulldog Frances", value: "4" }, 
        {display: "Bully", value: "5" }, 
        {display: "Caniche", value: "6" }, 
        {display: "Chihuahua", value: "7" }, 
        {display: "Chitzu", value: "8" }, 
        {display: "Cocker Spainel", value: "9" }, 
        {display: "Fox Terrier", value: "10" }, 
        {display: "Golden Retriever", value: "11" }, 
        {display: "Husky Siberiano", value: "12" }, 
        {display: "Maltes", value: "13" }, 
        {display: "Poodle Toy", value: "14" }, 
        {display: "Poodle Mediano", value: "15" }, 
        {display: "Poodle Maltese", value: "16" }, 
        {display: "Pastor Aleman", value: "17" }, 
        {display: "Pitbull", value: "18" },
        {display: "Pug", value: "19" }, 
        {display: "Rottweiler", value: "20" }, 
        {display: "Raza Única", value: "21" }, 
        {display: "Shar Pei", value: "25" }, 
        {display: "Teckel", value: "26" }, 
        {display: "Yorkshire", value: "27" }];
        
    // LISTA DE RAZAS DE GATOS
    var gatos = [	
        {display: "Domestico Pelo Corto", value: "29" }, //////////
        {display: "Domestico Pelo Largo", value: "28" },//////////
        {display: "Sin raza", value: "30" },//////////
        {display: "Persa", value: "32" },//////////
        {display: "Persa blue", value: "31" },//////////
        {display: "Siamés", value: "33" }, 
        {display: "Sin raza", value: "34" },
        {display: "Persa", value: "35" },
        {display: "ruso azul", value: "36" },
        {display: "Bobtail Americano", value: "37" },
        {display: "Somalí", value: "38" },
        {display: "Siberiano", value: "39" },
        {display: "Manés", value: "40" },
        {display: "Burmés", value: "41" },
        {display: "Ragdoll", value: "42" },
        {display: "Maine Coon", value: "43" }];
        
    
    //If parent option is changed
    $("#especies").change(function() {
            var parent = $(this).val(); //get option value from parent 
            
            switch(parent){ //using switch compare selected option and populate child
                  case '1':
                     list(perros);
                    break;
                  case '2':
                     list(gatos);
                    break;				
                default: //default child option is blank
                    $("#razas").html('');	 
                    break;
               }
    });
    
    //function to populate child select box
    function list(array_list)
    {
        $("#razas").html(""); //reset child options
        $(array_list).each(function (i) { //populate child options 
            
            if(i < 1){
                $("#razas").append("<option disabled selected value=''>Selecciona una Raza</option><option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
            }else{
                $("#razas").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
            }
        });
    }
    
    });