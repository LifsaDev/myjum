let src = ['images/alcohol.jpg','images/detegent.jpg','images/fashion.jpg','images/home.jpg','images/phone.jpg','images/shoe.jpg'];

//constants
const img = document.createElement('img');
const dropdown = document.getElementsByClassName('dropdown');

setInterval(function(){
    img.setAttribute('src',src[Math.floor(Math.random()*src.length)]);
    document.querySelector('.categoryresults').appendChild(img);
},5000)


function dropDown(){
    document.getElementById('myDropDown').classList.toggle("show");
}

window.onclick =(e)=>{
    if(!e.target.matches('.dropbtn')){
        var dropdowns = document.getElementsByClassName('dropdown-content');
        var i;
        for(i=0;i<dropdowns.length;i++){
            var openDropDown = dropdowns[i];
            if(openDropDown.classList.contains('show')){
                openDropDown.classList.remove('show')
            }
        }
    }
}
