document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.container');

    const updateCounter = (id, operation) => {
        const counterElement = document.querySelector(`#counter-${id} p`);
        let currentValue = parseInt(counterElement.textContent, 10);

        if (operation === 'increment') {
            currentValue += 1;
        } else if (operation === 'decrement' && currentValue > 0) {
            currentValue -= 1;
        }

        counterElement.textContent = currentValue;
    };

    container.addEventListener('click', (event) => {
        const target = event.target;

        if (target.classList.contains('btn-plus')) {
            const counterElement = target.closest('.row').querySelector('.fw-bold p');
            let currentValue = parseInt(counterElement.textContent, 10);
            counterElement.textContent = currentValue + 1;
        } else if (target.classList.contains('btn-minus')) {
            const counterElement = target.closest('.row').querySelector('.fw-bold p');
            let currentValue = parseInt(counterElement.textContent, 10);
            if (currentValue > 0) {
                counterElement.textContent = currentValue - 1;
            }
        }
    });
});