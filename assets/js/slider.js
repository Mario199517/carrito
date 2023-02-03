///CONFIGURACION DEL SLIDER
var splide = new Splide( '.splide', {
    perPage: 3,
    rewind : true,        
    breakpoints: {
      640: {
        perPage: 1,
  
      },
      768: {
        perPage: 2,
    
      },
      1024: {
        perPage: 3,
      
      },
    }
  });
  splide.mount();


