console.log('loaded');

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('stock-container');

keyword.addEventListener('keyup', function() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', '../js/ajax/index2.php?keyword=' + keyword.value, true);
    xhr.send();
});