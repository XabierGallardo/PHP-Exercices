# Enunciado
Deberán replicar la siguiente sección (es una sección que se debe agregar al integrador front-End) al presionar en el enlace “tickets”.

<p align="center">
    <img src="Final_js_front_2021.png">
</p>

Deberá contener la funcionalidad en Javascript, al momento de presionar el botón “Resumen”, deberá mostrar en la sección “Total a Pagar: $”, el monto correspondiente a la cantidad de tickets a comprar con el descuento correspondiente dependiendo la categoría seleccionada, existen 3 categorías, Estudiante, Trainee, Junior

La entrega será pegando el link de donde está alojado su trabajo, puede ser cualquiera de las siguientes alternativas ftp, servidor gratuito o github.

# Sentencias SQL

## Creacion tabla materos2023
```sql
CREATE TABLE `materos2023`.`oradores` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL , `apellido` VARCHAR(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL , `edad` TINYINT(2) NOT NULL , `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `encuentro` VARCHAR(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL , `tema` VARCHAR(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

## Insercion de oradores
```sql
INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `encuentro`, `tema`) VALUES ('1', 'Alejandrina', 'Arreguez', '25', '2023-11-14 16:48:50', 'Parana', 'Historia');

INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `encuentro`, `tema`) VALUES (NULL, 'Myriam', 'Suarez', '38', '2023-07-21 00:00:00', 'Iguazu', 'Arte')
```

