@extends('dashboard')
@section('content')


 
            <h4 style="    margin-bottom: -70px;" align = center  >
        <span  class="text-muted fw-light" >Créer un CDC Web/</span>Site Vitrine
    </h4>

        <form  action="{{route('create.chatgpt')}}" method="POST"  target="_blank" autocomplete="off" id="form" >
            @csrf
            @method('POST')
         

            <div align = center style="margin-top:20px;display: flex; gap:20px;">
                <span class="step" id="step-1">1</span><p>Présentation <br> de l'entreprise</p> >
                <span class="step" id="step-2" >2</span><p>objectif  du<br> site</p> >
                <span class="step" id="step-3" >3</span><p>analyse de <br>l'existant</p> >
                <span class="step" id="step-4" >4</span><p>Design et <br>Contenu</p> >
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
                        <input type="phone" placeholder="+1 (207) 604-443" name="Telephone">
                        <input type="text" name="type" value="Web" style="display: none;" name="text">
                        <input type="text" name="site" value="vitrine" style="display: none;" name="text">
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
                        <input type="email" placeholder="XXXX@XX.XX" name="Email">
                        </div>

                    </div>
                    <div id="website-link-container" style="display: none;">
                        <label for="website-link">Lien du site web <span style="color: red;" >*</span> </label>
                        <input type="text" placeholder="URL du site web" id="website-link" name="Site_web_de_l'entreprise">
                    </div>
                    <div class="input-group" style="margin-top:20px">
                        <div class="input-wrapper">
                        <label for="Cible">Cible  </label>
                        <input type="text" placeholder="Cible" name="Cible">
                        </div>
                        <div class="input-wrapper">
                        <label for="Personne à contacter">Personne à contacter<span style="color: red;" >*</span> </label>
                        <input type="Personne à contacter"  placeholder="Personne à contacter (nom et prénom)"  name="Personne_a_contacter">
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
                    <label for="langue">Language<span style="color: red;" >*</span> </label>                    
                    <select name="languages[]" id="languages"  multiple>
                         
                        <option value="francais">francais</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Allemand">Allemand</option>
                        <option value="Espagnole">Espagnole</option>
                        <option value="Italien">Italien</option>
                    </select>
                    </div>
                    <div class="input-wrapper">
                    <legend>Your favorite technologies    <span style="color: red;" >*</span>     </legend>        
                    <fieldset style="     width: 750px;   display: flex; flex-wrap: wrap; " >
                    <div style="width:33%;display:block;line-height:5px">
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Formulaire de contact" value="Formulaire de contact" checked> Formulaire de contact</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Géolocalisation" value="Géolocalisation"> Géolocalisation</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Besoin des APIs" value="Besoin des APIs"> Besoin des APIs</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Google Analytics" value="Google Analytics">Google Analytics</label><br />
                                </div>
                                <div style="width:33%;display:block;line-height:1px">
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Blog" value="Blog"> Blog</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Capture des leads" value="Capture des leads"> Capture des leads</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Calendly" value="Calendly">Calendly</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Réseaux sociaux" value="Réseaux sociaux" checked> Réseaux sociaux</label><br />
                                </div>
                                <div style="width:33%;display:block;line-height:1px">
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Backoffice" value="Backoffice"> Backoffice</label><br />
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Plugins sur mesure" value="Plugins sur mesure"> Plugins sur mesure</label><br /> 
                                    <label style="    margin-right: -208px;" ><input type="checkbox" name="Chatbotai" value="Chatbotai" checked> Chatbotai</label><br />
                                </div> 
                    </fieldset>
                    </div>
                 
                    </div>

                    
                    <div class="input-group">  
                         <div class="input-wrapper">
                        <label for="Menu">Menu (Avez vous une préférence à ajouter sur le site):<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px" type="text" name="Menu" placeholder="Indiquez votre préférence des menus à ajouter sur le site"  ></textarea>
                    </div>
                        <div class="input-wrapper">
                        <label for="Mots-cles_cibles">Mots-clés cibles (Avez-vous des mots-clés à cibler sur le site):<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px" type="text" name="Mots-cles_cibles" placeholder="Saisissez vos mots-clés cibles pour le site"  ></textarea>
                        </div>
                        <div class="input-wrapper">
                        <label for="Specifications_techniques">Spécifications Techniques :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px" type="text" name="Specifications_techniques" placeholder="Entrez les spécifications techniques"   ></textarea>
                        </div>
                    </div>
                    <div class="input-group">   
                        <div class="input-wrapper">
                        <label for="Objectifs_attendus">Objectifs attendus :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px" type="text" name="Objectifs_attendus" placeholder="Entrez les objectifs attendus"   ></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(2,1)">Previous</div>
                        <div class="index-btn" onclick="run(2,3)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-3">
                    <p>analyse de l'existant:</p>
                    <div class="input-group">
                        <div class="input-wrapper">
                        <label for="Site_internet_de_vos_principaux_concurrents">Site internet de vos principaux concurrents : <span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px" type="text" name="Site_internet_de_vos_principaux_concurrents" placeholder="Saisissez les sites internet de vos principaux concurrents"  ></textarea>
                        </div>
                        <div class="input-wrapper">
                        <label for="Contraintes">Contraintes (donner des exemples de sites internet, dont vous appréciez un élément) :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px" type="text" name="Contraintes" placeholder="Veuillez fournir des exemples de sites internet que vous appréciez et décrire les éléments que vous aimez."   ></textarea>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-wrapper">
                        <div class="aegov-form-control control-sm">
                            <label for="fileInput-sm">Télécharger des images </label>
                            <div class="form-control-input">
                                <input id="fileInput-sm" type="file" name="fileInput-sm">
                            </div>
                        </div>	
                        </div>
                        <div class="input-wrapper">
                        <label for="Specifications_techniques">Exemples de sites avec commentaire :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px;    height: 126px;" type="text" name="Specifications_techniques" placeholder="Ajoutez des exemples de sites que vous aimez avec des commentaires sur ce que vous aimez bien sur ces sites (éléments, animation, couleurs, architecture d’informations, fonctionnalités, etc.)."   ></textarea>
                        </div>
                    </div>
                    <div class="input-group">
                    <div class="input-wrapper" style=" margin-top:30px;   display: flex; gap: 20px;" >
                            <label for=" ">Avez-vous un hébergement ?<span style="color: red;">*</span></label>
                            <input type="radio" name="demo2-2" class="demo2 demoyes" id="demo2-2-a" checked>
                            <label for="demo2-2-a">Oui</label>

                            <input type="radio" name="demo2-2" class="demo2 demono" id="demo2-2-b">
                            <label for="demo2-2-b">Non</label>
                        </div>
                        <div id="website-link-container-2" style="display: none;">
                        <label for="website-link">Hébergement <span style="color: red;" >*</span> </label>
                        <input type="text" placeholder="Hébergement (si disponible)" id="website-link" name="Site_web_de_l'entreprise">
                    </div>
              
                    </div>
                    <div class="input-group">
                    <div class="input-wrapper" style=" margin-top:30px;   display: flex; gap: 20px;" >
                            <label for=" ">Avez-vous un nom de domaine ? <span style="color: red;">*</span></label>
                            <input type="radio" name="demo2-3" class="demo2 demoyes" id="demo2-3-a" checked>
                            <label for="demo2-3-a">Oui</label>

                            <input type="radio" name="demo2-3" class="demo2 demono" id="demo2-3-b">
                            <label for="demo2-3-b">Non</label>
                        </div>
                        <div id="website-link-container-3" style="display: none;">
                        <label for="website-link">Domain <span style="color: red;" >*</span> </label>
                        <input type="text" placeholder="Nom de domaine (si disponible)" id="website-link" name="Site_web_de_l'entreprise">
                    </div>
              
                    </div>
                    <div class="index-btn-wrapper">
                        <div class="index-btn"onclick="run(3,2)">Previous</div>
                        <div class="index-btn"onclick="run(3,4)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-4">
                    <p>Design et Contenu:</p>
                    <div class="input-group">
                        <div class="input-wrapper">
                        <table style="width: 500px; border: 1px solid #ddd;" class="table  mb-0 bg-white">
                        <thead class="bg-light">
                                <tr>
                                <th>Elément</th>
                                <th>Fournis</th>
                                <th>A créer</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                   Logo
                                </td>
                                <td>
                                <div style="display:flex;">
                                        <input style="    width:14px;" type="radio" id="logo" name="logo" value="logo"   />
                                        <label for="uploadInput" style="cursor: pointer; margin-left: 10px;">
                                        <i class="fas fa-upload" style="display: none;" id="uploadIcon-logo"></i>
                                        </label>
                                        <input type="file" id="uploadInput" style="display: none;">
                                    </div>    
                                   </td>
                                <td>
                                <input style="    margin-left: -37px;" type="radio" id="logo-hide" name="logo" value="logo" checked />
                                </td>
                                
                                </tr>
                                <tr>
                                <td>
                                charte graphique

                                </td>
                                <td>
                                <div style="display:flex;">
                                        <input style="    width:14px;" type="radio" id="charte_graphique" name="charte_graphique" value="charte_graphique"   />
                                        <label for="uploadInput" style="cursor: pointer; margin-left: 10px;">
                                        <i class="fas fa-upload" style="display: none;" id="uploadIcon-charte"></i>
                                        </label>
                                        <input type="file" id="uploadInput" style="display: none;">
                                    </div>    
                                   </td>
                                <td>
                                <input style="  margin-left: -37px;" type="radio" id="charte_graphique-hide" name="charte_graphique" value="charte_graphique" checked />
                                </td> 
                                </tr>
                                <tr>
                                <td>
                                Maquette / Wireframe

                                </td>
                                <td>
                         
                                <div style="display:flex;">
                                        <input style="    width:14px;" type="radio" id="Maquette" name="Maquette" value="Maquette"   />
                                        <label for="uploadInput" style="cursor: pointer; margin-left: 10px;">
                                        <i class="fas fa-upload" style="display: none;" id="uploadIcon-Maquette"></i>
                                        </label>
                                        <input type="file" id="uploadInput" style="display: none;">
                                    </div>    
                                   </td>
                                <td>
                                <input style="margin-left: -37px;" type="radio" id="Maquette-hide" name="Maquette" value="Maquette" checked />
                                </td>
                                
                                </tr>
                                <tr>
                                <td>
                                Desc services/ produits 


                                </td>
                                <td>
                                    <div style="display:flex;">
                                        <input style="  width:14px " type="radio" id="Typographies" name="Typographies" value="Typographies"   />
                                        <label for="uploadInput" style="cursor: pointer; margin-left: 10px;">
                                        <i class="fas fa-upload" style="display: none;" id="uploadIcon-Typographies"></i>
                                        </label>
                                        <input type="file" id="uploadInput" style="display: none;">
                                    </div>    
                                </td>
                                <td>
                                <input style="margin-left: -37px;" type="radio" id="Typographies-hide" name="Typographies" value="Typographies" checked />
                                </td>
                                
                                </tr>
                                <tr>
                                <td>
                                Typographies (police d'ecriture)
                                </td>
                                <td>
                                <div style="display:flex;">
                                        <input style="  width:14px " type="radio" id="produits" name="produits" value="produits"   />
                                        <label for="uploadInput" style="cursor: pointer; margin-left: 10px;">
                                        <i class="fas fa-upload" style="display: none;" id="uploadIcon-produits"></i>
                                        </label>
                                        <input type="file" id="uploadInput" style="display: none;">
                                    </div>  
                            
                                   </td>
                                <td>
                                <input style="margin-left: -37px;" type="radio" id="produits-hide" name="produits" value="produits" checked />
                                </td>
                                
                                </tr>
                          
                            </tbody>
                        </table>
                        </div>
                        <div class="input-wrapper">
                        <label for="Palette de couleurs">Palette de couleurs :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px;     " type="text" name="Palette de couleurs" placeholder="Indiquez les couleurs souhaitées pour votre site."   ></textarea>
                     
                        <label for="Exemples de sites avec commentaire">Exemples de sites avec commentaire :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px;    height: 126px;" type="text" name="Exemples de sites avec commentaire" placeholder="Ajoutez des exemples de sites que vous aimez avec des commentaires sur ce que vous aimez bien sur ces sites (éléments, animation, couleurs, architecture d’informations, fonctionnalités, etc.)."   ></textarea>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-wrapper">
                        <legend>Your favorite technologies    <span style="color: red;" >*</span>     </legend>        
                        <fieldset style="     width: 750px;   display: flex; flex-wrap: wrap; " >
                                    <div style="width:33%;display:block;line-height:1px">
                                        <label style="    margin-right: -208px;" ><input type="checkbox" name="Formulaire de contact" value="Formulaire de contact" checked> Formulaire de contact</label><br />
                                        <label style="    margin-right: -208px;" ><input type="checkbox" name="Géolocalisation" value="Géolocalisation"> Géolocalisation</label><br />
                                        <label style="    margin-right: -208px;" ><input type="checkbox" name="Besoin des APIs" value="Besoin des APIs"> Besoin des APIs</label><br />
                                        <label style="    margin-right: -208px;" ><input type="checkbox" name="Google Analytics" value="Google Analytics">Google Analytics</label><br />
                                
                                        <label style="    margin-right: -208px;" ><input type="checkbox" name="Blog" value="Blog"> Blog</label><br />
                                        <label style="    margin-right: -208px;" ><input type="checkbox" name="Capture des leads" value="Capture des leads"> Capture des leads</label><br />
                                    </div> 
                        </fieldset>
                        </div>
                        <div class="input-wrapper" >
                        <div class="aegov-form-control control-sm">
                            <label for="fileInput-sm">Télécharger des images </label>
                            <div class="form-control-input">
                                <input id="fileInput-sm" type="file" name="fileInput-sm">
                            </div>
                        </div>
                        <label for="fileInput-sm">Nombre de propositions attendues : <span style="color: red;" >*</span>   </label>
                        <select style="    height: 43px; border-radius: 11px;width: 265px;" name="propositions" id="propositions">
                            <option value="" selected  ></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        </div>
                 
                    </div>
                    <div class="index-btn-wrapper">
                        <div class="index-btn"onclick="run(4,3)">Previous</div>
                        <div class="index-btn"onclick="run(4,5)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-5">
                    <p>analyse de l'existant:</p>
                    <div class="input-group" >
                            <input type="number" name="deadline_id" id="deadline_id" readonly class="d-none">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-10 mb-3">
                                                    <label class="form-label">Gestion de projet : <span
                                                            class="text-danger">*</span></label>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    id="gestionProjetBoutEnBout" name="gestion_projet"
                                                                    value="Bout en bout">
                                                                <label class="form-check-label"
                                                                    for="gestionProjetBoutEnBout">
                                                                    Bout en bout
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    id="gestionProjetAgile" name="gestion_projet"
                                                                    value="Agile">
                                                                <label class="form-check-label" for="gestionProjetAgile">
                                                                    Agile - être informé régulièrement de l’avancement du
                                                                    projet
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10 mb-3">
                                                    <label>Communication : <span class="text-danger">*</span></label>
                                                    <br>
                                                    @php
                                                        $communications = [
                                                            ['name' => 'Téléphone', 'alias' => 'telephone'],
                                                            ['name' => 'E-mail', 'alias' => 'email'],
                                                            [
                                                                'name' => 'Visio-conférences',
                                                                'alias' => 'visio_conference',
                                                            ],
                                                        ];
                                                    @endphp
                                                    <div class="row">
                                                        @foreach ($communications as $item)
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="communication_{{ $item['alias'] }}"
                                                                        name="communication[]"
                                                                        value="{{ $item['name'] }}">
                                                                    <label class="form-check-label"
                                                                        for="communication_{{ $item['alias'] }}"">
                                                                        {{ $item['name'] }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">

                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Délais : <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="delais"
                                                            name="deadline" placeholder="Délais">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Plage budgétaire :</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-label">Budget minimum :</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text">€</span>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="00" id="budget_from"
                                                                        name="budget_from" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-1 d-flex align-items-center justify-content-center">
                                                            <i class="m-auto mb-2 ti ti-arrow-big-right-filled"></i>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="form-label">Budget maximum :</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text">€</span>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="00" id="budget_to"
                                                                        name="budget_to" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td rowspan="15"
                                                                    style="text-align: center; vertical-align: middle;">
                                                                    Délais
                                                                    &
                                                                    Budgétisation</td>
                                                                <td>Désignation</td>
                                                                <td>Nombre de jours</td>
                                                                <td>Montant unitaire</td>
                                                                <td>Total HT</td>
                                                            </tr>
                                                            @php
                                                                $budgetisation = [
                                                                    [
                                                                        'title' => "Installation de l'environnement",
                                                                        'alias' => 'installation-environnement',
                                                                        'name' => 'installation_environment',
                                                                    ],
                                                                    [
                                                                        'title' => 'Intégration de la structure',
                                                                        'alias' => 'integration-structure',
                                                                        'name' => 'integration_structure',
                                                                    ],
                                                                    [
                                                                        'title' => 'Ebauche Des Textes et traductions',
                                                                        'alias' => 'ebauche-textes-traductions',
                                                                        'name' => 'draft_texts_translations',
                                                                    ],
                                                                    [
                                                                        'title' => 'Maquettage graphique',
                                                                        'alias' => 'maquettage-graphique',
                                                                        'name' => 'graphic_modeling',
                                                                    ],
                                                                    [
                                                                        'title' => 'Développement & intégrations web',
                                                                        'alias' => 'developpement-integrations-web',
                                                                        'name' => 'web_development_integrations',
                                                                    ],
                                                                    [
                                                                        'title' => 'Intégration des textes et images',
                                                                        'alias' => 'integration-textes-images',
                                                                        'name' => 'text_image_integration',
                                                                    ],
                                                                    [
                                                                        'title' =>
                                                                            "Intégration d'autres pages (contact, catégories ...etc.)",
                                                                        'alias' => 'integration-autres-pages',
                                                                        'name' => 'other_pages_integration',
                                                                    ],
                                                                    [
                                                                        'title' => 'Optimisation de la version Mobile',
                                                                        'alias' => 'optimisation-version-mobile',
                                                                        'name' => 'mobile_version_optimization',
                                                                    ],
                                                                    [
                                                                        'title' => 'Intégration du multilingue',
                                                                        'alias' => 'integration-multilingue',
                                                                        'name' => 'multilingual_integration',
                                                                    ],
                                                                    [
                                                                        'title' => 'Optimisation Pour SEO',
                                                                        'alias' => 'optimisation-seo',
                                                                        'name' => 'seo_optimisation',
                                                                    ],
                                                                    [
                                                                        'title' => 'Suivi et tests',
                                                                        'alias' => 'suivi-tests',
                                                                        'name' => 'testing_tracking',
                                                                    ],
                                                                    [
                                                                        'title' => 'Gestion de projets',
                                                                        'alias' => 'gestion-projet',
                                                                        'name' => 'project_management',
                                                                    ],
                                                                ];
                                                            @endphp
                                                            @foreach ($budgetisation as $item)
                                                                <tr>
                                                                    <td class="p-0 px-3 py-1">{{ $item['title'] }}</td>
                                                                    <td class="p-0 px-3 py-1">
                                                                        <input type="number"
                                                                            class="form-control form-control h-100"
                                                                            placeholder="00" id="nj-{{ $item['alias'] }}"
                                                                            name="number_of_days_{{ $item['name'] }}">
                                                                    </td>
                                                                    <td class="p-0 px-3 py-1">
                                                                        <div
                                                                            class="input-group input-group input-group-merge">
                                                                            <span class="input-group-text py-0">€</span>
                                                                            <input type="number"
                                                                                class="form-control py-1" placeholder="00"
                                                                                id="mu-{{ $item['alias'] }}"
                                                                                name="unit_amount_{{ $item['name'] }}" />
                                                                        </div>
                                                                    </td>
                                                                    <td class="p-0 px-3 py-1">
                                                                        <div
                                                                            class="input-group input-group input-group-merge">
                                                                            <span class="input-group-text py-0">€</span>
                                                                            <input type="number"
                                                                                class="form-control py-1" placeholder="00"
                                                                                readonly id="total-{{ $item['alias'] }}"
                                                                                name="total_{{ $item['name'] }}" />
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td class="p-0 px-3 py-1">Remise exceptionnelle </td>
                                                                <td class="p-0 px-3 py-1" colspan="3">
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text">€</span>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="00" id="remise-exceptionnelle"
                                                                            name="exceptional_discount" />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-0 px-3 py-1">Total (HT) </td>
                                                                <td class="p-0 px-3 py-1" colspan="3">
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text">€</span>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="00" readonly id="total-total"
                                                                            name="total" />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <hr class="my-5">
                                            <div id="pourcentages">
                                                @php
                                                    $index = 1;
                                                @endphp

                                                @for ($i = 1; $i <= 10; $i++)
                                                    <div class="row  @if ($index > 1) d-none @endif"
                                                        id="pourcentage-{{ $index }}">
                                                        <div
                                                            class="border border-bottom-0 border-dark border-start-0 border-top-0 col-7 pb-4">
                                                            <div class="row">
                                                                <div class="col-2 mt-auto">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            id="label-pourcentage-operation-{{ $index }}"
                                                                            for="pourcentage-operation-{{ $index }}">
                                                                            @if ($index == 1)
                                                                                Pourcentage à payer après la signature:
                                                                            @endif
                                                                        </label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span class="input-group-text">%</span>
                                                                            <input type="number" class="form-control"
                                                                                name="installment_{{ $index }}_percentage"
                                                                                id="pourcentage-operation-{{ $index }}"
                                                                                @if ($index == 1) value="20" @endif
                                                                                placeholder="00" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 mt-auto">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            id="label-pourcentage-value-{{ $index }}"
                                                                            for="pourcentage-value-{{ $index }}">
                                                                            Montant
                                                                        </label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span class="input-group-text">€</span>
                                                                            <input type="number" class="form-control"
                                                                                name="installment_{{ $index }}_amount"
                                                                                id="pourcentage-value-{{ $index }}"
                                                                                placeholder="00" readonly />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-5 mt-auto">
                                                                    <label class="form-label"
                                                                        for="titre-operation-{{ $index }}">
                                                                        Titre de l'operation:
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Titre de l'operation"
                                                                        name="installment_{{ $index }}_title"
                                                                        id="titre-operation-{{ $index }}"
                                                                        @if ($index == 1) readonly
                                                                        title="Pourcentage à payer après la signature"
                                                                        value="Pourcentage à payer après la signature" @endif>
                                                                </div>
                                                                {{-- <div class="col-1 mt-auto">
                                                                    <button type="button" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Confirmer"
                                                                        class="btn btn-icon btn-label-success waves-effect waves-light"
                                                                        id="confirm-btn-{{ $index }}">
                                                                        <i class="ti ti-check"></i>
                                                                    </button>
                                                                </div> --}}
                                                                <div class="col-1 mt-auto">
                                                                    @if ($index < 10)
                                                                        <button type="button" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Ajouter"
                                                                            class="btn btn-icon btn-label-primary waves-effect waves-light"
                                                                            id="plus-btn-{{ $index }}">
                                                                            <i class="ti ti-plus"></i>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                                <div class="col-1 mt-auto">
                                                                    @if ($index > 1)
                                                                        <button type="button" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Supprimer"
                                                                            class="btn btn-icon  btn-label-danger waves-effect waves-light"
                                                                            id="delete-btn-{{ $index }}">
                                                                            <i class="ti ti-trash"></i>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($index == 1)
                                                            <div class="col-5">
                                                                <div class="form-group">
                                                                    <label class="form-label fs-4"> <b> Le reste :</b>
                                                                    </label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text">€</span>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="00" id="reste"
                                                                            name="rest" />
                                                                    </div>
                                                                </div>
                                                                <hr class="my-3">
                                                                <div class="row">
                                                                    <div class="col-6 mb-3 mt-auto">
                                                                        <div class="form-group">
                                                                            <label class="form-label fs-4"
                                                                                id="label-pourcentage-operation-maintenance"
                                                                                for="pourcentage-operation-maintenance">
                                                                                <b> Maintenance :</b>
                                                                            </label>
                                                                            <div class="input-group input-group-merge">
                                                                                <span class="input-group-text">%</span>
                                                                                <input type="number" class="form-control"
                                                                                    id="pourcentage-operation-maintenance"
                                                                                    name="maintenance_percentage"
                                                                                    placeholder="00" value="20" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-3 mt-auto">
                                                                        <div class="form-group">

                                                                            <div class="input-group input-group-merge">
                                                                                <span class="input-group-text">€</span>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="pourcentage-value-maintenance"
                                                                                    name="maintenance_amount"
                                                                                    placeholder="00" value="20"
                                                                                    readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    @php
                                                        $index++;
                                                    @endphp
                                                @endfor
                                            </div>

                                        </div>
                                    </div>
                    </div>                
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
        <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>

        <script>
            new MultiSelectTag('languages')  // id
        </script>
        <script>
        $('#logo').change(function() {
          
        $('#uploadIcon-logo').show();
      });
        $('#logo-hide').change(function() {
    
        $('#uploadIcon-logo').hide();
      });
        $('#charte_graphique').change(function() {
          
        $('#uploadIcon-charte').show();
      });
        $('#charte_graphique-hide').change(function() {
    
        $('#uploadIcon-charte').hide();
      });
        $('#Maquette').change(function() {
          
        $('#uploadIcon-Maquette').show();
      });
        $('#Maquette-hide').change(function() {
    
        $('#uploadIcon-Maquette').hide();
      });
        $('#Typographies').change(function() {
          
        $('#uploadIcon-Typographies').show();
      });
        $('#Typographies-hide').change(function() {
    
          $('#uploadIcon-Typographies').hide();
      });
        $('#produits').change(function() {
          
        $('#uploadIcon-produits').show();
      });
        $('#produits-hide').change(function() {
    
          $('#uploadIcon-produits').hide();
      });
        </script>
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
           function toggleWebsiteLinkInput_2() {
                if ($('#demo2-2-a').is(':checked')) {
                    $('#website-link-container-2').show();
                } else {
                    $('#website-link-container-2').hide();
                }
            }
           function toggleWebsiteLinkInput_3() {
                if ($('#demo2-3-a').is(':checked')) {
                    $('#website-link-container-3').show();
                } else {
                    $('#website-link-container-3').hide();
                }
            }

            // Add event listeners to the radio buttons
            $('input[name="demo2"]').on('change', toggleWebsiteLinkInput);
            $('input[name="demo2-2"]').on('change', toggleWebsiteLinkInput_2);
            $('input[name="demo2-3"]').on('change', toggleWebsiteLinkInput_3);

            // Initial check to set the correct state on page load
            toggleWebsiteLinkInput();
            toggleWebsiteLinkInput_2();
            toggleWebsiteLinkInput_3();

            function run(hideTab, showTab) {
           
    if (hideTab < showTab) {
        var currentTab = 0;
     

        x = $("#tab-" + hideTab);
        y = $(x).find("input, select, textarea");

        for (i = 0; i < y.length; i++) {
         if (y[i].name == "Nom_de_l'entreprise") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Email") {
                var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Telephone") {
                var regex = /^\+\d{1,3} \(\d{3}\) \d{3}-\d{4}$/;
                if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Site_web_de_l'entreprise") {
                var regex = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
                if (!regex.test(y[i].value || y[i].value !== "" )) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Menu") {
                if (y[i].value.trim() == "") {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Mots-cles_cibles") {
                if (y[i].value.trim() == "") {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Specifications_techniques") {
                if (y[i].value.trim() == "") {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Objectifs_attendus") {
                if (y[i].value.trim() == "") {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "languages[]") {
                if ($(y[i]).val() == "") {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='langue']").css({ "color": "#ff5555" });
                    return false;
                }
            }
        }
    } else {
        for (i = showTab + 1; i <= 6; i++) {
            $("#step-" + i).css("opacity", "0.25");
        }
    }

    for (i = 1; i < showTab; i++) {
        $("#step-" + i).css("opacity", "1");
    }
    $("#tab-" + hideTab).css("display", "none");
    $("#tab-" + showTab).css("display", "block");
    $("input").css("background", "#fff");
}



        </script>
 
@endsection