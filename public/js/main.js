const menu_icon = document.getElementsByClassName("menu-icon")[0];
const menu = document.getElementsByClassName("navigation-menu")[0];
const html = document.getElementsByTagName('html')[0];

function changeIcon() {
    menu_icon.classList.toggle("change");
    menu.classList.toggle('visible');
    html.classList.toggle('no-scroll');
}

function searchFunction(){
    let input = document.getElementsByClassName("js--search-box")[0];
    let filter = input.value.toUpperCase();
    let card_wrapper = document.getElementsByClassName("card-wrapper")[0];
    let links = card_wrapper.getElementsByTagName("li");
    
    for (let i = 0; i < links.length; i++) {
        let card = links[i].getElementsByClassName("js--gridCard__body__title")[0];
        let txtValue = card.textContent || card.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            links[i].style.display = "";
        } else {
            links[i].style.display = "none";
        }
    }
}

if (window.location.href == "http://127.0.0.1:8000/"){
    let checkbox_available = document.getElementById('available');
    let checkbox_unavailable = document.getElementById('unavailable');
    let checkbox_returning = document.getElementById('returning');
    let list_of_products = document.getElementsByTagName('li');
    
    checkbox_available.checked = true;
    checkbox_unavailable.checked = true;
    checkbox_returning.checked = true;
    
    for(let i = 0; i < list_of_products.length; i++){
        list_of_products[i].style.display = '';
    }
    
    checkbox_available.addEventListener('change', function(){
        if(checkbox_available.checked){
            for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].dataset.productStatus == 'Available'){
                    list_of_products[i].style.display = '';       
                }  
            }
        } 
        else {
            for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].dataset.productStatus == 'Available'){
                    list_of_products[i].style.display = 'none';       
                }  
            }
        }
    });
    
    checkbox_unavailable.addEventListener('change', function(){
        if(checkbox_unavailable.checked){
            for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].dataset.productStatus == 'Unavailable'){
                    list_of_products[i].style.display = '';       
                }  
            }
        } 
        else {
            for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].dataset.productStatus == 'Unavailable'){
                    list_of_products[i].style.display = 'none';       
                }  
            }
        }
    });

    checkbox_returning.addEventListener('change', function(){
        if(checkbox_returning.checked){
            for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].dataset.productStatus == 'Returning'){
                    list_of_products[i].style.display = '';       
                }  
            }
        } 
        else {
            for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].dataset.productStatus == 'Returning'){
                    list_of_products[i].style.display = 'none';       
                }  
            }
        }
    });
}
