    <!-- Base JavaScript -->
    <script src="assets/js/base/jquery.min.js"></script>
    <script src="assets/js/base/smoothscroll.js"></script>
    <script src="assets/js/base/jquery.form.js"></script>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap/bootstrap.js"></script>

    <!-- JQuery UI Tabs JavaScript -->
    <script src="assets/js/base/jquery-ui.js"></script>
	
    <!-- Bootstrap Form Helpers -->
    <link href="assets/js/bootstrap-form-helpers/bootstrap-formhelpers.js"></script>
    <link href="assets/js/bootstrap-form-helpers/bootstrap-formhelpers-colorpicker.js"></script>    
    <link href="assets/js/bootstrap-form-helpers/bootstrap-formhelpers-datepicker.js"></script>

    <!-- Base JavaScript -->
    <script src="assets/js/base/offcanvas.js"></script>
    <script src="assets/js/base/scripts.js"></script>

    <!-- PACE JavaScript -->
    <script src="assets/js/pace/pace.min.js"></script>

    <!-- InstaClick JavaScript -->
    <script src="assets/js/instantclick/instantclick.min.js" data-no-instant></script>

    <!-- InstaClick Initialization-->
    <script data-no-instant>
        InstantClick.init();
    </script>

    <!-- WOW JavaScript -->
    <script src="assets/js/wow/wow.js"></script>

    <!-- WOW Initialization-->
    <script>
        new WOW().init();
    </script>

    <!-- Fade In Javascript -->
    <script>
        $(document).ready(function(){
            $("body").hide(0).delay(100).fadeIn(1000)
        });
    </script>
    
    <!-- Username Checking -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#user_username").keyup(function (e) {
                $(this).val($(this).val().replace(/\s/g, ''));
                var username = $(this).val();
                if(username.length < 1){$("#status").html('');return;}
                if(username.length >= 1){
                    $("#status").html('<img src="assets/img/ajax-loader.gif" />');
                    $.post('components/check-username-availability.php', {'user_username':username}, function(data) {
                      $("#status").html(data);
                    });
                }
            });	
        });
    </script>  

    <!-- Image Rotation -->
    <script type="text/javascript"> 
        var totalCount = 5;
        function ChangeIt() {
            var num =  Math.ceil( Math.random() * totalCount );
            document.body.background = 'assets/img/backgrounds/background'+num+'.jpg';
            document.body.style.backgroundRepeat = "repeat";
        }
    </script> 

    <!-- Search Form -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".search").keyup(function() {
                var search = $(this).val();
                var dataString = 'searchword='+ search;
                if(search==''){
                }
                else{
                    $.ajax({
                        type: "POST",
                        url: "components/search.php",
                        data: dataString,
                        cache: false,
                        success: function(html){
                            $("#display").html(html).show();
                        }
                    });
                }return false;    
            });
        });
        jQuery(function($){
           $("#search").Watermark("Search");
       });
    </script>

    <!-- Closing the Search Form when clicked outside it -->
    <script type="text/javascript">
        $(document).mouseup(function (e){
            var container = $("#display");
            if (!container.is(e.target) && container.has(e.target).length === 0){
                container.hide();
            }
        });
    </script>

