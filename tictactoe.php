<?php require 'partials/header.php'; ?>

<link rel="stylesheet" href="__DIR__/../ressources/styles/styleTictactoe.css">

<section class="gameSection flex">
    <h1>Tic Tac Toe !</h1>

    <div class="tictactoe flex">
        <div class="line">
            <div class="square flex" data-cell="0"></div>
            <div class="square horizontal flex" data-cell="3"></div>
            <div class="square flex" data-cell="6"></div>
        </div>
        <div class="line">
            <div class="square vertical flex" data-cell="1"></div>
            <div class="square vertical horizontal flex" data-cell="4"></div>
            <div class="square vertical flex" data-cell="7"></div>
        </div>
        <div class="line">
            <div class="square flex" data-cell="2"></div>
            <div class="square horizontal flex" data-cell="5"></div>
            <div class="square flex" data-cell="8"></div>
        </div>
    </div>

    <h2 id="whoplay">Le Joueur X commence !</h2>

    <div class="restart">
        <button>Relancer la partie</button>
    </div>
    <div class="score flex">
        <div class="scoreplayer">Score joueur X</div>
        <div class="scoreplayer">Score joueur 0</div>
    </div>
    <div class="score flex">
        <div class="scoreX">0</div>
        <div class="scoreO">0</div>
    </div>

    <script src="__DIR__/../ressources/scripts/script-tictactoe.js"></script>
</section>

<?php require 'partials/footer.php'; ?>