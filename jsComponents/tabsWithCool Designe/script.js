
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
