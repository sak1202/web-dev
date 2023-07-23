
function add(){
    let a=document.getElementById("num1").value;
    let  b=document.getElementById("num2").value;
    let c=Number(a)+Number(b);
    document.getElementById("result").innerHTML=c;
}
function sub(){
    let a=document.getElementById("num1").value;
    let  b=document.getElementById("num2").value;
    let c=a-b;
    document.getElementById("result").innerHTML=c;
}
function mul(){
    let a=document.getElementById("num1").value;
    let  b=document.getElementById("num2").value;
    let c=a*b;
    document.getElementById("result").innerHTML=c;
}
function div(){
    let a=document.getElementById("num1").value;
    let  b=document.getElementById("num2").value;
    
        let c="a/b";
        let r=eval(c);
        document.getElementById("result").innerHTML=r;
    
}