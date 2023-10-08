'use strict';
const pigGame = () => {
  const player0El = document.querySelector('.player--0');
  const player1El = document.querySelector('.player--1');

  const score0El = document.querySelector('#score--0');
  const score1El = document.querySelector('#score--1');

  const current0El = document.querySelector('#current--0');
  const current1El = document.querySelector('#current--1');

  const dice = document.querySelector('.dice');

  const btnRoll = document.querySelector('.btn--roll');
  const btnNew = document.querySelector('.btn--new');
  const btnHold = document.querySelector('.btn--hold');

  let activePlayer, currentScore, scores, playing;

  const restart = () => {
    activePlayer = 0;
    currentScore = 0;
    scores = [0, 0];
    playing = true;
    score0El.textContent = 0;
    score1El.textContent = 0;
    dice.classList.add('hidden');

    player0El.classList.remove('player--winner');
    player1El.classList.remove('player--winner');

    player0El.classList.add('player--active');
    player1El.classList.remove('player--active');
  };
  restart();

  const switchPlayer = () => {
    document.querySelector(`#current--${activePlayer}`).textContent = 0;
    activePlayer = activePlayer === 0 ? 1 : 0;
    currentScore = 0;
    player0El.classList.toggle('player--active');
    player1El.classList.toggle('player--active');
  };

  const playMatch = () => {
    if (playing) {
      const diceRoll = Math.floor(Math.random() * 6) + 1;
      dice.src = `dice-${diceRoll}.png`;
      dice.classList.remove('hidden');
      if (diceRoll !== 1) {
        currentScore += diceRoll;
        document.querySelector(`#current--${activePlayer}`).textContent =
          currentScore;
      } else {
        switchPlayer();
      }
    }
  };

  const checkWinner = () => {
    if (playing) {
      scores[activePlayer] += currentScore;
      document.querySelector(`#score--${activePlayer}`).textContent =
        scores[activePlayer];
      if (scores[activePlayer] >= 50) {
        playing = false;
        document
          .querySelector(`.player--${activePlayer}`)
          .classList.remove('player--active');
        document
          .querySelector(`.player--${activePlayer}`)
          .classList.add('player--winner');
      } else {
        switchPlayer();
      }
    }
  };
  btnRoll.addEventListener('click', playMatch);
  btnHold.addEventListener('click', checkWinner);
  btnNew.addEventListener('click', restart);
};
pigGame();
