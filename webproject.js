let playerText = document.getElementById("playerText");
let restartBtn = document.getElementById("restartBtn");
let boxes = Array.from(document.getElementsByClassName("box"));

let winnerIndicator = getComputedStyle(document.body).getPropertyValue("--winning-blocks");

const O_TEXT = "O";
const X_TEXT = "X";
let currentPlayer = X_TEXT;
let spaces = Array(9).fill(null);
let gameOver = false;

const startGame = () => {
  boxes.forEach((box) => box.addEventListener("click", humanMove));
};

function humanMove(e) {
  if (gameOver) {
    return; // Ignore clicks if the game is over
  }

  const id = e.target.id;
  console.log(id);

  if (!spaces[id]) {
    spaces[id] = currentPlayer;
    e.target.innerText = currentPlayer;

    checkForWinner();
    checkForTieGame();

    // Switch current player
    currentPlayer = currentPlayer === X_TEXT ? O_TEXT : X_TEXT;

    // Introduce a delay before AI makes a move
    setTimeout(() => {
      if (!gameOver) {
        makeRandomMove(currentPlayer);
      }
    }, 500); // Adjust the delay time as needed
  }
}

function boxClicked(id) {
  if (!spaces[id]) {
    spaces[id] = currentPlayer;
    boxes[id].innerText = currentPlayer;

    checkForWinner();
    checkForTieGame();

    // Switch current player
    currentPlayer = currentPlayer === X_TEXT ? O_TEXT : X_TEXT;

    // Introduce a delay before AI makes a move
    setTimeout(() => {
      if (!gameOver) {
        makeRandomMove(currentPlayer);
      }
    }, 500); // Adjust the delay time as needed
  }
}

const winningCombos = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

function checkForWinner() {
    for (const condition of winningCombos) {
      let [a, b, c] = condition;
  
      if (spaces[a] && spaces[a] === spaces[b] && spaces[a] === spaces[c]) {
        playerText.innerHTML = `${spaces[a]} has won!`; // Use spaces[a] instead of currentPlayer
        let winning_blocks = condition;
  
        winning_blocks.map((box) => (boxes[box].style.backgroundColor = winnerIndicator));
        // disable the boxes once a winning combo has been found
        boxes.forEach((box) => box.removeEventListener("click", boxClicked));
        gameOver = true;
        return;
      }
    }
  }

function checkForTieGame() {
  if (spaces.every((space) => space !== null) && !gameOver) {
    playerText.innerHTML = "It's a tie game!";
    gameOver = true;
  }
}

restartBtn.addEventListener("click", restart);

function restart() {
  spaces.fill(null);

  boxes.forEach((box) => {
    box.innerText = "";
    box.style.backgroundColor = "";
    // re-enable the boxes when the game is restarted
    box.addEventListener("click", boxClicked);
  });

  playerText.innerHTML = "Tic Tac Toe";

  currentPlayer = X_TEXT;
  gameOver = false;
}

// Generate a random number between 0 and 8
const getRandomMove = () => {
  return Math.floor(Math.random() * 9);
};

// Check if a box is empty or not
const isEmpty = (index) => {
  return spaces[index] === null;
};

// ...

// Make a random move for the AI player
const makeRandomMove = () => {
    // Check if there are any empty boxes left
    if (spaces.some((space) => space === null)) {
      let index = getRandomMove();
      while (!isEmpty(index)) {
        index = getRandomMove();
      }
      spaces[index] = O_TEXT;
      boxes[index].innerText = O_TEXT;
      checkForWinner();
      currentPlayer = X_TEXT; // Switch back to human player
    }
  };
  
  // ...
  

startGame();
