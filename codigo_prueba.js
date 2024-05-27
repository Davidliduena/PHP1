// 1.	Desarrolle un proceso que intercambie los valores de dos variables diferentes:
// Por ejemplo, si A = 5 y B = 17
// El proceso debe ser capaz de devolver las variables con los valores intercambiados:
// A = 17 y B = 5


//creamos las variables y asgnamos los valores 

let A = 5;
let B = 17;


// Ahora realizaremos las siguentes operaciones 
A = A + B; // Sumamos los valores de A y B y almacenamos el resultado en A, ahora A continee los valores originales de A y B
B = A - B; // Restamos el valor de B del nuevo valor de A y almacenamos el resultado en B pero A no cambia.
A = A - B; // estamos el nuevo valor de B del nuevo valor de A y almacenamos el resultado en A. A ahora contiene el valor original de B

// Resultado
console.log("A =", A); // Debería imprimir A = 17
console.log("B =", B); // Debería imprimir B = 5


//resumen.
// 1-incializamos dos variables y asgnamos los valores correspondiente.
// 2-sumamos A y B y almacenamos en A. A=22
// 3-restamos el valor original de B a A entonces B=5

// sabiendo que A=22
// 4- restamos el nuevo valor de B que es 5 al valor de A que es 22 entonces A=17

// asi de esta manera intercambiamos los valores sin usar algo adicional como lo indica el ejercicio.
