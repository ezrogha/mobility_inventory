$(function(){
    //cycle defaults
    $.fn.cycle.defaults.timeout = 10000;
    $.fn.cycle.defaults.random = true;
    
    
    $('#books').cycle({
        timeout: 2000,//Time before transition
        speed: 200,// time during transition
        pause: true
    });
});

$(function(){
    /*var $books = $('#books');
    var $controls = $('<div id="books-controls"></div>');
    $controls.insertAfter($books);*/
    
    /*$('<button>Pause</button>').click(function(event){
        event.preventDefault();
        $books.cycle('pause');
        $.cookie('cyclePaused', 'y', {path: '/', expires: 7});
    }).button({
        icons: {primary: 'ui-icon-pause'}
    }).appendTo($controls);*/
    /*$('<button>Resume</button>').click(function(event){
        event.preventDefault();
        var $paused = $('ul:paused');
        if($paused.length){
            $books.cycle('resume');
        } else {
            $(this).effect('shake', {
                distance: 10
            });
        }
        $.cookie('cyclePaused', null);
    }).button({
        icons: {primary: 'ui-icon-play'}
    }).appendTo($controls);*/

    $('<div id="slider"></div>').slider({
        min: 0,
        max: $('#books li').length - 1
    }).appendTo($controls);
    
    if($.cookie('cyclePaused')){
        $books.cycle('pause');
    }
   
    $books.hover(function(){
        $('.title').animate({
            backgroundColor: '#eee',
            color: '#000'
        }, 300)
    }, function(){
        $('.title').animate({
            backgroundColor: '#000',
            color: '#fff'
        }, 300)
    })
});

/*$(function(){
    $('h1').click(function(){
        $(this).toggleClass('highlighted', 'slow', 'easeInExpo');
    })
})*/
