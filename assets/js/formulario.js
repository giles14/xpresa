        function enviarFormulario(parent, silent = false, strict = false){
                var elementos = parent.closest('form').getElementsByTagName("input");
                var idForm = elementos.getAttribute('id');
                var nombre = elementos.namedItem('nombre').value;
                var mail = encodeURIComponent(elementos.namedItem('email').value);
                var telefono = encodeURIComponent(elementos.namedItem('telefono').value);
                var programa = elementos.namedItem('programa').value;

                console.log(nombre);
                console.log(mail);
                console.log(telefono);
                console.log(programa);
                
                var url = "https://api.redisoft.dev/Leads/web";
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", url);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.onload = function(resp){
                    console.log(xhttp.response);
                    if(xhttp.response == 'duplicated'){
                      Swal.fire({
                        title: '¡Duplicado!',
                        text: 'Tus datos ya se encuentran registrados en nuestro sistema',
                        icon: 'warning',
                        toast: true,
                        timer: 6000,
                        timerProgressBar: true,
                        confirmButtonColor: "green",
                        confirmButtonText: 'Entendido'
                      });
                      
                        console.log("está duplicado");
                    }else {
                      Swal.fire({
                        icon: 'success',
                        title: 'Datos registrados con éxito',
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 6000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      });
                      console.log("se guardó");
                    }

                }
                var data = "nombre="+ nombre +"&correo="+ correo +"&telefono="+ telefono +"&programa="+ programa +"&referencia="+(location).attr('href')+"#"+ idForm +"&charifaz="+ navigator.userAgent +"&adicional=origen:%20"+ origen;
                
                xhttp.send(data);
                return console.log("esperando mensaje")
            }