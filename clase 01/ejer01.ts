let msj : string = "el numero es ";

if(parOInpar(2))
{
    console.log(msj+"par");

}
else
{
    console.log(msj+"impar");

}





function parOInpar(numero:number):boolean
{

    let flag:boolean = numero%2 === 0 ? true : false  

    return flag;
}

