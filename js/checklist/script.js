const items = document.querySelectorAll('.tabs__item')
const inner = document.querySelector('.tabs__inner')

items.forEach((item) => {
    item.addEventListener('click', () => {
        if (item.classList.contains('active')) {
            return; 
        }
        
        item.classList.add('active')
        const sortItem = document.createElement('span')
        sortItem.classList.add('tabs__inner-item')
        sortItem.textContent = item.textContent
        const closeBtn = document.createElement('i')
        sortItem.appendChild(closeBtn);
        inner.appendChild(sortItem);

        closeBtn.addEventListener('click', () => {
            item.classList.remove('active')
            inner.removeChild(sortItem);
        });
    
    })
    
})
