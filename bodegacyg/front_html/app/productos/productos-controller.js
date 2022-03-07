$(document).ready(function(){

var TABLE_PRODUCTOS;
var ID_ELIMINAR_PRODUCTO;
var CARGAR_ID_PRODUCTO;

})

$(document).ready(function(){

TABLE_PRODUCTOS=$('#listProductos').DataTable( {
        "ajax":{
            type: 'get',
            url: APIS_URL+"/api/v1/producto",
            headers: {
                    Authorization: 'Bearer '+_access_token
            },
            dataSrc: 'data',
            cache: true
            },
        columns: [
            {
                "render": function ( data, type, row ) {
                    //return row.created_at;

                    return moment(row.created_at).format('DD/MM/YYYY HH:mm:ss');
                },                
                "targets": 0
            },
            { data: 'codigo' },
            { data: 'nombre' },
            {
                "render": function ( data, type, row ) {
                    

                    if(row.categoria)
                    {

                        return row.categoria.nombre;
                    }
                    else
                    {
                        return "";
                    }
                    
                },                
                "targets": 3
            },
            { data: 'precio' },
            { data: 'stock' },
            {
                "targets": 6,
                "render": function ( data, type, row ) {
                    
                    return "<a href='#' onclick=\"showEditarProducto('"+row.id+"')\">Editar</a> | <a href='#' onclick=\"confirmarEliminacion('"+row.id+"')\">Eliminar</a>"
                    
                }                
            },
        ]

    });



});



function showNewProducto()
{
    console.log("entro a nuevo producto");

    

    var url="http://localhost/bodegacyg/bodegacyg/front_html/views/productos/frm-new-producto.html";

    $('#modalContainer1').load(url, function (result) {

        $('#mdCreate').modal({ show: true,  backdrop: 'static', size: 'lg', keyboard: false });
    });
}


function showEditarProducto(id)
{
    CARGAR_ID_PRODUCTO=id;

    var url="http://localhost/bodegacyg/bodegacyg/front_html/views/productos/frm-editar-producto.html";

    $('#modalContainer1').load(url, function (result) {

        $('#mdCreate').modal({ show: true,  backdrop: 'static', size: 'lg', keyboard: false });
        
        loadDataProducto();

    });
}



function loadDataProducto()
{
    var _args={
        callback:function(data)
        {
             $.each(data, function (i, item) {

                $("#ddlCategoria").append(new Option(item.nombre, item.id));
            
              });

             getDataProducto();
        }
    };

    loadCategorias(_args);

}

function getDataProducto()
{
    $.ajax({
            method:"GET",
            headers: {
                    Authorization: 'Bearer '+_access_token
            },
            url:APIS_URL+"/api/v1/producto/"+CARGAR_ID_PRODUCTO
            }).done(function(response){

                //console.log(response.data);
                $('#ddlCategoria option[value='+response.data.categoria_id+']').prop('selected', 'selected');

                $("#txtCodigo").val(response.data.codigo);
                $("#txtNombre").val(response.data.nombre);
                $("#txtPrecio").val(response.data.precio);
                
            });
}


function updateDataTable()
{
    TABLE_PRODUCTOS.ajax.reload();
}


function confirmarEliminacion(id)
{
    ID_ELIMINAR_PRODUCTO=id;

     var url="http://localhost/bodegacyg/bodegacyg/front_html/views/productos/frm-confirmar-eliminar.html?id"+id;

    $('#modalContainer1').load(url, function (result) {

        $('#mdCreate').modal({ show: true,  backdrop: 'static', size: 'lg', keyboard: false });
    });
}

function eliminarProducto()
{
    $.ajax({
            method:"DELETE",
            headers: {
                    Authorization: 'Bearer '+_access_token
            },
            url:APIS_URL+"/api/v1/producto/"+ID_ELIMINAR_PRODUCTO
            }).done(function(response){
                
              
                $('#mdCreate').modal('hide');

                updateDataTable();
            });
}



function loadCategorias(params)
{
    $.ajax({
            method:"GET",
            headers: {
                    Authorization: 'Bearer '+_access_token
            },
            url:APIS_URL+"/api/v1/categoria"
            }).done(function(response){

                if(params.callback)
                    params.callback(response.data);
            
            });
}