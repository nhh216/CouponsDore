<script>
    $( function() {

        $("#typeahead_01").autocomplete({
            source: 'http://magiamgia.vip/autocomplete',
            select: function (event,ui) {
                window.location.href = ui.item.url;
            }
        }).data("ui-autocomplete")._renderItem = function (ul,item) {
            var root = '{{asset('/')}}';
            var inner_html = '<a style="display: inline-flex; width: 100%;" href="'+root+'/store/'+item.slug+'"><div><img width="85" height="55" src="'+root+item.logo +'" ></div><div  style="margin-left: 15px"  class="content"><div style="height: 50%; margin: auto; " class="title"><b>'+item.name+'</b></div><div style="height: 50%;">185 Coupons</div></div></a>'
            return $( "<li class='li-search'></li>" )
                .data("item.autocomplete",item)
                .append(inner_html)
                .appendTo(ul);
        }
    } );
</script>
