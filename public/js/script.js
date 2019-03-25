/* @author Nicolas Carreño
© 2019
 */

'use strict';

let cart = (JSON.parse(localStorage.getItem('cart')) || []);
const cartDOM = document.querySelector('.cart');
const addToCartButtonsDOM = document.querySelectorAll('[data-action="addToCart"]');
const shopCartButtonDOM = document.querySelector('.shop-cart');


if(cart.length>0){
    cart.forEach(cartItem=>{
        const producto = cartItem;
        insertItemToDOM(producto);
        addToCartButtonsDOM.forEach(addToCartButtonDOM => {
            const productoDOM = addToCartButtonDOM.parentNode;           
                if(productoDOM.querySelector('.producto__nombre').innerText === producto.nombre){
                    handleActionButtons(addToCartButtonDOM,producto);                  
            }
        });
    });
}

addToCartButtonsDOM.forEach(addToCartButtonDOM => {
    addToCartButtonDOM.addEventListener('click',() => {
        const productoDOM = addToCartButtonDOM.parentNode;
        const producto = {
            imagen   : productoDOM.querySelector('.producto__imagen').getAttribute('src'),
            nombre   : productoDOM.querySelector('.producto__nombre').innerText,
            precio   : productoDOM.querySelector('.producto__precio').innerText,
            quantity : 1,
        };
/* 
            ## Comparo cartItem.name => que es lo que se encuentra en el carro con producto.name, lo que quiero agregar
            ## cart.filter(cartItem => (cartItem.name === producto.name)); 
*/
        const isInCart = (cart.filter ( cartItem => (cartItem.nombre === producto.nombre) ).length > 0 );
//          ## Verifica si el producto se encuentra en el carro 
        if(!isInCart){
//          ## Si el producto no se encuentra en el carro lo agrego y lo muestro 
            insertItemToDOM(producto);
//          ## AGREGAMOS NUESTRO PRODUCTO A UNA LISTA QUE CONTIENE TODOS LOS PRODUCTOS AGREGADOS AL CARRO 
            cart.push(producto);
//          ## GUARDO EN LOCAL  
            localStorage.setItem('cart',JSON.stringify(cart));
//          ## MUESTRO LOS PRODUCTOS DEL CARRO DE COMPRAS 
            if (cartDOM.style.display === "none") {
                cartDOM.style.display = "block";
            }
//          ## UTILIZO FUNCION DE EVENTOS DE CLICK 
            handleActionButtons(addToCartButtonDOM,producto); 
        }  
    });
});

    shopCartButtonDOM.addEventListener('click',()=>{
        if (cartDOM.style.display === "none") {
            cartDOM.style.display = "block";
        } else {
            cartDOM.style.display = "none";
        }
    });


    function insertItemToDOM(producto) {
        cartDOM.insertAdjacentHTML('beforeend',`
        <div class="cart__item">
            <img class="cart__item__image" src="${producto.imagen}" alt="${producto.nombre}">
            <h5 class="cart__item__name"> ${producto.nombre} </h5>
            <h5 class="cart__item__price"> ${producto.precio} </h5>
            <a href="#" class="btn btn-sm" data-action="DECRESE_ITEM"><i class="fas fa-minus" style='font-size:24px;color:blue'></i></a>
            <h5 class="cart__item__quantity"> ${producto.quantity} </h5>
            <a href="#" class="btn btn-sm" data-action="INCREASE_ITEM"><i class="fas fa-plus" style='font-size:24px;color:blue'></i></a>
            <a href="#" class="btn btn-sm" data-action="REMOVE_ITEM"><i class="fas fa-times" style='font-size:24px;color:red'></i></a>
        </div>
        `);

        if(document.querySelector('.cart-footer')=== null){
            document.querySelector(".cart-buttons").insertAdjacentHTML('',`
            <div class="cart-footer">
                <button class="btn btn-primary btn-block" id="btnAddList">Agregar a la Lista</button>
                <button class="btn btn-warning btn-block" id="btnCreateList">Crear Lista</button>
            </div>
            `
            );
        }
    }

function handleActionButtons(addToCartButtonDOM,producto){

    addToCartButtonDOM.innerText = "In Cart";
    addToCartButtonDOM.disabled = true;


    const cartItemsDOM = cartDOM.querySelectorAll('.cart__item');

    cartItemsDOM.forEach(cartItemDOM =>{
        cartItemDOM.querySelector('[data-action="INCREASE_ITEM"]').addEventListener('click',() => increaseItem(producto,cartItemDOM));
        cartItemDOM.querySelector('[data-action="DECRESE_ITEM"]').addEventListener('click',() => decreseItem(producto,cartItemDOM,addToCartButtonDOM));
        cartItemDOM.querySelector('[data-action="REMOVE_ITEM"]').addEventListener('click',() => removeItem(producto,cartItemDOM,addToCartButtonDOM));
    });

}

function increaseItem(producto,cartItemDOM){
    cart.forEach(cartItem =>{
        if(cartItem.nombre === producto.nombre){
            cartItemDOM.querySelector('.cart__item__quantity').innerText = ++cartItem.quantity;
            localStorage.setItem('cart',JSON.stringify(cart));
        }
    });
}

function decreseItem(producto,cartItemDOM,addToCartButtonDOM){
    cart.forEach(carstItem =>{
        if(cartItem.nombre === producto.nombre){
            if(cartItem.quantity > 1){
                cartItemDOM.querySelector('.cart__item__quantity').innerText = --cartItem.quantity;
                localStorage.setItem('cart',JSON.stringify(cart));
            }else{
             removeItem(producto,cartItemDOM,addToCartButtonDOM);
        
            }
        }
    });
}

function removeItem(producto,cartItemDOM,addToCartButtonDOM){
    cartItemDOM.remove();
    cart = cart.filter(cartItem => cartItem.nombre !== producto.nombre);
    addToCartButtonDOM.innerText = 'Agregar a la canasta';
    addToCartButtonDOM.disabled = false;
    localStorage.setItem('cart',JSON.stringify(cart));
}


/* ############## AJAX ################# */

$(document).load(function(){});