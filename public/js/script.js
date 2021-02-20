function ajax(url, data = "") {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.state === 4 && this.status === 200) {
            return this.responseText;
        }
    };

    xttp.open("GET", url + data, true);
    xttp.send();
}

document.getElementById("filter").addEventListener("click", function () {
    document.getElementById("filterForm").classList.toggle("d-none");
});

document.getElementById("show").addEventListener("click", function () {
    const dateFrom = document.getElementById("dateFrom");
    const dateTo = document.getElementById("dateTo");
    const kategori = document.getElementById("kategori");
    const admin = document.getElementById("admin");
    const url = "localhost:8000/transaksi";
    const data = `?dateFrom=${dateFrom}&dateTo=${dateTo}&kategori=${kategori}&admin=${admin}`;
    console.log(url + "");

    if (document.getElementById("dateFrom").value != "") {
        var dateFrom = "&dateFrom=" + this.value;
    } else {
        var dateFrom = "ok";
    }
    console.log(dateFrom);
});
