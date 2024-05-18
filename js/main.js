$(function() {
    $(document).ready(function() {
        $("li").removeClass("liActive");
        var currentUrl = window.location.href;
        // Function to get query parameter value by name
        function getQueryParam(url, param) {
            var params = new URLSearchParams(url.split('?')[1]);
            return params.get(param);
        }
        var vParamValue = getQueryParam(currentUrl, 'v');
        if ( vParamValue !== "" ){
            $("li[id="+vParamValue.toLowerCase()+"]").addClass("liActive");
        }else{
            $("li[id=home]").addClass("liActive");
        }
        
        /*
        $.get('rightSide?v=Home', function(data) {
            $('#rightSide').html('').fadeOut(function() {
                $('#rightSide').html(data).fadeIn();
            });
        });
        
        $(document).on('click', '#how', function() {
            
            $("li[id=how]").addClass("liActive");
            $('#fullscreenModal').modal('hide');
            $.get('rightSide?v=How', function(data) {
                $('#rightSide').html('').fadeOut(function() {
                    $('#rightSide').html(data).fadeIn();
                });
            });
        });
        $(document).on('click', '#home', function() {
            $("li").removeClass("liActive");
            $("li[id=home]").addClass("liActive");
            $('#fullscreenModal').modal('hide');
            $.get('rightSide?v=Home', function(data) {
                $('#rightSide').html('').fadeOut(function() {
                    $('#rightSide').html(data).fadeIn();
                });
            });
        });
        $(document).on('click', '#services', function() {
            $("li").removeClass("liActive");
            $("li[id=services]").addClass("liActive");
            $('#fullscreenModal').modal('hide');
            $.get('rightSide?v=Services', function(data) {
                $('#rightSide').html('').fadeOut(function() {
                    $('#rightSide').html(data).fadeIn();
                });
            });
        });
        $(document).on('click', '#contact', function() {
            $("li").removeClass("liActive");
            $("li[id=contact]").addClass("liActive");
            $('#fullscreenModal').modal('hide');
            $.get('rightSide?v=Contact', function(data) {
                $('#rightSide').html('').fadeOut(function() {
                    $('#rightSide').html(data).fadeIn();
                });
            });
        });
        $(document).on('click', '#privacy', function() {
            $("li").removeClass("liActive");
            $("li[id=privacy]").addClass("liActive");
            $('#fullscreenModal').modal('hide');
            $.get('rightSide?v=Privacy', function(data) {
                $('#rightSide').html('').fadeOut(function() {
                    $('#rightSide').html(data).fadeIn();
                });
            });
        });
        $(document).on('click', '#join', function() {
            $("li").removeClass("liActive");
            $('#fullscreenModal').modal('hide');
            $.get('rightSide?v=Join', function(data) {
                $('#rightSide').html('').fadeOut(function() {
                    $('#rightSide').html(data).fadeIn();
                });
            });
        });
        */
    });
});