let lado1 = parseInt (prompt('primeiro lado'))
let lado2 = parseInt (prompt('segundo lado'))
let lado3 = parseInt (prompt('terceiro lado'))
switch (true){
    case (lado1 === lado2 && lado2 === lado3):
      console.log("Equilatero");
      break;
    case (lado1 === lado2 && lado2 === lado3 && lado1 === lado3):
       console.log("isosceles");
       break;
       default:
         console.log("Escaleno") ;
}