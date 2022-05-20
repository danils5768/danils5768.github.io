function appear(x) {
    document.getElementById("dvd").className="hidden";
    document.getElementById("furniture").className="hidden";
    document.getElementById("book").className="hidden";
    document.getElementById(x.value.toLowerCase()).className="appeared";
    console.log(x.value);
}


