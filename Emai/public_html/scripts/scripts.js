/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $("#btnBuscar").click(function () {
        var busqueda = $("#buscador").val();
        busqueda = busqueda.replace((new RegExp(' ', 'igm')), "+");
        $.get("https://www.googleapis.com/books/v1/volumes?q=" + busqueda,
                function (data) {
                    console.log(data)

                    $("#resultado  h2").html(data.items[0].volumeInfo.title);
                    $("#resultado  h4").html(data.items[0].volumeInfo.authors);
                
                    $("#resultado  p").html(data.items[0].volumeInfo.description);
                    $("#resultado  img").attr("src", data.items[0].volumeInfo.imageLinks.thumbnail);


                    $("#resultado1  h2").html(data.items[1].volumeInfo.title);
                    $("#resultado1  h4").html(data.items[1].volumeInfo.authors);
              
                    $("#resultado1  p").html(data.items[1].volumeInfo.description);
                    $("#resultado1  img").attr("src", data.items[1].volumeInfo.imageLinks.thumbnail);



                    $("#resultado2  h2").html(data.items[2].volumeInfo.title);
                    $("#resultado2  h4").html(data.items[2].volumeInfo.authors);
                   
                    $("#resultado2  p").html(data.items[2].volumeInfo.description);
                    $("#resultado2  img").attr("src", data.items[2].volumeInfo.imageLinks.thumbnail);

                    $("#resultado3  h2").html(data.items[3].volumeInfo.title);
                    $("#resultado3 h4").html(data.items[3].volumeInfo.authors);
              
                    $("#resultado3  p").html(data.items[3].volumeInfo.description);
                    $("#resultado3  img").attr("src", data.items[3].volumeInfo.imageLinks.thumbnail);

                    $("#resultado4  h2").html(data.items[4].volumeInfo.title);
                    $("#resultado4  h4").html(data.items[4].volumeInfo.authors);
                  
                    $("#resultado4  p").html(data.items[4].volumeInfo.description);
                    $("#resultado4  img").attr("src", data.items[4].volumeInfo.imageLinks.thumbnail);

                    $("#resultado5  h2").html(data.items[5].volumeInfo.title);
                    $("#resultado5  h4").html(data.items[5].volumeInfo.authors);
                   
                    $("#resultado5  p").html(data.items[5].volumeInfo.description);
                    $("#resultado5  img").attr("src", data.items[5].volumeInfo.imageLinks.thumbnail);

                    $("#resultado6  h2").html(data.items[6].volumeInfo.title);
                    $("#resultado6  h4").html(data.items[6].volumeInfo.authors);
                   
                    $("#resultado6  p").html(data.items[6].volumeInfo.description);
                    $("#resultado6  img").attr("src", data.items[6].volumeInfo.imageLinks.thumbnail);

                    $("#resultado7  h2").html(data.items[7].volumeInfo.title);
                    $("#resultado7  h4").html(data.items[7].volumeInfo.authors);
                   
                    $("#resultado7  p").html(data.items[7].volumeInfo.description);
                    $("#resultado7  img").attr("src", data.items[7].volumeInfo.imageLinks.thumbnail);

                    $("#resultado8  h2").html(data.items[8].volumeInfo.title);
                    $("#resultado8  h4").html(data.items[8].volumeInfo.authors);
                   
                    $("#resultado8  p").html(data.items[8].volumeInfo.description);
                    $("#resultado8  img").attr("src", data.items[8].volumeInfo.imageLinks.thumbnail);

                    $("#resultado9  h2").html(data.items[9].volumeInfo.title);
                    $("#resultado9  h4").html(data.items[9].volumeInfo.authors);
                   
                    $("#resultado9  p").html(data.items[9].volumeInfo.description);
                    $("#resultado9  img").attr("src", data.items[9].volumeInfo.imageLinks.thumbnail);

                });
    });
});

