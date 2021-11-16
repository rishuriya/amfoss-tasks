function store(){
    localStorage.setItem("Task", "8");
    //document.getElementById("demo").innerHTML = localStorage.getItem("Task");
}
function time(){
    var today=new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    alert(time);
    //document.getElementById("demo").innerHTML = localStorage.getItem("Time");
}
function bg(){
    document.body.style.backgroundImage = "url('js/bg.jpg')";
}
function refresh(){
    window.location.reload();
}
function newp(){
    window.open("","_blank");
}
function con(){
    var n=1;
    while(n>0)
    console.log("I did it"+'\n');
}