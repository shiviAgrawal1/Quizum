

<body  onkeydown="return (event.keyCode == 154)" onload="noBack();" onkeydown="return (event.keyCode != 116)"
     onpageshow="if (event.persisted) noBack();" onunload="">
      





<!--<script type="text/javascript">
  var i = document.getElementById("idd").value;
  document.getElementsByName("circles")[i-1].className = "active";
</script> -->
<script type="text/javascript">
   window.onload = function () {  
        document.onkeydown = function (e) {  
            return (e.which || e.keyCode) != 116;  
        };  
    }  
  function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
$(document).on("keydown", disableF5);
      window.history.forward();
      window.open ("mywindow","status=1,toolbar=0");
      function noBack() { window.history.forward(); }

      $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });


      document.onkeydown = checkKeycode
    function checkKeycode(e) {
        var keycode;
        if (window.event)
            keycode = window.event.keyCode;
        else if (e)
            keycode = e.which;

        // Mozilla firefox
        if ($.browser.mozilla) {
            if (keycode == 116 ||(e.ctrlKey && keycode == 82)) {
                if (e.preventDefault)
                {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        } 
        else if ($.browser.chrome) {
            if (keycode == 116 ||(e.ctrlKey && keycode == 82)) {
                if (e.preventDefault)
                {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        } 
        // IE
        else if ($.browser.msie) {
            if (keycode == 116 || (window.event.ctrlKey && keycode == 82)) {
                window.event.returnValue = false;
                window.event.keyCode = 0;
                window.status = "Refresh is disabled";
            }
        }
    }

    function goodbye(e) {
    if(!e) e = window.event;
    //e.cancelBubble is supported by IE - this will kill the bubbling process.
    e.cancelBubble = true;
    e.returnValue = 'You sure you want to leave/refresh this page?';
 
    //e.stopPropagation works in Firefox.
    if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }
}
window.onbeforeunload=goodbye;
    </script>