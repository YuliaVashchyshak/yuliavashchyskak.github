const value = document.querySelector('.value');
const list = document.querySelector('.option__list')
const option = document.querySelectorAll('.option');


option.forEach((item, index) => {
    item.addEventListener('click', () => {
        value.textContent = item.textContent;
        option.forEach((item, index) => {
            item.classList.remove('active');
        })
        item.classList.add('active');
        list.classList.remove('active');
    })
})



value.addEventListener('click', () => {
    if (list.classList.contains('active')) {
        list.classList.remove('active');
    } else {
        list.classList.add('active');
    }
})


document.addEventListener('click', (e) => {
    if (!e.target.classList.contains('option__list') && !e.target.classList.contains('value')) {
        list.classList.remove('active');
    }
})