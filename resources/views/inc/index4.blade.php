<style>
    .bg-blue4{
        background: #4e34ac;
    }
    .bgg-cyan{
        background: #edf3fe;
        background: -webkit-linear-gradient(to bottom, #edf3fe, #fff); 
        background: linear-gradient(to bottom, #edf3fe, #edf3fe, #fff); 
    }
    .bg-cyan{
        background: #edf3fe;
    }
    .p-08{
        padding: 0.8em;
    }
    .text-purple{
        color: #4e34ac; 
    }
    .border-purple{
        border: 1px #6115cb;
    }
    .text-secondary2{
        color: #c7c7c7;
    }
    #sidebar{
        width: 5em;
         position: absolute; 
        background: #ad7efe;
    }
    #content{
        width: 92%; 
        margin-left: 85px; 
        border-radius: 30px; 
        height: 100%;
    }
    #left-colom{
        border-top-left-radius: 30px; 
        box-shadow: 1px 1px 10px #b8ddca; 
        border-bottom-left-radius: 30px;
    }
    #right-colom{
        border-top-right-radius: 30px; 
        box-shadow: 1px 1px 10px #b8ddca;
    }
    #history{
        border-bottom-right-radius: 30px; 
        box-shadow: 1px 1px 10px #b8ddca;
    }
    .item-side{
        
        
        box-shadow: inset 1px 1px 2px black;
        border-radius: 8px;
    }
     .item-side:nth-child(1){
        top:30vh; 
        left: 20px; 
        position: absolute; 
    }
    .item-side:nth-child(2){
        top:37vh; 
        left: 20px; 
        position: absolute; 
        box-shadow: inset 1px 1px 3px black;
        border-radius: 8px;
    }
    .item-side:nth-child(3){
        top:44vh; 
        left: 20px; 
        position: absolute; 
        box-shadow: inset 1px 1px 3px black;
        border-radius: 8px;
    }
    .item-side:nth-child(4){
        top:51vh; 
        left: 20px; 
        position: absolute; 
        box-shadow: inset 1px 1px 3px black;
        border-radius: 8px;
    }

    .item-side:hover{
        background: #d6dabe;
        color: #4e34ac;
        transition: 0.5s;
    }

    .item-side .text-secondary2:hover{
        color: #4e34ac;
    }
    .item-side-user{
        top:81vh; 
        left: 20px; 
        position: absolute; 
    }
    .tooltip-inner{
         background:#ad7efe;
        color:white;
    }
    .bs-tooltip-auto[x-placement^=right] .arrow::before,
    .bs-tooltip-right .arrow::before {
      border-right-color: #ad7efe; /* Red */
    }
    ul{
        margin-bottom: 20px;
        padding: 0;
        color: #b4bdc5;
    }
    ul li {
        display: inline;
        margin: 10px;
    }

    @media only screen and (max-width: 990px) {
        #sidebar{
            position: fixed;
            left: 0;
            background: #4e34ac;
            height: 90vh;
            /*display: none;*/
            opacity: 0;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            -webkit-animation-name: slideOutLeft;
            animation-name: slideOutLeft;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            transition: 1s;
        }
        #sidebar.active{
            opacity: 1;
            display: block;
            z-index: 1;
            -webkit-animation-name: slideInLeft;
            animation-name: slideInLeft;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
        }
        .item-side{
            position: fixed;
            left: 1000px;   
        }
         .item-side:nth-child(1){
        top:30vh; 
        left: 20px; 
        position: fixed; 
    }
    .item-side:nth-child(2){
        top:37vh; 
        left: 20px; 
        position: fixed; 
        box-shadow: inset 1px 1px 3px black;
        border-radius: 8px;
    }
    .item-side:nth-child(3){
        top:44vh; 
        left: 20px; 
        position: fixed; 
        box-shadow: inset 1px 1px 3px black;
        border-radius: 8px;
    }
    .item-side:nth-child(4){
        top:51vh; 
        left: 20px; 
        position: fixed; 
        box-shadow: inset 1px 1px 3px black;
        border-radius: 8px;
    }

    #content{
        width: 92%; margin-left: 0px; margin: 10px auto; border-radius: 30px; height: 100%;
    }
    #left-colom{
        border-top-right-radius: 30px; 
        box-shadow: 1px 1px 10px #b8ddca; 
        border-bottom-right-radius: 30px;
    }
    #right-colom{
        border-top-left-radius: 30px;
    }
    #history{
     border-bottom-left-radius: 30px;
    }
    #sidebarTrigger:before{
        content:"\f036";
         font-family: FontAwesome;

    }
    #sidebarTrigger{
         transform: rotate(0deg);
         transition:1s ease-in-out;
    }
    #sidebarTrigger.active{
         transform: rotate(360deg);
         transition:1s ease-in-out;
         background: #ad7efe
    }
    #sidebarTrigger.active:before{
        content:"\f00d";
        font-family: FontAwesome;
        transition: 1s;

    }
    #sidebarTrigger.scrolled{
          background-color: #fff !important;
  transition: background-color 200ms linear;
    }
}
</style>


    <script>
        $(document).ready(function(){
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })    
            $('#sidebarTrigger').click(function(){
                $('#sidebar').toggleClass('active');
            })

            $('#sidebarTrigger').click(function(){
                $(this).toggleClass('active');
            })


            if (window.innerWidth < 500){
                console.log(123);
                $('#box-data').slick({
                  dots: true,
                  infinite: true,
                  speed: 300,
                  slidesToShow: 2,
                  centerMode: false,
                  variableWidth: false,
                    autoplay: true,
                autoplaySpeed: 2000
                });  
                $('#box-latest').slick({
                  dots: true,
                  infinite: true,
                  speed: 300,
                  slidesToShow: 1,
                  centerMode: false,
                  variableWidth: false,
                    autoplay: true,
                autoplaySpeed: 2000
                });    
           
            }; 
            
        })
        
    </script>