
const titleTab = document.querySelectorAll('.tab-title')
const contentTab = document.querySelectorAll('.tab-content')

titleTab.forEach(item => item.addEventListener('click', event => {
    titleTab.forEach(item => item.classList.remove('active-tab'));
    contentTab.forEach(item => item.classList.add('hiden-tab-content'))

    const titleTabTarget = event.target.getAttribute('data-tab')
    document.getElementById(titleTabTarget).classList.remove('hiden-tab-content')
    item.classList.add('active-tab')
    if (item.classList.add('active-tab')) {
        item.classList.add('active-tab::before')

    }
}))

document.querySelector('[data-tab="tab-1"]').classList.add('active-tab');
document.querySelector('#tab-1').classList.remove('hiden-tab-content');


/////////////////////
const hoverBtn = document.querySelector('.hover-button-wrapper')
const hoverPop = document.querySelector('.popover-hover')

hoverBtn.addEventListener('mouseenter', () => {
    hoverPop.classList.add('active')
})
hoverBtn.addEventListener('mouseleave', () => {
    hoverPop.classList.remove('active')

})


let spiner = document.querySelector('.spiner')
let img = document.createElement('img')
img.classList.add('image__dog')
document.querySelector('.image-wrap').appendChild(img)
const btn =document.querySelector('.spiner-wrap')
const btnWrap = document.querySelector('.spin-button')


btnWrap.addEventListener('click', () => {
    btn.classList.add('active')
    btnWrap.classList.add('disabled')
    $.ajax({
        url: 'https://dog.ceo/api/breeds/image/random',
        method: 'get',
        dataType: 'json',
        success: function (data) {
            btn.classList.remove('active')
            btnWrap.classList.remove('disabled')
            let imgUrl = data.message
            img.src = imgUrl
        }
    });
})

// 1. з перемінної data отримати силку на картинку
// 2. Створити тег img і вставити в нього силку на картинку
// 3. і між запитами хай крутиться спінер