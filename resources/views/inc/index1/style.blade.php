    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');

        *{
            user-select: none;
                 }
        .fm1{
            font-family: 'Montserrat', sans-serif;
        }
        .fm2{
            font-family: 'Kaushan Script', cursive;
        }
        
        .tc1{
            color: #819ba2;
        }
        .bgg-primary{
            background: #FF611E;  
            /*background: #C759FF;  */
            /*background: linear-gradient(to right, #F9166D, #C759FF, #C759FF); */
        }   
        .bgg-primary2{
            background: #CDEDF6;  
/*            background: #F9C022;  
            background: linear-gradient(to right, #C759FF, #C759FF, #F9C022); */
        }
        .bgg-primary3{
            background: #F9C022;  
            background: linear-gradient(to right, #F9166D, #C759FF, #C759FF); 
        }
        .bg-danger1{
            background: #F9166D;

        }


        #buttonHome{
            position: absolute;
            bottom: 300px; 
            left: 10em; 
            background: #D5CAD6;
        }
        #buttonHome{
            transition: 0.5s ease-in-out;
            left: 10px
        }

        #buttonHome #iconHome{
            transform: rotate(0deg);
            transition:0.5s
        }
        #buttonHome.active #iconHome{
            transform: rotate(360deg);   
            transition:0.5s;
        }

        #buttonHome.active{
            
            transition: 0.5s ease-in-out;
            left: 20px
        }
        #isiButtonHome{
            display: none;
        }

        #isiButtonHome.active{
            display: block;
        }   

        #isiButtonHome.active .icon-home:nth-child(1){
              transition: 1s;
              animation-delay: 0s;
        }
        #isiButtonHome.active .icon-home:nth-child(2){
              transition: 1.4s;
              animation-delay: 0.2s;
        }
        #isiButtonHome.active .icon-home:nth-child(3){
              transition: 1.8s;
              animation-delay: 0.4s;
        }
    </style>

    <script>
        $('#buttonTimes').hide();
        $(document).ready(function(){
            $('#buttonHome').click(function(){
                $(this).toggleClass('active');
                $('#isiButtonHome').toggleClass('active');
            });
        })  
    </script>