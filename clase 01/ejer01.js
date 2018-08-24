"use strict";
var msj = "el numero es ";
if (parOInpar(2)) {
    console.log(msj + "par");
}
else {
    console.log(msj + "impar");
}
function parOInpar(numero) {
    var flag = numero % 2 === 0 ? true : false;
    return flag;
}
//# sourceMappingURL=ejer01.js.map