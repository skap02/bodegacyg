$(document).ready(function(){

$('#listProductos').DataTable({

	"ajax":{
		type: 'get',
		url: "http://localhost/bodegacyg/bodegacyg/public_html/api/v1/producto",
		dataSrc: 'data',
		cache: true
		},
	columns: [
		{
                "render": function ( data, type, row ) {
                    return row.created_at;
                },
                "targets": 0
            },
		{ data: 'codigo' },
		{ data: 'nombre' },
		{ 
                "render": function ( data, type, row ) {
                    if (row.categorias) {
                    	return row.categorias.nombre;
                    }
                    else{
                    	return "--sin categoria--";
                    }
                },
                "targets": 3
           },
         { data: 'precio' },
         { data: 'stock' },
         {  "render": function ( data, type, row ) {
                    return "<a href='#'>Editar</a> | <a href='#'>Eliminar</a>";
                },
                "targets": 6}
	]

});

});