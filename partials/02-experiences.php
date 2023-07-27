<?php
require 'config/functions.php';

?>
<div>
    <section class="experiences flex" data-aos="fade-up" data-aos-duration="2000">
        <div class="titleSection flex">
            <div class="lineParag"></div>
            <h2><span>02.</span> Mes expériences</h2>
        </div>

        <div class="flex">
            <div class="xp-menu">
                <button style="border-left: 2px #64ffda solid; color: #64ffda; transition: 500ms" id="b1" onclick="experiences('EDFENR')">EDF ENR</button>
                <button id="b2" onclick="experiences('Freelance')">Freelance</button>
                <button id="b3" onclick="experiences('C.R.V.M')">C.R.V.M</button>
                <button id="b4" onclick="experiences('Ayctor')">Ayctor</button>
                <button id="b5" onclick="experiences('Defta')">Defta</button>
            </div>

            <div class="sectionContent">
                <h2 class="experiencesH2 flex"> <p id="h2-xp-script" >Dessinateur de plan </p><span id="span-xp-script">@ </span><a href="https://www.edfenr.com/" target="_blank" id="entreprise-xp-script">EDF ENR</a></h2>
                <h3 id="h3-xp-script">Septembre 2022 - Fevrier 2023</h3>
                <p id="p-xp-script">Conception & modélisation de plan sur AutoCAD afin d’accueillir des panneaux photovoltaïques en zone rurale, urbaine & pour ZFE</p>
            </div>
        </div>
    </section>
    <!-- <div class="backgroundWork" data-aos="fade-up" data-aos-duration="2000"></div> -->
    <div id="jobs"></div>
</div>