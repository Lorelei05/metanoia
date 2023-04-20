<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         @vite(['resources/css/usuario.scss', 'resources/js/usuario.js'])
        
        <title>Metanoia</title>
        <div class="container">
          <div class="user-profile-area">
           <div class="task-manager">BIENVENIDO</div>
           <div class="side-wrapper">
            <div class="user-profile">
             <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="user-photo">
             <div class="user-name">Nombre de usurio</div>
             <div class="user-mail">correo de usurio</div>
            </div>
            <div class="user-notification">
             <div class="notify">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="currentColor">
               <path d="M13.533 5.6h-.961a.894.894 0 01-.834-.57.906.906 0 01.197-.985l.675-.675a.466.466 0 000-.66l-1.32-1.32a.466.466 0 00-.66 0l-.676.677a.9.9 0 01-.994.191.906.906 0 01-.56-.837V.467A.467.467 0 007.933 0H6.067A.467.467 0 005.6.467v.961c0 .35-.199.68-.57.834a.902.902 0 01-.983-.195L3.37 1.39a.466.466 0 00-.66 0L1.39 2.71a.466.466 0 000 .66l.675.675c.25.25.343.63.193.995a.902.902 0 01-.834.56H.467A.467.467 0 000 6.067v1.866c0 .258.21.467.467.467h.961c.35 0 .683.202.834.57a.904.904 0 01-.197.984l-.675.676a.466.466 0 000 .66l1.32 1.32a.466.466 0 00.66 0l.68-.68a.894.894 0 01.994-.187.897.897 0 01.556.829v.961c0 .258.21.467.467.467h1.866c.258 0 .467-.21.467-.467v-.961c0-.35.202-.683.57-.834a.904.904 0 01.984.197l.676.675a.466.466 0 00.66 0l1.32-1.32a.466.466 0 000-.66l-.68-.68a.894.894 0 01-.187-.994.897.897 0 01.829-.556h.961c.258 0 .467-.21.467-.467V6.067a.467.467 0 00-.467-.467zM7 9.333C5.713 9.333 4.667 8.287 4.667 7S5.713 4.667 7 4.667 9.333 5.713 9.333 7 8.287 9.333 7 9.333z" /></svg>
             </div>
             
             <div class="notify alert">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
               <path d="M467.812 431.851l-36.629-61.056a181.363 181.363 0 01-25.856-93.312V224c0-67.52-45.056-124.629-106.667-143.04V42.667C298.66 19.136 279.524 0 255.993 0s-42.667 19.136-42.667 42.667V80.96C151.716 99.371 106.66 156.48 106.66 224v53.483c0 32.853-8.939 65.109-25.835 93.291L44.196 431.83a10.653 10.653 0 00-.128 10.752c1.899 3.349 5.419 5.419 9.259 5.419H458.66c3.84 0 7.381-2.069 9.28-5.397 1.899-3.329 1.835-7.468-.128-10.753zM188.815 469.333C200.847 494.464 226.319 512 255.993 512s55.147-17.536 67.179-42.667H188.815z" /></svg>
             </div>
            </div>
            <div class="progress-status"></div>
            <div class="progress">
             <div class="progress-bar"></div>
            </div>
            <div class="task-status">
             
             
             <div class="task-stat">
           
             </div>
            </div>
           </div>
           <div class="side-wrapper">
            <div class="project-title">Menu</div>
            <div class="project-name">
             <div class="project-department">Historial</div>
             <div class="project-department">Consejos</div>
             <div class="project-department">Nosotros</div>
            </div>
           </div>
           <div class="side-wrapper">
            <div class="project-title">Nosotros</div>
            <div class="team-member">
             <img src="https://images.unsplash.com/flagged/photo-1574282893982-ff1675ba4900?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="" class="members">
             <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members">
             <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" class="members">
             <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=998&q=80" alt="" class="members">
             <img src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="" class="members">
            </div>
           </div>
          </div>
          <div class="main-area">
           <div class="header">
            <div class="search-bar">
             <input type="text" placeholder="Buscar...">
            </div>
            <div class="">
            
             <div class="">
             
             </div>
             
            </div>
            <div class="color-menu">
            </div>
           </div>
           <div class="main-container">
            <div class="inbox-container">
             <div class="inbox">
              <div class="msg msg-department anim-y">
              Historial
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                  <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" /></svg>
                
              </div>
              <div class="msg selected-bg anim-y">
               <input type="checkbox" name="msg" id="mail1" class="mail-choice" checked>
               <label for="mail1"></label>
               <div class="msg-content">
                <div class="msg-title">Sensor registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
              </div>
                </div>
              <div class="msg anim-y">
               <input type="checkbox" name="msg" id="mail2" class="mail-choice">
               <label for="mail2"></label>
               <div class="msg-content">
                <div class="msg-title">Pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
              </div>
             </div>
              <div class="msg selected-bg anim-y">
               <input type="checkbox" name="msg" id="mail3" class="mail-choice" checked>
               <label for="mail3"></label>
               <div class="msg-content">
                <div class="msg-title">Pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
              </div>
             </div>
              <div class="msg anim-y">
               <input type="checkbox" name="msg" id="mail4" class="mail-choice">
               <label for="mail4"></label>
               <div class="msg-content">
                <div class="msg-title">Pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
              </div>
             </div>
              <div class="msg anim-y">
               <input type="checkbox" name="msg" id="mail5" class="mail-choice">
               <label for="mail5"></label>
               <div class="msg-content">
                <div class="msg-title"> pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
              </div>
             </div>
              <div class="msg anim-y">
               <input type="checkbox" name="msg" id="mail6" class="mail-choice">
               <label for="mail6"></label>
               <div class="msg-content">
                <div class="msg-title">pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
               </div>
               </div>
              <div class="msg anim-y">
               <input type="checkbox" name="msg" id="mail7" class="mail-choice">
               <label for="mail7"></label>
               <div class="msg-content">
                <div class="msg-title">Pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
               </div>
              </div>
              <div class="msg anim-y">
               <input type="checkbox" name="msg" id="mail8" class="mail-choice">
               <label for="mail8"></label>
               <div class="msg-content">
                <div class="msg-title">Pulso registrado</div>
                <div class="msg-date">22 Feb, 2019</div>
               </div>
              </div>
             </div>
            
            </div>
            <div class="mail-detail">
             <div class="mail-detail-header">
              <div class="mail-detail-profile">
               <div class="mail-detail-name">CONSEJOS</div>
              </div>
              <div class="mail-icons">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" /></svg>
            </div>
             </div>
             <div class="mail-contents">
              <div class="mail-contents-subject">
               
              </div>
              <div class="mail">
              
               <div class="mail-checklist">
                <label for="mail30">Ejercicio</label>
               </div>
             
               <div class="mail-inside">El ejercicio es una de las cosas más importantes que puedes hacer para combatir el estrés.<br>

                Puede parecer contradictorio, pero poner el cuerpo en estrés físico mediante el ejercicio puede aliviar el estrés mental.<br>
                Los beneficios son mayores cuando haces ejercicio regularmente.  Las personas que se ejercitan regularmente tienen menos probabilidad de experimentar ansiedad que aquellas que no lo hacen.
                <br>Existen unas cuantas razones para esto:<br>
                <ul style="list-style-image:url(corazon.png);">
                  <li>Hormonas del estrés: A largo plazo, el ejercicio reduce las hormonas del estrés de tu cuerpo; como el cortisol. También ayuda a liberar endorfinas, las cuales son químicos que mejoran tu estado de ánimo y actúan como un analgésico natural.</li>
                  <li> Sueño: El ejercicio también puede mejorar la calidad del sueño, el cual se puede ver afectado negativamente por el estrés y la ansiedad.</li>
                  <li> Confianza: Cuando haces ejercicio regularmente, te puedes sentir más competente y seguro de tu cuerpo, lo que a la vez promueve el bienestar mental.</li>
                </ul>
                Intenta encontrar una rutina de ejercicios o actividad que disfrutes, como caminar, bailar, montañismo o hacer yoga.

                <br>Las actividades, como caminar o trotar, que involucran movimientos repetitivos de grandes grupos de músculos pueden aliviar el estrés.
               </div>
               
              
               <div class="mail-doc">
                <div class="mail-doc-wrapper">
                
                </div>
                <div class="mail-doc-icons">
               </div>
               </div>
              </div>
            
               <div class="mail">
                <div class="mail-checklist">
                  <label for="mail30">Enciende una vela</label>
                
                 </div>
                
                <div class="mail-inside">
                  Los aceites esenciales o prender una vela aromática pueden ayudar a reducir tu sensación de estrés o ansiedad.
