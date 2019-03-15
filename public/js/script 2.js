'use strict';
$(document).ready(function(){
    $(".table-container").hide();
    $(".item__name").click(function(){
        if($(this).val() !== "Seleccionar"){
            $(".table-container").show();
        }
    });
    $("#agregar").click(function(){
        let lista_front =[];
        let form = $("#form-add");
        let articulos = localStorage.getItem(arrayArticulos);
        let data = form.serialize();
        let route = form.attr('action');
        let obj = {
                    nro_folio: $("#id_solicitud").val(),
                    fecha_solicitud: $("#fecha_solicitud").val(),
                    nombre_evento: $("#nombre_evento").val(),
                    lugar: $("#lugar").val(),
                    fecha_inicio_evento: $("#fecha_inicio_evento").val(),
                    hora_inicio_evento: $("#hora_inicio_evento").val(),
                }
                
        lista_front.push(obj); 
        // let token = $("#token").val();
        $.ajax({
                type:"POST",
                url:route,
                dataType:'JSON',
                data: {'articulo':articulos,'obj':JSON.stringify(lista_front)},

                success:function(){
                    $("#alert-success").show();
                },
                error: function(){
                    $("#alert-error").show();
                }
        })
    });
});

/* Aqui empieza el JAVASCRIPT*/

let arrayArticulos = [];
const artContainer= document.querySelector(".artContainer");
const addArticulosDOM = document.querySelectorAll(".item__name");


JSON.parse(localStorage.getItem(arrayArticulos));



addArticulosDOM.forEach(addArticulo =>{
    addArticulo.addEventListener('click',()=>{
        // addArticulo.style.displaynone";
        const articulo__name = addArticulo.value;
        const articulo= {
            nombre: articulo__name,
            cantidad: 1,        
        }

        const isInTable = (arrayArticulos.filter(artItem=>(artItem.nombre === articulo.nombre)).length >0); /* Creamos el filtro para que retorne si el articulo esta en la tabla*/ 
        /* Si el articulo no se encuentra en tabla lo agregamos a la vista en la tabla */
        if(isInTable === false){
            if(!(articulo.nombre==='Seleccionar')){
                artContainer.insertAdjacentHTML('beforeend',
                `
                    <div id="artItems" class="art__item">
                        <h5 class="art__item__nombre">${ articulo.nombre}</h5>
                        <button class="btn btn-warning btn-xs" data-action="decrese_item">&minus;</button>
                        <h5 class="art__item__cantidad">${ articulo.cantidad}</h5>
                        <button class="btn btn-primary btn-xs" data-action="increase_item">&plus;</button>
                        <button class="btn btn-danger btn-xs" data-action="remove_item">&times;</button>
                    </div>
                     
                `
                );
                arrayArticulos.push(articulo); /* Agrego los articulos a un arreglo */

                localStorage.setItem(arrayArticulos,JSON.stringify(arrayArticulos));
                 
                const artItemsDOM = artContainer.querySelectorAll(".art__item");
                    
                artItemsDOM.forEach(artItemDOM=> {
                    if(artItemDOM.querySelector('.art__item__nombre').innerText === articulo.nombre){
                        artItemDOM.querySelector('[data-action="increase_item"]').addEventListener('click',() =>{
                            arrayArticulos.forEach(artItem =>{
                                if(artItem.nombre == articulo.nombre){
                                    ++artItem.cantidad;
                                    artItemDOM.querySelector('.art__item__cantidad').innerText = artItem.cantidad;
                                    localStorage.setItem(arrayArticulos,JSON.stringify(arrayArticulos)); 

                                }
                            });
                        });
                    }
                });

                artItemsDOM.forEach(artItemDOM=> {
                    if(artItemDOM.querySelector('.art__item__nombre').innerText === articulo.nombre){
                        artItemDOM.querySelector('[data-action="decrese_item"]').addEventListener('click',() =>{
                            arrayArticulos.forEach(artItem =>{
                                if(artItem.nombre == articulo.nombre){
                                    if(artItem.cantidad>1){
                                        artItemDOM.querySelector('.art__item__cantidad').innerText = --artItem.cantidad;
                                    }else{
                                        artItemDOM.remove();
                                        arrayArticulos = arrayArticulos.filter(artItem => artItem.nombre != articulo.nombre);
                                        // document.querySelector('.item__name').style.display="block";
                                    }
                                    localStorage.setItem(arrayArticulos,JSON.stringify(arrayArticulos)); 
                                }
                            });
                        });
                    }
                });

                artItemsDOM.forEach(artItemDOM=> {
                    if(artItemDOM.querySelector('.art__item__nombre').innerText === articulo.nombre){
                        artItemDOM.querySelector('[data-action="remove_item"]').addEventListener('click',() =>{
                            arrayArticulos.forEach(artItem =>{
                                if(artItem.nombre == articulo.nombre){
                                    // if(artItem.cantidad<= 0){
                                        artItemDOM.remove();
                                        arrayArticulos = arrayArticulos.filter(artItem => artItem.nombre != articulo.nombre);
                                    // }
                                    localStorage.setItem(arrayArticulos,JSON.stringify(arrayArticulos)); 

                                }
                            });
                        });
                    }
                });
            }
        } 
    });
});





// console.log(addArticulosDOM);

// addArticulosDOM.forEach(addArticuloDOM => {
//     const articulo = addArticuloDOM;

//     var name_articulo = articulo.querySelectorAll(".item__name");
//     console.log(name_articulo);
//     // articulo.addEventListener('click',()=>{
        
//     // })
// });
// addArticulosDOM.forEach((addArticuloDOM) => {
    
//         articuloDOM = (addArticuloDOM.parentNode);
//         // const articulo = {
//         //     nombre_articulo:articuloDOM.querySelector(".item__name").value, 
//         //     cantidad:1,
//         // }
//         console.log(articuloDOM);
//     });
// });


// function addArticulo(){
//     const addArticulosDOM = document.getElementById("btn-articulo").value;
    
// }
