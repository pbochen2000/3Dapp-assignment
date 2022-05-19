

//CONTENT SWAPPING FOR SPA ENVIRONMENT//
function swap(selected)
{

	document.getElementById('home').style.display = 'none';
	document.getElementById('coke').style.display = 'none';
	document.getElementById('sprite').style.display = 'none';
    document.getElementById('popblitz').style.display = 'none';
    document.getElementById('captainapple').style.display = 'none';
    document.getElementById('wireframe').style.display = 'none';
	
    document.getElementById(selected).style.display = 'block';

}

//CHANGE BACKGROUND COLOUR//
function changeLook()
{   
    //SELECT THE ELEMENT BY ITS HTML TAG//
    var elem = document.getElementById('boxes');
    //CHANGE BACKGROUND COLOUR//
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    //ASSIGN RANDOM COLOUR TO THE ELEMENT//
    elem.body.style.backgroundColor = "#"+ randomColor;
	

}

//COUNT UP VARIABLE UTILISES AN AJAX $_GET TYPE TO SEND THE VALUE WHICH MUST BE UPDATED IN THE//
//SQLI DATABASE, THIS VALUE IS DERIVED FROM THE CURRENT NUMBER IN THE OUTPUT ELEMENT//
function countUp(vote)
{   
    //POPBLITZ//
    if ( vote == 'popblitz' || vote instanceof String){
        if (document.getElementById('result-votes-pop').innerHTML){
            var counter = parseInt(document.getElementById('result-votes-pop').innerHTML);
        }
        else {
            var counter = 0;
        }

        //INCREMENTS THE VOTE BY ONE//
        counter += 1;

        //AJAX $_GET WITH THIS NUMBER IS SENT TO THE updateData.php file TO UPDATE THE DATABASE//
        $.ajax({  
            type: 'GET',  
            url: 'https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/updateData.php', 
            data: {pop: counter},
            success: function(response) {
                //alert("SUCCESS");
                console.log("SENT");   
            }, error:function(err){
                //alert("FAIL");
            }
        });
        //RETURNS THE OUTPUT INTO THE HTML ELEMENT//
        document.getElementById('result-votes-pop').innerHTML = counter;
    }
    //CAPTAIN APPLE//
    if ( vote == 'captainapple' || vote instanceof String){
        if (document.getElementById('result-votes-captain').innerHTML){
            var counter = parseInt(document.getElementById('result-votes-captain').innerHTML);
        }
        else {
            var counter = 0;
        }
        //INCREMENTS THE VOTE BY ONE//
        counter += 1;
        //AJAX $_GET WITH THIS NUMBER IS SENT TO THE updateData.php file TO UPDATE THE DATABASE//
        $.ajax({  
            type: 'GET',  
            url: 'https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/updateData.php', 
            data: {captain: counter},
            success: function(response) {
                //alert("SUCCESS");
            }, error:function(err){
                //alert("FAIL");
            }
        });
        //RETURNS THE OUTPUT INTO THE HTML ELEMENT//
        document.getElementById('result-votes-captain').innerHTML = counter;
    }
    //GRAPEBLAST//
    if ( vote == 'grapeblast' || vote instanceof String){
        if (document.getElementById('result-votes-grape').innerHTML){
            var counter = parseInt(document.getElementById('result-votes-grape').innerHTML);
        }
        else {
            var counter = 0;
        }
        //INCREMENTS THE VOTE BY ONE//
        counter += 1;
        //AJAX $_GET WITH THIS NUMBER IS SENT TO THE updateData.php file TO UPDATE THE DATABASE//
        $.ajax({  
            type: 'GET',  
            url: 'https://users.sussex.ac.uk/~pb339/3dapp/assignment/application/model/updateData.php', 
            data: {grape: counter},
            success: function(response) {
                //alert("SUCCESS");
            }, error:function(err){
                //alert("FAIL");
            }
        });
        //RETURNS THE OUTPUT INTO THE HTML ELEMENT//
        document.getElementById('result-votes-grape').innerHTML = counter;
    }
}

//CHANGES THE RELATIVE CAMERA VIEW OF THE MODEL ACCORDING TO THE VIEW AND MODEL WHICH IS BEING VIEWED//
function changeView(side, id)
{
    if (id == 'home'){
        var elem = document.getElementById("myViewer_home");
    }
    else if (id == 'captainapple') {
        var elem = document.getElementById("myViewer_captainapple");
    }
    else if (id == 'popblitz') {
        var elem = document.getElementById("myViewer_popblitz");
    }
    else if (id == 'wireframe') {
        var elem = document.getElementById("myViewer_wireframe");
    }
    if(side == 'left') {
        elem.setAttribute("auto-rotate-delay", 190000);
        elem.setAttribute("camera-orbit", "0deg 90deg 2.5m");
    }
    else if (side == 'front') {
        elem.setAttribute("auto-rotate-delay", 190000);
        elem.setAttribute("camera-orbit", "90deg 90deg 2.5m");
    }
    else if (side == 'back') {
        elem.setAttribute("auto-rotate-delay", 190000);
        elem.setAttribute("camera-orbit", "270deg 90deg 2.5m");
    }
    else if (side == 'right') {
        elem.setAttribute("auto-rotate-delay", 190000);
        elem.setAttribute("camera-orbit", "180deg 90deg 2.5m");
    }
     // console.log(elem.getAttribute('camera-orbit'));
}