<br>
                  Algunos aromas son especialmente calmantes. Aquí puedes ver una lista de los aromas que más calman:
                  <ul style="list-style-image:url(corazon.png);">
                    <li>
                      lavanda
                    </li>
                    <li> 
                      rosas  
                    </li>
                    <li> 
                      vetiver
                    </li>
                    <li>
                      bergamota
                    </li>
                    <li> 
                      camomila romana  
                    </li>
                    <li> 
                      flores de naranja  
                    </li>
                    <li> 
                      incienso  
                    </li>
                    <li> 
                      sándalo
                    </li>
                    <li>
                      ylang ylang
                    </li>
                    <li> 
                      naranja o flor de azahar
                    </li>
                    <li> 
                      geranio
                    </li>
                  </ul>
                  Utilizar aromas para tratar tu estado de ánimo se llama aromaterapia. Varios estudios demuestran que la aromaterapia puede disminuir la ansiedad y mejorar el sueño.<br> Compra ashwagandha, suplementos de omega-3, té verde y bálsamo de limón en línea.
                </div>
                  
               <div class="mail-doc">
                <div class="mail-doc-wrapper">
                
                </div>
                <div class="mail-doc-icons">
               </div>
               </div>
              </div>

              <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Considera los suplementos</label>
                </div>
              
                <div class="mail-inside">Varios suplementos promueven la reducción del estrés y la ansiedad. Encontrarás aquí un breve resumen de algunos de los más comunes:
                 <ul style="list-style-image:url(corazon.png);">
                  <li>
                    Bálsamo de limón: El bálsamo de limón pertenece a la familia de la menta que ha sido estudiada por sus efectos contra la ansiedad.
                   </li>  
                  <li> 
                    Ácidos grasos Omega 3: Un estudio demostró que los estudiantes de medicina que recibieron suplementos de omega 3 experimentaron una reducción del 20% en los síntomas de la ansiedad.
                  </li>
                   <li> 
                    Ashwagandha: La ashwagandha es una hierba que se usa en la medicina ayurvédica para tratar el estrés y la ansiedad. Varios estudios sugieren que es efectiva.
                   </li>
                   <li>
                    Té verde: El té verde contiene muchos antioxidantes polifenólicos, que proporcionan beneficios a la salud. Puede reducir el estrés y la ansiedad al incrementar los niveles de serotonina. 
                  </li>  
                  <li> 
                    Valeriana: La raíz de valeriana es una popular ayuda para dormir, debido a su efecto tranquilizante. Contiene ácido valerénico, el cual altera los receptores de ácido gama-aminobutíricos (GABA, en inglés) para reducir la ansiedad.  
                  </li>
                   <li> 
                    Kava: La kava es un miembro psicoactivo de la familia de la pimienta. Se ha utilizado como sedante en el Pacífico Sur, y se está usando cada vez más en Europa y en EE. UU. para tratar el estrés y la ansiedad moderados. 
                  </li>
                 </ul>
                 Algunos suplementos pueden interactuar con los medicamentos o tener efectos secundarios, así que deberías consultar con un médico si tienes alguna afección.
