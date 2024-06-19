@extends('dashboard')
@section('content')


 
            <h4 style="    margin-bottom: -45px;" align = center  >
        <span  class="text-muted fw-light" >Créer un CDC Web/</span>Site Vitrine
    </h4>

        <form  action="{{route('create.chatgpt')}}" method="POST"  target="_blank" autocomplete="off" id="form" >
            @csrf
            @method('POST')
         

            <div align = center style="margin-top:20px;display: flex; gap:20px;">
                <span class="step" id="step-1">1</span><p>Présentation <br> de l'entreprise</p> >
                <span class="step" id="step-2" >2</span><p>objectif  du<br> site</p> >
                <span class="step" id="step-3" >3</span><p>analyse de <br>l'existant</p> >
                <span class="step" id="step-4" >4</span><p>analyse de <br>l'existant</p> >
                <span class="step" id="step-5" >5</span><p>analyse de <br>l'existant</p> >
                <span class="step" id="step-6" >6</span><p>confirmation</p>
                
            </div>
            <hr >
                <div class="tab" id="tab-1">
                    <p class="my-4" >Présentation de l'entreprise:</p>
                    <div class="input-group">
                        <div class="input-wrapper">
                        <label for="Nom_de_l'entreprise">Nom de l'entreprise <span style="color: red;" >*</span> </label>
                        <input type="text" placeholder="Havet digitale" name="Nom_de_l'entreprise">
                        </div>
                        <div class="input-wrapper">
                        <label for="phone">phone<span style="color: red;" >*</span> </label>
                        <input type="phone" placeholder="+1 (207) 604-443" name="phone">
                        </div>
                    </div>
                    <div class="input-group">
               
                        <div class="input-wrapper" style=" margin-top:30px;   display: flex; gap: 20px;" >
                            <label for=" ">Avez-vous un site web?<span style="color: red;">*</span></label>
                            <input type="radio" name="demo2" class="demo2 demoyes" id="demo2-a" checked>
                            <label for="demo2-a">Oui</label>

                            <input type="radio" name="demo2" class="demo2 demono" id="demo2-b">
                            <label for="demo2-b">Non</label>
                        </div>
              

                        <div class="input-wrapper">
                        <label for="email">Email<span style="color: red;" >*</span> </label>
                        <input type="email" placeholder="XXXX@XX.XX" name="email">
                        </div>

                    </div>
                    <div id="website-link-container" style="display: none;">
                        <label for="website-link">Lien du site web <span style="color: red;" >*</span> </label>
                        <input type="text" placeholder="URL du site web" id="website-link" name="website-link">
                    </div>
                    <div class="input-group" style="margin-top:20px">
                        <div class="input-wrapper">
                        <label for="Cible">Cible  </label>
                        <input type="text" placeholder="Cible" name="Cible">
                        </div>
                        <div class="input-wrapper">
                        <label for="Personne à contacter">Personne à contacter<span style="color: red;" >*</span> </label>
                        <input type="Personne à contacter"  placeholder="Personne à contacter (nom et prénom)"  name="Personne_contacter">
                        </div>
                    </div>
                    
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(1,2)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <p>objectif du site:</p>
                    <div class="input-group">
                        <div class="input-wrapper">
                        <label for="phone">phone<span style="color: red;" >*</span> </label>
                        <input type="phone" placeholder="+000 000 000" name="phone">
                        </div>
                        <div class="input-wrapper">
                        <label for="email">Email<span style="color: red;" >*</span> </label>
                        <input type="email" placeholder="XXXX@XX.XX" name="email">
                        </div>
                    </div>
                    
                    
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
                    <p>analyse de l'existant:</p>
                    <textarea   placeholder="c'est que vous voulez" name="texte"></textarea>
                    <input type="text" placeholder="Personne à contacter" name="email">
                    <div class="index-btn-wrapper">
                        <div class="index-btn"onclick="run(4,3)">Previous</div>
                        <div class="index-btn"onclick="run(4,5)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-5">
                    <p>analyse de l'existant:</p>
                    <textarea   placeholder="c'est que vous voulez" name="texte"></textarea>
                    <input type="text" placeholder="Personne à contacter" name="email">
                    <div class="index-btn-wrapper">
                        <div class="index-btn"onclick="run(5,4)">Previous</div>
                        <div class="index-btn"onclick="run(5,6)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-6">
                    <p>confirmation:</p>
    
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(6,5)">Previous</div>
                        <button class="index-btn" type="submit" style="background-color: green;" >Submit</button>
                    </div>
                </div>

        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script>
           $(".tab").css("display","none") 
           $("#tab-1").css("display","block")


           function toggleWebsiteLinkInput() {
                if ($('#demo2-a').is(':checked')) {
                    $('#website-link-container').show();
                } else {
                    $('#website-link-container').hide();
                }
            }

            // Add event listeners to the radio buttons
            $('input[name="demo2"]').on('change', toggleWebsiteLinkInput);

            // Initial check to set the correct state on page load
            toggleWebsiteLinkInput();

           function run(hideTab, showTab){ 
                
                if(hideTab < showTab){
                    var curentTab = 0;
         

            x = $("#tab-"+hideTab);
            y = $(x).find("input");

              for(i=0;i< y.length;i++){
                if(y[i].value == ""){
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }else if (y[i].name == "Nom_de_l'entreprise") {
                    var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                    if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                    }
                } else if (y[i].name == "email") {
                    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                    }
                } else if (y[i].name == "phone") {
                    var regex = /^\+\d{1,3} \(\d{3}\) \d{3}-\d{4}$/;
                    if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;}
                }else if (y[i].name == "website-link") {
                    var regex = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
                    if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;}
                }
             }
            }else {  
                for (i = showTab + 1; i <= 6; i++) {
                $("#step-" + i).css("opacity", "0.25");
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