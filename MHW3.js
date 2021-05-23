const KEY = 'AmChAPfiNKbB8dXXlgyw_4z1aAdYZ2A-bNrhJ5VGf5jQrty97t1zIsHcCIGMhdFG';
const latitudine = '37.7602846';
const longitudine ='15.1974313';

function GetMap() {

    const map = new Microsoft.Maps.Map('#map', {
        credentials: KEY,
        center: new Microsoft.Maps.Location(latitudine, longitudine)
    });


    const center = map.getCenter();

    const pin = new Microsoft.Maps.Pushpin(center, {
        color: 'rgba(94, 43, 43, 0.5)',
        title: 'Agenzia pubblicitaria',
        subTitle: 'Mascali.',
    })

    
    map.entities.push(pin);
}