<br>
                 Compra ashwagandha, suplementos de omega-3, té verde y bálsamo de limón en línea.  </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>
             
               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Reduce tu ingesta de cafeína</label>
                </div>
              
                <div class="mail-inside">
                  La cafeína es un estimulante que se encuentra en el café, té, chocolate y en las bebidas energizantes. Altas dosis pueden incrementar la ansiedad.
<br>
Las personas tienen diferentes umbrales para la cantidad de cafeína que pueden tolerar.
<br>
Si observas que la cafeína te pone nervioso o ansioso, considera dejar de consumirla.
<br>
Aunque muchos estudios demuestran que el café puede ser saludable con moderación, esto no aplica para todos. En general, cinco o menos tazas al día se consideran una cantidad moderada.
                 </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>
             
               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Masticar goma de mascar</label>
                </div>
              
                <div class="mail-inside">
                  Para un alivio del estrés súper fácil y rápido prueba masticar una barra de goma de mascar.
<br>
                  Un estudio demostró que las personas que masticaron goma de mascar tenían un mayor sentido de bienestar y menor estrés.
                 <br> 
                  Una explicación es que masticar goma de mascar ocasiona ondas cerebrales similares a las de las personas relajadas. Otra es que masticar goma de mascar promueve el flujo de sangre a tu cerebro.
                  <br>
                  Adicionalmente, un estudio reciente demostró que el alivio del estrés era mayor cuando las personas masticaban con más fuerza.
                  <br>
                  Compra goma de mascar en línea.  
                </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>
             
               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30"> Pasa tiempo con tus amigos y familiares</label>
                </div>
              
                <div class="mail-inside">
                  El apoyo social de los amigos y la familia puede ayudarte a sobrellevar los momentos estresantes.
