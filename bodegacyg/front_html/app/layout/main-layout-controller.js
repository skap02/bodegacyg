$(document).ready(function(){

    $("#header").load("http://localhost/bodegacyg/bodegacyg/front_html/views/layout/header.html");
    $("#mainMenu").load("http://localhost/bodegacyg/bodegacyg/front_html/views/layout/main-menu.html");
    $("#footer").load("http://localhost/bodegacyg/bodegacyg/front_html/views/layout/footer.html");
        

})

/*
var _access_token = sessionStorage.getItem('_access_token');


if(!_access_token)
    window.location="http://localhost/bodegacyg/bodegacyg/front_html/views/login.html"


$(document).ready(function(){

    $("#header").load("http://localhost/bodegacyg/bodegacyg/front_html/views/layout/header.html");
    
    $("#footer").load("http://localhost/bodegacyg/bodegacyg/front_html/views/layout/footer.html");

    $("#mainMenu").load("http://localhost/bodegacyg/bodegacyg/front_html/views/layout/main-menu.html",seleccionarMenu);

});


function seleccionarMenu(result)
{
    //console.log("hola 1")

    //console.log(document.location.pathname)


    $("#mainMenu li").each(function(index){

        menu_item=$(this).first().html();

        index_menu_item=menu_item.indexOf(document.location.pathname);

        if(index_menu_item>0)
        {
            $(this).children().addClass("active");
        }
        console.log(index_menu_item);
    });

}*/