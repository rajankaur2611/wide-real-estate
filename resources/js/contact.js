(function(){
    $(function () {
        new contactSubmit($('#contact'));
    })
    var contactSubmit = function contactSubmit(obj) {
        var self = obj,
            _inputs = self.find('input'),
            _textarea = self.find('textarea'),
            _button = self.find('button');
    
        _button.on({
          click: function click() {
            _validateForm($(this).parent().parent().attr('id'));
            return false;
          }
        });
        
        function _validateForm(_form, _parent) {
            $('#' + _form).find("input[name='_token']").attr('id', _form + '__token').addClass('valid');
    
            var _forms = $('#' + _form),
              form_data = _forms.serializeArray();
            var _error_free = true;
    
            for (var input in form_data) {
                
                var element = $("#" + _form + "_" + form_data[input]['name']),
                    valid = element.hasClass("valid");
                    //validspan = element.next("span");
        
                if (!valid) {
                element.removeClass("valid").addClass("invalid");
                // validspan.removeClass("valid").addClass("invalid");
        
                if (element.attr('type') == 'hidden') {
                    element.parent().removeClass("valid").addClass("invalid");
                }
        
                _error_free = false;
                } else {
                    console.log(element);
                    element.removeClass("invalid").addClass("valid");
                    // validspan.removeClass("invalid").addClass("valid");
                }
            }
    
          if (!_error_free) {
            event.preventDefault();
            console.log('form_data===',element);
            console.log('error');
          } else {
            console.log('hi===');
            // _button.attr('disabled', true);
            // _forms.find('.loader').addClass('active');
            $.ajax({
                type: 'POST',
                url: _forms.attr('action'),
                data: _forms.serializeArray(),
                success: function success(data) {
                    console.log('submit===', data);
                   

                    // _forms[0].reset();

                    // _forms.find('.loader').removeClass('active');

                    // _button.attr('disabled', false);

                    // $('input').removeClass('valid');
                    // $('textarea').removeClass('valid');

                    // if (datas.status == 'success') {
                    //     _forms.find('.success').fadeIn(1000).fadeOut(3000);

                    //     window.location.href = datas.url;
                    // } else if (datas.status == 'recaptcha_error') {
                    //     _forms.find('.recaptcha').fadeIn(1000).fadeOut(5000);

                    //     _scrollToError(_forms, _forms.find('.recaptcha'));
                    // } else {
                    //     _forms.find('.error').fadeIn(1000).fadeOut(5000);

                    //     _scrollToError(_forms, _forms.find('.error'));
                    // }
                },
                error: function error(data) {
                // _forms.find('.loader').removeClass('active');

                // _button.attr('disabled', false);

                // _forms.find('.error').fadeIn(1000).fadeOut(5000);

                // _scrollToError(_forms);
                }
            });
              
          }
    
          return false;
        };
    
        _inputs.on({
          input: function input() {
            var regx = '';
    
            if ($(this).attr('type') == 'number' || $(this).attr('type') == 'email') {
              if ($(this).attr('type') == 'number') regx = /^[\+]?[(]?[0-9]{1,3}[)]?[-\s\.]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
              if ($(this).attr('type') == 'email') regx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
              _checkValidations($(this), regx);
            
            } else {
              _checkValue($(this));
            }
          }
        });
    
        _textarea.on({
            input: function input() {
                console.log('hi');
                _checkValue($(this));
            }
        });
    
        function _checkValidations(elem, regx) {
          var is_number = regx.test(elem.val()),
              is_empty = elem.val();
    
            if (is_empty) {
                if (is_number) {
                    elem.removeClass("invalid").addClass("valid");
                } else {
                    elem.removeClass("valid").addClass("invalid");
                }
            } else {
                elem.removeClass("valid").addClass("invalid");
            }
        };
    
        function _checkValue(elem) {
            var is_val = elem.val();
            if (is_val) {
                elem.removeClass("invalid").addClass("valid");
            } else {
                elem.removeClass("valid").addClass("invalid");
            }
        };
    
        
      };
})();