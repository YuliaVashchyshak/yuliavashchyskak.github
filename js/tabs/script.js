const items = document.querySelectorAll('.tabs__item')
const content = document.querySelectorAll('.content')
const line = document.querySelector('.tabs__line')
const modal = document.querySelector('.modal')
const modalClose = document.querySelector('.modal__close')
const saveTab = document.querySelector('.save__tabs')
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

//== open modal ==//
const addBtn = document.querySelector('.tabs__add')
addBtn.addEventListener('click', () => {
    modal.classList.add('active')
})

//== delete modal ==//
modalClose.addEventListener('click', () => {
    modal.classList.remove('active')
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

//== after error delete border ==//
tabTitle.addEventListener('keyup', () => {
    if (tabTitle.value) {
        tabTitle.classList.remove('error')
    }
})
tabText.addEventListener('keyup', () => {
    if (tabText.value) {
        tabText.classList.remove('error')
    }
})

//== add new tab with own content ==//
saveTab.addEventListener('click', () => {
    const tabsWrap = document.querySelector('.tabs__wrapper')
    const tabsContentWrap = document.querySelector('.tabs-content-wrapper')
    const newItem = document.createElement('button')
    const newContent = document.createElement('div')
    const icon = document.createElement('i')

    tabTitle.classList.remove('error')

    tabText.classList.remove('error')

    if (tabTitle.value !== '' && tabText.value !== '') {
        icon.textContent = " ×"
        icon.classList.add('icon')
        newContent.classList.add('content')
        tabsWrap.appendChild(newItem)
        newContent.textContent = tabText.value
        tabsContentWrap.appendChild(newContent)

        //== start add tabs controller ==//
        const contentIndex = document.querySelectorAll('.content').length
        tabsController(newItem, contentIndex - 1)
        //== end add tabs controller ==//

        newItem.classList.add('tabs__item')
        newItem.textContent = tabTitle.value
        newItem.appendChild(icon)
        hundleAmimateLine(newItem)
        removeItem(icon)
        modal.classList.remove('active')
        //== for clean input ==//
        tabTitle.value = ''
        tabText.value = ''
    } else {
        if (tabTitle.value == '') {
            tabTitle.classList.add('error')
        }
        if (tabText.value == '') {

            tabText.classList.add('error')
        }
    }
})
