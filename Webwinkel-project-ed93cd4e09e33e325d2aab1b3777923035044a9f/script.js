$('.knoppen').each( function() {
    var knop = $(this);
    var knopOn = knop.find('li.actief');
    var link = knopOn.find('a');
    var tabOn = $(link.attr('href'));
    
    knop.on('click', 'a', function(e) {
        e.preventDefault();
        var link = $(this);
        var selectId = this.hash;
        
        if(selectId && !link.parent().is('.actief')){
            tabOn.removeClass('actief');
            knopOn.removeClass('actief');
            
            tabOn = $(selectId).addClass('actief');
            knopOn= link.parent().addClass('actief');
        }
    })
});



$('.paneel').css('display','none')