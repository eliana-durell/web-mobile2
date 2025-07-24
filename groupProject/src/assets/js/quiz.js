let questions, indexList, questionNums, questionCount, prev, messageOutput;
let corrects, selected = [];
let current = 0;
let attempts = 0;
let correctlyAnswered = 0;
let wrongs = 0;

// shifts current question to the next in the given direction
const shift = (list, cur, dir = 'right') => {
    // update current index for the question
    if (dir === 'right') {
        if (cur != 0) {
            list[cur - 1].classList.add('hidden');
            indexList.children[1].children[cur - 1].classList.remove('curIndex');
        } else if (cur === 0) {
            list[questionCount - 1].classList.add('hidden');
            indexList.children[1].children[questionCount - 1].classList.remove('curIndex');
        }
    }
    
    if (dir === 'left') {
        if (cur != questionCount - 1) {
            list[cur + 1].classList.add('hidden');
            indexList.children[1].children[cur + 1].classList.remove('curIndex');
        } else if (cur === questionCount - 1) {
            list[0].classList.add('hidden');
            indexList.children[1].children[0].classList.remove('curIndex');
        }
    }

    // update the acutal html elements
    list[cur].classList.remove('hidden');
    indexList.children[1].children[cur].classList.add('curIndex');
};

// removes quiz cover and display questions
const startQuiz = () => {
    // show heading
    document.querySelector('h1').classList.remove('hidden');

    // remove cover
    document.getElementsByClassName('cover')[0].classList.add('hidden');

    // get the message html element
    messageOutput = document.querySelector('.message');

    // collect questions
    questions = document.getElementsByClassName('question');
    questionCount = questions.length;

    // update index list
    indexList = document.getElementsByClassName('list')[0];
    indexList.classList.remove('hidden');

    questionNums = document.getElementsByClassName('nums')[0];
    
    // display index
    for (let i = 0; i < questionCount; i++) {
        let indexSpan = document.createElement('span');
        indexSpan.classList.add('index');
        indexSpan.textContent = i + 1;
        questionNums.appendChild(indexSpan);
    }

    // display the first question
    shift(questions, 0);
};

// updates question to the previous one
const goLeft = () => {
    prev = current;
    current = (current === 0) ? questionCount - 1 : current - 1;
    shift(questions, current, 'left');
}

// updates question to the next one
const goRight = () => {
    prev = current;
    current = (current === questionCount - 1) ? 0 : current + 1;
    shift(questions, current);
}

// obtains the correct answers and store them in an array
const obtainCorrectAnswers = (options) => {
    corrects = [];
    for (let option of options) {
        if (option.value === 'correct') {
            corrects.push(option);
        } 
    }
};

// compares the selected answers to the answer array
const compareAnswers = () => {
    let allCorrect = true;

    // loop thru all selected answers
    for (let option of selected) {
        // check if they are correct
        if (corrects.includes(option)) {
            document.querySelector(`label[for="${option.id}"]`).classList.add('correct');
        } else {
            document.querySelector(`label[for="${option.id}"]`).classList.add('incorrect');
            allCorrect = false;

            // update wrong attempt count
            wrongs++;
        }
    }

    // update the index color when all selected answers are correct
    if (allCorrect) {
        questionNums.children[current].classList.add('done');

        // and update correct count
        correctlyAnswered++;
    }
};

// checks the selected answers
const checkAnswer = (type) => {
    let question = questions[current];

    // update attempts
    attempts++;
    
    // check answer depending on the type of question
    if (type === 'radio' || type === 'checkbox') {
        let options = question.querySelectorAll('input');

        // only get the correct answer if this is a "new" question
        if (prev != current) obtainCorrectAnswers(options);

        // get all the selected answers
        selected = [];
        for (let option of options) {
            if (option.checked) {
                selected.push(option);
            } 
        }

        // check them
        compareAnswers();
    } else if (type === 'text') {
        let inputs = question.querySelectorAll('input');

        let allCorrect = true;

        // check the text inputs
        for (let input of inputs) {
            // compare the input and answer
            if (input.value.trim().toLowerCase() === input.dataset.answer) {
                input.classList.remove('incorrect');
                input.classList.add('correct');
            } else {
                allCorrect = false;
                input.classList.remove('correct');
                input.classList.add('incorrect');
            }
        }

        // if all answers are collect, show it!
        if (allCorrect) {
            questionNums.children[current].classList.add('done');

            // and update correct count
            correctlyAnswered++;
        } else {
            // update wrong attempt count
            wrongs++;
        }
    }

    if (correctlyAnswered === questionCount) {
        messageOutput.textContent = `Congrats! You got all the questions correct. Accuracy: ${attempts - wrongs}/${attempts}`;
    }
};