
Sci = {};

Sci.delete = function (id,Url){
    $.ajax({
        type:'POST',
        url:Url,
        data:{'id':id},
        success: function(data){
            var d = data;
            var e =  2;
            if (d == e) {
             $('#'+id).hide();
            }
                   }
    });
    };

Sci.deletehome = function (id,Url,hide){
    $.ajax({
        type:'POST',
        url:Url,
        data:{'id':id},
        success: function(data){
            var d = data;
            var e =  2;
            if (d == e) {
             $('#'+hide).hide();
            }
                   }
    });
    };


    Sci.deletee = function (type,id,Url){
        $.ajax({
            type:'POST',
            url:Url,
            data:{'id':id},
            success: function(data){
                var d = data;
                var e =  2;
                if (d == e) {
                 $('#'+type).hide();
                }
                       }
        });
        };
    
    
Sci.deleteu = function (id,Url){
    var iud = "u"+id;
    $.ajax({
        type:'POST',
        url:Url,
        data:{'id':id},
        success: function(data){
            let d = data;
            let e =  2;
            if (d == e) {
             $('#'+iud).hide();
            }
            else{
                $('#'+iud).hide();
                setTimeout(() => {
                   $('#'+iud).show();
                             }, 1000);
                }
        }
    });
    };


    // login
