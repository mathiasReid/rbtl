document.querySelector('.toggleable').addEventListener("click", result);

function result() {
    let toggleAble = document.querySelectorAll('.toggleable');

    for (let x of toggleAble) {
        x.classList.toggle('active');
    }

}

document.querySelector('.toggleable2').addEventListener("click", result2);

function result2() {
    let toggleAble = document.querySelectorAll('.toggleable2');

    for (let x of toggleAble) {
        x.classList.toggle('active');
    }

}


/*document.querySelector("img").addEventListener("click", closing);

function closing () {
    let closeAble = document.querySelector('.closeable');

    closeAble.classList.toggle('closing');
}*/