//INITIATES THE auto-rotate FUNCTION OF THE model-viewer PACKAGE BY INCREASING ITS
//auto-rotate-delay VALUES//
function autoRotate(id)
{
    if (id == 'home'){
        var elem = document.getElementById("myViewer_home");
        elem.setAttribute("auto-rotate-delay", 1000);
    }
    else if (id == 'captainapple') {
        var elem = document.getElementById("myViewer_captainapple");
        elem.setAttribute("auto-rotate-delay", 1000);
    }
    else if (id == 'popblitz') {
        var elem = document.getElementById("myViewer_popblitz");
        elem.setAttribute("auto-rotate-delay", 1000);
    }
    else if (id == 'wireframe') {
        var elem = document.getElementById("myViewer_wireframe");
        elem.setAttribute("auto-rotate-delay", 1000);
    }
}

//STOPS AUTO ROTATE AND OTHER ANIMATIONS//
function stopAutoRotate(id)
{
    if (id == 'home'){
        var elem = document.getElementById("myViewer_home");
        elem.setAttribute("auto-rotate-delay", 180000);
        elem.setAttribute("camera-orbit", "90deg 90deg 2.5m");
    }
    else if (id == 'captainapple') {
        var elem = document.getElementById("myViewer_captainapple");
        elem.setAttribute("auto-rotate-delay", 180000);
        elem.setAttribute("camera-orbit", "90deg 90deg 2.5m");
    }
    else if (id == 'popblitz') {
        var elem = document.getElementById("myViewer_popblitz");
        elem.setAttribute("auto-rotate-delay", 180000);
        elem.setAttribute("camera-orbit", "90deg 90deg 2.5m");
    }
    else if (id == 'wireframe') {
        var elem = document.getElementById("myViewer_wireframe");
        elem.setAttribute("auto-rotate-delay", 180000);
        elem.setAttribute("camera-orbit", "90deg 90deg 2.5m");
    }
}

//THIS CAMERA ANGLE PANS ACROSS THE ENTIRE LABEL OF THE BOTTLE//
function labelViewer(id){
    if (id == 'home'){
        var elem = document.getElementById("myViewer_home");
        elem.setAttribute("camera-orbit", "90deg 90deg 0.5m");
        elem.setAttribute("auto-rotate-delay", 0);
        elem.setAttribute("150%")
    }
    else if (id == 'captainapple') {
        var elem = document.getElementById("myViewer_captainapple");
        elem.setAttribute("auto-rotate-delay", 0);
        elem.setAttribute("camera-orbit", "90deg 90deg 0.5m");
        elem.setAttribute("150%")
    }
    else if (id == 'popblitz') {
        var elem = document.getElementById("myViewer_popblitz");
        elem.setAttribute("auto-rotate-delay", 0);
        elem.setAttribute("camera-orbit", "90deg 90deg 0.5m");
        elem.setAttribute("150%")
    }
    else if (id == 'wireframe') {
        var elem = document.getElementById("myViewer_wireframe");
        elem.setAttribute("auto-rotate-delay", 0);
        elem.setAttribute("camera-orbit", "90deg 90deg 2.5m");
        elem.setAttribute("150%")
    }
}

//THIS FUNCTION MAPS THE MOVEMENT OF THE MODEL TO THE DOWNWARDS SCROLLING OF THE
//USER (window-scroll-y)
function scrollViewer(id){
    if (id == 'home'){
        var elem = document.getElementById("myViewer_home");
        elem.setAttribute("camera-orbit", "calc(-1.5rad + env(window-scroll-y) * 7rad) calc(0deg + env(window-scroll-y) * 290deg) calc(5m - env(window-scroll-y) * 1.5m)");

    }
    else if (id == 'captainapple') {
        var elem = document.getElementById("myViewer_captainapple");
        elem.setAttribute("camera-orbit", "calc(-1.5rad + env(window-scroll-y) * 7rad) calc(0deg + env(window-scroll-y) * 290deg) calc(5m - env(window-scroll-y) * 1.5m)");
    }
    else if (id == 'popblitz') {
        var elem = document.getElementById("myViewer_popblitz");
        elem.setAttribute("camera-orbit", "calc(-1.5rad + env(window-scroll-y) * 7rad) calc(0deg + env(window-scroll-y) * 290deg) calc(5m - env(window-scroll-y) * 1.5m)");
    }
    else if (id == 'wireframe') {
        var elem = document.getElementById("myViewer_wireframe");
        elem.setAttribute("camera-orbit", "calc(-1.5rad + env(window-scroll-y) * 7rad) calc(0deg + env(window-scroll-y) * 290deg) calc(5m - env(window-scroll-y) * 1.5m)");
    }
}

function changeColor(newColor) {
    var elem = document.getElementById("para1");
    elem.style.color = newColor;
}