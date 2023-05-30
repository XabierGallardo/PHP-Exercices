// Crear 3 objetos literales distintos con atributos y metodos
const loro = {

    color: "Verde",
    edad: 9,
    origen: "Brasil",

    comer: function () {
        console.log("Comiendo semillas");
    },

    beber: function () {
        console.log("Bebiendo agua");
    },

    dormir: function (horas) {
        console.log("Durmiendo " + horas + " horas");
    }
}

console.log("El loro es de color " + loro.color);
console.log("El loro tiene " + loro.edad);
console.log("El loro es de " + loro.origen);
loro.comer();
loro.beber();
loro.dormir(8);




const bicicleta = {

    color: "Naranja",
    rodado: 28,
    origen: "Argentina",

    rodar: function () {
        console.log("Rodando!");
    },

    girar: function (grados) {
        console.log("Girando " + grados + " grados!");
    },

    frenar: function () {
        console.log("Frenando!");
    }
}

console.log("La bici es de color " + bicicleta.color);
console.log("La bici tiene rodado " + bicicleta.edad);
console.log("La bici es de " + bicicleta.origen);
bicicleta.rodar();
bicicleta.girar(90);
bicicleta.frenar();



const planta = {

    tipo: "Chamadorea",
    tamano: 15,
    hojas: true,

    regar: function(segundos) {
        console.log("Regando " + segundos + " segundos");
    }
}

console.log("La planta es de tipo " + planta.tipo);
console.log("La planta mide " + planta.tamano + " cm");
console.log("La planta tiene hojas? " + planta.hojas);
planta.regar(10);