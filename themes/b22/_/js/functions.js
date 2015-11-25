// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

    home_isotope();


});


/* optional triggers

$(window).load(function() {
	
});

*/

$(window).resize(function() {


});

;!(function ($) {
    $.fn.classes = function (callback) {
        var classes = [];
        $.each(this, function (i, v) {
            var splitClassName = v.className.split(/\s+/);
            for (var j in splitClassName) {
                var className = splitClassName[j];
                if (-1 === classes.indexOf(className)) {
                    classes.push(className);
                }
            }
        });
        if ('function' === typeof callback) {
            for (var i in classes) {
                callback(classes[i]);
            }
        }
        return classes;
    };
})(jQuery);


function home_isotope(){


    $("#tax_cloud a.tax_term").bind( "mouseover", function(event) {
        var raw_classList = $(this).attr("class").split(' ');
        classList = $.grep(raw_classList,function(n){ return(n) });
        curr_id = $(this).attr('id');
        $("#tax_cloud a").each(function(){
            if($(this).hasClass(curr_id)){
                $(this).addClass('related');
            }
        });
    });
    $("#tax_cloud a.tax_term").bind( "mouseleave", function(event) {
        $('.related').removeClass('related');
    });

    if($('#home-posts').length){

        $('#home-posts').imagesLoaded(function(){
        
            // home isotope
            var $iso_container = $('#home-posts');   

            $iso_container.isotope({
                itemSelector: '.home-post',
                layoutMode:'masonry',
    //          sortBy : 'random',
    //          masonry: {
    //              columnWidth: 240
    //          }

            });                

            $("#tax_cloud a.tax_term").bind( "click", function(event) {
                event.preventDefault();
                var filterValue = '.'+$(this).attr('id');
                console.log('filter '+filterValue);
                $iso_container.isotope({ filter: filterValue });
            });
            $("#tax_cloud a.view_all").bind( "click", function(event) {
                event.preventDefault();
                $iso_container.isotope({ filter: '*' });
            });

        });

    }




    

}