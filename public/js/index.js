// Toggle
function Menu(e) {
     // menginisialisasi variabel yang digunakan
    let list = document.querySelector('ul');
    // melakukan pengondisian pada event mengunakan ternarry.
    e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add(
        'opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove(
        'opacity-100'))
}

// Dropdown

// menginsialisasi fungsi yang digunakan
function openDropdown(event, dropdownId) {
    // menginisialisasi variabel yang digunakan
    let element = event.target;

    // melakukan perulangan pada element jika element bukan button
    while (element.nodeName !== "BUTTON") {
        element = element.parentNode;
    }
    // melakukan inisialisasi variabel popper, dan memanggil library popper js
    var popper = Popper.createPopper(element, document.getElementById(dropdownId), {
        placement: 'bottom-start'
    });
    // melakukan eksekusi pada element yang ditentukan menggunakan id
    document.getElementById(dropdownId).classList.toggle("hidden");
    // melakukan eksekusi pada element yang ditentukan menggunakan id
    document.getElementById(dropdownId).classList.toggle("block");
}

// MultiLanguage

// menginsialisasi fungsi yang digunakan
function openDropdown(event, langId) {
    // menginisialisasi variabel yang digunakan
    let element = event.target;
    // melakukan perulangan pada element jika element bukan button
    while (element.nodeName !== "BUTTON") {
        element = element.parentNode;
    }
    // melakukan inisialisasi variabel popper, dan memanggil library popper js
    var popper = Popper.createPopper(element, document.getElementById(langId), {
        placement: 'bottom-start'
    });
    // melakukan eksekusi pada element yang ditentukan menggunakan id
    document.getElementById(langId).classList.toggle("hidden");
     // melakukan eksekusi pada element yang ditentukan menggunakan id
    document.getElementById(langId).classList.toggle("block");
}
