const flower = document.querySelector('.flower');
flower.onmousedown = function (event) {

    let shiftX = event.clientX - flower.getBoundingClientRect().left;
    let shiftY = event.clientY - flower.getBoundingClientRect().top;

    document.body.append(flower);

    moveAt(event.pageX, event.pageY);

    function moveAt(pageX, pageY) {
        flower.style.left = pageX - shiftX + 'px';
        flower.style.top = pageY - shiftY + 'px';
    }

    function onMouseMove(event) {
        moveAt(event.pageX, event.pageY);
    }


    document.addEventListener('mousemove', onMouseMove);

    flower.onmouseup = function () {
        document.removeEventListener('mousemove', onMouseMove);
        flower.onmouseup = null;
    };

};

flower.ondragstart = function () {
    return false;
};