//creo array de imágenes
array_imagen = new Array(2)
array_imagen[0] = new Image(905,333)
array_imagen[0].src = "images/DSC_0038.JPG"
array_imagen[1] = new Image(905,333)
array_imagen[1].src = "images/DSC_0040.JPG"
array_imagen[2] = new Image(905,333)
array_imagen[2].src = "images/DSC_0097.JPG"
array_imagen[3] = new Image(905,333)
array_imagen[3].src = "images/DSC_0117.JPG"
//creo el array de URLs
array_url = new Array(4)
array_url[0] = "#"
array_url[1] = "#"
array_url[2] = "#"
array_url[3] = "#"
//variable para llevar la cuenta de la imagen siguiente
contador = 0;
//función para rotar el banner
function alternar_banner(){
    window.document["banner"].src = array_imagen[contador].src
    window.document.links[0].href = array_url[contador]
    contador ++
    contador = contador % array_imagen.length
    setTimeout("alternar_banner()",3000)
}
