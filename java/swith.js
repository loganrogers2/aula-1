let mes = parseInt (prompt('digite o mês:'))

switch (mes){
      case 12:
      case 1:
      case 2:
        console.log("É um mês de verão")
        break;
      case 3:
      case 4:
      case 5:
         console.log("É um mês de outono")
         break;
      case 6:
      case 7:
      case 8:
         console.log("È um mês de inverno")
         break;
         
         default:
             console.log("digite de 1 A 12 !!!")
}
