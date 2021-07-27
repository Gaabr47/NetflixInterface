

document.querySelector(".btn_busca").addEventListener('click', function(){
        document.querySelector('.buscar').classList.add('buscarF')
    })

document.querySelector(".header_info").addEventListener('click', function(){
    document.querySelector('.buscar').classList.remove('buscarF')
})
document.querySelector("main").addEventListener('click', function(){
    document.querySelector('.buscar').classList.remove('buscarF')
})
function ButtonScroll(){
    document.querySelector(".buttons_exclusives").style.display="block"
}

function OutButtonScroll(){
    document.querySelector(".buttons_exclusives").style.display="none"
}

function ButtonScrollTop10(){
    document.querySelector(".buttons_Top10").style.display="block"
}

function OutButtonScrollTop10(){
    document.querySelector(".buttons_Top10").style.display="none"
}



function LscrollTop10(){
    document.querySelector(".top10_box").scrollLeft-=800;
}

function RscrollTop10(){
    document.querySelector(".top10_box").scrollLeft+=800;
}


function Lscroll(){
    document.querySelector(".exclusivos_box").scrollLeft-=500;
}

function Rscroll(){
    document.querySelector(".exclusivos_box").scrollLeft+=500;
}



var LeftScroll = document.querySelectorAll('.leftarrow')

var RightScroll = document.querySelectorAll('.rightarrow')
var scrollBox = document.querySelectorAll('.postagens')

RightScroll.forEach((rolagemRight)=>{
    rolagemRight.addEventListener('click', function(){
        
        scrollBox.forEach((boxScroll)=>{
            boxScroll.addEventListener('click', function(){
                boxScroll.scrollLeft+=250;
                
            }
            )
        })
        
    })
})

LeftScroll.forEach((rolagemLeft)=>{
    rolagemLeft.addEventListener('click', function(){
        scrollBox.forEach((boxScroll)=>{

        boxScroll.addEventListener('click', function(){
            boxScroll.scrollLeft-=250;
        })
        })
        
    })
})


document.addEventListener('scroll', function (){
    if(window.scrollY > 10) {
        
    document.getElementById('navbar_bg').style.backgroundColor="rgba(20,20,20)"
    
}else {
    document.getElementById('navbar_bg').style.backgroundColor="transparent"
}
});




var options = 
{
    animation:true,
};

var element = document.getElementById('buttonT')

var tooltip = new bootstrap.Tooltip(element, options);

