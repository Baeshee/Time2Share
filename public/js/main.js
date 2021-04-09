const menu_icon = document.getElementsByClassName("menu-icon")[0];
const menu = document.getElementsByClassName("navigation-menu")[0];
let back_link = document.getElementsByClassName("back-link");
const html = document.getElementsByTagName('html')[0];

function changeIcon() {
    menu_icon.classList.toggle("change");
    menu.classList.toggle('visible');
    html.classList.toggle('no-scroll');
    for(let i = 0; i < back_link.length; i++){
        back_link[i].classList.toggle('link-visible');
    }
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
    const select = document.getElementsByClassName('filter-section__select')[0];
    let card_wrapper = document.getElementsByClassName("card-wrapper")[0];
    let list_of_products = card_wrapper.getElementsByTagName('li');
    let select_value;
    for(let i = 0; i < list_of_products.length; i++){
        list_of_products[i].style.display = '';
    }

    select.addEventListener('change', function(){
        select_value = select.value;
        if(select_value == 'All'){
            for(let i = 0; i < list_of_products.length; i++){
                    list_of_products[i].style.display = '';       
                }  
            }
        else {
            for(let i = 0; i < list_of_products.length; i++){
                    if (list_of_products[i].dataset.productCategory == select_value){
                        list_of_products[i].style.display = '';
                    }     
                    else {
                        list_of_products[i].style.display = 'none'; 
                    } 
                }  
            }
    });
}