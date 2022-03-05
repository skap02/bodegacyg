var TABLE_CATEGORIAS;
var ID_ELIMINAR_CATEGORIA;
var CARGAR_ID_CATEGORIA;


$(document).ready(function(){

TABLE_CATEGORIAS=$('#listCategorias').DataTable( {
        "ajax":{
            type: 'get',
            url: APIS_URL+"/v1/categoria",
            dataSrc: 'data',
            cache: true
            },
        columns: [
        	{
                "render": function ( data, type, row ) {
                    return moment(row.created_at).format('DD/MM/YYYY HH:mm:ss');
                },                
        		"targets": 0
            },
            { data: 'codigo' },
            { data: 'nombre' },
            
            {
                "render": function ( data, type, row ) {
                	
                	return "<a href='#' onclick=\"showEditarCategoria('"+row.id+"')\">Editar</a> | <a href='#' onclick=\"confirmarEliminacion('"+row.id+"')\">Eliminar</a>"
                    
                },                
        		"targets": 3
            },
        ]

    });



});



function showNewCategoria()
{
    

    var url="http://localhost/bodegacyg/bodegacyg/front_html/views/categorias/frm-new-categoria.html";

    $('#modalContainer1').load(url, function (result) {

        $('#mdCreate').modal({ show: true,  backdrop: 'static', size: 'lg', keyboard: false });
    });
}


function showEditarCategoria(id)
{
    CARGAR_ID_CATEGORIA=id;

    var url="http://localhost/bodegacyg/bodegacyg/front_html/views/categorias/frm-editar-categoria.html";

    $('#modalContainer1').load(url, function (result) {

        $('#mdCreate').modal({ show: true,  backdrop: 'static', size: 'lg', keyboard: false });
        
        loadDataCategoria();

    });
}

function loadDataCategoria()
{
 
    $.ajax({
            method:"GET",
            headers: {
                    Authorization: 'Bearer '+_access_token
            },
            url:APIS_URL+"/api/v1/categorias/"+CARGAR_ID_CATEGORIA
            }).done(function(response){

                $("#txtCodigo").val(response.data.codigo);
                $("#txtNombre").val(response.data.nombre);
                
            });
}


function updateDataTable()
{
    TABLE_CATEGORIAS.ajax.reload();
}


function confirmarEliminacion(id)
{
    ID_ELIMINAR_CATEGORIA=id;

     var url="http://localhost/bodegacyg/bodegacyg/front_html/views/categorias/frm-confirmar-eliminar.html";

    $('#modalContainer1').load(url, function (result) {

        $('#mdCreate').modal({ show: true,  backdrop: 'static', size: 'lg', keyboard: false });
    });
}

function eliminarCategoria()
{
    

    $.ajax({
            method:"DELETE",
            headers: {
                    Authorization: 'Bearer '+_access_token
            },
            url:APIS_URL+"/v1/categoria"+ID_ELIMINAR_CATEGORIA
            }).done(function(response){
                
              
                $('#mdCreate').modal('hide');

                updateDataTable();
            });
}