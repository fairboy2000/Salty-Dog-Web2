 
    function querystring(key) {
      var re=new RegExp('(?:\\?|&)'+key+'=(.*?)(?=&|$)','gi');
      var r=[], m;
      while ((m=re.exec(document.location.search)) != null) r.push(m[1]);
      return r;
    }
    function basename(str) {
      var base = new String(str).substring(str.lastIndexOf('/') + 1);
      if(base.lastIndexOf(".") != -1) {
        base = base.substring(0, base.lastIndexOf("."));
      }
      return base;
    }
    function updateQueryStringParameter(uri, key, value) {
      var re = new RegExp("([?|&])" + key + "=.*?(&|$)", "i");
      separator = uri.indexOf('?') !== -1 ? "&" : "?";
      var url = window.location.href;
      if (uri.match(re)) {
        url = uri.replace(re, '$1' + key + "=" + value + '$2');
      }
      else {
        url = uri + separator + key + "=" + value;
      }
      return url;
    }
    $(document).ready(function() {
      $('button[data-viewport-width]').on('click', function(e) {
        if($(this).attr('data-viewport-width') == '100%') {
          newWidth = '100%';
        }else{
          newWidth = $(this).attr('data-viewport-width');
        }
        if($(this).attr('data-viewport-height') == '100%') {
          newHeight = '100%';
        }else{
          newHeight = $(this).attr('data-viewport-height');
        }
        $('button[data-viewport-width]').removeClass('active');
        $(this).addClass('active');
        // $('#resizerFrame').stop().animate({'max-width': newWidth, 'max-height': newHeight}, 200);
        $('#resizerFrame').css({'max-width': newWidth, 'max-height': newHeight});
        e.preventDefault();
        return false;
      });
      $('button.rotate').on('click', function(e) {
        $(this).toggleClass('landscape');
        $('button[data-rotate=true]').each(function() {
          $(this).toggleClass('landscape');
          width = $(this).attr('data-viewport-width');
          height = $(this).attr('data-viewport-height');
          // shuffle values
          $(this).attr('data-viewport-width', height);
          $(this).attr('data-viewport-height', width);
          if($(this).hasClass('active')) {
            $(this).trigger('click');
          }
        });
      });
      $('#closeResizer').on('click', function(e) {
        newWidth = $(window).width();
        newHeight = $(window).height();
        $('button[data-viewport-width]').removeClass('active');
        // $('#resizerFrame').stop().animate({'max-width': newWidth, 'max-height': newHeight}, 200);
        $('#resizerFrame').css({'max-width': newWidth, 'max-height': newHeight});
        $('#resizer').fadeOut(500, function() {
          document.location = document.getElementById("resizerFrame").contentWindow.location.href;
        });
        e.preventDefault();
        return false;
      });
      if(querystring('url').length > 0) {
        $('#resizerFrame').attr('src',querystring('url'));
      }
      $('#resizerFrame').on('load', function() {
        var url = basename(this.contentWindow.location.href);
        var href = updateQueryStringParameter(document.location.href, 'url', 'docs/'+url);
        var stateObj = { resizer: 'resizer' };
        history.pushState(stateObj, url, href);
      });
    });

    // <!-- google analytics -->
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
      _gaq.push(['_trackPageview']);
  
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  
    