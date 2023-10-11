var boton=document.getElementById('agregar');
var guardar=document.getElementById('guardad');
var lista=document.getElementById('lista');
var data=[];
var cant=0;
 boton.addEventListener("click",agregar);
 guardar.addEventListener("click",save);
function agregar(){
    var nombre=document.getElementById('nombre').value;
    var codigo=parseFloat(document.getElementById('codigo').value);
    var cantidad=parseFloat(document.getElementById('precio').value);
    var precio=parseFloat(document.getElementById('cantidad').value);
    var total=precio*cantidad; 
    //agregar elemento al arreglo
    data.push(
        {
            "id":cant,
            "nombre":nombre,
            "codigo": codigo,
            "precio":precio,
            "cantidad":cantidad,
            "total":total
        }
    );
    var id_row='row'+cant;
    var fila='<tr id='+id_row+'><td>' +nombre+'</td><td>' +codigo+ '</td><td>' +precio+ '</td><td>' +cantidad+ '</td><td>' +total+ '</td><td><a href="#" class="btn btn-danger" onclick="eliminar('+cant+')";>Eliminar</a><a href="#" class="btn btn-warning" onclick="cantidad('+cant+')";>Cantidad</a></td></tr';
    
    //agregar a la tabla
    $("#lista").append(fila);
    $("#nombre").val('');
    $("#codigo").val('');
    $("#precio").val('');  
    $("#cantidad").val('');
    $("#nombre").focus();
    cant++;
   
    sumar();
}
function save(){
    
}
function sumar(){
    var tot=0;
    for(x of data){
        tot=tot+x.total;
    }
    document.getElementById('total').innerHTML="Total "+tot +" bs.";
}
function eliminar(row){
    //remover fila de la tabla
    $("#row"+ row).remove();
    var i=0;
    var pos =0;
    for(x of data){
        if(x.id==row){
            pos=i;
        }
        i++;
    }
    data.splice(pos,1);
    sumar();
}
function cantidad(row){
    var canti=parseFloat(prompt("Nueva cantidad"));
    data[row].cantidad=canti;
    data[row].total=data[row].cantidad*data [row].precio;
    var filaid=document.getElementById("row"+row);
    celda=filaid.getElementsByTagName('td');
    celda[3].innerHTML=canti;
    celda[4].innerHTML=data[row].total;
    sumar();
}