// JavaScript source code

//adding jquery Library
var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

$(document).ready(function () {
    //nav Menu Toggling in Mobile
    if ($("body").width() < 651) {
        $("ul[name = 'navMenu']").hide();
    };

    $(".navIcon").click(function () {

        $("ul[name='navMenu']").animate({
            width: ["toggle"],
            opacity: "toggle"
        }, 350, "linear");


    });

    //contact form toggling
    $(".contactForm").hide();

    $("#cToggle").click(function () {


        $(".contactForm").animate({
            height: ["toggle"],
            opacity: "toggle"
        }, 350, "linear");
    });

    
})


var roomno = document.getElementsByName("rooms").value;
console.log(roomno);

//slider

var slideIndex = 1;
showSlides(slideIndex);

let timer = setInterval(autoSlide, 8000);
function autoSlide() {
	slideIndex += 1;
    showSlides(slideIndex);
}

function plusSlides(n){
    slideIndex += n;
    showSlides(slideIndex);
}

function currentSlide(n){
    slideIndex=n;
    showSlides(slideIndex);
    resetTimer()
}

function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}


function showSlides(n){
    var i;
    var slides=document.getElementsByClassName("mySlides");
    var dots= document.getElementsByClassName("dot");
    if (n> slides.length){ slideIndex=1}
    if (n<1) {slideIndex = slides.length}

    for (i=0; i<slides.length;i++){
        slides[i].style.display = "none";
    }

    for (i=0; i<dots.length;i++){
        dots[i].className=dots[i].className.replace(' active',"");
    }

    slides[slideIndex-1].style.display="block";
    dots[slideIndex-1].className += " active";

}
//days and night counter

function dayscounter(){
    var from=document.getElementById("res_from").value;
    var to=document.getElementById("res_to").value;
    var date_from = new Date(from);
    var date_to = new Date(to);

    tdate_from=date_from.getTime();
    tdate_to=date_to.getTime();

    var today = new Date();
    ttoday=today.getTime();

    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    todaydate =yyyy +'-'+ mm +'-'+dd;

    if(today>date_from){
        document.getElementById("res_from").value = todaydate;
        tdate_from = ttoday;
    }
    if(today>date_to){
        document.getElementById("res_to").value = todaydate;
        tdate_to=ttoday;
    }


    var days=document.getElementById("dayscounter");

    if(date_from != "" && date_to != "" && date_to>=date_from){
        var diff_time = tdate_to - tdate_from;
        var diff_days = diff_time / (1000*3600*24);
        
        days.innerHTML= "You are Booking " + (diff_days+1) + " days and " + diff_days + " nights.";
    }
    else if(date_to<=date_from){
        days.innerHTML= "<span id='dayserror'><span id='red'><em>Error:</span> Booking End Date cannot be before the Booking Start Date.<em></span>";
    }
    else{
        days.innerHTML="";
    }
}

//reservation form room type field generation

function roomtypegen(){
    var no = document.getElementById("rooms").value;
    var divroom = document.getElementById("roomfield");
        divroom.innerHTML= "";
        for(var i=0; i<no;i++){
            divroom.innerHTML += '<div class="rfield">' +
                                     '<label for="room'+(i+1)+'type">Room '+(i+1)+' type:</label>'+
                                     '<select name="room'+ (i+1) + 'type">'+
                                         '<option selected>Guest Room</option>'+
                                         '<option>Terrace Suite</option>'+
                                         '<option>Executive Suite</option>'+
                                         '<option>Regal Suite</option>'+
                                         '<option>Grand Suite</option>'+
                                       '</select>'+
                                  '</div>';
        }

}
