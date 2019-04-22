window.addEventListener('load', function(){

    var myVar = setInterval(ChangeImgTimer, 5000);
    var cont = 0;
    
    var imgs = ['url(https://images.pexels.com/photos/1068523/pexels-photo-1068523.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)', 
    'url(https://images.pexels.com/photos/1231230/pexels-photo-1231230.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)',
    'url(https://images.pexels.com/photos/1059114/pexels-photo-1059114.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)']; 
    
    function ChangeImgTimer() {
        document.querySelector('.banner').style.WebkitTransition = "all 2s";
        document.querySelector('.banner').style.Transition = "all 2s";
        document.querySelector('.banner').style.backgroundImage = imgs[cont];
    
         cont++;
         if(cont==imgs.length)cont=0;
    }

});