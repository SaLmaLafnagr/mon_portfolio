let timer;
let isRunning = false;
let workSessions = 0;

const timerLabel = document.getElementById('timer-label');
const timeLeft = document.getElementById('time-left');
const startStopBtn = document.getElementById('start-stop');
const resetBtn = document.getElementById('reset');
const taskForm = document.getElementById('task-form');
const newTaskInput = document.getElementById('new-task');
const taskList = document.getElementById('task-list');

startStopBtn.addEventListener('click', startStopTimer);
resetBtn.addEventListener('click', resetTimer);
taskForm.addEventListener('submit', addTask);

function startStopTimer() {
    if (isRunning) {
        clearInterval(timer);
        startStopBtn.textContent = 'Start';
    } else {
        startTimer();
        startStopBtn.textContent = 'Pause';
    }
    isRunning = !isRunning;
}

function startTimer() {
    let duration = timerLabel.textContent === 'Work' ? 25 * 60 : 5 * 60;
    timer = setInterval(() => {
        if (duration <= 0) {
            clearInterval(timer);
            isRunning = false;
            startStopBtn.textContent = 'Start';
            if (timerLabel.textContent === 'Work') {
                workSessions++;
                if (workSessions % 4 === 0) {
                    timerLabel.textContent = 'Long Break';
                    duration = 15 * 60;
                } else {
                    timerLabel.textContent = 'Break';
                    duration = 5 * 60;
                }
            } else {
                timerLabel.textContent = 'Work';
                duration = 25 * 60;
            }
            startStopTimer();
        } else {
            duration--;
            updateTimeLeft(duration);
        }
    }, 1000);
}

function updateTimeLeft(duration) {
    const minutes = Math.floor(duration / 60);
    const seconds = duration % 60;
    timeLeft.textContent = `${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}

function resetTimer() {
    clearInterval(timer);
    isRunning = false;
    timerLabel.textContent = 'Work';
    timeLeft.textContent = '25:00';
    startStopBtn.textContent = 'Start';
    workSessions = 0;
}

function addTask(event) {
    event.preventDefault();
    const taskText = newTaskInput.value.trim();
    if (taskText) {
        const listItem = document.createElement('li');
        const taskSpan = document.createElement('span');
        taskSpan.textContent = taskText;
        taskSpan.classList.add('task');
        listItem.appendChild(taskSpan);

        const editBtn = document.createElement('button');
        editBtn.textContent = 'Edit';
        editBtn.classList.add('edit');
        editBtn.addEventListener('click', () => editTask(taskSpan, editBtn));
        listItem.appendChild(editBtn);

        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Delete';
        deleteBtn.classList.add('delete');
        deleteBtn.addEventListener('click', () => deleteTask(listItem));
        listItem.appendChild(deleteBtn);

        taskList.appendChild(listItem);
        newTaskInput.value = '';
    }
}

function editTask(taskSpan, editBtn) {
    if (editBtn.textContent === 'Edit') {
        const input = document.createElement('input');
        input.type = 'text';
        input.value = taskSpan.textContent;
        taskSpan.replaceWith(input);
        editBtn.textContent = 'Save';
    } else {
        const taskText = taskSpan.nextElementSibling.value.trim();
        if (taskText) {
            taskSpan.textContent = taskText;
            taskSpan.nextElementSibling.replaceWith(taskSpan);
            editBtn.textContent = 'Edit';
        }
    }
}

function deleteTask(listItem) {
    listItem.remove();
}