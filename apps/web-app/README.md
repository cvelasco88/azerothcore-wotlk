<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 - Azeroth Core</h1>
    <br>
</p>


Este proyecto permite trabajar con la base de datos de AzerothCore, importar y exportar datos, así como crear y editar los existentes en la base de datos.

El proyecto pretende ser el punto de partida del que expandir nuevas funcionalidades de manera senzilla, sirviendo como ejemplo con los modelos y controladores existentes.

Contenido
-------

    docker              Cambios en docker-compose
    web                 Apartados y funcionalidades de la web
    gii                 Generación de modelos, controladores y vistas
    idiomas             Cambios para dar soporte a los idiomas
    importar            Como importar datos a partir de archivo DBC
    exportar            Como exportar datos a archivo DBC
    problemas           Problemas actuales
    notas               Información adicional
    license             Licencia y atribución
      

Docker
-------
Se ha modificado el archivo de `docker-compose.yml` para incluir un contenedor backend basado en Yii2 y un contenedor para phpMyAdmin


Web
-------
Contiene en la pàgina principal con los elementos más relevantes accesibles directamente.
En la cabecera podemos regresar a la `Home` para ver el listado de elementos existentes, podemos visualizar los archivos dbc para importar y, el selector de idioma.

- El listado de elementos existentes son índices de elementos que se pueden consultar de la base de datos grácias a que se han generado los modelos de Yii2 para tal finalidad
- En Client Files aparecen los archivos `.dbc` existentes que hay en una carpeta específica del proyecto. Los elementos importables apa


Gii
-------
Esta funcionalidad es un módulo/extensión de Yii2 y permite crear modelos en base a las tablas de la base de datos.
Utilizando estos modelos podemos visualizar, crear, modificar o eliminar registros de sus correspondientes tablas de la base de datos.
Grácias a tener estos modelos, podemos realizar una lectura de archivos `.dbc` y cargar sus datos para así hacer una importació o, una lectura de datos de la base de datos y mediante estos modelos y una clase auxiliar la exportación a archivo `.dbc`.


Idiomas
-------
En base a los idiomas existentes en las tablas generadas para el mundo de AzerothCore se pueden extrapolar los idiomas soportados.
Mediante una senzilla implementación en `LanguageSelector` y la utilización de cookies se puede utilizar en el sistema el idioma deseado.
Una vez selecionado un idioma esto repercute en el sistema de traducción de Yii2 (ver documentación oficial) y en la visualización de datos que dependan del idioma como "nombre", "descripción", etc. así como en la exportación de datos.
En el proyecto existen generados archivos para cada uno de los idiomas en la ruta `@app/messages`. Esto puede ser verificado por uno de los valores mostrados en la cabezera de la web que muestra el idioma via traducción.

Existen varios metodos en la clase `DbcLanguage` para obtener los idiomas utilizables y conversiones entre valores. Por ejemplo para la nomenclatura utilizada por el videjuego y la requerida en la pàgina web.


Importar
-------
Para importar datos se necesita que el archivo esté localizado en el directorio `@app/data`. Cuando se accede a la opción de `Client Files` se listan todos los archivos dipositados en esta carpeta. De los listados, solo se muestran como enlace (para realizar la lectura del archivo) aquellos que esten definidos en el archivo `DbcDefinition`.
En esta clase se realiza la correlación entre nombre de archivo y modelo Yii2 a utilizar.
El controlador encargado de la importación es el `ClientDbcController` y la clase encargada de realizar el procesado del archivo es `DbcReader`. En estos se pueden acabar de realizar ajustes para que encaje con el resultado deseado.

Cuando visualizamos uno de estos archivos podemos hacer una previsualización de los datos utilizando paginación y, grácias a esto solo se realiza la lectura de aquellos registros que se vayan a mostrar, optimizando en gran medida el procesado del archivo.

En esta vista de previsualización se puede realizar una validación prévia de los datos o una importación de estos, ambos por grupos (batches) de registros de manera que sea soportable para el sistema, realizando un consumo de memoria razonable para dicho fin.
Durante la validación o importación aparece una barra de progreso que refleja la cantidad y porcentaje de elementos procesados. La logica JS de estas acciones estan en el archivo `client-dbc-ajax-functions`.


Exportar
-------
Para exportar datos hay que acceder a uno de los listados (índices) de registros disponibles. En la vista del listado de elementos existe un botón de exportar con el texto "Export", creado a partir de un widget mediante la clase `DbcExportView`.

Si se presiona el botón aparece un mensaje de confirmación que si se acepta comenzará el proceso de crear un nuevo archivo en el directorio `@app/data`. 

Es necesario tener definido la correlación entre clase y nombre de archivo a generar para que se pueda realizar la exportación, de otro modo se producirá un error. El nombre de archivo a guardar ha de estar definido en la clase `DbcDefinition`.

El controlador encargado de la exportación es el `ClientDbcController` y la clase encargada de realizar el procesado del archivo es `DbcWriter`. En estos se pueden acabar de realizar ajustes para que encaje con el resultado deseado.

Durante la exportación el idioma seleccionado puede afectar a los datos exportados. En casos en los que existan campos con traducciones como "nombre", "descripción", etc. el idioma dejará valor únicamente al que corresponda con el idioma utilizado y el resto de valores traducibles se ignorarán (exportados como valor Nulo).

Durante la exportación aparece una barra de progreso que refleja la cantidad y porcentaje de elementos procesados. La logica JS de estas acciones estan en la clase `DbcExportView` y el archivo `client-dbc-ajax-functions`.


Problemas
-------
El orden de las columnas de en las tablas generadas por AzerothCore no coincide con el real. El archivo `Spell.dbc`, del paquete de idiomas de `Español (España)` al ser importado hace que los valores de nombres y descripciones esten en las de otro idioma.
Esto se puede resolver teniendo en la base de datos el orden de las columnas del mismo modo que son utilizados en el juego real y, generando los modelos mediante Gii para que todo coincida con lo esperado al procesar el archivos. Del mismo modo la implementación del `DbcReader` y `DbcWriter` permiten realizar ciertos ajustes, pero en casos con grandes volumenes de datos como `SpellDbc` implica un mayor consumo de memoria, mayor complejidad y perdida de rendimiento.


Enlaces
-------

Documentación original de [Yii 2 README](README_Yii2.md)

Documentación oficial de [Gii](https://www.yiiframework.com/doc/guide/2.0/es/start-gii)

Notas
-------
`Youtube:` [https://www.youtube.com/@cvelasco88](https://www.youtube.com/@cvelasco88)

## Licencia

Este proyecto está licenciado bajo la [Licencia Creative Commons Atribución 4.0 Internacional](https://creativecommons.org/licenses/by/4.0/).

### Atribución

Si haces un fork o utilizas este proyecto como base para tu propio trabajo, debes mantener la siguiente información:

- Autor original: [Carlos Velasco](https://github.com/cvelasco88)
- Repositorio fuente: [https://github.com/cvelasco88/azerothcore-wotlk](https://github.com/cvelasco88/azerothcore-wotlk)
