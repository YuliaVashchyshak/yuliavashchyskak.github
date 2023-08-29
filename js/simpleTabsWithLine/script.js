const items = document.querySelectorAll('.tabs__item')
const line = document.querySelector('.tabs__line')
const tabTitle = document.querySelector('.tabs__name')
const tabText = document.querySelector('.tabs__text')

//== function for line ==//
const hundleAmimateLine = (item) => {
    item.addEventListener('click', (event) => {
        const target = event.target
        if (target.classList.contains('tabs__item')) {
            const cords = target.getBoundingClientRect()
            line.style.left = `${cords.left}px`
        }
    })
}
//==  delete tab ==//
const removeItem = (icon) => {
    icon.addEventListener('click', () => {
        icon.parentNode.remove()
    });

}

items.forEach(item => {
    hundleAmimateLine(item)
    removeItem(item.querySelector('.icon'))
})


//== checking all tabs for delete active class, except for one ==//
const removeContentActiveClass = () => {
    document.querySelectorAll('.content').forEach(item => {
        item.classList.remove('active')
    })
}

//== switching content according to the selected tab ==//
const tabsController = (item, index) => {
    const content = document.querySelectorAll('.content')
    item.addEventListener('click', () => {
        removeContentActiveClass()
        content[index].classList.add('active')
    })
}
items.forEach((item, i) => {
    tabsController(item, i)
})



