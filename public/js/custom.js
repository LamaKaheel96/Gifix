$(document).ready(function() {
    // CallBack, Assign Primitive Value
    var query = '';
    loadGIF(query);
    // Click Event To Fetching Data
    $('.search_btn').on('click', function (e) {
        e.preventDefault();
        var input_value = $('.search_query').val();
        if(input_value.length > 0){
            loadGIF(input_value);
            $('.search_query').val('');
        } else {
            emptyInput();
        }
    });

    // Click Event On KeyPress "Enter"
    $('.search_query').on('keypress', function(e) {
        var input_value = $(this).val();
        if(e.which == 13){
            if(input_value.length > 0){
                loadGIF(input_value);
                $(this).val('');
            } else {
                emptyInput();
            }
        }
    })
    // Alerts
    function emptyInput() {
        swal({
            title: "An Error!",
            text: "Please Fill Input Before Click On Button!",
            icon: 'error'
        });
    }
    // load GIFs Randomly
    function loadGIF(query) {
        var text = 'Top Trending';
        if(query.length > 0){
            text = ' '+'"'+query+'"';
            var url = 'https://api.giphy.com/v1/gifs/search?api_key=ydl3p6Er2MuBanRSJ3Mx3Sx9URDlGgW6&q='+ query +'&limit=16&offset=0&rating=g&lang=en'
        } else {
            var url = 'https://api.giphy.com/v1/gifs/trending?api_key=ydl3p6Er2MuBanRSJ3Mx3Sx9URDlGgW6&limit=16&rating=pg';
        }
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                html +='<div class="col-md-12 text-center mt-4 mb-4"><h2>'+text+' GIFs</h2></div>';
                for(i = 0; i < data.data.length; i++) {
                    html += '<div class="col-xlg-3 col-md-3 col-12 mb-30">' +
                                '<div class="top-report">' +
                                    '<div class="content">' +
                                        '<img src="'+ data.data[i].images.downsized.url +'" alt="'+ data.data[i].title +'" />' +
                                    '</div>' +
                                '</div>' +
                            '</div>'
                }
                $('#renderTrending').fadeIn(1000).html(html);
            }
        })
    }
})
