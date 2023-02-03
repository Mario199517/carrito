//LOADING
setTimeout(() => {
    $('.loading').hide();
}, 1000)


  ///SCRIPT ADD CARRITO
  $('.addcart').click(function(){
    var name  = $(this).attr('data-name'); 
    var idItem  = $(this).attr('data-item'); 
    var idprice = $(this).attr('data-price'); 
    var accion  = 'addcart';

    $.ajax({
        // la URL para la petición
        url : 'app/functions.php',
    
        // la información a enviar
        data : {name : name, idItem : idItem, idprice : idprice, accion : accion },
        type : 'POST',
        success : function(data) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Vehículo agregado',
                showConfirmButton: false,
                timer: 1500
              })
            setTimeout(() => {
                window.location.href = "carrito.php";
              }, 2000) 
           
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        }
    });
  });

  ///SCRIPT ADD CARRITO
  $('.btndteled').click(function(){
    var idItem  = $(this).attr('data-item'); 
    var accion  = 'delete';

    Swal.fire({
        title: 'Esta seguro de eliminar este item?',     
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, deseo eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Item elimando!'        
          )
          $.ajax({
                // la URL para la petición
                url : 'app/functions.php',
            
                // la información a enviar
                data : {idItem : idItem,  accion : accion },
                type : 'POST',
                success : function(data) {
                    setTimeout(() => {
                        location.reload();
                      }, 2000)                    
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                }
            });
        }
      })    
  });

  $('.btn_booking').click(function(){
    let timerInterval
        Swal.fire({
        title: 'Procesando la reserva!',
        html: 'Procesando en <b></b> millisegundos.',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })

    setTimeout(() => {
        Swal.fire({
            title: 'Reserva confirmada',
            showClass: {
              popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
              popup: 'animate__animated animate__fadeOutUp'
            }
          })
    }, 2000)     
  })

  $('.toppage').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.toppage').slideDown(300);
        } else {
            $('.toppage').slideUp(300);
        }
    });

