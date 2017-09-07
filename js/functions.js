// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-hide") == -1) {
        x.className += " w3-hide";
        x.previousElementSibling.className += " w3-theme-d4";
    } else { 
        x.className = x.className.replace("w3-hide", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d4", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

//Form cadastro
function esconder(id) {
     console.log("entrou");
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-hide") == -1) {
        x.className += " w3-hide";
    } else { 
        x.className = x.className.replace("w3-hide", "");
    }
}

//MUDA TEMA DO SITE
function mudaTema(tema){
    location.href="controllers/controller_temas.php?tema="+tema;
}

//PREVIEW DA FOTO DO PERFIL
$("#fileUpload").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});