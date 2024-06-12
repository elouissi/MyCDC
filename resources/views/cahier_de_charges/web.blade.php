@extends('dashboard')
@section('content')

<style>
    #form{
        background: #fff;
        margin: 100px auto;
        width: 70%;
        padding: 15px 40px 40px 40px;
    }
    .tab p{
        font-size: 20px;
        margin: 0 0 10px 0;
    }
    input   {
        margin: 10px 0;
        padding: 10px;
        width: 100%;
        font-size: 17px;
        border: 1px solid #aaa;
        box-sizing: border-box;
    }
      textarea{
        margin: 10px 0;
        padding: 10px;
        width: 100%;
        font-size: 17px;
        border: 1px solid #aaa;
        box-sizing: border-box;
    }
    .index-btn-wrapper {
            display: flex;
            justify-content: flex-end; /* Align button to the right */
        }
    .index-btn{
        margin: 20px 15px 0 0;
        background: #5F58BF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        font-size: 17px;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 10px;
    }
    .index-btn:hover{
       opacity: 0.8;
    }
    .step{
        display: inline-block;
        height: 30px;
        width: 30px;
        background: #5F58BF;
        color: white;
        border-radius: 50%;
        line-height: 30px;
        margin: 0 2px;
        opacity: 0.25;
    }
    .active {
            
            opacity: 1;
        }
</style>
        <form  action="" method="POST" autocomplete="off" id="form" >
            <h1 align = center > Créer un cahier des charges </h1>

            <div align = center style="display: flex; gap:20px;">
                <span class="step" id="step-1">1</span><p>Présentation de l'entreprise</p> >
                <span class="step" id="step-2" >2</span><p>objectif du site</p> >
                <span class="step" id="step-3" >3</span><p>analyse de l'existant</p> >
                <span class="step" id="step-4" >4</span><p>confirmation</p>
                
            </div>
                <div class="tab" id="tab-1">
                    <p>Présentation de l'entreprise:</p>
                    <input type="text" placeholder="Havet digitale" name="Nom_de_l'entreprise">
                    <input type="email" placeholder="XXXX@XX.XX" name="email">
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(1,2)" >Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <p>objectif du site:</p>
                    <input type="phone" placeholder="+000 000 000" name="phone">
                    <input type="text" placeholder="Personne à contacter" name="email">
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(2,1)">Previous</div>
                        <div class="index-btn" onclick="run(2,3)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-3">
                    <p>analyse de l'existant:</p>
                    <textarea   placeholder="c'est que vous voulez" name="texte"></textarea>
                    <input type="text" placeholder="Personne à contacter" name="email">
                    <div class="index-btn-wrapper">
                        <div class="index-btn"onclick="run(3,2)">Previous</div>
                        <div class="index-btn"onclick="run(3,4)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-4">
                    <p>confirmation:</p>
    
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(4,3)">Previous</div>
                        <button class="index-btn" type="submit" style="background-color: green;" >Submit</button>
                    </div>
                </div>

        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script>
           $(".tab").css("display","none") 
           $("#tab-1").css("display","block")

           function run(hideTab, showTab){
           


            if(hideTab < showTab){
                var curentTab = 0;
         

            x = $("#tab-"+hideTab);
            y = $(x).find("input");

              for(i=0;i< y.length;i++){
                if(y[i].value == ""){
                    
                     $(y[i]).css({    "border-color": "#ff5555"  });
                    return false;
                }
             }
            }

            
            for(i = 1; i< showTab; i++){
                $("#step-"+i).css("opacity","1")
            }

        

            $("#tab-"+hideTab).css("display","none");
            $("#tab-"+showTab).css("display","block");
            $("input").css("backgraound","#fff");

            

           }

        </script>
 
@endsection