async function getLocations() {
    try {
        const result = await fetch("http://localhost/php72/web2/data/locations.php")
        const data = await result.json();
        const [nights, locations] = data
        draw(locations, "locationsSelectUi")
        draw(nights, "nightsSelectUi")
    } catch (ex) {
        alert("error!!!!!")
    }
}

function draw(data, uiId) {
    if (!Array.isArray(data)) return;
    const dataSelectUi = document.querySelector(`#${uiId}`);
    dataSelectUi.innerHTML = "";
    const optionsUi = data.map(getOption);
    dataSelectUi.append(...optionsUi)
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