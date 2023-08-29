AOS.init();

//=== start add acordion ===//
const icon = document.querySelectorAll('.services__icon')

const btn = document.querySelectorAll('.services__btn')

for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
//=== end add acordion ===//


//== start add tags ==//
let activeTags = []
const items = document.querySelectorAll('.tags__item')
const inner = document.querySelector('.tags__inner')
const btnClear = document.querySelector('.tags__button')

items.forEach((item) => {
  item.addEventListener('click', () => {
    if (item.classList.contains('active')) {
      return;
    }

    item.classList.add('active')
    activeTags.push(item.textContent)
    const sortItem = document.createElement('span')
    sortItem.classList.add('tags__inner-item')
    sortItem.textContent = item.textContent
    const iconCls = document.createElement('i')
    sortItem.appendChild(iconCls);
    inner.appendChild(sortItem);
    doAjaxQuery(activeTags)


    iconCls.addEventListener('click', () => {
      item.classList.remove('active')
      inner.removeChild(sortItem);
      activeTags = activeTags.filter(item => item !== sortItem.textContent)
      doAjaxQuery(activeTags)

    });

    btnClear.addEventListener('click', () => {
      if (sortItem) {
        item.classList.remove('active')
        inner.removeChild(sortItem);
        activeTags.splice(0, activeTags.length);
        doAjaxQuery(activeTags)
      }
    })
  })
})

//== end add tags ==//


//== start add sort ==//

const value = document.querySelector('.sort__column');
const list = document.querySelector('.sort__column-list')
const option = document.querySelectorAll('.sort__column-item');


option.forEach((item, index) => {
  item.addEventListener('click', () => {
    value.textContent = item.textContent;
    option.forEach((item, index) => {
      item.classList.remove('active');
    })
    item.classList.add('active');
    list.classList.remove('active');
    doAjaxQuery()
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
  if (!e.composedPath().includes(document.querySelector('.sort__column-wrap'))) {
    list.classList.remove('active');
  }
})
//== end add sort ==//

//== start clear search ==//
document.querySelector('.clean-search').addEventListener('click', () => document.querySelector('.sort__search').value = '')
//== end clear search ==//


document.querySelector('.sort__search-button').addEventListener('click', () => {
  doAjaxQuery()
})

function doAjaxQuery(tags) {
  const sort = document.querySelector('.sort__column').textContent.toLocaleLowerCase()
  const search = document.querySelector('.sort__search').value
   const data = {
    'action': 'get_filter_blog',
    'category': tags ? tags.join(',') : activeTags.join(','),
    'sort': sort
  }

  if (search) {
    data.search = search
  }

  $.ajax({
    url: '/wp-admin/admin-ajax.php',
    data: data,
    type: 'POST',
    success: function (data) {
      if (data) {
        document.querySelector('.blog__wrapper').innerHTML = data
      }
    },
  });
}
