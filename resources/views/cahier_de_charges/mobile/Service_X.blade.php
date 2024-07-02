@extends('dashboard')
@section('content')


 
            <h4 style="    margin-bottom: -70px;" align = center  >
        <span  class="text-muted fw-light" >Créer un CDC Mobile/</span>Servise-X   </h4>

        <form  action="{{route('create.chatgpt')}}" method="POST"  target="_blank" autocomplete="off" id="form" >
            @csrf
            @method('POST')
         

            <div align = center style="margin-top:20px;display: flex; gap:20px;  ">
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
                        <label for="Nom_de_lentreprise">Nom de l'entreprise <span style="color: red;" >*</span> </label>
                        <input type="text" placeholder="Havet digitale" name="Nom_de_l'entreprise">
                        </div>
                        <div class="input-wrapper">
                        <label for="phone">phone<span style="color: red;" >*</span> </label>
                        <input type="phone" placeholder="+1 (207) 604-443" name="Telephone">
                        <input type="text" name="type" value="site_web_Internet" style="display: none;" name="text">
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
                        <label for="Personne_a_contacter">Personne à contacter<span style="color: red;" >*</span> </label>
                        <input type="Personne à contacter"  placeholder="Personne à contacter (nom et prénom)"  name="Personne_a_contacter">
                        </div>
                    </div>
                    
                    <div class="index-btn-wrapper">
                        <div class="index-btn" onclick="run(1,2)">Next</div>
                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <p>objectif du site:</p>
                    <div class="input-group"  > 
                    <div class="input-wrapper-2">
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
                        <fieldset style="width: 750px;display: flex; flex-wrap: wrap; " >
                                    <div style="width:33%;display:block;line-height:5px">
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Formulaire de contact" checked> Formulaire de contact</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Géolocalisation"> Géolocalisation</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Besoin des APIs"> Besoin des APIs</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Google Analytics">Google Analytics</label><br />
                                    </div>
                                    <div style="width:33%;display:block;line-height:1px">
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Blog"> Blog</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Capture des leads"> Capture des leads</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Calendly">Calendly</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Réseaux sociaux" checked> Réseaux sociaux</label><br />
                                    </div>
                                    <div style="width:33%;display:block;line-height:1px">
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Backoffice"> Backoffice</label><br />
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Plugins sur mesure"> Plugins sur mesure</label><br /> 
                                        <label for="favorite_technologies" style="    margin-right: -208px;" ><input type="checkbox" name="favorite_technologies[]" value="Chatbotai" checked> Chatbotai</label><br />
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
                        <label for="Exemples_de_sites_avec_commentaires">Exemples de sites avec commentaire :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px;    height: 126px;" type="text" name="Exemples_de_sites_avec_commentaires" placeholder="Ajoutez des exemples de sites que vous aimez avec des commentaires sur ce que vous aimez bien sur ces sites (éléments, animation, couleurs, architecture d’informations, fonctionnalités, etc.)."   ></textarea>
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
                        <label for="Palette_de_couleurs">Palette de couleurs :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px;" type="text" name="Palette_de_couleurs" placeholder="Indiquez les couleurs souhaitées pour votre site."   ></textarea>
                     
                        <label for="Exemples_de_sites_avec_commentaire">Exemples de sites avec commentaire :<span style="color: red;" >*</span> </label>
                        <textarea style="border-radius:20px;height: 126px;" type="text" name="Exemples_de_sites_avec_commentaire" placeholder="Ajoutez des exemples de sites que vous aimez avec des commentaires sur ce que vous aimez bien sur ces sites (éléments, animation, couleurs, architecture d’informations, fonctionnalités, etc.)."   ></textarea>
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
                                                    <div class="block">
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" style="margin-right:-10px"
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
                                                                <input class="form-check-input" type="radio" style="margin-right:-10px"
                                                                    id="gestionProjetAgile" name="gestion_projet"
                                                                    value="Agile">
                                                                <label class="form-check-label" for="gestionProjetAgile">
                                                                    Agile - être informé <br>régulièrement de l’avancement du
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
                                                                'name' => 'V-conférences',
                                                                'alias' => 'V_conference',
                                                            ],
                                                        ];
                                                    @endphp
                                                    <div class="block">
                                                        @foreach ($communications as $item)
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="communication_{{ $item['alias'] }}"
                                                                        name="communication[]"
                                                                        value="{{ $item['name'] }}"
                                                                        style="margin-left:50px" 
                                                                        >
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
                                                                        name="budget" />
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
                                    <div class="col-12" style="    margin-top: -100px;">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="15" class="text-center align-middle">Délais &<br> Budgétisation</th>
                                                    <th>Désignation</th>
                                                    <th>Nombre de jours</th>
                                                    <th>Montant unitaire</th>
                                                    <th>Total HT</th>
                                                </tr>
                                                @php
                                                    $budgetisation = [
                                                        ['title' => "Installation de l'environnement", 'alias' => 'installation-environnement', 'name' => 'installation_environment'],
                                                        ['title' => 'Intégration de la structure', 'alias' => 'integration-structure', 'name' => 'integration_structure'],
                                                        ['title' => 'Ebauche Des Textes et traductions', 'alias' => 'ebauche-textes-traductions', 'name' => 'draft_texts_translations'],
                                                        ['title' => 'Maquettage graphique', 'alias' => 'maquettage-graphique', 'name' => 'graphic_modeling'],
                                                        ['title' => 'Développement & intégrations web', 'alias' => 'developpement-integrations-web', 'name' => 'web_development_integrations'],
                                                        ['title' => 'Intégration des textes et images', 'alias' => 'integration-textes-images', 'name' => 'text_image_integration'],
                                                        ['title' => "Intégration d'autres pages (contact, catégories ...etc.)", 'alias' => 'integration-autres-pages', 'name' => 'other_pages_integration'],
                                                        ['title' => 'Optimisation de la version Mobile', 'alias' => 'optimisation-version-mobile', 'name' => 'mobile_version_optimization'],
                                                        ['title' => 'Intégration du multilingue', 'alias' => 'integration-multilingue', 'name' => 'multilingual_integration'],
                                                        ['title' => 'Optimisation Pour SEO', 'alias' => 'optimisation-seo', 'name' => 'seo_optimisation'],
                                                        ['title' => 'Suivi et tests', 'alias' => 'suivi-tests', 'name' => 'testing_tracking'],
                                                        ['title' => 'Gestion de projets', 'alias' => 'gestion-projet', 'name' => 'project_management'],
                                                    ];
                                                @endphp
                                                @foreach ($budgetisation as $item)
                                                    <tr>
                                                        <td class="p-0 px-3 py-1">{{ $item['title'] }}</td>
                                                        <td class="p-0 px-3 py-1">
                                                            <input type="number" class="form-control form-control-sm" placeholder="00" id="nj-{{ $item['alias'] }}" name="number_of_days_{{ $item['name'] }}">
                                                        </td>
                                                        <td class="p-0 px-3 py-1">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text py-0">€</span>
                                                                <input type="number" class="form-control form-control-sm" placeholder="00" id="mu-{{ $item['alias'] }}" name="unit_amount_{{ $item['name'] }}" />
                                                            </div>
                                                        </td>
                                                        <td class="p-0 px-3 py-1">
                                                            <div class="input-group input-group-sm">
                                                                <span class="input-group-text py-0">€</span>
                                                                <input type="number" class="form-control form-control-sm" placeholder="00" readonly id="total-{{ $item['alias'] }}" name="total_{{ $item['name'] }}" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="p-0 px-3 py-1">Remise exceptionnelle</td>
                                                    <td class="p-0 px-3 py-1" colspan="3">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text">€</span>
                                                            <input type="number" class="form-control form-control-sm" placeholder="00" id="remise-exceptionnelle" name="exceptional_discount" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-0 px-3 py-1">Total (HT)</td>
                                                    <td class="p-0 px-3 py-1" colspan="3">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-text">€</span>
                                                            <input type="number" class="form-control form-control-sm" placeholder="00" readonly id="total-total" name="total" />
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
                                                                            <i class="fa fa-plus me-2"></i>

                                                                        </button>
                                                                    @endif
                                                                </div>
                                                                <div class="col-1 mt-auto">
                                                                    @if ($index > 1)
                                                                        <button type="button" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Supprimer"
                                                                            class="btn btn-icon  btn-label-danger waves-effect waves-light"
                                                                            id="delete-btn-{{ $index }}">
                                                                            <i class="fa fa-minus me-2"></i>
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
            // premier step
         if (y[i].name == "Nom_de_l'entreprise") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Nom_de_lentreprise']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Email") {
                var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='email']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Telephone") {
                var regex = /^\+\d{1,3} \(\d{3}\) \d{3}-\d{4}$/;
                if (!regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='phone']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Cible") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Cible']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Personne_a_contacter") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Personne_a_contacter']").css({ "color": "#ff5555" });
                    return false;
                }
            }else if (y[i].name == "Site_web_de_l'entreprise") {
                if ($('#website-link-container').is(':visible')) {
                    var regex = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
                    if (!regex.test(y[i].value) || y[i].value === "") {
                        $(y[i]).css({ "border-color": "#ff5555" });
                        $("label[for='website-link']").css({ "color": "#ff5555" });
                        return false;
                    }
                }

                //deuxieme step
            }else if (y[i].name == "favorite_technologies[]") {
                        if (!y[i].checked) {
                    $(y[i]).next('label').css('color', '#ff5555');
                    isValid = false;
                }
            } else if (y[i].name == "Menu") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Menu']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Mots-cles_cibles") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Mots-cles_cibles']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Specifications_techniques") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Specifications_techniques']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Objectifs_attendus") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Objectifs_attendus']").css({ "color": "#ff5555" });
                    return false;
                }
            } else if (y[i].name == "Site_internet_de_vos_principaux_concurrents") {
                var regex = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Site_internet_de_vos_principaux_concurrents']").css({ "color": "#ff5555" });
                    return false;
                }
            }else if (y[i].name == "Contraintes") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Contraintes']").css({ "color": "#ff5555" });
                    return false;
                }
            }else if (y[i].name == "Hébergement") {
                if ($('#website-link-container-2').is(':visible')) {
                    var regex = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
                    if (!regex.test(y[i].value) || y[i].value === "") {
                        $(y[i]).css({ "border-color": "#ff5555" });
                        $("label[for='website-link-2']").css({ "color": "#ff5555" });
                        return false;
                    }
                }
            }else if (y[i].name == "Nom_de_domaine") {
                if ($('#website-link-container-3').is(':visible')) {
                    var regex = /^(?!:\/\/)([a-zA-Z0-9-_]{1,63}\.)+[a-zA-Z]{2,6}$/;
                    if (!regex.test(y[i].value) || y[i].value === "") {
                        $(y[i]).css({ "border-color": "#ff5555" });
                        $("label[for='website-link-3']").css({ "color": "#ff5555" });
                        return false;
                    }
                }
            }else if (y[i].name == "Exemples_de_sites_avec_commentaires") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Exemples_de_sites_avec_commentaires']").css({ "color": "#ff5555" });
                    return false;
                }
            }else if (y[i].name == "Palette_de_couleurs") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Palette_de_couleurs']").css({ "color": "#ff5555" });
                    return false;
                }
            }else if (y[i].name == "Palette_de_couleurs") {
                var regex = /^[a-zA-ZÀ-ÿ\s,':-]+$/;
                if (y[i].value === "" || !regex.test(y[i].value)) {
                    $(y[i]).css({ "border-color": "#ff5555" });
                    $("label[for='Palette_de_couleurs']").css({ "color": "#ff5555" });
                    return false;
                }
            }else if (y[i].name == "languages[]") {
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
        <script>
        $(document).ready(function() {
            generateByAi(`descriptionEntreprise`, 1);
            generateByAi(`activitePrincipale`, 1);
            generateByAi(`servicesProduits`, 1);
            generateByAi(`target_audience`, 1);
            generateByAi(`expectedObjectives`, 2);
            generateByAi(`iatext_techniques_specs`, 2);
            generateByAi(`iatext_menu`, 4);
            generateByAi(`iatext_competitors`, 3);
            generateByAi(`iatext_constraints`, 3);
            generateByAi(`iatext_target_keywords`, 2);
            generateByAi(`iatext_exemples_sites`, 4);
            $('input[name="project_type"]').change(function() {
                if ($(this).val() === 'E-commerce') {
                    $('#options-paiement-container').removeClass('d-none');
                } else {
                    $('#options-paiement-container').addClass('d-none');
                }
            });

            $('#nombrePropositions').change(function() {
                let numberOfPropositions = $(this).val();
                if ($(this).val() === 'autre') {
                    $('#autreProposition').val('')
                    $('#autrePropositionInput').show();
                } else {
                    $('#autreProposition').val(numberOfPropositions)
                    $('#autrePropositionInput').hide();
                }
            });

            for (let i = 1; i < 11; i++) {
                $(`#plus-btn-${i}`).click(function() {
                    console.log('clicked');
                    $(`#pourcentage-${i+1}`).removeClass('d-none');
                })

                $(`#titre-operation-${i}`).on('input', function() {
                    console.log($(this).val());
                    $(`#label-pourcentage-operation-${i}`).text($(this).val());
                });

                $(`#delete-btn-${i}`).click(function() {
                    $(`#pourcentage-value-${i}`).val('');
                    $(`#pourcentage-operation-${i}`).val('');
                    $(`#titre-operation-${i}`).val('');
                    calculReste();
                });

                $(`#pourcentage-operation-${i}`).on('input', function() {
                    calculReste();
                });
            }

            const designations = ['installation-environnement', 'integration-structure',
                'ebauche-textes-traductions',
                'maquettage-graphique', 'developpement-integrations-web', 'integration-textes-images',
                'integration-autres-pages', 'optimisation-version-mobile', 'integration-multilingue',
                'optimisation-seo', 'suivi-tests', 'gestion-projet'
            ];

            designations.forEach(element => {
                $(`#nj-${element}, #mu-${element}`).on('input', function() {
                    if ($(`#nj-${element}`).val() && $(`#mu-${element}`).val()) {
                        let njVal = $(`#nj-${element}`).val() ? parseFloat($(`#nj-${element}`)
                            .val()) : 0;
                        let muVal = $(`#mu-${element}`).val() ? parseFloat($(`#mu-${element}`)
                            .val()) : 0;
                        $(`#total-${element}`).val(njVal * muVal);
                    } else {
                        $(`#total-${element}`).val('');
                    }
                    calculTotal()
                    calculReste()
                    calculMaintenance()
                })
            });

            $('#remise-exceptionnelle').on('input', function() {
                calculTotal()
                calculReste()
                calculMaintenance()
            })

            $('#pourcentage-operation-maintenance').on('input', function() {
                calculTotal()
                calculReste()
                calculMaintenance()
            })

            calculReste();
            calculMaintenance();

            // Get all the checkboxes
            const checkboxes = document.querySelectorAll('input[name="payment_options[]"]');

            // Event listener for the "Aucun" checkbox
            const aucunCheckbox = document.getElementById('paiement_aucun');
            aucunCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    checkboxes.forEach(function(checkbox) {
                        if (checkbox !== aucunCheckbox) {
                            checkbox.checked = false;
                        }
                    });
                }
            });

            // Event listener for the other checkboxes
            checkboxes.forEach(function(checkbox) {
                if (checkbox !== aucunCheckbox) {
                    checkbox.addEventListener('change', function() {
                        if (this.checked) {
                            aucunCheckbox.checked = false;
                        }
                    });
                }
            });

            $('#next-step-1').on('click', function() {
                if (1) {
                    localStorage.removeItem('askToChatGpt');
                    console.log('eeeeee', $('#website').val());
                    let nomEntreprise = $('#website').val() ? $('#website').val() : $('#nomEntreprise')
                        .val();
                    console.log(nomEntreprise);

                    if (nomEntreprise) {
                        $('#descriptionEntrepriseAi').val(
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur description de ce client: ${nomEntreprise}`
                        ).prop('title',
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur description de ce client: ${nomEntreprise}`
                        ).trigger('input');

                        $('#activitePrincipaleAi').val(
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur l’activité de ce client: ${nomEntreprise}`
                        ).prop('title',
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur l’activité de ce client: ${nomEntreprise}`
                        ).trigger('input');

                        $('#servicesProduitsAi').val(
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur les services ou les produits vendu de ce client: ${nomEntreprise}`
                        ).prop('title',
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur les services ou les produits vendu de ce client: ${nomEntreprise}`
                        ).trigger('input');

                        $('#target_audienceAi').val(
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur le public cible de ce client : ${nomEntreprise}`
                        ).prop('title',
                            `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi un paragraphe sur le public cible de ce client : ${nomEntreprise}`
                        ).trigger('input');
                    } else {
                        $('#descriptionEntrepriseAi').val(``).prop('title', ``).trigger('input');
                        $('#activitePrincipaleAi').val(``).prop('title', ``).trigger('input');
                        $('#servicesProduitsAi').val(``).prop('title', ``).trigger('input');
                        $('#target_audienceAi').val(``).prop('title', ``).trigger('input');
                    }

                    if ($('#descriptionEntrepriseAi').val() && (!$('#descriptionEntreprise').val())) {
                        $('#descriptionEntrepriseAi-generate').click();
                    }
                    // setTimeout(() => {
                    if ($('#activitePrincipaleAi').val() && (!$('#activitePrincipale').val())) {
                        $('#activitePrincipaleAi-generate').click();
                    }
                    // }, 10000);
                    // setTimeout(() => {
                    if ($('#servicesProduitsAi').val() && (!$('#servicesProduits').val())) {
                        $('#servicesProduitsAi-generate').click();
                    }
                    // }, 20000);
                    // setTimeout(() => {
                    if ($('#target_audienceAi').val() && (!$('#target_audience').val())) {
                        $('#target_audienceAi-generate').click();
                    }
                }
            });

    
            $('#next-step-2').on('click', function() {
                let objectifsAttendus = $('#objectifsAttendus').val();
                console.log(objectifsAttendus);
                if (objectifsAttendus) {
                    $('#expectedObjectivesAi').val(
                        `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, les objectifs : (${objectifsAttendus}), réécrire moi un paragraphe sur les objectifs attendu de ce client`
                    ).prop('title',
                        `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, les objectifs : (${objectifsAttendus}), réécrire moi un paragraphe sur les objectifs attendu de ce client`
                    ).trigger('input');
                } else {
                    $('#expectedObjectivesAi').val('').prop('title', '').trigger('input');
                }

                if ($('#expectedObjectivesAi').val() && !$('#expectedObjectives').val()) {
                    // TODO
                    $('#expectedObjectives').text('');
                    $('#expectedObjectivesAi-generate').click();
                }
                // TODO
            });

            $('#next-step-2').on('click', function() {
                let target_keywords = $('#target_keywords').val().split('\n').join(',');
                console.log(target_keywords);

                if (target_keywords) {
                    $('#iatext_target_keywordsAi').val(
                        `dans la section de Stratégies de Référencement en Mots-clés cibles sur le cahier de
  charge de son site internet à envoyer au client merci d'élaborer cette phrase dans deux
  paragraphes : (${target_keywords})`
                    ).prop('title',
                        `dans la section de Stratégies de Référencement en Mots-clés cibles sur le cahier de
  charge de son site internet à envoyer au client merci d'élaborer cette phrase dans deux
  paragraphes : (${target_keywords})`
                    ).trigger('input');
                } else {
                    $('#iatext_target_keywordsAi').val('').prop('title', '').trigger('input');
                }

                if ($('#iatext_target_keywordsAi').val() && !$('#iatext_target_keywords').val()) {

                    // TODO
                    $('#iatext_target_keywords').text('');
                    $('#iatext_target_keywordsAi-generate').click();
                }
            });

            $('#next-step-2').on('click', function() {
                let menu = $('#menu').val();
                var project_type = $('input[name="project_type"]').val();
                var servicesProduits = $('#servicesProduits').val();
                console.log(menu);
                console.log(project_type);
                console.log(servicesProduits);
                if (menu) {

                    console.log(
                        `à partir de cette liste de menu : [${menu}], rédiger et designer moi une sitemap (arborescence) pour un site Internet [${project_type}] de [${servicesProduits}]`
                    );
                    $('#iatext_menuAi').val(
                        `à partir de cette liste de menu : [${menu}], rédiger et designer moi une sitemap (arborescence) pour un site Internet [${project_type}] de [${servicesProduits}]`
                    ).prop('title',
                        `à partir de cette liste de menu : [${menu}], rédiger et designer moi une sitemap (arborescence) pour un site Internet [${project_type}] de [${servicesProduits}]`
                    ).trigger('input');


                    if ($('#iatext_menuAi').val() && !$('#iatext_menu').val()) {

                        // TODO
                        $('#iatext_menu').text('');
                        $('#iatext_menuAi-generate').click();
                    }

                    // TODO
                }
            });


            $('#next-step-2').on('click', function() {
                let techniques_specs = $('#techniques_specs').val();
                console.log(techniques_specs);

                console.log(
                    `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, récrire moi en 3 paragraphes les spécifications techniques (${techniques_specs}) que le client souhaite avoir sur son site`
                );
                if (techniques_specs) {
                    $('#iatext_techniques_specsAi').val(
                        `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, récrire moi en 3 paragraphes les spécifications techniques (${techniques_specs}) que le client souhaite avoir sur son site`
                    ).prop('title',
                        `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, récrire moi en 3 paragraphes les spécifications techniques (${techniques_specs}) que le client souhaite avoir sur son site`
                    ).trigger('input');
                }

                if ($('#iatext_techniques_specsAi').val() && !$('#iatext_techniques_specs').val()) {
                    // TODO
                    $('#iatext_techniques_specs').text('');
                    $('#iatext_techniques_specsAi-generate').click();
                }
            });

            $('#next-step-3').on('click', function() {
                let concurrents = $('#concurrents').val().split('\n').join(',');
                console.log(concurrents);

                if (concurrents) {
                    $('#iatext_competitorsAi').val(
                        `voici les concurrents (${concurrents}), étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi deux paragraphe sur l’analyse des principaux concurrents et identification des points forts à intégrer sur le site internet que le client souhaite`
                    ).prop('title',
                        `voici les concurrents (${concurrents}), étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi deux paragraphe sur l’analyse des principaux concurrents et identification des points forts à intégrer sur le site internet que le client souhaite`
                    ).trigger('input');
                } else {
                    $('#iatext_competitorsAi').val('').prop('title', '').trigger('input');
                }

                if ($('#iatext_competitorsAi').val() && !$('#iatext_competitors').val()) {

                    // TODO
                    $('#iatext_competitors').text('');
                    $('#iatext_competitorsAi-generate').click();
                }
            });



            $('#next-step-4').on('click', function() {
                let exemples_sites = $('#exemples-sites').val().split('\n').join(',');
                console.log(exemples_sites);

                console.log(
                    `écrire un paragraphe détaillé pour élaborer Les éléments suivants (${exemples_sites}) que le client voulait inclure sur le
site internet sur le cahier de charge de son site internet`
                );
                if (exemples_sites) {
                    $('#iatext_exemples_sitesAi').val(
                        `écrire un paragraphe détaillé pour élaborer Les éléments suivants (${exemples_sites}) que le client voulait inclure sur le
site internet sur le cahier de charge de son site internet`
                    ).prop('title',
                        `écrire un paragraphe détaillé pour élaborer Les éléments suivants (${exemples_sites}) que le client voulait inclure sur le
site internet sur le cahier de charge de son site internet`
                    ).trigger('input');
                } else {
                    $('#iatext_exemples_sitesAi').val(
                        ``
                    ).prop('title',
                        ``
                    ).trigger('input');
                }


                if ($('#iatext_exemples_sitesAi').val() && !$('#iatext_exemples_sites').val()) {
                    // TODO
                    $('#iatext_exemples_sites').text('');
                    $('#iatext_exemples_sitesAi-generate').click();
                }
            });

            $('#next-step-3').on('click', function() {
                let contraintes = $('#contraintes').val();
                console.log(contraintes);

                console.log(
                    `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, récrire moi en 3 paragraphes les spécifications techniques (${contraintes}) que le client souhaite avoir sur son site`
                );
                if (contraintes) {
                    $('#iatext_constraintsAi').val(
                        `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, récrire moi en 3 paragraphes les spécifications techniques (${contraintes}) que le client souhaite avoir sur son site`
                    ).prop('title',
                        `étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, récrire moi en 3 paragraphes les spécifications techniques (${contraintes}) que le client souhaite avoir sur son site`
                    ).trigger('input');
                } else {
                    $('#iatext_constraintsAi').val(
                        ``
                    ).prop('title',
                        ``
                    ).trigger('input');
                }


                if ($('#iatext_constraintsAi').val() && !$('#iatext_constraints').val()) {

                    // TODO
                    $('#iatext_constraints').text('');
                    $('#iatext_constraintsAi-generate').click();
                }
            });
        });

        function generateByAi(element, step) {
            $(`#${element}Ai`).on("input", function() {
                if ($(`#${element}Ai`).val().trim().length > 3) {
                    $(`#${element}Ai-generate`).prop("disabled", false);
                } else {
                    $(`#${element}Ai-generate`).prop("disabled", true);
                }
            });
            if (!$(`#${element}Ai-generate`).data('errorCount')) {
                $(`#${element}Ai-generate`).data('errorCount', 0);
            }

            $(`#${element}Ai-generate`).click(function() {
                $(`#${element}Ai-generate`).html(
                    `<i class="ti ti-loader rotate"></i> &nbsp; Chargement ...`);
                $(`#${element}Ai-generate`).prop("disabled", true);
                $(`#${element}`).text('');
                var promptText = $(`#${element}Ai`).val();
                $(`#${element}`).text('loading');
                $.ajax({
                    url: '',
                    type: 'GET',
                    data: {
                        prompt: promptText
                    },
                    success: function(response) {
                        $(`#${element}Ai-generate`).html(
                            ` <i class="ti ti-file-text-ai"></i> &nbsp; Générer`);
                        $(`#${element}Ai-generate`).prop("disabled", false);
                        $(`#${element}`).text(response);
                        window.localStorage.setItem('askToChatGpt', element);
                        $(`#next-step-${step}`).removeClass('disabled');
                        $(`#icon-next-step-${step}`).removeClass().addClass('ti ti-arrow-right');
                        console.log('success');
                    },
                    error: function(xhr, status, error) {
                        let errorCount = $(`#${element}Ai-generate`).data('errorCount');
                        if (errorCount < 5) { // Check if error count is less than 5
                            errorCount++; // Increment error count
                            $(`#${element}Ai-generate`).data('errorCount', errorCount);
                            setTimeout(() => {
                                $(`#${element}Ai-generate`).html(
                                    `<i class="ti ti-file-text-ai"></i> &nbsp; Générer`);
                                $(`#${element}Ai-generate`).prop("disabled", false);
                                $(`#${element}Ai-generate`).click();
                            }, 10000);
                        } else {
                            $(`#${element}`).text("error");
                            console.error("Error occurred 5 times. Stopping further error handling.");
                        }
                        console.error({
                            xhr,
                            status,
                            error
                        });
                    }
                });
            });

            $('input[name="has_website"]').change(function() {
                if ($(this).val() === 'oui') {
                    $('#websiteInput').show();
                } else {
                    $('#websiteInput').hide();
                }
            });

        }

        const designations = ['installation-environnement', 'integration-structure', 'ebauche-textes-traductions',
            'maquettage-graphique', 'developpement-integrations-web', 'integration-textes-images',
            'integration-autres-pages', 'optimisation-version-mobile', 'integration-multilingue',
            'optimisation-seo', 'suivi-tests', 'gestion-projet'
        ];

        function calculTotal() {
            let total = 0;
            let totalItem;
            designations.forEach(element => {
                totalItem = $(`#total-${element}`).val() ? parseFloat($(`#total-${element}`).val()) : 0;
                total += totalItem;
            });
            let remise_exceptionnelle = $('#remise-exceptionnelle').val() ? parseFloat($(`#remise-exceptionnelle`).val()) :
                0;;

            $('#total-total').val((total - remise_exceptionnelle).toFixed(2))
        }

        function calculMaintenance() {
            let pourcentageMaintenance = $('#pourcentage-operation-maintenance').val() ? parseFloat($(
                `#pourcentage-operation-maintenance`).val()) : 0;
            let total = $(`#total-total`).val() ? parseFloat($(`#total-total`).val()) : 0;
            let percentageAmount = (pourcentageMaintenance / 100) * total;
            $('#pourcentage-value-maintenance').val((percentageAmount).toFixed(2));
        }

        function calculReste() {
            for (let i = 1; i < 11; i++) {
                let total = $(`#total-total`).val() ? parseFloat($(`#total-total`).val()) : 0;
                let percentageNumber = $(`#pourcentage-operation-${i}`).val();
                var percentageAmount = (percentageNumber / 100) * total;
                $(`#pourcentage-value-${i}`).val((percentageAmount).toFixed(2));
                let reste = 0;
                let totalAvance = 0;
                for (let i = 1; i < 11; i++) {
                    let avanceValue = $(`#pourcentage-value-${i}`).val() ?
                        parseFloat($(`#pourcentage-value-${i}`).val()) : 0;
                    totalAvance += avanceValue;
                }
                $('#reste').val((total - totalAvance).toFixed(2));
            }
        }
        </script>
  
       
       
    
   
 
@endsection