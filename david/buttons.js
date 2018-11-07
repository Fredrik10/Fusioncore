

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
function myFuktion(){
    document.getElementById("demo").innerHTML = "My name is Fredrik, I am soon to be 18 years of age so I can make my own life long decisions about what I want in life. Me and my own sibling David we were born in Sweden but my parents and other relatives came to this country as foreigners and now must of them are sticence. What interest me the most in school is math, physics and obviously P.E. But what I enjoy to do on my spare time is to play some PS4, watch a movie/TV-show and spend time with my loved ones";
    document.getElementById("demo2").innerHTML ="<button onclick='myFunction()'>About Alex</button>"
    document.getElementById("demo3").innerHTML = "<button onclick='myFunk()'>About David</button>"
}
  function myFunction(){
      document.getElementById("demo2").innerHTML = "My name is Alex, I am already 19 years of age, I was born in the land where vikings existed a long time ago. I was born in Sweden and it’s here I grew up with my family and also my two sisters. What I am interested in has had my attention since my childhood and that’s pokemon other interests are animation and modeling (game characters).";
      document.getElementById("demo").innerHTML = "<button onclick='myFuktion()'>About Fredrik</button>"
      document.getElementById("demo3").innerHTML = "<button onclick='myFunk()'>About David</button>"
    }
  function myFunk(){
    document.getElementById("demo3").innerHTML = "My name is David I am 18 years of age, I come from the country of Bolivia, a small country in south america. I can speak Swedish, Spanish, English fluently and I have moved to Sweden with my parents. What interest me the most what my own hobbies are, I am a gamer that usually likes to play horror games and shooter games. If I could spend the whole day in bed...I would.";
    document.getElementById("demo2").innerHTML ="<button onclick='myFunction()'>About Alex</button>"
    document.getElementById("demo").innerHTML = "<button onclick='myFuktion()'>About Fredrik</button>"
}