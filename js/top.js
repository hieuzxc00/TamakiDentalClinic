// DOCUMENT READY
$(document).ready(function() {
    "use strict";
    if ($('.idx-list-case01').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=2',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case01').append(items);
                });
            }
        });
    }
    if ($('.idx-list-case02').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=3',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case02').append(items);
                });
            }
        });
    }
    if ($('.idx-list-case03').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=4',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case03').append(items);
                });
            }
        });
    }
    if ($('.idx-list-case04').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=5',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case04').append(items);
                });
            }
        });
    }
    if ($('.idx-list-case05').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=7',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case05').append(items);
                });
            }
        });
    }
    if ($('.idx-list-case06').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=6',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case06').append(items);
                });
            }
        });
    }
    if ($('.idx-list-case07').length) {
        $.ajax({
            url: 'blog/_custom/?limit=10&cat=1',
            dataType: 'jsonp',
            success: function(json) {
                $.each(json.data, function(i, val) {
                    var dateFormatted = val.date.replace('.', '/').replace('.', '/');
                    var items =
                        '<li>' +
                        '<a href="blog/' + val.url + '">' +
                        '<span class="date">' + dateFormatted + '</span>' +
                        '<span class="ttl">' + val.title + '</span>' +
                        '</a>' +
                        '</li>'
                    $('.idx-list-case07').append(items);
                });
            }
        });
    }
});


// WINDOW LOAD
$(window).bind('load', function() {
    "use strict";
    // SLIDER
    if ($('.idx-slider').length > 0) {
        $('.idx-slider').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            centerMode: false,
            centerPadding: 0,
            pauseOnHover: false,
            fade: true,
            variableWidth: false,
            asNavFor: '.idx-slider02'
        });
    }
    if ($('.idx-slider02').length > 0) {
        $('.idx-slider02').slick({
            asNavFor: '.idx-slider',
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            centerMode: false,
            centerPadding: 0,
            pauseOnHover: false,
            fade: true,
            variableWidth: false,
        });
    }
    /*============== END - SLIDER ================*/

    // CONTENT LOAD ANIMATION
    new WOW().init();
    /*============== END - CONTENT LOAD ANIMATION ================*/
});