(function(){
    $(function () {
        new filters($('.filters'));
    })
    var filters = function (obj){
        var _obj = obj,
        _selectCat = _obj.find('#prop-catg'),
        _data = {
            _token: $('#csrf-token')[0].content,
            category: 0,
            subcat: '',
            total_count: 0,
            page: 1,
            limit: 6,
            index: 0,
        },
        
        view_more = _obj.find('.view-more-estate')
        var url_data = _getUrl(_data);
        view_more.css('display', 'none');
        view_more.click(function(){
            if(is_more) {
                _sendrequest(_data)
            }
            
        })
        
        _selectCat.on({
            'change': function () {
                _reset(_data);
                _getUrl(_data);
                console.log(_data);
                _data['category'] = $(this).val();
                _sendrequest(_data)
            },
        })

        _sendrequest(_data)
    }
    var _reset = function(_data){
        _data['category'] = 0;
        _data['subcat'] = '';
        _data['total_count'] = 0;
        _data['page'] = 1;
        _data['limit'] = 6;
        _data['index'] = 0;

        return _data
    }
    var _getUrl = function(_data) {
        var url = window.location.href;
        var parts = url.split('/');
        var lastPart = parts.pop();

        // console.log(lastPart);
        if (lastPart.match(/[0-9]+/)){
            _data['category'] = lastPart
        }
        else {
            _data['subcat'] = lastPart
            // _data['category'] = lastPart
        }
        return _data;
    }
    var _sendrequest = function(_data){
        console.log('data===========', _data);
        if (_data['index'] == 0) {
           $('.projects-list-widgets').html('');
        }
        $.post('http://localhost:8000/getproject', _data , function(response) {
            if(response.status){
                var estates = response.projects;
                var count = response.count;
                is_more(_data, count);
                showEstates(estates, count , _data, function() {})
            }
        });
    }
    var is_more = function(_data, count){
        var view_more = $('.view-more-estate')
        _data['total_count'] = count;

        if(_data['total_count'] > _data['page'] * _data['limit']){
            _data['index'] = (_data['page'] * _data['limit']);
            _data['page'] = _data['page'] + 1;
            view_more.removeAttr("style");
            return true;
        }
        return false;
    }
    var showEstates = function showEstates(estates, count, _data, callback) {
        for(var i = 0; i < estates.length; i++){
            showEstate(estates[i], count);
        }
        callback();
    }
    var showEstate = function showEstate(estate, count) {
        var $cntPropertyBlock = $(".clone-data .project-list-widget").clone();
        $cntPropertyBlock.attr('id' , 'cntPropertyBlock_' + estate.id);
        var title = estate.title;
        var address = estate.address;
        var price = estate.price;
        var cat = estate.prime_category;
        $('.property-title h3' , $cntPropertyBlock).html(title);
        $('.property-title p' , $cntPropertyBlock).html(address);
        $('.project-list-footer .price span' , $cntPropertyBlock).html(price);
        $('.project-list-footer .link' , $cntPropertyBlock).attr('href', '/project/'+cat+'/'+estate.id);
        $('.projects-list-widgets').append($cntPropertyBlock);
        
        // $(".clone-data .project-list-widget").clone().appendTo(".projects-list-widgets");
    }

})();