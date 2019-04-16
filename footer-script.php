
<script type="text/javascript" src="js/app.js"></script>
<script>
    new WOW().init();
    $(".button-collapse").sideNav();
</script>
<style>
    .nav-show{
        top:0px;
    }
     nav{transition: top 400ms ease 0s;}
    .nav-hide {top: -60px;}
    </style>
<script src="js/owner.js" type="text/javascript"></script>
    <script>
    var a;
    var b = 0;

    $(window).scroll(function(event){
       a = true;
    });

    setInterval(function() {
       if (a) {
            c();
            a = false;
       }
    }, 1);

    function c() {
       var st = $(this).scrollTop();
       if(Math.abs(b - st) <= 1)
            return;
            if (st > b && st > $('nav').outerHeight()){
            // Scroll Down
            $('nav').removeClass('nav-show').addClass('nav-hide');
       } else {
            if(st + $(window).height() < $(document).height()) {
                $('nav').removeClass('nav-hide').addClass('nav-show');
            }
       }

       b = st;
    }

</script>