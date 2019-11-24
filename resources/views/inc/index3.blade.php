<style>
	.bgt-dblue{
    background: #1D3557;    
     border: none;
}
.bg-dblue2{
    background: #457B9D;
}
.fa-angle-right{
    transform: rotate(0deg);
    transition: 0.5s
}
.fa-angle-right.actives{
    transform: rotate(90deg);
    transition: 0.5s;
}

#right{
    width: 240px;
    transition: 500ms;
}
#right.trigger{
    display:none;
    transition: 0.5s;
}
#sideTrigger{
    background: #457B9D;
    position: fixed; left: 220px; top: 50px; z-index: 1;
    transition: 0.5s;
}
#sideTrigger.trigger{
    left: 10px;
    transition: 0.5s;
}

@media only screen and (max-width: 640px) {
    #sideTrigger{
    background: #457B9D;
    position: fixed; left: 10px; top: 50px; z-index: 1;
    transition: 0.5s;
    }
    #sideTrigger.trigger{
    left: 220px;
    transition: 0.5s;
    }

  #right {
    display: none;
  }
  #right.trigger{
    display:block;
    width: 240px;
    transition: 0.5s;
    }
    #content{
        display: block;
    }
    #content.trigger{
     display: none;   
    }

}
</style>

    <script>
        $(document).ready(function(){
            $('.sss').click(function(){
                $('.fa-angle-right').toggleClass('actives');
            });
            $('#sideTrigger').click(function(){
                $('#right').toggleClass('trigger');
                $('#sideTrigger').toggleClass('trigger');
                $('#content').toggleClass('trigger');
            })
        })  
    </script>