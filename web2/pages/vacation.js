async function getLocations() {
    try {
        const result = await fetch("http://localhost/php72/web2/data/locations.php")
        const data = await result.json();
        draw(data)
    } catch (ex) {
        alert("error!!!!!")
    }
}

function draw(locations) {
    if (!Array.isArray(locations)) return;
    const locationsSelectUi = document.querySelector("#locationsSelectUi");
    locationsSelectUi.innerHTML = "";
    const optionsUi = locations.map(getOption);
    locationsSelectUi.append(...optionsUi)
    function getOption(optionString) {
        const option = document.createElement("option")
        option.id = optionString;
        option.value = optionString
        option.innerText = optionString;
        return option;
    }

}

function init() {
    getLocations()
}
init();