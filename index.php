<?php require 'partials/header.php'; ?>

<main>
    <section class="me flex">
        <p>Salut, moi c'est </p>
        <h1>Julien Michon.</h1>
        <h2>Designer devenu développeur;</h2>
        <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, quasi nesciunt! Quaerat id, mollitia veritatis distinctio vitae, dolor perferendis voluptates culpa explicabo tempora ipsum at impedit consequatur? Odit, laboriosam soluta!</p>
    </section>

    <section class="about flex">
        <div class="titleSection flex">
            <h2><span>01.</span> A propos</h2>
            <div class="lineParag"></div>
        </div>

        <div class="sectionContent">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum magni natus, facilis sunt autem mollitia! Illo suscipit quis quam tempore quia! Dolorem doloremque eos eveniet quia sunt, qui repellat molestiae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum magni natus, facilis sunt autem mollitia! Illo suscipit quis quam tempore quia! Dolorem doloremque eos eveniet quia sunt, qui repellat molestiae.</p>
            <p>Voici les technologies que j'utilise dans mes projets :</p>
            <div class="techno">
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>C#</li>
                </ul>
                <ul>
                    <li>PHP</li>
                    <li>Java</li>
                    <li>Laravel</li>
                    <li>React</li>
                </ul>
            </div>
        </div>
        <div class="photo">

        </div>
    </section>

    <?php require 'partials/02-experiences.php' ?>
</main>

<?php require 'partials/footer.php'; ?>