<br>
                  Ser parte de una red de amigos te da sensación de pertenencia y autoestima, lo que puede ayudarte en momentos difíciles.
                  <br>
                  Un estudio determinó que, para las mujeres en particular, pasar tiempo con los amigos y los hijos ayuda a liberar oxitocina, un relajante natural. Este efecto se llama “cuidar y hacer amigos” y es contrario a la respuesta de lucha o huida.
                  <br>
                  Ten presente que tanto los hombres como las mujeres se benefician de la amistad.
                  <br>
                  Otro estudio determinó que los hombres y las mujeres con menos relaciones sociales tenían más probabilidad de sufrir depresión y ansiedad.  
                </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>

               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Ríe</label>
                </div>
              
                <div class="mail-inside">Es difícil sentir ansiedad cuando te ríes. Es bueno para tu salud y existen algunas formas en que puede ayudar a liberar el estrés:
                 <ul style="list-style-image:url(corazon.png);">
                   <li>
                    Reduce tu respuesta al estrés.
                   </li>
                    <li> 
                      Reduce la tensión al relajar tus músculos.  
                    </li>  </ul>
                    A largo plazo, la risa también puede ayudarte a mejorar tu sistema inmunitario y tu estado de ánimo.
<br>
                    Un estudio entre personas con cáncer determinó que las personas en el grupo de la risa experimentaron mayor reducción del estrés que las que simplemente estaban distraídas.
                    <br>
                    Intenta ver un programa de televisión divertido o pasar tiempo con amigos que te hagan reír.</div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>

               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Aprende a decir no</label>
                </div>
              
                <div class="mail-inside">
                  No tienes control sobre todo lo que te estresa, pero sí puedes controlar algunos factores.
<br>
                  Toma control de los aspectos de tu vida que puedes cambiar y que te ocasionan estrés.
                  <br>
                  Una manera de hacerlo es decir “no” con más frecuencia.
                  <br>
                  Esto es especialmente cierto si te das cuenta que aceptas más de lo que puedes manejar. Asumir demasiadas responsabilidades te puede dejar con la sensación de agobio.
                  <br>
                  Ser selectivo con lo que aceptas, y decir no a cosas que incrementarán tu carga innecesariamente, puede reducir tus niveles de estrés.  
                </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>

               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Aprende a evitar la procrastinación</label>
                </div>
              
                <div class="mail-inside">
                  Otra forma de controlar tu estrés es tener control de tus prioridades y dejar de postergar las cosas.
                  <br>
                  La postergación puede ocasionar que actúes de manera reactiva, lo que te hará tambalear para lograr hacerlo todo. Esto puede ocasionar estrés, lo cual afecta negativamente tu salud y la calidad del sueño.
                  <br>
                  Hazte el hábito de preparar una lista de pendientes, organizada por prioridad. Date plazos realistas y trabaja en tu lista.
                  <br>
                  Trabaja en las cosas que necesitas hacer hoy y hazlo en forma ininterrumpida. Cambiar de una tarea a otra o realizar muchas a la vez puede ser estresante también.

                </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>

               <div class="mail">
              
                <div class="mail-checklist">
                 <label for="mail30">Practica la conciencia plena</label>
                </div>
              
                <div class="mail-inside">
                  La conciencia plena o mindfulness describe prácticas que te fijan en el momento presente.
                  <br>
Puede ayudarte a combatir los efectos de los pensamientos negativos que inducen la ansiedad.
<br>
Existen varios métodos para incrementar tu conciencia plena, incluyendo la terapia cognitiva basada en la conciencia plena, la reducción del estrés basada en la conciencia plena, el yoga y la meditación.
<br>
Un estudio reciente en los estudiantes universitarios sugirió que la conciencia plena puede ayudar a incrementar la autoestima, la que a su vez reduce los síntomas de ansiedad y depresión. </div>
                
               
                <div class="mail-doc">
                 <div class="mail-doc-wrapper">
                 
                 </div>
                 <div class="mail-doc-icons">
                </div>
                </div>
               </div>

            </div>
            