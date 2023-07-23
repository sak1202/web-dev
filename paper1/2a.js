function add(){
    let a=Number(document.getElementById("num1").value);
    let b=Number(document.getElementById("num2").value);

    let c=a+b;
    console.log(c);
    document.getElementById("result").innerHTML="Answer="+c;
}

        function sub(){
            let a=Number(document.getElementById("num1").value);
            let b=Number(document.getElementById("num2").value);

            let c=a-b;
            document.getElementById("result").innerHTML="Answer="+c;
        }

        function mul(){
            let a=Number(document.getElementById("num1").value);
            let b=Number(document.getElementById("num2").value);

            let c=a*b;
            document.getElementById("result").innerHTML="Answer="+c;
        }
        function div(){
            let a=Number(document.getElementById("num1").value);
            let b=Number(document.getElementById("num2").value);

            if(b!=0){
                let c="a/b";
                let m=eval(c);
            
            document.getElementById("result").innerHTML="Answer="+m;
        }
    }