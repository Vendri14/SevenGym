let currentExercise = 0;

function navigateExercise(direction) {
    if (direction === 'next' && currentExercise < 30) {
        currentExercise++;
    } else if (direction === 'previous' && currentExercise > 1) {
        currentExercise--;
    }

    updateExerciseLabel();
}

function updateExerciseLabel() {
    const exerciseLabel = document.querySelector('.exercise-label');
    exerciseLabel.textContent = `Exercise ${currentExercise}`;
}
