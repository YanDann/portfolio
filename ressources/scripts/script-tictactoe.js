let playerXplaying = true;
let playerOplaying = false;

let isgamerunning = true;

let randominterval;

let game = [];
game.length = 9;

let whoplay = document.querySelector('#whoplay');

let cases = document.querySelectorAll('.square');

let scoreO = 0;
let scoreX = 0;

cases.forEach(function (gamecase) {
    gamecase.addEventListener('click', function () {
        if (isgamerunning == true) {
            if (playerXplaying == true && gamecase.textContent != "X" && gamecase.textContent != "O") {
                gamecase.textContent = "X";
                gamecase.style.color = "#64ffda";
                gamecase.style.fontSize = "130%";
                playerXplaying = false;
                playerOplaying = true;
                i = gamecase.dataset.cell;
                game[i] = "X";
            } else if (playerOplaying == true && gamecase.textContent != "X" && gamecase.textContent != "O") {
                gamecase.textContent = "O";
                gamecase.style.color = "#64ffda";
                gamecase.style.fontSize = "130%";
                playerXplaying = true;
                playerOplaying = false;
                i = gamecase.dataset.cell;
                game[i] = "O";
            }

            playerXplaying == true ? whoplay.textContent = "Le joueur X joue !" : whoplay.textContent = "Le joueur O joue !";

            let playeXscore = document.querySelector('.scoreX');
            let playeOscore = document.querySelector('.scoreO');

            // Condition WIN pour le joueur X
            if (game[0] == 'X' && game[0] == game[1] && game[0] == game[2] && game[0] != null && game[1] != null && game[2] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[0] == 'X' && game[0] == game[3] && game[0] == game[6] && game[0] != null && game[3] != null && game[6] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[3] == 'X' && game[3] == game[4] && game[3] == game[5] && game[3] != null && game[4] != null && game[5] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[6] == 'X' && game[6] == game[7] && game[6] == game[8] && game[6] != null && game[7] != null && game[8] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[1] == 'X' && game[1] == game[4] && game[1] == game[7] && game[1] != null && game[4] != null && game[7] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[2] == 'X' && game[2] == game[5] && game[2] == game[8] && game[2] != null && game[5] != null && game[8] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[0] == 'X' && game[0] == game[4] && game[0] == game[8] && game[0] != null && game[4] != null && game[8] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }
            if (game[2] == 'X' && game[2] == game[4] && game[2] == game[6] && game[2] != null && game[4] != null && game[6] != null) {
                whoplay.textContent = "Le joueur X à gagné !";
                scoreX++;
                playeXscore.textContent = scoreX;
                isgamerunning = false;
            }

            // Condition WIN pour le joueur 0
            if (game[0] == 'O' && game[0] == game[1] && game[0] == game[2] && game[0] != null && game[1] != null && game[2] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[0] == 'O' && game[0] == game[3] && game[0] == game[6] && game[0] != null && game[3] != null && game[6] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[3] == 'O' && game[3] == game[4] && game[3] == game[5] && game[3] != null && game[4] != null && game[5] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[6] == 'O' && game[6] == game[7] && game[6] == game[8] && game[6] != null && game[7] != null && game[8] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[1] == 'O' && game[1] == game[4] && game[1] == game[7] && game[1] != null && game[4] != null && game[7] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[2] == 'O' && game[2] == game[5] && game[2] == game[8] && game[2] != null && game[5] != null && game[8] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[0] == 'O' && game[0] == game[4] && game[0] == game[8] && game[0] != null && game[4] != null && game[8] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }
            if (game[2] == 'O' && game[2] == game[4] && game[2] == game[6] && game[2] != null && game[4] != null && game[6] != null) {
                whoplay.textContent = "Le joueur O à gagné !";
                scoreO++;
                playeOscore.textContent = scoreO;
                isgamerunning = false;
            }

            // Condition Match nul
            if (isgamerunning == true && game[0] != null && game[1] != null && game[2] != null && game[3] != null && game[4] != null && game[5] != null && game[6] != null && game[7] != null && game[8] != null){
                whoplay.textContent = "Match nul ! Rejouez !";
                isgamerunning = false;
            }
        }
    });

    // Restart de la partie
    let restart = document.querySelector('.restart');

    restart.addEventListener('click', function () {
        whoplay.textContent = "Le Joueur X commence !";
        whoplay.style.color = "#a8b2d1";
        clearInterval(randominterval);
        game = [];
        console.log(game);
        cases.forEach(function (gamecase) {
            gamecase.textContent = "";
            isgamerunning = true;
            playerXplaying = true;
            playerOplaying = false;
        });
    });
});
