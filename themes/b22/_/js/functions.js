// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

    home_isotope();


});


/*
//FILTER ANIMATION 1

    $('#tax_cloud a.tax_term').click(function(){
        $("#tax_cloud").addClass("cloud_filter", 400);
    } );

    // Click "All Projects" to remove "margin_10" class from #tag_cloud

    $('#navbar li.current_page_item a').click(function(){
        $("#tax_cloud").removeClass("cloud_filter");
    } );

// END


// FILTER ANIMATION 2

    $('#tax_cloud a.tax_term').click(function(){
        $("#tax_cloud").animate({'marginTop' : "-=5%" });
        $("#tax_cloud").animate({'marginBottom' : "-=5%" });
    });

    $('#navbar li.current_page_item a').click(function(){
        $("#tax_cloud").animate({'marginBottom' : "+=5%" });
        $("#tax_cloud").animate({'marginTop' : "+=5%" });
    });

// END


// FILTER ANIMATION 3

    $("#tax_cloud a.tax_term").click(function(event){
        $('html, body').animate({scrollTop: '+=500px'}, 800);
    });

// END
*/


// FILTER ANIMATION 4

    $("#tax_cloud a.tax_term").click(function(event){
        $('html,body').animate({
            scrollTop: $("#home-posts").offset().top + (-106)},
            500, 'swing');
    });

    $("#navbar li.current_page_item a").click(function(event){
        $('html,body').animate({
            scrollTop: (0)},
            500, 'swing');
    });

// END




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
        years = [ '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017' ];
        $("#tax_cloud a").each(function(){
            
            int_curr_id = $(this).attr('id');            
            curr_id_first_4 = int_curr_id.substring(0, 4);
            
            its_year = $.inArray(curr_id_first_4, years) > -1;
                        
            if(!its_year && $(this).hasClass(curr_id)){
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
            if($('body.lang_en').length){
                var all_string = "All ";
            }else{
                var all_string = "Tutti i ";
            }
            $("#tax_cloud a.tax_term").bind( "click", function(event) {
                event.preventDefault();
                var filterValue = '.'+$(this).attr('id');
                console.log('filter '+filterValue);
                $iso_container.isotope({ filter: filterValue });
                if(!$('#navbar li.current_page_item a').hasClass('remove_filters')){
                    $('#navbar li.current_page_item a').prepend(all_string);
                    $('#navbar li.current_page_item a').addClass('remove_filters');
                }
            });
        //    $("#tax_cloud a.view_all").bind( "click", function(event) {
        //        event.preventDefault();
        //        $iso_container.isotope({ filter: '*' });
        //    });

            $('#navbar li.current_page_item a').bind( "click", function(event) {
                event.preventDefault();
                if($(this).hasClass('remove_filters')){
                    $iso_container.isotope({ filter: '*' });
                    $(this).removeClass('remove_filters');
                    var projects_li_text = $(this).text();
                    var projects_li_text_clean = projects_li_text.replace(all_string,'');
                    $(this).html(projects_li_text_clean);
                }
            });

        });

    }
}

//////////////////////////////  SCROLL TO TOP  //////////////////////////////

        $(document).ready(function () {

        $(window).scroll(function () {
            if ($(this).scrollTop() > 1200) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });

//////////////////////////////       END       //////////////////////////////