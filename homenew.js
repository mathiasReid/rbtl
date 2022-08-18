document.querySelector("img").addEventListener("click", result);

function result() {
    let toggleAble = document.querySelector('.toggleable');
    toggleAble.classList.remove('closed-box');
    toggleAble.classList.add('opened-box');
}