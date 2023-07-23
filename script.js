function Largestofthree(){
  let n1=document.getElementById("num1").value;
  let n2=document.getElementById("num2").value;
  let n3=document.getElementById("num3").value;

  if(isNaN(n1)||isNaN(n2)||isNaN(n3)){
    document.getElementById("res").innerHTML="invalid input";
  }
  else{
    if(n1>n2){
      if(n1>n3){
        document.getElementById("res").innerHTML="largest="+n1;
      }
      else{
        document.getElementById("res").innerHTML="largest="+n3;
      }
    }
    else if(n2>n3){
      document.getElementById("res").innerHTML="largest="+n2;
    }else{
      document.getElementById("res").innerHTML="largest="+n3;
    }
  }
}