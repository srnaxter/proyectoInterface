$('#myTab').find('a').click(function (e) {
    e.preventDefault();
    $(this).tab('show')
});

function objetoXHR(){
    if (window.XMLHttpRequest){// El navegador implementa la interfaz XHR de forma nativa
        return new XMLHttpRequest();
    }else if (window.ActiveXObject){ // El navegador no implementa la interfaz XHR de forma nativa
        // Por ejemplo: Internet explorer.
        let versionesIE = ['MsXML2.XMLHTTP.5.0', 'MsXML2.XMLHTTP.4.0',
            'MsXML2.XMLHTTP.3.0', 'MsXML2.XMLHTTP', 'Microsoft.XMLHTTP'];
        for (let i = 0; i < versionesIE.length; i++){
            try{
                /* Se intenta crear el objeto en Internet Explorer comenzando
                en la versión más moderna del objeto hasta la primera versión.
                En el momento que se consiga crear el objeto, saldrá del bucle
                devolviendo el nuevo objeto creado. */

                return new ActiveXObject(versionesIE[i]);
            } catch (errorControlado) {}//Capturamos el error,
        }
    }
    /* Si llegamos aquí es porque el navegador no posee ninguna forma de crear el objeto.
     Emitimos un mensaje de error usando el objeto Error.
     Más información sobre gestión de errores en:
     HTTP://www.javascriptkit.com/javatutors/trycatch2.sHTML
     */
    throw new Error("No se pudo crear el objeto XMLHTTPRequest");
}

function datos1() {
    console.log("ok");
    xhr = new objetoXHR();
    realizallamada();

}

function realizallamada() {
    let web = "datos.php";
    let tipo = "GET";



    if (xhr){
        xhr.open(tipo,web,false);
        xhr.onreadystatechange = function(){
        if (this.readyState ===4 && this.status === 200){
            document.getElementById("resultado").appendChild(document.createTextNode(this.response))
        }
        };

        xhr.send(null);

    }

}

function datos2() {
    console.log("ok");
    xhr = new objetoXHR();
    realizallamada2();

}

function realizallamada2() {
    let web = "datos2.php";
    let tipo = "GET";



    if (xhr){
        xhr.open(tipo,web,false);
        xhr.onreadystatechange = function(){
            if (this.readyState ===4 && this.status === 200){
                document.getElementById("resultado2").appendChild(document.createTextNode(this.response))
            }
        };

        xhr.send(null);

    }

}

function datos3() {
    console.log("ok");
    xhr = new objetoXHR();
    realizallamada3();

}

function realizallamada3() {
    let web = "datos3.php";
    let tipo = "GET";



    if (xhr){
        xhr.open(tipo,web,false);
        xhr.onreadystatechange = function(){
            if (this.readyState ===4 && this.status === 200){
                document.getElementById("resultado3").appendChild(document.createTextNode(this.response))
            }
        };

        xhr.send(null);

    }

}

