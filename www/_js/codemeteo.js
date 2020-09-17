async function meteo(ville,objDom) {
    const APP_ID="02f607b5ac4083e3e4fc98dff18acf88";    
    //appel à openwatermap
    weather = await fetch("http://api.openweathermap.org/data/2.5/weather?q=" + ville + "&APPID=" + APP_ID + "&lang=fr&units=metric")
        .then(response => response.json())
        .then(data => data);
            
        objDom.innerHTML=debug(weather,"");           
}

function debug(obj,s) {
    s+="<ul>";
    for(prop in obj) {
        if (typeof obj[prop]==="object")
            s+=prop + " : " + debug(obj[prop]) + "<br>";
        else
            s+=prop + " : " + obj[prop] + "<br>";
    }
    s+="</ul>";
    return s;
}